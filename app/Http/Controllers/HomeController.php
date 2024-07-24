<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\Http\Resources\PostResource;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $userId = Auth::id();
        $posts = Post::query()
            ->withCount('reactions')
            ->withCount('comments')
            ->with([
                'comments' => function ($query) use ($userId) {
                    $query->withCount('reactions')
                        ->with([
                            'reactions' => function ($query) use ($userId) {
                                $query->where('user_id', $userId);
                            }
                        ]);
                },
                'reactions' => function ($query) use ($userId) {
                    $query->where('user_id', $userId);
                }])
            ->latest()
            ->paginate(20);

        return Inertia::render('Home', [
            'posts' => PostResource::collection($posts)
        ]);
    }
}
