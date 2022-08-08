<form>
    <div class="input-group">
        <select class="form-control" wire:model.debounce.800ms="main_group_id">
            <option value="">--Select Category--</option>
            @foreach ($main_groups as $main_group)
                <option value="{{ $main_group->id ?? 0 }}">
                    {{ $main_group->title ?? '' }}
                </option>
            @endforeach
        </select>

        <input type="text" class="form-control" wire:model="title" placeholder="Title">
        <input type="text" class="form-control" wire:model="unit" placeholder="Unit">

        <button class="btn btn-success" type="submit" wire:click.prevent="store()">
            Save
        </button>
        <button class="btn btn-primary" type="submit" wire:click.prevent="cancel_create()">
            Cancel
        </button>
    </div>

    @error('main_group_id')
        <span class="text-danger">
            {{ $message }}
        </span>
    @enderror

    @error('title')
        <span class="text-danger">
            {{ $message }}
        </span>
    @enderror


</form>
