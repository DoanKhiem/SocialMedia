<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Resources\PostResource;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::query()->latest()->paginate(20);

        return Inertia::render('Home', [
            'posts' => PostResource::collection($posts)
        ]);
    }
}
