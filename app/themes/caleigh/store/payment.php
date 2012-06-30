<?php require_once($this->theme_path . '/inc/header.php') ?>

<h1>Checkout</h1>
<h2>Payment</h2>

<p>Display cart with taxes and shipping here</p>

<h2>Payment Details</h2>
<?= $payment_form->display(); ?>


<?php require_once($this->theme_path . '/inc/footer.php') ?>
