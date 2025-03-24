<?php
    $choises_ar = [];
    $choises = get_field('no_image', 'tovima_index');
    if($choises) {
    foreach($choises as $choise) {
    $choises_ar[] = intval(str_replace('nop', '', $choise));
    }
    }
    $cc = 0;
    $toprowposts = get_field('box8_selection','tovima_index');
    foreach($toprowposts as $post) : setup_postdata($post); $cc++;
    if($cc > 4) continue;
    $extraclass = null;
    if($cc == 1) {
    $extraclass = 'flex-article reverse-row vima-hero';
    $varsize = 'hero-size zonabold';        
    } else { 
    $varsize = 'is-size-3-1 is-size-3-1-mobile zonabold';
    }
    ?>
  <div class="<?php echo in_array($cc, $choises_ar) ? " nop " : " "; ?> column <?php if($cc == 1 ) {echo 'is-full'; } else {echo 'is-4-desktop is-4-tablet is-4-mobile is-full-small'; } ?>">
    <?php include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); ?>
  </div>

  <?php if($cc == 1) { ?>

  <?php if(get_field('mega_act', 'tovima_strmega') && get_field('activated_elections', 'election_index') === false) { ?>
  <div class="is-full column is-hidden-desktop" style="max-width:800px;margin:0 auto 20px">
    <div class="vima-box">
    <?php if(get_field('mega_t', 'tovima_strmega')) { ?>  
    <header class="vima-box-header">
      <h2 class="vimabox-tile zonaultra"><?php echo get_field('mega_t', 'tovima_strmega'); ?></h2>
    </header>
    <?php } ?>
    <div id="player_mob_id"></div>
    </div>
  </div>
  <?php } ?>

  <div class="is-hidden-tablet is-full column">
  <div class="mddl_home" id='300x250_middle_home'> 
    <script type='text/javascript'>
    googletag.cmd.push(function() { googletag.display('300x250_middle_home');})
    </script>
    </div>    
  </div>

  <?php } ?>


  <?php if($cc == 4) { ?>
    <div class="is-full column is-relative box-row is-visible-laptop">
      <?php include(TEMPLATEPATH .'/assets/elements/boxtop-one.php'); ?>
    </div>
  <?php } ?>

  <?php endforeach; wp_reset_postdata(); ?>

<style>
.tovimagr .video-js .vjs-big-unmute-button {font-size: 4rem}
  
</style>