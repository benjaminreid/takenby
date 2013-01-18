<?php include('config.php'); ?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Taken by <?= $name ?></title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
  </head>
  <body>
    <header>
      <div class="wrapper">
        <h1>Taken by <span><?= $name ?></span></h1>
        <a href="#info" class="sp sp-i-icon i-icon" id="info-toggle">Information</a>
      </div><!-- /.wrapper -->
      <div class="info-box">
        <div class="wrapper">
          <div class="column col-1">
            <h3>About Me</h3>
            <p><?= $about ?></p>
          </div><!-- /.column -->
          <div class="column col-2">
            <h3>Photo Sets</h3>
            <div id="sets">
              <div class="set-cell last">
                <a class="view-more" href="http://www.flickr.com/photos/<?= $flickr_username ?>/sets">View<br />more</a>
              </div><!-- /.set-cell .last -->
            </div><!-- /#sets -->
          </div><!-- /.column -->
          <div class="column col-3">
            <h3>You can find me on</h3>
            <ul class="social-list">
              <?php if ($flickr_username) : ?>
              <li><a href="www.flickr.com/photos/<?= $flickr_username ?>/">Flickr</a></li>
              <?php endif; ?>
              <?php if ($twitter_username) : ?>
              <li><a href="https://twitter.com/<?= $twitter_username ?>">Twitter</a></li>
              <?php endif; ?>
              <li><a href="http://www.benjaminreid.me/">Blog</a></li>
              <li><a href="http://www.nouveller.com/">Nouveller</a></li>
            </ul>
          </div><!-- /.column -->
        </div><!-- /.wrapper --> 
      </div><!-- /.info-box -->
    </header>
    <div class="wrapper">
      
      <div class="container" id="photo-container">
      </div><!-- /#photo-container -->

      <a href="http://www.flickr.com/photos/<?= $flickr_username ?>/" class="sp sp-more">View more</a>
    </div><!-- /.wrapper -->
    <footer>
      <div class="wrapper">
        <p>Designed &amp; built by <a href="http://www.nouveller.com/">Nouveller</a></p>
      </div><!-- /.wrapper -->
    </footer>
  </body>
  
  <script src="js/libs.min.js"></script>
  <script src="js/min/taken-min.js" type="text/javascript"></script>
</html>