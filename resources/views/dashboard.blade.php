<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workers Nepal</title>

    <style>
        body {
            background: #f8f9fa;
        }

        .navbar {
            background: #343a40 !important;
        }

        .nav-link {
            color: #fff !important;
        }

        .nav-link:hover {
            background-color: #495057;
        }

        .tab-profile {
            background: #fff;
            padding: 10px;
            position: relative;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            margin-top: 20px;
        }

        .box {
            background: #dc3545;
            margin-top: 50px;
            margin-right: 50px;
            position: absolute;
            padding: 45px;
            border-radius: 5px;
            color: #fff;
        }

        .breadcrumb {
            background-color: transparent;
            margin-bottom: 0;
        }

        .breadcrumb-item a {
            color: #6c757d;
            text-decoration: none;
        }

        .breadcrumb-item.active {
            color: #000;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }

        .box-main {
            margin-left: 330px;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="bg-secondary">
    @include('layouts.header', ['title' => 'WorkerNepal'])
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Workers Nepal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto me-5">
                    <div class="dropdown">
                        <li class="nav-item ">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="me-2">{{ $data->username }}</span>
                                <i class="fa fa-user-circle" style="font-size: 34px;"></i>
                            </a>
                            <ul class="dropdown-menu px-2" aria-labelledby="dropdownMenuButton1">
                                <i class="fa fa-user-circle me-2" style="font-size: 34px;"></i>
                                {{ $data->username }}
                                <hr>
                                <div class="d-flex justify-content-between log">
                                    <a href="{{route('auth.logout')}}" class="text-decoration-none">Log out</a>
                                    <i class="fa fa-sign-out me-2"></i>
                                </div>

                            </ul>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link {{ request()->is('home/view') ? 'active' : '' }} text-dark" id="home-tab"
                    href="{{route('profile')}}" role="tab" aria-controls="home" aria-selected="true">
                    <i class="fa fa-home"></i>
                    Profile
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link {{ request()->is('home/jobs') ? 'active' : '' }} text-dark" id="jobs-tab" href="{{route('jobs')}}" role="tab" aria-controls="jobs" aria-selected="false">
                    <i class="fa fa-briefcase"></i>
                    Jobs
                </a>
            </li>
        </ul>
        

        <div class="tab-profile ">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb my-auto">
                    @if (request()->is('home/view'))                       
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                    @endif
                    <li class="breadcrumb-item " aria-current="page">My Profile</li>
                    @if (request()->is('home/jobs'))                       
                    <li class="breadcrumb-item"><a href="#">Jobs</li>
                    @endif
                    @if (request()->is('home/profile'))                       
                    <li class="breadcrumb-item " aria-current="page">{{$data->username}}</li>
                    @endif
                </ol>
            </nav>
        </div>
        <div class="tab-content " id="myTabContent">
        @yield('profile')
        @yield('jobs')
        </div>

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
