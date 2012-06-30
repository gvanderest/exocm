<?php require_once($this->theme_path . '/inc/header.php') ?>

<h1><?= $this->data['product']->name ?></h1>

<p><?= $this->data['product']->description ?></p>

<?= $form->display(); ?>

<?php require_once($this->theme_path . '/inc/footer.php') ?>
