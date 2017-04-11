<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title>Fees & Status | teamsuite</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Raleway:400,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
  <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="plugins/node-waves/waves.css" rel="stylesheet" />
  <link href="plugins/animate-css/animate.css" rel="stylesheet" />
  <link href="plugins/material-design-preloader/md-preloader.css" rel="stylesheet" />
  <link href="plugins/morrisjs/morris.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
  <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-blue">

    <div class="overlay"></div>

    <nav class="navbar">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
          <a href="javascript:void(0);" class="bars"></a>
          <a class="navbar-brand" href="/"><span>team</span>suite</a>
        </div>
      </div>
    </nav>

    <?php include 'includes/nav.php'; ?>

    <section class="content">
      <div class="container-fluid">

        <!-- FEES & STATUS -->
        <div class="row clearfix">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
              <div class="header bg-blue">
                <h2>FEES &amp; STATUS</h2>
              </div>
              <div class="body">
                <div class="table-responsive">
                  <table class="table table-hover dashboard-task-infos">
                    <thead>
                      <tr>
                        <th>Status</th>
                        <th>Fee</th>
                        <th>Active (Y/N)</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Started</td>
                        <td><span class="label bg-green">&pound;5</span></td>
                        <td><i class="material-icons col-green">done</i></td>
                        <td class="text-right">
                          <div class="btn-group">
                            <a href="#" class="btn bg-orange">EDIT</a>
                            <a href="#" class="btn bg-red">DELETE</a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Used Substitute</td>
                        <td><span class="label bg-green">&pound;3</span></td>
                        <td><i class="material-icons col-green">done</i></td>
                        <td class="text-right">
                          <div class="btn-group">
                            <a href="#" class="btn bg-orange">EDIT</a>
                            <a href="#" class="btn bg-red">DELETE</a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Unused Substitute</td>
                        <td><span class="label bg-green">&pound;0</span></td>
                        <td><i class="material-icons col-green">done</i></td>
                        <td class="text-right">
                          <div class="btn-group">
                            <a href="#" class="btn bg-orange">EDIT</a>
                            <a href="#" class="btn bg-red">DELETE</a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Unavailable</td>
                        <td><span class="label bg-green">&pound;0</span></td>
                        <td><i class="material-icons col-green">done</i></td>
                        <td class="text-right">
                          <div class="btn-group">
                            <a href="#" class="btn bg-orange">EDIT</a>
                            <a href="#" class="btn bg-red">DELETE</a>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

<?php include 'includes/scripts.php'; ?>

</body>

</html>
