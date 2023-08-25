<div>
<div class="alert text-success mt-5 fixed-top">
    <p class="h4">{{$message}}</p>
</div>


<div class="container mt-5 ">
    <div class="row myform ">
        <div class="col-12">
            <div class="mb-3">
                <label for="text" class="form-label">Titolo</label>
                <input wire:model="title" type="text" class="form-control shadow">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Contenuto</label>
                <textarea wire:model="content" cols="10" rows="10"class="form-control shadow">{{$content}}</textarea>
            </div>
  
            <button type="button" class="btn btn-primary" wire:click="store">Crea</button>
        </div>
    </div>
</div>
</div>

