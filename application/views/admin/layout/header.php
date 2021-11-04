<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?php echo isset($titulo) ? 'ClassiPHP - ' . $titulo : 'ClassiPHP' ?></title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url('public/admin/assets/css/app.min.css'); ?>">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('public/admin/assets/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('public/admin/assets/css/components.css'); ?>">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?php echo base_url('public/admin/assets/css/custom.css'); ?>">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />

  <?php if (isset($styles)): ?>
    <?php foreach ($styles as $style): ?>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url($style) ?>">
    <?php endforeach ?>
  <?php endif ?>
</head>

<body>
  <div class="loader"></div>
    <div id="app">