<?php define('ASSETS', base_url('assets')); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Numeric Kid's Game</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
	<meta name="apple-mobile-web-app-capable" content="yes" />

    <link rel="shortcut icon" href="<?php echo ASSETS; ?>/img/favicon.png">
    <!-- <script src="<?php echo ASSETS; ?>/js/jquery-3.3.1.min.js"></script> -->
    <script src="<?php echo ASSETS; ?>/js/jquery-1.12.4.js"></script>
    <script src="<?php echo ASSETS; ?>/js/fabric.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo ASSETS; ?>/css/bootstrap.css" />
    <script src="<?php echo ASSETS; ?>/js/bootstrap.min.js"></script>
    
    <style type="text/css">
		html {
			margin: 0 auto;
			min-height: 100%;
		}
    	body{
    		font-family: Arial;
    		font-size: 25px;
			min-height: 100%;
			height: 100%;
			min-width: 100%;
			width: 100%;
			margin: 0 auto;
			background-size: 100% 100%;
			background-repeat: no-repeat;
			background-color: #612d40;
    	}
		body, a, label {
			cursor:url('<?php echo ASSETS; ?>/img/mouse.png'), auto !important;
		}
		.music {
			background-image: url(<?php echo ASSETS; ?>/img/mainlevels/music_on.png);
			background-size: 100% 100%;
		}
		.kkbtn {
            background-image: url(http://localhost:8100/num/assets/img/buttons/button.png);
            background-size: 100% 100%;
            color: white;
            text-align: right;
            border-radius: 5px;
        }
        .mybtn {
    		background-image: url('<?php echo ASSETS; ?>/img/buttons/button.png');
    		background-size: 100% 100%;
    		color: white;
    		text-align: right;
    		padding-right: 25px;
    		font-size: 35px;
    		margin: 0 auto;
    	}
    	.modal-dialog {
    		margin-top: 50px;
    		border: 3px solid #1f57bb;
    		border-radius: 10px;
    	}
    	@media (min-width: 500px) {
		  .modal-dialog {
    		margin-top: 150px;
		    width: 500px;
		  }
		}
    	.modal .modal-title {
    		font-size: 35px;
    	}
    	.modal .modal-title {
    		font-size: 40px;
    		font-weight: bolder;
    		color: #1f57bb;
    	}

    	@media(min-width: 100px) {
    		/*mobile*/
	    	.back_container {
	    		display: table;
	    		width: 100%;
	    		margin: 0 auto;
	    		background-size: 100% 100%;
	    	}
    	}
    	 
    	@media(min-width: 1400px) {
    		/*pc*/
	    	.back_container {
	    		width: 1400px;
	    		/* height: 720px; */
	    		margin-top: 50px;
	    	}
    	}
		 

    </style>
    <script type="text/javascript">
        var API_URL = "http://localhost:8100/CI30/";
        var ASSETS = '<?php echo ASSETS; ?>';
		var BASE = '<?php echo base_url(); ?>';
		var SITE = '<?php echo site_url(); ?>';

		var RATIO = 2925/5573; // 3201/5694; //9/16; //578/1028; //
		$(document).ready(function(){
			var $window = $(window);
			var $pane = $('#pane1');

			function checkHeight() {
				var hh = $window.height();				
				var ww = $window.width();				
				if (hh/RATIO > ww) {
					//portrait
					$('html').css('width', ww);
					$('html').css('height', ww*RATIO);
					$('html').css('min-height', ww*RATIO);
					// $('body').css('width', ww);
					// $('body').css('min-height', ww*RATIO);
					// $('body').css('background-repeat', 'repeat');
				} else {
					//landscape
					$('html').css('width', hh/RATIO);
					$('html').css('height', hh);
					$('html').css('min-height', hh);
					// $('body').css('width', hh/RATIO);
					// $('body').css('height', hh);
					// $('body').css('min-height', hh);
					// $('body').css('background-repeat', 'no-repeat');
				}
				font_size_percentage =  $('html').width()*100/1200 + '%';
				$('body').css('font-size', font_size_percentage);
			}
			// Execute on load
			checkHeight();
			// Bind event listener
			$(window).resize(checkHeight);

			localStorage.setItem('music', 0);
			// 11. music
            $('.music').click(function(){
				music = localStorage.getItem('music');
                localStorage.setItem('music', (music*1+1)%2);
                if (music == 0) {
                    url = 'url(' + ASSETS + '/img/mainlevels/music_off.png)';                    
                    $(this).css('background-image', url);
                } else {
                    url = 'url(' + ASSETS + '/img/mainlevels/music_on.png)';                    
                    $(this).css('background-image', url);
                } 
            })
		})
    </script>
	