
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
	<div class="playerWrap mb-5">
		<video src="https://ybmlemon.com/img/web/HOME/main/ybmlemon.mp4" autoplay="" muted=""></video>
	</div>
	<div class="mainV01">
		<div class="con01" data-aos-duration="1000" data-aos="fade-right">
			<img src="<? echo G5_THEME_IMG_URL ?>/main_visual_01_item01.png" alt="" class="vcItem01">
			<img src="<? echo G5_THEME_IMG_URL ?>/main_visual_01_item02.png" alt="" class="vcItem02">
			<img src="<? echo G5_THEME_IMG_URL ?>/main_visual_01_item03.png" alt="" class="vcItem03 ">
			<img src="<? echo G5_THEME_IMG_URL ?>/main_ani.gif" alt="" class="gif">
		</div>

		<div class="mainTxt widht-534px text-start" data-aos-duration="1000" data-aos="fade-left" style="padding-left: 105px">
			<h3 class="fw-bold fs-1 mb-4">YBM 레몬만의 <br> 전용뷰어로 수업</h3>
			<p class="fs-5">화상 회의실 같은 딱딱한 뷰어가 아닙니다. <br>
				YBM교육이 개발한 <span class="text-success fw-bold">화상수업 전용 뷰어</span>입니다.</p>
		</div>
	</div>
	<div class="mainV02 mb-5">
		<div class="mainTxt widht-534px text-start" data-aos-duration="1000" data-aos="fade-up">
			<h3 class="fw-bold fs-1 mb-4">화상수업을 위해 개발된 <br> e-Classbook </h3>
			<p class="fs-5">오프라인 교재를 그대로 올려서 수업하지 않습니다. <br>
				온라인 수업에 맞춰 개발된 <span class="text-success fw-bold">온라인 전용 e-Classbook</span>입니다.</p>
		</div>
		<img src="<? echo G5_THEME_IMG_URL ?>/main_visual_02.png" alt="" class="vcItem04" data-aos-duration="1000" data-aos="fade-down">
	</div>
	<div class="mainV03">
		<div class="con03" data-aos-duration="1000" data-aos="fade-left">
			<img src="<? echo G5_THEME_IMG_URL ?>/main_visual_03.png" alt="">
			<img src="<? echo G5_THEME_IMG_URL ?>/img_6.png" alt="" class="vcItem05">
		</div>
		<div class="mainTxt widht-534px text-start" data-aos-duration="1000" data-aos="fade-up" style="padding-left: 105px">
			<h3 class="fw-bold fs-1 mb-4">지루할 틈이 없는 수업 진행</h3>
			<p class="fs-5"><span class="text-success fw-bold">온라인 교구와 액티비티</span>로 흥미있는 수업이 진행됩니다. <br>
				온라인 수업에 맞춰 개발된 입니다.</p>
		</div>
		
	</div>
</div>

<div class="container">


<?php
include_once(G5_THEME_PATH.'/tail.php');