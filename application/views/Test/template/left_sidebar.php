<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/public/') ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Yan Irawan</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Daring</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">NAVIGASI UTAMA</li>

        <li class="<?php echo active_link_method('index','home') ?>">
          <a href="<?php echo site_url('home') ?>">
            <i class="fa fa-th"></i> <span>Dasboard</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">Baru</small>
            </span>
          </a>
        </li>        
        <li class="<?php echo active_link_method('index','Tiket_Masuk') ?>">
            <a href="<?php echo site_url('Tiket_Masuk') ?>">
            <i class="fa fa-envelope"></i> <span>Tiket Masuk</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
            </span>
          </a>
        </li>         
        <li class="<?php echo active_link_method('index','Tiket_Selesai') ?>">
            <a href="<?php echo site_url('Tiket_Selesai') ?>">
            <i class="fa fa-envelope"></i> <span>Tiket Selesai</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
            </span>
          </a>
        </li>      
        <li class="<?php echo active_link_method('index','Kategori') ?>">
          <a href="<?php echo site_url('Kategori') ?>">
            <i class="fa fa-clone"></i> <span>Kategori</span>
          </a>
        </li>  
       <li class="<?php echo active_link_method('index','Pengguna') ?>">
          <a href="<?php echo site_url('Pengguna') ?>">
            <i class="fa fa-users"></i> <span>Pengguna</span>
          </a>
        </li>
      <!--  <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Pengguna</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
 <div class="content-wrapper">
  <section class="content-header" style="background-color:#D2D0D1; height: 50px;">
    <?php
    /**
    * Generated Page Title
    *
    * @return stringsas
    **/
    echo $page_title;
    /**
    * Generate Breadcrumbs from library
    *
    * @var string
    **/
    ?>
  </section>
  <section class="content">
    <?php

    ?>