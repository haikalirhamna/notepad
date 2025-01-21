<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notepad App</title>
    @vite('resources/css/app.css')
</head>

<style>
    /* width & height */
    .min-h-100 {
        min-height: 100vh;
    }

    /* background */
    .bg-main {
        background-color: #a4abb6;
    }

    .bg-gradient-main {
        background: linear-gradient(to bottom right, #E3E5E6, #F4E7CB);
    }

    /* card */
    .card-img {
        border-radius: 24px;
        height: 100%;
        object-fit: cover;
    }

    .rounded-xl {
        border-radius: 32px;
    }

    .form-control {
        border-radius: 32px;
        height: 52px;
        margin-bottom: 16px;
    }

    .btn-yellow {
        width: 100%;
        height: 52px;
        border-radius: 32px;
        background-color: #ffd85f;
    }
</style>

<body>
    <div class="position-relative min-h-100 bg-main">
        <div class="container position-absolute top-50 start-50 translate-middle">
            <div class="d-block d-lg-flex align-items-center">
                <div class="card bg-gradient-main shadow rounded-xl overflow-hidden">
                    <div class="row m-0">
                        <div class="col-md-6 col-12 p-0">
                            <div class="d-flex flex-column justify-content-between h-100 py-5 px-3 px-lg-5">
                                <h1 class="mb-3">NotePad</h1>
                                <div class="mb-3">
                                    @yield('content')
                                </div>
                                <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center">
                                    @yield('footer')
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 d-none d-sm-block p-0">
                            <div class="p-0 p-lg-3 p-xl-5">
                                <img src="{{ asset('images/cover.jpg') }}" class="card-img" alt="cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
