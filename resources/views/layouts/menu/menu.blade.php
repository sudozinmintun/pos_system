<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">POS</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>

    <ul class="metismenu" id="menu">

        <li class="menu-label">
            Admin
        </li>

        <li>
            <a href="{{ route('dashboard') }}">
                <div class="parent-icon">
                    <i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">
                    Dashboard
                </div>
            </a>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <i class="bx bx-category"></i>
                </div>
                <div class="menu-title">
                    Order
                </div>
            </a>
            <ul>
                <li>
                    <a href="#">
                        <i class="bx bx-right-arrow-alt"></i>
                        Order List
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="bx bx-right-arrow-alt"></i>
                        Payment Types
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="{{ route('menu_stock') }}">
                <div class="parent-icon">
                    <i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">
                    Menu Stock
                </div>
            </a>
        </li>

        <li>
            <a href="#">
                <div class="parent-icon">
                    <i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">
                    Counter Checkout
                </div>
            </a>
        </li>

        <li>
            <a href="#">
                <div class="parent-icon">
                    <i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">
                    Procurement
                </div>
            </a>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <i class="bx bx-category"></i>
                </div>
                <div class="menu-title">
                    Reports
                </div>
            </a>
            <ul>
                <li>
                    <a href="#">
                        <i class="bx bx-right-arrow-alt"></i>
                        Sales Report
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="bx bx-right-arrow-alt"></i>
                        Stock Report
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="bx bx-right-arrow-alt"></i>
                        Sold Stock
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="bx bx-right-arrow-alt"></i>
                        Profit Report
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <i class="bx bx-category"></i>
                </div>
                <div class="menu-title">
                    Configuration
                </div>
            </a>
            <ul>

                <li>
                    <a href="{{ route('main_group') }}">
                        <i class="bx bx-right-arrow-alt"></i>
                        Main Group
                    </a>
                </li>

                <li>
                    <a href="{{ route('main_category') }}">
                        <i class="bx bx-right-arrow-alt"></i>
                        Main Category
                    </a>
                </li>

                <li>
                    <a href="{{ route('ingredients') }}">
                        <i class="bx bx-right-arrow-alt"></i>
                        Ingredients
                    </a>
                </li>

                <li>
                    <a href="{{ route('menu_listings') }}">
                        <i class="bx bx-right-arrow-alt"></i>
                        Sub Group
                    </a>
                </li>

            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <i class="bx bx-category"></i>
                </div>
                <div class="menu-title">
                    Users
                </div>
            </a>
            <ul>
                <li>
                    <a href="{{ route('users') }}">
                        <i class="bx bx-right-arrow-alt"></i>
                        Users List
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="bx bx-right-arrow-alt"></i>
                        Roles List
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="bx bx-right-arrow-alt"></i>
                        Permission Manager
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-label">
            POS System
        </li>

        <li>
            <a href="{{ route('customer_order') }}">
                <div class="parent-icon">
                    <i class='bx bx-user-check'></i>
                </div>
                <div class="menu-title">
                    Customer Order
                </div>
            </a>
        </li>

        <li>
            <a href="#">
                <div class="parent-icon">
                    <i class='bx bx-history'></i>
                </div>
                <div class="menu-title">
                    Order History
                </div>
            </a>
        </li>
    </ul>
</div>
