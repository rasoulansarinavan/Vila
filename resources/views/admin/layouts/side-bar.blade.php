@php
    $prefix=\Illuminate\Support\Facades\Route::current()->getPrefix();
    $rout_name=\Illuminate\Support\Facades\Route::current()->getName();
@endphp

<aside class="navbar-aside" id="offcanvas_aside">
    <div class="aside-top"><a class="brand-wrap" href="index.html"><img class="logo"
                                                                        src="/admin/assets/imgs/theme/logo.svg"
                                                                        alt="Evara Dashboard"></a>
        <div>
            <button class="btn btn-icon btn-aside-minimize"><i class="text-muted material-icons md-menu_open"></i>
            </button>
        </div>
    </div>
    <nav>
        <ul class="menu-aside">
            <li class="menu-item active {{$rout_name=='admin.index' ? 'active' : ''}}"><a class="menu-link" href="{{route('admin.index')}}"><i
                        class="icon material-icons md-home"></i><span class="text">Dashboard</span></a></li>
            <li class="menu-item has-submenu {{$rout_name=='admin.products.index' ? 'active' : ''}}"><a class="menu-link" href="page-products-list.html">
                    <i class="icon material-icons md-add_business"></i><span class="text">اقامتگاه</span></a>
                <div class="submenu">
                    <a href="{{route('admin.products.index')}}">افزودن اقامتگاه</a>
                </div>
            </li>
            <li class="menu-item has-submenu {{$rout_name=='admin.categories' ? 'active' : ''}}"><a
                    class="menu-link" href="page-products-list.html">
                    <i class="icon material-icons md-category"></i><span class="text">دسته بندی</span></a>
                <div class="submenu">
                    <a href="{{route('admin.categories')}}">افزودن دسته جدبد</a>
                </div>
            </li>
            <li class="menu-item has-submenu {{$rout_name=='admin.environments' ? 'active' : ''}}"><a
                    class="menu-link" href="page-products-list.html">
                    <i class="icon material-icons md-account_tree"></i><span class="text">محیط های اقامتگاه</span></a>
                <div class="submenu">
                    <a href="{{route('admin.environments')}}">افزودن محیط</a>
                </div>
            </li>
            <li class="menu-item has-submenu {{$rout_name=='admin.orders' ? 'active' : ''}}"><a class="menu-link" href="page-orders-1.html"><i
                        class="icon material-icons md-border_bottom"></i><span class="text">سفارشات</span></a>
                <div class="submenu">
                    <a href="{{route('admin.orders')}}">لیست سفارشات</a>
                </div>
            </li>
            <li class="menu-item has-submenu"><a class="menu-link" href="page-sellers-cards.html"><i
                        class="icon material-icons md-store"></i><span class="text">Sellers</span></a>
                <div class="submenu"><a href="page-sellers-cards.html">Sellers cards</a><a
                        href="page-sellers-list.html">Sellers list</a><a href="page-seller-detail.html">Seller
                        profile</a></div>
            </li>
            <li class="menu-item has-submenu"><a class="menu-link" href="page-form-product-1.html"><i
                        class="icon material-icons md-add_box"></i><span class="text">Add product</span></a>
                <div class="submenu"><a href="page-form-product-1.html">Add product 1</a><a
                        href="page-form-product-2.html">Add product 2</a><a href="page-form-product-3.html">Add product
                        3</a><a href="page-form-product-4.html">Add product 4</a></div>
            </li>
            <li class="menu-item has-submenu"><a class="menu-link" href="page-transactions-1.html"><i
                        class="icon material-icons md-monetization_on"></i><span class="text">Transactions</span></a>
                <div class="submenu"><a href="page-transactions-1.html">Transaction 1</a><a
                        href="page-transactions-2.html">Transaction 2</a><a href="page-transactions-details.html">Transaction
                        Details</a></div>
            </li>
            <li class="menu-item has-submenu"><a class="menu-link" href="#"><i
                        class="icon material-icons md-person"></i><span class="text">Account</span></a>
                <div class="submenu"><a href="page-account-login.html">User login</a><a
                        href="page-account-register.html">User registration</a><a href="page-error-404.html">Error
                        404</a></div>
            </li>
            <li class="menu-item"><a class="menu-link" href="page-reviews.html"><i
                        class="icon material-icons md-comment"></i><span class="text">Reviews</span></a></li>
            <li class="menu-item"><a class="menu-link" href="page-brands.html"><i
                        class="icon material-icons md-stars"></i><span class="text">Brands</span></a></li>
            <li class="menu-item"><a class="menu-link" disabled="" href="#"><i
                        class="icon material-icons md-pie_chart"></i><span class="text">Statistics</span></a></li>
        </ul>
        <hr>
        <ul class="menu-aside">
            <li class="menu-item has-submenu"><a class="menu-link" href="#"><i
                        class="icon material-icons md-settings"></i><span class="text">Settings</span></a>
                <div class="submenu"><a href="page-settings-1.html">Setting sample 1</a><a href="page-settings-2.html">Setting
                        sample 2</a></div>
            </li>
            <li class="menu-item"><a class="menu-link" href="page-blank.html"><i
                        class="icon material-icons md-local_offer"></i><span class="text"> Starter page</span></a></li>
        </ul>
    </nav>
</aside>
