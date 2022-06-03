<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<div class="ety-mt-main"></div>

<!-------------------------- 슬라이드 -------------------------->
<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<!--ol class="carousel-indicators">
	  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol-->
	<div class="carousel-inner" role="listbox">
	  <!-- Slide One - Set the background image for this slide in the line below -->
	  <div class="carousel-item active" style="background-image: url('<?php echo G5_THEME_URL?>/data/img/tempmain.png')">
		<!--div class="carousel-caption d-none d-md-block">		
		  <h3 class="ko1">에티테마 커뮤니티</h3>
		  <p class="ko1 f20">에티테마에 오시면 커뮤니티형, 비즈니스형 두가지 모두 다운로드 하실 수 있습니다.</p>
		
		</div-->
	  </div>
	  <!-- Slide Two - Set the background image for this slide in the line below -->
	  <!--div class="carousel-item" style="background-image: url('<?php echo G5_THEME_URL?>/img/background05.jpg')">
		<div class="carousel-caption d-none d-md-block">
		  <h3 class="ko1">반응형 비즈니스 테마</h3>
		  <p class="ko1 f20">그누보드5.3 / 5.4 와 연동되어 사용가능한 테마 입니다.</p>
		</div>
	  </div-->
	  <!-- Slide Three - Set the background image for this slide in the line below -->
	  <!--div class="carousel-item" style="background-image: url('<?php echo G5_THEME_URL?>/img/background01.jpg')">
		<div class="carousel-caption d-none d-md-block">
		  <h3 class="ko1">ETY.KR</h3>
		  <p class="ko1 f20">클릭하시면 에티테마 비즈니스 설치법으로 이동 합니다.</p>
		</div>
	  </div-->
	</div>
	<!--a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	  <span class="sr-only">Next</span>
	</a-->
  </div>
</header>
<div class="margin-top-80"></div>
<!-------------------------- 아이콘박스 -------------------------->



<!-------------------------- 회사소개 및 안내 -------------------------->
<div class="container margin-top-80 margin-bottom-80">
	<h3 class="margin-bottom-50 text-left">PRODUCT</h3>
	<!-- LATEST : pic_basic_company -->
	<?php echo latest('theme/pic_basic_company', 'gallery', 9, 24); ?>
</div>



<!-------------------------- 클라이언트 -------------------------->
<div class="container margin-top-50 margin-bottom-50">
	<h3 class="margin-bottom-50 text-left">GALLERY</h3>
	<?php echo latest('theme/pic_basic_owl', 'gallery', 12, 24); ?>
</div>





<!----날씨 api --->
<iframe width="100%" height="245" src="https://forecast.io/embed/#lat=35.1788&lon=129.0759&name=부산&color=&font=arial&units=si" frameborder="0"></iframe>

<!-- /.container -->




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>