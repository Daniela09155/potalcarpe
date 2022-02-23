<div id="containerbar">
        <!-- inicio de leftbar -->
        
        @include('layouts.navbars.sidebar')
        @include('layouts.navbars.navs.auth')
            <!-- Start Breadcrumbbar -->                    
            <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-12">
                        <div class="breadcrumb-list">
                        </div>
                    </div>
                  <!-- Agregar botones -->   
                </div>    
            </div>
            <!-- End Breadcrumbbar -->
            <!-- Start Contentbar -->    
            <div class="contentbar">                
                <!-- contenido de la pagina -->
                <div class="row">
                    <div class="col-md-12 col-lg-6 col-xl-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">@yield('content_header')</h5>
                                </div>
                                @yield('contenido')
                                <div class="card-body">                         
                            </div>
                        </div>  
                    </div>
                </div>
                <!--Fin de contenido de pagina-->
                @include('layouts.footers.auth')
            <!-- End Footerbar -->
        </div>
        <!-- End Rightbar -->
    </div>
    <!-- End Containerbar -->
    <!-- Start js -->  