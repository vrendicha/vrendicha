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
            Dashboard
        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-10 bg-gradient-to-r from-indigo-500 to-blue-500 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php $__currentLoopData = $latestProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden dark:bg-gray-800">
                        <img src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>" class="w-full h-64 object-contain bg-white">

                        <div class="p-4 text-white">
                            <h3 class="text-lg font-semibold text-gray-200"><?php echo e($product->name); ?></h3>
                            <p class="text-sm text-gray-300"><?php echo e($product->description); ?></p>
                            <p class="text-sm mt-1">Stok: <?php echo e($product->stock); ?></p>
                            <p class="text-xl font-bold text-purple-400">Rp<?php echo e(number_format($product->price, 0, ',', '.')); ?></p>

                            <div class="flex justify-between items-center mt-4">
                                <form action="<?php echo e(route('cart.add', $product->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm">Tambah</button>
                                </form>
                               <a href="<?php echo e(route('checkout.buyNow.confirm', $product->id)); ?>"
                                 class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded text-sm text-center">
                                    Beli
                                </a>
                                
                                <a href="https://wa.me/6281234567890?text=Halo%20Admin,%20saya%20tertarik%20dengan%20<?php echo e(urlencode($product->name)); ?>" target="_blank" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded text-sm">Chat</a>
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
<?php /**PATH C:\laragon\www\website_ecommerce\resources\views/dashboard.blade.php ENDPATH**/ ?>