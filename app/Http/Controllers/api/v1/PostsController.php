<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\karyawan;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = karyawan::get();
        return response([
            'success' => true,
            'message' => 'List Semua Posts',
            'data' => $posts
        ], 200);
    }
}
