<!--BIG MAGAZINO --> 
<?php 
$vimagazino_bigart = get_field('vimagazino_bigart', 'tovima_vimagazino');
if($vimagazino_bigart) {
$vimagazino_group = get_field('vimagazino_group', 'tovima_vimagazino');
$vimagazino_bgcolor = $vimagazino_group['vimagazino_bg'];
$vimagazino_headline = $vimagazino_group['vimagazino_headline'];
$vimagazino_hdcolor =  $vimagazino_group['vimagazino_bigcolor'];  
$vimagazino_issuetext =  $vimagazino_group['vimagazino_issuetext'];  
$vimagazino_textlabel =  $vimagazino_group['vimagazino_textlabel'];
$vimagazino_desc = $vimagazino_group['vimagazino_desc'];
$vimagazino_txt_color =  $vimagazino_group['vimagazino_texthover_color'];
$vimagazino_sectlink = $vimagazino_group['vimagazino_sectlink'];
$vimagazino_txlink = $vimagazino_group['vimagazino_txlink'];
$vimagazino_box = $vimagazino_group['vimagazino_box'];
$def_under = $vimagazino_group['def_under'];
$vimagazino_paper = $vimagazino_group['vimagazino_paper'];
$vimagazino_sec_image = $vimagazino_group['vimagazino_sec_image'];
$vimagazino_dark = $vimagazino_group['vimagazino_darklight'];
  

if($vimagazino_txt_color) {
  $vartxtcolor = $vimagazino_txt_color;
} else {
  $vartxtcolor = '#EDD8CA';
}

if($vimagazino_txlink) {
  $vartxlink = $vimagazino_txlink;
} else {
  $vartxlink = 'VIEW ALL';
}

if($vimagazino_sectlink) {
  $varsclink = $vimagazino_sectlink;
} else {
  $varsclink = '/vimagazino/';
}

?>
<style>
.vimagazino-action a.dark-action  {color:#000}
.vimagazino-action a.dark-action:hover,
.vimagazino-action a:hover,
.wrap-magazino-item .relative-box:hover .o-head,
.wrap-magazino-item.bright-color .relative-box:hover .o-head {color:<?php echo $vartxtcolor; ?>}
.bright-color .white-c {color: var(--notblack)}
.vimagazino-cols .bright-color .relative-box .tile-content .post-meta-wrapper .vima-author,
.vimagazino-cols .bright-color .post-description {color: #222}
</style>
<div class="wrap-vimagazino" <?php if($vimagazino_bgcolor) { echo 'style="background-color:'.$vimagazino_bgcolor.'"'; } ?>>
  <div class="wrap-vimagazino-inner">
    
  <div class="maxgridrow">    
  <div class="columns is-mobile level">
    <div class="column is-hidden-desktop is-3-mobile is-3-tablet is-hidden-small">
    <?php if($vimagazino_issuetext) { ?>
    <div class="issue-number-item">
      <span class="issue-number manrope is-size-5 f-600" style="color:<?php echo $vartxtcolor; ?>">
        <?php echo $vimagazino_issuetext; ?>
      </span>
    </div>
    <?php } ?>
  </div>
    <div class="column is-6-tablet is-6-mobile is-full-small is-full-desktop">
    <div class="vimagazino-logo">
    <a href="/vimagazino/">
      <?php if($vimagazino_dark) { ?>
      <img alt="vimagazino" width="305" height="67" loading="lazy" src="/wp-content/themes/whsk_tovima.com/common/imgs/vimagazino-black.svg" />
      <?php } else { ?>
        <img alt="vimagazino-white.svg" width="305" height="67" loading="lazy" src="/wp-content/themes/whsk_tovima.com/common/imgs/vimagazino-white.svg" />
      <?php } ?>
    </a>
    </div>
    </div>    
    <div class="column is-hidden-desktop is-3-mobile is-3-tablet is-hidden-small">
    <?php if($vimagazino_textlabel) { ?>
    <div class="issue-desc-item">        
    <span class="issue-desc manrope is-size-5 f-600" style="color:<?php echo $vartxtcolor; ?>">
     <?php echo $vimagazino_textlabel; ?>
    </span>
    </div>
    <?php } ?>
  </div>    
  </div>
  </div>
    
  <div class="wrap-vimagazino-label is-hidden-touch">
    <?php if($vimagazino_headline) { ?>
    <h3 class="vimagazino-label" <?php if($vimagazino_hdcolor) { echo 'style="color:'.$vimagazino_hdcolor.'"'; } ?>>
      <?php echo $vimagazino_headline; ?>
    </h3>
    <?php } ?>
  </div>
  
  <div class="maxgridrow">
    <div class="columns is-mobile is-underored-flex is-variable is-multiline <?php echo VARIABLES; ?>">
      
      <div class="left-s column is-4-desktop is-hidden-touch is-half-small is-visible-small">
        <?php if($vimagazino_issuetext) { ?>
        <div class="issue-number-item">
          <span class="issue-number manrope is-size-5 f-600" style="color:<?php echo $vartxtcolor; ?>">
            <?php echo $vimagazino_issuetext; ?>
          </span>
        </div>
        <?php } ?>
      </div>
      
      <div class="middle-s column is-4-desktop is-12-mobile is-12-tablet is-12-mobile is-full-small">
        <div class="inner-middle-s">
        <div class="wrap-vimagazino-label is-hidden-desktop">
          <?php if($vimagazino_headline) { ?>
            <h3 class="vimagazino-label" <?php if($vimagazino_hdcolor) { echo 'style="color:'.$vimagazino_hdcolor.'"'; } ?>>
              <?php echo $vimagazino_headline; ?>
            </h3>
          <?php } ?>
        </div>
        
        <div class="wrap-vimagazino-covers">
        <div class="wrap-issue">
          <a href="<?php echo $varsclink; ?>" class="is-block">
            <?php if($vimagazino_paper) { ?>
            <img alt="vimagazino-paper" width="<?php echo esc_attr($vimagazino_paper['width']); ?>" height="<?php echo esc_attr($vimagazino_paper['height']); ?>" loading="lazy" src="<?php echo esc_url($vimagazino_paper['url']); ?>" />
            <?php } ?>
          </a>
        </div>
        <div class="wrap-issue-page">
          <a href="<?php echo $varsclink; ?>" class="is-block">
            <?php if($vimagazino_sec_image) { ?>
            <img alt="vimagazino-paper" width="<?php echo esc_attr($vimagazino_sec_image['width']); ?>" height="<?php echo esc_attr($vimagazino_sec_image['height']); ?>" loading="lazy" src="<?php echo esc_url($vimagazino_sec_image['url']); ?>" />
            <?php } ?>
          </a>
        </div>
        </div>
        <?php if($vimagazino_desc) { ?>
        <span class="issue-long-desc zonareg is-size-normal" style="color:<?php echo $vartxtcolor; ?>">
          <?php echo $vimagazino_desc; ?>
        </span>
        <?php } ?>
        
        <div class="vimagazino-action">
          <?php if($vimagazino_dark) { ?>
          <a class="dark-action" href="<?php echo $varsclink; ?>"><?php echo $vartxlink; ?></a>
          <?php } else { ?>
          <a href="<?php echo $varsclink; ?>"><?php echo $vartxlink; ?></a>
          <?php } ?>
        </div>

        </div>
      </div>
      
      <div class="right-s column is-4-desktop is-hidden-touch is-half-small is-visible-small">
        <?php if($vimagazino_textlabel) { ?>
        <div class="issue-desc-item">        
        <span class="issue-desc manrope is-size-5 f-600" style="color:<?php echo $vartxtcolor; ?>">
         <?php echo $vimagazino_textlabel; ?>
        </span>
        </div>
        <?php } ?>
      </div>
      
    </div>
  </div>
  
  <?php if($vimagazino_box) { ?>
  <div class="maxgridrow">
    <div class="wrap-vimagazino-cols">
    <div class="vimagazino-cols columns is-mobile onerow is-variable is-multiline is-size-10-fullhd">
      <?php
      $cc = 0;
      $rowposts = get_field('box4_selection','tovima_vimagazino');
      foreach($rowposts as $post) : setup_postdata($post); $cc++;
      $varsize = 'is-size-3-1 white-c zonabold is-size-3-1-mobile'; 
      ?>
      <div class="column is-3-desktop is-half-tablet is-half-mobile is-full-small">
        <div class="wrap-magazino-item <?php if($vimagazino_dark) { echo 'bright-color'; } ?>">
        <?php include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); ?>
        </div>
      </div>
      <?php endforeach; wp_reset_postdata(); ?>
    </div>
    </div>
  </div>
  <?php } ?>
    
    
  </div>
</div>

<?php if($def_under) { ?>
<?php include(TEMPLATEPATH .'/assets/home/layouts/vimag-normal.php'); ?>
<?php } ?>

<?php } else { ?>
<?php include(TEMPLATEPATH .'/assets/home/layouts/vimag-normal.php'); ?>
<?php } ?>