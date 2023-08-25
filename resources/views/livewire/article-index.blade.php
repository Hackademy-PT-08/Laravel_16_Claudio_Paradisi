<div>
    <div class="container">
        <div class="row">
            <div class="col-12 myform text-center">
                <label for="text" class="form-label">Filtra per Titolo</label>
                <input type="text" wire:model="filter"  class="form-control shadow">
                <p wire:poll.300ms>{{$filter}}</p>
                <!-- usare wire:poll per searchbar, anche se non mi è chiaro del tutto il funzionamento -->
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row">
    
            @foreach($articles as $article)
                <div class="col-12 col-md-4">
                    <div class="card  m-3" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="card-text">{{$article->content}}</p>
                            <a href="{{route('articles.edit', $article->id)}}" class="btn btn-primary">Modifica</a>
                        </div>
                    </div>
                </div>    
            @endforeach
        </div>
    </div>
</div>
