
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= isset($page_title) ? $page_title : 'Admin Panel' ?></title>
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/style/header.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/style/sidebar.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/style/main.css') ?>">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body>

<!-- Top Header (pushed right by 300px) -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary ps-4" style="margin-left: 231px;">
  <span class="navbar-brand">Welcome Admin</span>
  <div class="ms-auto me-4">
    <a href="<?= base_url('admin/logout') ?>" class="btn btn-outline-light btn-sm">Logout</a>
  </div>
</nav>