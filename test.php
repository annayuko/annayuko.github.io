<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Eliana</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" >
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome.min.css">
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/simple-line-icons.css">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
    <!-- Menu CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/menu_sideslide.css">
    <!-- Slider CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/slide-style.css">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css" >
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  </head>
  <body>
    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
            </button>
            <img src="assets/img/logo8.png" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="onepage-nev navbar-nav mr-auto w-100 justify-content-end clearfix">
              <li class="nav-item active">
                <a class="nav-link" href="#hero-area">
                 <img src="assets/img/housing.png" alt=""></a>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">
               <img src="assets/img/stairs.png" alt=""></a>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">
                <span style="font-family:font-size-28px-DFKai-sb;"></span><h2></h2>介紹</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">
                    <span style="font-family:font-size-28px-DFKai-sb;"></span><h2></h2>經歷</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#resume">
                    <span style="font-family:font-size-28px-DFKai-sb;"></span><h2></h2>技能</span> 
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portfolios">
                  <span style="font-family:font-size-28px-DFKai-sb;"></span><h2></h2>作品</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- Mobile Menu Start -->
        <ul class="onepage-nev mobile-menu">
          <li>
            <a href="#home">Home <img src="assets/img/housing.png" alt=""></a>
          </li>
          <li>
            <a href="#about">about  <img src="assets/img/stairs.png" alt=""></a>
          </li>
          <li>
            <a href="#services">services</a>
          </li>
          <li>
            <a href="#resume">resume</a>
          </li>
          <li>
            <a href="#portfolio">Work</a>
          </li>
          <li>
            <a href="#contact">Contact</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->
      </nav>
      <!-- Navbar End -->
      <!-- Hero Area Start -->
        <div class="overlay"></div>
         <div id="hero-area" class="hero-area-bg">                                                       
        <div class="container">
             <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
              <div class="contents">    
<body>
    <script>
        function snow() {
            //  雪花模板
            var flake = document.createElement('div');
            // 雪花字符 ❉❄❅❆✻✼❇❈❊✥✺
            flake.innerHTML = '❉';
            flake.style.cssText = 'position:absolute;color:#fff;';
            //頁面高度，雪花下落結束時Y軸的位置
            var documentHieght = window.innerHeight;
            //頁面的寬度，利用數來算出，雪花開始時left的值
            var documentWidth = window.innerWidth;
            //雪花的毫秒數
            var millisec = 560;
            //設置定時器，週期性定時器，每隔一段時間（millisec）生成一片雪花；
            setInterval(function() { //頁面加載之後，定時器就開始工作
                //落下 開始 時left的值，相當於開始時X軸的位置
                var startLeft = Math.random() * documentWidth;
                //落下 結束 時left的值，相當於結束時X軸的位置
                var endLeft = Math.random() * documentWidth;
                var flakeSize = 5 + 50* Math.random();
                //雪花落下持續時間
                var durationTime = 10000+ 10000* Math.random();
               //開始時的透明度
                var startOpacity = 0.7 + 0.3 * Math.random();
                //結束 時的透明度
                var endOpacity = 0.2 + 0.2 * Math.random();
                var cloneFlake = flake.cloneNode(true);
                cloneFlake.style.cssText += `
                        left: ${startLeft}px;
                        opacity: ${startOpacity};
                        font-size:${flakeSize}px;
                        top:-25px;
                            transition:${durationTime}ms;
                    `;
                document.body.appendChild(cloneFlake);
                //第二個定時器，一次性定時器
                //修改雪花的樣式，讓雪花動起來；
                setTimeout(function() {
                    //第二次修改
                    cloneFlake.style.cssText += `
                                left: ${endLeft}px;
                                top:${documentHieght}px;
                                opacity:${endOpacity};
                            `;
                    //第三個定時器，當雪花落下後，刪除雪花。
                    setTimeout(function() {
                        cloneFlake.remove();
                    }, durationTime);
                }, 0);

            }, millisec);
        }
        snow();
        </script>
</body>
</html>
</html>
	<script src="snap.svg-min.js"></script>
  <script src="script.js"></script>  
          <section>
	<svg id="roadMap" width="400px" height="400px" viewBox="0 0 500 500">
				<g id="map">
					<g id="bg">
						<rect fill="#00BFFF" width="500" height="500" />
					</g>
					<g id="land">
						<path fill="#0000CD" d="M0,0 v225 C49,210,97.5,212,97.5,212 l56,-78.5 l8.5,-65.5 l45.5,-33.5 L217,0 H0 z"/>
						<path fill="#0000CD" d="M217,39 l-43.5,35.5 l-8,60 l-75,105 l9.5,13 l-29,23 l17,17 l17,-17 l14.5,14.5 l-23,21.5 l1,4
						l26.5,-22.5 l3.5,-48 l15.5,-17 l16.5,13 l-16.5,18.5 l3,3 l17,-19.5 l24,22.5 l-15,16.5 l2,3.5 l16.5,-16 l24.5,25.5 
						l-41,38.5 l-34.5,-11.5 l-9,6.5 l17,13 l-3.5,4.5 l2.5,6 l-43.5,29 l-30.5,-19.5 l-9.5,9 l19.5,21.5 L23,431 l65.5,55.5 
						l84,-85 l-2.5,-11 l88,-59.5 c69.5,52,188,61,242,62 V0 H227.5 L217,39 z" />
					</g>
					<g id="road">
						<polygon fill="#A9A9A9" points="291,178 189.5,129.5 192,124.5 293.5,172.5 291,178" />
						<polygon fill="#A9A9A9" points="202,192.5 196.5,190 223,142 228,145 202,192.5" />
						<polygon fill="#A9A9A9" points="282,215.5 204,183 206.5,177.5 284.5,209.5 282,215.5" />
						<polygon fill="#A9A9A9" points="389.5,159.5 296.5,140 297.5,134 390.5,153.5 389.5,159.5" />
						<polygon fill="#A9A9A9" points="500,292.5 343,204 340,209.5 500,299.5" />
						<path fill="#A9A9A9" d="M500,366 c-88,2,-153.5,-20.5,-194,-40.5
						c-47,-23.5,-71.5,-49,-71.5,-49.5 c-54,-53.5,-79.5,-73,-80.5,-74
						c-25.5,-20,-63,-26,-111.5,-18.5 C26,186.5,11,190,0,193.5 v12.5
						c33-10.5,105-27,146,5.5 c0.5,0,26,20,79.5,73 c2,2,26.5,27.5,74.5,51.5
						c40,20,103.5,42.5,188,42.5 c4,0,8,-0,12,-0 V366 z" />
						<path fill="#A9A9A9" d="M473,0 l-85.5,155 c-30,55,-107,77.5,-107.5,77.5 l1.5,6
						c1,-0,20,-6,44,-18.5 c22,-12,51,-32,67.5,-62 L479.5,0 H473 z" />
						<path fill="#A9A9A9" d="M329.5,0 c-32,87-41,158.5-41.5,159
						c-13,106,-44,130.5,-44,130.5 l-0.5,0.5 c-1,1,-111.5,98,-125.5,109 l7.5,9.5
						c14,-11.5,119.5,-104,126,-109.5 c3.5,-3,35.5,-30.5,48.5,-138.5 c0,-1,9.5,-73.5,42,-160.5 H329.5 z" />
						<polygon fill="#A9A9A9" points="157,65.5 304.5,102.5 305.5,96.5 160,60 94.5,0 86,0" />
					</g>
					<path id="route" fill="none" stroke="#F0FFFF" d="M122,404 l125,-108.5 c0,0,40,-34,50,-159 l58,12.5 L355,120" />
				</g>
			</svg>
    </section>

		<?php if(isset($_POST["account"])){

			if(
				$_POST["account"] == "" 
				&& $_POST["password"] ==""
			){
				echo "歡迎登入, test ！";
			}else{
				echo "帳號或密碼輸入錯誤";
     
      ?>
        </form>
        <?php } ?>
          </div>
        </div>
              </div>
      <!-- Hero Area End -->
    </header>
    <!-- Header Area wrapper End -->
    <!-- About Section Start -->
    <div id="hero-area" class="hero-area-bg">
    <section id="about" class="section-padding">       
           <div class="container">
           <div class="bg">
        <div class="fire"></div>   
    </div>
</script>      
      <Style>
  body {
    background: #000;
  }
  .fire
   {
    background: url('https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1528711658929&di=b1915568e41809ec716dd5fb197059bf&imgtype=0&src=http%3A%2F%2Fimg07.tooopen.com%2Fimages%2F20171215%2Ftooopen_sy_230419854445.jpg') no-repeat;
    background-size: contain;
    width: 100px;
    height: 100px;
    box-sizing: border-box;
    background-clip: content-box;
    border-radius: 100%;
  }

  .fire {
    animation: firing 1.5s ease infinte;
    -webkit-animation: firing 1.5s ease infinite;
  }

  @keyframes firing {
    0%{ padding: 50px; transform: scale(0.5) translateY(0); opacity:1;}
    75% { padding:0; transform: scale(1) translateY(0);}
    100%{ opacity:0; transform:scale(1) translateY(100px);}
  }

  @-webkit-keyframes firing {
    0%{ padding: 50px; -webkit-transform: scale(0.5) translateY(0); opacity:1;}
    75%{ padding:0;-webkit-transform: scale(1) translateY(0);}
    100%{ opacity:0;-webkit-transform:scale(1) translateY(100px);}
  }  
</Style>
<link rel="stylesheet" type="text/css" href="css-1/normalize.css" />
<link rel="stylesheet" type="text/css" href="css-1/demo.css" />
<link rel="stylesheet" type="text/css" href="css-1/component.css" />
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
            </head>
            <body>
              
                <section class="demo-1">
                  <div class="grid">
                    <div class="box">
                      <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                        <line class="top" x1="0" y1="0" x2="900" y2="0"/>
                        <line class="left" x1="0" y1="460" x2="0" y2="-920"/>
                        <line class="bottom" x1="300" y1="460" x2="-600" y2="460"/>
                        <line class="right" x1="300" y1="0" x2="300" y2="1380"/>
                      </svg>  
                                         
                      <img class="img-fluid" src="assets/img/about/2吋個人照.PNG" alt="">  
                      <span>2020</span>
                      <span>headshot </span>
                    </div>
                    <div class="box">
                      <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"></svg>
                        <line class="top" x1="0" y1="0" x2="900" y2="0"/>
                        <line class="left" x1="0" y1="460" x2="0" y2="-920"/>
                        <line class="bottom" x1="300" y1="460" x2="-600" y2="460"/>
                        <line class="right" x1="300" y1="0" x2="300" y2="1380"/>
                      <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                        <line class="top" x1="0" y1="0" x2="900" y2="0"/>
                        <line class="left" x1="0" y1="460" x2="0" y2="-920"/>
                        <line class="bottom" x1="300" y1="460" x2="-600" y2="460"/>
                        <line class="right" x1="300" y1="0" x2="300" y2="1380"/>
                      </svg>
                      <img class="img-fluid" src="assets/img/about/日常照.JPG" alt="">  
                      <span>2020</span>
                      <span>Travel photo</span>
                    </div>
                  </div>
                </section>                   
	</head>
	<body> 
 </div>
</script>   
<style>
.text{
        font-size: 64px;
        font-weight: bold;
        text-transform: uppercase;
        fill: none;
        stroke-width: 2px;
        stroke-dasharray: 90 310;
        animation: stroke 6s infinite linear;
}
.text-1{
        stroke: #3498db;
        text-shadow: 0 0 5px #3498db;
        animation-delay: -1.5s;
}
.text-2{
        stroke: #f39c12;
        text-shadow: 0 0 5px #f39c12;
        animation-delay: -3s;
}
.text-3{
        stroke: #e74c3c;
        text-shadow: 0 0 5px #e74c3c;
        animation-delay: -4.5s;
}
.text-4{
        stroke: #9b59b6;
        text-shadow: 0 0 5px #9b59b6;
        animation-delay: -6s;
}
  
@keyframes stroke {
        100% {
                stroke-dashoffset: -400;
        }
}
.svgText{
        width:600px;
        margin:0 auto;
}
.svgText h3{
        font-size:18px;
        color:#333;
        line-height:2;
}
.svgText p{
        font-size:16px;
        color:#888;
        line-height:2;
}
.svgText p a,.svgText p a:hover{
        color:#01a6fc;
        font-weight:600;
}
.svgText ul li{
        font-size:16px;
        color:#888;
        line-height:2;
}</style>
          </div> 
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="profile-wrapper wow fadeInRight" data-wow-delay="0.3s">
            <link rel="stylesheet" href="" type="text/css" />
	</head>
	<body>
		<div id="svgBox">
    <svg width="100%" height="100">
                <text text-anchor="middle" x="50%" y="50%" class="text text-1">Introduction</text>
                <text text-anchor="middle" x="50%" y="50%" class="text text-2">Introduction</text>
                <text text-anchor="middle" x="50%" y="50%" class="text text-3">Introduction</text>
                <text text-anchor="middle" x="50%" y="50%" class="text text-4">Introduction</text>
        </svg>
	</body>
</script>   
          <style>
.text{
        font-size: 64px;
        font-weight: bold;
        text-transform: uppercase;
        fill: none;
        stroke-width: 2px;
        stroke-dasharray: 90 310;
        animation: stroke 6s infinite linear;
}
.text-1{
        stroke: #3498db;
        text-shadow: 0 0 5px #3498db;
        animation-delay: -1.5s;
}
.text-2{
        stroke: #f39c12;
        text-shadow: 0 0 5px #f39c12;
        animation-delay: -3s;
}
.text-3{
        stroke: #e74c3c;
        text-shadow: 0 0 5px #e74c3c;
        animation-delay: -4.5s;
}
.text-4{
        stroke: #9b59b6;
        text-shadow: 0 0 5px #9b59b6;
        animation-delay: -6s;
}
  
@keyframes stroke {
        100% {
                stroke-dashoffset: -400;
        }
}
.svgText{
        width:500px;
        margin:0 auto;
}
.svgText h3{
        font-size:18px;
        color:#333;
        line-height:2;
}
.svgText p{
        font-size:16px;
        color:#888;
        line-height:2;
}
.svgText p a,.svgText p a:hover{
        color:#01a6fc;
        font-weight:600;
}
.svgText ul li{
        font-size:16px;
        color:#888;
        line-height:2;
}</style>
    <div class="bg">
        <div class="fire"></div>
              <Style>
  body {
    background: #000;
  }
  .fire
   {
    background: url('https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1528711658929&di=b1915568e41809ec716dd5fb197059bf&imgtype=0&src=http%3A%2F%2Fimg07.tooopen.com%2Fimages%2F20171215%2Ftooopen_sy_230419854445.jpg') no-repeat;
    background-size: contain;
    width: 100px;
    height: 100px;
    box-sizing: border-box;
    background-clip: content-box;
    border-radius: 100%;
  }

  .fire {
    animation: firing 1.5s ease infinte;
    -webkit-animation: firing 1.5s ease infinite;
  }


  @keyframes firing {
    0%{ padding: 50px; transform: scale(0.5) translateY(0); opacity:1;}
    75% { padding:0; transform: scale(1) translateY(0);}
    100%{ opacity:0; transform:scale(1) translateY(100px);}
  }

  @-webkit-keyframes firing {
    0%{ padding: 50px; -webkit-transform: scale(0.5) translateY(0); opacity:1;}
    75%{ padding:0;-webkit-transform: scale(1) translateY(0);}
    100%{ opacity:0;-webkit-transform:scale(1) translateY(100px);}
  }
  </Style>     
</Style>
<div class="about-profile">
  <ul class="admin-profile">               
      <div class="shot-item">               
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<body>
<div class="business-card middle">
<div class="front">
<span>林筱涵</span>
<span>1989/11/29</span>
<span>30 years old</span>
<span>中國文學系</span>
<ul class="contact-info">
<li>
<i class="fas fa-mobile-alt"></i> 0966520011
</li>
<li>
<i class="far fa-envelope"></i> G-mail:second9211@gmail.com
</li>
<li>
<i class="fas fa-map-marker-alt"></i> 桃園市平鎮區平東路282巷32弄1號
</li>
</ul>
</div>
<div class="back">
<span>Hi 翻閱</span>
</div>
</div>

<script>
$(".business-card").click(function(){
$(".business-card").toggleClass("business-card-active");
});
</script>
<style>
*{  
margin: 0;  
padding: 0;  
font-family: "montserrat",sans-serif;  
box-sizing: border-box;  
list-style: none;  
}  

body{  
background: url(bg.jpg) no-repeat;  
background-size: cover;  
user-select: none;  
}  

.business-card{  
width: 500px;  
height: 280px;  
}  

.middle{  
position: absolute;  
top: 50%;  
left: 50%;  
transform: translate(-50%,-50%);  
}  

.front,.back{  
width: 100%;  
height: 100%;  
overflow: hidden;  
position: absolute;  
backface-visibility: hidden;  
transition: transform 0.5s linear;  
}  

.front{  
background: rgba(255,255,255,.7);  
padding: 40px;  
transform: perspective(600px) rotateX(180deg);  
}  

.front::before,.front::after{  
content: "";  
position: absolute;  
right: 0;  
}  

.front::before{  
background: #FF69B4;  
width: 80px;  
height: 120px;  
bottom: 0;  
clip-path:polygon(0 100%,40% 0,100% 100%);  
}  

.front::after{  
background: #9400D3;  
width: 100px;  
height: 100%;  
top: 0;  
clip-path:polygon(0 0,100% 0,100% 100%,80% 100%);  
}  

.front h2{  
text-transform: uppercase;  
}  

.front span{  
background: #34495e;  
color: #fff;  
padding: 4px 10px;  
display: inline-block;  
margin-bottom: 20px;  
font-size: 14px;  
}  

.front .contact-info li{  
margin: 10px 0;  
display: flex;  
align-items: center;  
}  

.front .contact-info li i{  
width: 26px;  
height: 26px;  
background: #34495e;  
color: #1E90FF;  
display: flex;  
justify-content: center;  
align-items: center;  
margin-right: 6px;  
}  

.back{  
background: rgba(0,0,0,.7);  
display: flex;  
align-items: center;  
justify-content: center;  
color: #B22222;  
text-transform: uppercase;  
letter-spacing: 8px;  
font-size: 24px;  
transform: perspective(600px) rotateX(0deg);  
}  

.business-card-active .front{  
transform: perspective(600px) rotateX(0deg);  
}  
.business-card-active .back{  
transform: perspective(600px) rotateX(-180deg);  
}
</style>
</body>
</html>
        </div>
      </div>
      <style type="text/css">
        .loader{
            width: 56px;
            height: 50px;
            margin: 50px auto;
            position: relative;
            perspective: 100px;
            perspective-origin: 50% 100%;
            transform-style: preserve-3d;
            transform: translateZ(-1px);
        }
        .loader .loader-inner{
            width: 50%;
            height: 100%;
            background: #fff;
            border: 3px solid #fc440f;
            position: absolute;
            right: 0;
            transform-origin: 0% 100%;
        }
        .loader .loader-inner:first-child{
            left: 0;
        }
        .loader .loader-inner hr{
            margin: 3px 3px 6px;
            border: 1px solid rgba(252,68,15, 0.9);
        }
        .loader .loader-inner.box{
            -webkit-animation: loading-1 3.6s infinite ease-in-out;
            animation: loading-1 3.6s infinite ease-in-out;
        }
        .loader .loader-inner.box-1{
            animation-delay: .2s;
        }
        .loader .loader-inner.box-2{
            animation-delay: .4s;
        }
        .loader .loader-inner.box-3{
            animation-delay: 0.6s;
        }
        .loader .loader-inner.box-4{
            animation-delay: 0.8s;
        }
        .loader .loader-inner.box-5{
            animation-delay: 1.8s;
        }
        .loader .loader-inner.box-6{
            animation-delay: 2.2s;
        }
        @-webkit-keyframes loading-1{
            25%,100%{
                transform: translateX(3px) rotateY(-180deg);
            }
        }
        @keyframes loading-1{
            25%,100%{
                transform: translateX(3px) rotateY(-180deg);
            }
        }
      </style>
    </head>
    <body>
      <div class="htmleaf-container">
        <header class="htmleaf-header">
          <div class="htmleaf-demo center">
          </div>
        </header>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="loader">
                                <div class="loader-inner"><hr><hr><hr><hr><hr></div>
                                <div class="loader-inner box box-1"><hr><hr><hr><hr><hr></div>
                                <div class="loader-inner box box-2"><hr><hr><hr><hr><hr></div>
                                <div class="loader-inner box box-3"><hr><hr><hr><hr><hr></div>
                                <div class="loader-inner box box-4"><hr><hr><hr><hr><hr></div>
                                <div class="loader-inner box box-5"><hr><hr><hr><hr><hr></div>
                                <div class="loader-inner box box-6"><hr><hr><hr><hr><hr></div>
                                <div class="loader-inner"><hr><hr><hr><hr><hr></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    
    </body>
    </html>
    </section>
    <!-- About Section End -->
    <!-- Services Section Start -->         
    <div id="hero-area" class="hero-area-bg">
   <div id="services" class="section-padding">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="education wow fadeInRight" data-wow-delay="0.3s">
              
            <style>
        @-webkit-keyframes star-opacity {
            0% {
                opacity: 0
            }
            40% {
                opacity: 1
            }
            60% {
                opacity: 1
            }
            100% {
                opacity: 0
            }
        }
        @keyframes star-opacity {
            0% {
                opacity: 0
            }
            40% {
                opacity: 1
            }
            60% {
                opacity: 1
            }
            100% {
                opacity: 0
            }
        }
        @-webkit-keyframes star-pos {
            0% {
                transform: scale(0) rotate(0) translate3d(0, 0, 0);
                -webkit-transform: scale(0) rotate(0) translate3d(0, 0, 0);
                -moz-transform: scale(0) rotate(0) translate3d(0, 0, 0)
            }
            100% {
                transform: scale(1) rotate(0) translate3d(-450px, 450px, 0);
                -webkit-transform: scale(1) rotate(0) translate3d(-450px, 450px, 0);
                -moz-transform: scale(1) rotate(0) translate3d(-450px, 450px, 0)
            }
        }
        @keyframes star-pos {
            0% {
                transform: scale(0) rotate(0) translate3d(0, 0, 0);
                -webkit-transform: scale(0) rotate(0) translate3d(0, 0, 0);
                -moz-transform: scale(0) rotate(0) translate3d(0, 0, 0)
            }
            100% {
                transform: scale(1) rotate(0) translate3d(-450px, 450px, 0);
                -webkit-transform: scale(1) rotate(0) translate3d(-450px, 450px, 0);
                -moz-transform: scale(1) rotate(0) translate3d(-450px, 450px, 0)
            }
        }
        body {
            padding: 0;
            margin: 0;
        }
    
        .index-bg .stars {
            height: 0
        }
        .index-bg .star {
            display: block;
            width: 8px;
            height: 8px;
            border-radius: 100%;
            background: #fff;
            top: 100px;
            left: 400px;
            position: relative;
            -webkit-transform-origin: 100% 0;
            transform-origin: 100% 0;
            -webkit-animation: star-opacity 5s infinite ease-in, star-pos 5s infinite ease-in;
            animation: star-opacity 5s infinite ease-in, star-pos 5s infinite ease-in;
            -webkit-box-shadow: 0 0 5px 5px rgba(255, 255, 255, .3);
            box-shadow: 0 0 5px 5px rgba(255, 255, 255, .3);
            opacity: 0;
            z-index: 2
        }
        .index-bg .star:after {
            content: '';
            display: block;
            top: 0;
            left: 4px;
            border: 0 solid #fff;
            border-width: 0 90px 2px;
            border-color: transparent transparent transparent rgba(255, 255, 255, .3);
            -webkit-transform: rotate(-45deg) translate3d(1px, 3px, 0);
            transform: rotate(-45deg) translate3d(1px, 3px, 0);
            -webkit-box-shadow: 0 0 1px 0 rgba(255, 255, 255, .1);
            box-shadow: 0 0 1px 0 rgba(255, 255, 255, .1);
            -webkit-transform-origin: 0% 100%;
            transform-origin: 0% 100%
        }
    </style>
</head>
<body>
    <div class="index-bg">
        <div class="stars">
            <div class="star"></div>
            <div class="star" style="top: 80px; left: 800px; animation-delay: 3s;"></div>
            <div class="star" style="top: 40px; left: 646px; animation-delay: 2s;"></div>
            <div class="star" style="top: 120px; left: 395px; animation-delay: 4s;"></div>
            <div class="star" style="top: 160px; left: 765px; animation-delay: 1s;"></div>
            <div class="star" style="top: 170px; left: 1200px; animation-delay: 2s;"></div>
            <div class="star" style="top: 200px; left: 1000px; animation-delay: 1s;"></div>
        </div>
    </div>
</body>
</html>
              <ul class="timeline">
                <li>
                  <i class="icon-briefcase"></i>
                  <h2 class="timelin-title"> <h2 class="animated bounce" style="animation-duration: 4s;animation-iteration-count:5"><span style="font-size:45px">工作經歷與學習</span></span></h2></h2>
                </li>
                <li>
                  <div class="content-text">                   
                    <h3 class="line-title"><span style="color:#808080"><span style="font-size:22px">實習老師</span></h3>
                    <span style="color:#808080"><span style="font-size:18px">2013 - 2016(3年1個月)</span>
                   <span style="color:#808080"><span style="font-size:20px">實習老師(大學打工)教導小朋友作業。</span></span>
                  </div>
                </li>
                <li>
                  <div class="content-text">
                    <h3 class="line-title"><span style="color:#808080"><span style="font-size:22px">民鋒股份有限公司</span></h3>
                    <span style="color:#808080"><span style="font-size:18px">2016 - 2017(1年6個月)</span>
                   <span style="color:#808080"><span style="font-size:20px">採購、發包(產品為自動控制箱、馬達等)。</span></span>
                  </div>
                </li>
                <li>
                  <div class="content-text">
                   <h3 class="line-title"><span style="color:#808080"><span style="font-size:22px">亞碩企業股份有限公司</span></h3>
                    <span style="color:#808080"><span style="font-size:18px">2017 - 2019(1年6個月)</span>
                   <span style="color:#808080"><span style="font-size:20px">採購、發包及</span>
                   <span style="color:#808080"><span style="font-size:20px">AutoCad圖面繪製手冊製作，BOM表製作。</span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="experience wow fadeInRight" data-wow-delay="0.6s">
              <ul class="timeline">
                <li>
                  <i class="icon-briefcase"></i>
                  <h2 class="timelin-title"> <h2 class="animated bounce" style="animation-duration: 4s;animation-iteration-count:5"><span style="font-size:45px">工作經歷與學習2</span></span></h2></h2>
                </li>
                <li>
                  <div class="content-text">
                    <h3 class="line-title"><span style="color:#808080"><span style="font-size:22px">企業資訊系統設計與手機應用</span></h3>
                    <span style="color:#808080"><span style="font-size:18px">2019 - 2019(6個月)</span>
                    <span style="color:#808080"><span style="font-size:20px">1.C# 程式設計，連線資料庫裡的ADO.NET讀取。</span>
                    <span style="color:#808080"><span style="font-size:20px">2.C#WinForms連SQL新增、刪除、修改、查詢。</span>
                    <span style="color:#808080"><span style="font-size:20px">3.學習MS-SQL語法，DELPHI、ASP.NET MVC。</span>
                    <span style="color:#808080"><span style="font-size:20px">4.考取ERP軟體證照 : 鼎新配銷模組、財務模組。</span>
                    <span style="color:#808080"><span style="font-size:20px">5.在這期間，雖然碰到很多瓶頸，但我仍利用課餘時間不斷的嘗試改正一些BUG及設計程式。</span> 
                       </span>
                  </div>
                </li>
                <li>
                  <div class="content-text">
                    <h3 class="line-title"><span style="color:#808080"><span style="font-size:22px">迪智國際有限公司</span></h3>
                    <span style="color:#808080"><span style="font-size:18px">2019 - 2020(8個月)</span>
                    <span style="color:#808080"><span style="font-size:20px">1.修改維護能源效率網頁、調解管理系統網頁。</span>
                    <span style="color:#808080"><span style="font-size:20px">2.設計網頁文件教學說明、前後端系統操作手冊。</span>
                    <span style="color:#808080"><span style="font-size:20px">3.協同執行專案，簡易測試、尋找程式的Bug。</span>
                    <span style="color:#808080"><span style="font-size:20px">4.使用以下編寫網頁 : HTML/CSS、MS-SQL、Bootstrap、C#、ASP.NET。</span>
                    <span style="color:#808080"><span style="font-size:20px">5.使用MS-SQL預存程序撰寫後端網頁資料庫。</span>
                       </span>
                  </div>
                </li>
                <li>
                  <div class="content-text">
                   <h3 class="line-title"><span style="color:#808080"><span style="font-size:22px">元冠工業有限公司</span></h3>
                    <span style="color:#808080"><span style="font-size:18px">2020 - 2020(4個月)</span>
                    <span style="color:#808080"><span style="font-size:20px">1.電腦硬體與線路配置維護，及軟體更新與測試。</span>
                    <span style="color:#808080"><span style="font-size:20px">2.公司主程式架構為.NET Core，程式為C++。</span>
                    <span style="color:#808080"><span style="font-size:20px">3.維護修改機台連線、COM Port/Driver RFID Card Reader。</span>
                    <span style="color:#808080"><span style="font-size:20px">4.維護測試:由C++編寫的刀具櫃，存放CNC專用的刀具。</span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Resume Section Start -->
         <div id="hero-area" class="hero-area-bg">  
      <div id="resume" class="section-padding">
      <div class="container">
        <h1>技能</h1>
    <ul class="item-list">
        <div class="row">
          <li class="item">
            <div class="image"><img display:block;  src ="img/1.png" alt="C#"></div>                     
          <div class="progress">
  <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%">80%</div>
</div>
       </li>
       <li class="item">
        <div class="image"><img display:block; src="img/2.png" alt="C++"></div>     
  <div class="progress">
<div class="progress-bar progress-bar-striped  bg-danger  progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 60%">60%</div>
</div>
        </li>        
               <li class="item">
            <div class="image"><img src="img/5.png" alt="Javascript"></div>          
            <div class="progress">
              <div class="progress-bar progress-bar-striped  bg-danger progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%">80%</div>
              </div>
        </li>            
        <li class="item">
            <div class="image"><img src="img/6.JPG" alt="html+css"></div>           
            <div class="progress">
              <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%">80%</div>
              </div>
        </li>           
        <li class="item">
            <div class="image"><img src="img/7.JPG" alt="Bootstrap"></div>            
            <div class="progress">
              <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%">80%</div>
              </div>
            </li>           
            <li class="item">
                <div class="image"><img src="img/8.png" alt="jQuery"></div>            
                <div class="progress">
                  <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 70%">70%</div>
                  </div>
       </li>     
        <li class="item">
            <div class="image"><img src="img/9.JPG" alt="Linux"></div>            
            <div class="progress">
              <div class="progress-bar progress-bar-striped  bg-warning progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 50%">50%</div>
              </div>
        </li>     
        <li class="item">
            <div class="image"><img src="img/11.png" alt="VM"></div>           
            <div class="progress">
              <div class="progress-bar progress-bar-striped  bg-danger progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%">80%</div>
              </div>
             <span class="white-space">　　　</span> 
        </li>        
        <li class="item">
            <div class="image"><img src="img/12.JPG" alt="MS-SQL"></div>            
            <div class="progress">
              <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 65%">65%</div>
              </div>
        </li>        
        <li class="item">
            <div class="image"><img src="img/13.JPG" alt="MY-SQL"></div>           
            <div class="progress">
              <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 60%">60%</div>
              </div>
        </li>         
        <li class="item">
            <div class="image"><img src="img/14.JPG" alt="HeidiSQL"></div>         
            <div class="progress">
              <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 60%">60%</div>
              </div>
        </li>           
        <li class="item">
            <div class="image"><img src="img/16.PNG" alt="AutoCAD"></div>          
            <div class="progress">
              <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 50%">50%</div>
              </div>
              <span class="white-space">　　　</span> 
        </li>            
        <li class="item">
            <div class="image"><img src="img/17.JPG" alt="SolidWorks"></div>    
            <div class="progress">
              <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 50%">50%</div>
              </div>
        </li>
           
        <li class="item">
            <div class="image"><img src="img/18.PNG" alt="Access"></div>        
            <div class="progress">
              <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%">80%</div>
              </div>
        </li>            
         <li class="item">
            <div class="image"><img src="img/19.PNG" alt="鼎新ERP"></div>
           
            <div class="progress">
              <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 80%">80%</div>
              </div>
               </li>          
         <li class="item">
            <div class="image"><img src="img/20.PNG" alt="Arduino"></div>      
            <div class="progress">
              <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:50%">50%</div>
              </div>
               </div>
  <img src="image.png"></div>
  </div>
  </div>
  </div>
    </div>
    </div>
      <!-- Container Starts -->      
      <div id="hero-area" class="hero-area-bg">  
      <section id="portfolios" class="section-padding"> 
      <div id="hero-area" class="hero-area-bg">  
      <div class="container"> 
        <span class="white-space">　　　</span> 
           <span class="white-space">　　　</span> 
        <h1 class="section-title wow flipInX"  data-wow-delay="0.4s"> <span style="color:#808080">作品集</h1>
          <link rel="stylesheet" type="text/css" href="css-2/normalize.css" />
          <link rel="stylesheet" type="text/css" href="css-2/default.css">
          <link rel="stylesheet" href="css-2/page-styles.css">
        </head>
  </body>
    <div class="circles">
        <div class="first circle">
            <span>Text</span>
        </div> 
        <div class="second circle">
            <strong></strong>
            <span>progress</span>
        </div>
        <div class="third circle">
            <strong></strong>
            <span> animation</span>
        </div>
        <div class="forth circle">
            <span>solid fill, <br/> custom angle</span>
        </div>
        <div class="fifth circle">
            <span>image fill, <br/> custom sizes</span>
        </div>
    <script src="js-2/jquery-1.11.0.min.js"></script>
    <script src="dist-2/circle-progress.js"></script>
    <script src="js-2/examples.js"></script>
      </body>
        <div class="controls text-center">
          <a class="filter active btn btn-common" data-filter="all">
            All 
          </a>
          <a class="filter btn btn-common" data-filter=".design">
           C#
          </a>   
        <span class="white-space">　　  </span> 
        <span class="white-space">　　　</span> 
        <span class="white-space">　　  </span> 
        <span class="white-space">　　  </span> 
        <span class="white-space">　　　</span> 
        <span class="white-space">　　　</span> 
        <span class="white-space">　　　</span> 
        <span class="white-space">　　　</span> 
        <a class="filter btn btn-common" data-filter=".development">
        html+js+jquery
        </a>
        <a class="filter btn btn-common" data-filter=".print">
         資料庫(MS-SQL)
          </a>     
           <!-- Portfolio Controller/Buttons -->           
            <div class="controls text-center">
            <style type="text/css">               
	*{margin:0;padding: 0;}
	.pic{
		width: 120px;
		height: 180px;
		margin: 150px auto 0;
		position: relative;
		/*transform 旋轉*/
		transform-style:preserve-3d;
		transform:perspective(800px) rotateX(-10deg) rotateY(0deg);
	}
	body{background-color: #66677c;}

	.pic img{
		position: absolute;
		width: 100%;
		height: 100%;
		border-radius: 5px;
		box-shadow: 0px 0px 10px #fff;
		/*倒影*/
		-webkit-box-reflect:below 10px -webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,.5) 100%);
	}
	.pic p{
		width: 1200px;
		height: 1200px;
		background: -webkit-radial-gradient(center center,600px 600px,rgba(255,255,255,.5),rgba(0,0,0,0));
		position: absolute;
		top:100%;left:50%;
		margin-top: -600px;
		margin-left: -600px;
		border-radius:600px;
		transform:rotateX(90deg);
	}
</style>
</head>
<body>
<div class="pic">
	<img src="imgs/5.jpg"/>
	<img src="imgs/6.jpg" />
	<img src="imgs/9.jpg"/>
	<img src="imgs/10.jpg"/>
	<img src="imgs/12.jpg"/>
	<img src="imgs/13.jpg"/>
	<img src="imgs/15.jpg"/>
	<img src="imgs/17.jpg"/>
	<img src="imgs/18.jpg"/>
	<img src="imgs/21.jpg"/>
	<p></p>
</div>
<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function(){
var imgL=$(".pic img").size();
var deg=360/imgL;
var roY=0,roX=-10;
 var xN=0,yN=0;
 var play=null;

$(".pic img").each(function(i){
	$(this).css({
		"transform":"rotateY("+i*deg+"deg) translateZ(300px)"	});
		$(this).attr('ondragstart','return false');
	});
	$(document).mousedown(function(ev){
	var x_=ev.clientX;
	var y_=ev.clientY;
	clearInterval(play);
		console.log('我按下了');
		$(this).bind('mousemove',function(ev){
			/*座標*/
			var x=ev.clientX;
			var y=ev.clientY;
			/*座標之間的距離*/
			  xN=x-x_;
			  yN=y-y_;

			 roY+=xN*0.2;
			roX-=yN*0.1;
			console.log('移動');		
			$('.pic').css({
				 transform:'perspective(800px) rotateX('+roX+'deg) rotateY('+roY+'deg)'
			});
		 x_=ev.clientX;
		 y_=ev.clientY;
		});
	}).mouseup(function(){
		  $(this).unbind('mousemove');
		  var play=setInterval(function(){
		   xN*=0.95;
		   yN*=0.95
		   if(Math.abs(xN)<1 && Math.abs(yN)<1){
			  clearInterval(play);
		   }
			roY+=xN*0.2;
			roX-=yN*0.1;
			$('.pic').css({
				 transform:'perspective(800px) rotateX('+roX+'deg) rotateY('+roY+'deg)'
			});
		  },30);
	});
});
</script>
</body>
</html>
<section id="portfolios" class="section-padding"> 
          <div id="portfolio" class="row wow fadeInDown" data-wow-delay="0.4s">    
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix design">
               <div class="portfolio-item">
                <div class="shot-item">
                <img src="assets/img/gallery/20.JPG" alt="" />  
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="assets/img/gallery/20.JPG">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="#">
                        <i class="icon-link"></i>
                      </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix design ">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="assets/img/gallery/7.JPG" alt=""/> 
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="assets/img/gallery/7.JPG">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="#">
                        <i class="icon-link"></i>
                      </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix design">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="assets/img/gallery/16.JPG" alt=""/> 
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="assets/img/gallery/16.JPG">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="#">
                        <i class="icon-link"></i>
                      </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix design">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="assets/img/gallery/8.JPG" alt="" /> 
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="assets/img/gallery/8.JPG">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="#">
                        <i class="icon-link"></i>
                      </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix design">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="assets/img/gallery/19.JPG" alt="" /> 
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="assets/img/gallery/19.JPG">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="#">
                        <i class="icon-link"></i>
                        </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="assets/img/gallery/作品2.png" alt=""/> 
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="assets/img/gallery/作品2.png">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="#">
                        <i class="icon-link"></i>
                        </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="assets/img/gallery/作品1.png" alt="" /> 
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="assets/img/gallery/作品1.png">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="#">
                        <i class="icon-link"></i>
                        </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix print">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="assets/img/gallery/網頁前.JPG" alt="" /> 
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="assets/img/gallery/網頁前.JPG">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="#">
                        <i class="icon-link"></i>
                        </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix print">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="assets/img/gallery/員工資料coding.PNG" alt="" /> 
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="assets/img/gallery/員工資料coding.PNG">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="#">
                        <i class="icon-link"></i>
                      </a>
                  </div>
                </div>               
              </div> 
            </div>
          </div>         
        </div>
      </div>
      <!-- Container Ends --> 
      <link rel="stylesheet" type="text/css" href="css/default.css">
      <script src='http://www.htmleaf.com/assets/js/prefixfree.min.js'></script>
      <style>
      div.flip-3d { 
        perspective: 1200px; width: 30%; float: left;  
      }
      div.flip-3d figure { 
        position: relative; 
        transform-style: preserve-3d; 
        transition: 1s transform;
        font-size: 1.6rem; 
      }
      div.flip-3d figure img { 
        width: 100%; height: auto; 
      }
      div.flip-3d figure figcaption { 
        position: absolute; 
        width: 100%; height: 100%; top: 0; 
        transform: rotateY(.5turn) translateZ(1px); 
        background: rgba(255, 255, 255, 0.9); 
        text-align: center; 
        padding-top: 45%; 
        opacity: 0.6; 
        transition: 1s .5s opacity; 
      }
      div.flip-3d:hover figure { transform: rotateY(.5turn); }
      div.flip-3d:hover figure figcaption { opacity: 1; }
      div.flip-3d figure:after { 
        content: " "; display: block;
        height: 8vw; width: 100%; 
        transform: rotateX(90deg); 
        background-image: radial-gradient(ellipse closest-side, rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0) 100%); 
      }
    
      @media screen and (max-width: 800px) { 
        div#flip-3d { perspective-origin: center top; }
        div#flip-3d figure { 
          float: none; 
          width: 60%; 
          margin: 0 auto; 
          margin-bottom: 12vw; 
        }
        div.flip-3d figure figcaption{font-size: 0.8rem;}
        div#flip-3d figure:last-child { display: none; }
      }</style>
    </head>
    <body>
        <header class="htmleaf-header bgcolor-11">
          <style>
            div {
              cursor:context-menu;
          }
          </style>
          <h1>韌體/Linux/Vm/網頁作品集 (所接觸的專案)</span><span class="white-space"></h1>
          </div> 
        <link rel="stylesheet" href="css-4/style.css">
        </head>
        <body>
            </header>
            <div id="wrapper">
              <h1>VM/Linux上建Mariadb</h1>
              <div id="slider-wrap">
                        <ul id="slider">
                           <li data-color="#1abc9c">
                              <div>
                                  <h3>執行su並輸入root的密碼進入</h3>
                                  <img src="assets/img/gallery/Mariadb.PNG" alt="" /> 
                              </div>                
                              <i class="fa fa-image"></i>
                           </li>                          
                           <li data-color="#1abc9c">
                              <div>
                                  <h3>修改root權限加自己名字</h3>
                                  <img src="assets/img/gallery/Mariadb2.PNG" alt="" /> 
                              </div>
                              <i class="fa fa-gears"></i>
                           </li>                           
                           <li data-color="#1abc9c">
                              <div>
                                  <h3>更新資訊安裝軟體</h3>
                                  <img src="assets/img/gallery/Mariadb3.PNG" alt="" /> 
                              </div>
                              <i class="fa fa-sliders"></i>
                           </li>                          
                           <li data-color="#1abc9c">
                              <div>
                                  <h3>安裝</h3>
                                  <img src="assets/img/gallery/Mariadb4.PNG" alt="" /> 
                              </div>
                              <i class="fa fa-code"></i>
                           </li>                          
                           <li data-color="#1abc9c">
                              <div>
                                  <h3>進入 aptitude 的圖形介面</h3>
                                  <img src="assets/img/gallery/Mariadb5.PNG" alt="" /> 
                              </div>
                              <i class="fa fa-microphone-slash"></i>
                           </li>
                           <li data-color="#3498db">
                            <div>
                                <h3>尋找Marirdb</h3>
                                <img src="assets/img/gallery/Mariadb6.PNG" alt="" /> 
                            </div>
                            <i class="fa fa-microphone-slash"></i>
                         </li>
                         <li data-color="#3498db">
                          <div>
                              <h3>Marirdb相關加進來</h3>
                              <img src="assets/img/gallery/Mariadb7.PNG" alt="" /> 
                          </div>
                          <i class="fa fa-microphone-slash"></i>
                       </li>
                       <li data-color="#3498db">
                        <div>
                            <h3>安裝 ssh server</h3>
                            <img src="assets/img/gallery/Mariadb8.PNG" alt="" /> 
                        </div>
                        <i class="fa fa-microphone-slash"></i>
                     </li>
                     <li data-color="#3498db">
                      <div>
                          <h3>遠端連線進入</h3>
                          <img src="assets/img/gallery/Mariadb9.PNG" alt="" /> 
                      </div>
                      <i class="fa fa-microphone-slash"></i>
                   </li>
                   <li data-color="#3498db">
                    <div>
                        <h3>進入之後再次做更新</h3>
                        <img src="assets/img/gallery/Mariadb10.PNG" alt="" /> 
                    </div>
                    <i class="fa fa-microphone-slash"></i>
                 </li>
                 <li data-color="#9b59b6">
                  <div>
                      <h3>設置 root 密碼?</h3>
                      <img src="assets/img/gallery/Mariadb11.PNG" alt="" /> 
                  </div>
                  <i class="fa fa-microphone-slash"></i>
               </li>
               <li data-color="#9b59b6">
                <div>
                    <h3>移除匿名使用者?/禁用 root 遠端登入?</h3>
                    <img src="assets/img/gallery/Mariadb12.PNG" alt="" /> 
                </div>
                <i class="fa fa-microphone-slash"></i>
             </li>
             <li data-color="#9b59b6">
              <div>
                  <h3>删除 test 資料庫與訪問權限?/更新權限表?</h3>
                  <img src="assets/img/gallery/Mariadb13.PNG" alt="" /> 
              </div>
              <i class="fa fa-microphone-slash"></i>
           </li>
           <li data-color="#9b59b6">
            <div>
                <h3>重新密碼登入</h3>
                <img src="assets/img/gallery/Mariadb14.PNG" alt="" /> 
            </div>
            <i class="fa fa-microphone-slash"></i>
         </li>
         <li data-color="#9b59b6">
          <div>
              <h3>編輯/etc/mysql/my.cnf並更改port</h3>
              <img src="assets/img/gallery/Mariadb15.PNG" alt="" /> 
          </div>
          <i class="fa fa-microphone-slash"></i>
       </li>
       <li data-color="#34495e">
        <div>
            <h3>進入資料庫</h3>
            <img src="assets/img/gallery/Mariadb16.PNG" alt="" /> 
        </div>
        <i class="fa fa-microphone-slash"></i>
     </li>
     <li data-color="#34495e">
      <div>
          <h3>增加連線</h3>
          <img src="assets/img/gallery/Mariadb17.PNG" alt="" /> 
      </div>
      <i class="fa fa-microphone-slash"></i>
   </li>
   <li data-color="#34495e">
    <div>
        <h3>修改Unicode編碼</h3>
        <img src="assets/img/gallery/Mariadb18.PNG" alt="" /> 
    </div>
    <i class="fa fa-microphone-slash"></i>
 </li>
 <li data-color="#34495e">
  <div>
      <h3>/etc/mysql/mariadb.conf.d/ 中有個 “50-server.cnf" </h3>
      <img src="assets/img/gallery/Mariadb19.PNG" alt="" /> 
  </div>
  <i class="fa fa-microphone-slash"></i>
</li>
<li data-color="#34495e">
  <div>
      <h3>編碼改為utf8</h3>
      <img src="assets/img/gallery/Mariadb20.PNG" alt="" /> 
  </div>
  <i class="fa fa-microphone-slash"></i>
</li>
<li data-color="#e74c3c">
  <div>
      <h3>資料庫是否變更
      </h3>
      <img src="assets/img/gallery/Mariadb21.PNG" alt="" /> 
  </div>
  <i class="fa fa-microphone-slash"></i>
</li>
<li data-color="#e74c3c">
<div>
    <h3>重啟/關閉/啟動</h3>
    <img src="assets/img/gallery/Mariadb22.PNG" alt="" /> 
</div>
<i class="fa fa-microphone-slash"></i>
</li>
<li data-color="#e74c3c">
<div>
    <h3>完整建立資料庫</h3>
    <img src="assets/img/gallery/Mariadb23.PNG" alt="" /> 
</div>
<i class="fa fa-microphone-slash"></i>
</li>                 
                        </ul>                        
                         <!--controls-->
                        <div class="btns" id="next"><i class="fa fa-arrow-right"></i></div>
                        <div class="btns" id="previous"><i class="fa fa-arrow-left"></i></div>
                        <div id="counter"></div>                       
                        <div id="pagination-wrap">
                          <ul>
                          </ul>
                        </div>
                        <!--controls-->                                 
                    </div>
            </div>
          <script src="http://cdn.bootcss.com/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
          <script>window.jQuery || document.write('<script src="js-3/jquery-1.11.0.min.js"><\/script>')</script>
          <script type="text/javascript" src="js-3/slide.js"></script>
        </body>
        </html>        
	<script src="js-3/jquery-1.11.0.min.js" type="text/javascript"></script>
	<script src="js-3/circle.js"></script>
</body>
</html>
        <div class="htmleaf-content">
        <div class="flip-3d">
          <figure>
            <img src="assets/img/gallery/FR13.PNG"  alt="">
            <figcaption><span style="color:rgb(12, 9, 3);">Linux建部落格FreeNAS</span></figcaption>
          </figure>
        </div>
        <div class="flip-3d">
          <figure>
            <img src="assets/img/gallery/午餐.PNG"  alt="">
            <figcaption><span style="color:rgb(12, 9, 3);"><span class="white-space">　　</span>午餐更換<span class="white-space">　　</span><span class="white-space">　(元冠工業有限公司)</span> </span></figcaption>
          </figure>
        </div>
        <div class="flip-3d">
          <figure>
            <img src="assets/img/gallery/連線.PNG"  alt="">
            <figcaption><span style="color:rgb(12, 9, 3);"><span class="white-space">　　</span>機台連線<span class="white-space">　　</span><span class="white-space">　(元冠工業有限公司)</span> </span></figcaption>
 
          </figure>
        </div>
        <div class="flip-3d">
          <figure>
            <img src="assets/img/gallery/Linux1.PNG"  alt="">
            <figcaption><span style="color:rgb(12, 9, 3);">Linux1修改目錄</span></figcaption>
          </figure>
        </div>
        <div class="flip-3d">
          <figure>
            <img src="assets/img/gallery/Linux2.PNG"  alt="">
            <figcaption><span style="color:rgb(12, 9, 3);">Linux2修改目錄</span></figcaption>
          </figure>
        </div>
        <div class="flip-3d">
          <figure>
            <img src="assets/img/gallery/Linux3.PNG" alt="">
            <figcaption><span style="color:rgb(12, 9, 3);">Linux3修改目錄</span></figcaption>
          </figure>          
        </div>
      <div class="flip-3d">
        <figure>
          <img src="assets/img/gallery/韌體.JPG"  alt="">
          <figcaption><span style="color:rgb(12, 9, 3);"><span class="white-space">　　</span>刀具櫃子<span class="white-space">　　</span><span class="white-space">　(元冠工業有限公司)</span> </span></figcaption>
        </figure>
      </div>
      <div class="flip-3d">
        <figure>
          <img src="assets/img/gallery/網頁.jpg"  alt="">
          <figcaption><span style="color:rgb(12, 9, 3);"><span class="white-space">　　</span>Asp.Net+C#+Bootstrap<span class="white-space">　　</span><span class="white-space">(迪智國際有限公司)</span> </span></figcaption>
        </figure>
      </div>
      <div class="flip-3d">
        <figure>
          <img src="assets/img/gallery/文件.jpg" alt="">
          <figcaption><span style="color:rgb(12, 9, 3);">文件架構</span></figcaption>
        </figure>     
        </div>
      </div>
    </body>
    </html>
   <!-- Container Ends -->
 </section>
    <!-- Contact Section Start -->                
    <div id="hero-area" class="hero-area-bg">   
    <section id="contact" class="section-padding">          
   <div class="contact-form">
        <div class="container">
          <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">          
            <div class="col-md-6 col-lg-6 col-sm-12">
              <div class="contact-block">
                <form id="contactForm">
                    <div class="col-md-6">
                      <div class="form-group">
  <canvas width="200" height="200" id="canvas"></canvas>
<script>
  clock();//顯示
  setInterval(clock,1000);// 每一秒重繪一次，達到轉動效果
  function clock(){
    var now = new Date();// 得到當前日期與時間
    var second = now.getSeconds(),
      min = now.getMinutes(),
      hour = now.getHours();//時分秒
      hour = hour > 12?hour-12:hour;
    var canvas = document.getElementById('canvas');
    var ctx = canvas.getContext('2d');
    ctx.clearRect(0,0,250,250);// 畫布
    ctx.save();
    ctx.translate(75,75);//坐標原點
    ctx.scale(0.4,0.4);//縮放效果
    ctx.rotate(-Math.PI/2);// 將x軸旋轉-90
    ctx.fillStyle = 'black';
    ctx.fillStyle = 'black';
    ctx.lineWidth = 8;
    ctx.lineCap = 'round';
 
    // 顯示時針刻度
    ctx.save();
    ctx.beginPath();
    for(var i = 0;i<12;i++)
    {
      ctx.rotate(Math.PI/6);
      ctx.moveTo(100,0);
      ctx.lineTo(120,0);
    }
    ctx.stroke();
    ctx.closePath();
    ctx.restore();//恢復
    ctx.save();
     
    //顯示秒針刻度
    ctx.beginPath();
    ctx.lineWidth = 5;
    for(var i = 0;i < 60; i++)
    {
      if(i % 5 != 0)
      {
        ctx.moveTo(117,0);
        ctx.lineTo(120,0);
      }
      ctx.rotate(Math.PI/30);//轉6度
    }
    ctx.stroke();
    ctx.closePath();
    ctx.restore();//恢復
    ctx.save();
 
    // 繪製時針
    ctx.beginPath();
    ctx.rotate((Math.PI / 6)*hour + (Math.PI/360)*min + (Math.PI /21600)*second)// 位置
    ctx.strokeStyle = 'red';
    ctx.lineWidth = 14;
    ctx.moveTo(-20,0);
    ctx.lineTo(75,0);
    ctx.stroke();
    ctx.closePath();
    ctx.restore();
    ctx.save();
 
    // 繪製分針
    ctx.beginPath();
    ctx.strokeStyle = 'green';
    ctx.lineWidth = 10;
    ctx.rotate((Math.PI/30)*min + (Math.PI/1800)*second);// 位置
    ctx.moveTo(-28,0);
    ctx.lineTo(102,0);
    ctx.stroke();
    ctx.closePath();
    ctx.restore();//恢復
    ctx.save();
 
 
    // 繪製秒針
    ctx.beginPath();
    ctx.rotate(Math.PI/30*second);
    ctx.strokeStyle = 'Orange';
    ctx.lineWidth = 6;
    ctx.moveTo(-30,0);
    ctx.lineTo(83,0);
    ctx.stroke();
    ctx.closePath();
    ctx.restore();
    ctx.save();

    //繪製錶框
    ctx.beginPath();
    ctx.lineWidth = 20;
    ctx.strokeStyle = 'blue';
    ctx.arc(0,0,142,0,Math.PI*2,true);//半徑142
    ctx.stroke();
    ctx.closePath();
    ctx.restore()//恢復
    ctx.restore()//恢復
  }
</script>
<style>
    #train {
      position: relative;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <img id="train" src="https://js.cx/clipart/train.gif">
  <script>
    train.onclick = function() {
      let start = Date.now();

      let timer = setInterval(function() {
        let timePassed = Date.now() - start;
        train.style.left = timePassed / 5 + 'px';
        if (timePassed > 2000) clearInterval(timer);
      }, 20);
    }
  </script>
</body>
</html>
                    </div>
                  </div>            
                </form>
              </div>
            </div>
            <div class="col-md-6 col-lg-6  col-sm-12">
              <div class="footer-right-area wow fadeIn">             
                <div class="footer-right-contact">
                  <div class="single-contact">
                    <div class="contact-icon">
                      <i class="fa fa-map-marker"></i>
                    </div>
                    <p><span style="font-size:18px">桃園市平鎮區平東路282巷32弄1號</span></p>
                  </div>
                      <span class="white-space">　　　
                  <div class="single-contact">
                    <div class="contact-icon">
                      <i class="fa fa-envelope"></i>
                    </div>
                    <script>
					function showEmail(user, site){
						document.write('<a href=\"mailto:' + user + '@' + site + '\">');
						document.write(user + '@' + site + '</a>');
					}
					</script>
					<span style="font-size:18px"><script>showEmail("second9211", "gmail.com");
         </script></span>   
                  </div>
                  <div class="single-contact">
                    <div class="contact-icon">
                      <i class="fa fa-phone"></i>
                   </div>
                    <p><a href="#"><span style="font-size:18px">(03)-4602397</span></a></p>
                    <p><a href="#"><span style="font-size:18px">09-66520011</span></a></p>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>   
    </section>
    <!-- Contact Section End -->
    <!-- Footer Section Start -->
    <footer class="footer-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-text text-center wow fadeInDown" data-wow-delay="0.3s">
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->
    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
      <i class="icon-arrow-up"></i>
    </a>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.mixitup.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>  
    <script src="assets/js/nivo-lightbox.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.min.js"></script>
    <script src="assets/js/map.js"></script> 
    </div> 
</body>
</html> 

   
      