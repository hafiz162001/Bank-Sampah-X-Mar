<div id="brand-slider-container" class="carousel-wrapper">
	<header class="content-title">
		<div class="title-bg">
			<h2 class="title">Kegiatan dan Edukasi</h2>
		</div>{{-- End .title-bg --}}
	</header>
    @if (!$koperasis->isEmpty() && !$banks->isEmpty())
    <div class="carousel-controls">
        <div id="hot-items-slider-prev" class="carousel-btn carousel-btn-prev">
        </div>{{-- End .carousel-prev --}}
        <div id="hot-items-slider-next" class="carousel-btn carousel-btn-next carousel-space">
        </div>{{-- End .carousel-next --}}
    </div>{{-- End .carousel-controls --}}
    @endif
    <div class="sm-margin"></div>{{-- space --}}
    <div class="row">
    <div class="brand-slider owl-carousel">
        <div class="brand-item">
            <a href="#">
                <img src="{{ asset('img/patterns/edukasi.jpg') }}" alt="Logo">
                <p class="brand-text">Cara efektif mendaur ulang sampah </p>
            </a>
            </div>
            <a href="#">
                <img src="{{ asset('img/patterns/download.jpg') }}" alt="Logo">
                <p class="brand-text">Weekend Clean </p>
            </a>
     
    </div><!-- End .brand-slider -->
</div><!-- End .row -->
