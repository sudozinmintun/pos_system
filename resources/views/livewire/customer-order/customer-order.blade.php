<div>
    <link rel="stylesheet" href="{{ asset('css/customer_order_scroll_menu.css') }}">
    <div class="container-fluid">
        <div class="row row-cols-md-12 row-cols-xl-12 col-lg-12 col-sm-12">

            <input class="form-control form-control-sm mb-2" type="text" placeholder="Search...">

            <div class="scrollmenu" style="background-color: #1d56a5;">
                <a href="javascript:void(0);" wire:click.prevent="getAllMainCategory()">
                    All
                </a>
                @foreach ($main_groups as $main_group)
                    <a href="javascript:void(0);" wire:click.prevent="getMainCategory({{ $main_group->id }})">
                        {{ $main_group->title ?? '' }}
                    </a>
                @endforeach
            </div>

            <span style="border-top: 1px solid white;"></span>

            @if ($main_categories)
                <div class="scrollmenu" style="background-color: #3785f2;">
                    @foreach ($main_categories as $main_category)
                        <a href="javascript:void(0);" wire:click.prevent="getSubGroups({{ $main_category->id }})">
                            {{ $main_category->title ?? '' }}
                        </a>
                    @endforeach
                </div>
            @endif
        </div>

        <br>
        <h6 class="mb-0 text-uppercase">
            Chicken
        </h6>
        <hr />
        <div class="row">
            <div class="col-md-9">
                <div class="row product-grid">
                    @if ($sub_groups)
                        @foreach ($sub_groups as $sub_group)
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="card">
                                    <center>
                                        <img src="https://www.freshnlean.com/wp-content/uploads/2021/03/Meal-Plan-plate-protein.png"
                                            class="card-img-top" alt="..." style="width: 50%;">
                                    </center>
                                    <div class="card-body">
                                        <h6 class="card-title cursor-pointer">
                                            {{ $sub_group->title ?? '' }}
                                        </h6>
                                        <div class="clearfix">
                                            <p class="mb-0 float-start">
                                                <strong>
                                                    {{ number_format($sub_group->sales_price ?? 0) }}
                                                </strong>MMK
                                            </p>
                                            <p class="mb-0 float-end fw-bold">
                                                <span>
                                                    <a href="javascript:;" class="btn btn-primary btn-sm block">
                                                        <i class="bx bx-cart"></i>
                                                    </a>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="col-md-3">
                <div class="border border-3 p-4 rounded">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="inputPrice" class="form-label">Table</label>
                            <input type="text" class="form-control" value="1">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">
                                Sweet & Sour Chicken
                            </label>
                            <div class="input-group input-spinner">
                                <button class="btn btn-white" type="button" id="button-minus"> − </button>
                                <input type="text" class="form-control" value="1">
                                <button class="btn btn-white" type="button" id="button-plus"> + </button>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">
                                Fried Pork Sticks
                            </label>
                            <div class="input-group input-spinner">
                                <button class="btn btn-white" type="button" id="button-minus"> − </button>
                                <input type="text" class="form-control" value="1">
                                <button class="btn btn-white" type="button" id="button-plus"> + </button>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">
                                Chicken Salad
                            </label>
                            <div class="input-group input-spinner">
                                <button class="btn btn-white" type="button" id="button-minus"> − </button>
                                <input type="text" class="form-control" value="1">
                                <button class="btn btn-white" type="button" id="button-plus"> + </button>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-grid">
                                <button type="button" class="btn btn-primary">
                                    Order
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
