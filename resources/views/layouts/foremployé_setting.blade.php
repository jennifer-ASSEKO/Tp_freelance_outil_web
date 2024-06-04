<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kofejob.dreamstechnologies.com/html/template/profile-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 11:42:29 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>KofeJob</title>

    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="dashboard-page">

    <div class="main-wrapper">


        @include('layouts.header')

        <div class="content content-page bookmark">
            <div class="container">
                <div class="row">

                    <div class="col-xl-3 col-lg-4 theiaStickySidebar">
                        <div class="settings-widget">
                            <div
                                class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
                                <a href="freelancer-profile.html"><img alt="profile image"
                                        src="assets/img/user/table-avatar-03.jpg"
                                        class="avatar-lg rounded-circle"></a>
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


        <footer class="footer">
            <div class="footer-top ">
                <div class="container">
                    <div class="row">
                        <div class=" col-lg-4 col-md-12">
                            <div class="footer-bottom-logo">
                                <a href="index.html" class="menu-logo">
                                    <img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
                                </a>
                                <p>We’re always in search for talented and motivated people. Don’t be shy introduce
                                    yourself!</p>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);"><i class="fa-brands fa-facebook-f"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="fa-brands fa-twitter"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="fa-brands fa-instagram"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="fa-brands fa-linkedin"
                                                aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                                <a href="javascript:void(0);" class="btn btn-connectus">Contact with us</a>
                            </div>
                        </div>
                        <div class=" col-lg-8 col-md-12">
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="footer-widget footer-menu">
                                        <h2 class="footer-title">Useful Links</h2>
                                        <ul>
                                            <li><a href="about.html"><i class="fas fa-angle-right me-1"></i>About
                                                    Us</a></li>
                                            <li><a href="blog-list.html"><i
                                                        class="fas fa-angle-right me-1"></i>Blog</a></li>
                                            <li><a href="login.html"><i class="fas fa-angle-right me-1"></i>Login</a>
                                            </li>
                                            <li><a href="register.html"><i
                                                        class="fas fa-angle-right me-1"></i>Register</a></li>
                                            <li><a href="forgot-password.html"><i
                                                        class="fas fa-angle-right me-1"></i>Forgot Password</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="footer-widget footer-menu">
                                        <h2 class="footer-title">Help & Support</h2>
                                        <ul>
                                            <li><a href="javascript:void(0);"><i
                                                        class="fas fa-angle-right me-1"></i>Browse Candidates</a></li>
                                            <li><a href="javascript:void(0);"><i
                                                        class="fas fa-angle-right me-1"></i>Employers Dashboard</a>
                                            </li>
                                            <li><a href="javascript:void(0);"><i
                                                        class="fas fa-angle-right me-1"></i>Job Packages</a></li>
                                            <li><a href="javascript:void(0);"><i
                                                        class="fas fa-angle-right me-1"></i>Jobs Featured</a></li>
                                            <li><a href="javascript:void(0);"><i
                                                        class="fas fa-angle-right me-1"></i>Post A Job</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="footer-widget footer-menu">
                                        <h2 class="footer-title">Other Links</h2>
                                        <ul>
                                            <li><a href="freelancer-dashboard.html"><i
                                                        class="fas fa-angle-right me-1"></i>Freelancers</a></li>
                                            <li><a href="freelancer-portfolio.html"><i
                                                        class="fas fa-angle-right me-1"></i>Freelancer Details</a></li>
                                            <li><a href="project.html"><i
                                                        class="fas fa-angle-right me-1"></i>Project</a></li>
                                            <li><a href="project-details.html"><i
                                                        class="fas fa-angle-right me-1"></i>Project Details</a></li>
                                            <li><a href="post-project.html"><i
                                                        class="fas fa-angle-right me-1"></i>Post Project</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="footer-widget footer-menu">
                                        <h2 class="footer-title">Connect With Us</h2>
                                        <ul>
                                            <li><a href="freelancer-chats.html"><i
                                                        class="fas fa-angle-right me-1"></i>Chat</a></li>
                                            <li><a href="faq.html"><i class="fas fa-angle-right me-1"></i>Faq</a></li>
                                            <li><a href="freelancer-review.html"><i
                                                        class="fas fa-angle-right me-1"></i>Reviews</a></li>
                                            <li><a href="privacy-policy.html"><i
                                                        class="fas fa-angle-right me-1"></i>Privacy Policy</a></li>
                                            <li><a href="term-condition.html"><i
                                                        class="fas fa-angle-right me-1"></i>Terms of use</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="footer-bottom">
                <div class="container">

                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright-text text-center">
                                    <p class="mb-0">Copyright 2024 © KofeJob. All right reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </footer>

    </div>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.7.1.min.js" type="1844f759bf01818f16cd74e0-text/javascript"></script>

    <script src="assets/js/bootstrap.bundle.min.js" type="1844f759bf01818f16cd74e0-text/javascript"></script>

    <script src="assets/plugins/select2/js/select2.min.js" type="1844f759bf01818f16cd74e0-text/javascript"></script>

    <script src="assets/js/moment.min.js" type="1844f759bf01818f16cd74e0-text/javascript"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js" type="1844f759bf01818f16cd74e0-text/javascript"></script>

    <script src="assets/plugins/datatables/jquery.dataTables.min.js" type="1844f759bf01818f16cd74e0-text/javascript"></script>
    <script src="assets/plugins/datatables/datatables.min.js" type="1844f759bf01818f16cd74e0-text/javascript"></script>

    <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="1844f759bf01818f16cd74e0-text/javascript"></script>
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="1844f759bf01818f16cd74e0-text/javascript"></script>

    <script src="assets/js/script.js" type="1844f759bf01818f16cd74e0-text/javascript"></script>
    <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="1844f759bf01818f16cd74e0-|49" defer></script>
</body>

<!-- Mirrored from kofejob.dreamstechnologies.com/html/template/profile-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 11:42:29 GMT -->

</html>
