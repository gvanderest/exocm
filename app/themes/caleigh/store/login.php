<?php require_once($this->theme_path . '/inc/header.php') ?>

<h1>Checkout</h1>

<p>In order to continue, you must login or create an account</p>

<h2>Login</h2>
<p>If you have an existing account, please log in:</p>
<?= $login_form->display() ?>

<?php require_once($this->theme_path . '/inc/footer.php') ?>
