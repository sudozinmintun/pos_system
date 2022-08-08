<div>
    <div class="row row-cols-md-12 row-cols-xl-12">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">
                Users List
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
                <a href="{{ route('user_create') }}" class="btn btn-primary">
                    Create
                </a>
            </div>
        </div>

        <div class="col">
            <hr />
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th style="background-color: #0C6CF4; color: white;">
                                        #
                                    </th>
                                    <th style="background-color: #0C6CF4; color: white;">
                                        Employee ID
                                    </th>
                                    <th style="background-color: #0C6CF4; color: white;">
                                        Name
                                    </th>
                                    <th style="background-color: #0C6CF4; color: white;">
                                        Email
                                    </th>
                                    <th style="background-color: #0C6CF4; color: white;">
                                        Phone No
                                    </th>
                                    <th style="background-color: #0C6CF4; color: white;">
                                        Photo
                                    </th>
                                    <th style="background-color: #0C6CF4; color: white;">
                                        Gender
                                    </th>
                                    <th style="background-color: #0C6CF4; color: white;">
                                        Address
                                    </th>
                                    <th style="background-color: #0C6CF4; color: white;">
                                        Employment Type
                                    </th>
                                    <th style="background-color: #0C6CF4; color: white;">
                                        Join Date
                                    </th>
                                    <th style="background-color: #0C6CF4; color: white;">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $key => $user)
                                    <tr>
                                        <td>
                                            {{ $key + 1 }}
                                        </td>
                                        <td>
                                            {{ $user->employee_id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $user->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $user->email ?? '' }}
                                        </td>
                                        <td>
                                            {{ $user->phone ?? '' }}
                                        </td>

                                        <td>
                                            @if ($user->passport_photo)
                                                <ul
                                                    class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                        title="" data-bs-original-title="">
                                                        <img src="{{ Storage::url($user->passport_photo) }}"
                                                            alt="Avatar" class="rounded-circle">
                                                    </li>
                                                </ul>
                                            @endif
                                        </td>
                                        <td>
                                            {{ $user->gender ?? '' }}
                                        </td>
                                        <td>
                                            {{ $user->address ?? '' }}
                                        </td>
                                        <td>
                                            {{ $user->employment_type ?? '' }}
                                        </td>
                                        <td>
                                            {{ $user->join_date ?? '' }}
                                        </td>
                                        <td>

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
