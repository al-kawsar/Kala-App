<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $start_time = microtime(true); // Waktu mulai eksekusi

        $query = Post::query();

        $query->when($request->has('search'), function (Builder $query) use ($request) {
            $query->where('title', 'like', '%' . $request->search . '%')
                ->orWhere('body', 'like', '%' . $request->search . '%');
        });

        $title = 'Index Page || Posts';

        $posts = $query->select("title", "slug", "body", "author", "published")->orderBy("created_at", "desc")->paginate(10)->withQueryString();

        $end_time = microtime(true); // Waktu selesai eksekusi

        $execution_time = round($end_time - $start_time, 2);

        $total_results = $posts->total();

        return view('posts.index', compact('title', 'posts', 'total_results', 'execution_time'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
