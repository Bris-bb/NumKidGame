<?php $this->load->view('header.php'); ?>
    <style type="text/css">
    	
    	.yesbtn, .nobtn {
    		width: 100px;
    	}
    	#loginModal .newbtn {
    		width: 310px;
    	}
    	.mybtn span{

    	}
    	.width100 {
    		width: 100%
    	}
    	.round {
    		border-radius: 5px;
    	}
    	.login_text{
    		font-size: 25px;
    	}
    	
    	body {
	    	background-image: url(<?php echo ASSETS; ?>/img/splash/back.png);
			padding: 5%;
    	}
		.splash_container {
			height: 100%;
			position: relative;
		}

		.splash_logo {
			display: block;
			margin: 0 auto;
			width: 46%;
			height: 100%;
		}

		.startbtn {
			position: absolute;
			width: 18%;
			height: 14%;
			font-size: 4.2em;
			background-size: 100% 100%;
			letter-spacing: 0.2em;
			margin: 0 41%;
			bottom: -5%;
    	}

		.menu_container {
			height: 100%;
		}
		.menu_container .left_div {
			height: 100%;
		}
		.menu_container .right_div {
			height: 100%;
		}
		
		.menu_container .start_logo {
			margin: 3% auto 8% auto;
    		width: 70%;
    		display: block;
    	}
    	.goal {
			background-image: url(http://localhost:8100/num/assets/img/splash/goal.png);
			background-size: 100% 100%;
			width: 40%;
			height: 12%;
			margin: 0px auto;
			color: #1f57bb;
			text-align: right;
			padding-right: 12%;
			font-size: 4.2em;
			padding-top: 1%;
			font-weight: bolder;
			letter-spacing: 0;
    	}
    	.right_div {
    	}
		.right_div p {
			margin: 0 0 3%;
		}
    	.right_div img{
    		width: 60%;
    		display: block;
    		margin: 0 auto;
    	}
    	.right_div .back{
			margin-top: 8%;
    	}

	</style>
	 
</head>
<body>
	<div class="splash_container" style="display: ;">
		<img class="splash_logo" src="<?php echo ASSETS; ?>/img/splash/logo.png" />
		<div class="kkbtn startbtn">
			<span>Entrar</span>
		</div>
	</div>
	<div class="menu_container" style="display: none;">
		<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs left_div">
			<img class="start_logo" src="<?php echo ASSETS; ?>/img/splash/logo.png" />
			<div class="goal">
				<span></span>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  right_div">
			<p>
				<img class="profile" src="<?php echo ASSETS; ?>/img/buttons/profile.png" />
			</p>
			<p>
				<img class="tutorial" src="<?php echo ASSETS; ?>/img/buttons/tutorial.png" />
			</p>
			<p>
				<img class="option" src="<?php echo ASSETS; ?>/img/buttons/option.png" />
			</p>
			<p>
				<a href="<?php echo site_url('MainLevels'); ?>">
					<img class="play" src="<?php echo ASSETS; ?>/img/buttons/play.png" />
				</a>
			</p>
			<p>
				<img class="conquer" src="<?php echo ASSETS; ?>/img/buttons/conquer.png" />
			</p>
			<p>
				<img class="back" src="<?php echo ASSETS; ?>/img/buttons/back.png" />
			</p>
		</div>
	</div>

	<div id="loginModal" class="modal fade">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-body">
	                <center><h4 class="modal-title ">Jugador</h4></center>
	                <br />
	            	<div class="row">
		                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 login_text">
		                	<input type="text" value="top" id="username" name="username" class="round width100" placeholder="usuario">
		                </div>
		                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
		                	<div class="mybtn loginbtn">
		                		<span>Aceptar</span>
		                	</div>
		                </div>
		            </div>
		            <br />
	            	<div class="row">

		                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 login_text">
		                	<input type="password" value="rasmuslerdorf" id="password" name="password" class="round width100" placeholder="contraseña">
		                </div>
		                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
		                	<div class="mybtn close"  data-dismiss="modal">
		                		<span>Cancelar</span>
		                	</div>
		                </div>
		            </div>
		            <br />
		            <div class="row">
		                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		                	<div class="mybtn newbtn">
		                		<span>Nuevo Jugador</span>
		                	</div>
		                </div>
		            </div>
	            </div>
	            
	        </div>
	    </div>
	</div>
	<div id="errorModal" class="modal fade">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-body">
	                <center><h4 class="modal-title ">Jugador</h4></center>
	                <br />
		                <p>
		                	El inicio de sesión no puede.
		                </p>
	            		<p>
		                	Vuelva a comprobar el nombre de usuario y la contraseña una vez.
		                </p>
		            <br />
	            </div>
	            
	        </div>
	    </div>
	</div>
	<div id="logoutModal" class="modal fade">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-body">
	                <center><h4 class="modal-title ">Estás segro?</h4></center>
	                <br />
		            <div class="row">
		            	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
		                	<div class="mybtn yesbtn">
		                		<span>Si</span>
		                	</div>
	                	</div>
		            	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
		                	<div class="mybtn nobtn close" data-dismiss="modal">
		                		<span>No</span>
		                	</div>
	                	</div>
		            </div>    		            		
		            <br />
	            </div>
	            
	        </div>
	    </div>
	</div>

</body>
</html>

<script type="text/javascript" src="<?php echo ASSETS; ?>/js/welcome.js"></script>
 