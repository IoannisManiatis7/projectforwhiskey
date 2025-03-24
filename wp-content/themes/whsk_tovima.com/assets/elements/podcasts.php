<?php 
$podcastsarr = array(
  array('title' => 'ΤΟ ΒΗΜΑ ΣΗΜΕΡΑ', 'cat' => 'to-vima-simera-podcast', 'image' => 'toVimaCover.png', 'links' => array(
    array('name' => 'spotify', 'link' => 'https://open.spotify.com/show/41SMfCmPV0YrhIOnmSJbIN'),
    array('name' => 'Apple Podcast', 'link' => 'https://podcasts.apple.com/us/podcast/to-%CE%B2%CE%AE%CE%BC%CE%B1-%CF%83%CE%AE%CE%BC%CE%B5%CF%81%CE%B1/id1675115602'),
    array('name' => 'Google Podcast', 'link' => 'https://podcasts.google.com/feed/aHR0cHM6Ly9mZWVkcy5zaW1wbGVjYXN0LmNvbS8yeDRTZjFGdQ'),
  )),
  // array('title' => 'ΓΛΩΣΣΑ - ΓΛΩΣΣΑ', 'cat' => 'glossa-glossa', 'image' => 'glosa-cover.png', 'links' => array(
  //   array('name' => 'spotify', 'link' => 'https://open.spotify.com/show/7HzdkrGgw6WzwmCx16Rrm0'),
  //   array('name' => 'Apple Podcast', 'link' => 'https://podcasts.apple.com/gr/podcast/%CE%B3%CE%BB%CF%8E%CF%83%CF%83%CE%B1-%CE%B3%CE%BB%CF%8E%CF%83%CF%83%CE%B1/id1657458842'),
  //   array('name' => 'Google Podcast', 'link' => 'https://podcasts.google.com/feed/aHR0cHM6Ly9mZWVkcy5zaW1wbGVjYXN0LmNvbS9xcVBwZnpLbA'),
  // )),

  array('title' => 'ΒΑΒΕΛ', 'cat' => 'podcast-vavel', 'image' => 'vavel-cover.png', 'links' => array(
    array('name' => 'spotify', 'link' => 'https://open.spotify.com/show/1wthlYUkTr4IM8pWfGhYEy'),
    array('name' => 'Apple Podcast', 'link' => 'https://podcasts.apple.com/gr/podcast/%CE%B2%CE%B1%CE%B2%CE%AD%CE%BB/id1651100828'),
    array('name' => 'Google Podcast', 'link' => 'https://podcasts.google.com/feed/aHR0cHM6Ly9mZWVkcy5zaW1wbGVjYXN0LmNvbS9UQ0Q2ZHE1Sw'),
  )),

  array('title' => 'ΑΠΟ ΠΟΥ ΝΑ ΑΡΧΙΣΩ', 'cat' => 'apo-pou-na-arxiso', 'image' => 'apoPouNaArxiswV1.jpg', 'links' => array(
    array('name' => 'spotify', 'link' => 'https://open.spotify.com/show/00b5MOTQoqq3LXZxJ5hId5'),
    array('name' => 'Apple Podcast', 'link' => 'https://podcasts.apple.com/us/podcast/%CE%B1%CF%80%CF%8C-%CF%80%CE%BF%CF%85-%CE%BD%CE%B1-%CE%B1%CF%81%CF%87%CE%AF%CF%83%CF%89/id1692543246'),
    array('name' => 'Google Podcast', 'link' => 'https://podcasts.google.com/feed/aHR0cHM6Ly9mZWVkcy5zaW1wbGVjYXN0LmNvbS82ckZ1ZzRUVQ'),
  )),

); ?>

<div class="wrap-vimapostcasts">
  <div class="columns is-multiline is-variable is-4-desktop is-mobile">
    <div class="column is-full">
      <div class="wrap-header-section">
        <a href="/category/podcasts/"><h2 class="header-section zonaultra f-400">PODCASTS</h2> </a>
      </div>
    </div>
    <?php foreach ($podcastsarr as $parray) { ?>
    <?php
    $args = array(
    'numberposts' => 1,
    'tag' => $parray['cat'],
    'no_found_rows' => true,
    'post_status' =>'publish',
    'date_query' => array( array( 'after'  => '1 month ago' ))
    );
    $rowposts = get_posts( $args ); ?>
    <div class="column is-4-desktop is-full-tablet is-full-mobile">
      <div class="wrap-podcast-col">
        <div class="columns is-multiline is-variable is-4-desktop is-mobile">
        <div class="column is-narrow">
          <div class="vimapostcast-image">
            <?php foreach($rowposts as $post) : setup_postdata($post); ?>
            <a href="<?php the_permalink(); ?>">
              <img src="/wp-content/themes/whsk_tovima.com/common/imgs/pods/<?php echo $parray['image']; ?>" loading="lazy" width="200" height="200" alt="<?php echo $parray['title']; ?>" />
            </a>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="column is-relative">
          <div class="inner-vpodcast">
            <div class="inner-vpodcast-top">
            <a href="/tag/<?php echo $parray['cat']; ?>" title="<?php echo $parray['title']; ?>">
              <h4 class="line-height-1 is-size-5 my-0 vimapodcast-label f-700 manrope"><?php echo $parray['title']; ?></h4>
            </a>
            <?php foreach($rowposts as $post) : setup_postdata($post); ?>
            <a href="<?php the_permalink(); ?>">
              <h3 class="o-head f-400 zonabold vpodcast-title">
              <?php include(TEMPLATEPATH .'/assets/repeaters/title.php'); ?>
              </h3>
            </a>
            <?php endforeach; ?>
            </div>
            <div class="inner-vpodcast-bottom">
              <div class="subscribe-area is-relative">
              <span class="subscribe-label">SUBSCRIBE <span class="dashicons dashicons-arrow-down-alt2"></span></span>
              <ul class="subscribe-options">
                <?php foreach ($parray['links'] as $plink) { ?>
                <li><a class="polink" target="_blank" href="<?php echo $plink['link']; ?>"><?php echo $plink['name']; ?></a></li>
                <?php } ?>
              </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>

<style>
.wrap-vimapostcasts{margin-bottom:0;background:#f2f2f2;padding:25px}
.vimapostcast-image{width:196px}
.vimapostcast-image a {display: block;line-height: 0;border-radius: 5px;overflow: hidden}
.vimapostcast-image a img {width: 100%;height: auto}
.inner-vpodcast{display:flex;height:100%;flex-direction:column;justify-content:space-between}
.inner-vpodcast .o-head{margin:0;padding-top:15px}
.subscribe-options{padding:10px 8px;height:0;overflow:hidden;position:absolute;z-index:2;left:0;right:0;background:#fff;border:1px solid #3a55a6;max-width:125px;opacity:0;border-radius:4px;margin-top:2px;left:-1px;right:-1px}
.subscribe-area{border:1px solid #3a55a6;max-width:125px;border-radius:3px;padding:4px 8px;font-size:12px;font-family:Manrope;font-weight:700;color:#3a55a6}
.subscribe-area .subscribe-label{display:flex;line-height:1;align-items:center;justify-content:space-between}
.subscribe-area .subscribe-label .dashicons{font-size:15px;line-height:1;width:15px;height:15px}
.subscribe-area.active{background-color:#3a55a6}
.subscribe-area.active .subscribe-label{color:#fff}
.subscribe-area.active .subscribe-label .dashicons {transform: rotate(180deg)}
  
.subscribe-area.active .subscribe-options{height:auto;opacity:1}
.subscribe-options li{display:block;text-transform:uppercase;white-space:nowrap;font-weight:700;padding-bottom:10px}
.subscribe-options li:last-child{padding-bottom:0}
a.polink{color:#3a55A6B3}
a.polink:hover{color:#3a55a6;font-weight:800}
.inner-vpodcast-top a:hover .o-head {color: #595959}
.inner-vpodcast-top a:hover .vimapodcast-label {color: var(--darkblue)}

.vpodcast-title{font-size:22px}
@media screen and (max-width:1023px) {
.wrap-vimapostcasts {padding: 30px 0;margin:0 auto}
.vimapostcast-image{width:110px}
.inner-vpodcast .o-head {padding-top: 6px}
.wrap-vimapostcasts .header-section {padding-left: 20px;padding-bottom:5px}
.inner-vpodcast-top {margin-bottom: 10px}
.wrap-podcast-col {padding-inline:18px;border-bottom: 1px solid #DDD;padding-bottom: 15px;margin-bottom: 10px}
.wrap-vimapostcasts .column.is-4-desktop:last-child .wrap-podcast-col{padding-bottom:0;margin-bottom:0;border:none}
.vpodcast-title{font-size:20px}
}
@media screen and (max-width:767px) {
  .vpodcast-title{font-size:18px}
}
@media screen and (min-width:1023px) {
.subscribe-area:hover{background-color:#3a55a6}
.subscribe-area:hover .subscribe-label{color:#fff}
.subscribe-area:hover .subscribe-options{height:auto;opacity:1}
.subscribe-area:hover .subscribe-label .dashicons {transform: rotate(180deg)}
}
</style>