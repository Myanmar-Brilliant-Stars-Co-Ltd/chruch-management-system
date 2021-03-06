<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Church Management System</title> 
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="{{ asset('backend/css/themes/lite-purple.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/css/plugins/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('backend/css/plugins/fontawesome-5.css')}}" />
    <link href="{{ asset('backend/css/plugins/metisMenu.min.css')}}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{asset('backend/images/logo.png') }}">
</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-vertical sidebar-full">
        <div class="sidebar-panel bg-white">
            <div class="gull-brand pr-3 text-center mt-4 mb-2 d-flex justify-content-center align-items-center"><img class="pl-3" src="{{asset('backend/images/logo.png') }}" alt="alt" />
                <!--  <span class=" item-name text-20 text-primary font-weight-700">GULL</span> -->
                <div class="sidebar-compact-switch ml-auto"><span></span></div>
            </div>
            <!--  user -->
            <div class="scroll-nav ps ps--active-y" data-perfect-scrollbar="data-perfect-scrollbar" data-suppress-scroll-x="true">
                <div class="side-nav">
                    <div class="main-menu">
                        <ul class="metismenu" id="menu">
                            <li class="Ul_li--hover"><a class="" href="{{ route('dashboard') }}"><i class="i-Bar-Chart text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Dashboard</span></a>
                        
                            </li>
                            <li class="Ul_li--hover"><a class="has-arrow" href="#"><i class="i-Library text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">UI Kits</span></a>
                                <ul class="mm-collapse">
                                    <li class="item-name"><a href="alerts.html"><i class="nav-icon i-Bell1"></i><span class="item-name">Alerts</span></a></li>
                                    <li class="item-name"></li>
                                    <li class="nav-item"><a href="dropdown.html"><i class="nav-icon i-Bell1"></i><span class="item-name">Dropdown</span></a></li>
                                    <li class="item-name"><a href="buttons.html"><i class="nav-icon i-Cursor-Click"></i><span class="item-name">Buttons</span></a></li>
                                    <li class="item-name"><a href="bootstrap-tab.html"><i class="nav-icon i-Cursor-Click"></i><span class="item-name">Bootstrap tab</span></a></li>
                                    <li class="item-name"><a href="cards.html"><i class="nav-icon i-Line-Chart-2"></i><span class="item-name">Cards</span></a></li>
                                    <li class="item-name"><a href="card.metrics.html"><i class="nav-icon i-ID-Card"></i><span class="item-name">Card Metrics</span></a></li>
                                    <li class="item-name"><a href="carousel.html"><i class="nav-icon i-Video-Photographer"></i><span class="item-name">Carousels</span></a></li>
                                    <li class="item-name"><a href="collapsible.html"><i class="nav-icon i-Video-Photographer"></i><span class="item-name">Collapsibles</span></a></li>
                                    <li class="item-name"><a href="lists.html"><i class="nav-icon i-Belt-3"></i><span class="item-name">Lists</span></a></li>
                                    <li class="item-name"><a href="pagination.html"><i class="nav-icon i-Arrow-Next"></i><span class="item-name">Paginations</span></a></li>
                                    <li class="item-name"><a href="popover.html"><i class="nav-icon i-Speach-Bubble-2"></i><span class="item-name">Popover</span></a></li>
                                    <li class="item-name"><a href="progressbar.html"><i class="nav-icon i-Loading"></i><span class="item-name">Progressbar</span></a></li>
                                    <li class="item-name"><a href="tables.html"><i class="nav-icon i-File-Horizontal-Text"></i><span class="item-name">Tables</span></a></li>
                                    <li class="item-name"><a href="tabs.html"><i class="nav-icon i-New-Tab"></i><span class="item-name">Tabs</span></a></li>
                                    <li class="item-name"><a href="tooltip.html"><i class="nav-icon i-Speach-Bubble-8"></i><span class="item-name">Tooltip</span></a></li>
                                    <li class="item-name"><a href="typography.html"><i class="nav-icon i-Letter-Open"></i><span class="item-name">Typography</span></a></li>
                                    <li class="item-name"><a href="modals.html"><i class="nav-icon i-Duplicate-Window"></i><span class="item-name">Modals</span></a></li>
                                    <li class="item-name"><a href="nouislider.html"><i class="nav-icon i-Width-Window"></i><span class="item-name">Sliders</span></a></li>
                                </ul>
                            </li>
                            <li class="Ul_li--hover"><a class="has-arrow" href="#"><i class="i-Suitcase text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Extra Kits</span></a>
                                <ul class="mm-collapse">
                                    <li class="item-name"><a href="image.cropper.html"><i class="nav-icon i-Crop-2"></i><span class="item-name">Image Cropper</span></a></li>
                                    <li class="item-name"><a href="loaders.html"><i class="nav-icon i-Loading-3"></i><span class="item-name">Loaders</span></a></li>
                                    <li class="item-name"><a href="ladda.button.html"><i class="nav-icon i-Loading-2"></i><span class="item-name">Ladda Buttons</span></a></li>
                                    <li class="item-name"><a href="toastr.html"><i class="nav-icon i-Bell"></i><span class="item-name">Toastr</span></a></li>
                                    <li class="item-name"><a href="sweet.alerts.html"><i class="nav-icon i-Approved-Window"></i><span class="item-name">Sweet Alerts</span></a></li>
                                    <li class="item-name"><a href="tour.html"><i class="nav-icon i-Plane"></i><span class="item-name">User Tour</span></a></li>
                                    <li class="item-name"><a href="upload.html"><i class="nav-icon i-Data-Upload"></i><span class="item-name">Upload</span></a></li>
                                </ul>
                            </li>
                            <li class="Ul_li--hover"><a class="has-arrow" href="#"><i class="i-Computer-Secure text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Apps</span></a>
                                <ul class="mm-collapse">
                                    <li class="item-name"><a href="contact-list-table.html"><i class="nav-icon i-Business-Mens"></i><span class="item-name">contact List</span></a></li>
                                    <li class="item-name"><a href="invoice.html"><i class="nav-icon i-Add-File"></i><span class="item-name">Invoice</span></a></li>
                                    <li class="item-name"><a href="inbox.html"><i class="nav-icon i-Email"></i><span class="item-name">Inbox</span></a></li>
                                    <li class="item-name"><a href="chat.html"><i class="nav-icon i-Speach-Bubble-3"></i><span class="item-name">Chat</span></a></li>
                                    <li class="item-name"><a class="has-arrow cursor-pointer"><i class="nav-icon i-Receipt"></i><span class="item-name">Task Manager </span></a>
                                        <ul class="mm-collapse">
                                            <li class="item-name"><a href="todo-list.html"><i class="nav-icon i-Receipt"></i><span class="item-name">Todo List</span></a></li>
                                            <li class="item-name"><a href="task-manager.html"><i class="nav-icon i-Receipt"></i><span class="item-name">Task manager</span></a></li>
                                            <li class="item-name"><a href="task-manager-list.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Task manager list</span></a></li>
                                            <li class="item-name"><a href="toDo.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Minimal ToDo</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="item-name"><a class="has-arrow cursor-pointer"><i class="nav-icon i-Cash-Register"></i><span class="item-name">Ecommerce </span></a>
                                        <ul class="mm-collapse">
                                            <li class="item-name"><a href="product.html"><i class="nav-icon i-Shop-2"></i><span class="item-name">Products</span></a></li>
                                            <li class="item-name"><a href="product-details.html"><i class="nav-icon i-Tag-2"></i><span class="item-name">Product Details</span></a></li>
                                            <li class="item-name"><a href="cart.html"><i class="nav-icon i-Add-Cart"></i><span class="item-name">Cart</span></a></li>
                                            <li class="item-name"><a href="checkout.html"><i class="nav-icon i-Cash-register-2"></i><span class="item-name">Checkout</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="item-name"><a class="has-arrow cursor-pointer"><i class="nav-icon i-Business-ManWoman"></i><span class="item-name">Contact </span></a>
                                        <ul class="mm-collapse">
                                            <li class="item-name"><a href="contact-list.html"><i class="nav-icon i-Business-Mens"></i><span class="item-name">Contact Lists</span></a></li>
                                            <li class="item-name"><a href="contact-page.html"><i class="nav-icon i-Conference"></i><span class="item-name">Contact Grid</span></a></li>
                                            <li class="item-name"><a href="contact-detail.html"><i class="nav-icon i-Find-User"></i><span class="item-name">Contact Details</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!--  <p class="main-menu-title text-muted ml-3 font-weight-700 text-13 mt-4 mb-2">UI Elements</p> -->
                            <li class="Ul_li--hover"><a class="has-arrow" href="#"><i class="i-Computer-Secure text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Widgets</span></a>
                                <ul class="mm-collapse">
                                    <li class="item-name"><a href="widget-card.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">widget card</span></a></li>
                                    <li class="item-name"><a href="widget-statistics.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">widget statistics</span></a></li>
                                    <li class="item-name"><a href="widget-list.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Widget List</span></a></li>
                                    <li class="item-name"><a href="widget-app.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Widget App </span></a></li>
                                    <li class="item-name"><a href="weather-card.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Weather App </span></a></li>
                                </ul>
                            </li>
                            <li class="Ul_li--hover"><a class="has-arrow" href="#"><i class="i-File-Clipboard-File--Text text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Charts</span></a>
                                <ul class="mm-collapse">
                                    <li class="item-name"><a href="charts.echarts.html"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">echarts</span></a></li>
                                    <li class="item-name"><a href="charts.chartsjs.html"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">ChartJs</span></a></li>
                                    <li class="item-name"><a class="has-arrow cursor-pointer"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Apex Charts</span></a>
                                        <ul class="mm-collapse">
                                            <li class="item-name"><a href="charts.apexAreaCharts.html">Area Charts</a></li>
                                            <li class="item-name"><a href="charts.apexBarCharts.html">Bar Charts</a></li>
                                            <li class="item-name"><a href="charts.apexBubbleCharts.html">Bubble Charts</a></li>
                                            <li class="item-name"><a href="charts.apexColumnCharts.html">Column Charts</a></li>
                                            <li class="item-name"><a href="charts.apexCandleStickCharts.html">CandleStick Charts</a></li>
                                            <li class="item-name"><a href="charts.apexLineCharts.html">Line Charts</a></li>
                                            <li class="item-name"><a href="charts.apexMixCharts.html">Mix Charts</a></li>
                                            <li class="item-name"><a href="charts.apexMixCharts.html">Mix Charts</a></li>
                                            <li><a href="charts.apexPieDonutCharts.html">PieDonut Charts</a></li>
                                            <li><a href="charts.apexRadarCharts.html">Radar Charts</a></li>
                                            <li><a href="charts.apexRadialBarCharts.html">RadialBar Charts</a></li>
                                            <li><a href="charts.apexScatterCharts.html">Scatter Charts</a></li>
                                            <li><a href="charts.apexSparklineCharts.html">Sparkline Charts</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="Ul_li--hover"><a class="has-arrow" href="#"><i class="i-File-Clipboard-File--Text text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Forms</span></a>
                                <ul class="mm-collapse">
                                    <li class="item-name"><a href="form.basic.html"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Basic Elements</span></a></li>
                                    <li class="item-name"><a href="basic-action-bar.html"><i class="nav-icon i-File-Clipboard-Text--Image"></i><span class="item-name">Basic action bar </span></a></li>
                                    <li class="item-name"><a href="form.layouts.html"><i class="nav-icon i-Split-Vertical"></i><span class="item-name">Form Layouts</span></a></li>
                                    <li class="item-name"><a href="multi-column-forms.html"><i class="nav-icon i-Split-Vertical"></i><span class="item-name">Multi column forms</span></a></li>
                                    <li class="item-name"><a href="form.input.group.html"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Input Groups</span></a></li>
                                    <li class="item-name"><a href="form.validation.html"><i class="nav-icon i-Close-Window"></i><span class="item-name">Form Validation</span></a></li>
                                    <li class="item-name"><a href="smart.wizard.html"><i class="nav-icon i-Width-Window"></i><span class="item-name">Smart Wizard</span></a></li>
                                    <li class="item-name"><a href="smart.wizard.html"><i class="nav-icon i-Width-Window"></i><span class="item-name">Smart Wizard</span></a></li>
                                    <li class="item-name"><a href="tag.input.html"><i class="nav-icon i-Tag-2"></i><span class="item-name">Tag Input</span></a></li>
                                    <li class="item-name"><a href="editor.html"><i class="nav-icon i-Pen-2"></i><span class="item-name">Rich Editor</span></a></li>
                                </ul>
                            </li>
                            <li class="Ul_li--hover"><a href="datatables.html"><i class="i-File-Horizontal-Text text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Datatables</span></a></li>
                            <li class="Ul_li--hover"><a class="has-arrow"><i class="i-Administrator text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Sessions</span></a>
                                <ul class="mm-collapse">
                                    <li class="item-name"><a href="../sessions/signin.html"><i class="nav-icon i-Checked-User"></i><span class="item-name">Sign in</span></a></li>
                                    <li class="item-name"><a href="../sessions/signup.html"><i class="nav-icon i-Add-User"></i><span class="item-name">Sign up</span></a></li>
                                    <li class="item-name"><a href="../sessions/forgot.html"><i class="nav-icon i-Find-User"></i><span class="item-name">Forgot</span></a></li>
                                </ul>
                            </li>
                            <li class="Ul_li--hover"><a class="has-arrow"><i class="i-Double-Tap text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Others</span></a>
                                <ul class="mm-collapse">
                                    <li class="item-name"><a href="../sessions/not-found.html"><i class="nav-icon i-Error-404-Window"></i><span class="item-name">Not Found</span></a></li>
                                    <li class="item-name"><a href="user.profile.html"><i class="nav-icon i-Male"></i><span class="item-name">User Profile</span></a></li>
                                    <li class="item-name"><a class="open" href="blank.html"><i class="nav-icon i-File-Horizontal"></i><span class="item-name">Blank Page</span></a></li>
                                </ul>
                            </li>
                            <li class="Ul_li--hover"><a href="http://demos.ui-lib.com/gull-html-doc/"><i class="i-Safe-Box1 text-20 mr-2 text-muted"></i><span class="item-name text-15 text-muted">Doc</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 404px; right: 0px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 325px;"></div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 404px; right: 0px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 325px;"></div>
                </div>
            </div>
            <!--  side-nav-close -->
        </div>
        <div class="switch-overlay"></div>
      @yield('content')
    </div><!-- ============ Search UI Start ============= -->
    <div class="search-ui">
        <div class="search-header">
            <img src="../../dist-assets/images/logo.png" alt="" class="logo">
            <button class="search-close btn btn-icon bg-transparent float-right mt-2">
                <i class="i-Close-Window text-22 text-muted"></i>
            </button>
        </div>
        <input type="text" placeholder="Type here" class="search-input" autofocus>
        <div class="search-title">
            <span class="text-muted">Search results</span>
        </div>
        <div class="search-results list-horizontal">
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="../../dist-assets/images/products/headphone-1.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-danger">Sale</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="../../dist-assets/images/products/headphone-2.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="../../dist-assets/images/products/headphone-3.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="../../dist-assets/images/products/headphone-4.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PAGINATION CONTROL -->
        <div class="col-md-12 mt-5 text-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination d-inline-flex">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- ============ Search UI End ============= -->
    <script src="{{ asset('backend/js/plugins/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('backend/js/plugins/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('backend/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('backend/js/scripts/tooltip.script.min.js')}}"></script>
    <script src="{{ asset('backend/js/scripts/script.min.js')}}"></script>
    <script src="{{ asset('backend/js/scripts/script_2.min.js')}}"></script>
    <script src="{{ asset('backend/js/scripts/sidebar.large.script.min.js')}}"></script>
    <script src="{{ asset('backend/js/plugins/feather.min.js')}}"></script>
    <script src="{{ asset('backend/js/plugins/metisMenu.min.js')}}"></script>
    <script src="{{ asset('backend/js/scripts/layout-sidebar-vertical.min.js')}}"></script>
    <script src="{{ asset('backend/js/plugins/echarts.min.js')}}"></script>
    <script src="{{ asset('backend/js/scripts/echart.options.min.js')}}"></script>
    <script src="{{ asset('backend/js/scripts/dashboard.v1.script.min.js')}}"></script>
</body>

</html>