<div>
    <link rel="stylesheet" href="{{ asset('css/customer_order_scroll_menu.css') }}">
    <div class="container-fulid">
        <div class="row row-cols-md-12 row-cols-xl-12">
            <div class="scrollmenu" style="background-color: #1d56a5;">

                <a href="javascript:void(0);" wire:click="getMainCategory(0)">
                    All
                </a>
                @foreach ($main_groups as $main_group)
                    <a href="javascript:void(0);" wire:click="getMainCategory({{ $main_group->id }})">
                        {{ $main_group->title ?? '' }}
                    </a>
                @endforeach
            </div>

            <span style="border-top: 1px solid white;"></span>
            {{ $main_categories ?? '' }}
            @if ($main_categories)
                <div class="scrollmenu" style="background-color: #3785f2;">
                    @foreach ($main_categories as $main_category)
                        <a href="#home">
                            {{ $main_category->title ?? '' }}
                        </a>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
