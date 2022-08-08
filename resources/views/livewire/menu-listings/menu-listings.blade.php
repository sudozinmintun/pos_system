<div>
    <div class="row row-cols-md-12 row-cols-xl-12">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">
                Sub Group
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
                <a href="{{ route('menu_listings_create') }}" class="btn btn-primary">
                    Create
                </a>
            </div>
        </div>

        @foreach ($main_categories as $key => $main_categorie)
            <h6 class="mb-0 text-uppercase">
                {{ $main_categorie->title ?? '' }}
            </h6>
            <hr />
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4">
                @foreach ($main_categorie->sub_groups_table as $sub_groups)
                    <div class="col-md-3 col-lg-3 col-sm-6">
                        <div class="card border-primary border-bottom border-3 border-0">
                            @if ($sub_groups->photo)
                                <img src="{{ Storage::url($sub_groups->photo) }}" class="card-img-top" alt="..."
                                    style="object-fit: contain; width: 100%; height: 150px;">
                            @else
                                <img src="{{ asset('images/1.png') }}" class="card-img-top" alt="..."
                                    style="object-fit: contain; width: 100%; height: 150px;">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title text-primary">
                                    {{ $sub_groups->title ?? '' }}
                                </h5>
                                <hr>
                                <div class="d-flex align-items-center gap-2">
                                    <a href="javascript:;" class="btn btn-inverse-primary btn-sm">
                                        <i class='bx bx-edit'></i>
                                        Edit
                                    </a>
                                    <a href="javascript:;" class="btn btn-danger btn-sm">
                                        <i class='bx bx-trash'></i>
                                        Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach

    </div>
</div>
