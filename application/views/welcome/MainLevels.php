<?php $this->load->view('header.php'); ?>
    
	<style type="text/css">
		body {
			background-image: url(<?php echo ASSETS; ?>/img/mainlevels/bg.png);
			background-color: #57c9ea;
			position: relative;
		}

		/* .all_levels_container { */
		.all_levels_container {
			margin: 2.5% 3% 3% 2.5%;
			opacity: .9;
			background-color: #e2f3ee;
			height: 90%;
		}
		.kkrow {
			height: 18%;
			margin-bottom: 2%;
			margin-top: 0%;
		}	
		.all_levels_container .box_container {
			position: relative;
			display: inline-block;
			width: 22.8%;
			height: 100%;
			border: 0.4em solid #165dbd;
			border-radius: 5%;
			background: white;
		}
		.all_levels_container .box_container center {
			margin-top: 7%;
		}

		.row3{
			margin-left: 8%;
			margin-right: 8%;
		}
		.row4{
			margin-left: 0%;
			margin-right: 0%;
		}
		.row2{
			margin-left: 26%;
		}
		.row3 .box_container  {
			margin: 0 2%;
    		width: 28%;
		}
		.row4 .box_container  {
			margin: 0 1%;
		}
		.row3 .box_container  {
			margin: 0 2%;
		}
		.row2 .box_container  {
			margin: 0 1%;
			width: 30%;
		}
		
		.img_stars {
			position: absolute;
			width: 100%;
			bottom: -17%;
			margin-left: 17%;
		}
		.img_stars img {
			width: 17%;
			margin: 0 3%;
			height: 5%;
		}
		
		.box_container span {
			font-size: 3.2em;
			font-weight: bolder;
			color: #20508e;
		}
		.mover_backward{
			background-image: url(<?php echo ASSETS; ?>/img/mainlevels/mover_backward.png);
			background-size: 100% 100%;
			position: absolute;
			
			bottom: 12%;
			left: 4%;
			width: 7%;
			height: 10%;
		}
		.music {
			position: absolute;
			bottom: 12%;
			right: 4%;
			width: 7%;
			height: 12%;
		}

		/* .each_level_container { */
		.each_level_container {
			position: absolute;
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			margin: 0;
			opacity: .9;
			background-color: #e2f3ee;
		}

		.each_level_container center{
			height: 5%;
    		margin: 5% 0;
		}

		.level_container {
			width: 80%;
			height: 45%;
			margin: 5% 10%;
			border: 0.6em solid #1f57bb;
			border-radius: 12px;
			background: white;
			opacity: 1;
			padding: 2% 2%;
		}
		.level_container .left_div {
			position: relative;
		}
		.level_container .img_stars {
			bottom: -9%;
			margin-left: 17%;
		}
		.level_container .img_stars img {
			width: 15%;
			margin: 0 3%;
			height: 5%;
		}



		
		.left_div {
			width: 40%;
			height: 100%; 
			float: left;
		}
		.left_div .mybox {
			border: .4em solid #1f57bb;
			height: 100%;
			border-radius: 1em;
		}
		.left_div span {
			font-size: 3.5em;
		}

		
		
  
		.mainlevels_title, .level_title { 
			font-size: 4.5em;
			font-weight: bolder;
			color: #1b4d90;
		}
		.mybtn {
			font-size: 35px;
		}
		.right_div {
			margin-left: 5%;
			width : 55%;
			float : left;
			height: 100%;
		}
		.right_div .row {
			margin: 3.5% 0;
			height: 20%;
		}
		.right_div label {
			width: 50%;
			text-align: center;
			display: inline-block;
			border: .1em solid #20508e;
			margin-right: 9%;
			font-size: 2.5em;
			font-weight: bolder;
			color: #20508e;
		}
		.right_div img {
			height: 67%;
			width: 7%;
			margin-right: 5%;
			margin-top: -3%;
		}
		.kkbtn {
			width: 18%;
			margin: 0 auto;
			height: 10%;
			font-size: 4em;
			text-align: right;
			padding-right: 4%;
		}
		
	</style>
</head>
<body>
	<div class="all_levels_container">
		<center><span class="mainlevels_title">Niveles</span></center>
		<div class="kkrow row3">
			<div data-index=1 class="box_container"></div>
			<div data-index=2 class="box_container"></div>
			<div data-index=3 class="box_container"></div>
		</div>
		<div class="kkrow row3">
			<div data-index=4 class="box_container"></div>
			<div data-index=5 class="box_container"></div>
			<div data-index=6 class="box_container"></div>
		</div>
		<div class="kkrow row4">
			<div data-index=7 class="box_container"></div>
			<div data-index=8 class="box_container"></div>
			<div data-index=9 class="box_container"></div>
			<div data-index=10 class="box_container"></div>
		</div>
		<div class="kkrow row2">
			<div data-index=11 class="box_container"></div>
			<div data-index=12 class="box_container"></div>
		</div>
		<div class="mover_backward"></div>
		<div class="music"></div>
	</div>
	<div class="each_level_container" style="display:none;">
		<center><span class="level_title">Nivel </span></center>
		<div class="level_container">
			<div class="left_div"></div>	
			<div class="right_div"></div>	
		</div>
		<div class="kkbtn backbtn">
			<span>Volver</span>
		</div>
</body>
</html>

<script type="text/javascript" src="<?php echo ASSETS; ?>/js/mainlevels.js"></script>
 