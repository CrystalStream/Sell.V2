<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="cache-control" content="private, max-age=0, no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="expires" content="0">
	<title>Login -  Pappos Shop</title>
	{!!Html::style('css/bootstrap.min.css')!!}
	{!!Html::style('css/main.css')!!}
	<link rel="shortcut icon" type="image/ico" href="img/favicon.ico"/>
</head>
<body>
	<nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-nav">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>                
            </div>
            <div class="collapse navbar-collapse" id="menu-nav">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">
                            About                            
                        </a>
                    </li>                 
                </ul>
            </div>
        </div>
    </nav>

    <div class="col-xs-12 text-center mt">
    	@if(Session::has('message'))
    	<div class="alert alert-danger">
    		{{Session::get('message')}}
    	</div>
    	@endif
    	<div class="col-xs-6 col-xs-offset-3">
	    	<img src="img/papos_logo.png" alt="" class="img-responsive">
	    	<div class="login-center mt">
	    		{!!Form::open(array('action'=>'LoginController@login'))!!}
	    			<div class="form-group">
	    				<div class="input-group">
	    					<div class="input-group-addon">
	    						<span class="glyphicon glyphicon-user"></span>
	    					</div>
	    					{!!Form::text('name',null,array('class' => 'form-control','placeholder' =>'Nombre de usuario','required' ))!!}	    					
	    				</div>
	    			</div>
	    			<div class="form-group">
	    				<div class="input-group">
	    					<div class="input-group-addon">
	    						<span class="glyphicon glyphicon-lock"></span>
	    					</div>
	    					{!!Form::password('password',array('class'=>'form-control','placeholder'=>'Contraseña','required'))!!}	    					
	    				</div>
	    			</div>
	    			<div class="form-group">
	    				{!!Form::button('Entrar <span class="glyphicon glyphicon-log-in"></span>',array('class'=>'btn btn-success btn-block', 'type'=>'submit'))!!}

	    			</div>
	    		{!!Form::close()!!}
	    	</div>
    	</div>
    </div>
</body>
</html>