<?php                                             
if (get_post_type() == "printed_post") {
  if (empty(get_field('locked_article')) || isset($_COOKIE['premiumAids'])) {
  $thecook = explode(',', $_COOKIE['premiumAids']);
  if (empty(get_field('locked_article')) || in_array(35, $thecook) || in_array(36, $thecook)) {
  the_content();
  } else {
?>
<div class="restricted-content">
  <div class="first-paragraph is-relative">
<?php
$paragraphAfter = 0;
$paragraphAfter2 = 1;
$content = apply_filters('the_content', get_the_content());
$content = explode("</p>", $content);
for ($i = 0; $i < count($content); $i++ ) {
  
    if ($i == $paragraphAfter) {
    echo $content[$i];
    } elseif ($i == $paragraphAfter2 ) {
    echo $content[$i];
    } } ?> 
  </div>
  <?php include(TEMPLATEPATH .'/assets/single/restricted.php'); ?>
</div>
<?php }
  } else { // IF IS NOT LOCKED ?>
  <div class="restricted-content rc2">
    
    <div class="first-paragraph is-relative">
<?php
$paragraphAfter = 0;
$paragraphAfter2 = 1;
$content = apply_filters('the_content', get_the_content());
$content = explode("</p>", $content);
for ($i = 0; $i < count($content); $i++ ) {
  
    if ($i == $paragraphAfter) {
    echo $content[$i];
    } elseif ($i == $paragraphAfter2 ) {
    echo $content[$i];
    } } ?> 
    </div>
    
    <?php include(TEMPLATEPATH .'/assets/single/restricted.php'); ?>
    
  </div>

  <?php /*
  <div style="display:none" class="main-section">
    <?php the_content(); ?>
  </div>
  */ ?>

  <?php }
  } else { ?>

<?php 
$paragraphTwoAfter = 2;
  $content = apply_filters('the_content', get_the_content());
  $content = explode("</p>", $content);
  for ($i = 0; $i <count($content); $i++) {
  if ($i == $paragraphTwoAfter) { ?>

  <?php }
  echo $content[$i] /*. "</p>"*/;
}
?>
<div id="das-mmiddle-wp"></div>
<div id='300x250_middle' class="das-mmiddle">
<script>
googletag.cmd.push(function() { googletag.display('300x250_middle')})
</script>
</div>

<?php // } echo $content[$i]; } ?>

<?php } ?>