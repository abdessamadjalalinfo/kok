<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>espace chef</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
    <link href="chart.css" rel="stylesheet" >
    <link href="dash.css" rel="stylesheet">
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/variable-pie.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
              <div><a href="dashboard.html" class="logo"><i class="fa fa-user-circle-o fa-3x" aria-hidden="true"></i></a></div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a>BIENVENUE</a>
          </li>
          <li>
            <a href="#"><i class="fa fa-pie-chart " aria-hidden="true"></i>&nbsp; Dashboard</a>
          </li>
          <li>
          <a href="{{route('gestion-budget')}}"><i class="fa fa-money" aria-hidden="true"></i>&nbsp; Gérer le budget</a>
          </li>
          <li>
            <a href="#"><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp; Rubriques</a>
          </li>
          <li>
            <a href="#"><i class="fa fa-folder" aria-hidden="true"></i>&nbsp; Consulter les emplois du temps</a>
          </li>
          <li>
            <a href="#"><i class="fa fa-list-ul"></i>&nbsp; Liste des affectations</a>
          </li>
          <li>
            <!--a href="#"><i class="fa fa-window-close" aria-hidden="true"></i>&nbsp; Déconnexion</a-->
            <a class="fa fa-window-close" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Déconnexion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
          </li>
        </ul>
        </nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
          </div>
        </nav>
         <!---------------part--------------->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">STATISTIQUES</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">TOTALE BUDGET</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">300,000dhs</div>
                    </div>

                      <i class="fas fa-money-bill-wave fa-2x text-gray-300"></i>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">BUDGET UTILISE</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">30%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-money-bill-wave fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         <!--------------------------->
          <!-- Content Row -->

          <div class="row">

            <!-- pie Chart -->
            <div class="col-xl-7 col-lg-7 ">
              <div class="card shadow mb-4" style="height: 90%;">
                <!-- Card Body -->
                <div class="chart-pie pt-4 pb-2">
                  <figure class="highcharts-figure">
                    <div id="container"></div>
                  </figure>
                </div>
              </div>
            </div>
            <!-- calendreier -->
            <div class="col-xl-5 col-lg-5 ">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">CALENDRIER</h6>
                </div>
                <div class="calendar-wrapper" onload="startTime()">
                  <button id="btnPrev" type="button">Prev</button>
                  <button id="btnNext" type="button">Next</button>
                  <div id="divCal"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

        <!-------------------------------->
    </div>
   </div>
        <!----------------------->
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <!------------------>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
        <!-- js for the Highchart-->
    <script type="text/javascript" src="chart_them.js"></script>
    <script type="text/javascript" src="chart.js"></script>
  </body>
</html>