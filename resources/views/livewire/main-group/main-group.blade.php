<div>
    <div class="row row-cols-md-12 row-cols-xl-12">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">
                Main Group
            </div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:;">
                                <i class="bx bx-home-alt"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Table
                        </li>
                    </ol>
                </nav>
            </div>

            <div class="ms-auto">
                <button wire:click.prevent="crate_model()" class="btn btn-primary">
                    Create
                </button>
            </div>
        </div>

        @if ($updateMode)
            @include('livewire.main-group.form.update')
        @elseif ($createMode)
            @include('livewire.main-group.form.create')
        @endif

        <div class="col">
            <hr />
            <div class="card">
                <h5 class="card-header">
                    Main Group
                </h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true">
                                    Food
                                </li>
                                @foreach ($main_groups as $key => $main_group)
                                    @if ($main_group->category == 'Food')
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            {{ $main_group->title ?? '' }}
                                            <span class="badge">
                                                <div class="btn-group" bis_skin_checked="1">
                                                    <button class="btn btn-primary btn-sm dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Actions
                                                    </button>
                                                    <ul class="dropdown-menu" style="">
                                                        <a wire:click="edit({{ $main_group->id }})"
                                                            class="dropdown-item" href="javascript:void(0);">
                                                            <i class="bx bx-edit-alt me-1"></i>
                                                            Edit
                                                        </a>
                                                        <a wire:click="delete({{ $main_group->id }})"
                                                            class="dropdown-item" href="javascript:void(0);">
                                                            <i class="bx bx-trash me-1"></i>
                                                            Delete
                                                        </a>
                                                    </ul>
                                                </div>
                                            </span>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true">
                                    Bar
                                </li>
                                @foreach ($main_groups as $key => $main_group)
                                    @if ($main_group->category == 'Bar')
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            {{ $main_group->title ?? '' }}

                                            <span class="badge">
                                                <div class="btn-group" bis_skin_checked="1">
                                                    <button class="btn btn-primary btn-sm dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Actions
                                                    </button>
                                                    <ul class="dropdown-menu" style="">
                                                        <a wire:click="edit({{ $main_group->id }})"
                                                            class="dropdown-item" href="javascript:void(0);">
                                                            <i class="bx bx-edit-alt me-1"></i>
                                                            Edit
                                                        </a>
                                                        <a wire:click="delete({{ $main_group->id }})"
                                                            class="dropdown-item" href="javascript:void(0);">
                                                            <i class="bx bx-trash me-1"></i>
                                                            Delete
                                                        </a>
                                                    </ul>
                                                </div>
                                            </span>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
