<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<style>
    #header_wrap{width:1200px;margin:0px auto;position: relative;height: 160px;}

    .header_bg{background: url(<? echo G5_THEME_IMG_URL ?>/two/bg.gif);height: 150px;width: 100%;}
    .gnb{position: absolute;top: 0;right: 0;color: #d1d1d1;}
    .gnb:after{content: "";display: block;clear: both}
    .gnb li{float: left;padding: 10px;font-size: 12px}

    .nav {background: url(<? echo G5_THEME_IMG_URL ?>/two/box.png) no-repeat;height: 100px;width: 760px;float: right;margin-top: 40px;color: #d1d1d1;font-size: 18px;font-weight: bold;}
    .nav ul{line-height: 110px;margin-left: 20px;margin-right: 20px;}
    .nav li{width: 144px;text-align: center;}

    .sns{width: 115px;float: right;margin-top: 75px;}

    .side_one{position: fixed;z-index: 10;right: 50px;top: 165px;}
    .side_two{position: fixed;z-index: 10;right: 50px;top: 278px;background: url(<? echo G5_THEME_IMG_URL ?>/two/side2.png);width: 146px;height: 97px;}
    .side_two a{line-height: 120px;padding-left: 12px;}

    .tab:after{content: "";display: block;clear: both;}
    .tab li{float: left;font-size: 24px}

    .logo{position: relative;z-index: 5}

</style>
<div class="header_bg">
    <header id="header_wrap">

            <a href="<?php echo G5_URL ?>"><img src="<?echo G5_THEME_IMG_URL?>/two/logo.png" alt="logo" class="logo"></a>


            <ul class="gnb">
    <?php if ($is_member) {  ?>


                <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php"><i class="fa fa-cog" aria-hidden="true"></i> 정보수정</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> 로그아웃</a></li>
                <?php if ($is_admin) {  ?>
                <li class="tnb_admin"><a href="<?php echo G5_ADMIN_URL ?>"><b><i class="fa fa-user-circle" aria-hidden="true"></i> 관리자</b></a></li>
                <?php }  ?>
                <?php } else {  ?>
                <li><a href="<?php echo G5_BBS_URL ?>/register.php"> 회원가입</a></li>
                <li><a href="<?php echo G5_BBS_URL ?>/login.php"><b> 로그인</b></a></li>
                <?php }  ?>
                <li>고객센터</li>
            </ul>
             <?php  include(G5_THEME_PATH.'/skin/nav/menu.php'); ?>



    </header>
</div>

<?php    if(defined('_INDEX_')) {     // index에서만 실행?>

    <section id="recomm_book" style="display: none">

    </section>

<?}else{?>

    <section id="recomm_book">
        <?if($co_id == "B1" || $co_id == "B2" || $co_id == "B3"){?>
        <img src="<? echo G5_THEME_IMG_URL ?>/two/sub_bg.png" alt="sub_bg">
        <?}else if($co_id == "M1" || $co_id == "M2" || $co_id == "M3" || $co_id == "M4" ||$co_id == "M5"){?>
        <img src="<? echo G5_THEME_IMG_URL ?>/two/notice.jpg" alt="menu_bg">
        <?}else if($co_id == "C1" || $co_id == "C2"){?>
        <img src="<? echo G5_THEME_IMG_URL ?>/two/class-title.png" alt="class_bg">
        <?}else if($bo_table == "free"){?>
        <img src="<? echo G5_THEME_IMG_URL ?>/two/store.jpg" alt="store">
        <?}else{?>
           <img src="<? echo G5_THEME_IMG_URL ?>/two/membership.jpg" alt="membership_bg">
        <?}?>


    <!-- 현재위치 -->
    <!-- <span style="display:inline-block">
    <?php
        $sql_menu = " select *  from ".$g5['menu_table']."
        where me_use = '1'
        and length(me_code) = '2'
        order by me_order, me_id ";
        $result_menu = sql_query($sql_menu, false);



        for ($i=0; $rowMenu=sql_fetch_array($result_menu); $i++) {
            $rowMenu_link = explode("=",$rowMenu['me_link']);
           //echo $rowMenu_link[1];


      ?>
         <a href="<?php echo $rowMenu['me_link']; ?>" target="_<?php echo $rowMenu['me_target']; ?>" style="display:none" id="menu_link<?php echo $i ?>"><?php echo $rowMenu['me_name']; ?></a>

        <?}?>

    </span>
     >
     <? if($bo_table){echo $board['bo_subject']; }else{echo $g5['title']; }
     ?> -->
     <!-- 현재위치끝 -->

    </section>

    <?}?>

  <div id="content" style="overflow:hidden">


    <? if(!defined('_INDEX_')) {?>
        <div id="aside" >
        <?//php  include(G5_THEME_PATH.'/skin/nav/mysubmenu.php'); ?>

<style>
.sub-nav {
margin-top: 50px;
display: flex;
justify-content: center;
}

.sub-tab {
display: inline-block;
width: 240px;
height: 50px;
margin: 0;
border-left: 1px solid #B30317;
border-right: 1px solid #B30317;
border-top: 1px solid #B30317;
border-bottom: 1px solid #B30317;
background: #ffffff;
color: #B30317;
text-align: center;
line-height: 50px;
font-weight: bold;
font-size:16px;
}

.sub-tab~.sub-tab{
  border-left: 1px solid #B30317;
}

.sub-tab.active {
border: none;
background: #B30317;
color: #ffffff;
}
</style>
         <?if($co_id == "B1" || $co_id == "B2" || $co_id == "B3"){?>
           <!-- 브랜드 -->
               <nav class="sub-nav">
                 <a href="<? echo G5_BBS_URL;?>/content.php?co_id=B1" class="sub-tab <?if($co_id == "B1"){echo " active";}?>">브랜드이야기</a>
                 <a href="<? echo G5_BBS_URL;?>/content.php?co_id=B2" class="sub-tab <?if($co_id == "B2"){echo " active";}?>">커피이야기</a>
                 <a href="<? echo G5_BBS_URL;?>/content.php?co_id=B3" class="sub-tab <?if($co_id == "B3"){echo " active";}?>">디저트이야기</a>
               </nav>


        <?}else if($co_id == "C1" || $co_id == "C2"){?>
            <!-- 클래스 -->
            <nav class="sub-nav">
              <a href="<? echo G5_BBS_URL;?>/content.php?co_id=C1" class="sub-tab <?if($co_id == "C1"){echo " active";}?>">케이크 클래스</a>
              <a href="<? echo G5_BBS_URL;?>/content.php?co_id=C2" class="sub-tab <?if($co_id == "C2"){echo " active";}?>">커피 클래스</a>
            </nav>

        <?}else if($co_id == "store"){?>
            <!-- 스토어 -->
            <nav class="sub-nav">
              <a href="<? echo G5_BBS_URL;?>/content.php?co_id=store" class="sub-tab <?if($co_id == "store"){echo " active";}?>">매장찾기</a>
            </nav>
        <?}else if($bo_table == "notice"||$fm_id == "1"||$co_id == "member"||$co_id == "event"){?>
            <!-- 공지사항 -->
            <nav class="sub-nav">
              <a href="<? echo G5_BBS_URL;?>/content.php?bo_table=notice" class="sub-tab <?if($bo_table == "notice"){echo " active";}?>">공지사항</a>
              <a href="<? echo G5_BBS_URL;?>/content.php?faq.php?fm_id=1" class="sub-tab <?if($fm_id == "1"){echo " active";}?>">FAQ</a>
              <a href="<? echo G5_BBS_URL;?>/content.php?co_id=member" class="sub-tab <?if($co_id == "member"){echo " active";}?>">CJ ONE 멤버십</a>
              <a href="<? echo G5_BBS_URL;?>/content.php?co_id=event" class="sub-tab <?if($co_id == "event"){echo " active";}?>">이벤트</a>
            </nav>

        <?}else{?>
            <!-- 메뉴 -->

              <nav class="sub-nav">
                <a href="http://woonhee.dothome.co.kr/main/theme/basic1st/menu1.php" class="sub-tab <?if($s_menu == "01"){echo " active";}?>">케이크</a>
                <a href="http://woonhee.dothome.co.kr/main/theme/basic1st/menu2.php" class="sub-tab <?if($s_menu == "02"){echo " active";}?>">커피&음료</a>
                <a href="<? echo G5_BBS_URL;?>/content.php?co_id=M3" class="sub-tab <?if($co_id=="M3"){echo " active";}?>">푸드</a>
                <a href="<? echo G5_BBS_URL;?>/content.php?co_id=M4" class="sub-tab <?if($co_id=="M4"){echo " active";}?>">MD</a>
                <a href="<? echo G5_BBS_URL;?>/content.php?co_id=M5" class="sub-tab <?if($co_id=="M5"){echo " active";}?>">단체구매</a>
              </nav>
        <?}?>

        </div>
    <?}?>

        <?php
        if(defined('_INDEX_')) {     // index에서만 실행
        ?>
            <div class="content" style="width:100%;">
        <?}else{?>
            <div class="content" style="width:100%;margin-bottom: 100px">
        <?}?>
