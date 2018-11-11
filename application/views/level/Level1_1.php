<?php $this->load->view('header.php'); ?>
    
	<style type="text/css">
		/*mainlevels_container*/
		body {
            position: relative;
			background-image: url(<?php echo ASSETS; ?>/img/level/bg1.png);
            /* background-color: #c7e9f5; */
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
            background-image: url(<?php echo ASSETS; ?>/img/level/logo_1.png);
            background-size: 100% 100%;            
        }
        .logo .avatar{
            float: left;
            display: inline-block;
            width: 25%;
            height: 72%;
            background-image: url(<?php echo ASSETS; ?>/img/level/avatar_1.png);
            background-size: 100% 100%;
            margin-top: 5%;
            margin-left: 5%;        
        }
        .logo span {
            display: inline-block;
            float: right;
            margin-right: 26%;
            font-size: 2.5em;
            color: #076cb6;
            margin-top: 7.5%;
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
            height: 14%;
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
            height: 56%;
            background-image: url(<?php echo ASSETS; ?>/img/level/result.png);
            background-size: 100% 100%;   
            
        }
        .check {
            width: 15%;
            height: 46%;
            background-image: url(<?php echo ASSETS; ?>/img/level/result_correct.png);
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
            background-image: url(<?php echo ASSETS; ?>/img/mainlevels/music_on.png);
            background-size: 100% 100%;
            width: 20%;
            height: 51%;
            display: inline-block;
            float: left;
        }
        .kkbtn {
            display: inline-block;
            margin-left: 15%;
            width: 22%;
            height: 44%;
            margin-top: 2%;
            border-radius: 5px;
        }
        .helpbtn {
            background-image: url(<?php echo ASSETS; ?>/img/buttons/help.png);
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
        .board_container{
            height: 100%;
            /* width: 100%; */
        }
        .board {
            height: 100%;
            width: 20%;
            margin: 0 2.5%;
            background-image: url(<?php echo ASSETS; ?>/img/level/panel_bg.png);
            background-size: 100% 100%;
            display: inline-block;
            float: left;
        }
        .card{
            position: absolute;
            height: 100%;
            width: 20%;
            margin: 0 2.5%;
            background-size: 100% 100%;
            /* display: inline-block; */
            left:0; 
            top:0;
            background-color: white;
        }
        .card:nth-child(1) {
            background-image: url(<?php echo ASSETS; ?>/img/level/figure-01.png);
        }
        .card:nth-child(2) {
            background-image: url(<?php echo ASSETS; ?>/img/level/figure-02.png);
        }
        .card:nth-child(3) {
            background-image: url(<?php echo ASSETS; ?>/img/level/figure-03.png);
        }
        .card:nth-child(4) {
            background-image: url(<?php echo ASSETS; ?>/img/level/figure-04.png);
        }

        #helpModal, #failModal, #successModal {
            position: absolute;
            left:0; top: 0;
            height: 80%;
            width: 80%;
            background-size: 100% 100%;
            display: none;
            margin: 5% 10%;
            background-color: white;
            border-radius: 1em;
            border: .5em solid #076cb6;
            /* display: inline-block;
            float: left;  */
        }
        #failModal {
            height: 40%;
            width: 40%;
            margin: 20% 30%;
        }
        #successModal {
            height: 75%;
            width: 30%;
            margin: 5% 35%;
            padding: 1% 2%;
        }
        #helpModal {
            background-image: url(<?php echo ASSETS; ?>/img/tutorials/01Ordenar.png);
        }
        #helpModal .close, #failModal .close {
            bottom: 5%;
            position: absolute;
            right: 4%;
            width: 20%;
            height: 10%;
            font-size: 3em;
        }
        #failModal .close{
            right: 44%;
            width: 16%;
            font-size: 3em;
            height: 19%;
            bottom: 13%;
        }
        
        #failModal center h2{
            font-size: 3.2em;
            color: #0065af;
            margin: 4% auto;
        }
        #successModal center h2 {
            font-size: 4em;
            color: #0065af;
            margin: 12% auto;
            font-weight: bold;
        }
        #successModal .star_rows {
            height: 34%;
            margin-top: -8%;
            margin-bottom: -4%;
        }
        #successModal .star_rows .star:nth-child(1), #successModal .star_rows .star:nth-child(3) {
            margin-top: 15%;
        }
        #successModal .star_rows .star {
            width: 23.3%;
            height: 47%;
            margin: 0 5%;
            background-image: url(<?php echo ASSETS; ?>/img/stars/star_yes.png);
        }
        #successModal center span {
            font-size: 2em;
            color: #0065af;
        }
        #successModal .coin_home {
            height: 13%;
            width: 70%;
            background-image: url(<?php echo ASSETS; ?>/img/level/coin_home.png);
            background-size: 100% 100%;
            margin: 5% 15%;
            background-color: white;
        }
        #successModal .btns {
            height:18%;
        }
        #successModal .next {
            background-image: url(<?php echo ASSETS; ?>/img/level/btn_next.png);
            background-size: 100% 100%;
            width: 12%;
            height: 80%;
            margin: 6% auto;
            display: inline-block;
        }
        #successModal .btns .btn1{
            width: 21%;
            margin: 0px 5%;
            float: none;
        }

        #failModal .star_yes {
            background-image: url(<?php echo ASSETS; ?>/img/stars/star_yes.png);
            background-size: 100% 100%;
            width: 12%;
            height: 19%;
            margin: 6% auto;
        }


	</style>
</head>
<body>
    <header>
        <div class="logo">
            <div class="avatar"></div>
            <span></span>
        </div>
        <div class="refresh"><span></span></div>
        <a href="<?php echo site_url('MainLevels'); ?>">
            <span class="menu"></span>
        </a>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
    </header>
    <section>
        <div class="board_container">
            <div class="board">
            </div>
            <div class="board">
            </div>
            <div class="board">
            </div>
            <div class="board">
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
        <div class="card" data-ind=0></div>
        <div class="card" data-ind=0></div>
        <div class="card" data-ind=0></div>
        <div class="card" data-ind=0></div>
    </div>

    <div id="helpModal" class="modal fade">
        <div class="close kkbtn"><span>Volver</span></div>
	</div>
    <div id="successModal" class="modal fade">
        <center><h2>HAS GANADO</h2></center>
        <div class="star_rows">
            <span class="star"></span>
            <span class="star"></span>
            <span class="star"></span>
        </div>
        <center><span>Monedas obtenidas</span></center>
        <div class="coin_home"></div>
        <div class="btns">
            <a href="<?php echo site_url('MainLevels'); ?>">
                <span class="menu btn1"></span>
            </a>
            <div class="refresh btn1"><span></span></div>
            <a href="<?php echo site_url('Level1_2'); ?>">
                <span class="next btn1"></span>
            </a>

        </div>
	</div>
    <div id="failModal" class="modal fade">
        <center><h2>Has perdido una estrella</h2></center>
        <div class="star_yes"></div>
        <div class="close kkbtn"><span>Ok</span></div>
	</div>

</body>
</html>

<!-- <script type="text/javascript" src="<?php echo ASSETS; ?>/js/level1_1.js"></script> -->
<script type="text/javascript">
    var Level_1_1_Controller = {
        sel_ind: 0,
        isDown : false,
        refresh : function() {
            $('.card').each(function(ind) {
                ww = $('.board').css('width');
                hh = $('.board').css('height');
                // ww = (ww.replace('px', '')*1-4) + 'px';
                // hh = (hh.replace('px', '')*1-4) + 'px';
                $(this).css('width', ww);
                $(this).css('height', hh);
                xx = 100; yy=100;
                bw= $('body').width();
                bh= $('body').height();

                cw = ww.replace('px', '')*1;
                ch = hh.replace('px', '')*1;

                // console.log( 'bw ' + bw);
                // console.log( 'bh ' + bh);
                $(this).css('left', Math.random()*(bw-cw));
                $(this).css('top', Math.random()*(bh-ch));
            });
        },
        init: function() {
            Level_1_1_Controller.refresh();
            $('.logo span').html( localStorage.getItem('coins') );
            Level_1_1_Controller.bindEvents();
            Level_1_1_Controller.loadProgressData();

        },
        // 5. loadProgressData()
        loadProgressData: function() {
            url = API_URL + "progress/find/"+ localStorage.getItem("PlayerID");
            $.get(url, 
                function(res) {
                    res = res.response;
                    console.log(res);
                    Level_1_1_Controller.progresses = res;
                    progresses = res;
                    valStar = 0;
                    for (var i = 0; i < res.length; i++) {
                        valStar += res[i].stars*1;
                    }
                    console.log('progresses: ' + Level_1_1_Controller.progresses);

                    stars_level = [];
                    stars_sublevel = [
                        [0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],
                        [0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],
                        [0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],
                        [0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],
                        [0,0,0,0,0]
                    ];
                    
                    for (var i = 0; i < progresses.length; i++) {
                        level = progresses[i].level;
                        sublevel = progresses[i].sublevel;
                        stars_sublevel[level][sublevel]=progresses[i].stars;
                    }
                    console.log('stars_sublevel: ' + stars_sublevel);

                    for (var i = 1; i <= Level_1_1_Controller.levels_count; i++) {
                        s = 0;
                        for (var j = 1; j <= 3; j++) {
                            s += stars_sublevel[i][j]*1;
                        }
                        if (i==2) {
                            s += stars_sublevel[i][4]*1;
                            stars_level[i] = s/4;
                        } else 
                            stars_level[i] = s/3;
                    }

                    Level_1_1_Controller.stars_level = stars_level;
                    Level_1_1_Controller.stars_sublevel = stars_sublevel;
                    console.log('stars_level: ' + Level_1_1_Controller.stars_level);
                    console.log('stars_sublevel: ' + Level_1_1_Controller.stars_sublevel);

                    for (var i=0;i<Level_1_1_Controller.stars_sublevel[1][1]; i++) {
                        url = 'url(' + ASSETS + '/img/stars/star_yes.png)';                    
                        $('.star').eq(i).css('background-image', url);
                    }
                    
                }, "json" );
        },
        bindEvents: function() {
            $('.refresh').click(function() {
                $('#successModal').modal('hide');
                Level_1_1_Controller.refresh();
            });
            $('.helpbtn').click(function() {
                $('#helpModal').modal('show');
            });
            $('.close').click(function(){
                $(this).closest('.modal').modal('hide');
            });

            $('.check').click(function() {
                var success = true;
                $('.card').each(function(ind) {
                    data_ind = $(this).attr('data-ind');
                    if (data_ind != ind) {
                        success = false;
                        return;
                    }
                });
                if (success) {
                    $('#successModal').modal('show');
                } else {
                    $('#failModal').modal('show');
                }

            });

            sx = 0, sy =0, sel_ind = 0, isDown = false;
            ox = $('body').position().left; oy = $('body').position().top;
            
            isMove = false;
            // isDown = true;
            $('.card').on('mousedown touchdown', function(e) {
                console.log('');
                console.log('start_x : ' + e.offsetX);
                console.log('start_y : ' + e.offsetY);
                console.log('start_x : ' + e.screenX);
                console.log('start_y : ' + e.screenY);
                console.log('start_x : ' + e.clientX);
                console.log('start_y : ' + e.clientY);
                // if (sx==0 && sy==0) {
                    sx = e.offsetX;
                    sy = e.offsetY;
                // }
                sel_ind = $(this).index();
                isDown = true;
            }).on('mousemove touchmove', function(e) {
                index = $(this).index();
                if (isDown && sel_ind == index) {
                    isMove = true;
                }
                else 
                    return;
            }).on('mouseup touchup', function(e) {
                // alert();
                sel_ind = 0;
                isDown = false;
                pos = $(this).position();
                y1 = pos.top; x1 = pos.left;
                y2 = pos.top + $(this).height(); x2 = pos.left + $(this).width();
                for (i=0; i<4; i++) {
                    pos = $('.board').eq(i).position();
                    ww = $('.board').eq(i).width();
                    hh = $('.board').eq(i).height();
                    mx = pos.left + ww/2;
                    my = pos.top + hh/2;
                    
                    if ( x1 < mx && mx < x2 && y1<my && my<y2) {
                        $(this).css('left', pos.left);
                        $(this).css('top', pos.top); 
                        $(this).attr('data-ind', i);
                    }
                }
            });
            $(document).mousemove(function(e) {
                if(isDown && isMove) {
                    $('.card').eq(sel_ind).css('left', e.clientX - ox - sx);
                    $('.card').eq(sel_ind).css('top', e.clientY - oy - sy); 
                }   
            });
        },

    };
    $(document).ready(function(){
        Level_1_1_Controller.init();
    })
</script>