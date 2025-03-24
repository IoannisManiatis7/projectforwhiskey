<div class="column is-full">
  
<div class="columns onerow is-multiline is-variable <?php echo VARIABLES; ?>">
  
<div class="column is-full-mobile is-full-small">
  <div class="uppertop">
  <div class="columns onerow is-multiline is-variable <?php echo VARIABLES; ?>">    
  <div class="column is-full-mobile is-full-small">
  <div class="columns onerow is-multiline is-variable <?php echo VARIABLES; ?>">  
  <?php
  $cc = 0;
  $fullimage = false;
  $toprowposts = get_field('electionsp','election_index');
  foreach($toprowposts as $post) : setup_postdata($post); $cc++;
  if($cc > 4) continue;
  $extraclass = null;
  if($cc == 1) {
  $fullimage = true;
  $extraclass = 'flex-article reverse-row vima-hero';
  $varsize = 'hero-size zonabold';
  } else {
  $varsize = 'sub-hero-size zonabold';  
  }
  ?>
  <?php if($cc == 1) { ?>
  <div class="column is-full">
  <?php include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); ?>
  </div>
  <div class="column is-full is-relative column-wrap-sub">
  <div id="wrap-subs-items" class="wrap-subs-items">
  <div class="columns onerow is-mobile is-multiline is-variable <?php echo VARIABLES; ?>">
  <?php } else { ?>
  <div class="column is-4-desktop is-4-tablet is-4-mobile is-full-small subs-items">
  <?php include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); ?>
  </div>    
  <?php } ?>
    
  <?php if($cc == 4 ) { ?>
  </div>
  </div>
  <?php } ?>

  <?php endforeach; wp_reset_postdata(); ?>
  </div>
  </div>
  </div>
  </div>
</div>
</div>

<div class="column is-narrow-desktop is-full-tablet is-full-small">
  <div class="sidebar-width">
    
    <div class="sidebar-upper-wrap">
    <div class="sidebar-upper-wrap-i">
    <div id="restItems"></div>
    <?php if(get_field('mega_act', 'tovima_strmega') && get_field('activated_elections', 'election_index') === true) { ?>
    <div class="sidebar-stream">
      <div class="sticky-player vima-box">
        <div class="sticky-player-inner">
        <span id="close-player"></span>          
        <?php if(get_field('mega_t', 'tovima_strmega')) { ?>  
        <header class="vima-box-header">
        <h2 class="vimabox-tile zonaultra"><?php echo get_field('mega_t', 'tovima_strmega'); ?></h2>
        </header>
        <?php } ?>
        <div class="videow-wrap">
        <div class="videow">      
        <div id="player_div_id"></div>
        </div>
        </div>
        </div>
      </div>
    </div>
    <?php } ?>
    </div>
    <div class="sidebar-upper-wrap-b">
    <?php include(TEMPLATEPATH .'/assets/elements/ekloges-v.php'); ?>
    </div>
      
    </div>
    
  </div>  
</div>
  

<div class="column is-full separator-horizontal-row">
  <sep></sep>
</div>
  
</div>
</div>


<style>

/* EKLOGES HOMEPAGE */

  .top-col-row .vima-hero .wrap-ohead .o-head span {
    background: inherit;
    padding: initial;
    outline: none;
    -webkit-box-decoration-break: initial;
    box-decoration-break: initial;
    line-height: initial
  }

.top-col-row .vima-hero .tile-content .wrap-main-tile-content .o-head {width: auto}
.uppertop .vima-hero .wrap-ohead .o-head {width:100%;max-width:620px;font-size: 4.4rem}
.uppertop .vima-hero .tile-content .wrap-main-tile-content .post-description{font-size:18px;margin-top:6rem}
.sub-hero-size{font-size:22px}
.column-wrap-sub{padding:0}  
.wrap-subs-items {
    position: absolute;
    height: 230px;
    left: 0;
    bottom:0.75rem;
    background: #fff;
    max-width: 530px;
    padding-right: 20px;
    padding-top: 20px;
    padding-left: 1rem;
}
.subs-items .post-meta-wrapper {display: none}
.uppertop .flex-article .wrap-thumb figure {height: 100%}  
.sidebar-stream {margin-bottom: 25px}

.vima-header-tabs li {position:relative;display: block;margin-right: 15px;color: #A6A6A6;cursor:pointer}
.vima-header-tabs {display: flex}
.vima-header-tabs li:after {
    position: absolute;
    bottom: -10px;
    left: 0;
    height: 3px;
    background: #262626;
    display: block;
    content: "";
    width: 0;
    transition: all 0.2s ease;
}  
.vima-header-tabs li.activeTab{color:#262626;}  
.vima-header-tabs li.activeTab:after {width:100%}
.tabcontent .simple-row {margin-bottom: 15px}
.tabcontent .call-action-button,
.tabcontent .simple-row .post-category {display: none}
  
.latest-opinions .simple-row:last-of-type {border: none;margin-bottom: 0;padding-bottom: 0}
  
#v-ekloges .simple-row:nth-of-type(4) {border-bottom: none}  
#v-ekloges .simple-row:last-of-type {display: none}
  
  
@media screen and (max-width:1599px){
.wrap-subs-items {position: relative;padding: initial;bottom: initial;left: initial;height: auto;width: 100%;max-width: 100%;padding-top: 10px}
}
  
@media screen and (min-width:1600px){  
.uppertop .vima-hero.flex-article .tile-content {margin-bottom: 238px;padding-bottom: 0}    
.uppertop .vima-hero.flex-article .tile-content:after {
    content: "";
    display: block;
    margin-top: 35px;
    border-bottom: 4px double #595959;
}  
.sub-hero-size {
    font-size: 18px;
    display: -webkit-box;
    -webkit-line-clamp: 4;
    -webkit-box-orient: vertical;
    overflow: hidden;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis;
}  
.subs-items {margin-bottom: -15px}
.subs-items .relative-box .tile-content {padding-top: 0}
.subs-items .relative-box .wrap-thumb {margin-top: 35px}
.subs-items .relative-box {flex-direction: column-reverse}  
}
  

@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: portrait) {
.wrap-subs-items{display:none}  
.sidebar-upper-wrap{display:flex;margin-inline:-0.75rem}
.sidebar-upper-wrap .sidebar-upper-wrap-i{width:calc(100% - 285px);padding:.75rem}
.sidebar-upper-wrap .sidebar-upper-wrap-b{width:285px;padding:.75rem}
.sidebar-upper-wrap .sidebar-upper-wrap-b .simple-row{width:100%;margin:0 0 12px}
#restItems .wrap-subs-items {display: block;margin-bottom: 25px;padding-top: 25px;border-top: 4px double #ccc;}
}

.sidebar-upper-wrap-b,
.fixed-bottom {display:none}

.tab-content {display: none}
.tab-content.active {display: block}

@media screen and (min-width:768px) {
  .sidebar-upper-wrap-b,
  .map-area{display:block;width:100%}
}

@media screen and (max-width:767px) {
.uppertop .vima-hero.flex-article .tile-content {margin-top: -5rem;background-color: #FFF;margin-left: -0.75rem;width:auto}
.uppertop .vima-hero .wrap-ohead .o-head {font-size: 3.4rem}  
.uppertop .vima-hero .tile-content .wrap-main-tile-content .post-description{margin-top:16px}  
.uppertop .vima-hero .wrap-ohead .o-head span {
    background-color: #fff;
    color: var(--notblack);
    display: inline;
    padding: 0.65rem;
    letter-spacing: -.85px;
    box-decoration-break: clone;
    -webkit-box-decoration-break: clone;
    outline: 5px solid #fff;
    line-height: 1.25;
    padding-left: 0;
}  
.uppertop .vima-hero.flex-article .wrap-thumb .thumb-holder {padding-bottom: 0;height: 112vw}
.uppertop .vima-hero .wrap-ohead .o-head span,  
.uppertop .vima-hero.flex-article .tile-content .post-meta-wrapper,
.uppertop .vima-hero .tile-content .wrap-main-tile-content .post-description {padding-left:8px}
.uppertop .vima-hero.flex-article .tile-content .post-meta-wrapper:after {content: "";border-bottom: 4px double #ddd;display: block;margin-top: 15px;margin-bottom: -10px}
.sidebar-stream{margin-bottom:0}
  
.top-col-row .vima-hero.flex-article .wrap-thumb {margin-inline:initial;padding-inline: var(--columnGap);}
  
}

@media screen and (min-width:768px) {
.uppertop .vima-hero .wrap-ohead .o-head{width:620px}
}
@media screen and (min-width:1024px) {
.top-col-row .hero-size{font-size:3.26rem}  
}
  
@media screen and (min-width:1024px) and (max-width:1599px){
.wrap-subs-items {border-top: 4px double var(--lightgrey);margin-top: 10px; padding-top: 15px}
.wrap-subs-items .relative-box {flex-direction: column-reverse}
.wrap-subs-items .relative-box .wrap-thumb {margin-top: 30px}
.uppertop .flex-article .wrap-thumb figure{min-height:500px}  
}    
  
@media screen and (min-width:1023px) and (max-width:1537px) {
#v-ekloges .simple-row:nth-of-type(4) {border-bottom:1px solid var(--lightgrey)}  
#v-ekloges .simple-row:last-of-type {display:block}
}  
  
</style>