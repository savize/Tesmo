<html>

<head>
    <title>Tesmo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sticky-footer-navbar/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        .content {
            flex: 1;
        }
    </style>
</head>

<body>

    <div class="container-fluid bg-primary">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-dark ">
                    <div class="col">
                        <a href="{{ route('home') }}">
                            <img class="img" src="https://zhdh.co.uk/img/logoW.png"; alt="" width="75">
                        </a>
                    </div>
                    <div class="col justify-content-center text-center items-center">
                        <div class="navbar-nav">
                            <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only"></span></a>
                            @if (Auth::user())
                                <a class="nav-link">Welcome {{ Auth::user()->name }}</a>
                                <a class="nav-link" href="{{ route('basket') }}"><img src="{{ $imgSrc }}"
                                        alt="" width="25px"></a>
                                <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                            @else
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            @endif
                        </div>
                    </div>
                    <div class="col mt-3">
                        <form action="{{ route('search') }}" method="get">
                            <div class="d-flex form-inputs">
                                <input type="search" name="q" class="form-control" placeholder="search"></input>
                                <button type="submit" class="btn btn-primary" data-mdb-ripple-init>
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="container mt-4 alert">
        <div class="row justify-content-center text-center">
            @yield('content')
        </div>
    </div>
    </main>

    <footer class="footer mt-auto py-4 bg-primary" style="color: white">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column text-white" style="color: white">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
                    </ul>
                </div>
                <div class="col-4">
                    <div class="row">
                        <form action="" method="get">
                            <h5>Subscribe to our newsletter</h5>
                            <p>Monthly digest of whats new and exciting from us.</p>
                            <div class="d-flex w-100 gap-2">
                                <label for="email" class="visually-hidden">Email address</label>
                                <input id="email" type="text" name="email" class="form-control"
                                    placeholder="Email address">

                                <input class="btn btn-light" onclick="openModal()" type="submit" value="Subscribe">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-3 mt-5">
                    <ul class="list-unstyled d-flex justify-content-center">
                        <li class="ms-3 ml-5"><a class="link-body-emphasis" href="#"><img
                                    src="{{ asset('img/facebook.png') }}" width="25px" alt=""></a></li>
                        <li class="ms-3 ml-5"><a class="link-body-emphasis" href="#"><img
                                    src="{{ asset('img/instagram.png') }}" width="25px" alt=""></a></li>
                        <li class="ms-3 ml-5"><a class="link-body-emphasis" href="#"><img
                                    src="{{ asset('img/marker.png') }}" width="25px" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


    <div class="modal text-white text-center" id="register" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content bg-primary">
                <div class="modal-body">
                    <h5 class="modal-title">You are now registered, please check your email!</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="modal text-white text-center justify-content-center" id="invalid" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content bg-primary">
                <div class="modal-body">
                    <h5 class="modal-title">Invalid email address</h5>
                </div>
            </div>
        </div>
    </div>


</body>
<script>
    function openModal() {
        var value = document.getElementById('email').value;
        if (value == "") {
            var myModal = new bootstrap.Modal(document.getElementById('invalid'));
            myModal.show();
        } else {
            var myModal = new bootstrap.Modal(document.getElementById('register'));
            myModal.show();
        }
    }
</script>

</html>
