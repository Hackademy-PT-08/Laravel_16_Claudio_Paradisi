<div class="w-50 justify-content-center text-center m-auto ">
    <div class="container justify-content-center mt-5">
        <div class="row justify-between mt-5">
            <div class="col-4 mt-5">
                
                <button wire:click="decrease" class="btn btn-primary">-</button>
            </div>
            <div class="col-4 mx-0 mt-5">
                <p class="h4">{{$count}}</p>
            </div>
            <div class="col-4 mx-0 mt-5">
                <button wire:click="increase"class="btn btn-primary">+</button>
            </div>
            
        </div>
    </div>
</div>
