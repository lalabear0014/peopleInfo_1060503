<!DOCTYPE html>
<html>
  <head>
    <title>Human</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--讓controller自動尋找url-->
        <!--bootstrap-->
        <link rel="stylesheet" href="<?= site_url('bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
        <script type="text/javascript" src="<?= site_url('bower_components/jquery/dist/jquery.min.js'); ?>"></script>
        <script type="text/javascript" src="<?= site_url('bower_components/jquery/dist/jquery-migrate.min.js'); ?>"></script>
        <script type="text/javascript" src="<?= site_url('bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
        <!--datetimepicker-->
        <script type="text/javascript" src="<?= site_url('bower_components/moment/min/moment.min.js'); ?>"></script>
        <script type="text/javascript" src="<?= site_url('bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js'); ?>"></script>
        <link rel="stylesheet" href="<?= site_url('bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css'); ?>">      
        <!--dropzone-->
        <script type="text/javascript" src="<?= site_url('bower_components/dropzone/dist/dropzone.js'); ?>"></script>
        <link rel="stylesheet" href="<?= site_url('bower_components/dropzone/dist/dropzone.css'); ?>">      
        
        <link rel="stylesheet" href="<?= site_url('bootstrap/css/mystyle.css'); ?>">
        <title>Document</title>
  </head>

  <body>
    <?php $logined = $this->session->userdata('user'); ?>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="<?= base_url('events/index/'.$logined) ?>">
              <span class="glyphicon glyphicon-home"></span>&nbsp;Home
            </a>
        </div>

        <?php if (!(is_null($logined)) || ($logined != "")) { ?>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <ul class="nav navbar-nav">
            <li><a href="<?= base_url('users/logout'); ?>">登出</a></li>
            <li><a href="<?= base_url('users/changePwd/'.$logined); ?>">修改密碼</a></li>
            <li><a href="<?= base_url('events/add'); ?>">新增人資</a></li>
          </ul>

          <!-- Search -->
          <div class="navbar-form navbar-left">
            <div class="form-group">
              <?php foreach ($users as $user) :?>
                <form action="<?= base_url('events/index/'.$user->user_name); ?>" method="post">     
              <?php endforeach; ?>
                <input class="form-control" type="text" name="keyword" placeholder="search">
                <button type="submit" class="btn btn-danger">
                  <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </button>
              </form>
            </div>
          </div>

          <ul class="nav navbar-nav navbar-right">
            <!-- 確認點入event顯示頁面 -->
            <?php if ($show) { ?>
              <li>
                <a href="<?= base_url('events/pdf/'.$records->event_id); ?>">檔案列印(PDF)</a> 
              </li>
              <?php foreach ($users as $user) :?>
                  <?php if ($user->user_name == $logined) { ?>
                    <?php if ($user->role > 1) { ?>
                      <li><a href="<?= base_url('events/add_msg/'.$records->event_id); ?>">指導</a></li>
                    <?php } else { ?>
                      <li><a href="<?= base_url('events/add_msg/'.$records->$event_id); ?>">處理</a></li>
                    <?php } ?>
                  <?php } ?>
              <?php endforeach; ?>
            <?php } ?>
            <li class="dropdown">
              <!-- data-toggle視窗切換 -->
              <!-- aria-haspopup觸控暫留 -->
              <!-- aria-expanded展開狀態 -->
              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                小朋友
                <!-- caret內均可再點入查詢 -->
                <span class="caret"></span>
              </a>
              <!-- 下拉選單 -->
              <!--<% if current_user %>-->
              <ul class="dropdown-menu">
                <?php foreach ($users as $user) :?>
                  <li><a href="<?= base_url('events/index/'.$user->user_name); ?>"><?= $user->fullname; ?></a></li>
                <?php endforeach; ?>
                
                
              </ul>
            </li><!-- end of dropdown -->
          </ul><!--end of navbar-right -->
        <?php } ?><!--end of login-validate -->
      </div><!-- /.container-fluid -->
    </nav><!--end of navbar-inverse -->

    <!--flashdata-->
    <?php if ($this->session->flashdata('success_msg')) { ?>
      <div class="alert alert-success">
        <?php echo $this->session->flashdata('success_msg'); ?>
      </div>
    <?php } ?>
    <?php if ($this->session->flashdata('error_msg')) { ?>
      <div class="alert alert-danger">
        <?php echo $this->session->flashdata('error_msg'); ?>
      </div>
    <?php }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             ?>