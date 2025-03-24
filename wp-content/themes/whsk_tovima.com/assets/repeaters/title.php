<?php if(get_field('front_title') ) { ?>
<?php the_field('front_title'); ?>
<?php } else { ?>
<?php the_title(); ?>
<?php } ?>