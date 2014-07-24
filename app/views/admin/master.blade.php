<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SSAMO Website Manager</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    {{HTML::style("bootstrap/css/bootstrap.min.css") }}
    {{HTML::style("bootstrap/css/bootstrap-theme.min.css") }}
    <!-- font Awesome -->
    {{HTML::style("font-awesome/css/font-awesome.min.css") }}
    <!--Jquery ui-->
    {{ HTML::style("jqueryui/css/cupertino/jquery-ui.css") }}
    <!-- jQuery 2.0.2 -->
    {{HTML::script("js/jquery.js")}}
    {{HTML::script("js/jquery.form.js")}}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    {{HTML::script("js/html5shiv.js")}}
    {{HTML::script("js/respond.min.js")}}
   <![endif]-->

</head>
<body class="skin-blue" style="background-image: url({{ asset('img/body-bg.png')}})">
<!-- header logo: style can be found in header.less -->
<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">SSAMO Media</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('admin/category') }}">Photo Categories</a></li>
                <li><a href="{{ url('admin/picture') }}">Photos Management</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container">
    @yield('contents')
</div>
<!-- Bootstrap -->
{{HTML::script("bootstrap/js/bootstrap.min.js")}}

<!--data tables-->
{{ HTML::script("datatables/jquery.dataTables.js") }}
{{ HTML::script("datatables/dataTables.bootstrap.js") }}

<!--Jquery ui-->
{{ HTML::script("jqueryui/js/jquery-ui-1.10.4.custom.min.js") }}

</body>
</html>
