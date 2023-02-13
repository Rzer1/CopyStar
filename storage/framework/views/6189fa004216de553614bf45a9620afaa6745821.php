<?php $__env->startSection('content'); ?>
<section class="catalog">
<div class="container">
    <!--Верстка фильтра-->
    <h1 class="headings">Фильтр</h1>
    <div class="row">
            <form action="public/catalog">
                <div class="col-lg-6">
                    <p class="textcontent">Сортировать по:</p>
                    <select name="filter" id="filter">
                        <option value="name">Наименованию</option>
                        <option value="country">Стране-производителе</option>
                        <option value="year">Году выпуска</option>
                        <option value="model">Модели</option>
                        <option value="created_at">Новизне</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <p class="textcontent">Сортировать по:</p>
                    <select name="category" id="category">
                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $elem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($elem->id); ?>"><?php echo e($elem->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <button type="submit">Применить</button>
            </form>
        </div>
    </div>
    <!--Верстка каталога-->
    <div class="container">
        <h2 class="headings">Каталог</h2>
        <div class="row justify-content-center">
            <ul>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $elem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <div class="catalog-product-cart"> 

                        <a href="/public/product/<?php echo e($elem->id); ?>">
                            <p class="catalog-product-cart-name textcontent"><?php echo e($elem->name); ?></p>
                            <img class="catalog-product-cart-img" src="asssets\img\<?php echo e($elem->photo); ?>">
                            <p class="catalog-product-cart-price textcontent"><?php echo e($elem->price); ?> руб</p>
                        </a>
                        <?php if(auth()->guard()->check()): ?>
                        <a href="/public/product/<?php echo e($elem->id); ?>">В корзину!</a>
                        <?php endif; ?>
                    </div>
                <li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.headfoot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/jdzaexvz/ydyharf-m1/resources/views/catalog.blade.php ENDPATH**/ ?>