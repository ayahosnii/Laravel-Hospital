<!DOCTYPE html>
<html>

<head>
    @extends('dashboard.header.head')
    @section('content')
</head>


<body class="skin-black">
@extends('dashboard.header.header')
@section('header')

<div class="wrapper row-offcanvas row-offcanvas-left">
   @extends('dashboard.header.sidebar')
    @section('sidebar')
    @stop
    <aside class="right-side">

        <!-- Main content -->
        <section class="content">

            <!--         <section class="content-header">
                      <h1>WELCOME</h1>
                      <ol class="breadcrumb">
                        <li class="active">HOME</li>
                      </ol>
                    </section> -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body text-center">
                            <div class="col-md-12 welcome-hello">
                                @if(Session::has('success'))
                                    <div class="container">
                                        <div class="alert alert-success" role="alert">
                                            {{Session::get('success')}}
                                        </div>
                                    </div>

                                @endif
                                @if(Session::has('error'))
                                    <div class="container">
                                        <div class="alert alert-danger" role="alert">
                                            {{Session::get('error')}}
                                        </div>
                                    </div>
                                @endif
                                <h1 class="text-center text-bg">Welcome to Hospital Dashboard</h1>
                                <p class="welcome-greet">There is no application in your project. Let's create your first stack.</p>

                                <a href="{{route('add.doctor')}}" class="btn btn-info btn-create btn-lg">Add Doctors</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->

        <div class="footer-main">
            Copyright &copy Orcinus, 2017
        </div>
    </aside>
    <!-- /.right-side -->

</div>
<!-- ./wrapper -->


<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="dashboard/js/jquery.min.js" type="text/javascript"></script>

<!-- jQuery UI 1.10.3 -->
<script src="dashboard/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="dashboard/js/bootstrap.min.js" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="dashboard/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

<script src="dashboard/js/plugins/Chart.js" type="text/javascript"></script>

<!--flot chart-->
<!--   <script src="js/plugins/flot/jquery.flot.js" type="text/javascript"></script>
  <script src="js/plugins/flot/jquery.flot.time.js" type="text/javascript"></script> -->


<script src="dashboard/js/plugins/strftime/strftime.js" type="text/javascript"></script>

<!-- datepicker
<script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>-->
<!-- Bootstrap WYSIHTML5
<script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>-->
<!-- iCheck -->
<script src="dashboard/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<!-- calendar -->
<script src="dashboard/js/plugins/fullcalendar/fullcalendar.js" type="text/javascript"></script>

<!-- Director App -->
<script src="dashboard/js/Director/app.js" type="text/javascript"></script>

<!-- Director dashboard demo (This is only for demo purposes) -->
<script src="dashboard/js/Director/dashboard.js" type="text/javascript"></script>

<!-- Director for demo purposes -->
<script type="text/javascript">
    $('input').on('ifChecked', function (event) {
        // var element = $(this).parent().find('input:checkbox:first');
        // element.parent().parent().parent().addClass('highlight');
        $(this).parents('li').addClass("task-done");
        console.log('ok');
    });
    $('input').on('ifUnchecked', function (event) {
        // var element = $(this).parent().find('input:checkbox:first');
        // element.parent().parent().parent().removeClass('highlight');
        $(this).parents('li').removeClass("task-done");
        console.log('not');
    });
</script>
<script>
    $('#noti-box').slimScroll({
        height: '400px',
        size: '5px',
        BorderRadius: '5px'
    });

    $('input[type="checkbox"].flat-grey, input[type="radio"].flat-grey').iCheck({
        checkboxClass: 'icheckbox_flat-grey',
        radioClass: 'iradio_flat-grey'
    });
</script>
@stop
@stop
</body>

</html>
