<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
<<<<<<< HEAD

=======
>>>>>>> bd7d43d (commit)
    // Hiển thị danh sách bài viết
    public function index()
    {
        $posts = Post::with('user')->latest()->get();
<<<<<<< HEAD

        return view('posts.index', compact('posts'));
    }


=======
        return view('posts.index', compact('posts'));
    }
>>>>>>> bd7d43d (commit)
    // Trang tạo bài viết
    public function create()
    {
        return view('posts.create');
    }
<<<<<<< HEAD


    // Lưu bài viết
    public function store(Request $request)
    {

        Post::create([

            'user_id' => Auth::id(),

            'title' => $request->title,

            'content' => $request->content,

            'status' => 'published',

            'published_at' => now()

        ]);

        return redirect('/posts');
    }


=======
    // Lưu bài viết
    public function store(Request $request)
    {
        Post::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'content' => $request->content,
            'status' => 'published',
            'published_at' => now()
        ]);
        return redirect('/posts');
    }
>>>>>>> bd7d43d (commit)
    // Trang sửa bài
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
    }
<<<<<<< HEAD


    // Cập nhật bài viết
    public function update(Request $request, $id)
    {

        $post = Post::findOrFail($id);

        $post->update([

            'title' => $request->title,

            'content' => $request->content

        ]);

        return redirect('/posts');
    }


    // Xóa bài viết
    public function destroy($id)
    {

        $post = Post::findOrFail($id);

        $post->delete();

        return redirect('/posts');
    }

=======
    // Cập nhật bài viết
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update([
            'title' => $request->title,
            'content' => $request->content
        ]);
        return redirect('/posts');
    }
    // Xóa bài viết
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/posts');
    }
    public function show($id)
    {
        $post = Post::with('user')->findOrFail($id);
        return view('posts.show', compact('post'));
    }
>>>>>>> bd7d43d (commit)
}