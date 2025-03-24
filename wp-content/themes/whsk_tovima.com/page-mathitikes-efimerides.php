<?php get_header(); ?>
<style>
.maths-wrap {margin:-0.75rem}
.maths-col {padding:0.75rem}
.wrap-category-name {width: 100%;margin-bottom:20px}  
.wrap-mtx-item {width:25%;max-width:245px}
.mathitikes-efimerides {
    margin: 0;
    line-height: 0;
    border: 1px solid #A6A6A680;
    margin-bottom: 15px;
}.mathitikes-efimerides img {
    width: 100%;
    height: auto;
}.mathitikes-efimerides {
    max-width: 245px;
}
.mtx_link {position: relative}
.action-message {
    opacity: 0;
    transition: all .3s ease;
    font-size: 12px;
    font-family: 'Manrope';
    font-weight: 800;
    border: 1px solid;
    line-height: 1;
    padding: 4px 10px;
    border-radius: 4px;
}
.category-name {
    font-size: 36px;
    border-bottom: 1px solid #ccc;
    padding-bottom: 8px;
    line-height: 1
}  
.mathitikes-efimerides .wrap-action-message{
    content: "";
    position: absolute;
    top:0;
    opacity:0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.55);
    display: block;
    transition:all 0.3s ease;
    display:flex;align-items:center;justify-content:center;
}  
  
.mtx_link:hover .mathitikes-efimerides .wrap-action-message{opacity:1;} 
.mtx_link:hover .mathitikes-efimerides .action-message{display:block;color:#fff;opacity:1}

  .mtx_desc {
    width: 100%;
    max-width: 1200px;
    margin: 0;
    font-size: 22px;
    line-height: 24px;
    margin-bottom: 20px;
}
  
@media screen and (max-width: 1023px) {
.mtx_desc {font-size:18px;line-height:22px}
.wrap-mtx-item {width:calc(100% / 3)}
}
  
@media screen and (max-width: 767px) {
.category-name {font-size: 30px}
.wrap-mtx-item {width:50%}
.mathitikes-efimerides {max-width: 245px;margin-bottom: 10px}
.mathitikes-efimerides .wrap-action-message {display:none}
.action-message {
    opacity: 1;
    line-height: 1;
    margin-top:1.2rem;
    display: inline-block;
}
}
</style>
<main class="maxgridrow">
  <div class="maths-wrap is-flex is-flex-wrap-wrap is-justify-content-space-between">
    
    <div class="maths-col wrap-category-name">
      <h1 class="category-name zonaultra f-400 mt-0 mb-0">Μαθητικές Εφημερίδες</h1>
    </div>
    <div class="maths-col" style="width:100%">
    <p class="mtx_desc zonabold">
      Το Βήμα δίνει τον λόγο σε σχολεία από όλη την Ελλάδα, φιλοξενώντας τις δικές τους εφημερίδες. Μαθητές Γυμνασίων και Λυκείων γίνονται για λίγο δημοσιογράφοι, μιλούν για τον τόπο τους, μοιράζονται τις αγωνίες και τα όνειρά τους και μαθαίνουν να ερευνούν, να κρίνουν και να δημοσιεύουν.      
    </p>
    </div>
    
    <?php if( have_rows('pubs_rpt', 'tovimagr_publications') ): 
    while( have_rows('pubs_rpt', 'tovimagr_publications') ) : the_row(); 
    $mtx_title = get_sub_field('pubs_title');
    $mtx_date = get_sub_field('pubs_date');    
    $mtx_link = get_sub_field('pubs_link');
    $mtx_image = get_sub_field('pubs_image');
    ?>
    <div class="wrap-mtx-item maths-col">
      <a class="mtx_link is-block" href="<?php echo $mtx_link; ?>">
      <figure class="mathitikes-efimerides is-relative">
        <img alt="<?php echo $mtx_title; ?>" src="<?php echo esc_url($mtx_image['url']); ?>" />
        <div class="wrap-action-message">
          <span class="action-message">ΔΕΙΤΕ VIEW ALL</span>
        </div>
      </figure>
      <h3 class="is-size-2-desktop is-size-3-mobile zonabold mt-0 mb-4"><?php echo $mtx_title; ?></h3>
      <span class="mtx_date is-size-5 manrope" style="color:#8C8C8C"><?php echo $mtx_date; ?></span>
        
      <div class="is-visible-small">
        <span class="action-message">ΔΕΙΤΕ VIEW ALL</span>
      </div>
        
      </a>
    </div>
    <?php endwhile; endif; ?>
  </div>
</main>
<?php get_footer(); ?>