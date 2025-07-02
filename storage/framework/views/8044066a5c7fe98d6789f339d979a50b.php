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
            Keranjang Belanja
        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-8 bg-gray-100 dark:bg-gray-900 min-h-screen">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md overflow-hidden">

                <?php if(session('success')): ?>
                    <div class="mb-4 text-green-600 font-semibold">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>

                <?php if($cartItems->isEmpty()): ?>
                    <p class="text-center text-gray-600 dark:text-gray-300 py-6">Keranjang masih kosong.</p>
                <?php else: ?>
                    <div class="space-y-6">
                        <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="flex items-center gap-4 border-b pb-4">
                                <img src="<?php echo e(asset('storage/' . $item->product->image)); ?>" alt="<?php echo e($item->product->name); ?>" class="w-24 h-24 object-contain rounded border">
                                <div class="flex-1">
                                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                        <?php echo e($item->product->name); ?>

                                    </h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-300">
                                        Rp<?php echo e(number_format($item->product->price, 0, ',', '.')); ?> x <?php echo e($item->quantity); ?>

                                    </p>
                                    <p class="text-sm font-semibold text-purple-600 mt-1">
                                        Subtotal: Rp<?php echo e(number_format($item->product->price * $item->quantity, 0, ',', '.')); ?>

                                    </p>
                                </div>
                                <form action="<?php echo e(route('cart.remove', $item->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="text-red-600 hover:text-red-800 font-semibold">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <div class="mt-6 text-right">
                        <p class="text-xl font-bold text-purple-700 mb-4">
                            Total: Rp<?php echo e(number_format($total, 0, ',', '.')); ?>

                        </p>

                        <form action="<?php echo e(route('cart.clear')); ?>" method="POST" class="inline-block">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded mr-2">
                                Kosongkan Keranjang
                            </button>
                        </form>

                        <a href="<?php echo e(route('checkout.confirm')); ?>"
                           class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded">
                            Checkout Sekarang
                        </a>
                    </div>
                <?php endif; ?>

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
<?php /**PATH C:\laragon\www\website_ecommerce\resources\views/cart/index.blade.php ENDPATH**/ ?>