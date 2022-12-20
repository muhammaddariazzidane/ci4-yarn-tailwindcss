<?php
$validation = \Config\Services::validation();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link rel="stylesheet" href="/css/output.css">

</head>

<body>
  <?= $this->renderSection('register') ?>
  <?= $this->renderSection('login') ?>
</body>

</html>