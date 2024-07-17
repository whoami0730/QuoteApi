<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Add Quote Category</title>
    <link rel="icon" href="assets1/img/logo.png" type="image/png">

    <link rel="stylesheet" href="assets1/css/bootstrap1.min.css" />

    <link rel="stylesheet" href="assets1/vendors/themefy_icon/themify-icons.css" />

    <link rel="stylesheet" href="assets1/vendors/swiper_slider/css/swiper.min.css" />

    <link rel="stylesheet" href="assets1/vendors/select2/css/select2.min.css" />

    <link rel="stylesheet" href="assets1/vendors/niceselect/css/nice-select.css" />

    <link rel="stylesheet" href="assets1/vendors/owl_carousel/css/owl.carousel.css" />

    <link rel="stylesheet" href="assets1/vendors/gijgo/gijgo.min.css" />

    <link rel="stylesheet" href="assets1/vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

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
    @extends('admin.layout')
    @section('main')
        <div class="main_content_iner ">
            <div class="container-fluid plr_30 body_white_bg pt_30">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_box mb_30">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <div class="box_header ">
                                <div class="main-title">
                                    <h3 class="mb-0">Add Quote Category</h3>
                                </div>

                            </div>
                            <form method="POST" action="add_category" enctype="multipart/form-data">@csrf
                                <div class="mb-3">
                                    <label class="form-label">Category Name</label>
                                    <input type="text"
                                        class="form-control @error('category_name') is-invalid @enderror mb-1"
                                        name="category_name" value="{{ old('category_name') }}"
                                        placeholder="Enter Quote Category Name">
                                    <span class="text-danger">
                                        @error('category_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Category Image</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror mb-1"
                                        name="image" value="{{ old('image') }}">
                                    <span class="text-danger">
                                        @error('image')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="">
                                    <button class="btn btn-outline-primary" Value="submit">Submit</button>
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
    @endsection
</body>

</html>
