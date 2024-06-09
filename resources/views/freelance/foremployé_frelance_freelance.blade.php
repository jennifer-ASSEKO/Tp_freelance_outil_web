<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kofejob.dreamstechnologies.com/html/template/developer.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 11:41:59 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>KofeJob</title>

    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

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

        @if (session('edit'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('edit') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('delete'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('delete') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('save'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('save') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="container">
            <div class="row">
                @foreach ($freelances ?? [] as $freelance)
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="freelance-widget">
                            <div class="freelance-content">
                                <div class="freelance-img">
                                    <a href="developer-details.html">
                                        <img src="{{ isset($freelance->profile_picture) ? asset('storage/' . $freelance->profile_picture) : asset('assets/img/user/avatar-2.jpg') }}"
                                            alt="User Image">
                                        <span class="verified"><i class="fas fa-check-circle"></i></span>
                                    </a>
                                </div>

                                <div class="freelance-info">
                                    <h3><a href="developer-details.html">{{ $freelance->first_name }}
                                            {{ $freelance->last_name }}</a></h3>
                                    <div class="freelance-specific">{{ $freelance->phone_number }}</div>
                                    <div class="freelance-location">{{ $freelance->email_address }}</div>
                                    @if (isset($freelance->freelance_pdf))
                                        <div class="freelance-file">
                                            <a href="{{ asset('storage/' . $freelance->freelance_pdf) }}"
                                                target="_blank" class=""><i class="fas fa-file-pdf"
                                                    title="Download PDF"></i></a>
                                        </div>
                                    @endif
                                    @if (isset($freelance->additional_file))
                                        <div class="freelance-file">
                                            <a href="{{ asset('storage/' . $freelance->additional_file) }}"
                                                target="_blank" class=""><i class="fas fa-download"
                                                    title="Download Additional File"></i></a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="freelance-actions d-flex justify-content-center">
                                <form action="{{ route('freelance.destroy', $freelance->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this freelance?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-icon mx-2" title="Delete"><i
                                            class="fas fa-trash"></i></button>
                                </form>
                                <a href="{{ route('freelance.edit', $freelance->id) }}" class="edit-icon mx-2"
                                    title="Edit"><i class="fas fa-edit"></i></a>
                                <a href="{{ route('freelance.show', $freelance->id) }}" class="details-icon mx-2"
                                    title="Details"><i class="fas fa-info-circle"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        @include('layouts.footer')

    </div>


    <style>
        .delete-icon {
            color: red;
        }

        .edit-icon {
            color: blue;
        }

        .details-icon {
            color: brown;
        }

        /* Infobulles personnalisées */
        .freelance-actions .mx-2 {
            position: relative;
        }

        .freelance-actions .mx-2:hover::after {
            content: attr(title);
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%);
            background-color: #333;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            white-space: nowrap;
            z-index: 10;
            opacity: 1;
            transition: opacity 0.3s;
        }

        .freelance-actions .mx-2:hover::before {
            content: '';
            position: absolute;
            bottom: 90%;
            left: 50%;
            transform: translateX(-50%);
            border-width: 5px;
            border-style: solid;
            border-color: transparent transparent #333 transparent;
            z-index: 10;
            opacity: 1;
            transition: opacity 0.3s;
        }
    </style>


    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('.alert').alert('close');
            }, 5000); // 5 secondes
        });
    </script>
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}" type="151145e2f361d169085d3c88-text/javascript"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="151145e2f361d169085d3c88-text/javascript"></script>

    <script src="{{ asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}" type="151145e2f361d169085d3c88-text/javascript"></script>
    <script src="{{ asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}" type="151145e2f361d169085d3c88-text/javascript"></script>

    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}" type="151145e2f361d169085d3c88-text/javascript"></script>

    <script src="{{ asset('assets/js/profile-settings.js') }}" type="151145e2f361d169085d3c88-text/javascript"></script>
    <script src="{{ asset('assets/js/script.js') }}" type="151145e2f361d169085d3c88-text/javascript"></script>
    <script src="{{ asset('../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}"
        data-cf-settings="151145e2f361d169085d3c88-|49" defer></script>
</body>

<!-- Mirrored from kofejob.dreamstechnologies.com/html/template/developer.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2024 11:42:01 GMT -->

</html>
