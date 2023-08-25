<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleEdit extends Component


{

    public $articleId, $title, $content, $message;

    public function mount(){
        $article = Article::find($this->articleId);
        $this->title = $article->title;
        $this->content = $article->content;
    }
    public function render()
    {
        return view('livewire.article-edit');
    }

    public function update()
    {
        //Aggiorno il record nel database
        $article = Article::find($this->articleId);

        $article->title = $this->title;
        $article->content = $this->content;

        $article->save();

       
        $this->message = 'Articolo aggiornato con successo!!!';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //Elimino il record dal database
        $article = Article::find($this->articleId);

        $article->delete();

        return redirect()->route('articles.index');
    }
}
