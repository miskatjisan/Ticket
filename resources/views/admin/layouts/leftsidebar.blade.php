<div class="nav-left-sidebar sidebar-primary mt-2">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">E-Commerce</a>
                                            <div id="submenu-1-2" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="index.html">E Commerce Dashboard</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ecommerce-product.html">Product List</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ecommerce-product-single.html">Product Single</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ecommerce-product-checkout.html">Product Checkout</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard-finance.html">Finance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard-sales.html">Sales</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1">Infulencer</a>
                                            <div id="submenu-1-1" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="dashboard-influencer.html">Influencer</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="influencer-finder.html">Influencer Finder</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="influencer-profile.html">Influencer Profile</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                          <!-- order -->
                          
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>Manage Orders</a>
                                <div id="submenu-10" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11">Manage Air Order</a>
                                            <div id="submenu-11" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{route('airorders.index')}}">All Air orders</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-12" aria-controls="submenu-12">Manage Bus Order</a>
                                            <div id="submenu-12" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{route('busorders.index')}}">All Bus orders</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-13" aria-controls="submenu-13">Manage Movie Order</a>
                                            <div id="submenu-13" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{route('movieorders.index')}}">All Movie orders</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                      
                                    </ul>
                                </div>
                            </li>

<!-- payment -->
                          
                                        
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-101" aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>Manage Payments</a>
                                <div id="submenu-101" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-111" aria-controls="submenu-111">Manage Air Payments</a>
                                            <div id="submenu-111" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{route('airpayments.index')}}">All Air Payments</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-112" aria-controls="submenu-112">Manage Bus Payments</a>
                                            <div id="submenu-112" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{route('buspayments.index')}}">All Bus Payments</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-113" aria-controls="submenu-113">Manage Movie Payments</a>
                                            <div id="submenu-113" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{route('moviepayments.index')}}">All Movie Payments</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                        </ul>

                        <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1010" aria-controls="submenu-1010"><i class="fas fa-f fa-folder"></i>Contact</a>
                                <div id="submenu-1010" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                                
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{route('contacts.index')}}">Manage Contact</a>
                                                    </li>
                                            </div>
                                     

                                    </ul>
                                </div>
                            </li>




                                        
                                    </ul>
                                </div>
                            </li>
                    </div>
                </nav>
            </div>
        </div>