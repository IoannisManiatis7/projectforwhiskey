<a href="<?php the_permalink(); ?><?php echo URL; ?>" data-link-name="article" class="is-relative vertical-abs">
  <div class="wrap-thumb">
  <figure class="tile-image thumb-holder">
    <?php the_post_thumbnail('medium', array( 'alt' => get_the_title(), 'class' => 'imagefit')); ?> 
  </figure>
  </div>
  <div class="abs-sand">
    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="17" viewBox="0 0 22 17">
      <g id="Group_1032" data-name="Group 1032" transform="translate(-878.578 -926.792)">
        <g id="Group_1033" data-name="Group 1033" transform="translate(878.578 926.792)">
          <g id="Group_1032-2" data-name="Group 1032">
            <path id="Path_121" data-name="Path 121" d="M895.214,943.792h-4.789l3.873-7.719h-3.728v-9.281h10.007V935.1Zm-4.029-.468h3.767l5.156-8.358V927.26H891.04v8.345h4.018Zm-7.879.468h-4.728l3.815-7.719h-3.73v-9.281H888.67V935.1Zm-3.974-.468h3.711l5.156-8.358V927.26h-9.068v8.345h4.016Z" transform="translate(-878.578 -926.792)" fill="#fff"/>
          </g>
        </g>
      </g>
    </svg>    
    <h3 class="o-head f-400 my-0 <?php echo $varsize; ?>">
      <?php include(TEMPLATEPATH .'/assets/repeaters/title.php'); ?>
    </h3>
    <?php if(get_field('hypertext')) { ?>
    <span class="interviewer"><?php echo get_field('hypertext'); ?></span>
    <?php } ?>
  </div>
</a>