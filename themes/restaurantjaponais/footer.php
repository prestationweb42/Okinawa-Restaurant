<!-- Footer -->
<footer class="bg-dark text-light text-center text-md-start">
    <!-- Grid container -->
    <div class="container pt-5 pb-1">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <!-- <div class="col-12 col-md-6 px-3"> -->
            <div class="col-12 col-md-6 col-lg-8 px-3">
                <h4 class="text-uppercase text-center fs-3 playfair-font mb-3">Okinawa Restaurant</h4>
                <h5 class="text-uppercase fw-lighter">1183 Enobi, Uruma, Okinawa 904-2205, Japon</h5>
                <a href="tel:0123456789"
                    class="link-beige-custom fs-5 text-decoration-none">📳&nbsp;:&nbsp;+81989542021</a>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus libero, laborum odio incidunt
                    laboriosam sed repudiandae dicta quisquam autem mollitia.
                </p>
            </div>
            <!--Grid column-->
            <!-- <div class="col-12 col-md-3 mb-4 px-3"> -->
            <div class="col-12 col-md-3 col-lg-2 mb-4 px-3">
                <h5 class="text-uppercase text-center">news</h5>

                <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-center justify-content-lg-start align-items-center mb-2">
                        <!-- Facebook -->
                        <a class="btn btn-link btn-floating btn-lg text-light m-1" href="https://facebook.com"
                            role="button" data-mdb-ripple-color="dark" target="_blank"><i
                                class="fab fa-facebook"></i></a>
                        <span>Facebook</span>
                    </li>
                    <li class="d-flex justify-content-center justify-content-lg-start align-items-center">
                        <a class="btn btn-link btn-floating btn-lg text-light m-1" href="https://twitter.com"
                            role="button" data-mdb-ripple-color="dark" target="_blank"><i
                                class="fab fa-twitter"></i></a>
                        <span>Twitter</span>
                    </li>
                    <li class="d-flex justify-content-center justify-content-lg-start align-items-center">
                        <a class="btn btn-link btn-floating btn-lg text-light m-1" href="https://instagram.com"
                            role="button" data-mdb-ripple-color="dark" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <span>Instagram</span>
                    </li>
                    <li class="d-flex justify-content-center justify-content-lg-start align-items-center">
                        <a class="btn btn-link btn-floating btn-lg text-light m-1" href="https://linkedin.com"
                            role="button" data-mdb-ripple-color="dark" target="_blank"><i
                                class="fab fa-linkedin"></i></a>
                        <span>Linkedin</span>
                    </li>
                </ul>
            </div>
            <!--Grid column-->
            <!-- <div class="col-12 col-md-3 mb-4 px-3"> -->
            <div class="col-12 col-md-3 col-lg-2 mb-4 px-3">
                <h5 class="text-uppercase text-center mb-3">Navigation</h5>

                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'secondary',
                        'container' => 'ul', // afin d'éviter d'avoir une div autour 
                        'menu_class' => 'footer__menu', // ma classe personnalisée 
                    )
                ); ?>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <!-- <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);"> -->
    <div class="d-flex justify-content-center p-3 bg-darkGray">
        ©&nbsp;<span id="year"></span>&nbsp;Copyright&nbsp;-&nbsp;
        <p class="text-uppercase">all right reserved</p>
    </div>
    <!-- Copyright -->
</footer>
<?php wp_footer(); ?>
</main><!-- classe main -->
</body>

</html>