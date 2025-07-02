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
        <h2 class="text-xl font-semibold text-gray-800 dark:text-white animate-pulse">
            🛍️ Konfirmasi Pembelian
        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-10 max-w-3xl mx-auto">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg transition-transform duration-300 hover:scale-[1.01]">
            <h3 class="text-lg font-bold mb-4 text-gray-900 dark:text-white">🧾 Produk yang Anda Beli</h3>

            <div class="flex gap-4 mb-6">
                <img src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>"
                     class="w-32 h-32 object-cover rounded border shadow" />

                <div>
                    <h4 class="text-lg font-semibold text-gray-900 dark:text-white"><?php echo e($product->name); ?></h4>
                    <p class="text-gray-600 dark:text-gray-300"><?php echo e($product->description); ?></p>
                    <p class="text-purple-600 font-bold text-lg mt-1">Rp<?php echo e(number_format($product->price, 0, ',', '.')); ?></p>
                </div>
            </div>

            <form action="<?php echo e(route('checkout.buyNow', $product->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>

                
                <div class="mb-4">
                    <label for="quantity" class="block font-medium text-sm text-gray-700 dark:text-gray-200">
                        📦 Jumlah Barang
                    </label>
                    <input type="number" name="quantity" value="1" min="1" max="<?php echo e($product->stock); ?>"
                           class="mt-1 w-full border-gray-300 dark:bg-gray-700 dark:border-gray-600 rounded-md">
                </div>

                
                <div class="mb-6">
                    <label for="payment_method" class="block font-medium text-sm text-gray-700 dark:text-gray-200">
                        💳 Metode Pembayaran
                    </label>
                    <select name="payment_method"
                            class="mt-1 w-full border-gray-300 dark:bg-gray-700 dark:border-gray-600 rounded-md">
                        <option value="Transfer">🏦 Transfer Bank (BRI - 324801005214504 a.n Dina Pratiwi)</option>
                        <option value="QRIS">📱 QRIS</option>
                    </select>
                </div>

                
                <button type="submit"
                        class="w-full bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md font-semibold transition transform hover:scale-105">
                    💰 Bayar Sekarang
                </button>
            </form>
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
<?php /**PATH C:\laragon\www\website_ecommerce\resources\views/checkout/confirm_buy_now.blade.php ENDPATH**/ ?>