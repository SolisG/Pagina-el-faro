<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function create()
    {
        // Retrieve all categories
        $categories = Category::all();

        return view('news.create', compact('categories'));
    }
    public function index()
    {
        $latestNews = $this->getLatestNews(5);
        $deportesNews = $this->getNewsByCategory('Deportes', 3);
        $negociosNews = $this->getNewsByCategory('Negocios', 3);
        $otrosNews = $this->getNewsByCategory('Otros', 3);

        return view('home', compact('latestNews', 'deportesNews', 'negociosNews', 'otrosNews'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
            'date' => 'required|date',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Create a new news article
        $news = News::create($validatedData);

        // Redirect to the news article details page
        return redirect()->route('news.show', $news->id);
    }

    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

    public function edit(News $news)
    {
        // Retrieve all categories
        $categories = Category::all();

        return view('news.edit', compact('news', 'categories'));
    }

    public function update(Request $request, News $news)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
            'date' => 'required|date',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Update the news article
        $news->update($validatedData);

        // Redirect to the news article details page
        return redirect()->route('news.show', $news->id);
    }

    public function destroy(News $news)
    {
        // Delete the news article
        $news->delete();

        // Redirect to the news index page
        return redirect()->route('news.index');
    }

    private function getLatestNews($limit)
    {
        return News::orderBy('created_at', 'desc')->take($limit)->get();
    }

    private function getNewsByCategory($category, $limit)
    {
        // Retrieve the category ID based on the category name
        $categoryId = Category::where('name', $category)->value('id');

        // Retrieve the news items with the specified category ID
        return News::where('category_id', $categoryId)->orderBy('created_at', 'desc')->take($limit)->get();
    }

}
