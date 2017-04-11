<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title>teamsuite</title>
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
          <a href="javascript:void(0);" class="bars"></a>
          <a class="navbar-brand" href="/"><span>team</span>suite</a>
        </div>
      </div>
    </nav>

    <?php include 'includes/nav.php'; ?>

    <section class="content">
      <div class="container-fluid">
        <div class="block-header">
          <h2>DASHBOARD</h2>
        </div>

        <div class="row clearfix">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="info-box bg-blue hover-expand-effect">
              <div class="icon">
                <i class="material-icons">assessment</i>
              </div>
              <div class="content">
                <div class="text">CLUB BALANCE</div>
                <div class="number">&pound;250</div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="info-box bg-red hover-expand-effect">
              <div class="icon">
                <i class="material-icons">error</i>
              </div>
              <div class="content">
                <div class="text">OUTSTANDING</div>
                <div class="number">&pound;250</div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
            <div class="info-box bg-green hover-expand-effect">
              <div class="icon">
                <i class="material-icons">list</i>
              </div>
              <div class="content">
                <div class="text">NEXT FIXTURE</div>
                <div class="number">THURCROFT TOP CLUB (A)</div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
            <div class="info-box bg-orange hover-expand-effect">
              <div class="icon">
                <i class="material-icons">list</i>
              </div>
              <div class="content">
                <div class="text">LAST FIXTURE</div>
                <div class="number">2-2 MONKWOOD FC (H)</div>
              </div>
            </div>
          </div>
        </div>

        <!-- OUTSTANDING FEES -->
        <div class="row clearfix">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
              <div class="header bg-red">
                <h2>OUTSTANDING FEES</h2>
              </div>
              <div class="body">
                <div class="table-responsive">
                  <table class="table table-hover dashboard-task-infos">
                    <thead>
                      <tr>
                        <th>Player Name</th>
                        <th>Game</th>
                        <th>Status</th>
                        <th>Amount</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Jack Williams</td>
                        <td>Herringthorpe FC (A)</td>
                        <td>Started</td>
                        <td><span class="label bg-red">&pound;5</span></td>
                        <td class="text-right">
                          <a href="#" class="btn bg-blue">View Profile</a>
                        </td>
                      </tr>
                      <tr>
                        <td>Danny Williams</td>
                        <td>Monkwood FC (H)</td>
                        <td>Started</td>
                        <td><span class="label bg-red">&pound;5</span></td>
                        <td class="text-right">
                          <a href="#" class="btn bg-blue">View Profile</a>
                        </td>
                      </tr>
                      <tr>
                        <td>Karl Nuttall</td>
                        <td>Workhouse Gym (A)</td>
                        <td>Used Substitute</td>
                        <td><span class="label bg-red">&pound;3</span></td>
                        <td class="text-right">
                          <a href="#" class="btn bg-blue">View Profile</a>
                        </td>
                      </tr>
                      <tr>
                        <td>Thomas Nuttall</td>
                        <td>Anston Leeds Arms (A)</td>
                        <td>Started</td>
                        <td><span class="label bg-red">&pound;5</span></td>
                        <td class="text-right">
                          <a href="#" class="btn bg-blue">View Profile</a>
                        </td>
                      </tr>
                      <tr>
                        <td>Daniel Nuttall</td>
                        <td>KCM Fighting Cocks (A)</td>
                        <td>Started</td>
                        <td><span class="label bg-red">&pound;5</span></td>
                        <td class="text-right">
                          <a href="#" class="btn bg-blue">View Profile</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- FIXTURES -->
        <div class="row clearfix">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
              <div class="header bg-blue">
                <h2>FIXTURES &amp; RESULTS</h2>
              </div>
              <div class="body">
                <div class="table-responsive">
                  <table class="table table-hover dashboard-task-infos">
                    <thead>
                      <tr>
                        <th>Player Name</th>
                        <th>Game</th>
                        <th>Status</th>
                        <th>Amount</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Jack Williams</td>
                        <td>Herringthorpe FC (A)</td>
                        <td>Started</td>
                        <td><span class="label bg-red">&pound;5</span></td>
                        <td class="text-right">
                          <a href="#" class="btn bg-blue">View Profile</a>
                        </td>
                      </tr>
                      <tr>
                        <td>Danny Williams</td>
                        <td>Monkwood FC (H)</td>
                        <td>Started</td>
                        <td><span class="label bg-red">&pound;5</span></td>
                        <td class="text-right">
                          <a href="#" class="btn bg-blue">View Profile</a>
                        </td>
                      </tr>
                      <tr>
                        <td>Karl Nuttall</td>
                        <td>Workhouse Gym (A)</td>
                        <td>Used Substitute</td>
                        <td><span class="label bg-red">&pound;3</span></td>
                        <td class="text-right">
                          <a href="#" class="btn bg-blue">View Profile</a>
                        </td>
                      </tr>
                      <tr>
                        <td>Thomas Nuttall</td>
                        <td>Anston Leeds Arms (A)</td>
                        <td>Started</td>
                        <td><span class="label bg-red">&pound;5</span></td>
                        <td class="text-right">
                          <a href="#" class="btn bg-blue">View Profile</a>
                        </td>
                      </tr>
                      <tr>
                        <td>Daniel Nuttall</td>
                        <td>KCM Fighting Cocks (A)</td>
                        <td>Started</td>
                        <td><span class="label bg-red">&pound;5</span></td>
                        <td class="text-right">
                          <a href="#" class="btn bg-blue">View Profile</a>
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
