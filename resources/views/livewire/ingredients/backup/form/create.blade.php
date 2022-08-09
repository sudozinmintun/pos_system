<form>
    <div class="input-group">

        <input type="text" class="form-control" wire:model="title" placeholder="Title">
        <input type="text" class="form-control" wire:model="unit" placeholder="Unit">

        <button class="btn btn-success" type="submit" wire:click.prevent="store()">
            Save
        </button>
        <button class="btn btn-primary" type="submit" wire:click.prevent="cancel_create()">
            Cancel
        </button>
    </div>

    @error('title')
        <span class="text-danger">
            {{ $message }}
        </span>
    @enderror


</form>
