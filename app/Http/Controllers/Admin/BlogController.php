<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller

{


public function blog()
{
    $blogs = Blog::latest()->get();
    return view('base.blog', compact('blogs'));
}

public function show($slug)
{
    $blog = Blog::where('slug', $slug)->firstOrFail();
    return view('blogs.show', compact('blog'));
}


    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('admin.manageBlogs', compact('blogs'));
    }

    public function create()
    {
        return view('admin.createblogs');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|max:2048'
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('blogs', 'public') : null;

        Blog::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'image' => $imagePath,
        ]);
return redirect()->route('admin.manageBlogs');

    }


    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.editblogs', compact('blog'));
    }


    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|max:2048'
        ]);

        if ($request->file('image')) {
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
            $imagePath = $request->file('image')->store('blogs', 'public');
            $blog->image = $imagePath;
        }

        $blog->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'image' => $blog->image,
        ]);

        return redirect()->route('admin.manageBlogs')->with('success', 'Blog updated successfully!');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if ($blog->image) {
            Storage::disk('public')->delete($blog->image);
        }
        $blog->delete();

        return redirect()->route('admin.manageBlogs')->with('success', 'Blog deleted successfully!');
    }
}
