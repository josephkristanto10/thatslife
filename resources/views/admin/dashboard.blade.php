<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Thatslife Admin</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
        type="text/css">
    <link href="{{asset('global_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    <!-- <link rel="shortcut icon" type="image/png" href="assets/logonexus.png"/> -->
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{asset('global_assets/js/main/jquery.min.js')}}"></script>
    <script src="{{asset('global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{asset('global_assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
    <script src="{{asset('global_assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
    <script src="{{asset('global_assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
    <script src="{{asset('global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script src="{{asset('global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>

    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{asset('global_assets/js/demo_pages/dashboard.js')}}"></script>
    <script src="{{asset('global_assets/js/demo_charts/pages/dashboard/light/streamgraph.js')}}"></script>
    <script src="{{asset('global_assets/js/demo_charts/pages/dashboard/light/sparklines.js')}}"></script>
    <script src="{{asset('global_assets/js/demo_charts/pages/dashboard/light/lines.js')}}"></script>
    <script src="{{asset('global_assets/js/demo_charts/pages/dashboard/light/areas.js')}}"></script>
    <script src="{{asset('global_assets/js/demo_charts/pages/dashboard/light/donuts.js')}}"></script>
    <script src="{{asset('global_assets/js/demo_charts/pages/dashboard/light/bars.js')}}"></script>
    <script src="{{asset('global_assets/js/demo_charts/pages/dashboard/light/progress.js')}}"></script>
    <script src="{{asset('global_assets/js/demo_charts/pages/dashboard/light/heatmaps.js')}}"></script>
    <script src="{{asset('global_assets/js/demo_charts/pages/dashboard/light/pies.js')}}"></script>
    <script src="{{asset('global_assets/js/demo_charts/pages/dashboard/light/bullets.js')}}"></script>
    <!-- /theme JS files -->

    <script src="{{asset('global_assets/js/demo_pages/datatables_advanced.js')}}"></script>

</head>

<body>


    <div class="page-content">
        <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md" style="background-color:#11424f !important;">
            <div class="sidebar-mobile-toggler text-center">
                <a href="#" class="sidebar-mobile-main-toggle">
                    <i class="icon-arrow-left8"></i>
                </a>
                Navigation
                <a href="#" class="sidebar-mobile-expand">
                    <i class="icon-screen-full"></i>
                    <i class="icon-screen-normal"></i>
                </a>
            </div>
            <div class="sidebar-content">
                <div class="sidebar-user">
                    <div class="card-body">
                        <div class="media">
                            <!-- <div class="mr-3">
								<a href="#"><img src=" assets/logonexus.png" width="38" height="38" class="rounded-circle" alt=""></a>
							</div> -->
                            <div class="media-body">
                                <div class="media-title font-weight-semibold">Admin Thatslife</div>
                                <div class="font-size-xs opacity-50">
                                    <i class="icon-pin font-size-sm"></i> &nbsp;Indonesia
                                </div>
                            </div>
                            <div class="ml-3 align-self-center">
                                <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-sidebar-mobile">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">
                        <li class="nav-item-header">
                            <div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu"
                                title="Main"></i>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active">
                                <i class="icon-home4"></i>
                                <span>
                                    Dashboard
                                </span>
                            </a>
                        </li>

                        <li
                            class="nav-item nav-item-submenu">
                            <a href="#"
                                class="nav-link">
                                <span> <i class="icon-quill4"></i>Story</span></a>

                            <ul class="nav nav-group-sub" data-submenu-title="Basic tables"
                                >
                                <li class="nav-item" id="mastertemplate"><a href="{{url('/daftarcerita')}}"
                                        class="nav-link ">List Story</a>
                                </li>
                            


                            </ul>
                        </li>


                        <!-- <li class="nav-item nav-item-submenu">
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Master</div> <i class="icon-menu" title="Master"></i></li>
						<li class="nav-item nav-item-submenu">
						<li class="nav-item"><a href="../../../RTL/default/full/index.html" class="nav-link"><i
									class="icon-width"></i> <span>Company</span></a></li>
						</li>
                        <li class="nav-item"><a href="masterholdingcompany.php" class="nav-link"><i
									class="icon-width"></i> <span>Holding Company</span></a></li>
						</li> -->
                        <!-- <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-table2"></i> <span>Asset Group</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Basic tables">
							<li class="nav-item"><a href="masterkategoriassets.php" class="nav-link">Group</a></li>
							<li class="nav-item"><a href="mastersubkategoriassets.php" class="nav-link">Sub Group</a></li>
							<li class="nav-item"><a href="mastercategorysubgroup.php" class="nav-link">Category</a></li>
                            </ul>
                        </li> -->

                    </ul>
                </div>
            </div>
        </div>
        <div class="content-wrapper">
            <div class="page-header page-header-light">
                <div class="page-header-content header-elements-md-inline">
                    <div class="page-title d-flex">
                        <h3>Dashboard</h3>
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>


                </div>

            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">

                <!-- Main charts -->
                <div class="row">
                    <div class="col-xl-7">

                        <!-- Traffic sources -->
                        <div class="card">
                            <div class="card-header header-elements-inline">
                                <h6 class="card-title">Traffic sources</h6>
                                <div class="header-elements">
                                    <div
                                        class="form-check form-check-right form-check-switchery form-check-switchery-sm">
                                        <label class="form-check-label">
                                            Live update:
                                            <input type="checkbox" class="form-input-switchery" checked data-fouc>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body py-0">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <a href="#"
                                                class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon mr-3">
                                                <i class="icon-plus3"></i>
                                            </a>
                                            <div>
                                                <div class="font-weight-semibold">New visitors</div>
                                                <span class="text-muted">2,349 avg</span>
                                            </div>
                                        </div>
                                        <div class="w-75 mx-auto mb-3" id="new-visitors"></div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <a href="#"
                                                class="btn bg-transparent border-warning-400 text-warning-400 rounded-round border-2 btn-icon mr-3">
                                                <i class="icon-watch2"></i>
                                            </a>
                                            <div>
                                                <div class="font-weight-semibold">New sessions</div>
                                                <span class="text-muted">08:20 avg</span>
                                            </div>
                                        </div>
                                        <div class="w-75 mx-auto mb-3" id="new-sessions"></div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="d-flex align-items-center justify-content-center mb-2">
                                            <a href="#"
                                                class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon mr-3">
                                                <i class="icon-people"></i>
                                            </a>
                                            <div>
                                                <div class="font-weight-semibold">Total online</div>
                                                <span class="text-muted"><span
                                                        class="badge badge-mark border-success mr-2"></span> 5,378
                                                    avg</span>
                                            </div>
                                        </div>
                                        <div class="w-75 mx-auto mb-3" id="total-online"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="chart position-relative" id="traffic-sources"></div>
                        </div>
                        <!-- /traffic sources -->

                    </div>

                    <div class="col-xl-5">

                        <!-- Sales stats -->
                        <div class="card">
                            <div class="card-header header-elements-inline">
                                <h6 class="card-title">Sales statistics</h6>
                                <div class="header-elements">
                                    <select class="form-control custom-select" id="select_date">
                                        <option value="val1">June, 29 - July, 5</option>
                                        <option value="val2">June, 22 - June 28</option>
                                        <option value="val3" selected>June, 15 - June, 21</option>
                                        <option value="val4">June, 8 - June, 14</option>
                                    </select>
                                </div>
                            </div>

                            <div class="card-body py-0">
                                <div class="row text-center">
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <h5 class="font-weight-semibold mb-0">5,689</h5>
                                            <span class="text-muted font-size-sm">new orders</span>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="mb-3">
                                            <h5 class="font-weight-semibold mb-0">32,568</h5>
                                            <span class="text-muted font-size-sm">this month</span>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="mb-3">
                                            <h5 class="font-weight-semibold mb-0">$23,464</h5>
                                            <span class="text-muted font-size-sm">expected profit</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="chart mb-2" id="app_sales"></div>
                            <div class="chart" id="monthly-sales-stats"></div>
                        </div>
                        <!-- /sales stats -->

                    </div>
                </div>
                <!-- /main charts -->


                <!-- Dashboard content -->

                <!-- /dashboard content -->

            </div>
            <!-- /content area -->


            <!-- Footer -->
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="text-center d-lg-none w-100">
                    <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                        data-target="#navbar-footer">
                        <i class="icon-unfold mr-2"></i>
                        Footer
                    </button>
                </div>

                <div class="navbar-collapse collapse" id="navbar-footer">
                    <span class="navbar-text">
                        &copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a
                            href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
                    </span>

                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link"
                                target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
                        <li class="nav-item"><a href="http://demo.interface.club/limitless/docs/"
                                class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a>
                        </li>
                        <li class="nav-item"><a
                                href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov"
                                class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i
                                        class="icon-cart2 mr-2"></i> Purchase</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>

</html>