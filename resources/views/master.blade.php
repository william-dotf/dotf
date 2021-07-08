<html>
<head>
    <title>Brand Stack-@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light float-right">
        <div class="container">
            <img class="navbar-brand" src="{{asset('image/contentstack-trans-flat-web.png')}}" width="720px" height="68px"></img>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mr-0">
                <li class="nav-item">
                    <a class="nav-link" href="/products">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/services">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/users">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact_us">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
@section('sidebar')
@show

<div class="container">
    @yield('content')
</div>

</body>
</html>
