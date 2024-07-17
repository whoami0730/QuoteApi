<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>All Quotes</title>
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
                    <div class="col-12">
                        <div class="QA_section">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <div class="white_box_tittle list_header">
                                <h4>All Quotes</h4>
                                <div class="box_right d-flex lms_block">
                                    <div class="serach_field_2">
                                        <div class="search_inner">
                                            <form Active="#">
                                                <div class="search_field">
                                                    <input type="text" placeholder="Search here...">
                                                </div>
                                                <button type="submit"><i class="ti-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="add_button ms-2">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#addcategory"
                                            class="btn_1">Search</a>
                                    </div>
                                </div>
                            </div>
                            <div class="QA_table ">
                                <table class="table lms_table_active">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sr No.</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Text</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->category_name }}</td>
                                                <td><img src="{{ asset('/storage/QuoteImage/' .$item->image) }}" alt="" width="150px">
                                                </td>
                                                <td class="text-justify">{{ $item->text }}</td>
                                                <td><button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}">Edit</button></td>
                                                <td><a href="{{ 'delete_quote/' . $item->id }}"><button
                                                            class="btn btn-danger btn-sm"
                                                            onclick="return confirm('You Want To Delete.....')">Delete</button></a>
                                                </td>
                                                
                                            </tr>
                                        @endforeach

                                        {{-- ---------------------------------------- Update section start here ----------------------------- --}}

                                        <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">

                                                        <!-- Your edit form goes here -->
                                                        <form method="POST" action="{{ route('edit_quote', $item->id) }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div
                                                                class="my-2 text-primary fs-3 text-center text-uppercase fw-bold">
                                                                Edit Quote</div>
                                                            
                                                            <div class="my-1">
                                                                <img src="{{ asset('/storage/QuoteImage/' .$item->image) }}" alt=""
                                                                    class="img-thumbnail" width="120px">
                                                            </div>
                                                            <div class="input-group mt-2">
                                                                <input type="file" name="image"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="mt-3">Text</div>
                                                            <div class="input-group mt-2">
                                                                <input type="text" name="text" class="form-control"
                                                                    value="{{ $item->text }}">
                                                            </div>

                                                    </div>
                                                    <button value="submit" class="btn btn-success">Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </tbody>
                                </table>
                            </div>
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
