<div class="container-md" data-aos="fade-in">
    <div class="row">
        <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
                <div class="swiper-wrapper">
                    <?php foreach ($recents as $recent): ?>
                    <div class="swiper-slide">
                        <a href="/post/<?php echo $recent->slug ?>" class="img-bg d-flex align-items-end" style="background-image: url('<?php echo $recent->image ?>');">
                            <div class="img-bg-inner">
                                <h2><?php echo $recent->title ?></h2>
                                <p><?php echo word_limiter($recent->description, 50) ?></p>
                            </div>
                        </a>
                    </div>
                    <?php endforeach ?>
                </div>
                <div class="custom-swiper-button-next">
                    <span class="bi-chevron-right"></span>
                </div>
                <div class="custom-swiper-button-prev">
                    <span class="bi-chevron-left"></span>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>