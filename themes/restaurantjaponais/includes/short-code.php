<?php
function slider_shortcode_function()
// Le contenu que vous souhaitez afficher lorsque le shortcode est utilisé
{

    ob_start();
    get_template_part('template-parts/menu/slider-section');
    $output = ob_get_contents();
    ob_end_clean();
    // Slider Section
    // return get_template_part('template-parts/menu/slider-section');
    return $output;
}
add_shortcode('slider_shortcode', 'slider_shortcode_function');

// short code Reservation
function reservation_shortcode_function()
{

    ob_start();
    get_template_part('template-parts/reservation/reservation-section');
    $output = ob_get_contents();
    ob_end_clean();
    // Slider Section
    // return get_template_part('template-parts/menu/slider-section');
    return $output;
}
add_shortcode('reservation_shortcode', 'reservation_shortcode_function');
