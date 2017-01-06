<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" href="/web/img/pas.png">
    
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../web/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../web/dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php $this->beginBody() ?>

<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="<?= Yii::$app->homeUrl ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>PAS</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>SIM</b>PAS</span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <!-- Notifications: style can be found in dropdown.less -->
              <?php 
              Yii::$app->user->isGuest ? (
                  ['label' => 'Login', 'url' => ['/site/login']]
              ) : (
                  '<li>'
                  . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                  . Html::submitButton(
                      'Logout (' . Yii::$app->user->identity->username . ')',
                      ['class' => 'btn btn-link']
                  )
                  . Html::endForm()
                  . '</li>'
              )
              ?>
              <li class="dropdown notifications-menu">
                <?php if(Yii::$app->user->isGuest) {
                  echo "<a href='index.php?r=site/login'>Login</a>";
                } else {
                  echo Html::a('Logout ('.Yii::$app->user->identity->username.')', ['site/logout'], [
                      'data' => [
                          'method' => 'post',
                      ],
                  ]);
                }
                ?>
                
              </li>
            </ul>
          </div>
        </nav>
    </header>
    
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <!-- search form -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="img/pas.png">
            </div>
            <div class="pull-left info">
              <p>SIMPAS</p>
              <h6>Sistem Monitoring PAS</h6>
            </div>
          </div>
          
          <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form> -->
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MONITORING</li>
            <li class="treeview">
              <a href="index.php?r=site">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class="treeview">
              <a href="index.php?r=donatur">
                <i class="fa fa-gratipay "></i> <span>Donatur</span>
              </a>
            </li>
            <li class="treeview">
              <a href="index.php?r=grantee">
                <i class="fa fa-child "></i> <span>Grantee</span>
              </a>
            </li>
            <li class="treeview">
              <a href="index.php?r=prestasi">
                <i class="fa fa-trophy "></i> <span>Prestasi</span>
              </a>
            </li>
            <li class="treeview">
              <a href="index.php?r=laporan-akademik">
                <i class="fa fa-file-text-o "></i> <span>Laporan Grantees</span>
              </a>
            </li>
          </ul>
          <ul class="sidebar-menu">
            <li class="header">KEUANGAN</li>
            <li class="treeview">
              <a href="index.php?r=pemasukan">
                <i class="fa fa-plus-square "></i> <span>Pemasukan</span>
              </a>
            </li>
            <li class="treeview">
              <a href="index.php?r=pengeluaran">
                <i class="fa fa-minus-square "></i> <span>Pengeluaran</span>
              </a>
            </li>
          </ul>
          <ul class="sidebar-menu">
            <li class="header">DATA MASTER</li>
            <li class="treeview">
              <a href="index.php?r=mata-pelajaran">
                <i class="fa fa-list-alt "></i> <span>Mata Pelajaran</span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper">
        <?= Breadcrumbs::widget([
            'itemTemplate' => "<li><i>{link}</i></li>\n",
             'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
         ]) ?>
        <?= $content ?>
    </div>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.1.0
        </div>
        <strong>Copyright &copy; 2016 <a href="http://thinkerstudio.info" target="_blank">Thinker Studio</a>.</strong> All rights reserved.
    </footer>
</div>




<?php $this->endBody() ?>
<!-- jQuery 2.1.4 -->
   
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
</body>
</html>
<?php $this->endPage() ?>
