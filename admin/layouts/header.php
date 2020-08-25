<!--
=========================================================
 Material Dashboard - v2.1.1
=========================================================

 Product Page: https://www.creative-tim.com/product/material-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/material-dashboard/blob/master/LICENSE.md)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<?php
  include 'includes/autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Quản Trị Dukka Store
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="layouts/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <link rel="stylesheet" href="layouts/css/style.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="layouts/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="index.php" class="simple-text logo-normal">
          Dukka Store
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item   ">
            <a class="nav-link" href="index.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="?act=user">
              <i class="material-icons">person</i>
              <p>Quản Lí Người Dùng</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="?act=categories">
              <i class="material-icons">content_paste</i>
              <p>Quản Lí Danh Mục</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="?act=products">
              <i class="material-icons">library_books</i>
              <p>Quản Lí Sản Phẩm</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="?act=news">
              <i class="material-icons">library_books</i>
              <p>Quản Lí Bài Viết</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="?act=warehouse">
              <i class="material-icons">bubble_chart</i>
              <p>Quản Lí Đơn Hàng</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="?act=map">
              <i class="material-icons">location_ons</i>
              <p>Quản Lí Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="?act=comment">
              <i class="material-icons">notifications</i>
              <p>Quản Lí Bình Luận</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="?act=slider">
              <i class="material-icons">language</i>
              <p>Quản Lí Slider</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
