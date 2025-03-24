<section id="" class="is-relative  home-section layout-onerow">
  <div class="wrap-section-columns">
    <div class="columns is-multiline is-variable is-4-desktop">
      <div class="column is-full is-hidden-fullwindow">
        <div class="columns is-mobile is-multiline is-variable is-4-desktop">
          <div class="column is-6-desktop is-8-mobile">
            <div class="wrap-header-section">
              <a target="_blank" href="https://www.vita.gr/">
                <h2 class="header-section zonaultra f-400 uppercase">ΥΓΕΙΑ ΚΑΙ ΕΥΕΞΙΑ</h2>
              </a>
              <div class="powered-wrap" style="clear:both">
                <span class="powered">powered by vita.gr</span>
              </div>
            </div>
          </div>
          <div class="column is-6-desktop is-4-mobile has-text-right">
            <a target="_blank" href="https://www.vita.gr/" class="manrope is-size-6 f-700 grey-c">VIEW ALL</a>
          </div>
        </div>
      </div>
      <div class="column is-visible-fullwindow is-narrow">
        <div class="rect-width full-height">
          <div class="wrap-header-section inner-fullwindow-items">
            <div class="top-items">
              <a target="_blank" href="https://www.vita.gr/">
                <h2 class="header-section zonaultra f-400 uppercase">ΥΓΕΙΑ ΚΑΙ ΕΥΕΞΙΑ</h2>
              </a>
              <div class="powered-wrap" style="clear:both">
                <span class="powered">powered by vita.gr</span>
              </div>
            </div>
            <div class="footer-items">
              <a target="_blank" href="https://www.vita.gr/" class="manrope is-size-6 f-700 grey-c">VIEW ALL</a>
            </div>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="columns onerow is-mobile is-multiline is-variable is-4-desktop">
          
          <?php
          $mcr = 0;
//           $vitagr = get_transient('vitagr');
//           if($vitagr === false) {
          $vitagrup = json_decode( file_get_contents('https://www.vita.gr/wp-json/wp/v2/posts'), true);
//           set_transient('vitagr', $vitagr, 800 );
//           }
          foreach($vitagrup as $post ) { $mcr++;
          if($mcr > 4) continue; ?>
          <div class="total_4 column is-3-desktop is-4-tablet is-4-mobile is-full-small ">
            <a href="<?php echo $post['link']; ?>" target="_blank" data-link-name="article" class="is-relative  relative-box">
              <div class="wrap-thumb">
                <figure style="background-color:#EEE;padding-bottom:100%" class="tile-image thumb-holder ">
                  <img loading="lazy" width="500" height="334" src="<?php echo $post['cwp_featured_medium']; ?>" class="imagefit wp-post-image" alt="">
                </figure>
              </div>
              <div class="tile-content">
                <div class="wrap-main-tile-content">
                  <div class="wrap-ohead">
                    <h3 class="o-head f-400 my-0 is-size-3 is-size-3-1-mobile zonabold">
                      <?php echo $post['title']['rendered']; ?>
                    </h3>
                  </div>
                </div>
                <div class="post-meta-wrapper">
                  <span class="is-block post-category manrope is-size-5 f-600"><?php echo $post['cwp_category']['0']['name']; ?>
                  </span>
                  <div class="post-meta"></div>
                </div>
              </div>
            </a>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>