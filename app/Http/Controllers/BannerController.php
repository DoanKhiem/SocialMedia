<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::orderBy('id', 'DESC')->get();
        return view('backend.banners.index', compact('banners'));
    }

    public function bannerStatus(Request $request)
    {
        if ($request->mode == 'true') {
            Banner::where('id', $request->id)->update(['status' => 'active']);
        } else {
            Banner::where('id', $request->id)->update(['status' => 'inactive']);
        }
        return response()->json(['msg' => 'Status updated successfully', 'status' => 'true']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.banners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'string|required',
            'description' => 'string|nullable',
            'photo' => 'required',
            'condition' => 'nullable|in:banner,promo',
            'status' => 'nullable|in:active,inactive',
        ]);
        $data = $request->all();
        $slug = Str::slug($request->title);
        $slug_count = Banner::where('slug', $slug)->count();
        if ($slug_count > 0) {
            $slug = time() . '-' . $slug;
        }
        $data['slug'] = $slug;
        $status = Banner::create($data);
        if ($status) {
            return redirect()->route('banner.index')->with('success', 'Banner created successfully');
        } else {
            return back()->with('error', 'Error occurred while creating banner');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $banner = Banner::findOrFail($id);
        if ($banner) {
            return view('backend.banners.edit', compact('banner'));
        } else {
            return back()->with('error', 'Data not found');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $banner = Banner::findOrFail($id);
        if ($banner) {
            $this->validate($request, [
                'title' => 'string|required',
                'description' => 'string|nullable',
                'photo' => 'required',
                'condition' => 'nullable|in:banner,promo',
                'status' => 'nullable|in:active,inactive',
            ]);
            $data = $request->all();

            $status = $banner->fill($data)->save();
            if ($status) {
                return redirect()->route('banner.index')->with('success', 'Banner updated successfully');
            } else {
                return back()->with('error', 'Error occurred while creating banner');
            }
        } else {
            return back()->with('error', 'Data not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banner = Banner::findOrFail($id);
        if ($banner) {
            $status = $banner->delete();
            if ($status) {
                return redirect()->route('banner.index')->with('success', 'Banner deleted successfully');
            } else {
                return back()->with('error', 'Error occurred while deleting banner');
            }
        } else {
            return back()->with('error', 'Data not found');
        }
    }
}
