<?php 
if(is_page(array('5-to-proi-newsletter', '5-to-proi-subscription', 'vimatodotis-subscription', 'vimatodotis-newsletter'))) {
  include(get_template_directory() .'/newsletters/page-'.$post->post_name.'.php');
} else {
get_header(); ?>

<style>
  .page-title {margin-top:25px;margin-bottom:20px}
  .content-page{padding:0 12px;max-width:600px;margin:0 auto;position:relative}
  .content-page {padding-top: 1px}
  .page-body{font-size:18px;line-height:1.3;}
  .page-body p {margin: 20px 0}
  .page-body p a{text-decoration:underline}
</style>

<main class="maxgridrow">
<?php while ( have_posts() ) : the_post();  ?>
  
<div class="content-page">
  <h1 class='zonaultra f-400 page-title is-size-2 uppercase'><?php the_title(); ?></h1>  
  
  <?php if(is_page('xartis-apotelesmaton')) { ?>
    <div class="map-area"><iframe style="border:1px solid #A6A6A6" class="elections-map" src="https://ekloges.ypes.gr/current/v/home/index.html?lang=el&amp;refresh=1&amp;nav=1" width="100%" height="1000" lazy=""></iframe></div>
  <?php } ?>

  <div class="page-body">
    
      <?php if(is_page('taytotita')) { ?>


    <div class="idcontent">
    </div>

      <?php } else { ?>
      <?php the_content(); ?>
      <?php } ?>    
    
    <?php // the_content(); ?>
  </div>
  
</div>
<?php endwhile; ?>  
</main>

<?php get_footer(); ?>
<?php } ?>



<?php if(is_page('taytotita')) { ?>
<style>

.idcontent {
    max-width: 770px;
    margin: 0 auto 3rem;
    background-color: #f4f4f4;
    padding: 3rem;
}.idcontent p:last-child {
    margin-bottom: 0;
}.idcontent.blockone strong {
    font-size: 17px;
}
.content-page .page-title {
    text-align: center;
}  
</style>
<?php } ?>
