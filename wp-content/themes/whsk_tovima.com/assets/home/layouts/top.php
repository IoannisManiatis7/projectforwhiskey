<section id="topArea">
  <div class="columns onerow is-multiline is-variable <?php echo VARIABLES; ?>">
    
    <?php include(TEMPLATEPATH .'/assets/elements/toponerow.php'); ?>
    <?php include(TEMPLATEPATH .'/assets/elements/hero.php'); ?>
    
    <div class="column is-full">
      <?php include(TEMPLATEPATH .'/assets/elements/latestnews.php'); ?>
    </div>

    <div class="column is-full-mobile is-full-small">
      
      <div class="columns onerow is-multiline is-variable <?php echo VARIABLES; ?>">
        
        <div class="column is-relative">
          
          <div class="hero-inner-row-1">
          <div class="columns onerow is-multiline is-variable <?php echo VARIABLES; ?>">
        <div class="column is-full is-hidden-fullwindow">
        <div class="wrap-header-section">
          <div class="wrap-section-t">  
          <h2 class="header-section zonaultra f-400">FEATURED</h2>
          </div>
        </div>
        </div>
        
        <div class="column is-visible-fullwindow is-narrow">
          <div class="rect-width">
            
            <div class="wrap-header-section inner-fullwindow-items">
              <div class="wrap-section-t">  
                <h2 class="header-section zonaultra f-400">FEATURED</h2>
              </div>
            </div>
            
          </div>
        </div>
        
        <div class="column is-relative">
          <div class="latest-col-row">
            <?php include(TEMPLATEPATH .'/assets/elements/newsubsubtop.php'); ?>
          </div>
        </div>
        </div>
          </div>
          
          <div class="hero-inner-row-2">
            <?php include(TEMPLATEPATH .'/assets/elements/gnomes-row.php'); ?>
          </div>
          
        </div>
        
        <div class="column is-narrow-desktop is-full-tablet is-full-small">
          <div class="sidebar-width is-relative">
            <div class="is-relative wrap-das is-hidden-touch">
             <div id='300x250_r1' class="sticky-item das-r1 das-r1--in"></div>
            </div>
          </div>
        </div>
        
      </div>
      
    </div>

  </div>

</section>

<style>
.ekloges__oct{height:97px;background-color:#ebeef7;line-height:0;margin-bottom:25px;display:flex;align-items:center;position:relative}
.ekloges__oct:after{content:"";position:absolute;top:0;left:0;right:0;bottom:0;opacity:.65;background-image:url(/wp-content/themes/whsk_tovima.com/common/imgs/greeceMap@2x.png);background-repeat:no-repeat;background-position:right;background-size:210px}
.ekloges__oct_inner{display:flex;position:relative;z-index:1;justify-content:space-between;padding:0 25px;width:100%}
.ekloges__oct_inner .header-section{font-size:2.3rem;line-height:1}
.ekloges__oct_inner_items{display:flex;align-items:center;font-size:16px;line-height:18px}
.ekloges__oct_inner_items li{white-space:nowrap;display:block;font-size:16px;line-height:18px;letter-spacing:-.16px;font-family:'Manrope';font-weight:600}
/* .ekloges__oct_inner_items li:first-child{margin-right:16px;padding-right:16px;border-right:1px solid} */
.ekloges__oct_inner_items li a:hover{text-decoration:underline}
.ekloges__oct_inner_items li a {
    border:1px solid transparent;
    text-decoration:none;
    background-color: #3757AB;
    color:#FFFFFF;
    font-size: 14px;
    line-height: 1;
    padding: 4px 15px;
    border-radius: 4px;
}
.ekloges__oct_inner_items li a:hover{background-color:#FFF;color:#3757ab;border:1px solid #3757ab;text-decoration:none;}
.ekloges__oct_inner_items li:first-child {
    margin-right:8px;
}  
  
.megastream{position:relative;padding-bottom:56.25%}  
.megastream iframe{position:absolute;top:0;left:0;height:100%;width:100%}  
.new_top-row{margin-top:2rem}
.new_top-row .post-description{display:none}
.wrap-footertop .triple-row-post .relative-box .tile-content .post-description{display:none}
@media screen and (max-width:767px){
  
.ekloges__oct{height:113px;padding:20px 15px;margin-inline:-12px}
.ekloges__oct_inner{padding:0;display:flex;flex-direction:column}
.ekloges__oct_inner .header-section{font-size:1.85rem;text-align:center}
.ekloges__oct_inner_items{margin-top:22px;justify-content: center}
.ekloges__oct_inner_items li{font-size:12px;text-align:center;line-height:1;justify-content: center;}
.ekloges__oct_inner_items li a{font-size:12px}  
.ekloges__oct_inner a:hover{text-decoration:underline}   
  
.ntp_2 .relative-box,.ntp_3 .relative-box,.ntp_4 .relative-box{display:flex;flex-direction:row-reverse}
.ntp_2 .relative-box .wrap-thumb,.ntp_3 .relative-box .wrap-thumb,.ntp_4 .relative-box .wrap-thumb{width:130px}
.ntp_2 .relative-box .tile-content,.ntp_3 .relative-box .tile-content,.ntp_4 .relative-box .tile-content{width:calc(100% - 130px);padding-right:12px;margin:0!important;padding-top:0}
.ntp_1 .relative-box, .ntp_2 .relative-box, .ntp_3 .relative-box {padding-bottom: 15px;border-bottom: 1px solid var(--linelight);margin-bottom: 12px}
#MapArea .map-area iframe {height: 450px}  
}
  
.top__print {border-top: 3px solid var(--lightorange);text-align: center;border-bottom:1px solid #DDD;padding-bottom:30px}
.top__print h2 {margin: 0;font-size: 20px;font-family: 'Vegaultra';padding-top: 18px;padding-bottom:16px}
.top__print .wrap-paper {box-shadow: 0px 3px 26px #00000014;display: block;margin-bottom: 30px}  
</style>