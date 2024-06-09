<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kofejob.dreamstechnologies.com/html/template/developer-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 11:42:01 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>KofeJob</title>

    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/dist/summernote-lite.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/feather/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <div class="main-wrapper">

        @include('layouts.header')


        <div class="bread-crumb-bar">
            <div class="container">
                <div class="row align-items-center inner-banner">
                    <div class="col-md-12 col-12 text-center">
                        <div class="breadcrumb-list">
                            <h2>Freelancer Details</h2>
                            <nav aria-label="breadcrumb" class="page-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Freelancer Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="company-detail-block pt-0">
                            <div class="company-detail">
                                <div class="company-detail-image">
                                    <img src="assets/img/img-04.jpg" class="img-fluid" alt="logo">
                                </div>
                                <div class="company-title">
                                    <h4>Michael Stewart</h4>
                                    <p>UI UX Designer</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar project-client-view">
                        <div class="card budget-widget">
                            <div class="budget-widget-details">
                                <h1>Détails du Freelance</h1>
                                <h4>$125 - $180</h4>
                                <p class="mb-0">Hourly Rate</p>
                                <ul class="buget-profiles">
                                    <li>
                                        <h6><i class="feather-map-pin me-2"></i>prenom</h6>
                                        <h5>{{ $freelance->first_name }}</h5>
                                    </li>
                                    <li>
                                        <h6><i class="feather-airplay me-2"></i>Nom</h6>
                                        <h5>{{ $freelance->last_name }}</h5>
                                    </li>
                                    <li>
                                        <h6><i class="feather-calendar me-2"></i>Telephone</h6>
                                        <h5> {{ $freelance->phone_number }}</h5>
                                    </li>
                                    <li>
                                        <h6><i class="feather-globe me-2"></i>Email</h6>
                                        <h5> {{ $freelance->email_address }}</h5>
                                    </li>
                                    <li>
                                        <h6><i class="feather-phone me-2"></i>Phone</h6>
                                        <h5>+91 9988776655</h5>
                                    </li>
                                    <li>
                                        <h6><i class="feather-mail me-2"></i>Mail</h6>
                                        <h5><a href="https://kofejob.dreamstechnologies.com/cdn-cgi/l/email-protection"
                                                class="__cf_email__"
                                                data-cfemail="c1a8afa7ae81a4b9a0acb1ada4efa2aeac">[email&#160;protected]</a>
                                        </h5>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <a data-bs-toggle="modal" href="#file" class="btn proposal-btn btn-primary">Send
                                    Invite</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        @include('layouts.footer')
    </div>




    <script data-cfasync="false" src="{{ asset('../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}">
    </script>
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}" type="57df502fc91ef54fb1364251-text/javascript"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="57df502fc91ef54fb1364251-text/javascript"></script>

    <script src="{{ asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}" type="57df502fc91ef54fb1364251-text/javascript"></script>
    <script src="{{ asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}" type="57df502fc91ef54fb1364251-text/javascript"></script>

    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}" type="57df502fc91ef54fb1364251-text/javascript"></script>

    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}" type="57df502fc91ef54fb1364251-text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}" type="57df502fc91ef54fb1364251-text/javascript"></script>

    <script src="{{ asset('assets/plugins/summernote/dist/summernote-lite.min.js') }}" type="57df502fc91ef54fb1364251-text/javascript"></script>

    <script src="{{ asset('assets/js/script.js') }}" type="57df502fc91ef54fb1364251-text/javascript"></script>
    <script src="{{ asset('../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}"
        data-cf-settings="57df502fc91ef54fb1364251-|49" defer></script>
</body>

<!-- Mirrored from kofejob.dreamstechnologies.com/html/template/developer-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 11:42:04 GMT -->

</html>
