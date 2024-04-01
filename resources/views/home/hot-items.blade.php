<div class="hot-items carousel-wrapper">
	<header class="content-title">
		<div class="title-bg">
			<h2 class="title">Nilai Sampah Hari Ini</h2>
		</div>{{-- End .title-bg --}}
		<p class="title-desc"></p>
	</header>
    @if (!$goods_high->isEmpty())
    <div class="carousel-controls">
        <div id="hot-items-slider-prev" class="carousel-btn carousel-btn-prev">
        </div>{{-- End .carousel-prev --}}
        <div id="hot-items-slider-next" class="carousel-btn carousel-btn-next carousel-space">
        </div>{{-- End .carousel-next --}}
    </div>{{-- End .carousel-controls --}}
    @endif
	<div class="hot-items-slider owl-carousel">
        
           
                <div class="item item-hover">
                    <div class="item-image-wrapper">
                        <figure class="item-image-container">
                      
                            <img src="{{ asset('img/patterns/kard.jpg') }}" alt="Logo">

                            </a>
                        </figure>
                        <div class="item-price-container">
                            <span class="item-price">1,500/kg</span>
                        </div>{{-- End .item-price-container --}}
                    </div>{{-- End .item-image-wrapper --}}
                    <div class="item-meta-container">
                        <h3 class="item-name"></h3>
                        <div class="item-action">
   
                            </a>
                            {{-- <div class="item-action-inner">
                               
                            </div> --}}{{-- End .item-action-inner --}}
                        </div>{{-- End .item-action --}}
                    </div>{{-- End .item-meta-container  --}}
                </div>{{-- End .item --}}

                <div class="item item-hover">
                    <div class="item-image-wrapper">
                        <figure class="item-image-container">
                      
                            <img src="{{ asset('img/patterns/botok.jpg') }}" alt="Logo">

                            </a>
                        </figure>
                        <div class="item-price-container">
                            <span class="item-price">5,700/kg</span>
                        </div>{{-- End .item-price-container --}}
                    </div>{{-- End .item-image-wrapper --}}
                    <div class="item-meta-container">
                        <h3 class="item-name"></h3>
                        <div class="item-action">
   
                            </a>
                            {{-- <div class="item-action-inner">
                               
                            </div> --}}{{-- End .item-action-inner --}}
                        </div>{{-- End .item-action --}}
                    </div>{{-- End .item-meta-container  --}}
                </div>{{-- End .item --}}
	</div>{{-- hot-items-slider  --}}
</div>{{-- End .hot-items --}}