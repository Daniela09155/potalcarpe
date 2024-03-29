<!-- Start Rightbar -->
<div class="rightbar">
            <!-- Start Topbar Mobile -->
            <div class="topbar-mobile">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="mobile-logobar">
                            <a href="index.html" class="mobile-logo"><img src="{{ asset('assets/images/logoxd.JPG') }}" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="mobile-togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="topbar-toggle-icon">
                                        <a class="topbar-toggle-hamburger" href="javascript:void();">
                                            <img src="{{ asset('assets/images/svg-icon/horizontal.svg') }}" class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                            <img src="{{ asset('assets/images/svg-icon/verticle.svg') }}" class="img-fluid menu-hamburger-vertical" alt="verticle">
                                         </a>
                                     </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                            <img src="{{ asset('assets/images/svg-icon/collapse.svg') }}" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                            <img src="{{ asset('assets/images/svg-icon/close.svg') }}" class="img-fluid menu-hamburger-close" alt="close">
                                         </a>
                                     </div>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
<!-- Inicia topbar -->
<div class="topbar">
                <!-- Start row -->
                <div class="row align-items-center">
                    <!-- Start col -->
                    <div class="col-md-12 align-self-center">
                        <div class="togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                           <img src="{{ asset('assets/images/svg-icon/collapse.svg') }}" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                           <img src="{{ asset('assets/images/svg-icon/close.svg') }}" class="img-fluid menu-hamburger-close" alt="close">
                                         </a>
                                     </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="searchbar">
                                        <form>
                                            <div class="input-group">
                                              <input type="search" class="form-control" placeholder="Buscar" aria-label="Search" aria-describedby="button-addon2">
                                              <div class="input-group-append">
                                                <button class="btn" type="submit" id="button-addon2"><img src="{{ asset('assets/images/svg-icon/search.svg') }}" class="img-fluid" alt="search"></button>
                                              </div>
                                            </div>
                                        </form>
                                    </div> 
                                </li> 
                            </ul>
                        </div>
                        
                        <div class="infobar">
                            <li class="list-inline-item">
                                <div class="dropdown">
                                  <a class="dropdown-toggle" href="#" role="button" id="profilelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-user" alt="profile"></i><span class="feather icon-chevron-down live-icon"></span></a>
                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profilelink" style="" x-out-of-boundaries="">
                                    <div class="dropdown-item">
                                        <div class="profilename">
                                          <h5>{{ Auth::user()->name }}</h5>
                                          <p>{{Auth::user()->roles[0]->name}}</p>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="userbox">
                                            <ul class="list-inline mb-center">
                                                <li class="list-inline-item"><a href="{{ route('logout') }}" 
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" 
                                                     class="profile-icon">
                                                     <img src="{{ asset('assets/images/svg-icon/logout.svg') }}" class="img-fluid" alt="logout">
                                            
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                        </li>
                                            </ul>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                            </li>
                        </div>
                    </div>
                    <!-- End col -->
                </div> 
                <!-- End row -->
            </div>
           
            <!-- End Topbar -->