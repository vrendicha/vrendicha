<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Dina Parfum')); ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles & Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="font-sans text-gray-900 antialiased bg-cover bg-center"
      style="background-image: url('<?php echo e(asset('images/bg-login.png')); ?>');">

    <div class="min-h-screen flex flex-col items-center justify-center bg-white/60 backdrop-blur-md">
        <!-- Logo -->
        <div class="mb-4">
            <a href="/">
                <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Logo Dina Parfum" class="h-16 rounded-full shadow-lg">
            </a>
        </div>

        <!-- Form Container -->
        <div class="w-full sm:max-w-md px-6 py-6 bg-white/80 dark:bg-gray-800 rounded-xl shadow-lg ring-1 ring-gray-200">
            <?php echo e($slot); ?>

        </div>
    </div>

</body>
</html>
<?php /**PATH C:\laragon\www\website_ecommerce\resources\views/layouts/guest.blade.php ENDPATH**/ ?>