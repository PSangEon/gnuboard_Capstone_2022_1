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
	<ol class="carousel-indicators">
	  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
	  <!-- Slide One - Set the background image for this slide in the line below -->
	  <div class="carousel-item active" style="background-image: url('<?php echo G5_THEME_URL?>/img/code.png')">
		<div class="carousel-caption d-none d-md-block">		
		  <h1 class="ko1">
		  <span style="text-shadow: -2px 0 #000, 0 2px #000, 2px 0 #000, 0 -2px #000;">
			코드 생성
			</span>
			</h1>
		  <p class="ko1 f20"><span style="text-shadow: -1px 0 #000, 0 1px #000, 1px 0 #000, 0 -1px #000;">
			사용자 요구에 맞는 코드를 생성해줍니다.
			</span></p>
		
		</div>
	  </div>
	  <!-- Slide Two - Set the background image for this slide in the line below -->
	  <div class="carousel-item" style="background-image: url('<?php echo G5_THEME_URL?>/img/community.jpg')">
		<div class="carousel-caption d-none d-md-block">
		<h1 class="ko1">
		  <span style="text-shadow: -2px 0 #000, 0 2px #000, 2px 0 #000, 0 -2px #000;">
			커뮤니티
			</span>
			</h1>
		  <p class="ko1 f20"><span style="text-shadow: -1px 0 #000, 0 1px #000, 1px 0 #000, 0 -1px #000;">
			정보를 공유해주세요	
			</span></p>
		</div>
	  </div>
	  <!-- Slide Three - Set the background image for this slide in the line below -->
	  <div class="carousel-item" style="background-image: url('<?php echo G5_THEME_URL?>/img/3D.png')">
		<div class="carousel-caption d-none d-md-block">
		<h1 class="ko1">
		<span style="text-shadow: -2px 0 #000, 0 2px #000, 2px 0 #000, 0 -2px #000;">
			3D 도안
			</span>
			</h1>
		  <p class="ko1 f20"><span style="text-shadow: -1px 0 #000, 0 1px #000, 1px 0 #000, 0 -1px #000;">
			원하는 도안을 찾아보거나 제작하신 도안을 업로드 해주세요.
			</span></p>
		</div>
	  </div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
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