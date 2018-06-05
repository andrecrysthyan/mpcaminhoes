<?php

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta name="author" content="Nuvem Desenvolvimento Web"/>
      <meta name="robots" content="index,follow"/>
    <title>
       
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->script(array('jquery.min', 'bootstrap', 'jquery.gallery', 'modernizr.custom.53451')); ?>
    <?= $this->Html->css(array('base.css', 'bootstrap-theme', 'bootstrap', 'bootstrap.css.map', 'bootstrap-theme.css.map', 'fontawesome','fontawesome-all', 'style-fonts','animate', 'style-slider', 'demo' )); ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?php echo $this->Element('header'); ?>
   
    <?= $this->Flash->render() ?>

        <?= $this->fetch('content') ?>

    <?php echo $this->Element('footer'); ?>
</body>
</html>
