<header class="position-sticky top-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand fs-1 me-3" href="{{ route('home') }}"> <span class="text-danger">Aden</span> Jobs</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto text-center mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('jobs') }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Jobs
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('jobs') }}">Jobs List</a></li>
                                <li><a class="dropdown-item" href="{{ route('job_details') }}">Job Details</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('services') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('services') }}">Service List</a></li>
                                <li><a class="dropdown-item" href="{{ route('parteners_companies') }}">Companies List</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('about') }}">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('contact') }}">Contact</a>
                        </li>


                    </ul>
                    <div class="d-flex m-lg-2 flex-column flex-lg-row gap-2 mb-3 m-sm-3">
                        <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#signUpModal">
                            <i class="fa fa-user me-2 "></i>SignUp </button>

                        <button type="button" class="btn btn-danger rounded-pill" data-bs-toggle="modal" data-bs-target="#loginModal">
                            <i class="fa fa-sign-in-alt me-2  "></i> Login
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
