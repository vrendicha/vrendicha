<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Tentang Kami
        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-10 bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="max-w-4xl mx-auto px-6">
            
            <div class="flex justify-center mb-8">
                <img src="<?php echo e(asset('storage/logo.png')); ?>" 
                     alt="Logo Dina Parfum"
                     class="max-w-xs rounded-lg shadow-lg animate-bounce duration-1000">
            </div>

            
            <div class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-md">
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed text-justify">
                    <strong class="text-purple-600">Dina Parfum</strong> adalah toko parfum terpercaya yang menyediakan beragam pilihan parfum original dengan harga terjangkau. Kami berkomitmen menghadirkan pengalaman penciuman tak terlupakan melalui aroma terbaik dari seluruh dunia.
                </p>
                <p class="mt-4 text-gray-700 dark:text-gray-300 leading-relaxed text-justify">
                    Lebih dari sekadar parfum, kami menghadirkan cerita dalam setiap tetesnya. Koleksi eksklusif kami dirancang untuk mencerminkan gaya hidup, karakter, dan kepribadian Anda. Tim kami siap membantu Anda menemukan keharuman yang sesuai dengan preferensi dan kebutuhan.
                </p>
                <p class="mt-4 text-gray-700 dark:text-gray-300 leading-relaxed text-justify">
                    Kami percaya bahwa keharuman berkualitas tidak harus mahal. Parfum kami dibuat dengan bahan baku terbaik dan teknik modern yang menghasilkan aroma tahan lama dan menyenangkan. Temukan parfum favorit Anda hari ini!
                </p>
                <p class="mt-4 text-gray-700 dark:text-gray-300 leading-relaxed text-justify">
                    <em>Dina Parfum &ndash; Wangi yang Membuat Anda Bercahaya.</em>
                </p>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\website_ecommerce\resources\views/pages/tentang.blade.php ENDPATH**/ ?>