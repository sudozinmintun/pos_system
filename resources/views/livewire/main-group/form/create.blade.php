<form>
    <div class="input-group">
        <select class="form-control" wire:model.debounce.800ms="category">
            <option value="">--Select Category--</option>
            <option value="Food">Food</option>
            <option value="Bar">Bar</option>
        </select>

        <input type="text" class="form-control" wire:model="title" placeholder="Title">

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
