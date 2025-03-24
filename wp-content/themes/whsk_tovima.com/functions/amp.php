<?php 

/* REMOVE DEFAULT METADATA
=======================*/

/*AMP POSTS */
add_filter( 'amp_post_template_file', 'xyz_amp_set_custom_template', 10, 3 );

function xyz_amp_set_custom_template( $file, $type, $post ) {
	if ( 'single' === $type ) {
    $file = TEMPLATEPATH. '/template-parts/template-amp.php';
	}
	return $file;
}

/**
 * CORRECT TIMEZONE TO AMP META DATA
 */
function date_amp_changeto_zulu( $metadata, $post ) {
  $dttz = new DateTime('now', new DateTimeZone('Europe/Athens'));
  $dtdiff = $dttz->format('P');

  $datePub = $metadata['datePublished'];
  $dateMod = $metadata['dateModified'];
  $datePubN = date("Y-m-d",strtotime($datePub))."T".date("H:i:s",strtotime($datePub)).$dtdiff;
  $dateModN = date("Y-m-d",strtotime($dateMod))."T".date("H:i:s",strtotime($dateMod)).$dtdiff;

  $metadata['datePublished'] = $datePubN;
  $metadata['dateModified'] = $dateModN;

    return $metadata;
}
add_filter( 'amp_post_template_metadata', 'date_amp_changeto_zulu', 10, 2 );



add_action( 'amp_post_template_head', 'isa_remove_amp_google_fonts', 2 );
function isa_remove_amp_google_fonts() {
remove_action( 'amp_post_template_head', 'amp_post_template_add_fonts' );
}

// function bybe_remove_yoast_json($data){
//   $data = array();
//   return $data;
//   }
//   add_filter('wpseo_json_ld_output', 'bybe_remove_yoast_json', 10, 1);



function xyz_amp_my_additional_css_styles( $amp_template ) { ?>
html {background:#FFF;font-size: 10px}

:root {
  --secondfont: 'Manrope', sans-serif;
  --notblack: #262626;
  --greycolor: #595959;
  --grey:#737373;
  --lightgrey: #A6A6A6;
  --semigrey: #8C8C8C;
  --notwhite: #f5f5f5;
  --orangecolor: #F29718;
  --lightorange: #FFBA59;
  --greyblue: #EBEEF5;
  --darkblue: #3A55A6;
  --redcolor: #CC0000;
  --darkredcolor:#801919;
  --normalgrey:#7D7D7D;
  --linelight:#ddd;
  --darklight:#ccc;
}

@font-face {
  font-family:'Vegaregular';
  src:url('/wp-content/themes/whsk_tovima.com/common/fonts/vega/regular/BFVEGA10-REGULAR.eot');
  src:url('/wp-content/themes/whsk_tovima.com/common/fonts/vega/regular/BFVEGA10-REGULAR.eot?#iefix') format('embedded-opentype'),
  url('/wp-content/themes/whsk_tovima.com/common/fonts/vega/regular/BFVEGA10-REGULAR.woff') format('woff'),
  url('/wp-content/themes/whsk_tovima.com/common/fonts/vega/regular/BFVEGA10-REGULAR.svg#Vegaregular') format('svg');
  font-style:normal;font-weight:normal
}
@font-face {
  font-family:'Vegabold';
  src:url('/wp-content/themes/whsk_tovima.com/common/fonts/vega/bold/BFVEGASEMI10-BOLD.eot');
  src:url('/wp-content/themes/whsk_tovima.com/common/fonts/vega/bold/BFVEGASEMI10-BOLD.eot?#iefix') format('embedded-opentype'),
  url('/wp-content/themes/whsk_tovima.com/common/fonts/vega/bold/BFVEGASEMI10-BOLD.woff') format('woff'),
  url('/wp-content/themes/whsk_tovima.com/common/fonts/vega/bold/BFVEGASEMI10-BOLD.svg#Vegabold') format('svg');
  font-style:normal;font-weight:normal
}
@font-face {
  font-family:'Vegaultra';
  src:url('/wp-content/themes/whsk_tovima.com/common/fonts/vega/ultra/BFVEGAULTRA10-REGULAR.eot');
  src:url('/wp-content/themes/whsk_tovima.com/common/fonts/vega/ultra/BFVEGAULTRA10-REGULAR.eot?#iefix') format('embedded-opentype'),
  url('/wp-content/themes/whsk_tovima.com/common/fonts/vega/ultra/BFVEGAULTRA10-REGULAR.woff') format('woff'),
  url('/wp-content/themes/whsk_tovima.com/common/fonts/vega/ultra/BFVEGAULTRA10-REGULAR.svg#Vegaultra') format('svg');
  font-style:normal;font-weight:normal
}


*{margin:0;padding:0;text-rendering:optimizeLegibility;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;font-family:'Vegaregular','Times New Roman',Times,serif;outline:0;box-sizing:border-box}

body{color:var(--notblack)}
.manrope{font-family:Manrope}
.white-c{color:#fff}
.black-c{color:#000}
a,a:hover,a:visited{color:var(--notblack);text-decoration:none}
.columns{margin-left:-.75rem;margin-right:-.75rem;margin-top:-.75rem}
.column{display:block;flex-basis:0;flex-grow:1;flex-shrink:1;padding:.75rem}
.columns.is-multiline{flex-wrap:wrap}
.columns.is-mobile{display:flex}
.columns:last-child{margin-bottom:-.75rem}
.column.is-7-touch{flex:none;width:58.33333%}
.column.is-5-touch{flex:none;width:41.66667%}
.column.is-full-small{width:100%;flex:none}
.column.is-half-small{width:50%;flex:none}
.column.is-full{flex:none;width:100%}

.columns.is-mobile > .column.is-narrow {
    flex: none;
    width: unset;
}.block-item {
    width: 75px;
}

.is-block{display:block}
.is-hidden-small{display:none}
.my-0{margin-top:0;margin-bottom:0}
.zonareg{font-family:Vegaregular}
.zonabold{font-family:Vegabold;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
.zonaultra{font-family:Vegaultra;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
.f-400{font-weight:400}
.f-600{font-weight:600}
.f-700{font-weight:700}
.f-800{font-weight:800}
.is-size-2-mobile{font-size:2.6rem}
.is-size-3{font-size:2rem}
.is-size-4,.is-size-4-touch{font-size:1.9rem}
.is-size-4-mobile{font-size:1.8rem}
.is-size-5{font-size:1.4rem}
.is-size-6{font-size:1.2rem}
.is-size-5-mobile{font-size:1.6rem}
.is-size-normal {
    font-size: 1.6rem;
}
.mt-5{margin-top:1.5rem}
.grey-c{color:var(--grey)}
.lightgrey-c{color:var(--lightgrey)}
.line-height-1{line-height:1}
.maxgridrow{max-width:700px;padding:0 12px;margin:0 auto}
.thumb-holder{background-color:#f4f4f4;margin:0 auto;width:100%;padding-bottom:66.25%;height:0;position:relative;min-height:75px;overflow:hidden}
.imagefit{-o-object-fit:cover;object-fit:cover;-o-object-position:center 0;object-position:center 0;width:100%;max-width:none;height:100%;position:absolute;top:0;left:0;height:100%}
.site-header{margin-bottom:3rem;width:100%;position:relative;border-bottom:1px solid #ddd;background-color:#fff;padding:12px 0}
.main-logo{max-width:300px;margin:0 auto;line-height:0;display:block}
.o-head{letter-spacing:-.4px;line-height:1.15}
.article-header{text-align:left}
.article-header .post-title{margin:0;line-height:1.2;letter-spacing:-.64px}
.post-summary{font-size:2.2rem;line-height:1.2;margin-bottom:15px;font-weight:400;letter-spacing:-.24px;margin-top:20px}
.post-meta-wrap-r{display:flex;justify-content:space-between;flex-direction:row-reverse;border-top:none;border-bottom:1px solid #ccc;padding-bottom:12px;padding-top:0}
.post-meta-wrap-r .post-meta-r2{width:35%;text-align:right}
.post-meta-wrap-r .post-meta-r1{width:65%}
.post-meta time{font-weight:500;display:block;line-height:1;padding:5px 0}
.post-meta-wrap-r .post-meta-r1 .parent-category,.post-meta-wrap-r .post-meta-r2 time,.post-meta-wrap-r .vima-author{font-size:14px}
.post-meta-wrap-r .vima-author{font-weight:800;font-size:14px;font-family:Manrope}
.post-meta-wrap-r .post-meta-r2 time:last-child{padding:0}
.wrap-post-category .parent-category{font-family:Manrope}
.post-body{margin:3rem auto 0}
.post-body{width:100%;font-size:2rem;line-height:1.4;letter-spacing:-.2px}
.post-body p strong{font-family:Vegaultra}
.post-body p{margin:0 0 3rem}
.post-body p a{background-color:#f8e0b9;padding:2px}
.post-body p a:hover{text-decoration:underline}
.post-body .wp-caption{width:auto}
.post-body .wp-caption p{font-family:var(--secondfont);font-size:12px;line-height:16px;font-weight:500;color:#404040;border-bottom:1px solid #ccc;padding-bottom:4px}
.post-body ol,.post-body ul{margin-left:3rem}
.post-body ol li,.post-body ul li{margin-bottom:1rem}
.post-body h2{font-family:Vegaultra;font-size:28px;line-height:1.1;letter-spacing:-.56px}
.post-body h3{font-family:Vegabold;font-size:26px;line-height:1.1;letter-spacing:-.52px}
.post-body h5{font-family:Manrope;font-weight:700;letter-spacing:-2px;color:#262626;font-size:48px;line-height:1}
.post-body h4{font-size:20px;color:#737373;font-family:Manrope;font-weight:600}
.post-body h2,.post-body h3,.post-body h4,.post-body h5{margin-top:3rem;margin-bottom:10px}
.post-body blockquote{margin:0 auto;border:none;background:0 0;padding:inherit}
.post-body blockquote{text-align:center;margin-top:4rem;font-size:2.8rem;line-height:1.2;letter-spacing:-.4px;margin-bottom:4rem;width:100vw;position:relative;left:50%;right:50%;margin-left:-50vw;margin-right:-50vw;z-index:1}
.post-body blockquote p{text-align:center;width:90%;max-width:730px;margin:0 auto}
.post-body blockquote.align-left{width:300px;left:initial;right:initial;margin:0;margin-left:-115px;text-align:left;font-size:2.4rem;font-family:Vegabold;letter-spacing:-.24px;float:left;border-top:3px solid;padding-top:15px;margin-right:2rem;margin-top:8px}
.post-body blockquote.align-left{width:100%;margin:0 auto 30px}
.post-body blockquote.align-left p{text-align:left;width:100%}
.dfpslot{text-align:center;margin-bottom:3rem;line-height:0}
.relative-box .tile-content{padding-top:1.6rem}
.row-tags{margin:4rem 0 3rem;clear:both}
.ul-tags{display:flex;flex-wrap:wrap;justify-content:flex-start}
.ul-tags .tag-item{display:block;background-color:#f2f2f2;padding:5px 10px;border:1px solid #ccc;border-radius:5px;font-size:12px;font-family:var(--secondfont);text-transform:uppercase;margin-right:10px;line-height:1;margin-bottom:10px;font-weight:700}
.ul-tags .tag-item a{color:#737373}
.vima-box{clear:both}
.vima-box .vima-box-header{align-items:center;border-top:2px solid #000;display:flex;border-bottom:1px solid #ccc;justify-content:space-between;padding:8px 0;height:43px}
.vima-box .vima-box-header .vimabox-tile{margin:0}
.vima-box .row-post{border-bottom:1px solid #ddd;padding:20px 0}
.inner-col-row{height:100%;display:flex;flex-direction:column;justify-content:space-between}
.article-footer .inner-section{margin-top:3rem;border-top:2px solid}

.vima-box.sidebar-widget {
    position: relative;
    padding: 3rem 0;
}
.vima-box.sidebar-widget .wrap-paper {
    position: relative;
    max-height: 270px;
    overflow: hidden;
    height: 270px;
}.wrap-paper .imagefit {
    -o-object-fit: cover;
    object-fit: cover;
}.wrap-paper:after {
    content: "";
    background: rgba(0,0,0,0) -webkit-gradient(linear,left top,left bottom,from(rgba(0,0,0,0)),color-stop(0,rgba(0,0,0,0)),color-stop(50%,rgba(0,0,0,.5)),to(rgba(0,0,0,.5))) repeat scroll 0 0;
    background: rgba(0,0,0,0) -o-linear-gradient(top,rgba(0,0,0,0),rgba(0,0,0,0) 0,rgba(0,0,0,.5) 50%,rgba(0,0,0,.5) 100%) repeat scroll 0 0;
    background: rgba(0,0,0,0) linear-gradient(to bottom,rgba(0,0,0,0),rgba(0,0,0,0) 0,rgba(0,0,0,.5) 50%,rgba(0,0,0,.5) 100%) repeat scroll 0 0;
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 50%;
    opacity: .5;
}

.inner-section header{display:flex;justify-content:space-between;padding:2rem 0}
.inner-section header .header-section{font-size:1.9rem;margin:0;letter-spacing:-.36px;line-height:2rem}
.latestnews-section.inner-section header{width:100%;border-top:2px solid #000;display:flex;border-bottom:1px solid #ccc;justify-content:space-between;padding:8px 0;margin-bottom:12px}
.slick-items{border-bottom:1px solid #ccc;padding-bottom:1.2rem;margin-bottom:1.5rem}
.latest-slick.onerow .slick-items:nth-child(n+7){display:none}
.slick-items:last-child,.slick-items:nth-child(6){border-bottom:none;padding-bottom:0;margin-bottom:0}
.relative-box .tile-content .post-meta-wrapper{margin-top:1.4rem}
.up-footer{margin-top:4rem;border-top:1px solid #ccc;padding-top:16px;border-bottom:3px solid #000}
.today-news{display:flex;flex-wrap:wrap;justify-content:flex-start}
.today-news .tag-item{display:block;background-color:#f2f2f2;padding:5px 10px;border:1px solid #ccc;border-radius:5px;font-size:12px;font-weight:700;font-family:Manrope;text-transform:uppercase;margin-right:13px;line-height:1;margin-bottom:13px}
.today-news .tag-item a{color:#737373;font-family:Manrope}
.site-footer{padding-top:2rem}
.site-footer .footer-logo{display:block;line-height:0;max-width:300px;margin-bottom:1rem}
.site-footer .footer-logo img{width:100%;height:auto}
#mc_embed_signup_scroll{border:2px solid #707070;padding:9px;border-radius:8px;max-width:390px;margin-top:15px;margin-bottom:0;display:flex;justify-content:space-between;width:100%}
#mc_embed_signup_scroll #mce-EMAIL{-webkit-appearance:none;-moz-appearance:none;-ms-appearance:none;border:none;background:0 0;color:#a6a6a6;font-size:16px;font-family:Manrope;font-weight:500;width:70%}
#mc-embedded-subscribe{-webkit-appearance:none;-moz-appearance:none;-ms-appearance:none;border:none;width:30%;background-color:#000;border-radius:4px;font-size:14px;color:#fff;font-family:Manrope;font-weight:700;line-height:1;padding:2px 10px}
.helioskiosk-image{line-height:0;margin-top:12px;max-width:330px}
.helioskiosk{max-width:390px;margin-top:12px;border-top:1px solid #ccc;padding-top:12px}
@media screen and (max-width:1023px){
.is-hidden-touch{display:none}
}
.footer-menu .wrap-menu-items .wrap-item-header{border-bottom:1px solid #ddd;padding:12px 0}
.footer-menu .wrap-menu-items .wrap-item-header:last-child{border:none}

.site-footer{padding-top:2rem;border-top:3px solid #000;margin-top:3rem}
.footer-menu .menu-wrapper{display:flex;flex-wrap:wrap;justify-content:center}
.footer-menu .menu-wrapper li{font-size:14px;font-family:Manrope;display:block;padding:5px;line-height:1}
.footer-menu .menu-wrapper li a{font-family:Manrope}
.terms-menu{display:flex;justify-content:center;flex-wrap:wrap}
.terms-menu li{font-size:13px;display:block;padding:5px;font-family:Manrope}
.terms-menu li a{font-family:Manrope}
.site-footer .footer-logo{margin:0 auto}

#postPromptUI button{background:#368bd6;color:#fff;padding:5px 15px;border:none;outline:0;display:flex;align-items:center;position:fixed;right:0;bottom:0;border-radius:3px 0 0 3px;max-height:30px;max-width:110px;cursor:pointer}
#amp-mobile-version-switcher{display:none}
.add-wsj {
    width: 30px;
    margin-right: 20px;
    float: left;
    margin-bottom: 0;
    margin-top: 2px;
}.add-wsj img {
    width: 100%;
    height: auto;
}

.is-hidden-touch{display:none}
.googlefc{background:#000000;-webkit-appearance:none;-moz-appearance:none;appearance:none;color:#FFF;padding:5px 8px;font-weight:bold;border: none}
<?php }
add_action( 'amp_post_template_css', 'xyz_amp_my_additional_css_styles' );