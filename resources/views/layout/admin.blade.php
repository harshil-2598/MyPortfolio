<!DOCTYPE html>
<html  dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- FAVICON -->
    <link rel="icon" href="{{ URL::asset('admin/build/assets/images/brand/favicon.ico')}}" type="image/x-icon">

    <!-- TITLE -->
    <title>Admin Panel - @yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('admin/assets/images/brand/favicon.ico') }}" />


    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ URL::asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css' ) }}" rel="stylesheet" />
{{--    <link rel="stylesheet" href="{{ URL::asset('admin/summernote/summernote.min.css') }}">--}}

    <!-- STYLE CSS -->
    <link href="{{ URL::asset('admin/assets/css/style.css' ) }}" rel="stylesheet" />
    <link href="{{ URL::asset('admin/assets/css/dark-style.css' ) }}" rel="stylesheet" />
    <link href="{{ URL::asset('admin/assets/css/transparent-style.css' ) }}" rel="stylesheet">
    <link href="{{ URL::asset('admin/assets/css/skin-modes.css' ) }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <!--- FONT-ICONS CSS -->
    <link href="{{ URL::asset('admin/assets/css/icons.css' ) }}" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ URL::asset('admin/assets/colors/color1.css' ) }}" />

    <!-- INTERNAL SWITCHER CSS -->
    <link href="{{ URL::asset('admin/assets/switcher/css/switcher.css' ) }}" rel="stylesheet" />
    <link href="{{ URL::asset('admin/assets/switcher/demo.css' ) }}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">


</head>

<body class="app sidebar-mini ltr light-mode">

<!-- SWITCHER -->
<div class="switcher-wrapper">
    <div class="demo_changer">
        <div class="form_holder sidebar-right1">
            <div class="row">
                <div class="predefined_styles">
{{--                    <div class="swichermainleft text-center">--}}
{{--                        <div class="p-3 d-grid gap-2">--}}
{{--                            <a href="index-2.html" class="btn ripple btn-primary mt-0">View Demo</a>--}}
{{--                            <a href="https://themeforest.net/item/sash-laravel-admin-dashboard-template/35463246" class="btn ripple btn-secondary">Buy Now</a>--}}
{{--                            <a href="https://themeforest.net/user/spruko/portfolio" class="btn ripple btn-pink">Our Portfolio</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="swichermainleft">
                        <h4>Navigation Style</h4>
                        <div class="skin-body">
                            <div class="switch_section">
                                <div class="switch-toggle d-flex">
                                    <span class="me-auto">Vertical Menu</span>
                                    <p class="onoffswitch2"><input type="radio" name="onoffswitch15" id="myonoffswitch34" class="onoffswitch2-checkbox" checked>
                                        <label for="myonoffswitch34" class="onoffswitch2-label"></label>
                                    </p>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <span class="me-auto">Horizontal Click Menu</span>
                                    <p class="onoffswitch2"><input type="radio" name="onoffswitch15" id="myonoffswitch35" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch35" class="onoffswitch2-label"></label>
                                    </p>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <span class="me-auto">Horizontal Hover Menu</span>
                                    <p class="onoffswitch2"><input type="radio" name="onoffswitch15" id="myonoffswitch111" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch111" class="onoffswitch2-label"></label>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swichermainleft">
                        <h4>LTR and RTL VERSIONS</h4>
                        <div class="skin-body">
                            <div class="switch_section">
                                <div class="switch-toggle d-flex">
                                    <span class="me-auto">LTR Version</span>
                                    <p class="onoffswitch2"><input type="radio" name="onoffswitch7" id="myonoffswitch23" class="onoffswitch2-checkbox" checked>
                                        <label for="myonoffswitch23" class="onoffswitch2-label"></label>
                                    </p>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <span class="me-auto">RTL Version</span>
                                    <p class="onoffswitch2"><input type="radio" name="onoffswitch7" id="myonoffswitch24" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch24" class="onoffswitch2-label"></label>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swichermainleft">
                        <h4>Light Theme Style</h4>
                        <div class="skin-body">
                            <div class="switch_section">
                                <div class="switch-toggle d-flex">
                                    <span class="me-auto">Light Theme</span>
                                    <p class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
                                        <label for="myonoffswitch1" class="onoffswitch2-label"></label>
                                    </p>
                                </div>
                                <div class="switch-toggle d-flex">
                                    <span class="me-auto">Light Primary</span>
                                    <div class="">
                                        <input class="w-30p h-30 input-color-picker color-primary-light" value="#6c5ffc" id="colorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id7="transparentcolor" name="lightPrimary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swichermainleft">
                        <h4>Dark Theme Style</h4>
                        <div class="skin-body">
                            <div class="switch_section">
                                <div class="switch-toggle d-flex mt-2">
                                    <span class="me-auto">Dark Theme</span>
                                    <p class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitch2" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch2" class="onoffswitch2-label"></label>
                                    </p>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <span class="me-auto">Dark Primary</span>
                                    <div class="">
                                        <input class="w-30p h-30 input-dark-color-picker color-primary-dark" value="#6c5ffc" id="darkPrimaryColorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id8="transparentcolor"
                                               name="darkPrimary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swichermainleft">
                        <h4>Transparent Theme Style</h4>
                        <div class="skin-body">
                            <div class="switch_section">
                                <div class="switch-toggle d-flex mt-2">
                                    <span class="me-auto">Transparent Theme</span>
                                    <p class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitchTransparent" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitchTransparent" class="onoffswitch2-label"></label>
                                    </p>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <span class="me-auto">Transparent Primary</span>
                                    <div class="">
                                        <input class="w-30p h-30 input-transparent-color-picker color-primary-transparent" value="#6c5ffc" id="transparentPrimaryColorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary"
                                               data-id4="primary" data-id9="transparentcolor" name="tranparentPrimary">
                                    </div>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <span class="me-auto">Transparent Background</span>
                                    <div class="">
                                        <input class="w-30p h-30 input-transparent-color-picker color-bg-transparent" value="#6c5ffc" id="transparentBgColorID" type="color" data-id5="body" data-id6="theme" data-id9="transparentcolor" name="transparentBackground">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swichermainleft">
                        <h4>Transparent Bg-Image Style</h4>
                        <div class="skin-body switch_section">
                            <div class="switch-toggle d-flex">
                                <span class="me-auto">Bg-Image Primary</span>
                                <div class="">
                                    <input class="w-30p h-30 input-transparent-color-picker color-primary-transparent" value="#6c5ffc" id="transparentBgImgPrimaryColorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id4="primary"  data-id9="transparentcolor" name="tranparentPrimary">
                                </div>
                            </div>
                            <div class="switch-toggle d-flex mt-2">
                                <a class="bg-img1 bg-img" href="javascript:void(0);"><img src="{{ URL::asset('admin/build/assets/images/media/bg-img1.jpg')}}"  alt="Bg-Image" id="bgimage1"></a>
                                <a class="bg-img2 bg-img" href="javascript:void(0);"><img src="{{ URL::asset('admin/build/assets/images/media/bg-img2.jpg')}}"  alt="Bg-Image"  id="bgimage2"></a>
                                <a class="bg-img3 bg-img" href="javascript:void(0);"><img src="{{ URL::asset('admin/build/assets/images/media/bg-img3.jpg')}}"  alt="Bg-Image" id="bgimage3"></a>
                                <a class="bg-img4 bg-img" href="javascript:void(0);"><img src="{{ URL::asset('admin/build/assets/images/media/bg-img4.jpg')}}"  alt="Bg-Image" id="bgimage4"></a>
                            </div>
                        </div>
                    </div>
                    <div class="swichermainleft">
                        <h4>Menu Styles</h4>
                        <div class="skin-body">
                            <div class="switch_section">
                                <div class="switch-toggle lightMenu d-flex">
                                    <span class="me-auto">Light Menu</span>
                                    <p class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch3" class="onoffswitch2-checkbox" checked>
                                        <label for="myonoffswitch3" class="onoffswitch2-label"></label>
                                    </p>
                                </div>
                                <div class="switch-toggle colorMenu d-flex mt-2">
                                    <span class="me-auto">Color Menu</span>
                                    <p class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch4" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch4" class="onoffswitch2-label"></label>
                                    </p>
                                </div>
                                <div class="switch-toggle darkMenu d-flex mt-2">
                                    <span class="me-auto">Dark Menu</span>
                                    <p class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch5" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch5" class="onoffswitch2-label"></label>
                                    </p>
                                </div>
                                <div class="switch-toggle gradientMenu d-flex mt-2">
                                    <span class="me-auto">Gradient Menu</span>
                                    <p class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch19" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch19" class="onoffswitch2-label"></label>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swichermainleft">
                        <h4>Header Styles</h4>
                        <div class="skin-body">
                            <div class="switch_section">
                                <div class="switch-toggle lightHeader d-flex">
                                    <span class="me-auto">Light Header</span>
                                    <p class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch6" class="onoffswitch2-checkbox" checked>
                                        <label for="myonoffswitch6" class="onoffswitch2-label"></label>
                                    </p>
                                </div>
                                <div class="switch-toggle  colorHeader d-flex mt-2">
                                    <span class="me-auto">Color Header</span>
                                    <p class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch7" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch7" class="onoffswitch2-label"></label>
                                    </p>
                                </div>
                                <div class="switch-toggle darkHeader d-flex mt-2">
                                    <span class="me-auto">Dark Header</span>
                                    <p class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch8" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch8" class="onoffswitch2-label"></label>
                                    </p>
                                </div>

                                <div class="switch-toggle darkHeader d-flex mt-2">
                                    <span class="me-auto">Gradient Header</span>
                                    <p class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch20" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch20" class="onoffswitch2-label"></label>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swichermainleft">
                        <h4>Layout Width Styles</h4>
                        <div class="skin-body">
                            <div class="switch_section">
                                <div class="switch-toggle d-flex">
                                    <span class="me-auto">Full Width</span>
                                    <p class="onoffswitch2"><input type="radio" name="onoffswitch4" id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
                                        <label for="myonoffswitch9" class="onoffswitch2-label"></label>
                                    </p>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <span class="me-auto">Boxed</span>
                                    <p class="onoffswitch2"><input type="radio" name="onoffswitch4" id="myonoffswitch10" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch10" class="onoffswitch2-label"></label>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swichermainleft">
                        <h4>Layout Positions</h4>
                        <div class="skin-body">
                            <div class="switch_section">
                                <div class="switch-toggle d-flex">
                                    <span class="me-auto">Fixed</span>
                                    <p class="onoffswitch2"><input type="radio" name="onoffswitch5" id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
                                        <label for="myonoffswitch11" class="onoffswitch2-label"></label>
                                    </p>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <span class="me-auto">Scrollable</span>
                                    <p class="onoffswitch2"><input type="radio" name="onoffswitch5" id="myonoffswitch12" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch12" class="onoffswitch2-label"></label>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swichermainleft leftmenu-styles">
                        <h4>Sidemenu layout Styles</h4>
                        <div class="skin-body">
                            <div class="switch_section">
                                <div class="switch-toggle d-flex">
                                    <span class="me-auto">Default Menu</span>
                                    <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch13" class="onoffswitch2-checkbox default-menu" checked>
                                        <label for="myonoffswitch13" class="onoffswitch2-label"></label>
                                    </p>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <span class="me-auto">Icon with Text</span>
                                    <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch14" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch14" class="onoffswitch2-label"></label>
                                    </p>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <span class="me-auto">Icon Overlay</span>
                                    <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch15" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch15" class="onoffswitch2-label"></label>
                                    </p>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <span class="me-auto">Closed Sidemenu</span>
                                    <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch16" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch16" class="onoffswitch2-label"></label>
                                    </p>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <span class="me-auto">Hover Submenu</span>
                                    <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch17" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch17" class="onoffswitch2-label"></label>
                                    </p>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <span class="me-auto">Hover Submenu Style 1</span>
                                    <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch18" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch18" class="onoffswitch2-label"></label>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swichermainleft">
                        <h4>Reset All Styles</h4>
                        <div class="skin-body">
                            <div class="switch_section my-4">
                                <button class="btn btn-danger btn-block"
                                        type="button" id="resetAll">Reset All
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>        <!-- END SWITCHER -->

<!--- GLOBAL LOADER -->
<!-- <div id="global-loader" >
			<img src="{{ URL::asset('admin/build/assets/images/loader.svg')}}" class="loader-img" alt="loader">
		</div> -->
<!--- END GLOBAL LOADER -->

<!-- PAGE -->
<div class="page">

    <!-- app-Header -->
    <div class="app-header header sticky">
        <div class="container-fluid main-container">
            <div class="d-flex">
                <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
                <!-- sidebar-toggle-->
                <a class="logo-horizontal " href="index.html">
                    <img src="{{ URL::asset('admin/build/assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
                    <img src="{{ URL::asset('admin/build/assets/images/brand/logo-3.png')}}" class="header-brand-img light-logo1"
                         alt="logo">
                </a>
                <!-- LOGO -->
                <div class="main-header-center ms-3 d-none d-lg-block">
                    <input type="text" class="form-control" id="typehead" placeholder="Search for results..." autocomplete="off">
                    <button class="btn px-0 pt-2"><i class="fe fe-search" aria-hidden="true"></i></button>
                </div>
                <div class="d-flex order-lg-2 ms-auto header-right-icons">
                    <!-- SEARCH -->
                    <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                            aria-controls="navbarSupportedContent-4" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                    </button>
                    <div class="navbar navbar-collapse responsive-navbar p-0">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                            <div class="d-flex order-lg-2">
                                <div class="dropdown d-lg-none d-flex">
                                    <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                        <i class="fe fe-search"></i>
                                    </a>
                                    <div class="dropdown-menu header-search dropdown-menu-start">
                                        <div class="input-group w-100 p-2">
                                            <input type="text" class="form-control" placeholder="Search....">
                                            <div class="input-group-text btn btn-primary">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex country">
                                    <a class="nav-link icon text-center" data-bs-target="#country-selector"
                                       data-bs-toggle="modal">
                                        <i class="fe fe-globe"></i><span
                                            class="fs-16 ms-2 d-none d-xl-block">English</span>
                                    </a>
                                </div>
                                <!-- COUNTRY -->
                                <div class="d-flex country">
                                    <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                        <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                        <span class="light-layout"><i class="fe fe-sun"></i></span>
                                    </a>
                                </div>
                                <!-- Theme-Layout -->
                                <div class="dropdown  d-flex shopping-cart">
                                    <a class="nav-link icon text-center" data-bs-toggle="dropdown">
                                        <i class="fe fe-shopping-cart"></i><span class="badge bg-secondary header-badge">4</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <div class="drop-heading border-bottom">
                                            <div class="d-flex">
                                                <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark"> My Shopping Cart</h6>
                                                <div class="ms-auto">
                                                    <span class="badge bg-danger-transparent header-badge text-danger fs-14">Hurry Up!</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="header-dropdown-list message-menu">
                                            <div class="dropdown-item d-flex p-4">
                                                <a href="cart.html" class="open-file"></a>
                                                <span
                                                    class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
                                                    data-bs-image-src="{{ URL::asset('admin/build/assets/images/pngs/4.jpg')}}"></span>
                                                <div class="wd-50p">
                                                    <h5 class="mb-1">Flower Pot for Home Decor</h5>
                                                    <span>Status: <span class="text-success">In Stock</span></span>
                                                    <p class="fs-13 text-muted mb-0">Quantity: 01</p>
                                                </div>
                                                <div class="ms-auto text-end d-flex fs-16">
                                                            <span class="fs-16 text-dark d-none d-sm-block px-4">
                                                                $438
                                                            </span>
                                                    <a href="javascript:void(0)" class="fs-16 btn p-0 cart-trash">
                                                        <i class="fe fe-trash-2 border text-danger brround d-block p-2"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex p-4">
                                                <a href="cart.html" class="open-file"></a>
                                                <span
                                                    class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
                                                    data-bs-image-src="{{ URL::asset('admin/build/assets/images/pngs/6.jpg')}}"></span>
                                                <div class="wd-50p">
                                                    <h5 class="mb-1">Black Digital Camera</h5>
                                                    <span>Status: <span class="text-danger">Out Stock</span></span>
                                                    <p class="fs-13 text-muted mb-0">Quantity: 06</p>
                                                </div>
                                                <div class="ms-auto text-end d-flex">
                                                            <span class="fs-16 text-dark d-none d-sm-block px-4">
                                                                $867
                                                            </span>
                                                    <a href="javascript:void(0)" class="fs-16 btn p-0 cart-trash">
                                                        <i class="fe fe-trash-2 border text-danger brround d-block p-2"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex p-4">
                                                <a href="cart.html" class="open-file"></a>
                                                <span
                                                    class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
                                                    data-bs-image-src="{{ URL::asset('admin/build/assets/images/pngs/8.jpg')}}"></span>
                                                <div class="wd-50p">
                                                    <h5 class="mb-1">Stylish Rockerz 255 Ear Pods</h5>
                                                    <span>Status: <span class="text-success">In Stock</span></span>
                                                    <p class="fs-13 text-muted mb-0">Quantity: 05</p>
                                                </div>
                                                <div class="ms-auto text-end d-flex">
                                                            <span class="fs-16 text-dark d-none d-sm-block px-4">
                                                                $323
                                                            </span>
                                                    <a href="javascript:void(0)" class="fs-16 btn p-0 cart-trash">
                                                        <i class="fe fe-trash-2 border text-danger brround d-block p-2"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex p-4">
                                                <a href="cart.html" class="open-file"></a>
                                                <span
                                                    class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
                                                    data-bs-image-src="{{ URL::asset('admin/build/assets/images/pngs/1.jpg')}}"></span>
                                                <div class="wd-50p">
                                                    <h5 class="mb-1">Women Party Wear Dress</h5>
                                                    <span>Status: <span class="text-success">In Stock</span></span>
                                                    <p class="fs-13 text-muted mb-0">Quantity: 05</p>
                                                </div>
                                                <div class="ms-auto text-end d-flex">
                                                            <span class="fs-16 text-dark d-none d-sm-block px-4">
                                                                $867
                                                            </span>
                                                    <a href="javascript:void(0)" class="fs-16 btn p-0 cart-trash">
                                                        <i class="fe fe-trash-2 border text-danger brround d-block p-2"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex p-4">
                                                <a href="cart.html" class="open-file"></a>
                                                <span
                                                    class="avatar avatar-xl br-5 me-3 align-self-center cover-image"
                                                    data-bs-image-src="{{ URL::asset('admin/build/assets/images/pngs/3.jpg')}}"></span>
                                                <div class="wd-50p">
                                                    <h5 class="mb-1">Running Shoes for men</h5>
                                                    <span>Status: <span class="text-success">In Stock</span></span>
                                                    <p class="fs-13 text-muted mb-0">Quantity: 05</p>
                                                </div>
                                                <div class="ms-auto text-end d-flex">
                                                            <span class="fs-16 text-dark d-none d-sm-block px-4">
                                                                $456
                                                            </span>
                                                    <a href="javascript:void(0)" class="fs-16 btn p-0 cart-trash">
                                                        <i class="fe fe-trash-2 border text-danger brround d-block p-2"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-divider m-0"></div>
                                        <div class="dropdown-footer">
                                            <a class="btn btn-primary btn-pill w-sm btn-sm py-2" href="checkout.html"><i class="fe fe-check-circle"></i> Checkout</a>
                                            <span class="float-end p-2 fs-17 fw-semibold">Total: $6789</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- CART -->
                                <div class="dropdown d-flex">
                                    <a class="nav-link icon full-screen-link nav-link-bg">
                                        <i class="fe fe-minimize fullscreen-button"></i>
                                    </a>
                                </div>
                                <!-- FULL-SCREEN -->
                                <div class="dropdown  d-flex notifications">
                                    <a class="nav-link icon" data-bs-toggle="dropdown"><i
                                            class="fe fe-bell"></i><span class=" pulse"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <div class="drop-heading border-bottom">
                                            <div class="d-flex">
                                                <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">Notifications
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="notifications-menu">
                                            <a class="dropdown-item d-flex" href="notify-list.html">
                                                <div class="me-3 notifyimg  bg-primary brround box-shadow-primary">
                                                    <i class="fe fe-mail"></i>
                                                </div>
                                                <div class="mt-1 wd-80p">
                                                    <h5 class="notification-label mb-1">New Application received
                                                    </h5>
                                                    <span class="notification-subtext">3 days ago</span>
                                                </div>
                                            </a>
                                            <a class="dropdown-item d-flex" href="notify-list.html">
                                                <div class="me-3 notifyimg  bg-secondary brround box-shadow-secondary">
                                                    <i class="fe fe-check-circle"></i>
                                                </div>
                                                <div class="mt-1 wd-80p">
                                                    <h5 class="notification-label mb-1">Project has been
                                                        approved</h5>
                                                    <span class="notification-subtext">2 hours ago</span>
                                                </div>
                                            </a>
                                            <a class="dropdown-item d-flex" href="notify-list.html">
                                                <div class="me-3 notifyimg  bg-success brround box-shadow-success">
                                                    <i class="fe fe-shopping-cart"></i>
                                                </div>
                                                <div class="mt-1 wd-80p">
                                                    <h5 class="notification-label mb-1">Your Product Delivered
                                                    </h5>
                                                    <span class="notification-subtext">30 min ago</span>
                                                </div>
                                            </a>
                                            <a class="dropdown-item d-flex" href="notify-list.html">
                                                <div class="me-3 notifyimg bg-pink brround box-shadow-pink">
                                                    <i class="fe fe-user-plus"></i>
                                                </div>
                                                <div class="mt-1 wd-80p">
                                                    <h5 class="notification-label mb-1">Friend Requests</h5>
                                                    <span class="notification-subtext">1 day ago</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="dropdown-divider m-0"></div>
                                        <a href="notify-list.html"
                                           class="dropdown-item text-center p-3 text-muted">View all
                                            Notification</a>
                                    </div>
                                </div>
                                <!-- NOTIFICATIONS -->
                                <div class="dropdown  d-flex message">
                                    <a class="nav-link icon text-center" data-bs-toggle="dropdown">
                                        <i class="fe fe-message-square"></i><span class="pulse-danger"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <div class="drop-heading border-bottom">
                                            <div class="d-flex">
                                                <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">You have 5
                                                    Messages</h6>
                                                <div class="ms-auto">
                                                    <a href="javascript:void(0)" class="text-muted p-0 fs-12">make all unread</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="message-menu message-menu-scroll">
                                            <a class="dropdown-item d-flex" href="chat.html">
                                                        <span
                                                            class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ URL::asset('admin/build/assets/images/users/1.jpg')}}"></span>
                                                <div class="wd-90p">
                                                    <div class="d-flex">
                                                        <h5 class="mb-1">Peter Theil</h5>
                                                        <small class="text-muted ms-auto text-end">
                                                            6:45 am
                                                        </small>
                                                    </div>
                                                    <span>Commented on file Guest list....</span>
                                                </div>
                                            </a>
                                            <a class="dropdown-item d-flex" href="chat.html">
                                                        <span
                                                            class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ URL::asset('admin/build/assets/images/users/15.jpg')}}"></span>
                                                <div class="wd-90p">
                                                    <div class="d-flex">
                                                        <h5 class="mb-1">Abagael Luth</h5>
                                                        <small class="text-muted ms-auto text-end">
                                                            10:35 am
                                                        </small>
                                                    </div>
                                                    <span>New Meetup Started......</span>
                                                </div>
                                            </a>
                                            <a class="dropdown-item d-flex" href="chat.html">
                                                        <span
                                                            class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ URL::asset('admin/build/assets/images/users/12.jpg')}}"></span>
                                                <div class="wd-90p">
                                                    <div class="d-flex">
                                                        <h5 class="mb-1">Brizid Dawson</h5>
                                                        <small class="text-muted ms-auto text-end">
                                                            2:17 pm
                                                        </small>
                                                    </div>
                                                    <span>Brizid is in the Warehouse...</span>
                                                </div>
                                            </a>
                                            <a class="dropdown-item d-flex" href="chat.html">
                                                        <span
                                                            class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ URL::asset('admin/build/assets/images/users/4.jpg')}}"></span>
                                                <div class="wd-90p">
                                                    <div class="d-flex">
                                                        <h5 class="mb-1">Shannon Shaw</h5>
                                                        <small class="text-muted ms-auto text-end">
                                                            7:55 pm
                                                        </small>
                                                    </div>
                                                    <span>New Product Realease......</span>
                                                </div>
                                            </a>
                                            <a class="dropdown-item d-flex" href="chat.html">
                                                        <span
                                                            class="avatar avatar-md brround me-3 align-self-center cover-image"
                                                            data-bs-image-src="{{ URL::asset('admin/build/assets/images/users/3.jpg')}}"></span>
                                                <div class="wd-90p">
                                                    <div class="d-flex">
                                                        <h5 class="mb-1">Cherry Blossom</h5>
                                                        <small class="text-muted ms-auto text-end">
                                                            7:55 pm
                                                        </small>
                                                    </div>
                                                    <span>You have appointment on......</span>
                                                </div>
                                            </a>

                                        </div>
                                        <div class="dropdown-divider m-0"></div>
                                        <a href="javascript:void(0)" class="dropdown-item text-center p-3 text-muted">See all
                                            Messages</a>
                                    </div>
                                </div>
                                <!-- MESSAGE-BOX -->
                                <div class="dropdown d-flex header-settings">
                                    <a href="javascript:void(0);" class="nav-link icon"
                                       data-bs-toggle="sidebar-right" data-target=".sidebar-right">
                                        <i class="fe fe-align-right"></i>
                                    </a>
                                </div>
                                <!-- SIDE-MENU -->
                                <div class="dropdown d-flex profile-1">
                                    <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                        <img src="{{ URL::asset('admin/build/assets/images/users/21.jpg')}}" alt="profile-user"
                                             class="avatar  profile-user brround cover-image">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <div class="drop-heading">
                                            <div class="text-center">
                                                <h5 class="text-dark mb-0 fs-14 fw-semibold">Percy Kewshun</h5>
                                                <small class="text-muted">Senior Admin</small>
                                            </div>
                                        </div>
                                        <div class="dropdown-divider m-0"></div>
                                        <a class="dropdown-item" href="profile.html">
                                            <i class="dropdown-icon fe fe-user"></i> Profile
                                        </a>
                                        <a class="dropdown-item" href="email-inbox.html">
                                            <i class="dropdown-icon fe fe-mail"></i> Inbox
                                            <span class="badge bg-danger rounded-pill float-end">5</span>
                                        </a>
                                        <a class="dropdown-item" href="lockscreen.html">
                                            <i class="dropdown-icon fe fe-lock"></i> Lockscreen
                                        </a>
                                        <a class="dropdown-item" href="login.html">
                                            <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="demo-icon nav-link icon">
                        <i class="fe fe-settings fa-spin  text_primary"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>            <!-- /app-Header -->

    <!--APP-SIDEBAR-->
    <div class="sticky">
        <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
        <div class="app-sidebar">
            <div class="side-header">
                <a class="header-brand1" href="index.html">
                    <img src="{{ URL::asset('admin/build/assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
                    <img src="{{ URL::asset('admin/build/assets/images/brand/logo-1.png')}}" class="header-brand-img toggle-logo" alt="logo">
                    <img src="{{ URL::asset('admin/build/assets/images/brand/logo-2.png')}}" class="header-brand-img light-logo" alt="logo">
                    <img src="{{ URL::asset('admin/build/assets/images/brand/logo-3.png')}}" class="header-brand-img light-logo1" alt="logo">
                </a>
                <!-- LOGO -->
            </div>
            <div class="main-sidemenu">
                <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
                <ul class="side-menu">
                    <li class="sub-category">
                        <h3>Main</h3>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('index') }}"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                    </li>

                    <li class="slide">
                        <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('aboutUs') }}"><i class="side-menu__icon fa-regular fa-newspaper"></i><span class="side-menu__label">About Us</span></a>
                    </li>

                    <li class="slide">
                        <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('Eduction.index') }}"><i class="side-menu__icon fa-regular fa-newspaper"></i><span class="side-menu__label">Eduction</span></a>
                    </li>

                    <li class="slide">
                        <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('Portfolio.index') }}"><i class="side-menu__icon fa-solid fa-user"></i><span class="side-menu__label">Personal Information</span></a>
                    </li>

                    <li class="slide">
                        <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('Experience.index') }}"><i class="side-menu__icon fa-regular fa-newspaper"></i><span class="side-menu__label">Experience</span></a>
                    </li>
                    {{--                    <li class="sub-category">--}}
{{--                        <h3>UI Kit</h3>--}}
{{--                    </li>--}}
{{--                    <li class="slide">--}}
{{--                        <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-slack"></i><span class="side-menu__label">Apps</span><i class="angle fe fe-chevron-right"></i></a>--}}
{{--                        <ul class="slide-menu">--}}
{{--                            <li class="side-menu-label1"><a href="javascript:void(0)">Apps</a></li>--}}
{{--                            <li><a href="cards.html" class="slide-item"> Cards design</a></li>--}}
{{--                            <li><a href="calendar.html" class="slide-item"> Default calendar</a></li>--}}
{{--                            <li><a href="calendar2.html" class="slide-item"> Full calendar</a></li>--}}
{{--                            <li><a href="chat.html" class="slide-item"> Chat</a></li>--}}
{{--                            <li><a href="notify.html" class="slide-item"> Notifications</a></li>--}}
{{--                            <li><a href="sweetalert.html" class="slide-item"> Sweet alerts</a></li>--}}
{{--                            <li><a href="rangeslider.html" class="slide-item"> Range slider</a></li>--}}
{{--                            <li><a href="scroll.html" class="slide-item"> Content Scroll bar</a></li>--}}
{{--                            <li><a href="loaders.html" class="slide-item"> Loaders</a></li>--}}
{{--                            <li><a href="counters.html" class="slide-item"> Counters</a></li>--}}
{{--                            <li><a href="rating.html" class="slide-item"> Rating</a></li>--}}
{{--                            <li><a href="timeline.html" class="slide-item"> Timeline</a></li>--}}
{{--                            <li><a href="treeview.html" class="slide-item"> Treeview</a></li>--}}
{{--                            <li><a href="chart.html" class="slide-item"> Charts</a></li>--}}
{{--                            <li><a href="footers.html" class="slide-item"> Footers</a></li>--}}
{{--                            <li><a href="users-list.html" class="slide-item"> User List</a></li>--}}
{{--                            <li><a href="search.html" class="slide-item">Search</a></li>--}}
{{--                            <li><a href="crypto-currencies.html" class="slide-item"> Crypto-currencies</a></li>--}}
{{--                            <li><a href="widgets.html" class="slide-item"> Widgets</a></li>--}}

{{--                        </ul>--}}
{{--                    </li>--}}

                </ul>
                <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
            </div>
        </div>

    </div>            <!-- /APP-SIDEBAR-->

    @yield('content')


    <!-- Sidebar-right -->
    <div class="sidebar sidebar-right sidebar-animate">
        <div class="panel panel-primary card mb-0 shadow-none border-0">
            <div class="tab-menu-heading border-0 d-flex p-3">
                <div class="card-title mb-0"><i class="fe fe-bell me-2"></i><span class=" pulse"></span>Notifications</div>
                <div class="card-options ms-auto">
                    <a href="javascript:void(0);" class="sidebar-icon text-end float-end me-3 mb-1" data-bs-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x text-white"></i></a>
                </div>
            </div>
            <div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
                <div class="tabs-menu border-bottom">
                    <!-- Tabs -->
                    <ul class="nav panel-tabs">
                        <li class=""><a href="#side1" class="active" data-bs-toggle="tab"><i class="fe fe-settings me-1"></i>Feeds</a></li>
                        <li><a href="#side2" data-bs-toggle="tab"><i class="fe fe-message-circle"></i> Chat</a></li>
                        <li><a href="#side3" data-bs-toggle="tab"><i class="fe fe-anchor me-1"></i>Timeline</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="side1">
                        <div class="p-3 fw-semibold ps-5">Feeds</div>
                        <div class="card-body pt-2">
                            <div class="browser-stats">
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span class="feeds avatar-circle brround bg-primary-transparent"><i class="fe fe-user text-primary"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">New user registered</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span class="feeds avatar-circle avatar-circle-secondary brround bg-secondary-transparent"><i class="fe fe-shopping-cart text-secondary"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">New order delivered</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span class="feeds avatar-circle avatar-circle-danger brround bg-danger-transparent"><i class="fe fe-bell text-danger"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">You have pending tasks</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span class="feeds avatar-circle avatar-circle-warning brround bg-warning-transparent"><i class="fe fe-gitlab text-warning"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">New version arrived</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span class="feeds avatar-circle avatar-circle-pink brround bg-pink-transparent"><i class="fe fe-database text-pink"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">Server #1 overloaded</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span class="feeds avatar-circle avatar-circle-info brround bg-info-transparent"><i class="fe fe-check-circle text-info"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">New project launched</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 fw-semibold ps-5">Settings</div>
                        <div class="card-body pt-2">
                            <div class="browser-stats">
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span class="feeds avatar-circle brround bg-primary-transparent"><i class="fe fe-settings text-primary"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">General Settings</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span class="feeds avatar-circle avatar-circle-secondary brround bg-secondary-transparent"><i class="fe fe-map-pin text-secondary"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">Map Settings</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span class="feeds avatar-circle avatar-circle-danger brround bg-danger-transparent"><i class="fe fe-headphones text-danger"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">Support Settings</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span class="feeds avatar-circle avatar-circle-warning brround bg-warning-transparent"><i class="fe fe-credit-card text-warning"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">Payment Settings</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-2 mb-sm-0 mb-3">
                                        <span class="feeds avatar-circle avatar-circle-pink brround bg-pink-transparent"><i class="fe fe-bell text-pink"></i></span>
                                    </div>
                                    <div class="col-sm-10 ps-sm-0">
                                        <div class="d-flex align-items-end justify-content-between ms-2">
                                            <h6 class="">Notification Settings</h6>
                                            <div>
                                                <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="side2">
                        <div class="list-group list-group-flush">
                            <div class="pt-3 fw-semibold ps-5">Today</div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{ URL::asset('admin/build/assets/images/users/2.jpg')}}"></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark">Addie Minstra</div>
                                        <p class="mb-0 fs-12 text-muted"> Hey! there I' am available.... </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{ URL::asset('admin/build/assets/images/users/11.jpg')}}"><span class="avatar-status bg-success"></span></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark">Rose Bush</div>
                                        <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{ URL::asset('admin/build/assets/images/users/10.jpg')}}"></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark">Claude Strophobia</div>
                                        <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project...... </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{ URL::asset('admin/build/assets/images/users/13.jpg')}}"></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark">Eileen Dover</div>
                                        <p class="mb-0 fs-12 text-muted"> New product Launching... </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{ URL::asset('admin/build/assets/images/users/12.jpg')}}"><span class="avatar-status bg-success"></span></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark">Willie Findit</div>
                                        <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{ URL::asset('admin/build/assets/images/users/15.jpg')}}"></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark">Manny Jah</div>
                                        <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project...... </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{ URL::asset('admin/build/assets/images/users/4.jpg')}}"></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark">Cherry Blossom</div>
                                        <p class="mb-0 fs-12 text-muted"> Hey! there I' am available....</p>
                                    </a>
                                </div>
                            </div>
                            <div class="pt-3 fw-semibold ps-5">Yesterday</div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{ URL::asset('admin/build/assets/images/users/7.jpg')}}"><span class="avatar-status bg-success"></span></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark">Simon Sais</div>
                                        <p class="mb-0 fs-12 text-muted">Schedule Realease...... </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{ URL::asset('admin/build/assets/images/users/9.jpg')}}"></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark">Laura Biding</div>
                                        <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project...... </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{ URL::asset('admin/build/assets/images/users/2.jpg')}}"><span class="avatar-status bg-success"></span></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark">Addie Minstra</div>
                                        <p class="mb-0 fs-12 text-muted">Contact me for details....</p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{ URL::asset('admin/build/assets/images/users/9.jpg')}}"></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark">Ivan Notheridiya</div>
                                        <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project...... </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{ URL::asset('admin/build/assets/images/users/14.jpg')}}"></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark">Dulcie Veeta</div>
                                        <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you </p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{ URL::asset('admin/build/assets/images/users/11.jpg')}}"></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark">Florinda Carasco</div>
                                        <p class="mb-0 fs-12 text-muted">New product Launching...</p>
                                    </a>
                                </div>
                            </div>
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-md brround cover-image" data-bs-image-src="{{ URL::asset('admin/build/assets/images/users/4.jpg')}}"><span class="avatar-status bg-success"></span></span>
                                </div>
                                <div class="">
                                    <a href="chat.html">
                                        <div class="fw-semibold text-dark">Cherry Blossom</div>
                                        <p class="mb-0 fs-12 text-muted">cherryblossom@gmail.com</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="side3">
                        <ul class="task-list timeline-task">
                            <li class="d-sm-flex mt-4">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold">Task Finished<span class="text-muted fs-11 mx-2 fw-normal">09 July 2021</span></h6>
                                    <p class="text-muted fs-12">Adam Berry finished task on<a href="javascript:void(0)" class="fw-semibold"> Project Management</a></p>
                                </div>
                                <div class="ms-auto d-md-flex me-3">
                                    <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                    <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold">New Comment<span class="text-muted fs-11 mx-2 fw-normal">05 July 2021</span></h6>
                                    <p class="text-muted fs-12">Victoria commented on Project <a href="javascript:void(0)" class="fw-semibold"> AngularJS Template</a></p>
                                </div>
                                <div class="ms-auto d-md-flex me-3">
                                    <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                    <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold">New Comment<span class="text-muted fs-11 mx-2 fw-normal">25 June 2021</span></h6>
                                    <p class="text-muted fs-12">Victoria commented on Project <a href="javascript:void(0)" class="fw-semibold"> AngularJS Template</a></p>
                                </div>
                                <div class="ms-auto d-md-flex me-3">
                                    <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                    <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold">Task Overdue<span class="text-muted fs-11 mx-2 fw-normal">14 June 2021</span></h6>
                                    <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a href="javascript:void(0)" class="fw-semibold"> Integrated management</a></p>
                                </div>
                                <div class="ms-auto d-md-flex me-3">
                                    <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                    <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold">Task Overdue<span class="text-muted fs-11 mx-2 fw-normal">29 June 2021</span></h6>
                                    <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a href="javascript:void(0)" class="fw-semibold"> Integrated management</a></p>
                                </div>
                                <div class="ms-auto d-md-flex me-3">
                                    <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                    <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold">Task Finished<span class="text-muted fs-11 mx-2 fw-normal">09 July 2021</span></h6>
                                    <p class="text-muted fs-12">Adam Berry finished task on<a href="javascript:void(0)" class="fw-semibold"> Project Management</a></p>
                                </div>
                                <div class="ms-auto d-md-flex me-3">
                                    <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                    <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Sidebar-right -->

    <!-- Country-selector modal-->
    <div class="modal fade" id="country-selector">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content country-select-modal">
                <div class="modal-header">
                    <h6 class="modal-title">Choose Country</h6><button aria-label="Close" class="btn-close"
                                                                       data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <ul class="row p-3">
                        <li class="col-lg-6 mb-2">
                            <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block active">
                                        <span class="country-selector"><img alt="" src="{{ URL::asset('admin/build/assets/images/flags/us_flag.jpg')}}"
                                                                            class="me-3 language"></span>USA
                            </a>
                        </li>
                        <li class="col-lg-6 mb-2">
                            <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt=""
                                                                            src="{{ URL::asset('admin/build/assets/images/flags/italy_flag.jpg')}}"
                                                                            class="me-3 language"></span>Italy
                            </a>
                        </li>
                        <li class="col-lg-6 mb-2">
                            <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt=""
                                                                            src="{{ URL::asset('admin/build/assets/images/flags/spain_flag.jpg')}}"
                                                                            class="me-3 language"></span>Spain
                            </a>
                        </li>
                        <li class="col-lg-6 mb-2">
                            <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector">
                                <img alt="" src="{{ URL::asset('admin/build/assets/images/flags/india_flag.jpg')}}" class="me-3 language"></span>
                                India
                            </a>
                        </li>
                        <li class="col-lg-6 mb-2">
                            <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt=""
                                                                            src="{{ URL::asset('admin/build/assets/images/flags/french_flag.jpg')}}"
                                                                            class="me-3 language"></span>French
                            </a>
                        </li>
                        <li class="col-lg-6 mb-2">
                            <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt=""
                                                                            src="{{ URL::asset('admin/build/assets/images/flags/russia_flag.jpg')}}"
                                                                            class="me-3 language"></span>Russia
                            </a>
                        </li>
                        <li class="col-lg-6 mb-2">
                            <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt=""
                                                                            src="{{ URL::asset('admin/build/assets/images/flags/germany_flag.jpg')}}"
                                                                            class="me-3 language"></span>Germany
                            </a>
                        </li>
                        <li class="col-lg-6 mb-2">
                            <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt=""
                                                                            src="{{ URL::asset('admin/build/assets/images/flags/argentina.jpg')}}"
                                                                            class="me-3 language"></span>Argentina
                            </a>
                        </li>
                        <li class="col-lg-6 mb-2">
                            <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt="" src="{{ URL::asset('admin/build/assets/images/flags/malaysia.jpg')}}"
                                                                            class="me-3 language"></span>Malaysia
                            </a>
                        </li>
                        <li class="col-lg-6 mb-2">
                            <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                        <span class="country-selector"><img alt="" src="{{ URL::asset('admin/build/assets/images/flags/turkey.jpg')}}"
                                                                            class="me-3 language"></span>Turkey
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /Country-selector modal-->

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-md-12 col-sm-12 text-center">
                    Copyright © <span id="year"></span> <a href="javascript:void(0)">Sash</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0)"> Spruko </a> All rights reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer -->

</div>
<!-- END PAGE-->

<!-- SCRIPTS -->
<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- JQUERY JS -->
<!-- JQUERY JS -->
<!-- <script src="{{ URL::asset('admin/assets/js/jquery.min.js' ) }}"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- BOOTSTRAP JS -->
<script src="{{ URL::asset('admin/assets/plugins/bootstrap/js/popper.min.js' ) }}"></script>
<script src="{{ URL::asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js' ) }}"></script>

<!-- SIDE-MENU JS -->
<script src="{{ URL::asset('admin/assets/plugins/sidemenu/sidemenu.js' ) }}"></script>

<!-- TYPEHEAD JS -->
<script src="{{ URL::asset('admin/assets/plugins/bootstrap5-typehead/autocomplete.js' ) }}"></script>
<script src="{{ URL::asset('admin/assets/js/typehead.js' ) }}"></script>

<!-- SIDEBAR JS -->
<script src="{{ URL::asset('admin/assets/plugins/sidebar/sidebar.js' ) }}"></script>

<!-- PERFECT SCROLLBAR JS-->
<script src="{{ URL::asset('admin/assets/plugins/p-scroll/perfect-scrollbar.js' ) }}"></script>
<script src="{{ URL::asset('admin/assets/plugins/p-scroll/pscroll.js' ) }}"></script>
<script src="{{ URL::asset('admin/assets/plugins/p-scroll/pscroll-1.js' ) }}"></script>
{{--<script src="{{ URL::asset('admin/summernote/summernote.min.js' ) }}"></script>--}}


<!-- STICKEY JS -->
<script src="{{ URL::asset('admin/assets/js/sticky.js' ) }}"></script>

<!-- INTERNAL CHART JS-->
<!-- <script src="{{ URL::asset('admin/assets/plugins/chart/Chart.bundle.js' ) }}"></script>
<script src="{{ URL::asset('admin/assets/plugins/chart/utils.js' ) }}"></script> -->

<!-- INTERNAL SELECT2 JS -->
<script src="{{ URL::asset('admin/assets/plugins/select2/select2.full.min.js' ) }}"></script>

<!-- INTERNAL DATA TABLES JS -->
<script src="{{ URL::asset('admin/assets/plugins/datatable/js/jquery.dataTables.min.js' ) }}"></script>
<script src="{{ URL::asset('admin/assets/plugins/datatable/js/dataTables.bootstrap5.js' ) }}"></script>
<script src="{{ URL::asset('admin/assets/plugins/datatable/js/dataTables.buttons.min.js' ) }}"></script>
<script src="{{ URL::asset('admin/assets/plugins/datatable/js/buttons.bootstrap5.min.js' ) }}"></script>
<script src="{{ URL::asset('admin/assets/plugins/datatable/js/jszip.min.js' ) }}"></script>
<script src="{{ URL::asset('admin/assets/plugins/datatable/pdfmake/pdfmake.min.js' ) }}"></script>
<script src="{{ URL::asset('admin/assets/plugins/datatable/pdfmake/vfs_fonts.js' ) }}"></script>
<script src="{{ URL::asset('admin/assets/plugins/datatable/js/buttons.html5.min.js' ) }}"></script>
<script src="{{ URL::asset('admin/assets/plugins/datatable/js/buttons.print.min.js' ) }}"></script>
<script src="{{ URL::asset('admin/assets/plugins/datatable/js/buttons.colVis.min.js' ) }}"></script>
<script src="{{ URL::asset('admin/assets/plugins/wysiwyag/jquery.richtext.js') }}"></script>
<script src="{{ URL::asset('admin/assets/plugins/wysiwyag/wysiwyag.js')}}"></script>
<script src="{{ URL::asset('admin/assets/plugins/datatable/dataTables.responsive.min.js' ) }}"></script>
<script src="{{ URL::asset('admin/assets/plugins/datatable/responsive.bootstrap5.min.js' ) }}"></script>
<script src="{{ URL::asset('admin/assets/js/table-data.js' ) }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/solid.min.js' ) }}"></script> --}}
<!-- <script src="https://code.jquery.com/jquery-3.7.0.js' ) }}"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js' ) }}"></script> -->

<!-- INTERNAL FLOT JS -->
<!-- <script src="{{ URL::asset('admin/assets/plugins/flot/jquery.flot.js' ) }}"></script>
<script src="{{ URL::asset('admin/assets/plugins/flot/jquery.flot.fillbetween.js' ) }}"></script>
<script src="{{ URL::asset('admin/assets/plugins/flot/chart.flot.sampledata.js' ) }}"></script>
<script src="{{ URL::asset('admin/assets/plugins/flot/dashboard.sampledata.js' ) }}"></script> -->

<!-- INTERNAL VECTOR JS -->
<!-- <script src="{{ URL::asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js' ) }}"></script>
<script src="{{ URL::asset('admin/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js' ) }}"></script> -->

<!-- INTERNAL INDEX1 JS -->
<script src="{{ URL::asset('admin/assets/js/index1.js' ) }}"></script>


<!-- COLOR THEME JS -->
<script src="{{ URL::asset('admin/assets/js/themeColors.js' ) }}"></script>

<script src="{{ URL::asset('admin/assets/js/custom.js' ) }}"></script>

<!-- SWITCHER JS -->
<script src="{{ URL::asset('admin/assets/switcher/js/switcher.js' ) }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
    @if (Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}"
    switch (type) {
        case 'info':

            toastr.options.timeOut = 10000;
            toastr.info("{{ Session::get('message') }}");
            var audio = new Audio('audio.mp3');
            audio.play();
            break;
        case 'success':

            toastr.options.timeOut = 10000;
            toastr.success("{{ Session::get('message') }}");
            var audio = new Audio('audio.mp3');
            audio.play();

            break;
        case 'warning':

            toastr.options.timeOut = 10000;
            toastr.warning("{{ Session::get('message') }}");
            var audio = new Audio('audio.mp3');
            audio.play();

            break;
        case 'error':

            toastr.options.timeOut = 10000;
            toastr.error("{{ Session::get('message') }}");
            var audio = new Audio('audio.mp3');
            audio.play();

            break;
    }
    @endif
</script>
<!-- END SCRIPTS -->
@yield('script')
</body>
</html>
