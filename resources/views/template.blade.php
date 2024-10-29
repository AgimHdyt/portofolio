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
        <!-- Aside -->
        <div class="aside">
            <div class="logo">
                <a href="#"><span>A</span>gim</a>
            </div>
            <div class="nav-toggler">
                <span></span>
            </div>
            <ul class="nav">
                <li><a href="#home" class="active"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="#about"><i class="fa fa-user"></i>About</a></li>
                <li><a href="#service"><i class="fa fa-list"></i>Services</a></li>
                <li><a href="#portfolio"><i class="fa fa-briefcase"></i>Portfolio</a></li>
                <li><a href="#contact"><i class="fa fa-comments"></i>Contact</a></li>
            </ul>
            <div class="sosmed">
                <ul class="sosmed-item">
                    <li><a href="https://www.linkedin.com/in/agim-hidayat-31a021259/"><i
                                class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="https://www.instagram.com/a_gimhdyt/"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://twitter.com/AgimHidayat"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- Aside End -->

        <!-- Main Content Start -->
        <div class="main-content">
            @yield('content')
        </div>
        <!-- Main Cntent End -->
    </div>
    <!-- Main Container End -->
    <!-- Modal -->
    {{-- <div class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p class="modal-text"></p>
            <div class="modal-body">
                <form action="">
                    <div class="form-item col-12 padd-15">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-item col-12 padd-15">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-item col-12 padd-15">
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" placeholder="Subject">
                        </div>
                    </div>
                    <div class="form-item col-12 padd-15">
                        <div class="form-group">
                            <input type="file" name="file" id="" class="form-control">
                        </div>
                    </div>
                    <div class="form-item col-12 padd-15">
                        <div class="form-group">
                            <textarea name="message" id="" class="form-control" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="form-item col-12 padd-15">
                        <button type="submit" class="btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
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
