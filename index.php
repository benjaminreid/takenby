<?php include('config.php'); ?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Taken by <?= $name ?></title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-XXXXXXX-X']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
  </head>
  <body>

    <div class="header" id="header">

      <div class="wrapper">
        <h1>Taken by <span><?= $name ?></span></h1>
        <a href="#info" class="i-icon" id="info-toggle">Information</a>
      </div>

      <div class="info-box">
        <div class="wrapper">

          <div class="column col-1">
            <h3>About Me</h3>
            <p><?= $about ?></p>
          </div>

          <div class="column col-2">
            <h3>Photo Sets</h3>
            <div id="sets">
              <div class="set-cell last">
                <a class="view-more" href="http://www.flickr.com/photos/<?= $flickr_username ?>/sets">View<br />more</a>
              </div><!-- /.set-cell .last -->
            </div><!-- /#sets -->
          </div>

          <div class="column col-3">
            <h3>You can find me on</h3>
            <ul class="social-list">
              <?php if ($flickr_username) : ?>
              <li><a href="http://www.flickr.com/photos/<?= $flickr_username ?>/">Flickr</a></li>
              <?php endif; ?>
              <?php if ($twitter_username) : ?>
              <li><a href="https://twitter.com/<?= $twitter_username ?>">Twitter</a></li>
              <?php endif; ?>
              <li><a href="http://www.benjaminreid.me/">Blog</a></li>
              <li><a href="http://www.nouveller.com/">Nouveller</a></li>
            </ul>
          </div>

        </div><!-- /.wrapper --> 
      </div><!-- /.info-box -->

    </div><!-- /.header -->

    <div class="wrapper">
      
      <div class="container" id="photo-container">
      </div><!-- /#photo-container -->

      <a href="http://www.flickr.com/photos/<?= $flickr_username ?>/" class="more">View more</a>
    </div><!-- /.wrapper -->

    <div class="footer">
      <div class="wrapper">
        <p>Designed &amp; built by <a href="http://www.nouveller.com/">Nouveller</a></p>
      </div><!-- /.wrapper -->
    </div>

    <script>
      var TAKEN = TAKEN || {};
      TAKEN.apiKey      = "<?= $api_key ?>";
      TAKEN.photoSetId  = "<?= $photo_set_id ?>";
      TAKEN.userId      = "<?= $user_id ?>";
      TAKEN.username    = "<?= $flickr_username ?>";
    </script>
    <script type="takenby-template" id="template-photos">
      <div class="photo">
        <img src="<%= src %>">
        <div class="photo-info">
          <h2><%= title %></h2>
          <p class="date"><%= date %></p>
        </div>
      </div>
    </script>
    <script type="takenby-template" id="template-sets">
      <div class="set-cell">
        <a href="http://www.flickr.com/photos/<%= username %>/sets/<%= setid %>">
          <img src="<%= src %>" width="75" height="75">
        </a>
      </div>
    </script>
    <script src="js/libs.min.js"></script>
    <script src="js/takenby.js"></script>
  </body>
</html>