<div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <input type="text" class="form-control" wire:model="todo">

                Todo character length: <h2 x-text="$wire.todo.length"></h2>
            </div>
        </div>
    </div>
</div>
