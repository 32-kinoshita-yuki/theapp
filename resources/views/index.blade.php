@extends('layouts.master_auth')
 @section('title', 'home')
@section('content')


<!-- インフルエンサー --> 
	<div class="nakami">
		<p class="titele"><span>I</span>NFULUENSA LIST</p>
	</div>	
	 <section class="regular slider">
    <div>
      <img src="img/1.png" width="400" height="600" alt=""/>
	</div>
    <div>
      <img src="img/2.png" width="400" height="600" alt=""/>
    </div>
    <div>
      <img src="img/3.png" width="400" height="600" alt=""/>
    </div>
    <div>
      <img src="img/4.png" width="400" height="600" alt=""/>
    </div>
    <div>
      <img src="img/5.png" width="400" height="600" alt=""/>
    </div>
    <div>
      <img src="img/6.png" width="400" height="600" alt=""/>
	</div>
	</section>
	<div class="box13">
    <p>MORE</p>
	</div>
<!-- インフルエンサー終了 --> 
<!-- 日記投稿　--> 
<div class="nakami">
	<p class="titele"><span>P</span>OST</p>
	<div class="diary">
		<img src="{{ asset('/img/diary/1.png') }}" width="400" height="400" alt=""/>
		<img src="{{ asset('/img/diary/2.png') }}" width="400" height="400" alt=""/>
		<img src="{{ asset('/img/diary/3.png') }}" width="400" height="400" alt=""/>
		<img src="{{ asset('/img/diary/4.png') }}" width="400" height="400" alt=""/>
		<img src="{{ asset('/img/diary/5.png') }}" width="400" height="400" alt=""/>
		<img src="{{ asset('/img/diary/6.png') }}" width="400" height="400" alt=""/>
		<img src="{{ asset('/img/diary/7.png') }}" width="400" height="400" alt=""/>
		<img src="{{ asset('/img/diary/8.png') }}" width="400" height="400" alt=""/>
		<img src="{{ asset('/img/diary/9.png') }}" width="400" height="400" alt=""/>
	</div>
</div>
	<div class="box13">
    <p>MORE</p>
	</div>
<!-- 日記投稿終了　-->
<!-- 運営からのお知らせ　-->
	<div class="nakami">
		<p class="titele"><span>C</span>ORAM</p>
	</div>	
	<div class="coram">
		<p class="nen">2020.10.10</p>
		<p class="sirase">運営からのお知らせ運営からのお知らせ運営からのお知らせ運営からのお知らせ運営からのお知らせ運営からのお知らせ運営からのお知らせ運営からのお知らせ運営からのお知らせ運営からのお知らせ</p>
	</div>
	<div class="coram">
		<p class="nen">2020.10.10</p>
		<p class="sirase">運営からのお知らせ運営からのお知らせ運営からのお知らせ運営からのお知らせ運営からのお知らせ運営からのお知らせ運営からのお知らせ運営からのお知らせ運営からのお知らせ運営からのお知らせ</p>
	</div>
	<div class="coram">
		<p class="nen">2020.10.10</p>
		<p class="sirase">運営からのお知らせ運営からのお知らせ運営からのお知らせ運営からのお知らせ運営からのお知らせ運営からのお知らせ運営からのお知らせ運営からのお知らせ運営からのお知らせ運営からのお知らせ</p>
	</div><br>
	<div class="box13">
    <p>MORE</p>
	</div>
<!-- 運営からのお知らせ終了　-->
<!-- 全体中身終了 -->
<!-- フッター -->
<footer>

</footer>
<!-- フッター終了 -->



<!--- スライダースクリプト ------>
 <script type="text/javascript">
    $('.regular').slick({
    autoplay:true,
    autoplaySpeed:5000,
    dots:true,
    slidesToShow:4,
    responsive:[
        {
            breakpoint: 1024,
            settings:{
                slidesToShow:3,
            }
        },
        {
            breakpoint: 768,
            settings:{
                slidesToShow:2,
            }
        },
        {
            breakpoint: 480,
            settings:{
                slidesToShow:2,
            }
        },
    ]
});
</script>	
<!--- スライダースクリプト ------>
<!--- NAVIスクリプト ------>

<script>
(function($) {
    $(function() {
        var $header = $('#top-head');
        // Nav Fixed
        $(window).scroll(function() {
            if ($(window).scrollTop() > 350) {
                $header.addClass('fixed');
            } else {
                $header.removeClass('fixed');
            }
        });
        // Nav Toggle Button
        $('#nav-toggle').click(function(){
            $header.toggleClass('open');
        });
    });
})(jQuery);
</script>
	
<!--- NAVIスクリプト ------>








@endsection