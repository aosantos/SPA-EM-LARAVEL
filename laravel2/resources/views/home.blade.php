<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>SPA</title>
  
  <!-- Bootstrap CSS --> 
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
  <!-- bootstrap theme -->
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
  <link href="{{ asset('css/bootstrap-theme.css') }}" rel="stylesheet" />
  <!--external css-->
  <!-- font icon -->
  <link href="{{asset('css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{asset('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen" />
  
  <link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap.css">
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
 
</head>

<body>
 <!-- Modal para cadastrar o usuário-->
               
              <div class="modal fade" id="cadastrar_" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:green;"><span class="glyphicon glyphicon-lock"></span> Cadastrar Usuários</h4>
        </div>
          
        <div class="modal-body">
           
                <form class="margin-bottom-0" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}  
                                
              <form method="get" action=".">
         <div class="form-group">
              <label for="name"><span class="glyphicon glyphicon-education"></span> Nome</label>
              <input type="text" name="name" value="" class="form-control" id="name" placeholder="Nome" required="">
            </div>
            
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                 <label for="email"><span class="glyphicon glyphicon-education"></span>Email</label>
                    <input id="email" type="email" class="form-control" name="email"  placeholder="Email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

            </div>
                  
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                             <label for="email"><span class="glyphicon glyphicon-education"></span>Senha</label>                       
                                <input id="password" type="password" class="form-control" placeholder="A senha deve conter no minímo 6 caracteres"  name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif                           
                        </div>
                   <div class="form-group">
                            <label for="email"><span class="glyphicon glyphicon-education"></span>ConfirmarSenha</label>                              
                                <input id="password-confirm" type="password" class="form-control" placeholder=" Confirme a  senha ela deve ser igual a anterior"  name="password_confirmation" required>                            
                        </div>
            <div class="form-group">
             <label for="ativo"><span class="glyphicon glyphicon-education"></span>Status</label> 
            <select class="form-control select2" style="width: 100%;"  name='ativo' id='ativo' >                               
                 <option name="ativo"  value="1"> Ativo                                                           
                 </option>  
                 <option name="ativo"  value="0"> Inativo                                                           
                 </option>                      
            </select>
            </div>          
            <button style="color:white;" type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-plus"></span> Cadastrar</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
        </div>
      </div>
    </div>
  </div> 

       
    
    
    
    
    
<!-- Modal para editar o usuário-->
               @foreach($users as $user)    
              <div class="modal fade" id="editar_<?=$user->id?>" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:green"><span class="glyphicon glyphicon-lock"></span> Editar Usuários</h4>
        </div>
          
        <div class="modal-body">
            <form class="margin-bottom-0"  action="{{ action('HomeController@editar',$user->id) }}"  method="get"> 
           <input type="hidden" id="id" name="id" value="{{$user->id}}" >
              <form method="get" action=".">
         <div class="form-group">
              <label for="name"><span class="glyphicon glyphicon-education"></span> Nome</label>
              <input type="text" name="name" value="{{$user->name}}" class="form-control" id="name" placeholder="Nome">
            </div>
            <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-education"></span>Email</label>
              <input type="text" name="email" value="{{$user->email}}" class="form-control" id="email" placeholder="Email">
            </div>            
            <div class="form-group">
             <label for="ativo"><span class="glyphicon glyphicon-education"></span>Status</label> 
            <select class="form-control select2" style="width: 100%;"  name='ativo' id='ativo' >                               
                <option value="0" <?=($user->ativo==0? 'selected' : '')?>>Inativo</option>
                <option value="1" <?=($user->ativo==1? 'selected' : '')?>>Ativo</option>    
            </select>
            </div>          
            <button style="color:white;" type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-plus"></span> Cadastrar</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
        </div>
      </div>
    </div>
  </div> 
 @endforeach
    
    
 
 
                 @foreach($users as $user)   
                 <!-- modal para excluir  -->                
                <div class="modal fade" id="remover_{{$user->id}}" role="dialog">
                                <div class="modal-dialog">
                                     <form action="{{('excluir')}}" role="form" method="POST" class="margin-bottom-0">
                                     <input type='hidden' name='id' value='{{$user->id}}'/>                                      
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                                
                                        <div class="modal-body">
                                            <form method="get" action=".">
                                                <h4 style="color:red;" align="center">Deseja exluir o Usuário ({{$user->name}})  </h4>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Cancel</button>
                                            <a href="{{action('HomeController@excluir',$user->id)}}" class="btn btn-danger " data-click="panel-exclude" data-toggle="modal">Excluir</a>                                          
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                 @endforeach
    
    
    
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="{{ route('home') }}" class="logo">SPA <span class="lite"></span></a>
      <!--logo end-->


      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

        
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <!--<img alt="" src="img/avatar1_small.jpg">-->
                            </span>
                             {{ Auth::user()->name }}
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>              
              <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
              
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="">
            <a class="" href="{{ route('home') }}">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
        
         
          
          <li>


        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h5 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h5>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{ route('home') }}">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>
        
             

        
        <!-- Today status end -->
        <div class="row">

          <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>Usuários</strong></h2>
                <?php   
                if (session('status')) {
                    echo "<div class='alert alert-success'>";
                    echo session('status');
                    echo "</div>";
                }                                
                ?>
                <div class="panel-actions">                                   
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#cadastrar_">
                      <i class="fa fa-plus" style="color:green" title='Cadastrar'></i>
                  </button>
                </div>
              </div>
              <div class="panel-body">
               <table id="example1" class="table bootstrap-datatable countries">
                  <thead>
                    <tr>                     
                      <th>Usuário</th>
                      <th>Email</th>                      
                      <th>Ativo</th>  
                      <th>Ações</th>                        
                    </tr>
                  </thead>
                  <tbody>                   
                      @foreach($users as $user)                                   
                    <tr>                     
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>
                          @if ($user->ativo == 1)
                               Ativo                            
                            @else
                                Inativo
                            @endif                         
                      </td>
                      <td>    
                <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#editar_{{$user->id}}">
                <span class="glyphicon glyphicon-edit"></span> 
                </button>    
                <button type="button" class="btn btn-danger"  data-toggle="modal" title="Excluir Usu&aacuterio" data-target="#remover_{{$user->id}}">
                    <span class="glyphicon glyphicon-trash"></span> 
                </td>
                      
                    </tr> 
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
         
        </div>              
            </section>
            <!--Project Activity end-->          
        <br><br>

                <div class="widget-foot">
                  <!-- Footer goes here -->
                </div>              
        </div>

      </section>
      <div class="text-right">
        <div class="credits">
         
         <!-- <a href="https://bootstrapmade.com/">Free Bootstrap Templates</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>-->
        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    
  <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
   
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
  
</script>
</body>

</html>
