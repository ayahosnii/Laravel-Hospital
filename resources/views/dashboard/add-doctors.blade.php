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
                    ADD NEW DOCTOR
                </h1>
                <ol class="breadcrumb breadcrumb-sm">
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="volume_list.html">VOLUMES</a></li>
                    <li class="active">Add new doctor</li>
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
                                    <label for="doctorName" class="col-md-2 col-sm-2 control-label">Doctor Name</label>
                                    <div class="col-md-10">
                                        <br>
                                        <input name="name" type="text" class="form-control" placeholder="Doctor name">
                                    </div>
                                    <label for="doctorSpecial" class="col-md-2 col-sm-2 control-label">Doctor Specialization</label>
                                    <div class="col-md-10">
                                        <br>
                                        <select name="sp" class="form-control">
                                            @foreach($sps as $sp)
                                            <option>{{$sp->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <label for="SpecializationID" class="col-md-2 col-sm-2 control-label">Specialization ID</label>

                                    <div class="col-md-10">
                                        <br>
                                        <input name="specialization_id" type="text" class="form-control"  placeholder="Specialization ID">
                                    </div>

                                    <label for="bio" class="col-md-2 col-sm-2 control-label">Doctor Bio</label>
                                    <div class="col-md-10">
                                        <br>
                                        <textarea name="bio" type="text" class="form-control"  placeholder="bio"></textarea>
                                    </div>


                                </div>


                                <div class="form-group">
                                    <div class="col-md-offset-2 col-md-10">
                                        <button type="submit" class="btn btn-primary">Add Doctor</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </section>

                    <!-- modal -->
                    <!-- <section class="panel">
                      <div class="panel-body">
                        <a href="#myModal" data-toggle="modal" class="btn btn-xs btn-success">
                          Form in Modal
                        </a>
                        <a href="#myModal-1" data-toggle="modal" class="btn btn-xs btn-warning">
                          Form in Modal 2
                        </a>
                        <a href="#myModal-2" data-toggle="modal" class="btn btn-xs btn-danger">
                          Form in Modal 3
                        </a>

                        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                  <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                  <h4 class="modal-title">Form Tittle</h4>
                              </div>
                              <div class="modal-body">
                                <form role="form">
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <input type="file" id="exampleInputFile3">
                                    <p class="help-block">Example block-level help text here.</p>
                                  </div>
                                  <div class="checkbox">
                                    <label>
                                      <input type="checkbox"> Check me out
                                    </label>
                                  </div>
                                  <button type="submit" class="btn btn-default">Submit</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-1" class="modal fade">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                <h4 class="modal-title">Form Tittle</h4>
                              </div>
                              <div class="modal-body">
                                <form class="form-horizontal" role="form">
                                  <div class="form-group">
                                    <label for="inputEmail1" class="col-md-2 col-sm-2 control-label">Email</label>
                                    <div class="col-md-10">
                                      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputPassword1" class="col-md-2 col-sm-2 control-label">Password</label>
                                    <div class="col-md-10">
                                      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-md-offset-2 col-md-10">
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox"> Remember me
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-md-offset-2 col-md-10">
                                      <button type="submit" class="btn btn-default">Sign in</button>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-2" class="modal fade">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                <h4 class="modal-title">Form Tittle</h4>
                              </div>
                              <div class="modal-body">
                                <form class="form-inline" role="form">
                                  <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                    <input type="email" class="form-control sm-input" id="exampleInputEmail5" placeholder="Enter email">
                                  </div>
                                  <div class="form-group">
                                    <label class="sr-only" for="exampleInputPassword2">Password</label>
                                    <input type="password" class="form-control sm-input" id="exampleInputPassword5" placeholder="Password">
                                  </div>
                                  <div class="checkbox">
                                    <label>
                                      <input type="checkbox"> Remember me
                                    </label>
                                  </div>
                                  <button type="submit" class="btn btn-default">Sign in</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section> -->

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
