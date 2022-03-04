<?php

/**
 *  CTA Box Line Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'ctaboxline-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'ctaboxline';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$boxes = get_field('boxes') ?: '';

?>

<section id="<?php echo esc_attr($id); ?>" class="ctaboxline-wrapper">
  <?php if($boxes) : ?>
    <?php foreach( $boxes as $box) : ?>
      <div class="ctabox" style="background-color: <?php output($box["background_color"]); ?>;">
        <div class="ctaboximage"><img src="<?php output($box["image"]["url"]); ?>" alt="<?php output($box["image"]["alt"]); ?>" /></div>
        <h2 class="ctaboxtitle overview-link" style="color: <?php output($box["text_color"]); ?>;"><?php output($box["title"]); ?></h2>
        <?php if($box["target"]) : ?>
        <a href="<?php output($box["target"]["url"]); ?>" target="<?php output($box["target"]["target"]); ?>" class="ctaboxlink">&nbsp;</a>
        <?php endif ?>
      </div>
    <?php endforeach ?>
  <?php else : ?>
    <p>Click Edit to Insert CTA Boxes</p>
  <?php endif ?>
</section>