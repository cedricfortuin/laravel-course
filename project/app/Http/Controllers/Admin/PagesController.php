<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showAdminIndex()
    {
        $items = Post::all();
        return view('admin.pages.admin_index', compact('items'));
    }
}
