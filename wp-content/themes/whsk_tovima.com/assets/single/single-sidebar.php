<?php if(get_field('mega_act', 'tovima_strmega')) { ?>
<div class="sidebar-stream mb-5">          
<div class="sticky-player vima-box">
<div class="sticky-player-inner">
<span id="close-player"></span>   
<?php if(get_field('mega_t', 'tovima_strmega')) { ?>  
<header class="vima-box-header">
<h2 class="vimabox-tile zonaultra"><?php echo get_field('mega_t', 'tovima_strmega'); ?></h2>
</header>
<?php } ?>
<div class="videow-wrap">
<div class="videow">      
<div id="player_div_id"></div>
</div>
</div>
</div>
</div>
</div>
<?php } ?>

<div class="is-hidden-touch sidebar-sticky is-relative">
  <div id="300x250_r1" class="sticky-item das-r1 das-r1--in">
    <script type="text/javascript">googletag.cmd.push(function() { googletag.display('300x250_r1'); });</script>
  </div>
</div>

<?php if($temp_layout != 'art03') { include(TEMPLATEPATH .'/assets/single/mustread.php'); } ?>


<div id='300x250_r2' class="sticky-item das-r1 das-r1--in">
  <script type="text/javascript">googletag.cmd.push(function() { googletag.display('300x250_r2'); });</script>    
</div>

<div class="wrap-latest is-hidden-touch sticky-item">
  <div id='300x250_r3' class=" das-r3 das-r3--in">
    <script type="text/javascript">googletag.cmd.push(function() { googletag.display('300x250_r3'); });</script>    
  </div>
</div>