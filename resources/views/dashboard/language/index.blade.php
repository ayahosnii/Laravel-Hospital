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
                    ADD NEW LANGUAGE
                </h1>
                <ol class="breadcrumb breadcrumb-sm">
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="volume_list.html">ADMINS</a></li>
                    <li class="active">ADD NEW LANGUAGE</li>
                </ol>
            </section>
            <div class="form-group">
                    <a href="{{url('admin/languages/create')}}" class="btn btn-warning mr-1">
                        <i class="la la-check-square-o"></i> Create
                    </a>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <i class="fa fa-hdd-o fa-fw" aria-hidden="true"></i> New Language
                        </header>
                        <div class="panel-body">
                            @include('auth.admin.alerts.success')
                            @include('auth.admin.alerts.errors')
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <table
                                        class="table display nowrap table-striped table-bordered ">
                                        <thead>
                                        <tr>
                                            <th> Name</th>
                                            <th>Abbreviation</th>
                                            <th>Direction</th>
                                            <th>Active</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @isset($languages)
                                            @foreach($languages as $language)
                                                <tr>
                                                    <td> {{$language -> name}}</td>
                                                    <td> {{$language -> abbr}}</td>
                                                    <td>{{$language -> getDirection()}}</td>
                                                    <td>{{$language -> getActive()}}</td>
                                                    <td>
                                                        <div class="btn-group" role="group"
                                                             aria-label="Basic example">
                                                            <a href="{{route('admin.languages.edit', $language-> id)}}"
                                                               class="btn btn-warning btn-min-width box-shadow-3 mr-1 mb-1">Edit</a>

                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a href="{{route('admin.languages.delete', $language-> id)}}"
                                                                   class="btn btn-danger btn-min-width box-shadow-3 mr-1 mb-1">Delete</a>

                                                            </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endisset




                                        </tbody>
                                    </table>

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
