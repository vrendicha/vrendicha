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
        <h2 class="text-xl font-bold text-white text-center">Pesanan Sukses</h2>
     <?php $__env->endSlot(); ?>

    <div class="py-20 min-h-screen bg-gradient-to-br from-pink-100 via-purple-100 to-blue-100 flex items-center justify-center relative overflow-hidden">

        
        <img src="<?php echo e(asset('images/bg-parfum.png')); ?>"
             class="absolute opacity-10 w-[400px] -left-16 -top-20 rotate-12 pointer-events-none hidden sm:block" alt="bg-parfum">

        <div class="bg-white/70 backdrop-blur-md shadow-xl p-10 rounded-xl max-w-lg w-full text-center animate-fade-in">
            <img src="<?php echo e(asset('images/parfum-icon.png')); ?>"
                 class="mx-auto w-20 h-20 mb-6" alt="Ikon Parfum">

            <h1 class="text-3xl font-bold text-purple-600 mb-4">Terima Kasih! 🎉</h1>

            <p class="text-gray-700 mb-4 leading-relaxed">
                Pesanan Anda telah <strong>berhasil diproses</strong>.<br>
                Kami akan segera menghubungi Anda untuk pengiriman.
            </p>

            <a href="<?php echo e(route('products.index')); ?>"
               class="inline-block mt-4 bg-purple-600 hover:bg-purple-700 text-white px-6 py-2 rounded-full transition-all duration-200 shadow">
                ⬅️ Kembali ke Produk
            </a>
        </div>
    </div>

    
    <style>
        @keyframes fade-in {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-fade-in {
            animation: fade-in 0.6s ease-out both;
        }
    </style>
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
<?php /**PATH C:\laragon\www\website_ecommerce\resources\views/order/thankyou.blade.php ENDPATH**/ ?>