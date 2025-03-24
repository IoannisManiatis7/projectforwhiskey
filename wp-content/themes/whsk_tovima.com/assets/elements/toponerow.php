<?php 
if(is_home()) {
  $varfield = 'tovima_index';
} elseif(is_page('print')) {
  $varfield = 'tovimaprint_index';
}
$monorow = get_field('monorow_home', $varfield);
$monorow_upper = $monorow['monorow_upper'];
$monorow_title = $monorow['monorow_title'];
$monorow_excerpt = $monorow['monorow_excerpt'];
$monorow_link = $monorow['monorow_link'];
$monorow_link = str_replace('wp.mgmt.', 'www.', $monorow_link);
?>
<?php if($monorow_title) { ?>
<div class="column is-full">
<div class="mono-row-post has-text-centered">
  <?php if($monorow_upper) { ?>
  <span style="color:#3A55A6" class="is-block  f-800 manrope mono-row-post-sub uppercase">
    <?php echo $monorow_upper; ?>
  </span>
  <?php } ?>
  <a href="<?php echo $monorow_link; ?>" class="is-relative mono-row-link is-block" data-link-name="article">
    <h3 class="o-head is-extra-large f-400 mono-row-post-main my-0">
    <?php echo $monorow_title; ?>
    </h3>
  </a>
  <?php if($monorow_excerpt) { ?>  
  <p class="manrope f-500 monorow-lead mt-4 mb-0 line-height-1"><?php echo $monorow_excerpt; ?></p>
  <?php } ?>
</div>
</div>
<?php } ?>