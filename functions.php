<?php
// LEGG TIL I FUNCTIONSFILA PÅ TEMA

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {
    if( function_exists('acf_register_block_type') ) {
        // Row of CTA BOXES
        acf_register_block_type(array(
            'name'              => 'ctaboxline',
            'title'             => __('CTA Box Row'),
            'description'       => __('A Row of CTA Boxes.'),
            'render_template'   => 'blocks/ctaboxline.php',
            'category'          => 'formatting',
            'icon'              => 'welcome-widgets-menus',
            'keywords'          => array( 'CTA', 'box', 'hhri' ),
        ));
    }
}

?>