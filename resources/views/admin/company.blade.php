<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>PT TAMA</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
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
	<style>
		th{
			background-color:#11424f ;
			color:white;
		}
	</style>
</head>

<body>

	<!-- Main navbar -->
	
	<div class="page-content">
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md" style = "background-color:#11424f !important;">
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
								<a href="#"><img src="{{url('/logofixtransparent.png')}}" width="38" height="38" class="rounded-circle" alt=""></a>
							</div> -->
							<div class="media-body">
								<div class="media-title font-weight-semibold">Admin PT TAMA</div>
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
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="{{url('/dashboard')}}" class="nav-link ">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>
                        <li class="nav-item"><a  class="nav-link active"><i
									class="icon-width"></i> <span>Company</span></a></li>
						</li>
						<li class="nav-item"><a href="{{route('logout')}}" class="nav-link"><i
									class="icon-width"></i> <span>Logout</span></a></li>
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
						<h4><a href = "{{url('/dashboard')}}" style = "text-decoration:none;color:black !important;"><i class="icon-arrow-left52 mr-2"></i></a> <span class="font-weight-semibold"></span> Company</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					
				</div>

			
			</div>
			<!-- /page header -->

            <!-- Content area -->
            <div class="content">

                <!-- Main charts -->
                <div class="row">
                    <div class="col-xl-12">

                        <div class="card">


                        <table class="table table-bordered table-hover datatable-highlight">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>     
                                        <th>Company</th>
                                        <th>Question</th>              
                                        <th>Ask Date</th>
                                    </tr>
                                </thead>
                                <tbody>
									@foreach($listcompany as $lc)
								
                                    <tr>
                                        <td>{{$lc->nama}} </td>
                                        <td>{{$lc->email}}</td>
										<td>{{$lc->company}} </td>
                                        <td>{{$lc->pertanyaan}}</td>
										<td>{{$lc->tanggalklik}}</td>
                                       
                                    </tr>
									@endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
<div class="modal fade" id="myModal">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="background-color:#324148;color:white;height:60px;">
						<h5 class="modal-title">Add City</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>

					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="code">Code</label>
							<input type="text" class="form-control" id="code">
							<br>
							<label for="description">City</label>
							<input type="text" class="form-control" id="description">
							<br>
							<label for="description">Description</label>
							<input type="text" class="form-control" id="description">
							<br>
                            <br>
							<label for="cars">Country:</label>
							<select id="cars" name="cars" class="form-control">
								<option value="volvo">Indonesia</option>
								<option value="saab">Malaysia</option>
                                <option value="saab">Thailand</option>
							</select>
							<br>
                            <br>
							<label for="cars">Province:</label>
							<select id="cars" name="cars" class="form-control">
								<option value="volvo">Jawa Timur</option>
								<option value="saab">Jawa Tengah</option>
                                <option value="saab">Jawa Barat</option>
							</select>
							<br>
							<div style = "float:right;margin-bottom:20px;">
							<button type="button" class="btn btn-primary" style = "margin-right:10px;" onclick="">Save</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!-- End Modal -->
</body>

</html>