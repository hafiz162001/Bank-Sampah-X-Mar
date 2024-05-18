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
            <p class="brand-text cool-text">Metode Revolusioner untuk Mendaur Ulang Sampah</p>
        </a>
    </div>
    <div class="brand-item">
        <a href="#">
            <img src="{{ asset('img/patterns/download.jpg') }}" alt="Logo">
            <p class="brand-text cool-text">Aksi Bersih-Bersih Akhir Pekan</p>
        </a>
    </div>
</div>
<style>.cool-text {
    font-family: 'Arial', sans-serif; /* Gunakan font yang keren */
    font-size: 12px; /* Sesuaikan ukuran font */
    color: black; /* Warna teks hijau yang menarik */
    text-transform: uppercase; /* Teks menjadi huruf besar semua */
    font-weight: bold; /* Tebal */
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); /* Bayangan teks */
    letter-spacing: 1.5px; /* Spasi antar huruf */
    margin-top: 10px; /* Jarak atas */
}</style>