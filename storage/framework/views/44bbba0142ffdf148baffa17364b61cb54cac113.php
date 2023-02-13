<?php $__env->startSection('content'); ?>
<section class="product"> 
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="headings"><?php echo e($product->name); ?></h1>
            <div class="col-md-6">
                <img class="product-img" src="\public\asssets\img\<?php echo e($product->photo); ?>">
            </div>
            <div class="col-md-6">
                <p class="textcontent">Характеристики</p>
                <ul>
                    <li><p class="textcontent">Страна-производитель:<?php echo e($product->country); ?></p></li>
                    <li><p class="textcontent">Год выпуска:<?php echo e($product->year); ?></p></li>
                    <li><p class="textcontent">Модель:<?php echo e($product->model); ?></p></li>
                </ul>
                <?php if(auth()->guard()->check()): ?>
                        <a href="#">В корзину!</a>
                <?php endif; ?>
            </div>
            <div class="other">
                <ul>
                    <li><p class="textcontent">Склад:<?php echo e($product->count); ?></p></li>
                    <li><p class="textcontent">Добавлен:<?php echo e($product->created_at); ?></p></li>
                    <li><p class="textcontent">Обновлен:<?php echo e($product->updated_at); ?></p></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.headfoot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/jdzaexvz/ydyharf-m1/resources/views/product.blade.php ENDPATH**/ ?>