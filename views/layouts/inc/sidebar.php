<div class="flex-w flex-sb-m p-b-52">
    <div class="flex-w flex-l-m filter-tope-group m-tb-10">
        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
            Все категории
        </button>
<?php

$categories = \app\models\db\Categories::find()->all(); //обращаемся к модели бд "категории" models/db/Categories.php > найти > все > перебераем массивом категории
foreach ($categories as $category){?>
    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".c-<?php echo $category['id']?>">
        <?php echo $category['title']?>
    </button>
<?php }?>

    </div>

    <div class="flex-w flex-c-m m-tb-10">
<!--       <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">-->
<!--            <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>-->
<!--            <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>-->
<!--            Фильтры-->
<!--        </div>-->

        <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
            <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
            <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
            Поиск
        </div>
    </div>

    <!-- Search product -->
    <div class="dis-none panel-search w-full p-t-10 p-b-15">
        <div class="bor8 dis-flex p-l-15">
            <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                <i class="zmdi zmdi-search"></i>
            </button>

            <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Найти">
        </div>
    </div>


</div>