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


	#btn{position: relative;}
	#btn .prev{position: absolute; bottom: 300px;left:60px;}
	#btn .next{position: absolute;bottom: 300px;right:60px;}
	#btn .next img{width: 20px;height:40px;}
	#btn .prev img{width: 20px;height:40px;}

	#text{width: 1920px;height:100px;padding-top:100px;}
	#text h1,p{text-align:center;}
	#text h1{font-size:40px;color:#071F34;padding-bottom: 30px;}
	#text p{font-size:18px;margin-bottom: 100px;}
	#text img{margin: 0 auto; width:200px;display:block;padding-bottom: 10px;}

 .scene{background-image: url(<?echo G5_THEME_IMG_URL?>/bgbg.png);height: 800px;background-attachment: fixed;text-align: center;font-size: 16px;color: #e7e7e7;}
  .scene h1{font-size: 46px;padding-top: 200px;padding-bottom: 80px;}
  .scene ul{position: relative;left: 24%;}
  .scene ul:after{content: "";display: block;clear: both}
  .scene li{float: left;}
  .scene p{font-size: 34px;padding-bottom: 10px;}

  .bbtn{font-size: 22px;padding: 15px;border-radius: 5px;border:2px solid #ffffff;margin-top: 50px;}
  .bbtn:hover{color: white;background: #b30317;border:none;}

ul,li{list-style: none;}
a{text-decoration: none;}
a:link,a:visited{color: inherit;}
/*img{display: block;width: 100%;}*/

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
    bottom:300px;right:40px;
  }
</style>

<script>
       $(document).ready(function(){
         	var mySlider = $('.slider').bxSlider({
            auto:true,
            controls:false,
            pager:false,
			speed:500
         });
         $(".prev").on("click",function(){
				mySlider.goToPrevSlide(3);
			});
			$(".next").on("click",function(){
				mySlider.goToNextSlide(3);
			});





         });


</script>




<section id="slider_wrap">
    <div class="slider">
		<div><img src="<?echo G5_THEME_IMG_URL?>/slider1.jpg" alt="s1"></div>
		<div><img src="<?echo G5_THEME_IMG_URL?>/slider3.jpg" alt="s2"></div>
		<div><img src="<?echo G5_THEME_IMG_URL?>/slider2.jpg" alt="s3"></div>
		<div><img src="<?echo G5_THEME_IMG_URL?>/slider4.jpg" alt="s4"></div>
	</div>

 <div id="btn">
 <div class="prev">
 <img src="<?echo G5_THEME_IMG_URL?>/prev.png" alt="prev"></div>

<div class="next">
 <img src="<?echo G5_THEME_IMG_URL?>/next.png" alt="next"></div>

 </div>
</section>


<div id="bar1">
  <img src="<?echo G5_THEME_IMG_URL?>/bar1.jpg" alt="bar1">
</div>

<div class="scene">

    <h1>"나만의 즐거움을 만나는 프리미엄 디저트 카페"</h1>
    <ul>
      <li style="text-align: left">
        <p style="text-align: left">커피 전문점의 <br>새로운 기준을 마련하다</p>
        정통 유럽식 디저트와 유럽풍 살롱을 현대적으로<br>재해석한 세련되고 시크한 인테리어로 프리미엄<br>디저트 카페의 새로운 기준을 마련했습니다.
      </li>
      <li style="padding-left: 250px; text-align: right">
        <p style="text-align: right">국내를 넘어 <br>세계로 향하다</p>
        중국 1호점을 시작으로 해외시장에 프리미엄 디저트 문화를<br>전파, 대한민국 프리미엄 디저트 카페를 넘어 글로벌<br>디저트 카페로서 세계로 도약하고 있습니다.
      </li>
    </ul>
  <div style="margin-top: 120px">
        <a href="http://woonhee.dothome.co.kr/main/bbs/content.php?co_id=B1" class="bbtn">자세히 알아보기</a>
  </div>

  </div>

	<div id="text">
	<h1>TWOSOME Pairing</h1>

<p>자신만의 스타일로 더욱 멋지게 즐길 수 있는 ‘페어링’<br>
프리미엄 디저트카페 투썸플레이스에서 저마다 좋아하는 커피에 그에 가장 잘 어울리는<br>디저트를 매칭하여, 더욱 풍부한 맛과 개성, 색다른 디저트 경험을 즐길 수 있습니다.
</p>
<img src="<?echo G5_THEME_IMG_URL?>/text-bar.png" alt="bar">
	</div>

<div id="class-links">
    <a href="http://woonhee.dothome.co.kr/main/bbs/content.php?co_id=C2" class="coffee">
      <p>THE COFFEE<br>TEACHING<br>CLASS</p>
     <img src="<?echo G5_THEME_IMG_URL?>/bg3.png" alt="bg1">
    </a>
    <a href="http://woonhee.dothome.co.kr/main/bbs/content.php?co_id=C1" class="cake">
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
