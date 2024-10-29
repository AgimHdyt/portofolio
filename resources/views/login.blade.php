<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML Web Portfolio">
    <meta name="author" content="Agim Hidayat">
    <meta name="keywords" content="Agim Hidayat, Jasa Pembuatan Website,">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="shortcut icon" href="/assets/images/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/skins/color-1.css">
    <link rel="stylesheet" href="/assets/css/css.css">
    <!-- Style Swetcher -->
    <link rel="stylesheet" href="/assets/css/skins/color-1.css" class="alternate-style" title="color-1" disabled>
    <link rel="stylesheet" href="/assets/css/skins/color-2.css" class="alternate-style" title="color-2" disabled>
    <link rel="stylesheet" href="/assets/css/skins/color-3.css" class="alternate-style" title="color-3" disabled>
    <link rel="stylesheet" href="/assets/css/skins/color-4.css" class="alternate-style" title="color-4" disabled>
    <link rel="stylesheet" href="/assets/css/skins/color-5.css" class="alternate-style" title="color-5" disabled>
    <link rel="stylesheet" href="/assets/css/style-switcher.css">
    <!-- sweetalert -->
    <link rel="stylesheet" href="/assets/sweetalert2/dist/sweetalert2.min.css">
    <title>Agim Hidayat</title>
</head>

<body>
    <!-- Main Container -->
    <div class="main-container">

        <!-- Main Content Start -->
        <div class="main-content">
            <section class="container" style="margin-top: 10%">
                <div class="row">
                    <div class="col-6 padd-15">

                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12">
                                @error('login_error')
                                    <div class="alert alert-danger mb-3" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <h1 class="card-title fs-3 fw-semibold text-center mb-3">Login</h1>
                                <form action="{{ route('auth') }}" class="contact-form padd-15" method="POST">
                                    @csrf
                                    <div class="form-item">
                                        <div class="form-group mb-3">
                                            <label for="email" class="form-label fw-semibold">Email</label>
                                            <input type="email"
                                                class="form-control @error('email') is-invalid @enderror" id="email"
                                                name="email" placeholder="Masukkan email" value="{{ old('email') }}"
                                                autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-item">
                                        <div class="form-group mb-3">
                                            <label for="password" class="form-label fw-semibold">Password</label>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                id="password" name="password" placeholder="Masukkan password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-item">
                                        <div class="form-group mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="remember">
                                                    Remember Me
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary w-100">
                                        Masuk
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
        <!-- Main Cntent End -->
    </div>
    <!-- Style Swicher Start -->
    <div class="style-switcher">
        <div class="style-switcher-toggler s-icon">
            <i class="fas fa-cog fa-spin"></i>
        </div>
        <div class="day-night s-icon">
            <i class="fas "></i>
        </div>
        <h4>Theme Colors</h4>
        <div class="colors">
            <span class="color-1" onclick="setActiveStyle('color-1')"></span>
            <span class="color-2" onclick="setActiveStyle('color-2')"></span>
            <span class="color-3" onclick="setActiveStyle('color-3')"></span>
            <span class="color-4" onclick="setActiveStyle('color-4')"></span>
            <span class="color-5" onclick="setActiveStyle('color-5')"></span>
        </div>
    </div>
    <!-- Style Swicher End -->

    <!-- Js Files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js" referrerpolicy="no-referrer"></script>
    <script src="/assets/js/js.js"></script>
    <script src="/assets/js/style-switcher.js"></script>
    <script src="/assets/sweetalert2/dist/sweetalert2.min.js"></script>
</body>

</html>
