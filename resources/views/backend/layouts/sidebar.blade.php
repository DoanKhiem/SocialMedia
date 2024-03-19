<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="{{asset('backend/images/logo.svg')}}" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{asset('backend/images/logo-mini.svg')}}" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="{{asset('backend/images/faces/face15.jpg')}}" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                        <span>Gold Member</span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword  text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-calendar-today text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                        </div>
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="index.html">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        {{--Banner Management--}}
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#menu-banner" aria-expanded="false" aria-controls="menu-banner">
              <span class="menu-icon">
{{--                <i class="mdi mdi-laptop"></i>--}}
                  <i class="mdi mdi-image-multiple"></i>
              </span>
                <span class="menu-title">Banner Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="menu-banner">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('banner.index')}}">All Banners</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('banner.create')}}">Add Banner</a></li>
                </ul>
            </div>
        </li>

       {{--Category Management--}}
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#menu-categories" aria-expanded="false" aria-controls="menu-categories">
              <span class="menu-icon">
                <i class="mdi mdi-sitemap"></i>
              </span>
                <span class="menu-title">Category Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="menu-categories">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">All Banners</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Add Banner</a></li>
                </ul>
            </div>
        </li>

        {{--Products Management--}}
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#menu-products" aria-expanded="false" aria-controls="menu-products">
              <span class="menu-icon">
                <i class="mdi mdi-briefcase"></i>
              </span>
                <span class="menu-title">Products Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="menu-products">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">All Banners</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Add Banner</a></li>
                </ul>
            </div>
        </li>

        {{--Carts Management--}}
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#menu-carts" aria-expanded="false" aria-controls="menu-carts">
              <span class="menu-icon">
                <i class="mdi mdi-cart-plus"></i>
              </span>
                <span class="menu-title">Carts Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="menu-carts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">All Banners</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Add Banner</a></li>
                </ul>
            </div>
        </li>

        {{--Orders Management--}}
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#menu-orders" aria-expanded="false" aria-controls="menu-orders">
              <span class="menu-icon">
                <i class="mdi mdi-layers"></i>
              </span>
                <span class="menu-title">Orders Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="menu-orders">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">All Banners</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Add Banner</a></li>
                </ul>
            </div>
        </li>

        {{--Post Category--}}
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#menu-post-tag" aria-expanded="false" aria-controls="menu-post-tag">
              <span class="menu-icon">
                <i class="mdi mdi-sitemap"></i>
              </span>
                <span class="menu-title">Post Category</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="menu-post-tag">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">All Banners</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Add Banner</a></li>
                </ul>
            </div>
        </li>

        {{--Post Tag--}}
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#menu-post-tag" aria-expanded="false" aria-controls="menu-post-tag">
              <span class="menu-icon">
                <i class="mdi mdi-tag-multiple"></i>
              </span>
                <span class="menu-title">Post Tag</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="menu-post-tag">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">All Banners</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Add Banner</a></li>
                </ul>
            </div>
        </li>

        {{--Post Management--}}
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#menu-post" aria-expanded="false" aria-controls="menu-post">
              <span class="menu-icon">
                <i class="mdi mdi-newspaper"></i>
              </span>
                <span class="menu-title">Post Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="menu-post">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">All Banners</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Add Banner</a></li>
                </ul>
            </div>
        </li>

        {{--Review Management--}}
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#menu-review" aria-expanded="false" aria-controls="menu-review">
              <span class="menu-icon">
                <i class="mdi mdi-star-outline"></i>
              </span>
                <span class="menu-title">Review Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="menu-review">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">All Banners</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Add Banner</a></li>
                </ul>
            </div>
        </li>

        {{--Coupon Management--}}
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#menu-coupon" aria-expanded="false" aria-controls="menu-coupon">
              <span class="menu-icon">
                <i class="mdi mdi-ticket-confirmation"></i>
              </span>
                <span class="menu-title">Coupon Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="menu-coupon">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">All Banners</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Add Banner</a></li>
                </ul>
            </div>
        </li>

        {{--Users Management--}}
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#menu-users" aria-expanded="false" aria-controls="menu-users">
              <span class="menu-icon">
                <i class="mdi mdi-account-multiple-outline"></i>
              </span>
                <span class="menu-title">Users Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="menu-users">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">All Banners</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Add Banner</a></li>
                </ul>
            </div>
        </li>

        {{--Comments Management--}}
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#menu-comments" aria-expanded="false" aria-controls="menu-comments">
              <span class="menu-icon">
                <i class="mdi mdi-comment-text"></i>
              </span>
                <span class="menu-title">Comments Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="menu-comments">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">All Banners</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Add Banner</a></li>
                </ul>
            </div>
        </li>

        {{--Settings--}}
        <li class="nav-item menu-items">
            <a class="nav-link" href="index.html">
              <span class="menu-icon">
                <i class="mdi mdi-settings"></i>
              </span>
                <span class="menu-title">Settings</span>
            </a>
        </li>
    </ul>
</nav>
