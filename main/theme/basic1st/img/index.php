<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>


<script src="<?php echo G5_JS_URL ?>/jquery.bxslider.js"></script> 




<style>
#slider_wrap{width: 100%;height:600px;background:blue;}
.slider{width: 1920px;}
	
    
	#bar1{width: 1920px;height:200px;}
	#bar2{width: 1920px; margin:0 auto;}
	#content{width: 1920px !important;}

	#text{width: 1920px;height:100px;padding-top:100px;}
	#text h1,p{text-align:center;}
	#text h1{font-size:40px;color:#071F34;padding-bottom: 30px;}
	#text p{font-size:18px;margin-bottom: 100px;}
	#text img{margin: 0 auto; width:200px;display:block;padding-bottom: 10px;}
	
	
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  #class-links{
    position: relative;
    width: 1200px;
    height: 600px;
    margin: 100px auto;
    margin-top: 200px;
  }
  #class-links a {
    position: absolute;
    display: block;
	
    width: 700px;
    height: 700px;
    padding: 50px;
    overflow: hidden;
  }
  #class-links img{
    width: 100%;
    height: 100%;
    transition: 1s;
  }

  #class-links a:hover img{
    transform: scale(1.2);
  }

  #class-links .coffee {
    top:100px;left: 0;
  }

  #class-links .cake {
    bottom: 0;right: 0;top: 200px;
  }
  #class-links p{
    position: absolute;
    padding: 80px;
    color: #fff;
    font-weight: bold;
    font-size: 40px;
    text-align: center;
    z-index: 1;
  }
  #class-links .cake p{
    bottom:400px;right: 0;

  }
</style>
<script>
      $(document).ready(function(){
         $('.slider').bxSlider({
            auto:true,
            controls:false, 
            pager:false
         });
         
   

       
   
   
         });
      


		
	
</script>




<section id="slider_wrap">
    <div class="slider">
		<div><img src="<?echo G5_THEME_IMG_URL?>/slider4.jpg" alt="a"></div>
		<div><img src="<?echo G5_THEME_IMG_URL?>/slider1-1.jpg" alt="a"></div>
		<div><img src="<?echo G5_THEME_IMG_URL?>/slider2.jpg" alt="a"></div>
		<div><img src="<?echo G5_THEME_IMG_URL?>/slider3.jpg" alt="a"></div>
	</div>
</section> 
	

<div id="bar1">
<img src="<?echo G5_THEME_IMG_URL?>/bar1.jpg" alt="bar1">
</div>

	<div id="text">
	<h1>TWOSOME Pairing</h1>

<p>자신만의 스타일로 더욱 멋지게 즐길 수 있는 ‘페어링’<br>
프리미엄 디저트카페 투썸플레이스에서 저마다 좋아하는 커피에 그에 가장 잘 어울리는<br>디저트를 매칭하여, 더욱 풍부한 맛과 개성, 색다른 디저트 경험을 즐길 수 있습니다.
</p>
<img src="<?echo G5_THEME_IMG_URL?>/text-bar.png" alt="bar">
	</div>

<div id="class-links">
    <a href="#" class="coffee">
      <p>THE COFFEE<br>TEACHING<br>CLASS</p>
     <img src="<?echo G5_THEME_IMG_URL?>/bg3.png" alt="bg1">
    </a>
    <a href="#" class="cake">
      <p>THE CAKE<br>TEACHING<br>CLASS</p>
    <img src="<?echo G5_THEME_IMG_URL?>/bg4.png" alt="bg2">
    </a>
  </div>

<div id="bar2">

	<img src="<?echo G5_THEME_IMG_URL?>/section12.png" alt="bar2">
</div>

<div class="latest_wr">
    <!--  사진 최신글2 { -->
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
 
    ?>
    <!-- } 사진 최신글2 끝 -->
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>