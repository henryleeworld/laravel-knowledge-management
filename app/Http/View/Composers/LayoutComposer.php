<?php

namespace App\Http\View\Composers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\View\View;

class LayoutComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('popularArticles', Article::orderBy('views_count', 'desc')->take(6)->get());
        $view->with('latestArticles', Article::orderBy('id', 'desc')->take(6)->get());
        $view->with('popularTags', Tag::withCount('articles')->orderBy('articles_count', 'desc')->take(20)->get());
        $view->with('footerCategories', Category::take(6)->get());
    }
}