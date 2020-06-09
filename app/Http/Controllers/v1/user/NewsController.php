<?php

namespace App\Http\Controllers\v1\user;

use App\Http\Controllers\Controller;
use App\News;
use function GuzzleHttp\Psr7\_parse_request_uri;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function news()
    {
        $news = News::all();

        return response()->json([
            'message' => 'successfully get news',
            'status' => true,
            'data' => $news
        ]);
    }
}
