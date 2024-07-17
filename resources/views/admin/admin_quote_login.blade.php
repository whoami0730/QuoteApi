<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin Login | Quote Words</title>
    <link rel="icon" href="img/logo.png" type="image/png">

    <link rel="stylesheet" href="assets1/css/bootstrap1.min.css" />

    <link rel="stylesheet" href="assets1/vendors/themefy_icon/themify-icons.css" />

    <link rel="stylesheet" href="assets1/vendors/swiper_slider/css/swiper.min.css" />

    <link rel="stylesheet" href="assets1/vendors/select2/css/select2.min.css" />

    <link rel="stylesheet" href="assets1/vendors/niceselect/css/nice-select.css" />

    <link rel="stylesheet" href="assets1/vendors/owl_carousel/css/owl.carousel.css" />

    <link rel="stylesheet" href="assets1/vendors/gijgo/gijgo.min.css" />

    <link rel="stylesheet" href="assets1/vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="assets1/vendors/tagsinput/tagsinput.css" />

    <link rel="stylesheet" href="assets1/vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="assets1/vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="assets1/vendors/datatable/css/buttons.dataTables.min.css" />

    <link rel="stylesheet" href="assets1/vendors/text_editor/summernote-bs4.css" />

    <link rel="stylesheet" href="assets1/vendors/morris/morris.css">

    <link rel="stylesheet" href="assets1/vendors/material_icon/material-icons.css" />

    <link rel="stylesheet" href="assets1/css/metisMenu.css">

    <link rel="stylesheet" href="assets1/css/style1.css" />
    <link rel="stylesheet" href="assets1/css/colors/default.css" id="colorSkinCSS">
</head>

<body class="crm_body_bg">

    <div class="white_box mb_30">
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="row justify-content-center align-item-center">
            <div class="col-lg-6">

                <div class="modal-content cs_modal">
                    <div class="modal-header">
                        <h5 class="modal-title">Log in</h5>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="admin_quote_login">@csrf

                            <div>
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email" name="email" value="{{old('email')}}">
                                
                            </div>
                            
                            <div>
                                <span class="text-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
                                
                            </div>
                            
                            <div>
                                <button class="btn btn-primary w-100 " value="submit">Log in</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="assets1/js/jquery1-3.4.1.min.js"></script>

    <script src="assets1/js/popper1.min.js"></script>

    <script src="assets1/js/bootstrap1.min.js"></script>

    <script src="assets1/js/metisMenu.js"></script>

    <script src="assets1/vendors/count_up/jquery.waypoints.min.js"></script>

    <script src="assets1/vendors/chartlist/Chart.min.js"></script>

    <script src="assets1/vendors/count_up/jquery.counterup.min.js"></script>

    <script src="assets1/vendors/swiper_slider/js/swiper.min.js"></script>

    <script src="assets1/vendors/niceselect/js/jquery.nice-select.min.js"></script>

    <script src="assets1/vendors/owl_carousel/js/owl.carousel.min.js"></script>

    <script src="assets1/vendors/gijgo/gijgo.min.js"></script>

    <script src="assets1/vendors/datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets1/vendors/datatable/js/dataTables.responsive.min.js"></script>
    <script src="assets1/vendors/datatable/js/dataTables.buttons.min.js"></script>
    <script src="assets1/vendors/datatable/js/buttons.flash.min.js"></script>
    <script src="assets1/vendors/datatable/js/jszip.min.js"></script>
    <script src="assets1/vendors/datatable/js/pdfmake.min.js"></script>
    <script src="assets1/vendors/datatable/js/vfs_fonts.js"></script>
    <script src="assets1/vendors/datatable/js/buttons.html5.min.js"></script>
    <script src="assets1/vendors/datatable/js/buttons.print.min.js"></script>
    <script src="assets1/js/chart.min.js"></script>

    <script src="assets1/vendors/progressbar/jquery.barfiller.js"></script>

    <script src="assets1/vendors/tagsinput/tagsinput.js"></script>

    <script src="assets1/vendors/text_editor/summernote-bs4.js"></script>
    <script src="assets1/vendors/apex_chart/apexcharts.js"></script>

    <script src="assets1/js/custom.js"></script>


    <script src="assets1/js/active_chart.js"></script>
    <script src="assets1/vendors/apex_chart/radial_active.js"></script>
    <script src="assets1/vendors/apex_chart/stackbar.js"></script>
    <script src="assets1/vendors/apex_chart/area_chart.js"></script>
    <script src="assets1/vendors/apex_chart/bar_active_1.js"></script>
    <script src="assets1/vendors/chartjs/chartjs_active.js"></script>

</body>

</html>
