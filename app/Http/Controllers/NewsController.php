<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Requests\NewsRequestCreate;
use App\Http\Requests\NewsRequestUpdate;
use Illuminate\Http\Response;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return News::paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsRequestCreate $request)
    {
        $news = News::create($request->all());
        return response()->json(['news' => $news], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        $news->load('category');
        return response()->json(['news' => $news, 'category' => $news->category], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NewsRequestUpdate $request, News $news)
    {
        $news->update($request->all());
        return response()->json(['news' => $news], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $news->delete();
        return response()->json(['news' => $news], Response::HTTP_ACCEPTED);
    }
}
