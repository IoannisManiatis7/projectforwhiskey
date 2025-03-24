<section class="popular-width <?php if(is_single()) {echo ' mt-6 inner-section'; } ?> <?php if(is_home()) {echo 'pt-0'; } ?>">
  <div class="inner-section-flex">
    <div class="columns is-multiline is-variable <?php echo VARIABLES; ?>">
  
    <div class="column is-full is-hidden-fullwindow">
      <h2 class="header-section zonaultra f-400 popular-title">ΔΗΜΟΦΙΛΗ</h2>    
    </div>
  
  <div class="column is-visible-fullwindow is-narrow">
    <div class="sidebar-width">
      <h2 class="header-section zonaultra f-400 popular-title">ΔΗΜΟΦΙΛΗ</h2>    
    </div>
  </div>
  
  <div class="column">
    <?php 
//     $chartbeat = get_transient('chartbeat');
//     if($chartbeat === false) {
    $pop_page = json_decode( file_get_contents('https://www.tovima.gr/wp-content/uploads/json/toppages.json'), true)['pages'];
    $pop = array();
    foreach($pop_page as $pp){
      if(isset($pp['stats']['type']) && $pp['stats']['type'] === 'Article' && count($pop) < 10) {
        $pop[] = $pp;
      }
    }
//    set_transient('chartbeat', $chartbeat, 7200 );
//   }
    ?>
    
    <div class="flex-pops">    
    <?php $cc = 0; foreach($pop as $popitem) { $cc++; ?>
      <?php // if($popitem['stats']['type'] === 'Article') { ?>
      <div class="pop-item">
        <div class="columns is-mobile level">
      <div class="column is-2-desktop is-2-touch">
        <span class="big-number"><?php echo $cc; ?></span>
      </div>
      <div class="column is-10-desktop is-10-touch">
        <div class="wrap-popular-link">
          <a href="https://www.<?php echo $popitem['path']; ?>">
            <?php
            $poptitle = str_replace(' - Ειδήσεις - νέα - Το Βήμα Online', '', $popitem['title']); 
            $poptitle = str_replace(' - ΤΟ ΒΗΜΑ', '', $popitem['title']);
            $poptitle = str_replace(' - ΤΟ ΒΗΜ', '', $poptitle);
            $poptitle = str_replace(' - ΤΟ ΒΗ', '', $poptitle);
            $poptitle = str_replace(' - ΤΟ Β', '', $poptitle);
            $poptitle = str_replace(' - ΤΟ ', '', $poptitle);
            $poptitle = str_replace(' - Τ', '', $poptitle);
            ?>
            <h3 class="my-0 o-head f-400 is-size-4 zonabold"><?php echo $poptitle; ?></h3>
          </a>
        </div>
      </div>
      </div>
      </div>
      <?php // } ?>
    <?php } ?>
    </div>
    
  </div>
  
</div>
  </div>
</section>