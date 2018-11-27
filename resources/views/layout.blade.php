<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    
    <script>
    $('#miModal').on('show.bs.modal', function (event){
       var button = $(event.relatedTarget);
       
       var emp_id = button.data('empid');
       var modal = $(this);
       
       modal.find('.modal-body #emp_id').val(emp_id);
    });
    </script>
    

    <title>Example</title>

    <!-- Bootstrap core CSS -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
<!--    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">-->
    
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/sidebar.css')}}" rel="stylesheet">
    
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{url('/home')}}">MATAGALPATV</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
<!--      <ul class="navbar-nav px-3">-->
<!--        <li class="nav-item text-nowrap px-3 inline" display="inline">-->
<!--          <a class="nav-link" href="#">Registro</a>-->
              @if (Route::has('login'))
        
                    @auth
                        <a class="nav-link text-light" href="{{ url('/home') }}">Salir</a>
                    @else
                           <a class="nav-link"  href="{{ route('login') }}">Inicio</a>
                            <a class="nav-link" href="{{ route('register') }}">Registro</a>
                    @endauth
                
            @endif
<!--        </li>-->
<!--      </ul>-->
    </nav>
    
        <div class="container-fluid">
          <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
              <div class="sidebar-sticky">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link active" href="{{url('/home')}}">
                      <i class="fa fa-home"></i>
                      Inicio <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/empleados')}}">
                      <i class="fa fa-user"></i>
                      Empleados
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <i class="fa fa-tv"></i>
                      Equipos
                    </a>
                  </li>
                  <hR></hR>         

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                  <span>Saved reports</span>
                  <a class="d-flex align-items-center text-muted" href="#">
                    <i class="fa fa-circle"></i>
                  </a>
                </h6>
                <ul class="nav flex-column mb-2">
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <i class="fa fa-file"></i>
                      Current month
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <i class="fa fa-cube"></i>
                      Last quarter
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span data-feather="file-text"></span>
                      Social engagement
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span data-feather="file-text"></span>
                      Year-end sale
                    </a>
                  </li>
                </ul>
              </div>
            </nav>
           
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            @yield('content')
        </main>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
<!--    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<!--    <script src="js/jquery-slim.min.js"></script>-->
<!--
    <script src="--{{asset('js/jquery-slim.min.js')}}" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="{{asset('js/jquery-slim.min.js')}}')</script>
-->
<!--    <script src="../../assets/js/vendor/popper.min.js"></script>-->
    <script src="{{asset('js/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>

<!--
     Icons 
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
-->

    <!-- Graphs -->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>-->
<!--    <script src="js/Chart.min.js" type="text/javascript"></script>-->
<!--
    <script src="{{asset('js/Chart.min.js')}}" type="text/javascript"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
-->
  </body>
</html>