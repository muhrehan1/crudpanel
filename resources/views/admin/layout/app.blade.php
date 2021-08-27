
<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Dashboard | Minia - Minimal Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template"
            name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- preloader css -->
        <link rel="stylesheet" href="{{asset('assets/css/preloader.min.css')}}"
            type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style"
            rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css"
            />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet"
            type="text/css" />

        <!-- Custom Css -->
        <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css" />
    </head>

    <body data-layout-mode="dark" data-topbar="dark" data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('assets/images/logo-sm.svg')}}" alt=""
                                        height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('assets/images/logo-sm.svg')}}" alt=""
                                        height="24"> <span class="logo-txt">Minia</span>
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.svg" alt=""
                                        height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-sm.svg" alt=""
                                        height="24"> <span class="logo-txt">Minia</span>
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3
                            font-size-16 header-item" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control"
                                    placeholder="Search...">
                                <button class="btn btn-primary" type="button"><i
                                        class="bx bx-search-alt align-middle"></i></button>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item"
                                id="page-header-search-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i data-feather="search" class="icon-lg"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg
                                dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text"
                                                class="form-control"
                                                placeholder="Search ..."
                                                aria-label="Search Result">
                                            <button class="btn btn-primary"
                                                type="submit"><i class="mdi
                                                    mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item"
                                data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <img id="header-lang-img"
                                    src="assets/images/flags/us.jpg" alt="Header
                                    Language" height="16">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">

                                <!-- item-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item notify-item language"
                                    data-lang="en">
                                    <img src="assets/images/flags/us.jpg"
                                        alt="user-image" class="me-1"
                                        height="12"> <span class="align-middle">English</span>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item notify-item language"
                                    data-lang="sp">
                                    <img src="assets/images/flags/spain.jpg"
                                        alt="user-image" class="me-1"
                                        height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item notify-item language"
                                    data-lang="gr">
                                    <img src="assets/images/flags/germany.jpg"
                                        alt="user-image" class="me-1"
                                        height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item notify-item language"
                                    data-lang="it">
                                    <img src="assets/images/flags/italy.jpg"
                                        alt="user-image" class="me-1"
                                        height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item notify-item language"
                                    data-lang="ru">
                                    <img src="assets/images/flags/russia.jpg"
                                        alt="user-image" class="me-1"
                                        height="12"> <span class="align-middle">Russian</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item"
                                id="mode-setting-btn">
                                <i data-feather="moon" class="icon-lg
                                    layout-mode-dark"></i>
                                <i data-feather="sun" class="icon-lg
                                    layout-mode-light"></i>
                            </button>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item"
                                data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i data-feather="grid" class="icon-lg"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg
                                dropdown-menu-end">
                                <div class="p-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item"
                                                href="#">
                                                <img
                                                    src="assets/images/brands/github.png"
                                                    alt="Github">
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item"
                                                href="#">
                                                <img
                                                    src="assets/images/brands/bitbucket.png"
                                                    alt="bitbucket">
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item"
                                                href="#">
                                                <img
                                                    src="assets/images/brands/dribbble.png"
                                                    alt="dribbble">
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item"
                                                href="#">
                                                <img
                                                    src="assets/images/brands/dropbox.png"
                                                    alt="dropbox">
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item"
                                                href="#">
                                                <img
                                                    src="assets/images/brands/mail_chimp.png"
                                                    alt="mail_chimp">
                                                <span>Mail Chimp</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item"
                                                href="#">
                                                <img
                                                    src="assets/images/brands/slack.png"
                                                    alt="slack">
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item
                                noti-icon position-relative"
                                id="page-header-notifications-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i data-feather="bell" class="icon-lg"></i>
                                <span class="badge bg-danger rounded-pill">5</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg
                                dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small text-reset
                                                text-decoration-underline">
                                                Unread (3)</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="#!" class="text-reset
                                        notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img
                                                    src="assets/images/users/avatar-3.jpg"
                                                    class="rounded-circle
                                                    avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">James Lemire</h6>
                                                <div class="font-size-13
                                                    text-muted">
                                                    <p class="mb-1">It will seem
                                                        like simplified English.</p>
                                                    <p class="mb-0"><i
                                                            class="mdi
                                                            mdi-clock-outline"></i>
                                                        <span>1 hours ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="text-reset
                                        notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar-sm
                                                me-3">
                                                <span class="avatar-title
                                                    bg-primary rounded-circle
                                                    font-size-16">
                                                    <i class="bx bx-cart"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your order is
                                                    placed</h6>
                                                <div class="font-size-13
                                                    text-muted">
                                                    <p class="mb-1">If several
                                                        languages coalesce the
                                                        grammar</p>
                                                    <p class="mb-0"><i
                                                            class="mdi
                                                            mdi-clock-outline"></i>
                                                        <span>3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="text-reset
                                        notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar-sm
                                                me-3">
                                                <span class="avatar-title
                                                    bg-success rounded-circle
                                                    font-size-16">
                                                    <i class="bx
                                                        bx-badge-check"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your item is
                                                    shipped</h6>
                                                <div class="font-size-13
                                                    text-muted">
                                                    <p class="mb-1">If several
                                                        languages coalesce the
                                                        grammar</p>
                                                    <p class="mb-0"><i
                                                            class="mdi
                                                            mdi-clock-outline"></i>
                                                        <span>3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#!" class="text-reset
                                        notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img
                                                    src="assets/images/users/avatar-6.jpg"
                                                    class="rounded-circle
                                                    avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Salena Layfield</h6>
                                                <div class="font-size-13
                                                    text-muted">
                                                    <p class="mb-1">As a
                                                        skeptical Cambridge
                                                        friend of mine
                                                        occidental.</p>
                                                    <p class="mb-0"><i
                                                            class="mdi
                                                            mdi-clock-outline"></i>
                                                        <span>1 hours ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14
                                        text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle
                                            me-1"></i> <span>View More..</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item
                                right-bar-toggle me-2">
                                <i data-feather="settings" class="icon-lg"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item
                                bg-soft-light border-start border-end"
                                id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <img class="rounded-circle header-profile-user"
                                    src="assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1
                                    fw-medium">Shawn L.</span>
                                <i class="mdi mdi-chevron-down d-none
                                    d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="mdi
                                        mdi-face-profile font-size-16
                                        align-middle me-1"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="mdi
                                        mdi-credit-card-outline font-size-16
                                        align-middle me-1"></i> Billing</a>
                                <a class="dropdown-item" href="#"><i class="mdi
                                        mdi-account-settings font-size-16
                                        align-middle me-1"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i class="mdi
                                        mdi-lock font-size-16 align-middle
                                        me-1"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="mdi
                                        mdi-logout font-size-16 align-middle
                                        me-1"></i> Logout</a>
                            </div>
                        </div>

                    </div>
                </div>
            </header>


            @extends('admin.layout.leftsidebar')
            <!-- ============================================================== -->
            <!-- Start right Content here -->

            @yield('content');
            <!-- ============================================================== -->
            <div class="main-content" id="miniaresult"></div>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script>
                            ©
                            Minia.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by <a href="#!"
                                    class="text-decoration-underline">Themesbrand</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->


        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center bg-dark
                    p-3">

                    <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle
                        ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="m-0" />

                <div class="p-4">
                    <h6 class="mb-3">Layout</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"
                            name="layout"
                            id="layout-vertical" value="vertical">
                        <label class="form-check-label" for="layout-vertical">Vertical</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"
                            name="layout"
                            id="layout-horizontal" value="horizontal">
                        <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"
                            name="layout-mode"
                            id="layout-mode-light" value="light">
                        <label class="form-check-label" for="layout-mode-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"
                            name="layout-mode"
                            id="layout-mode-dark" value="dark">
                        <label class="form-check-label" for="layout-mode-dark">Dark</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"
                            name="layout-width"
                            id="layout-width-fuild" value="fuild"
                            onchange="document.body.setAttribute('data-layout-size',
                            'fluid')">
                        <label class="form-check-label"
                            for="layout-width-fuild">Fluid</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"
                            name="layout-width"
                            id="layout-width-boxed" value="boxed"
                            onchange="document.body.setAttribute('data-layout-size',
                            'boxed')">
                        <label class="form-check-label"
                            for="layout-width-boxed">Boxed</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"
                            name="layout-position"
                            id="layout-position-fixed" value="fixed"
                            onchange="document.body.setAttribute('data-layout-scrollable',
                            'false')">
                        <label class="form-check-label"
                            for="layout-position-fixed">Fixed</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"
                            name="layout-position"
                            id="layout-position-scrollable" value="scrollable"
                            onchange="document.body.setAttribute('data-layout-scrollable',
                            'true')">
                        <label class="form-check-label"
                            for="layout-position-scrollable">Scrollable</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"
                            name="topbar-color"
                            id="topbar-color-light" value="light"
                            onchange="document.body.setAttribute('data-topbar',
                            'light')">
                        <label class="form-check-label"
                            for="topbar-color-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"
                            name="topbar-color"
                            id="topbar-color-dark" value="dark"
                            onchange="document.body.setAttribute('data-topbar',
                            'dark')">
                        <label class="form-check-label" for="topbar-color-dark">Dark</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio"
                            name="sidebar-size"
                            id="sidebar-size-default" value="default"
                            onchange="document.body.setAttribute('data-sidebar-size',
                            'lg')">
                        <label class="form-check-label"
                            for="sidebar-size-default">Default</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio"
                            name="sidebar-size"
                            id="sidebar-size-compact" value="compact"
                            onchange="document.body.setAttribute('data-sidebar-size',
                            'md')">
                        <label class="form-check-label"
                            for="sidebar-size-compact">Compact</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio"
                            name="sidebar-size"
                            id="sidebar-size-small" value="small"
                            onchange="document.body.setAttribute('data-sidebar-size',
                            'sm')">
                        <label class="form-check-label"
                            for="sidebar-size-small">Small (Icon View)</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio"
                            name="sidebar-color"
                            id="sidebar-color-light" value="light"
                            onchange="document.body.setAttribute('data-sidebar',
                            'light')">
                        <label class="form-check-label"
                            for="sidebar-color-light">Light</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio"
                            name="sidebar-color"
                            id="sidebar-color-dark" value="dark"
                            onchange="document.body.setAttribute('data-sidebar',
                            'dark')">
                        <label class="form-check-label"
                            for="sidebar-color-dark">Dark</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio"
                            name="sidebar-color"
                            id="sidebar-color-brand" value="brand"
                            onchange="document.body.setAttribute('data-sidebar',
                            'brand')">
                        <label class="form-check-label"
                            for="sidebar-color-brand">Brand</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Direction</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"
                            name="layout-direction"
                            id="layout-direction-ltr" value="ltr">
                        <label class="form-check-label"
                            for="layout-direction-ltr">LTR</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"
                            name="layout-direction"
                            id="layout-direction-rtl" value="rtl">
                        <label class="form-check-label"
                            for="layout-direction-rtl">RTL</label>
                    </div>

                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="assets/libs/pace-js/pace.min.js"></script>

        <script
    src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>

        <script src="assets/js/app.js"></script>

        <script src="assets/js/ajax.js"></script>

    </body>

</html>