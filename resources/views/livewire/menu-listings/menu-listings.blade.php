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
                                    <th style="background-color: #0C6CF4; text-align: center; color: white; width: 1%;">
                                        No</th>
                                    <th style="background-color: #0C6CF4; text-align: center; color: white; width: 30%">
                                        Main Group
                                    </th>
                                    <th style="background-color: #0C6CF4; text-align: center; color: white; width: 30%">
                                        Sub Group
                                    </th>
                                    <th style="background-color: #0C6CF4; text-align: center; color: white; width: 30%">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($main_categories as $key => $main_categorie)
                                    <tr style="background-color: #fafafa">
                                        <td>
                                            {{ $key + 1 }}
                                        </td>
                                        <td colspan="2" style="font-weight: bold">
                                            {{ $main_categorie->title ?? '' }}
                                        </td>
                                        <td style="text-align: center">
                                            <a href="">
                                                <span class="badge bg-primary">
                                                    Edit
                                                </span>
                                            </a>
                                            <a href="">
                                                <span class="badge bg-danger">
                                                    Delete
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    @foreach ($main_categorie->sub_groups_table as $sub_groups)
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                {{ $sub_groups->title ?? '' }}
                                            </td>
                                            <td style="text-align: center">

                                                <a href="{{ route('manage_ingredients', ['id' => $sub_groups->id]) }}">
                                                    <span class="badge bg-warning">
                                                        Ingredients
                                                    </span>
                                                </a>

                                                <a href="">
                                                    <span class="badge bg-primary">
                                                        Edit
                                                    </span>
                                                </a>

                                                <a href="">
                                                    <span class="badge bg-danger">
                                                        Delete
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr style="background-color: #418107;">
                                        <td colspan="4"></td>
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
