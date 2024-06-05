<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kofejob.dreamstechnologies.com/html/template/developer.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 11:41:59 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>KofeJob</title>

    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="main-wrapper">


        @include('layouts.header')


        <div class="bread-crumb-bar">
            <div class="container">
                <div class="row align-items-center inner-banner">
                    <div class="col-md-12 col-12 text-center">
                        <div class="breadcrumb-list">
                            <h2>Freelancer Grid</h2>
                            <nav aria-label="breadcrumb" class="page-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> Home</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Developers</li>
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
                    {{-- vertical nav --}}
                    <div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">

                        <div class="card search-filter">
                            <div class="card-header d-flex justify-content-between">
                                <h4 class="card-title mb-0">Search Filter</h4>
                            </div>
                            <div class="card-body">
                                <div class="filter-widget">
                                    <h4 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse"
                                            data-bs-target="#collapselocation" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Location
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h4>
                                    <div id="collapselocation" class="collapse show"
                                        data-bs-parent="#accordionExample1">
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span>USA (25)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span> IND (62)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span>UK (46)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span>AUS (37)
                                            </label>
                                        </div>
                                        <div id="collapseOnes3" class="collapse" data-bs-parent="#accordionExample1">
                                            <div>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="select_time">
                                                    <span class="checkmark"></span> IND (62)
                                                </label>
                                            </div>
                                            <div>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="select_time">
                                                    <span class="checkmark"></span>UK (46)
                                                </label>
                                            </div>
                                            <div>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="select_time">
                                                    <span class="checkmark"></span>AUS (37)
                                                </label>
                                            </div>
                                        </div>
                                        <div class="showmore mt-2">
                                            <a href="javascript:void(0);" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOnes3" aria-expanded="true"
                                                aria-controls="collapseOne"><i class="feather-plus me-1"></i>Show
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-widget">
                                    <h4 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse"
                                            data-bs-target="#collapseskills" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Skills
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h4>
                                    <div id="collapseskills" class="collapse show"
                                        data-bs-parent="#accordionExample1">
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span> After Effects (6)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span> Android Developer (7)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span> Backend Developer (7)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span> Computer Operator (1)
                                            </label>
                                        </div>
                                        <div id="collapseOnes1" class="collapse" data-bs-parent="#accordionExample1">
                                            <div>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="select_time">
                                                    <span class="checkmark"></span> After Effects (6)
                                                </label>
                                            </div>
                                            <div>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="select_time">
                                                    <span class="checkmark"></span> Android Developer (7)
                                                </label>
                                            </div>
                                            <div>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="select_time">
                                                    <span class="checkmark"></span> Backend Developer (7)
                                                </label>
                                            </div>
                                            <div>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="select_time">
                                                    <span class="checkmark"></span> Computer Operator (1)
                                                </label>
                                            </div>
                                        </div>
                                        <div class="showmore mt-2">
                                            <a href="javascript:void(0);" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOnes1" aria-expanded="true"
                                                aria-controls="collapseOne"><i class="feather-plus me-1"></i>Show
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-widget">
                                    <h4 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Category
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h4>
                                    <div id="collapseOne" class="collapse show" data-bs-parent="#accordionExample1">
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span> Developer (25)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span> UI Developer (62)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span> React Developer (46)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span> .Net Developer (37)
                                            </label>
                                        </div>
                                        <div id="collapseOnes" class="collapse" data-bs-parent="#accordionExample1">
                                            <div>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="select_time">
                                                    <span class="checkmark"></span> UI Developer (62)
                                                </label>
                                            </div>
                                            <div>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="select_time">
                                                    <span class="checkmark"></span> React Developer (46)
                                                </label>
                                            </div>
                                            <div>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="select_time">
                                                    <span class="checkmark"></span> .Net Developer (37)
                                                </label>
                                            </div>
                                        </div>
                                        <div class="showmore mt-2">
                                            <a href="javascript:void(0);" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOnes" aria-expanded="true"
                                                aria-controls="collapseOne"><i class="feather-plus me-1"></i>Show
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-widget">
                                    <h4 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse"
                                            data-bs-target="#collapsproject" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Freelancer Type
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h4>
                                    <div id="collapsproject" class="collapse show"
                                        data-bs-parent="#accordionExample1">
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span>Fixed (6)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span>Hourly (7)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-widget">
                                    <h4 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse"
                                            data-bs-target="#collapselanguage" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Languages
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h4>
                                    <div id="collapselanguage" class="collapse show"
                                        data-bs-parent="#accordionExample1">
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span> English (5)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span> Arabic (2)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span>German (1)
                                            </label>
                                        </div>
                                        <div id="collapseOnes2" class="collapse" data-bs-parent="#accordionExample1">
                                            <div>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="select_time">
                                                    <span class="checkmark"></span> English (5)
                                                </label>
                                            </div>
                                            <div>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="select_time">
                                                    <span class="checkmark"></span> Arabic (2)
                                                </label>
                                            </div>
                                            <div>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="select_time">
                                                    <span class="checkmark"></span>German (1)
                                                </label>
                                            </div>
                                        </div>
                                        <div class="showmore mt-2">
                                            <a href="javascript:void(0);" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOnes2" aria-expanded="true"
                                                aria-controls="collapseOne"><i class="feather-plus me-1"></i>Show
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-widget">
                                    <h4 class="filter-title">
                                        <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse"
                                            data-bs-target="#collapselanguagea" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Freelancer Type
                                            <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                    </h4>
                                    <div id="collapselanguagea" class="collapse show"
                                        data-bs-parent="#accordionExample1">
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span>Full Time (3)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span> Part Time (4)
                                            </label>
                                        </div>
                                        <div>
                                            <label class="custom_check">
                                                <input type="checkbox" name="select_time">
                                                <span class="checkmark"></span>Project Based (2)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-search">
                                    <button type="button" class="btn btn-primary">Search</button>
                                    <button type="button" class="btn btn-block">Reset</button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12 col-lg-8 col-xl-9">
                        <div class="sort-tab develop-list-select">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="d-flex align-items-center">
                                        <div class="freelance-view">
                                            <h4>Found 9 Results</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-sm-end">
                                    <div class="sort-by">
                                        <select class="select ">
                                            <option>Sort by (Default)</option>
                                            <option>Relevance</option>
                                            <option>Rating</option>
                                            <option>Popular</option>
                                            <option>Latest</option>
                                            <option>Free</option>
                                        </select>
                                    </div>
                                    <ul class="list-grid d-flex align-items-center">
                                        <li><a href="developer.html" class="favour-active"><i
                                                    class="fas fa-th-large"></i></a></li>
                                        <li><a href="developer-list.html"><i class="fas fa-list"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        @foreach ($freelances as $freelance)
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="freelance-widget">
                                            <div class="freelance-content">
                                                <div class="freelance-img">
                                                    <a href="developer-details.html">
                                                        <img src="{{ asset('assets/img/user/avatar-2.jpg') }}" alt="User Image">
                                                        <!-- Remplacez 'assets/img/user/avatar-2.jpg' par le chemin réel de l'image du freelance -->
                                                        <span class="verified"><i class="fas fa-check-circle"></i></span>
                                                    </a>
                                                </div>
                                                <div class="freelance-info">
                                                    <h3><a href="developer-details.html">{{ $freelance->first_name }} {{ $freelance->last_name }}</a></h3>
                                                    <div class="freelance-specific">{{ $freelance->phone_number }}</div>
                                                    <div class="freelance-location">{{ $freelance->email_address }}</div>
                                                </div>
                                            </div>
                                            <div class="cart-hover">
                                                <!-- Lien "Modifier" -->
                                                <a href="{{ route('freelance.edit', $freelance->id) }}" class="btn btn-primary">Modifier</a>
                                                <a href="developer-details.html" class="btn-cart" tabindex="-1">View Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>

                </div>
            </div>
        </div>
    </div>


    @include('layouts.footer_freelance')

    </div>





    <script src="assets/js/jquery-3.7.1.min.js" type="151145e2f361d169085d3c88-text/javascript"></script>

    <script src="assets/js/bootstrap.bundle.min.js" type="151145e2f361d169085d3c88-text/javascript"></script>

    <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js" type="151145e2f361d169085d3c88-text/javascript"></script>
    <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="151145e2f361d169085d3c88-text/javascript"></script>

    <script src="assets/plugins/select2/js/select2.min.js" type="151145e2f361d169085d3c88-text/javascript"></script>

    <script src="assets/js/profile-settings.js" type="151145e2f361d169085d3c88-text/javascript"></script>
    <script src="assets/js/script.js" type="151145e2f361d169085d3c88-text/javascript"></script>
    <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="151145e2f361d169085d3c88-|49" defer></script>
</body>

<!-- Mirrored from kofejob.dreamstechnologies.com/html/template/developer.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 11:42:01 GMT -->

</html>
