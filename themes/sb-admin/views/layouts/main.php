<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard - SB Admin</title>

  <!-- Bootstrap core CSS -->
  <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->

  <!-- Add custom CSS here -->
  <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/font-awesome/css/font-awesome.min.css">
  <!-- Page Specific CSS -->
  <!-- <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css"> -->
</head>

<body>

  <div id="wrapper">

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">SB Admin</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
          <!-- <li class="active"><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li><a href="charts.html"><i class="fa fa-bar-chart-o"></i> Charts</a></li>
          <li><a href="tables.html"><i class="fa fa-table"></i> Tables</a></li>
          <li><a href="forms.html"><i class="fa fa-edit"></i> Forms</a></li>
          <li><a href="typography.html"><i class="fa fa-font"></i> Typography</a></li>
          <li><a href="bootstrap-elements.html"><i class="fa fa-desktop"></i> Bootstrap Elements</a></li>
          <li><a href="bootstrap-grid.html"><i class="fa fa-wrench"></i> Bootstrap Grid</a></li> -->
          <li><a href="<?php echo Yii::app()->createUrl('/manager/pages/admin') ?>"><i class="fa fa-wrench"></i>Pages</a></li>
          <!-- <li><a href="<?php echo Yii::app()->createUrl('/manager/schedule/admin') ?>"><i class="fa fa-wrench"></i>Schedule</a></li> -->
          <li><a href="<?php echo Yii::app()->createUrl('/manager/gallery/admin') ?>"><i class="fa fa-wrench"></i>Gallery</a></li>
          <li><a href="<?php echo Yii::app()->createUrl('/manager/slider/admin') ?>"><i class="fa fa-wrench"></i>Slider</a></li>
          <li><a href="<?php echo Yii::app()->createUrl('/manager/cart/admin') ?>"><i class="fa fa-user"></i>Cart History</a></li>
          <li><a href="<?php echo Yii::app()->createUrl('/manager/product/admin') ?>"><i class="fa fa-user"></i>Products</a></li>
          <li><a href="<?php echo Yii::app()->createUrl('/user/profile'); ?>"><i class="fa fa-user"></i> My Profile</a></li>
          <li><a href="<?php echo Yii::app()->createUrl('/user/user') ?>"><i class="fa fa-user"></i> Users</a></li>
          
          <!-- <li><a href="<?php echo Yii::app()->createUrl('/manager/setting/admin') ?>"><i class="fa fa-user"></i> Settings</a></li> -->
          <!-- <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Dropdown Item</a></li>
              <li><a href="#">Another Item</a></li>
              <li><a href="#">Third Item</a></li>
              <li><a href="#">Last Item</a></li>
            </ul>
          </li> -->



          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Settings <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <?php
              $settings = Setting::model()->findAll();
              foreach($settings as $set):
              ?>
              <li>
                <a href="<?php echo $this->createUrl('/manager/setting/view',array('id'=>$set->id)); ?>"><?php echo CHtml::encode($set->name); ?></a>
              </li>
              <?php
              endforeach;
              ?>
              <!-- <li><a href="#">Time</a></li> -->
            </ul>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right navbar-user">
          

          <li class="dropdown user-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-desktop"></i> Cart Mode is <?php $cartMode = SettingDetail::model()->getCartMode(); echo ucwords(CHtml::encode($cartMode->value)); ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo Yii::app()->createUrl('manager/setting/setCartMode',array('to'=>'normal')) ?>">Normal <?php if($cartMode->value=='normal')echo '<i class="fa fa-check"></i>'; ?></a></li>
              <li><a href="<?php echo Yii::app()->createUrl('manager/setting/setCartMode',array('to'=>'trunk')) ?>">Trunk <?php if($cartMode->value!='normal')echo '<i class="fa fa-check"></i>'; ?></a></li>
              <!-- <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
              <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
              <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li> -->
              <!-- <li class="divider"></li>
              <li><a href="<?php echo Yii::app()->createUrl('user/logout'); ?>"><i class="fa fa-power-off"></i> Log Out</a></li> -->
            </ul>
          </li>

          <li class="dropdown messages-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">7</span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li class="dropdown-header">7 New Messages</li>
              <li class="message-preview">
                <a href="#">
                  <span class="avatar"><img src="http://placehold.it/50x50"></span>
                  <span class="name"><?php echo CHtml::encode(Yii::app()->user->getName()); ?></span>
                  <span class="message">Hey there, I wanted to ask you something...</span>
                  <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                </a>
              </li>
              <li class="divider"></li>
              <li class="message-preview">
                <a href="#">
                  <span class="avatar"><img src="http://placehold.it/50x50"></span>
                  <span class="name">John Smith:</span>
                  <span class="message">Hey there, I wanted to ask you something...</span>
                  <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                </a>
              </li>
              <li class="divider"></li>
              <li class="message-preview">
                <a href="#">
                  <span class="avatar"><img src="http://placehold.it/50x50"></span>
                  <span class="name">John Smith:</span>
                  <span class="message">Hey there, I wanted to ask you something...</span>
                  <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                </a>
              </li>
              <li class="divider"></li>
              <li><a href="#">View Inbox <span class="badge">7</span></a></li>
            </ul>
          </li>
          <li class="dropdown alerts-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Alerts <span class="badge">3</span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Default <span class="label label-default">Default</span></a></li>
              <li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
              <li><a href="#">Success <span class="label label-success">Success</span></a></li>
              <li><a href="#">Info <span class="label label-info">Info</span></a></li>
              <li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
              <li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
              <li class="divider"></li>
              <li><a href="#">View All</a></li>
            </ul>
          </li>
          <li class="dropdown user-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo CHtml::encode(ucwords(Yii::app()->user->getName())); ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo Yii::app()->createUrl('/user/profile'); ?>"><i class="fa fa-user"></i> Profile</a></li>
              <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
              <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
              <li class="divider"></li>
              <li><a href="<?php echo Yii::app()->createUrl('user/logout'); ?>"><i class="fa fa-power-off"></i> Log Out</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

      <div class="row">
        <div class="col-lg-12">
          <h1>
            <?php echo $this->pageTitle; ?>
            <?php if(isset($this->pageSubTitle)): ?>
              <small><?php echo $this->pageSubTitle; ?></small>
            <?php endif; ?>
          </h1>
          <ol class="breadcrumb">
            <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
          </ol>
          <!-- <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Welcome to SB Admin by <a class="alert-link" href="http://startbootstrap.com">Start Bootstrap</a>! Feel free to use this template for your admin needs! We are using a few different plugins to handle the dynamic tables and charts, so make sure you check out the necessary documentation links provided.
          </div>-->
        </div> 
      </div><!-- /.row -->

      <!-- CONTENT HERE -->
      <div class="row"><?php echo $content; ?></div>
      <!-- END CONTENT -->

    </div><!-- /#page-wrapper -->

  </div><!-- /#wrapper -->

  <!-- JavaScript -->
  <!--<script src="js/jquery-1.10.2.js"></script>-->
  <!--<script src="js/bootstrap.js"></script>-->

  <!-- Page Specific Plugins -->
  <!--<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>-->
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/morris/chart-data-morris.js"></script>
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/tablesorter/jquery.tablesorter.js"></script>
  <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/tablesorter/tables.js"></script>

</body>
</html>
