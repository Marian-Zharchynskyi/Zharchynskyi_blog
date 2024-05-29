<?php

namespace App\Http\Controllers\Blog;

use App\Repositories\BlogPostRepository;
use Illuminate\Http\Request;
use App\Models\BlogPost;

class PostController extends BaseController
{
    /**
     * @var BlogPostRepository
     */
    private $blogPostRepository;

    public function __construct()
    {

        $this->blogPostRepository = app(BlogPostRepository::class); //app вертає об'єкт класа
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = BlogPost::all();

        $paginator = $this->blogPostRepository->getAllWithPaginate();

        return view('blog.admin.posts.index', compact('paginator'));


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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
