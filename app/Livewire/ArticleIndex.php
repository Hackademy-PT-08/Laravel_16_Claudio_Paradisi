<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleIndex extends Component
{

    public $filter = '';
    public function render()
    {
        if($this->filter !== ''){
        $all_articles = Article::where('title', $this->filter )->get();
    } else {
        $all_articles = Article::all();
    }
        return view('livewire.article-index', ['articles' => $all_articles]);
    }
}
