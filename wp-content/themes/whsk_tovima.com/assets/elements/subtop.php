<?php
$i = 0;
$cc = 4;
$topl_lead =  get_field('box8_selection','tovima_index', false);
$topl_query = new WP_Query(array(
'posts_per_page'  => 3, 'offset' => 4, 'post_type' => array('post', 'printed_post'),
'post__in' => $topl_lead, 'post_status'  => 'publish', 'orderby' => 'post__in',
)); ?>
<?php while ( $topl_query->have_posts() ) : $topl_query->the_post(); $i++; $cc++;
$extraclass = null;
$varsize = 'is-size-3-1 zonabold';
?>
<div class="column is-4-desktop is-4-tablet is-4-mobile is-full-small <?php echo in_array($cc, $choises_ar) ? " nop " : " "; ?>">
<?php include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); ?>
</div>
<?php endwhile; wp_reset_postdata(); ?>