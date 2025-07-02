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
        <h2 class="text-xl font-semibold text-gray-800 dark:text-white leading-tight">
            List Produk
        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-10 bg-gradient-to-r from-gray-100 to-gray-200 dark:from-gray-900 dark:to-gray-800 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-all duration-300">
                        <img src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>" class="w-full h-64 object-contain bg-white p-4">

                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-1"><?php echo e($product->name); ?></h3>
                            <p class="text-sm text-gray-700 dark:text-gray-300 mb-1"><?php echo e($product->description); ?></p>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Stok: <?php echo e($product->stock); ?></p>
                            <p class="text-lg font-bold text-purple-600 dark:text-purple-400">Rp<?php echo e(number_format($product->price, 0, ',', '.')); ?></p>

                            <div class="mt-4 space-y-2">
                                <form action="<?php echo e(route('cart.add', $product->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white text-sm py-2 rounded-md transition">+ Tambah ke Keranjang</button>
                                </form>

                                <?php if($product->stock > 0): ?>
                                    <a href="<?php echo e(route('checkout.buyNow.confirm', $product->id)); ?>"
                                       class="w-full text-center bg-green-600 hover:bg-green-700 text-white text-sm py-2 rounded-md block transition">
                                       Beli
                                    </a>
                                <?php else: ?>
                                    <span class="block text-center text-xs text-red-500">Stok Habis</span>
                                <?php endif; ?>

                                <a href="https://wa.me/6283874740127?text=Halo%20Admin,%20saya%20tertarik%20dengan%20<?php echo e(urlencode($product->name)); ?>"
                                   target="_blank"
                                   class="w-full text-center bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 text-sm py-2 rounded-md flex items-center justify-center gap-1 hover:bg-gray-200 dark:hover:bg-gray-600 transition">
                                    💬 Chat Admin
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php /**PATH C:\laragon\www\website_ecommerce\resources\views/products/index.blade.php ENDPATH**/ ?>