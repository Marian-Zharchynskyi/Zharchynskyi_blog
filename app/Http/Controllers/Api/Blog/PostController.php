<?php

namespace App\Http\Controllers\Api\Blog;

use App\Http\Controllers\Blog\BaseController;
use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Repositories\BlogCategoryRepository;
use App\Repositories\BlogPostRepository;
use Illuminate\Http\Request;
class PostController extends BaseController
{

    /**
     * @var BlogPostRepository
     */
    private $blogPostRepository;
    /**
     * @var BlogCategoryRepository
     */
    private $blogCategoryRepository;
    public function __construct()
    {

        $this->blogPostRepository = app(BlogPostRepository::class);
        $this->blogCategoryRepository = app(BlogCategoryRepository::class);
    }
    public function index()
    {
        $posts = BlogPost::with(['user', 'category'])->get();

        return $posts;
    }

    public function show(string $id)
    {
        $item = BlogPost::with(['user', 'category'])->get()->find($id);
        if (empty($item)) {
            abort(404);
        }
        return $item;
    }
}
