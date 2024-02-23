<section id="slider-section" class="bg-beige-custom min-vh-95 py-5 d-none d-sm-block">
    <div class="container">
        <h2 class="playfair-font display-3 text-dark text-center mb-5">Our Best Dishes</h2>
        <div id="carouselImgFade" class="carousel slide carousel-fade w-66 mx-auto" data-bs-ride="carousel" data-bs-interval="2000" data-bs-pause="false">
            <div class="carousel-inner">
                <div class="carousel-item active h-100">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/reservation-1.jpg' ?>" class="d-block h-100 w-100 object-fit-cover" alt="...">
                    <div class="carousel-caption rounded-pill px-2" style="background-color: rgba(0, 0, 0, 0.5);">
                        <h5>Title Slide 1</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro vel recusandae consequatur
                            perspiciatis odit nisi laudantium soluta expedita ex.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/reservation-2.jpg' ?>" class="d-block h-100 w-100 object-fit-cover" alt="...">
                    <div class="carousel-caption rounded-pill px-2" style="background-color: rgba(0, 0, 0, 0.5);">
                        <h5>Title Slide 2</h5>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro vel perspiciatis odit nisi
                            laudantium soluta expedita ex.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/reservation-3.jpg' ?>" class="d-block h-100 w-100 object-fit-cover" alt="...">
                    <div class="carousel-caption rounded-pill px-2" style="background-color: rgba(0, 0, 0, 0.5);">
                        <h5>Title Slide 3</h5>
                        <p>Lorem, ipsum dolor sit elit. Porro vel recusandae consequatur
                            perspiciatis odit nisi laudantium soluta expedita ex.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselImgFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselImgFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselImgFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/reservation-1.jpg' ?>" alt="">
                </button>
                <button type="button" data-bs-target="#carouselImgFade" data-bs-slide-to="1" aria-label="Slide 2">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/reservation-2.jpg' ?>" alt="">
                </button>
                <button type="button" data-bs-target="#carouselImgFade" data-bs-slide-to="2" aria-label="Slide 3">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/reservation-3.jpg' ?>" alt="">
                </button>
            </div>
        </div>
    </div>


</section>