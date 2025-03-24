<?php if(get_field('podcast_field', 'tovimagr_podcast')) {
$postobject = get_field('podcast_chosen', 'tovimagr_podcast'); 
$podcover = get_field('podcast_cover', 'tovimagr_podcast'); 
$podname = get_field('podcast_title', 'tovimagr_podcast');
$podlink = get_field('podcast_link', 'tovimagr_podcast'); ?>
<div class="wrap-podcast wrap-wrap" style="background-color:#EBEEF5">
  <div class="maxgridrow">
  <div class="columns is-mobile is-multiline is-variable <?php echo VARIABLES; ?>">
  <div class="column is-narrow-desktop is-full-touch">
    <div class="rect-width">
      <div class="wrap-header-section">
        <a href="/category/podcasts/"><h2 class="header-section zonaultra f-400">PODCAST</h2></a>
      </div>
    </div>
  </div>
  <div class="column is-relative is-full-small">
    <div class="columns is-mobile is-multiline is-variable <?php echo VARIABLES; ?>">
      <div class="column is-narrow-tablet is-narrow-desktop is-full-small">
        <div class="podcast-cover">
          <?php if( $postobject ) { ?>
          <?php foreach( $postobject as $post): setup_postdata($post); ?>
          <a href="<?php the_permalink(); ?>">
          <?php endforeach; wp_reset_postdata(); ?>
          <?php } ?>
            
          <?php if($podcover) { ?>
            <img src="<?php echo esc_url($podcover['url']); ?>" width="400" height="400" alt="<?php echo esc_attr($podcover['alt']); ?>" />
          <?php } ?>
            
          <?php if( $postobject ) { ?>
          </a>
          <?php } ?>
        </div>
      </div>
      <div class="column is-relative podcast-col is-full-small">
        <div class="podcast-inner-col">
          
          <div class="podcast-inner-header">
            <?php if($podname && $podlink) { ?>
              <a href="<?php echo $podlink; ?>">
                <span class="manrope podcast-showname">
                  <?php echo $podname; ?>
                </span>
              </a>
            <?php } ?>
            
            <?php if( $postobject ) { ?>
            <?php foreach( $postobject as $post): setup_postdata($post); ?>
            <a href="<?php the_permalink(); ?>" class="is-block">
              <div class="podcast-post">
                <h3 class="zonaregular f-400">
                  <?php include(TEMPLATEPATH .'/assets/repeaters/title.php'); ?>
                </h3>
              </div>
            </a>
            <?php endforeach; wp_reset_postdata(); ?>
            <?php } ?>
          </div>
          
          <div class="inner-vpodcast-bottom">
            <div class="subscribe-area is-relative">
            <span class="subscribe-label">SUBSCRIBE <span class="dashicons dashicons-arrow-down-alt2"></span></span>
              <ul class="subscribe-options">
              <li><a class="polink" href="https://open.spotify.com/show/3Xh8RySTCpOC2MNdAmqUZ2">SPOTIFY</a></li>
              <li><a class="polink" href="https://podcasts.apple.com/gr/podcast/explaining-greece/id1796136507">APPLE PODCASTS</a></li>
              </ul>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</div>
<?php } ?>