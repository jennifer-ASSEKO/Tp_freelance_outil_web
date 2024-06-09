<header class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg header-nav p-0">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="index.html" class="navbar-brand logo">
                    <img src="{{ asset('assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="index.html" class="menu-logo">
                        <img src="{{ asset('assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                <ul class="main-nav">
                    {{-- //home --}}
                   @include('layouts.home')

                    {{-- for employé --}}
                   @include('layouts.for_employé')

{{--
                   @include('layouts.for_freelance')


                    @include('layouts.pages')


                    @include('layouts.blog') --}}

                    <li>
                        <a href="admin/index.html" target="_blank">Admin</a>
                    </li>
                </ul>
            </div>
            <ul class="nav header-navbar-rht reg-head">
                <li><a href="register.html" class="reg-btn"><img src="{{ asset('assets/img/icon/users.svg') }}" class="me-1"
                            alt="img">Register</a></li>
                <li><a href="login.html" class="log-btn"><img src="{{ asset('assets/img/icon/lock.svg') }}" class="me-1"
                            alt="img"> Login</a></li>
                <li><a href="post-project.html" class="login-btn"><i class="feather-plus me-1"></i>Post a
                        Project </a></li>
            </ul>
        </nav>
    </div>
</header>
