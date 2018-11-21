<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<script>
	$(document).ready(function(){
	 $('.slide1').bxSlider({
		pager:false,controls:false});
	});
</script>

<div class="slide1">
	<div><img src="<?php echo G5_THEME_IMG_URL; ?>/n01.jpg" alt="gallery01"> </div>
	<div><img src="<?php echo G5_THEME_IMG_URL; ?>/n02.jpg" alt="gallery02"> </div>
	<div><img src="<?php echo G5_THEME_IMG_URL; ?>/n03.jpg" alt="gallery03"> </div>
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>