<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/config/connection.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/config/function.php');
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include($_SERVER['DOCUMENT_ROOT'] . '/css/css.php') ?>

  <style type="text/css">
    html,
    body {
      overflow-x: hidden;
      width: 100%;
      max-width: 100vw;
      /* 防止橫向超出視窗 */
    }
    .carousel-item img {
  height: 500px;
  object-fit: cover;
}


  </style>
</head>
<body style="overflow-x: hidden;">
  <!-- <?php include('header.php'); ?> -->
  <section class="container-fluid p-0">
  <div class="row no-gutters justify-content-center">
    <div class="col-12 col-lg-10 overlay-container">

      <!-- 輪播開始 -->
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/index/01.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>卓越品质历久不衰</h5>
              <p>让经营成为享受</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/index/02.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>專業吊車進場</h5>
              <p>高樓層不擔心</p>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">上一張</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">下一張</span>
        </a>
      </div>
      <!-- 輪播結束 -->

    </div>
  </div>
</section>





  <?php include($_SERVER['DOCUMENT_ROOT'] . '/js/js.php') ?>
  <script type="text/javascript">

  </script>

</body>

</html>
