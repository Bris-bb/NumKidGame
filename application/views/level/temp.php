<?php $this->load->view('header.php'); ?>
    
	<style type="text/css">
		/*mainlevels_container*/
		body {
            position: relative;
			background-image: url(<?php echo ASSETS; ?>/img/level/bg1.png);
            background-color: #c7e9f5;
		}
        /* header */
        header{
            height: 9.5%;
            width: 100%;
            padding-left: 10%;
            padding-right: 10%;
        }
        .logo{
            float: left;
            display: inline-block;
            width: 17%;
            height: 100%;
            background-image: url(<?php echo ASSETS; ?>/img/level/avatar_1.png);
            background-size: 100% 100%;            
        }
        .refresh{
            float: left;
            display: inline-block;
            margin-left: 3.5%;
            width: 6%;
            margin-top: 1%;
            height: 80%;
            background-image: url(<?php echo ASSETS; ?>/img/level/btn_refresh.png);
            background-size: 100% 100%;            
        }
        .star {
            float: right;
            display: inline-block;
            width: 5%;
            height: 70%;
            margin-top: 1%;
            background-image: url(<?php echo ASSETS; ?>/img/stars/star.png);
            background-size: 100% 100%;   
            margin-right: 1%;
        }
        .menu {
            float: right;
            display: inline-block;
            width: 6%;
            height: 80%;
            margin-top: 1%;
            background-image: url(<?php echo ASSETS; ?>/img/level/btn_menu.png);
            background-size: 100% 100%;   
            margin-left: 3%;
        }
        
        /* footer */
        footer {
            position: relative;
            height: 20%;
            width : 100%;
        }
        .mid {
            display: inline-block;
            height: 100%;
            width: 30%;
            margin: 0 0 0 35%;
            float: left;
        }
        .result {
            width: 100%;
            height: 40%;
            background-image: url(<?php echo ASSETS; ?>/img/level/result.png);
            background-size: 100% 100%;   
            
        }
        .check {
            width: 16%;
            height: 35%;
            background-image: url(http://localhost:8100/num/assets/img/level/result_correct.png);
            background-size: 100% 100%;
            margin: 0 auto;
        }
        .right {
            display: inline-block;
            height: 100%;
            width: 20%;
            margin-top: 2%;
            margin-left: 15%;
            float: left;
        }
        .music {
            background-image: url(http://localhost:8100/num/assets/img/mainlevels/music_on.png);
            background-size: 100% 100%;
            width: 20%;
            height: 45%;
            display: inline-block;
            float: left;
        }
        .kkbtn {
            display: inline-block;
            margin-left: 15%;
            width: 28%;
            height: 37%;
            margin-top: 2%;
            border-radius: 5px;
        }
        .helpbtn {
            background-image: url(http://localhost:8100/num/assets/img/buttons/help.png);
        }
        .kkbtn span{
            text-align: right;
            margin-right: 29%;
        }

        /* section */
        section {
            height: 72%;
            width : 100%;
            padding: 10% 8%;
        }
        .panel_container{
            height: 100%;
            /* width: 100%; */
        }
        .panel {
            height: 100%;
            width: 20%;
            margin: 0 2.5%;
            background-image: url(http://localhost:8100/num/assets/img/level/panel_bg.png);
            background-size: 100% 100%;
            display: inline-block;
            float: left;
        }
        .card{
            background-size: 100% 100%;
            /* display: inline-block; */
        }
        .card:nth-child(1) {
            background-image: url(http://localhost:8100/num/assets/img/level/figure-01.png);
        }
        .card:nth-child(2) {
            background-image: url(http://localhost:8100/num/assets/img/level/figure-02.png);
        }
        .card:nth-child(3) {
            background-image: url(http://localhost:8100/num/assets/img/level/figure-03.png);
        }
        .card:nth-child(4) {
            background-image: url(http://localhost:8100/num/assets/img/level/figure-04.png);
        }
	</style>
</head>
<body>
    <header>
        <div class="logo"><span></span></div>
        <div class="refresh"><span></span></div>
        <div class="menu"><span></span></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
    </header>
    <section>
        <div class="panel_container">
            <div class="panel">
            </div>
            <div class="panel">
            </div>
            <div class="panel">
            </div>
            <div class="panel">
            </div>
        </div>
        
    </section>
    <footer>
        <div class="mid"> 
            <div class="result"><span></span></div>
            <div class="check"><span></span></div>
        </div>
        <div class="right"> 
            <div class="music"><span></span></div>
            <div class="kkbtn helpbtn"><span></span></div>
        </div>
    </footer>

    <div>
        <div id="draggable" class="card ui-widget-content"></div>
        <!-- <div class="card"></div>
        <div class="card"></div>
        <div class="card"></div> -->
    </div>
</body>
</html>

<!-- <script type="text/javascript" src="<?php echo ASSETS; ?>/js/level1_1.js"></script> -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />

<script type="text/javascript">
    var Level_1_1_Controller = {
        sel_ind: 0,
        isSel : false,
        init: function() {
            $('.card').each(function(ind) {
                ww = $('.panel').css('width');
                hh = $('.panel').css('height');
                $(this).css('width', ww);
                $(this).css('height', hh);
            });
            $( '#draggable' ).draggable();
            Level_1_1_Controller.bindEvents();
        },
        bindEvents: function() {
            // $('.card').mouseup(function(e) {
            //     console.log(e);
            //     Level_1_1_Controller.sel_ind = $(this).index();
            //     Level_1_1_Controller.isSel = true;
            // });
            // $('.card').mousemove(function(e) {
            //     index = $(this).index();
            //     if (Level_1_1_Controller.isSel && Level_1_1_Controller.sel_ind == index) {
            //         console.log(e);
            //         $(this).css('top', e.offsetX);
            //         $(this).css('left', e.offsetY);
            //     }
            // });
        },

    };
    $(document).ready(function(){
        Level_1_1_Controller.init();
    })
</script>