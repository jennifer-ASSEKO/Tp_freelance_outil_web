@extends('setting.foremployé_setting')

@section('setting')
<div class="content content-page bookmark">
    <div class="container">
        <div class="row">

            <div class="col-xl-3 col-lg-4 theiaStickySidebar">
                <div class="settings-widget">
                    <div
                        class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
                        <a href="freelancer-profile.html"><img alt="profile image"
                                src="assets/img/user/table-avatar-03.jpg" class="avatar-lg rounded-circle"></a>
                        <div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
                            <h3 class="mb-0"><a href="profile-settings.html">Walter Griffin</a><img
                                    src="assets/img/icon/verified-badge.svg" class="ms-1" alt="Img">
                            </h3>
                            <p class="mb-0">@waltergriffin</p>
                        </div>
                    </div>
                    <div class="settings-menu">
                        <div id="sidebar-menu" class="sidebar-menu">
                            <ul>
                                <li class="nav-item">
                                    <a href="dashboard.html" class="nav-link">
                                        <img src="assets/img/icon/sidebar-icon-01.svg" alt="Img">
                                        Dashboard
                                    </a>
                                </li>
                                <li class="nav-item submenu">
                                    <a href="freelancer-project-proposals.html" class="nav-link">
                                        <img src="assets/img/icon/sidebar-icon-02.svg" alt="Img">
                                        Projects
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="sub-menu-ul">
                                        <li>
                                            <a href="manage-projects.html">All Projects</a>
                                        </li>
                                        <li>
                                            <a href="ongoing-projects.html">Ongoing Projects</a>
                                        </li>
                                        <li>
                                            <a href="completed-projects.html">Completed Projects</a>
                                        </li>
                                        <li>
                                            <a href="pending-projects.html">Pending Projects</a>
                                        </li>
                                        <li>
                                            <a href="cancelled-projects.html">Cancelled Projects</a>
                                        </li>
                                        <li>
                                            <a href="expired-projects.html">Expired Projects</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item submenu">
                                    <a href="freelancer-favourites.html" class="nav-link">
                                        <img src="assets/img/icon/sidebar-icon-03.svg" alt="Img">
                                        Favourites
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="sub-menu-ul">
                                        <li>
                                            <a href="favourites.html">Bookmarked Projects</a>
                                        </li>
                                        <li>
                                            <a href="invited-favourites.html">Invitations</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="review.html" class="nav-link">
                                        <img src="assets/img/icon/sidebar-icon-04.svg" alt="Img"> Reviews
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="chats.html" class="nav-link">
                                        <img src="assets/img/icon/sidebar-icon-06.svg" alt="Img"> Chat
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="deposit-funds.html" class="nav-link">
                                        <img src="assets/img/icon/sidebar-icon-07.svg" alt="Img">
                                        Payments
                                    </a>
                                </li>
                                <li class="nav-item submenu">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <img src="assets/img/icon/sidebar-icon-10.svg" alt="Img">
                                        Settings
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="sub-menu-ul">
                                        <li>
                                            <a href="profile-settings.html" class="active">Profile</a>
                                        </li>
                                        <li>
                                            <a href="membership-plans.html">Plan & Billing</a>
                                        </li>
                                        <li>
                                            <a href="verify-identity.html">Verify Identity</a>
                                        </li>
                                        <li>
                                            <a href="change-password.html">Change Password</a>
                                        </li>
                                        <li>
                                            <a href="delete-account.html">Delete Account</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="index.html" class="nav-link">
                                        <img src="assets/img/icon/sidebar-icon-11.svg" alt="Img"> Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            @include('freelance.formulairee')
        </div>
    </div>
</div>
@endsection
