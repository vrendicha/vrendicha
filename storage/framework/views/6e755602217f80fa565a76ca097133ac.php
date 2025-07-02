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
        <h2 class="text-xl font-semibold text-gray-800">Konfirmasi Pesanan</h2>
     <?php $__env->endSlot(); ?>

    <div class="py-6 max-w-3xl mx-auto">
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-bold mb-4">Ringkasan Pesanan</h3>

            
            <ul class="mb-4 text-sm text-gray-700">
                <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="mb-1">
                        <?php echo e($item->product->name); ?> x<?php echo e($item->quantity); ?> —
                        Rp<?php echo e(number_format($item->product->price * $item->quantity, 0, ',', '.')); ?>

                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

            
            <p class="text-xl font-bold text-purple-600 mb-6">
                Total: Rp<?php echo e(number_format($total, 0, ',', '.')); ?>

            </p>

            
            <div class="bg-blue-50 border border-blue-200 rounded-md p-4 mb-6">
                <h4 class="text-md font-semibold text-blue-800 mb-2">💳 Pembayaran via Transfer Bank</h4>
                <p class="text-sm text-gray-700">
                    Bank: <strong>BRI</strong><br>
                    No Rek: <strong>3248 0100 5214 504</strong><br>
                    Atas Nama: <strong>Dina Pratiwi</strong>
                </p>
                <p class="mt-2 text-sm text-gray-500">
                    Setelah transfer, kirimkan bukti pembayaran ke WhatsApp admin.
                </p>
            </div>

            
            <form action="<?php echo e(route('checkout.process')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <label for="payment_method" class="block mb-2 font-semibold text-gray-700">Metode Pembayaran</label>
                <select name="payment_method" id="payment_method" class="w-full border-gray-300 rounded mb-6">
                    <option value="Transfer">Transfer Bank (BRI)</option>
                    <option value="QRIS">QRIS</option>
                </select>

                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded">
                    Bayar Sekarang
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
<?php /**PATH C:\laragon\www\website_ecommerce\resources\views/checkout/confirm.blade.php ENDPATH**/ ?>