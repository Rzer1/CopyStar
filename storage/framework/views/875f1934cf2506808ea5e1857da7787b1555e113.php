<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>CopyStar</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('\asssets\css\style.css')); ?>">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
</head>
<body>
    <header class="head">
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <img class="head-logo" src="\public\asssets\img\logo.png">
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('/')); ?>">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('/catalog')); ?>">Каталог</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('/mapcontacts')); ?>">Где нас найти?</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('/register')); ?>">Регистрация</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('/login')); ?>">Аунтификация</a>
                        </li>
                    </ul>
                </div>
            </div>
        <nav>
    </header>
    <main class="py-4">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <footer class="foot">
    <nav class="navbar navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <img class="head-logo" src="\public\asssets\img\logo.png">
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('/')); ?>">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('/catalog')); ?>">Каталог</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('/')); ?>">Где нас найти?</a>
                        </li>
                    </ul>
                </div>
            </div>
        <nav>
    </footer>
</body>
</html>
<?php /**PATH /srv/users/jdzaexvz/ydyharf-m1/resources/views/layouts/headfoot.blade.php ENDPATH**/ ?>