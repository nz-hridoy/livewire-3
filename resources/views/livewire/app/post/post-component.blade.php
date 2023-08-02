<div>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <form wire:submit="addPost">
                    <div class="form-group mb-4">
                        <label for="">Title</label>
                        <input type="text" class="form-control" wire:model.blur='title' wire:dirty.class="border-danger" />
                        @error('title')
                            <p class="text-danger" style="font-size: 12.5px;">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-5">
                        <label for="">Content <small class="text-muted" text="$wire.content.length"></small></label>
                        <textarea class="form-control" wire:model.blur='content' cols="30" rows="10"></textarea>
                        @error('content')
                            <p class="text-danger" style="font-size: 12.5px;">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-4 text-center">
                        <button class="btn btn-sm btn-success" type="submit">Add Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
