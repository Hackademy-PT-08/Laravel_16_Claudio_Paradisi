<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleCreate extends Component
{
    public $title, $content, $message;
    
    public function render()
    {
        return view('livewire.article-create');
    }
    public function store()
    {
        $validated = $this->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $article = new Article();

        $article->title = $this->title;
        $article->content = $this->content;

        $article->save();

        $this->title='';
        $this->content= '';
        $this->message = 'Articolo aggiunto con successo!!!';
    }
}
