<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Post::with('category')->latest();

        if ($request->has('status') && in_array($request->status, ['published', 'draft', 'review'])) {
            $query->where('status', $request->status);
        }

        $posts = $query->paginate(10)->withQueryString();
        return view('admin-pages.posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-pages.add-post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|in:draft,review,published',
            'image' => 'nullable|image|max:5120', // 5MB
            'tags' => 'nullable|string',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('posts', 'public');
        }

        // Handle tags
        $tagNames = array_map('trim', explode(',', $validatedData['tags'] ?? ''));
        $tagIds = [];
        foreach ($tagNames as $tagName) {
            if (!empty($tagName)) {
                $tag = \App\Models\Tag::firstOrCreate(['name' => $tagName]);
                $tagIds[] = $tag->id;
            }
        }

        $validatedData['user_id'] = $request->user()->id;
        unset($validatedData['tags']);

        $post = Post::create($validatedData);
        $post->tags()->sync($tagIds);

        return redirect()->route('dashboard.posts.index')->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $post->load(['category', 'tags']);
        return response()->json($post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $post->load(['category', 'tags']);
        return view('admin-pages.edit-post', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title'        => 'required|string|max:255',
            'content'      => 'required|string',
            'category_id'  => 'required|exists:categories,id',
            'status'       => 'required|in:draft,review,published',
            'image'        => 'nullable|image|max:5120', // 5 MB
            'remove_image' => 'nullable|boolean',
            'tags'         => 'nullable|string',
        ]);

        // Handle image removal
        if ($request->boolean('remove_image') && $post->image) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($post->image);
            $validatedData['image'] = null;
        }

        // Handle new image upload (replaces existing)
        if ($request->hasFile('image')) {
            if ($post->image) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($post->image);
            }
            $validatedData['image'] = $request->file('image')->store('posts', 'public');
        }

        // Handle tags (comma-separated string → sync by name)
        $tagIds = [];
        $tagString = $validatedData['tags'] ?? '';
        if (!empty(trim($tagString))) {
            $tagNames = array_filter(array_map('trim', explode(',', $tagString)));
            foreach ($tagNames as $tagName) {
                $tag = \App\Models\Tag::firstOrCreate(['name' => $tagName]);
                $tagIds[] = $tag->id;
            }
        }

        unset($validatedData['tags'], $validatedData['remove_image']);
        $post->update($validatedData);
        $post->tags()->sync($tagIds);

        return redirect()->route('dashboard.posts.index')
            ->with('success', 'Postingan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json(['message' => 'Post deleted successfully']);
    }
}
