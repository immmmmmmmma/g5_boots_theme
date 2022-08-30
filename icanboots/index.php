
<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<div class="cont">
	<div class="playerWrap mb-3">
		<video src="https://ybmlemon.com/img/web/HOME/main/ybmlemon.mp4" autoplay muted loop></video>
	</div>
	<div class="mainV01">
		<div class="con01">
			<img src="<? echo G5_THEME_IMG_URL ?>/main_visual_01_item01.png" alt="" class="vcItem width-298px position-absolute top-0">
			<img src="<? echo G5_THEME_IMG_URL ?>/main_visual_01_item02.png" alt="" class="vcItem width-258px position-absolute right-0">
			<img src="<? echo G5_THEME_IMG_URL ?>/main_visual_01_item03.png" alt="" class="vcItem width-268px position-absolute left-0">
			<img src="<? echo G5_THEME_IMG_URL ?>/main_ani.gif" alt="" class="gif">
		</div>
		<div class="mainTxt">
			<h3>YBM 레몬만의 전용뷰어로 수업</h3>
			<p>화상 회의실 같은 딱딱한 뷰어가 아닙니다. <br>
				YBM교육이 개발한 화상수업 전용 뷰어입니다.</p>
		</div>
	</div>
	<div class="mainV02 ">
		<img src="<? echo G5_THEME_IMG_URL ?>/main_visual_02.png" alt="">
	</div>
</div>

<div class="container">


<?php
include_once(G5_THEME_PATH.'/tail.php');