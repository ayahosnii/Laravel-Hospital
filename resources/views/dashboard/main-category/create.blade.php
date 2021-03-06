<!DOCTYPE html>
<html>
@extends('dashboard.header.head')
@section('content')
<head>
</head>

<body class="skin-black">
<!-- header logo: style can be found in header.less -->
@extends('dashboard.header.header')
@section('header')
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    @extends('dashboard.header.sidebar')
    @section('sidebar')
    @stop

    <aside class="right-side">

        <!-- Main content -->
        <section class="content">
            <section class="content-header">
                <h1>
                    ADD NEW CATEGORIES
                </h1>
                <ol class="breadcrumb breadcrumb-sm">
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="volume_list.html">ADMINS</a></li>
                    <li class="active">ADD NEW CATEGORIES</li>
                </ol>
            </section>

            <div class="row">
                <div class="col-xs-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <i class="fa fa-hdd-o fa-fw" aria-hidden="true"></i> New Doctor
                        </header>
                        <div class="panel-body">
                            <form action="{{route('store.doctor')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="photo" class="col-md-2 col-sm-2 control-label">Choose photo</label>
                                    <div class="col-md-10">
                                        <input name="photo" type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="doctorName" class="col-md-2 col-sm-2 control-label">Category Name</label>
                                    <div class="col-md-4">
                                        <input name="name" type="text" class="form-control" placeholder="Category Name">
                                    </div>
                                    <label for="doctorName" class="col-md-2 col-sm-2 control-label">Language Abbr</label>
                                    <div class="col-md-4">
                                        <input name="name" type="text" class="form-control" placeholder="Language Abbr">
                                    </div>
                                    </div>
                                <div class="form-group">
                                    <label for="active" class="col-md-2 col-sm-2 control-label">Active</label>
                                    <div class="col-md-6">
                                            <input type="checkbox" name="active"
                                                   id="switcheryColor4" value="1"
                                                   class="switchery" data-color="success"
                                                   checked/>
                                        </div>
                                    </div>



        </section>
        <!-- /.content -->

        <div class="footer-main">
            Copyright &copy Hospital, 2022
        </div>
    </aside>
    <!-- /.right-side -->

</div>
<!-- ./wrapper -->


<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="js/jquery.min.js" type="text/javascript"></script>

<!-- jQuery UI 1.10.3 -->
<script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

<script src="js/plugins/Chart.js" type="text/javascript"></script>

<!--flot chart-->
<!--   <script src="js/plugins/flot/jquery.flot.js" type="text/javascript"></script>
  <script src="js/plugins/flot/jquery.flot.time.js" type="text/javascript"></script> -->


<script src="js/plugins/strftime/strftime.js" type="text/javascript"></script>

<!-- datepicker
<script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>-->
<!-- Bootstrap WYSIHTML5
<script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>-->
<!-- iCheck -->
<script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<!-- calendar -->
<script src="js/plugins/fullcalendar/fullcalendar.js" type="text/javascript"></script>

<!-- Director App -->
<script src="js/Director/app.js" type="text/javascript"></script>

<!-- Director dashboard demo (This is only for demo purposes) -->
<script src="js/Director/dashboard.js" type="text/javascript"></script>

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

</body>



@stop
@stop
</body>

</html>
