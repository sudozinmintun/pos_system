<div>
    <div class="row row-cols-md-12 row-cols-xl-12">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">
                {{ $sub_groups->title ?? '' }}
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
        </div>

        <div class="col">
            <hr />
            <div class="card">
                <h5 class="card-header">
                    {{ $sub_groups->title ?? '' }}
                </h5>
                <div class="card-body">
                    <form>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th
                                            style="background-color: #0C6CF4; text-align: center; color: white; width: 1%;">
                                            No
                                        </th>
                                        <th
                                            style="background-color: #0C6CF4; text-align: center; color: white; width: 20%">
                                            Ingredients
                                        </th>
                                        <th
                                            style="background-color: #0C6CF4; text-align: center; color: white; width: 20%">
                                            Unit
                                        </th>
                                        <th
                                            style="background-color: #0C6CF4; text-align: center; color: white; width: 20%">
                                            Number of Unit
                                        </th>
                                        <th
                                            style="background-color: #0C6CF4; text-align: center; color: white; width: 20%;">
                                            Price/ Kg
                                        </th>
                                        <th
                                            style="background-color: #0C6CF4; text-align: center; color: white; width: 20%;">
                                            Total Amount
                                        </th>

                                        <th
                                            style="background-color: #0C6CF4; text-align: center; color: white; width: 20%;">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr>

                                        <td>
                                        </td>

                                        <td>
                                            <select class="form-select form-select-sm"
                                                wire:change="changeEvent($event.target.value)"
                                                wire:model="main_categorie_id">
                                                <option value="">
                                                    --Select Ingredients--
                                                </option>
                                                @foreach ($main_categories as $main_categorie)
                                                    <option value="{{ $main_categorie->id ?? 0 }}">
                                                        {{ $main_categorie->title ?? '' }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </td>

                                        <td>
                                            <input class="form-control form-control-sm" type="text" wire:model="unit"
                                                readonly>
                                        </td>

                                        <td>
                                            <input class="form-control form-control-sm" type="text"
                                                wire:model="number_of_unit">
                                        </td>

                                        <td>
                                            <input class="form-control form-control-sm" type="text"
                                                wire:model="price">
                                        </td>

                                        <td colspan="2">
                                            <input class="btn btn-primary btn-sm form-control" type="submit"
                                                value="Save" wire:click.prevent="store()">
                                        </td>


                                    </tr>

                                    @php
                                        $AllTotal = [];
                                    @endphp
                                    @foreach ($manage_ingredients as $key => $manage_ingredient)
                                        <tr>
                                            <td>
                                                {{ $key + 1 }}
                                            </td>

                                            <td>
                                                {{ $manage_ingredient->main_category_table->title ?? '' }}
                                            </td>

                                            <td>
                                                {{ $manage_ingredient->main_category_table->unit ?? '' }}
                                            </td>

                                            <td style="text-align: right">
                                                {{ $manage_ingredient->number_of_unit, 2 }}
                                            </td>

                                            <td style="text-align: right">
                                                {{ number_format($manage_ingredient->price, 2) }}
                                            </td>

                                            <td style="text-align: right">
                                                @php
                                                    $numberof_unit = $manage_ingredient->number_of_unit ?? 0;
                                                    $price = $manage_ingredient->price ?? 0;
                                                    
                                                    $total = $price * ($numberof_unit / 100);
                                                    echo number_format($total, 2);
                                                    $AllTotal[] = $total;
                                                @endphp
                                            </td>

                                            <td>
                                                <a wire:click="delete({{ $manage_ingredient->id }})"
                                                    class="dropdown-item" href="javascript:void(0);" style="color: red">
                                                    Delete
                                                </a>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                                <tr>
                                    <td colspan="5">
                                        Total
                                    </td>
                                    <td style="text-align: right; font-weight: bold;">
                                        @php
                                            $TotalAll = array_sum($AllTotal);
                                            echo number_format($TotalAll, 2);
                                        @endphp
                                    </td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
