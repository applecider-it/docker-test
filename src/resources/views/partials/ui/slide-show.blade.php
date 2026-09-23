<div class="swiper-container">
    <div class="swiper app-feature-swiper1">
        <div class="swiper-wrapper">
            @foreach ($list as $val)
                <div class="swiper-slide">
                    <Image src="{{ $val }}" alt="" class="mx-auto" />
                </div>
            @endforeach
        </div>

        <div class="swiper-pagination app-feature-swiper1-pagination"></div>
    </div>
</div>
