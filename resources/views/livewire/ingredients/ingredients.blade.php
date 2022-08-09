<div>
    <div class="row row-cols-md-12 row-cols-xl-12">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">
                Ingredients
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
            @include('livewire.ingredients.form.update')
        @elseif ($createMode)
            @include('livewire.ingredients.form.create')
        @endif

        <div class="col">
            <hr />
            <div class="card">
                <h5 class="card-header">
                    Main Group
                </h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th style="background-color: #0C6CF4; color: white; width: 1%;">No</th>
                                    <th style="background-color: #0C6CF4; color: white; width: 30%">Title</th>
                                    <th style="background-color: #0C6CF4; color: white; width: 30%">Unit</th>
                                    <th style="background-color: #0C6CF4; color: white; width: 30%">Main Group</th>
                                    <th style="background-color: #0C6CF4; color: white; width: 10%;">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($main_categories as $key => $main_categorie)
                                    <tr>
                                        <td>
                                            {{ $key + 1 }}
                                        </td>
                                        <td>
                                            {{ $main_categorie->title ?? '' }}
                                        </td>
                                        <td>
                                            {{ $main_categorie->unit ?? '' }}
                                        </td>
                                        <td>
                                            {{ $main_categorie->main_groups_table->title ?? '' }}
                                        </td>
                                        <td>
                                            <div class="btn-group" bis_skin_checked="1">
                                                <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Actions
                                                </button>
                                                <ul class="dropdown-menu" style="">
                                                    <a wire:click="edit({{ $main_categorie->id }})"
                                                        class="dropdown-item" href="javascript:void(0);">
                                                        <i class="bx bx-edit-alt me-1"></i>
                                                        Edit
                                                    </a>
                                                    <a wire:click="delete({{ $main_categorie->id }})"
                                                        class="dropdown-item" href="javascript:void(0);">
                                                        <i class="bx bx-trash me-1"></i>
                                                        Delete
                                                    </a>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
