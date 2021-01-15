<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function post(Request $request)
    {
        $request->validate([
            'title' => 'required|max:256',
            'description' => 'max:4.294.967.295'
        ]);

        Post::create([
           'title' => $request->title,
           'description' => $request->description
        ]);

        Alert::toast('Succesvol toegevoegd!', 'success');
        return back();
    }

    protected function delete($id)
    {
        Post::destroy($id);

        Alert::toast('Succesvol verwijderd', 'success');
        return back();
    }
}
