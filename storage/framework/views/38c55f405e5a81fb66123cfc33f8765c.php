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
        <h2 class="text-xl font-bold text-gray-800 dark:text-white">Testimoni Pelanggan</h2>
     <?php $__env->endSlot(); ?>

    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow space-y-4">
        <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded">
            <p class="font-semibold text-gray-900 dark:text-white">Rina</p>
            <p class="text-gray-600 dark:text-gray-300">Parfumnya wangi dan tahan lama. Pengiriman juga cepat!</p>
        </div>
        <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded">
            <p class="font-semibold text-gray-900 dark:text-white">Ani</p>
            <p class="text-gray-600 dark:text-gray-300">Suka banget belanja di sini, pelayanannya ramah dan parfum original.</p>
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
<?php /**PATH C:\laragon\www\website_ecommerce\resources\views/pages/testimoni.blade.php ENDPATH**/ ?>