<?php
require_once('functions.php');
//$debug = false;

if (!isset($_GET['p'])) {
  $_GET['p'] = "index";
}

if ($_GET['p'] == "index") {
  ?>
  <html>
  <head>
    <title>Basic to Language Converter</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/stylen.css" rel="stylesheet">
  </head>
  <body>
  <div id="container" class="container">

    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Basic to Language Converter</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="index.php">Converter</a></li>
                  <li><a href="index.php?p=decode">Decode</a></li>
                  <li><a href="index.php?p=api">API</a></li>
                  <li><a href="https://aurorastation.org/" target="_blank">Aurora</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <?php if (isset($debug)) { ?>
            <div class="inner cover" style="text-align: left">
              <pre><?php print_r($_POST) ?></pre>
            </div>
          <?php } ?>


          <?php if (isset($_POST['textarea'])) { ?>

            <div class="inner cover">
              <h1 class="cover-heading"><?php getLanguageName() ?></h1>

              <p class="small"><?php getLanguageDesc() ?></p>
              <hr/>
              <p class="lead"><?php getLanguageTranslation() ?></p>
              <hr/>

              <!--
              <p class="small">
                <a href="#" class="btn btn-sm btn-default">Learn more</a>
              </p>
              -->

            </div>
          <?php } ?>

          <div class="inner cover">
            <form id="form" class="form-horizontal" action="index.php" method="post">
              <fieldset>

                <!-- Form Name -->
                <p class="lead">Type your basic below!</p>

                <div class="form-group">
                  <label class="col-md-4 control-label" for="select">Language</label>

                  <div class="col-md-4">
                    <select id="select" name="select" class="form-control">
                      <?php buildOptions(); ?>
                    </select>
                  </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textarea"></label>

                  <div class="col-md-4">
                  <textarea class="form-control" id="textarea" name="textarea"
                            rows="10"><?php if (isset($_POST['textarea'])) {
                      echo $_POST['textarea'];
                    } ?></textarea>
                  </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="submit"></label>

                  <div class="col-md-4">
                    <button id="submit" name="submit" class="btn btn-primary">Translate</button>
                  </div>
                </div>

              </fieldset>
            </form>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Created by <a
                  href="http://forums.aurorastation.org/memberlist.php?mode=viewprofile&u=669&sid=004d3e2a1e125c48d1027ad8b2fd027b"
                  target="_blank">Moltenkore.</a></p>

              <p>This site is not affiliated with aurorastation.org</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/jquery-3.1.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <?php if (isset($_POST['textarea'])) { ?>
    <script>
      $(function () {
        $('select').on('change', function () {
          //$('#form').submit();
          $('#submit').click();
        });
      });
    </script>
  <?php } ?>
  </body>
  </html>
<?php } elseif ($_GET['p'] == "api") { ?>
  <html>
  <head>
    <title>Basic to Language Converter -> API</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/stylen.css" rel="stylesheet">
  </head>
  <body>
  <div id="container" class="container">

    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Basic to Language Converter</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li><a href="index.php">Converter</a></li>
                  <li><a href="index.php?p=decode">Decode</a></li>
                  <li class="active"><a href="index.php?p=api">API</a></li>
                  <li><a href="https://aurorastation.org/" target="_blank">Aurora</a></li>
                </ul>
              </nav>
            </div>
          </div>


          <div class="inner cover">
            <?php $baseurl = "http://mk.darkserver.co.uk/lang/api.php" ?>
            <h1 class="cover-heading">API</h1>

            <p class="small">Use either post or get it doesn't matter. All calls return JSON.</p>

            <p class="small">Base URL: <?php echo $baseurl; ?></p>

            <p class="small">Click on a call for an example.</p>

            <div class="table-responsive">
              <table class="table">
                <thead>
                <th>Call</th>
                <th>Parameter</th>
                </thead>
                <tbody>
                <tr>
                  <td><a href="<?php echo $baseurl; ?>?o=keys" target="_blank">..api?o=keys</a></td>
                  <td>o : option</td>
                </tr>
                <tr>
                  <td><a href="<?php echo $baseurl; ?>?o=info&l=siik" target="_blank">..api?o=info&l=siik</a></td>
                  <td>o : option, l : language key eg. 'siik' or 'bug'</td>
                </tr>
                <tr>
                  <td><a href="<?php echo $baseurl; ?>?o=translate&l=siik&t=banana" target="_blank">..api?o=translate&l=siik&t=banana</a>
                  </td>
                  <td>o : option, l : language key eg. 'siik' or 'bug', t : text eg. "Hello how are you?" or "banana"
                  </td>
                </tr>
                <tr>
                  <td><a href="<?php echo $baseurl; ?>?o=decode&t=Thaa" target="_blank">..api?o=decode&t=Thaa</a></td>
                  <td>o : option, t : text</td>
                </tr>
                </tbody>
              </table>
            </div>


            <div class="mastfoot">
              <div class="inner">
                <p>Created by <a
                    href="http://forums.aurorastation.org/memberlist.php?mode=viewprofile&u=669&sid=004d3e2a1e125c48d1027ad8b2fd027b"
                    target="_blank">Moltenkore.</a></p>

                <p>This site is not affiliated with aurorastation.org</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>
<?php } elseif ($_GET['p'] == "decode") { ?>
  <html>
  <head>
    <title>Basic to Language Converter</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/stylen.css" rel="stylesheet">
  </head>
  <body>
  <div id="container" class="container">

    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Basic to Language Converter</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li><a href="index.php">Converter</a></li>
                  <li class="active"><a href="index.php?p=decode">Decode</a></li>
                  <li><a href="index.php?p=api">API</a></li>
                  <li><a href="https://aurorastation.org/" target="_blank">Aurora</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <?php if (isset($_POST['textarea2'])) { ?>
            <div class="inner cover">
              <?php getReverseLanguageTranslation() ?>
            </div>
          <?php } ?>

          <div class="inner cover">
            <form id="form2" class="form-horizontal" action="index.php?p=decode" method="post">
              <fieldset>

                <!-- Form Name -->
                <p class="lead">Paste your language below!</p>

                <!-- Textarea -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textarea2"></label>

                  <div class="col-md-4">
                  <textarea class="form-control" id="textarea2" name="textarea2"
                            rows="10"><?php if (isset($_POST['textarea2'])) {
                      echo $_POST['textarea2'];
                    } ?></textarea>
                  </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="submit"></label>

                  <div class="col-md-4">
                    <button id="submit" name="submit" class="btn btn-primary">Decode</button>
                  </div>
                </div>

              </fieldset>
            </form>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Created by <a
                  href="http://forums.aurorastation.org/memberlist.php?mode=viewprofile&u=669&sid=004d3e2a1e125c48d1027ad8b2fd027b"
                  target="_blank">Moltenkore.</a></p>

              <p>This site is not affiliated with aurorastation.org</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/jquery-3.1.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
  </html>
<?php } ?>
