<?= $this->render('//layouts/inc/cart_right')?>

<!-- Product -->
<section class="bg0 p-t-23 p-b-140">
    <div class="container">

        <?= $this->render('//layouts/inc/sidebar')?>

        <div class="row isotope-grid">

        <?= $this->render('//layouts/inc/card_product')?>

        </div>

        <!-- Load more -->
        <div class="flex-c-m flex-w w-full p-t-45">
            <a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Показать больше
            </a>
        </div>
    </div>
</section>


<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
</div>

<?= $this->render('//layouts/inc/product_modal')?>
<!-- Modal1 -->




