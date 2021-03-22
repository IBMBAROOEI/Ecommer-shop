
<!DOCTYPE html>
<html lang="fa-IR" dir="rtl">
<head>

    <meta name="description" content="ولی یک قالب مدیریت رایگان واکنش‌گرا است که با بوت‌استرپ 4، SASS و PUG.js ساخته شده که کاملا تغییر پذیر و ماژولار است.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@PurTahan">
    <meta property="twitter:creator" content="@PurTahan">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="ولی">
    <meta property="og:title" content="فروشگاه | خرید اینترنتی  لباس موبایل  کفش ">
    <meta property="og:url" content="http://PurTahan.IR">
    <meta property="og:description" content="روسری | |    فروشگاه | خرید اینترنتی  لباس موبایل  کفش">
    <title>فروشگاه من</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="app sidebar-mini rtl">
@include('backend.resorce_css')
<!-- Navbar-->
<header class="app-header"><a class="app-header__logo" href="index.blade.php"></a>
    <!-- Sidebar toggle button--><a class="fas fa-bars app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
        <li class="app-search">
            <input class="app-search__input" type="search" placeholder="جستجو">
            <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
            <ul class="app-notification dropdown-menu dropdown-menu-right">
                <div class="app-notification__content">
                    <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                            <div>

                            </div></a></li>
                    <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                            <div>

                            </div></a></li>
                    <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                            <div>

                            </div></a></li>
                </div>
                <li class="app-notification__footer"><a href="#">نمایش همه رویداد‌ها</a></li>
            </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
                <li><a class="dropdown-item" href="page-user.blade.php"><i class="fa fa-cog fa-lg"></i> تنظیمات</a></li>
                <li><a class="dropdown-item" href="page-user.blade.php"><i class="fa fa-user fa-lg"></i> پروفایل</a></li>
                <li><a class="dropdown-item" href="page-login.blade.php"><i class="fas fa-sign-out-alt fa-lg"></i> خروج</a></li>
            </ul>
        </li>
    </ul>
</header>
<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="img/profile.png" alt="User Image">
        <div>
            <p class="app-sidebar__user-name"></p>
            <p class="app-sidebar__user-designation"></p>
        </div>
    </div>
    <ul class="app-menu">

        <li><a class="app-menu__item active" href="index.blade.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">داشبورد</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">المان‌های دیداری</span><i class="treeview-indicator fa fa-angle-left"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="bootstrap-components.blade.php"><i class="icon fa fa-circle-o"></i> المان‌های بوت‌استرپ</a></li>
                <li><a class="treeview-item" href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> قلم آیکون</a></li>
                <li><a class="treeview-item" href="ui-cards.blade.php"><i class="icon fa fa-circle-o"></i> کارت‌ها</a></li>
                <li><a class="treeview-item" href="widgets.blade.php"><i class="icon fa fa-circle-o"></i> ویجت‌ها</a></li>
            </ul>
        </li>
        <li><a class="app-menu__item" href="charts.blade.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">نمودار‌ها</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">فرم‌ها</span><i class="treeview-indicator fa fa-angle-left"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('index_product')}}"><i class="icon fa fa-circle-o"></i> ایجاد محصولات جدید</a></li>

                <li><a class="treeview-item" href="{{route('categorie.create')}}"><i class="icon fa fa-circle-o"></i> ایجاد دسته بندی</a></li>
                <li><a class="treeview-item" href="{{route('brand.create')}}"><i class="icon fa fa-circle-o"></i> ایجاد برند</a></li>
                <li><a class="treeview-item" href="{{route('create_slider')}}"><i class="icon fa fa-circle-o"></i> ایجاداسلایدر</a></li>

            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">جدول‌ها</span><i class="treeview-indicator fa fa-angle-left"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="table-basic.blade.php"><i class="icon fa fa-circle-o"></i> جدول‌های ابتدایی</a></li>
                <li><a class="treeview-item" href="{{route('categorie.index')}}"><i class="icon fa fa-circle-o"></i>دسته بندی</a></li>
                <li><a class="treeview-item" href="{{route('brand.index')}}"><i class="icon fa fa-circle-o"></i>برند</a></li>
                <li><a class="treeview-item" href="{{route('product')}}"><i class="icon fa fa-circle-o"></i>نمایش محصولات </a></li>
                <li><a class="treeview-item" href="{{route('index_slider')}}"><i class="icon fa fa-circle-o"></i>نمایش اسلایدر محصولات</a></li>
                <li><a class="treeview-item" href="{{route('order_get')}}"><i class="icon fa fa-circle-o"></i>نمایش سفارشات</a></li>
                <li><a class="treeview-item" href="{{url('/wishlist/favorite')}}"><i class="icon fa fa-circle-o"></i>علاقه مندی</a></li>









            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">صفحه‌ها</span><i class="treeview-indicator fa fa-angle-left"></i></a>
            <ul class="treeview-menu">

                <li><a class="treeview-item" href="{{route('login')}}"><i class="icon fa fa-circle-o"></i> صفحه ورود</a></li>

            </ul>
        </li>
    </ul>
</aside>
@include('backend.resource_js')
</body>
</html>