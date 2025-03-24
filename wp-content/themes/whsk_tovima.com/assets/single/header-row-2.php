  <div class="wrap-article-header">
    <div class="columns is-multiline">
    <div class="column is-full is-relative">
      <div class="wrap-post-category is-relative">
        <span class="article-label uppercase"><?php echo post_taxonomy(); ?></span>
        <a href="/category/opinions/" class="is-hidden-small all-opinions">All Articles</a>
      </div>
    </div>
    <div class="column is-full">
      <header class="article-header">
        <h1 class="post-title zonareg is-size-0 is-size-2-mobile is-size-2-tablet f-400"><?php the_title(); ?></h1>
        
        <div class="opinions-author mt-5 mb-2">
          <?php include(TEMPLATEPATH.'/assets/repeaters/author.php'); ?>
        </div>
        
      </header>
    </div>
    </div>
  </div>