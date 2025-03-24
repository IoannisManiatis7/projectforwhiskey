<?php 
  $menuarray = array(    
    array('title' => 'Politics', 'category' => 'politics'),
    array('title' => 'World', 'category' => 'world'),    
    array('title' => 'Society', 'category' => 'society'),    
    array('title' => 'Finance', 'category' => 'finance'),
    // array('title' => 'Tourism', 'category' => 'tourism'),
    array('title' => 'Culture', 'category' => 'culture'),
    array('title' => 'Travel', 'category' => 'travel'),
    array('title' => 'Climate', 'category' => 'climate'),
    array('title' => 'Opinions', 'category' => 'opinions'),
    array('title' => 'Stories', 'category' => 'stories'),
    array('title' => 'The Wall Street Journal', 'category' => 'wsj'),
//     array('title' => 'Sports', 'category' => 'sports'),    
//     array('title' => 'Celebrities', 'category' => 'celebrities'),
//     array('title' => 'Travel', 'category' => 'travel'),
//     array('title' => 'Food', 'category' => 'food'),    
//     array('title' => 'Videos', 'category' => 'videos'),
); ?>

<header id="identity" class="site-header 
<?php if(is_single() && get_field('locked_article')) { echo 'locked-post'; } if(is_single() && get_field('temp_layout') && (get_field('temp_layout') == 'art04')) { echo 'is-art-04'; } if(is_single() && get_field('temp_layout') && (get_field('temp_layout') == 'art03')) {echo 'mini-header'; } ?>">

<div class="dk-ad-checker-section is-hidden-touch">
<section id="dk-ad-sticky-toggle" class="dk-ad-area dk-ad-horizontal dk-ad-sticky-toggle">
    <div class="website-container">
        <div class="is-flex is-justify-content-center">
            <?php if(is_home()) { ?>
            <div id='970x90_top' class="dk-ad-content-check-dskt das-billboard--in"></div>
            <?php } elseif(!is_page('5-to-proi-subscription')) { ?>
            <div id='970x90_top' class="dk-ad-content-check-dskt das-billboard--in">
                <script>googletag.cmd.push(function() { googletag.display('970x90_top'); });</script>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
</div>
<style>
.dk-ad-sticky-toggle{padding:0;z-index:9;position:relative;width:100%;background:rgba(242,242,242,.7);transition: all .4s ease-out}
.dk-ad-close-cta{width:30px;aspect-ratio:1/1;display:flex;align-items:center;justify-content:center;position:absolute;top:20px;right:20px;border-radius:50%;background:#fff;border:none;display:none;cursor:pointer}
.dk-ad-close-cta svg{max-width:50%;height:auto}
.website-container{max-width:1320px;width:100%;margin:0 auto;padding: 0 12px}
</style>
    
    
  <div class="maxgridrow">
    <div class="header-top-row">
    <div class="columns level my-0 is-gapless is-mobile">
      <div class="column is-2-desktop is-3-touch">
        <div class="wrap-let-header">
        <div id="burger-item" class="burger-aria">
          <div class="burger-lines">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <span class="is-hidden-touch ml-4 burger-span">MENU</span>
        </div>
        <div class="news-icon">
         <span id="news-ico"></span> 
        </div>
        </div>
        
      </div>
      <div class="column is-2 has-text-centered hide-sticky is-hidden-touch ">
        <div class="current-date is-size-5 manrope f-500">
        <?php if(!is_page('print')) { ?>          
          <?php showCurrentDateTime(); ?>
          <?php } else { ?>
          <a href="/">Back on Top</a>
          <?php } ?>
        </div>
      </div>
      
      <div class="column is-4-desktop is-6-touch">
        <a href="/" class="main-logo is-block" title="tovima.com">
          <img src="/wp-content/themes/whsk_tovima.com/common/imgs/vimalogo.svg" alt="tovima.com" style="width:100%;">
        </a>
      </div>
      
      <div class="column is-4 has-text-centered is-hidden-touch">
        <?php /*
        <a href="https://www.wsj.com/" target="_blank" class="wsj-parter is-block" style="margin:0 auto;max-width:190px;line-height:0">
          <img style="max-width:100%;height:auto" alt="publishingPartnerWSJ" width="382" height="68" src="/wp-content/themes/whsk_tovima.com/common/imgs/publisherlogowsj.svg" />
        </a>
        */ ?>
      </div>
      
      <?php /*
      <div class="column is-2-desktop is-3-touch has-text-right">
        <div class="is-flex is-justify-content-flex-end">
        </div>
      </div>
      */ ?>
      
    </div>
  </div>
  </div>
  <nav class="is-hidden-touch" id="primary-menu">
    <div class="maxgridrow">
    <ul class="menu-wrapper">
      <?php foreach ($menuarray as $mitem) { ?>
      <li class="<?php if(isset($mitem['hasclass'])) {echo $mitem['hasclass']; } ?>">
        <a title="Read More about <?php echo $mitem['title']; ?>" href="/category/<?php echo $mitem['category']; ?>/"><?php echo $mitem['title']; ?></a>
      </li>
      <?php } ?>
<!--       <li class=""><a href="https://www.tovima.gr" target="_blank">Greek Edition</a></li> -->
    </ul>
    </div>
  </nav>
    
  <div id="LatestTop" style="padding-inline:15px;">
    <div class="tabcontent-header">
      <h2 class="header-section zonaultra f-400 is-size-2">Latest News</h2>
    </div>
    <div class="scroll-news">
      <ul class="wrapmininews">
      <?php
      $cc = 0;
      $eklogesnews = get_posts( 
      array(
      'numberposts' => 25, 
      'no_found_rows' => true, 'post_status' =>'publish', 'post_type' => array('post', 'printed_post'),
      'date_query' => array( array( 'after'  => '24 hours ago'))
      ));
      foreach($eklogesnews as $post) : setup_postdata($post); $cc++; ?>
      <li class="mini-headrow">
      <time><?php the_time('H:i'); ?></time>
      <a href="<?php the_permalink(); ?>">
        <h3 class="o-head"><?php the_title(); ?></h3>
      </a>
      </li>
      <?php endforeach; wp_reset_postdata(); ?>
      </ul>
  <div class="wrap-callaction">
    <a href="/latest-news/" class="call-action-button yellow-button">MORE</a>
  </div>
  </div>    
  </div>    
    
  <?php /* if(get_field('activated_elections', 'election_index')) { ?>    
  <div id="fixed-header">
  <ul class="tab-container">
    <li id="button-news">ΡΟΗ ΕΚΛΟΓΩΝ</li>
    <li id="button-p">ΠΕΡΙΦΕΡΕΙΕΣ</li>
    <li id="button-map">ΑΠΟΤΕΛΕΣΜΑΤΑ</li>
  </ul>

  <div class="tabcontentin" id="append__news">
  <div class="tabcontent-header">
  <h2 class="header-section zonaultra f-400 is-size-2">Ροή Εκλογών</h2>
  <div id="closenews">
    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="32" viewBox="0 0 34 32">
  <g id="closeButton" transform="translate(-357 18331)">
  <g id="Menu_Button_BG" data-name="Menu Button BG" transform="translate(358 -18330)" fill="#fff" stroke="#262626" stroke-width="1">
  <rect width="32" height="30" rx="4" stroke="none"/>
  <rect x="-0.5" y="-0.5" width="33" height="31" rx="4.5" fill="none"/>
  </g>
  <g id="Group_1143" data-name="Group 1143" transform="translate(368 -18321)">
  <rect id="Rectangle_628" data-name="Rectangle 628" width="1.624" height="16.244" transform="translate(11.486 0.001) rotate(45)"/>
  <rect id="Rectangle_629" data-name="Rectangle 629" width="1.624" height="16.244" transform="translate(12.635 11.486) rotate(135)"/>
  </g>
  </g>
  </svg>        
  </div>
  </div>
  <div class="scroll-news">
  <ul class="wrapmininews">
  <?php
  $cc = 0;
  $eklogesnews = get_posts( 
  array(
  'numberposts' => 15, 
  'tag' => 'ekloges-2023',
  'no_found_rows' => true, 'post_status' =>'publish', 'post_type' => array('post', 'printed_post'),
  'date_query' => array( array( 'after'  => WHSK_DATE_QUERY_UP))
  ));
  foreach($eklogesnews as $post) : setup_postdata($post); $cc++; ?>
  <li class="mini-headrow">
  <time><?php the_time('H:i'); ?></time>
  <a href="<?php the_permalink(); ?>">
    <h3 class="o-head"><?php the_title(); ?></h3>
  </a>
  </li>
  <?php endforeach; wp_reset_postdata(); ?>
  </ul>
  <div class="wrap-callaction">
    <a href="/tag/ekloges-2023/" class="call-action-button yellow-button">ΔΕΙΤΕ ΠΕΡΙΣΣΟΤΕΡΑ</a>
  </div>
  </div>
  </div>
  <div class="tabcontentin" id="append__nt">
  <div class="tabcontent-header">
  <h2 class="header-section zonaultra f-400 is-size-2">Περιφέρειες</h2>
  <div id="closenewsp">
    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="32" viewBox="0 0 34 32">
  <g id="closeButton" transform="translate(-357 18331)">
  <g id="Menu_Button_BG" data-name="Menu Button BG" transform="translate(358 -18330)" fill="#fff" stroke="#262626" stroke-width="1">
  <rect width="32" height="30" rx="4" stroke="none"/>
  <rect x="-0.5" y="-0.5" width="33" height="31" rx="4.5" fill="none"/>
  </g>
  <g id="Group_1143" data-name="Group 1143" transform="translate(368 -18321)">
  <rect id="Rectangle_628" data-name="Rectangle 628" width="1.624" height="16.244" transform="translate(11.486 0.001) rotate(45)"/>
  <rect id="Rectangle_629" data-name="Rectangle 629" width="1.624" height="16.244" transform="translate(12.635 11.486) rotate(135)"/>
  </g>
  </g>
  </svg>        
  </div>
  </div>
  <div class="scroll-news">
  <ul class="wrapmininews">
  <?php
  $cc = 0;
  $eklogespnews = get_posts( 
  array( 
  'numberposts' => 15, 
  'tag' => 'apotelesmata-eklogon-iouniou',
  'no_found_rows' => true, 'post_status' =>'publish', 'post_type' => array('post', 'printed_post'),
  'date_query' => array( array( 'after'  => WHSK_DATE_QUERY_UP))
  ));
  foreach($eklogespnews as $post) : setup_postdata($post); $cc++; ?>
  <li class="mini-headrow">
  <time><?php the_time('H:i'); ?></time>
  <a href="<?php the_permalink(); ?>">
    <h3 class="o-head"><?php the_title(); ?></h3>
  </a>
  </li>
  <?php endforeach; wp_reset_postdata(); ?>
  </ul>
  <div class="wrap-callaction">
    <a href="/tag/apotelesmata-eklogon-iouniou/" class="call-action-button yellow-button">ΔΕΙΤΕ ΠΕΡΙΣΣΟΤΕΡΑ</a>
  </div>
  </div>
  </div>
  <div class="tabcontentin" id="append__map">
    <div class="tabcontent-header">      
    <h2 class="header-section zonaultra f-400 is-size-2">Αποτελέσματα</h2>
    <div id="closemap">
      <svg xmlns="http://www.w3.org/2000/svg" width="34" height="32" viewBox="0 0 34 32">
    <g id="closeButton" transform="translate(-357 18331)">
    <g id="Menu_Button_BG" data-name="Menu Button BG" transform="translate(358 -18330)" fill="#fff" stroke="#262626" stroke-width="1">
    <rect width="32" height="30" rx="4" stroke="none"/>
    <rect x="-0.5" y="-0.5" width="33" height="31" rx="4.5" fill="none"/>
    </g>
    <g id="Group_1143" data-name="Group 1143" transform="translate(368 -18321)">
    <rect id="Rectangle_628" data-name="Rectangle 628" width="1.624" height="16.244" transform="translate(11.486 0.001) rotate(45)"/>
    <rect id="Rectangle_629" data-name="Rectangle 629" width="1.624" height="16.244" transform="translate(12.635 11.486) rotate(135)"/>
    </g>
    </g>
    </svg>        
    </div>        
    </div>
    <div class="scroll-news">      
    <div style="border:1px solid #A6A6A6">
    <iframe class="elections-map" src="https://ekloges.ypes.gr/current/v/home/index.html?lang=el&amp;refresh=1&amp;nav=1" width="100%" height="420" lazy=""></iframe></div>
    </div>
  </div>
  </div>
  <?php } */ ?>

  <?php if(is_home() || is_page() || is_archive() || is_single() && ( !in_array(get_field('temp_layout'), ['art03', 'art04'], true ) )) {
  $breakingvima = get_field('breaking_news', 'tovima_breaking');
  if($breakingvima) {
  $activebreaking = $breakingvima['breakingnews_checker'];
  $titlebreaking = $breakingvima['breakingnews_title'];
  $linkbreaking = $breakingvima['breakingnews_link']; if($breakingvima && $activebreaking) { ?>
  <div id="BreakingNews">
    <div class="maxgridrow">
      <div class="breaking-news-wrap">
      <div class="breaking-news-label">
        <dot></dot>BREAKING NEWS
      </div>
      <a class="breaking-news-link" href="<?php echo $linkbreaking; ?>">
        <?php echo $titlebreaking; ?>
      </a>
      </div>
    </div>
  </div>
  <?php } } } ?>
    
  <?php if(is_single()) { ?>
  <div class="is-hidden-small single-header-wrap">
    <div class="maxgridrow">
    <div class="single-header py-4">
      <div class="columns is-relative is-variable is-4-desktop level is-mobile">
      <div class="column is-2">
        <div class="wrap-post-category">
        <?php echo post_taxonomy(); ?>
        </div>
      </div>
      <div class="column is-8 has-text-centered">
        <span class="sticky-headline f-400 post-title zonaultra is-size-4-tablet"><?php the_title(); ?></span>
      </div>
      <div class="column is-2 has-text-right">
        
      </div>
    </div>
    </div>
    </div>
  </div>
  <div style="min-height:4px" class="is-visible-small is-relative anchor-scroll"></div>
  <?php } ?>
    
  <style>
#BreakingNews{background-color:#c00;padding:15px 0}
.breaking-news-wrap{display:flex;justify-content:center;align-items:center}
a.breaking-news-link{font-family:Vegabold;color:#fff;font-size:20px;letter-spacing:-.4px;line-height:23px;padding-left:15px;border-left:1px solid #fff;margin-left:15px}
.breaking-news-label{color:#fff;white-space:nowrap;font-family:Manrope;font-size:15px;line-height:1;font-weight:600;display:flex;align-items:center}
.breaking-news-label dot{animation:blinker 1.5s linear infinite;width:8px;height:8px;display:block;background-color:#fff;border-radius:100%;margin-right:1rem}
a.breaking-news-link:hover{text-decoration:underline}
@media (max-width:1023px){
.breaking-news-label{font-size:12px}
a.breaking-news-link{font-size:16px;line-height:1.2}
}
@media (max-width:767px){
.breaking-news-wrap{flex-wrap:wrap;justify-content:flex-start}
a.breaking-news-link{margin:0;border:none;padding-left:0}
.breaking-news-label{font-size:13px;width:100%;margin-bottom:10px}
a.breaking-news-link{font-size:18px}
}
@keyframes blinker{
50%{opacity:.2}
}
</style>
    
</header>

<?php if(is_home()) { ?>
<div id="tags-row">
  <div class="maxgridrow">
    <div class="tags__row_inner">
    <div class="tags__row_wrap_list">
      <ul class="tags__list">
      <li style="color: #CC0000;font-weight:600" class="manrope">TRENDING</li>
      <?php while ( have_rows('tags_rows', 'tovima_tags') ) : the_row();
      $tagname = get_sub_field('tagn_name'); 
      $tagsslug = get_sub_field('tag_link'); ?>
      <li class="manrope"><a href="<?php echo $tagsslug; ?>"><?php echo $tagname; ?></a></li>
      <?php endwhile; ?>
    </ul>
    </div>
    <div class="tags__row_end is-hidden-touch"></div>
    </div>
  </div>
</div>
<style>
#tags-row{background-color:#f5f5f5;margin-top:-22px;margin-bottom:22px}
#tags-row .tags__list{display:flex;justify-content:center;line-height:1}
.tags__list li{white-space:nowrap;font-size:13px;font-weight:700;letter-spacing:.13px;margin:0 9px;display:block;line-height:1}
.tags__list li:first-child{margin-left:0}
.tags__list li:last-child{margin-right:0}
.tags__list li a{color:#737373}
.tags__list li a:hover {color: var(--notblack)}
.tags__row_inner{padding:16px 0;display:flex;justify-content:space-between;align-items:center}
.tags__row_end,.tags__row_label{width:80px;line-height:1}
.tags__row_wrap_list{flex:1}
.tags__row_label{font-size:15px;color:#262626;font-weight:700;line-height:1} 
.tags__row_label span{font-size:14px;color:#262626;font-weight:700;line-height:1}
.tags__row_label span{margin-left:5px}  
  
@media screen and (max-width:1536px){
.tags__list li{margin:0 5.5px}
.tags__list li:first-child{margin-left:0}
.tags__list li:last-child{margin-right:0}  
}
  
@media screen and (max-width:1023px) {
#tags-row .tags__list{display:block;white-space:nowrap;overflow-x:scroll;overflow-y:hidden;width:100%;vertical-align:top;-webkit-overflow-scrolling:auto}
.tags__row_inner{padding:12px 0;align-items:baseline}
.tags__list li{margin:0 10px;font-size:14px;font-weight:500}
.tags__list li:first-child{margin-left:0}
.tags__list li:last-child{margin-right:10px}
.tags__list li{display:inline-block}
#tags-row .tags__list::-webkit-scrollbar{display:none}
#tags-row .maxgridrow {padding-right: 0}
.tags__row_wrap_list {flex: 1;width: calc(100% - 20px);display: block}
.tags__row_label {width: 20px;line-height: 0;}
.tags__row_label span {display: none}
}
</style>    
<?php } ?>