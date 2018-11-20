<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<main id="main">
  <!-- depth2 tab start -->
  <style>
  body {
  font-family: 'Noto Sans KR', sans-serif;
  background: #fff;
}
    #main {
  margin-bottom: 100px;
}

.sub-header {
  margin-bottom: 100px;
}

.sub-title-img {
  width: 100%;
  height: 200px;
  background: url(<?php echo G5_THEME_IMG_URL ?>/class-title.png) no-repeat;
  -webkit-background-size: cover;
  background-size: cover;
}

.sub-title {
  text-align: center;
  margin: 50px;
  font-size: 34px;
  font-weight: bold;
}

.sub-nav {
  display: flex;
  justify-content: center;
}

.sub-tab {
  width: 240px;
  height: 50px;
  margin: 0;
  border: 1px solid #B30317;
  background: #fff;
  color: #B30317;
}

.sub-tab.active {
  border: none;
  background: #B30317;
  color: #ebebeb;
  font-weight: bold;
}

.contents-wrap {
  margin: 0 auto;
  width: 1200px;
}

.tab-content {
  display: none;
  margin: 0 auto;
}

.tab-content.active {
  display: block;
}
</style>
  <header class="sub-header">
    <div class="sub-title-img"></div>
    <h2 class="sub-title">CLASS</h2>
    <nav class="sub-nav">
      <button class="sub-tab active" type="button">케이크</button>
      <button class="sub-tab" type="button">커피&음료</button>
      <button class="sub-tab" type="button">푸드</button>
      <button class="sub-tab" type="button">MD</button>
      <button class="sub-tab" type="button">단체구매</button>
    </nav>
  </header>
  <!-- depth2 tab end -->

  <!-- contents start -->
  <style>
    .content-wrap {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .content-wrap>div {
      margin-bottom: 100px;
      width: 270px;
      height: 320px;
    }

    .content-wrap>div div {
      display: flex;
      -ms-align-items: center;
      align-items: center;
      justify-content: center;
      width: 270px;
      height: 270px;
    }

    .content-wrap>div img {
      width: 65%;
    }

    .content-wrap>div h3 {
      width: 100%;
      font-size: 16px;
      text-align: center;
      color: #3c3e3b;
    }

    #more-cake,
    #more-drink {
      display: block;
      margin: 30px auto;
      width: 200px;
      height: 60px;
      border: none;
      background: #3c3e3b;
      color: #ebebeb;
      font-size: 18px;
      transition: .5s;
    }

    #more-cake,
    #more-drink:hover {
      background: #B30317;
    }
  </style>
  <div class="contents-wrap" id="contents-menu">
    <section class="tab-content active">
      <div class="content-wrap" id="menu-cake"></div>
      <button id="more-cake">더보기</button>
    </section>
    <section class="tab-content">
      <div class="content-wrap" id="menu-drink"></div>
      <button id="more-drink">더보기</button>
    </section>
    <section class="tab-content" id="menu-drink">
      <div class="content-wrap"></div>
    </section>
    <section class="tab-content" id="menu-drink">
      <div class="content-wrap"></div>
    </section>
    <section class="tab-content" id="menu-drink">
      <div class="content-wrap"></div>
    </section>
  </div>
  <!-- contents end -->

</main>

<script>
  loadMenu();

  function loadMenu() {
    var contents = document.querySelectorAll('.content-wrap');
    var cakeNames = ['마스카포네생크림(천도복숭아)', '러브시그널', '바닐라크렘브륄레', '기프트박스', '로즈베리생크림', 'TWG로얄밀크티쉬폰', '더치솔티드카라멜', '까망베르치즈', '커피생크림', '벨지안멜팅가나슈', '스트로베리요거타르트', '그뤼에르치즈무스', '요거생크림 1호', '뉴욕치즈', '스트로베리초콜릿생크림', '트리플초콜릿무스', '캐롯', '레드벨벳', '마스카포네생크림(믹스드베리)', '마스카포네생크림(자몽오렌지)', '블랙포레스트', '요거생크림 2호', '클래식가토', '요거생크림 3호'];
    var drinkNames = ['TWG 밀크티 쉬폰 라떼', '시그니처 뱅쇼', '카페 오트 라떼', '제주 말차 프라페', '유자 블랙티 프라페', '샹그리아 에이드', '레몬 셔벗 에이드', '더블브루', '로얄 밀크티 쉐이크', '오렌지 블라썸 라떼', '투썸 시그니처 라떼', '라즈베리 아이스티', '허니레몬 아이스티', 'TWF TEA(iced)', 'TWG TEA(hot)', '콜드브루 토닉', '니트로 콜드브루 라떼', '니트로 콜드브루', '티라미수 라떼', '플로팅 라떼', '오렌지자몽티', '고구마 라떼', '콜드브루 라떼', '콜드브루', '스트로베리 피치 프라페'];
    var count;
    for (var i = 0; i < 2; i++) {
      for (count = 1; count <= 24; count++) {
        i === 0 ? menu = 'cake' : menu = 'drink';
        var div_menu = document.createElement('div')
        var div = document.createElement('div');
        var img = document.createElement('img');
        img.src = "<?php echo G5_THEME_IMG_URL ?>/" + menu + '-' + count + '.png';
        var h3 = document.createElement('h3');
        i === 0 ? h3.appendChild(document.createTextNode(cakeNames[count - 1])) : h3.appendChild(document.createTextNode(drinkNames[count - 1]));
        div.appendChild(img);
        div_menu.appendChild(div);
        div_menu.appendChild(h3);
        contents[i].appendChild(div_menu);
      }
    }
    tabMenu();
    more('#menu-cake>div', 'more-cake');
    more('#menu-drink>div', 'more-drink');
  }

  function tabMenu() {
    var btns = document.querySelectorAll('.sub-tab');
    var contents = document.querySelectorAll('.tab-content');
    btns[0].addEventListener('click', openTab);
    btns[1].addEventListener('click', openTab);

    function openTab() {
      for (var i = 0, item; item = btns[i]; i++) {
        btns[i].classList.remove('active');
        contents[i].classList.remove('active');
      }
      this.classList.add('active');
      var i = Array.prototype.indexOf.call(btns, this);
      contents[i].classList.add('active');
    }
  }

  function more(currentmenu, btn) {
    var show = 8;
    var menu = document.querySelectorAll(currentmenu);
    for (var item, i = 0; item = menu[i]; i++) {
      menu[i].style.display = 'none';
    }
    showMenu(show);
    document.getElementById(btn).addEventListener('click', function() {
      show += 8;
      showMenu(show);
      console.log(show);

    })

    function showMenu(limit) {
      for (var i = 0; i < limit; i++) {
        menu[i].style.display = 'block';
      }
    }
  }
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>