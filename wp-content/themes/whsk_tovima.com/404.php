<?php get_header(); ?>

<main class="maxgridrow">
  <div class="wrap-page-four-ofour has-text-centered">
    <h1 class="zonaultra f-400 four-o-four-headline my-0">404</h1>
    <h2 class="zonaultra f-400 is-size-1-desktop is-size-3-tablet is-size-4-mobile my-0">PAGE NOT FOUND</h2>
    <div class="four-o-four-action">
      <a href="/" class="call-action-button yellow-button">Return to Homepage</a>
    </div>
  </div>
  
  <footer class="article-footer is-relative">
  <?php include(TEMPLATEPATH .'/assets/elements/latestnews.php'); ?>
  </footer>  
  
</main>

<style>
.wrap-page-four-ofour {
    margin: 6rem 0 4rem;
}  
.four-o-four-headline {
    font-size: 200px;
    line-height: 1;
}.four-o-four-action {
    margin-top: 4rem;
}  
  
@media screen and (max-width:1023px) {
.four-o-four-headline {font-size: 150px;line-height: 1}
}
  
@media screen and (max-width:767px) {
.four-o-four-headline {font-size: 100px; line-height: 1}
.wrap-page-four-ofour {margin: 7rem 0 10rem}
}
</style>

<?php get_footer(); ?>