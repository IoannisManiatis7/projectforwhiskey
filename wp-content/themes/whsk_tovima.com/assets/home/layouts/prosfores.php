<div class="columns onerow is-multiline is-variable <?php echo VARIABLES; ?>">
<?php if(get_field('active_offers','tovima_οffers')) {
$prosforestitle = get_field('offerstitle', 'tovima_οffers');  
$prosforeslink = get_field('url_προσφορών', 'tovima_οffers');
$prosforesimageD = get_field('offers_imageDesktop', 'tovima_οffers');
$prosforesimageL = get_field('offers_imageLaptop', 'tovima_οffers');
$prosforesimageT = get_field('offers_imageTablet', 'tovima_οffers');
$prosforesimageM = get_field('offers_imageMobile', 'tovima_οffers');
?>
<div id="offer1" class="column is-full is-relative">
<section class="inner-section">
  <div class="inner-section-flex">
    <a title="<?php echo $prosforestitle; ?>" href="<?php echo $prosforeslink; ?>" class="is-block">
      <picture>
        <source media="(max-width:767px)" srcset="<?php echo $prosforesimageM; ?>" />
        <source media="(max-width: 1023px)" srcset="<?php echo $prosforesimageT; ?>" />
        <source media="(max-width: 1550px)" srcset="<?php echo $prosforesimageL; ?>" />
        <source media="(min-width: 1550px)" srcset="<?php echo $prosforesimageD; ?>" />
        <img loading="lazy" alt="<?php echo $prosforestitle; ?>" src="<?php echo $prosforesimageM; ?>" width="1574" height="300" style="width: 100%; height: auto;" />
      </picture>
    </a>
  </div>
</section> 
</div> 
<?php } ?> 

<?php if(get_field('active_offers_2','tovima_οffers')) {
$prosforestitle2 = get_field('offerstitle_2', 'tovima_οffers');  
$prosforeslink2 = get_field('url_προσφορών_2', 'tovima_οffers');
$prosforesimageD2 = get_field('offers_imageDesktop_2', 'tovima_οffers');
$prosforesimageL2 = get_field('offers_imageLaptop_2', 'tovima_οffers');
$prosforesimageT2 = get_field('offers_imageTablet_2', 'tovima_οffers');
$prosforesimageM2 = get_field('offers_imageMobile_2', 'tovima_οffers');
?>
<div id="offer2" class="column is-full is-relative hide-el">
<section class="inner-section">
  <div class="inner-section-flex">
    <a title="<?php echo $prosforestitle2; ?>" href="<?php echo $prosforeslink2; ?>" class="is-block">
      <picture>
        <source media="(max-width:767px)" srcset="<?php echo $prosforesimageM2; ?>" />
        <source media="(max-width: 1023px)" srcset="<?php echo $prosforesimageT2; ?>" />
        <source media="(max-width: 1550px)" srcset="<?php echo $prosforesimageL2; ?>" />
        <source media="(min-width: 1550px)" srcset="<?php echo $prosforesimageD2; ?>" />
        <img loading="lazy" alt="<?php echo $prosforestitle2; ?>" src="<?php echo $prosforesimageM2; ?>" width="1574" height="300" style="width: 100%; height: auto;" />
      </picture>
    </a>
  </div>
</section> 
</div> 
<?php } ?> 
</div>