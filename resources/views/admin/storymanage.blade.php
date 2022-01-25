<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
    <link href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
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
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <style>
        .modal-body {
            overflow-y: auto;
        }
    </style>
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
                            <a class="nav-link ">
                                <i class="icon-home4"></i>
                                <span>
                                    Dashboard
                                </span>
                            </a>

                        </li>

                        <li class="nav-item nav-item-submenu active">
                            <a href="#" class="nav-link active">
                                <span> <i class="icon-quill4"></i>Story</span></a>

                            <ul class="nav nav-group-sub active" data-submenu-title="Basic tables">
                                <li class="nav-item active" id="mastertemplate"><a href="{{url('/daftarcerita')}}"
                                        class="nav-link active">List Story</a>
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
                    <div class="page-title d-flex" style="width:100%;">
                        <h3>Story List &nbsp;<i class="icon-quill4"></i></h3>
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>

                    </div>
                    <button class="btn btn-info" style="float:right;width:100px;" data-toggle="modal"
                        data-target="#modaladd">Add Story</button>

                </div>

            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">

                <!-- Main charts -->
                <div class="row">
                    <div class="col-xl-12">

                        <div class="card" style="padding:5px;">


                            <table class="table table-bordered table-hover datatable-highlight w-100" id="mydatatable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Number</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Quotes</th>
                                        <th>Posting Date</th>
                                        <th>Location</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>

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


    <!-- Modal Add -->
    <div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Add Story</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form id="formadd" method="POST" enctype='multipart/form-data'>
                        <label>Title</label>
                        <input type="text" class="form-control" name="titlestory"
                            placeholder="Input story title here ..." required><br>
                        <label>Country</label>
                        <input type="text" class="form-control" name="countrystory"
                            placeholder="Input story country here ..." required><br>
                        <label>City</label>
                        <input type="text" class="form-control" name="citystory"
                            placeholder="Input story country here ..." required><br>
                        <label>Image</label>
                        <input type="file" class="form-control" name="imagestory"
                            placeholder="Input story image here ..." required><br>
                        <label>Quotes</label>
                        <input type="file" class="form-control" name="quotesstory"
                            placeholder="Input story Quotes here ..." required><br>
                        <label>Description</label>
                        <textarea type="text" class="form-control" name="descriptionstory"
                            placeholder="Input story Description here ..." required></textarea><br>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeform">Close</button>
                    <button type="submit" class="btn btn-primary">Upload Story</button>
                </div>
                </form>
            </div>
        </div>
    </div>

     <!-- Modal Edit -->
     <div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Story</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form id="formedit" method="POST" enctype='multipart/form-data'>
                        <input type = "hidden" value = "" id = "idedit" name = "myidedit">
                        <label>Title</label>
                        <input type="text" class="form-control" id = "titlestoryedit" name="titlestoryedit"
                            placeholder="Input story title here ..." ><br>
                        <label>Country</label>
                        <input type="text" class="form-control" id = "countrystoryedit" name="countrystoryedit"
                            placeholder="Input story country here ..." ><br>
                        <label>City</label>
                        <input type="text" class="form-control" id = "citystoryedit" name="citystoryedit"
                            placeholder="Input story country here ..." ><br>
                        <label>Image</label>
                        <img src = "" id = "gambarpreview" style = "width:200px;height:200px;">
                        ===>
                        <img src = "" id = "gambarpreviewlast" style = "width:200px;height:200px;">
                        <br><br>
                        <input type="file" class="form-control" id = "imagestoryedit" name="imagestoryedit"
                            placeholder="Input story image here ..." >
                            
                            <br>
                        <label>Quotes</label>
                        <img src = "" id = "quotespreview" style = "width:200px;height:200px;">
                        ===>
                        <img src = "" id = "quotespreviewlast" style = "width:200px;height:200px;">
                        <br>     <br><br>
                        <input type="file" class="form-control" id = "quotesstoryedit" name="quotesstoryedit"
                            placeholder="Input story Quotes here ..." ><br>
                        <label>Description</label>
                        <textarea type="text" class="form-control" id = "descriptionstoryedit" name="descriptionstoryedit"
                            placeholder="Input story Description here ..." ></textarea><br>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeformedit">Close</button>
                    <button type="submit" class="btn btn-primary">Upload Story</button>
                </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    var globalidedit = "";
    $('#mydatatable').DataTable({
        processing: true,
        serverSide: true,
        scrollX: true,
        ajax: "{{route('getdatatablecerita')}}",
        columnDefs: [{
            targets: [0, 1],
            visible: false
        }],
        columns: [{
                data: 'id',
                name: 'id'
            },
            {
                data: 'number',
                name: 'number',
                searchable: false
            },
            {
                data: 'title',
                name: 'title'
            },
            {
                data: 'image',
                name: 'image'
            },
            {
                data: 'quotes',
                name: 'quotes'
            },
            // { data: 'status', name: 'status' },
            {
                data: 'date',
                name: 'created_at',
                searchable: false
            },
            {
                data: 'location',
                name: 'location',
                searchable: true
            },
            {
                data: 'action',
                name: 'action',
                searchable: false
            }
        ]
    });

    imagestoryedit.onchange = evt => {
  const [file] = imagestoryedit.files
  if (file) {
    gambarpreviewlast.src = URL.createObjectURL(file)
  }
}
quotesstoryedit.onchange = evt => {
  const [file] = quotesstoryedit.files
  if (file) {
    quotespreviewlast.src = URL.createObjectURL(file)
  }
}

    function success() {
        $('#mydatatable').DataTable().ajax.reload(null, false);
    };

    function openmodal(myobj){
        var mid = myobj.id;
        globalidedit = mid;
        // alert(mid);
        $("#idedit").val(globalidedit);
        $("#titlestoryedit").val($("#titlestory_"+mid).text());
        $("#countrystoryedit").val($("#country_"+mid).text());
        $("#citystoryedit").val($("#city_"+mid).text());
        var publicpath =  {!! json_encode(asset('gambarstory')) !!};
        // alert(publicpath);
     
        $("#gambarpreview").attr("src", publicpath+"/"+$("#image_"+mid).text());
        $("#quotespreview").attr("src", publicpath+"/"+$("#quotes_"+mid).text());
        // $("#quotesstoryedit").val($("#quotes_"+mid).text());
        $("#descriptionstoryedit").val($("#desc_"+mid).text());
        





    }
    $("#formedit").submit(function (eventObj) {
        var form = $('#formedit')[0]; // You need to use standard javascript object here
        var formData = new FormData(form);

        eventObj.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{route('editstory')}}",
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (result) {
                // alert(result);
                success();
                Swal.fire({
                    title: 'Data Edited',
                    text: 'Data Edited Successfully',
                    icon: 'success',
                    confirmButtonColor: '#53d408',
                    allowOutsideClick: false,
                }).then((results) => {
                  
                    $("#gambarpreviewlast").attr("src", "");
        $("#quotespreviewlast ").attr("src", "");
        

                    $("#formedit").trigger("reset");
                    $("#closeformedit").click();
                });
            }
        });
    });

    function deletedata(myobj) {
        var mid = myobj.id;
        Swal.fire({
            type: 'info',
            title: 'Do you want to delete this story?',
            showCancelButton: true,
            allowOutsideClick: false,
            confirmButtonText: 'Delete',
            confirmButtonColor: "green",
        }).then((resultss) => {
            /* Read more about isConfirmed, isDenied below */
            if (resultss.isConfirmed) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{route('deletestory')}}",
                    method: 'POST',
                    data: {
                        idbaris: mid
                    },
                    success: function (result) {

                        Swal.fire({
                            title: 'Data Deleted',
                            text: 'Data Deleted Successfully',
                            icon: 'success',
                            confirmButtonColor: '#53d408',
                            allowOutsideClick: false,
                        }).then((results) => {
                            if (results.isConfirmed) {
                                success();
                            }
                        });
                    }
                });

            } else if (resultss.isDenied) {
                Swal.fire('Delete Action Cancelled', '', 'info')
            }
        })

    }
    $("#formadd").submit(function (eventObj) {
        var form = $('#formadd')[0]; // You need to use standard javascript object here
        var formData = new FormData(form);

        eventObj.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "{{route('addstory')}}",
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (result) {
                success();
                Swal.fire({
                    title: 'Data Inserted',
                    text: 'Data Inserted Successfully',
                    icon: 'success',
                    confirmButtonColor: '#53d408',
                    allowOutsideClick: false,
                }).then((results) => {

                    $("#formadd").trigger("reset");
                    $("#closeform").click();
                });
            }
        });


    });
</script>