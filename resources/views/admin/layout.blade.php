<nav class="sidebar d-flex flex-column justify-content-between align-item-center">
        <div class="">
            <div class="logo d-flex justify-content-between">
                <a href="/dashboard"><img src="assets1/img/logo.png" alt></a>
                <div class="sidebar_close_icon d-lg-none">
                    <i class="ti-close"></i>
                </div>
            </div>

            <ul id="sidebar_menu">
                <li class="mm-active">
                    <a class="" href="/dashboard" aria-expanded="false">
                        <img src="assets1/img/menu-icon/1.svg" alt>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <img src="assets1/img/menu-icon/3.svg" alt>
                        <span>Quote Category</span>
                    </a>
                    <ul>
                        <li><a href="/add_category">Add Category</a></li>
                        <li><a href="/show_category">Show Category</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <img src="assets1/img/menu-icon/3.svg" alt>
                        <span>Quotes Of The Day </span>
                    </a>
                    <ul>
                        <li><a href="add_quote">Add New Quote</a></li>
                        <li><a href="show_quote">Show All Quotes</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <img src="assets1/img/menu-icon/3.svg" alt>
                        <span>Word Of The Day</span>
                    </a>
                    <ul>
                        <li><a href="add_word">Add New Word</a></li>
                        <li><a href="show_word">Show All Word</a></li>
                    </ul>
                </li>
               
            </ul>
        </div>
        <div>
            <div class="button ms-5">
                <a href="/logout"><button class="btn btn-outline-primary w-75">Logout</button></a>
            </div>
        
        </div>
        
</nav>

<section class="main_content dashboard_part">

    <div class="container-fluid g-0">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="header_iner d-flex justify-content-between align-items-center">
                    <div class="sidebar_icon d-lg-none ps-2 ">
                        <i class="ti-menu fs-2"></i>
                    </div>
                    <div class="ms-auto fs-bold">
                        <h3 class="text-muted h3 pt-2">Quote<span class="text-danger h3">Word</span></h3>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    @yield('main')

    <div class="footer_part">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="footer_iner text-center">
                        <p>2024 © Influence - Designed by<a href="#"> Aprosoft Technologies </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

   