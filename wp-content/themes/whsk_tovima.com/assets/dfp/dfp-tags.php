<script>
!function (n) { "use strict"; function d(n, t) { var r = (65535 & n) + (65535 & t); return (n >> 16) + (t >> 16) + (r >> 16) << 16 | 65535 & r } function f(n, t, r, e, o, u) { return d((u = d(d(t, n), d(e, u))) << o | u >>> 32 - o, r) } function l(n, t, r, e, o, u, c) { return f(t & r | ~t & e, n, t, o, u, c) } function g(n, t, r, e, o, u, c) { return f(t & e | r & ~e, n, t, o, u, c) } function v(n, t, r, e, o, u, c) { return f(t ^ r ^ e, n, t, o, u, c) } function m(n, t, r, e, o, u, c) { return f(r ^ (t | ~e), n, t, o, u, c) } function c(n, t) { var r, e, o, u; n[t >> 5] |= 128 << t % 32, n[14 + (t + 64 >>> 9 << 4)] = t; for (var c = 1732584193, f = -271733879, i = -1732584194, a = 271733878, h = 0; h < n.length; h += 16)c = l(r = c, e = f, o = i, u = a, n[h], 7, -680876936), a = l(a, c, f, i, n[h + 1], 12, -389564586), i = l(i, a, c, f, n[h + 2], 17, 606105819), f = l(f, i, a, c, n[h + 3], 22, -1044525330), c = l(c, f, i, a, n[h + 4], 7, -176418897), a = l(a, c, f, i, n[h + 5], 12, 1200080426), i = l(i, a, c, f, n[h + 6], 17, -1473231341), f = l(f, i, a, c, n[h + 7], 22, -45705983), c = l(c, f, i, a, n[h + 8], 7, 1770035416), a = l(a, c, f, i, n[h + 9], 12, -1958414417), i = l(i, a, c, f, n[h + 10], 17, -42063), f = l(f, i, a, c, n[h + 11], 22, -1990404162), c = l(c, f, i, a, n[h + 12], 7, 1804603682), a = l(a, c, f, i, n[h + 13], 12, -40341101), i = l(i, a, c, f, n[h + 14], 17, -1502002290), c = g(c, f = l(f, i, a, c, n[h + 15], 22, 1236535329), i, a, n[h + 1], 5, -165796510), a = g(a, c, f, i, n[h + 6], 9, -1069501632), i = g(i, a, c, f, n[h + 11], 14, 643717713), f = g(f, i, a, c, n[h], 20, -373897302), c = g(c, f, i, a, n[h + 5], 5, -701558691), a = g(a, c, f, i, n[h + 10], 9, 38016083), i = g(i, a, c, f, n[h + 15], 14, -660478335), f = g(f, i, a, c, n[h + 4], 20, -405537848), c = g(c, f, i, a, n[h + 9], 5, 568446438), a = g(a, c, f, i, n[h + 14], 9, -1019803690), i = g(i, a, c, f, n[h + 3], 14, -187363961), f = g(f, i, a, c, n[h + 8], 20, 1163531501), c = g(c, f, i, a, n[h + 13], 5, -1444681467), a = g(a, c, f, i, n[h + 2], 9, -51403784), i = g(i, a, c, f, n[h + 7], 14, 1735328473), c = v(c, f = g(f, i, a, c, n[h + 12], 20, -1926607734), i, a, n[h + 5], 4, -378558), a = v(a, c, f, i, n[h + 8], 11, -2022574463), i = v(i, a, c, f, n[h + 11], 16, 1839030562), f = v(f, i, a, c, n[h + 14], 23, -35309556), c = v(c, f, i, a, n[h + 1], 4, -1530992060), a = v(a, c, f, i, n[h + 4], 11, 1272893353), i = v(i, a, c, f, n[h + 7], 16, -155497632), f = v(f, i, a, c, n[h + 10], 23, -1094730640), c = v(c, f, i, a, n[h + 13], 4, 681279174), a = v(a, c, f, i, n[h], 11, -358537222), i = v(i, a, c, f, n[h + 3], 16, -722521979), f = v(f, i, a, c, n[h + 6], 23, 76029189), c = v(c, f, i, a, n[h + 9], 4, -640364487), a = v(a, c, f, i, n[h + 12], 11, -421815835), i = v(i, a, c, f, n[h + 15], 16, 530742520), c = m(c, f = v(f, i, a, c, n[h + 2], 23, -995338651), i, a, n[h], 6, -198630844), a = m(a, c, f, i, n[h + 7], 10, 1126891415), i = m(i, a, c, f, n[h + 14], 15, -1416354905), f = m(f, i, a, c, n[h + 5], 21, -57434055), c = m(c, f, i, a, n[h + 12], 6, 1700485571), a = m(a, c, f, i, n[h + 3], 10, -1894986606), i = m(i, a, c, f, n[h + 10], 15, -1051523), f = m(f, i, a, c, n[h + 1], 21, -2054922799), c = m(c, f, i, a, n[h + 8], 6, 1873313359), a = m(a, c, f, i, n[h + 15], 10, -30611744), i = m(i, a, c, f, n[h + 6], 15, -1560198380), f = m(f, i, a, c, n[h + 13], 21, 1309151649), c = m(c, f, i, a, n[h + 4], 6, -145523070), a = m(a, c, f, i, n[h + 11], 10, -1120210379), i = m(i, a, c, f, n[h + 2], 15, 718787259), f = m(f, i, a, c, n[h + 9], 21, -343485551), c = d(c, r), f = d(f, e), i = d(i, o), a = d(a, u); return [c, f, i, a] } function i(n) { for (var t = "", r = 32 * n.length, e = 0; e < r; e += 8)t += String.fromCharCode(n[e >> 5] >>> e % 32 & 255); return t } function a(n) { var t = []; for (t[(n.length >> 2) - 1] = void 0, e = 0; e < t.length; e += 1)t[e] = 0; for (var r = 8 * n.length, e = 0; e < r; e += 8)t[e >> 5] |= (255 & n.charCodeAt(e / 8)) << e % 32; return t } function e(n) { for (var t, r = "0123456789abcdef", e = "", o = 0; o < n.length; o += 1)t = n.charCodeAt(o), e += r.charAt(t >>> 4 & 15) + r.charAt(15 & t); return e } function r(n) { return unescape(encodeURIComponent(n)) } function o(n) { return i(c(a(n = r(n)), 8 * n.length)) } function u(n, t) { return function (n, t) { var r, e = a(n), o = [], u = []; for (o[15] = u[15] = void 0, 16 < e.length && (e = c(e, 8 * n.length)), r = 0; r < 16; r += 1)o[r] = 909522486 ^ e[r], u[r] = 1549556828 ^ e[r]; return t = c(o.concat(a(t)), 512 + 8 * t.length), i(c(u.concat(t), 640)) }(r(n), r(t)) } function t(n, t, r) { return t ? r ? u(t, n) : e(u(t, n)) : r ? o(n) : e(o(n)) } "function" == typeof define && define.amd ? define(function () { return t }) : "object" == typeof module && module.exports ? module.exports = t : n.md5 = t }(this);
//# sourceMappingURL=md5.min.js.map

function uuidv4() {
    return ([1e7] + -1e3 + -4e3 + -8e3 + -1e11).replace(/[018]/g, c =>
        (c ^ crypto.getRandomValues(new Uint8Array(1))[0] & 15 >> c / 4).toString(16)
    );
}

function setPPIDCookie() {
    document.cookie = "_ppid=" + md5(uuidv4()) + ";path=/";
}

function clearPPIDCookie() {
    document.cookie = "_ppid=;path=/;expires=Thu, 01 Jan 1970 00:00:01 GMT";
}

function getPPIDCookie() {
    let name = "_ppid=";
    let ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i].trim();
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function quantcastTrackEvent(eventName) {
    let ppid = getPPIDCookie();
    if (ppid === "") {
        setPPIDCookie();
    }
    if (typeof __qc !== 'undefined') {
        __qc.event({
            type: 'custom',
            eventType: eventName
        });
    }
}

// Wait for TCF API to load
let tcfCheckInterval = setInterval(() => {
    if (typeof window.__tcfapi !== 'undefined') {
        clearInterval(tcfCheckInterval); // Stop checking once __tcfapi is available

        window.__tcfapi('addEventListener', 2, function(tcData, success) {
            if (success && (tcData.eventStatus === 'useractioncomplete' || tcData.eventStatus === 'tcloaded')) {
                const hasPurposeOneConsent = tcData.purpose.consents['1']; // Purpose 1: Storage & Access
                
                if (hasPurposeOneConsent) {
                    console.log("Consent given for Purpose 1 - Setting PPID");
                    quantcastTrackEvent('Personalized Ad Consent Given');
                } else {
                    console.log("No consent for Purpose 1 - Clearing PPID");
                    clearPPIDCookie();
                }
            }
        });
    }
}, 500); // Check every 500ms

// Stop checking after 5 seconds
setTimeout(() => clearInterval(tcfCheckInterval), 5000);
    
</script>

<?php
if (is_single()) {
    global $post;
    $varpostid = $post->ID;
} else {
    $varpostid = '';
}
if (is_tag()) {
    $tag = get_queried_object();
}

global $wp;

?>

<?php if(is_home()) { ?>
<script>
    window.skinSize = 'small';
    var w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    if (w > 1300) {
        window.skinSize = 'large';
    }
    if (w <= 668) {
        var platform = 'mobile';
        /*
        $(document).ready(function() {
            f = $(".das-mmiddle");
            d = $("#das-mmiddle-wp");
            var waypoint = new Waypoint({
                element: d[0],
                handler: function(n) {
                    "up" === n ? f.addClass('ups') : "down" === n && f.removeClass('ups')
                },
                offset: function() {
                    return window.innerHeight
                }
            })
        });
        */
    } else {
        var platform = 'desktop';
    }
</script>
<script async='async' src='https://securepubads.g.doubleclick.net/tag/js/gpt.js'></script>
<script>
    var googletag = googletag || {};
    googletag.cmd = googletag.cmd || [];
</script>
<script src="https://www.alteregomedia.org/files/js/gtags.js?v=1"></script>
<script>
    // gpush
    var plink = "<?php echo home_url( $wp->request ); ?>";
    try {setas()} catch (e) {var lineitemids = ''; var adserver = ''}
    googletag.cmd.push(function() {
        var header_mapping = googletag.sizeMapping().addSize([0, 0], []).addSize([670, 200], [[970, 250], [970, 90], [728, 90]]).build();
        var skin_mapping = googletag.sizeMapping().addSize([0, 0], []).addSize([1100, 200], [1920, 1200]).build();
        var right_mapping = googletag.sizeMapping().addSize([0, 0], []).addSize([875, 200], [[300, 250], [300, 450], [300, 600]]).build();
        var over_mapping = googletag.sizeMapping().addSize([0, 0], []).addSize([1000, 200], [1, 1]).build();
        var mapping_320 = googletag.sizeMapping().addSize([0, 0], [320, 50]).addSize([668, 0], []).build();
        var middle_mapping = googletag.sizeMapping().addSize([0, 0], []).addSize([300, 250], [[300, 250]]).addSize([300, 500], [[300, 600], [300, 250]]).addSize([668, 0], []).build();
        googletag.defineSlot('/28509845/tovima_group/tovima_home_320x50_top', [320, 50], '320x50_top').defineSizeMapping(mapping_320).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_mobile_300x250_middle_home', [[300, 600], [300, 250]], '300x250_middle_home').defineSizeMapping(middle_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_1x1_over', [1, 1], '1x1_over').defineSizeMapping(over_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_home_970x90_top', [[970, 250], [970, 90], [728, 90]], '970x90_top').defineSizeMapping(header_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_home_970x90_middle', [[970, 250], [970, 90], [728, 90]], '970x90_middle').defineSizeMapping(header_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_home_300x250_r1', [[300, 250], [300, 450], [300, 600]], '300x250_r1').defineSizeMapping(right_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_home_300x250_r2', [[300, 250], [300, 450], [300, 600]], '300x250_r2').defineSizeMapping(right_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_home_300x250_r3', [[300, 250], [300, 450], [300, 600]], '300x250_r3').defineSizeMapping(right_mapping).addService(googletag.pubads());
//         googletag.defineSlot('/28509845/tovima_group/tovima_home_1x1_out', [1920, 1200], '1x1_out').defineSizeMapping(skin_mapping).addService(googletag.pubads());
        var islot = googletag.defineOutOfPageSlot('/28509845/tovima_group/tovima_interstitial', googletag.enums.OutOfPageFormat.INTERSTITIAL);
        if (islot) {islot.addService(googletag.pubads());}
        googletag.pubads().setTargeting('Version', 'English');        
        googletag.pubads().setTargeting('Category', 'home');
        googletag.pubads().setTargeting('SubCategory', '');
        googletag.pubads().setTargeting('AdServer', adserver);
        googletag.pubads().setTargeting('Item_Id', '');
        googletag.pubads().setTargeting('Tags', '');
        googletag.pubads().setTargeting('Skin', skinSize);
        googletag.pubads().setTargeting('Platform', platform);
        googletag.pubads().collapseEmptyDivs(true);

        googletag.pubads().enableVideoAds();
        googletag.pubads().addEventListener('slotRenderEnded', function(event) {
        if(event.slot.getSlotElementId() === '300x250_r1' && !event.isEmpty && event.size[1] >= 300 ){ document.querySelector('body').classList.add('das600');}
        if(event.slot.getSlotElementId() === '300x250_r2' && !event.isEmpty && event.size[1] >= 300 ){ document.querySelector('body').classList.add('das600_r2'); }
        if(event.slot.getSlotElementId() === '300x250_r3' && !event.isEmpty && event.size[1] >= 300 ){ document.querySelector('body').classList.add('das600_r3'); }
        if(event.slot.getSlotElementId() === '300x250_r1' && !event.isEmpty && event.size[1] === 250 ){ document.querySelector('body').classList.add('das300'); }
        if(event.slot.getSlotElementId() === '300x250_r2' && !event.isEmpty && event.size[1] === 250 ){ document.querySelector('body').classList.add('das300_r2'); }
        if(event.slot.getSlotElementId() === '300x250_r3' && !event.isEmpty && event.size[1] === 250 ){ document.querySelector('body').classList.add('das300_r3'); }
        // if(event.slot.getSlotElementId() === '1x1_out' && !event.isEmpty ){ document.querySelector('body').classList.add('fxskin'); }
        if (event.slot.getSlotElementId() === '300x250_r1' || event.slot.getSlotElementId() === '300x250_middle' || event.slot.getSlotElementId() === '300x250_middle_home') 
        {if (!event.isEmpty && lineitemids.includes(event.lineItemId, 0) || !event.isEmpty && orderids.includes(event.campaignId, 0)) {pgm300();}};
        if (event.slot.getSlotElementId() === '300x250_middle_2') {if (!event.isEmpty && lineitemids.includes(event.lineItemId, 0) || !event.isEmpty && orderids.includes(event.campaignId, 0)) {pgm300a("300x250_middle_2");}};
        if (event.slot.getSlotElementId() === '300x250_middle_3') {if (!event.isEmpty && lineitemids.includes(event.lineItemId, 0) || !event.isEmpty && orderids.includes(event.campaignId, 0)) {pgm300a("300x250_middle_3");}};
        if (event.slot.getSlotElementId() === '320x50_bottom') {if (!event.isEmpty && lineitemids.includes(event.lineItemId, 0) || !event.isEmpty && orderids.includes(event.campaignId, 0)) {pgm300a("320x50_bottom");}};
        if (event.slot.getSlotElementId() === '320x50_bottom_2') {if (!event.isEmpty && lineitemids.includes(event.lineItemId, 0) || !event.isEmpty && orderids.includes(event.campaignId, 0)) {pgm300a("320x50_bottom_2");}};        
        if (event.slot.getSlotElementId() === '320x50_top')  {if (!event.isEmpty && mlineitemids.includes(event.lineItemId, 0) || !event.isEmpty && morderids.includes(event.campaignId, 0)) {pgm320();}}
        if (event.slot.getSlotElementId() === '970x90_top')  {if (!event.isEmpty && xlineitemids.includes(event.lineItemId, 0) || !event.isEmpty && xorderids.includes(event.campaignId, 0)) {pgm970();}}
        
        if(event.slot.getSlotElementId() === "970x90_top" && !event.isEmpty) {
        /*
          const TopBillboard = document.getElementById('970x90_top').offsetHeight;
//           stickyBilboard(document.getElementById('970x90_top'));
          const varbody =  document.querySelector('.tovimagr');
          varbody.style.paddingTop = ''+TopBillboard+'px';
          */
            
            const stickyToggleHeight = document.getElementById('dk-ad-sticky-toggle').offsetHeight;
            console.log ('ThestickyToggleHeight:', stickyToggleHeight);
            const checkAd = function() {

                const adCheckedElement = $('.dk-ad-checker-section');
                adCheckedElement.each(function(){
                    let desktopAdElement = $(this).find('.dk-ad-content-check-dskt');
                    let adCheckDesktop = $(this).find('.dk-ad-content-check-dskt').length;

                    if (adCheckDesktop === 0 ){
                        $(this).hide();
                    }
                });

            };

            checkAd();

            if($('.dk-ad-checker-section:not(.dk-ad-checker--static) .dk-ad-sticky-toggle').is(':visible')){
                $('.vimasite').css('margin-top', stickyToggleHeight);
                $('.dk-ad-sticky-toggle').css('position', 'fixed');
                $('.dk-ad-sticky-toggle').css('top', '0');
                $('.dk-ad-close-cta').show();
        //        $('.dk-ad-sticky-toggle').css('transform', 'translateY(0px)');
            };

            if($('.dk-ad-checker--static .dk-ad-sticky-toggle').is(':visible')){
                $('.dk-ad-close-cta').show();
            };

            $('.dk-ad-close-stickt-cta').click(function(){
                $(this).closest('.dk-mobile-ad-sticky').fadeOut();
            });


            let buttonClicked = false; 
            $('.dk-ad-close-cta').click(function(){
                // $('.dk-ad-sticky-toggle').css('transform', 'translateY(-250px)');

                if($('.dk-ad-checker-section').hasClass('dk-ad-checker--static')){
                    $(this).closest('.dk-ad-checker--static').fadeOut();
                } else {
                    $('.dk-ad-sticky-toggle').css('transform', 'translateY(-'+stickyToggleHeight+'px)');
                } 

                $('.vimasite').css('margin-top','0');
                buttonClicked = true;
            });


            $(window).scroll(function() {
                if (buttonClicked == false){
                    const scrollPosition = $(window).scrollTop();
                    const stopPosition = 700;
                    const stickyElement = $('.dk-ad-sticky-toggle');

                    if (scrollPosition > stopPosition) {
                    //    stickyElement.css('transform', 'translateY(-250px)');
                      stickyElement.css('transform', 'translateY(-'+stickyToggleHeight+'px)');
                    } else {
                        stickyElement.css('transform', 'translateY(0px)');
                    }
                }
            });
            
        }
        
        });
        googletag.pubads().setCentering(true);
        googletag.enableServices();
        googletag.display(islot);
      
    });
</script>

<?php } else { ?>

<script>
    window.skinSize = 'small';
    var w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    if (w > 1300) {
        window.skinSize = 'large';
    }
    if (w <= 668) {
        var platform = 'mobile';
    } else {
        var platform = 'desktop';
    }

    function display320() {
        googletag.cmd.push(function() {
            googletag.display('320x50_bottom_2')
        });
        display320 = function() {}
    }

    function ways() {
        f = $(".das-mmiddle");
        d = $("#das-mmiddle-wp");
        var waypoint = new Waypoint({
            element: d[0],
            handler: function(n) {
                "up" === n ? f.addClass('ups') : "down" === n && f.removeClass('ups');
                display320()
            },
            offset: function() {
                return window.innerHeight
            }
        })
    }
</script>
<script async='async' src='https://securepubads.g.doubleclick.net/tag/js/gpt.js'></script>
<script>
    var googletag = googletag || {};
    googletag.cmd = googletag.cmd || [];
</script>
<script src="https://www.alteregomedia.org/files/js/gtags.js?v=1"></script>
<?php
if (is_category()) {
    $getcategories = explode(";", get_category_parents(get_category($cat)->term_id, false, ";", true));
    if (is_array($getcategories)) {
        array_pop($getcategories);
        $maincat = $getcategories[0];
    } else {
        $maincat = $getcategories;
    }
    if (count($getcategories) >= 2) {
        $subcat = $getcategories[1];
    } else {
        $subcat = "";
    }
} elseif (is_single()) {
    $getcatars = get_the_category();
    $pushcatar = array();
    $pushcatarparent = array();
    foreach ($getcatars as $getcatar) {
        if ($getcatar->category_parent != "0") {
            array_push($pushcatar, $getcatar->term_id);
        }
    }
    if (count($pushcatar) > 0) {
        $getcatego = explode(";", get_category_parents($pushcatar[0], false, ";", true));
        $maincat = $getcatego[0];
        $subcat = $getcatego[1];
    } else {
        foreach ($getcatars as $getcatar) {
            if ($getcatar->category_parent == "0") {
                array_push($pushcatarparent, $getcatar->slug);
            }
        }
        if (count($pushcatarparent) > 0) {
            $maincat = $pushcatarparent[0];
        } else {
            $maincat = "";
        }
        $subcat = "";
    }
}
?>
<script>
    var plink = "<?php echo home_url( $wp->request ); ?>";
    <?php if(is_single()) { ?>
    <?php
    $post_title = get_the_title();
    $post_summary = apply_filters( 'the_excerpt', get_the_excerpt() );
    $post_summary = str_replace('&quot;', '"', $post_summary);
    $post_summary = str_replace('"', '', $post_summary);
    $post_summary = str_replace('<p>', '', $post_summary);
    $post_summary = str_replace('</p>', '', $post_summary);
    $post_content = apply_filters('the_content',get_the_content());
    $post_tags = get_the_tags();
    ?>
    var title = '<?php echo htmlspecialchars($post_title, ENT_QUOTES, 'utf-8'); ?>';
    var summary = '<?php echo wp_strip_all_tags($post_summary); ?>';
    <?php
    $text = str_replace("'",'"',strip_tags( html_entity_decode( $post_content ) ) );
    $text = trim(preg_replace('/\s+/', ' ', $text));
    ?>
    var text = '<?php echo $text; ?>';
    <?php
    $thetags = array();
    $tags = "";
    if (!empty($post_tags)) {
        foreach ($post_tags as $onetag) {
            $thetags[] = $onetag->name;
        }
        $thetags = implode(" ", $thetags);
        $tags = str_replace("'", '"', strip_tags($thetags));
    ?>
    var tags = '<?php echo $tags; ?>';
    <?php } else { ?>
    var tags = '';
    <?php } ?>
    <?php } ?>
    try {setas()} catch (e) {var lineitemids = ''; var adserver = ''}
    googletag.cmd.push(function() {
        var header_mapping = googletag.sizeMapping().addSize([0, 0], []).addSize([670, 200], [[1000,250],[970, 250], [970, 90], [728, 90]]).build();
        var skin_mapping = googletag.sizeMapping().addSize([0, 0], []).addSize([1100, 200], [1920, 1200]).build();
        var right_mapping = googletag.sizeMapping().addSize([0, 0], []).addSize([875, 200], [[300, 250], [300, 450], [300, 600]]).build();
        var over_mapping = googletag.sizeMapping().addSize([0, 0], []).addSize([1000, 200], [1, 1]).build();
        var textlink_mapping = googletag.sizeMapping().addSize([0, 0], []).addSize([600, 200], ['fluid',[520, 40],[300, 250]]).build();
        var mapping_320 = googletag.sizeMapping().addSize([0, 0], [320, 50]).addSize([668, 0], []).build();
        var middle_mapping = googletag.sizeMapping().addSize([0, 0], []).addSize([300, 250], [[300, 250]]).addSize([300, 500], [[300, 600], [300, 250]]).addSize([668, 0], []).build();
        var bottom_mapping = googletag.sizeMapping().addSize([0, 0], []).addSize([300, 250], [[320, 50], [300, 250], [300, 450]]).addSize([300, 500], [[320, 50], [300, 250], [300, 450], [300, 600]]).addSize([668, 0], []).build();
        googletag.defineSlot('/28509845/tovima_group/tovima_inside_320x50_top', [320, 50], '320x50_top').defineSizeMapping(mapping_320).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_mobile_300x250_middle', [[300, 600], [300, 250]], '300x250_middle').defineSizeMapping(middle_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_mobile_300x250_middle_home', [[300, 600], [300, 250]], '300x250_middle_home').defineSizeMapping(middle_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_inside_320x50_bottom', [[320, 50], [300, 250], [300, 450], [300, 600]], '320x50_bottom').defineSizeMapping(bottom_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_inside_320x50_bottom_2', [[320, 50], [300, 250], [300, 450], [300, 600]], '320x50_bottom_2').defineSizeMapping(bottom_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_1x1_over', [1, 1], '1x1_over').defineSizeMapping(over_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_home_970x90_top', [[970, 250], [970, 90], [728, 90], [1000, 250]], '970x90_top').defineSizeMapping(header_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_inside_300x250_r1', [[300, 250], [300, 450], [300, 600]], '300x250_r1').defineSizeMapping(right_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_inside_300x250_r2', [[300, 250], [300, 450], [300, 600]], '300x250_r2').defineSizeMapping(right_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_inside_300x250_r3', [[300, 250], [300, 450], [300, 600]], '300x250_r3').defineSizeMapping(right_mapping).addService(googletag.pubads());
        <?php /* if(is_archive() || is_singular('post')) { ?>
        googletag.defineSlot('/28509845/tovima_group/tovima_inside_1x1_out_1', [1920, 1200], '1x1_out').defineSizeMapping(skin_mapping).addService(googletag.pubads());
        <?php } */ ?>
        <?php if(is_singular('post')){ ?>
        // googletag.defineSlot('/28509845/tovima_group/tovima_inside_300x250_m1', [[300, 250], [300, 450], [300, 600]], '300x250_m1').defineSizeMapping(right_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_inside_300x250_m1', [[300, 250], [520, 40]], '300x250_m1').defineSizeMapping(textlink_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_inside_300x250_m2', [[300, 250], [520, 40]], '300x250_m2').defineSizeMapping(textlink_mapping).addService(googletag.pubads());  
        googletag.defineSlot('/28509845/tovima_group/tovima_Mobile_300x250_middle_2', [[300, 600], [300, 250]], '300x250_middle_2').defineSizeMapping(middle_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_mobile_300x250_middle_3', [[300, 600], [300, 250]], '300x250_middle_3').defineSizeMapping(middle_mapping).addService(googletag.pubads());
        
        <?php } ?>
        var islot = googletag.defineOutOfPageSlot('/28509845/tovima_group/tovima_interstitial', googletag.enums.OutOfPageFormat.INTERSTITIAL);
        if (islot) {islot.addService(googletag.pubads());}
        <?php if(is_single()){ ?>
        googletag.defineSlot('/28509845/tovima_group/tovima_textlink_1', [520, 40], 'textlink_1').defineSizeMapping(textlink_mapping).addService(googletag.pubads());
        googletag.defineSlot('/28509845/tovima_group/tovima_640x360_overlay', [640, 360], '640x360').addService(googletag.companionAds()).addService(googletag.pubads());
        <?php } ?>
        googletag.pubads().setTargeting('AdServer', adserver);
        googletag.pubads().setTargeting('Item_Id', '<?php echo $varpostid; ?>');
        <?php if( is_404() ) { ?>
        googletag.pubads().setTargeting('Category', 'service_page');
        googletag.pubads().setTargeting('SubCategory', '404');
        <?php } elseif(is_category() || is_single() ) { ?>
        googletag.pubads().setTargeting('Category', '<?php echo $maincat; ?>');
        googletag.pubads().setTargeting('SubCategory', '<?php echo $subcat; ?>');
        <?php } elseif(is_tag()) { ?>
        googletag.pubads().setTargeting('Category', 'tags');
        googletag.pubads().setTargeting('SubCategory', '<?php echo $tag->slug; ?>');
        <?php } ?>
        <?php
        if (is_single()) {
            global $post;
            if (has_tag()) {
                $restags = array();
                foreach (get_the_tags() as $resu) {
                    $restags[] = "'".str_replace("'", '`', str_replace('"', '`', $resu->name))."'";
                    $restags1[] = str_replace("'", "", $resu->name);
                }
        ?>
        googletag.pubads().setTargeting('Tags', [<?php echo implode(',',$restags); ?>]);
        <?php
            }
        }
        ?>
        googletag.pubads().setTargeting('Version', 'English');        
        googletag.pubads().setTargeting('Skin', skinSize);
        googletag.pubads().setTargeting('Platform', platform);
        <?php $postl = wordcount(strip_tags ( $post->post_content)); ?>
<?php if ( $postl < 301 ) { $postlengh = "small"; } elseif ( $postl > 301 && $postl < 600 ) { $postlengh = "medium"; } elseif ( $postl > 601 ) { $postlengh = "large"; } ?>
        googletag.pubads().setTargeting('Length', '<?php echo $postlengh; ?>');
        googletag.pubads().collapseEmptyDivs(true);
        
        googletag.pubads().enableVideoAds();
        googletag.pubads().addEventListener('slotRenderEnded', function(event) {
        // if(event.slot.getSlotElementId() === '1x1_out' && !event.isEmpty ){ document.querySelector('body').classList.add('fxskin'); }
        if (event.slot.getSlotElementId() === '300x250_middle') {ways();}
        if (event.slot.getSlotElementId() === '300x250_r1' || event.slot.getSlotElementId() === '300x250_middle' || event.slot.getSlotElementId() === '300x250_middle_home') 
        {if (!event.isEmpty && lineitemids.includes(event.lineItemId, 0) || !event.isEmpty && orderids.includes(event.campaignId, 0)) {pgm300();}};
        if (event.slot.getSlotElementId() === '300x250_middle_2') {if (!event.isEmpty && lineitemids.includes(event.lineItemId, 0) || !event.isEmpty && orderids.includes(event.campaignId, 0)) {pgm300a("300x250_middle_2");}};
        if (event.slot.getSlotElementId() === '300x250_middle_3') {if (!event.isEmpty && lineitemids.includes(event.lineItemId, 0) || !event.isEmpty && orderids.includes(event.campaignId, 0)) {pgm300a("300x250_middle_3");}};
        if (event.slot.getSlotElementId() === '320x50_bottom') {if (!event.isEmpty && lineitemids.includes(event.lineItemId, 0) || !event.isEmpty && orderids.includes(event.campaignId, 0)) {pgm300a("320x50_bottom");}};
        if (event.slot.getSlotElementId() === '320x50_bottom_2') {if (!event.isEmpty && lineitemids.includes(event.lineItemId, 0) || !event.isEmpty && orderids.includes(event.campaignId, 0)) {pgm300a("320x50_bottom_2");}};
        if (event.slot.getSlotElementId() === '320x50_top')  {if (!event.isEmpty && mlineitemids.includes(event.lineItemId, 0) || !event.isEmpty && morderids.includes(event.campaignId, 0)) {pgm320();}}
        if (event.slot.getSlotElementId() === '970x90_top')  {if (!event.isEmpty && xlineitemids.includes(event.lineItemId, 0) || !event.isEmpty && xorderids.includes(event.campaignId, 0)) {pgm970();}}
        
        
        if(event.slot.getSlotElementId() === "970x90_top" && !event.isEmpty) {
        /*
          const TopBillboard = document.getElementById('970x90_top').offsetHeight;
//           stickyBilboard(document.getElementById('970x90_top'));
          const varbody =  document.querySelector('.tovimagr');
          varbody.style.paddingTop = ''+TopBillboard+'px';
          */
            
            const stickyToggleHeight = document.getElementById('dk-ad-sticky-toggle').offsetHeight;
            console.log ('ThestickyToggleHeight:', stickyToggleHeight);
            const checkAd = function() {

                const adCheckedElement = $('.dk-ad-checker-section');
                adCheckedElement.each(function(){
                    let desktopAdElement = $(this).find('.dk-ad-content-check-dskt');
                    let adCheckDesktop = $(this).find('.dk-ad-content-check-dskt').length;

                    if (adCheckDesktop === 0 ){
                        $(this).hide();
                    }
                });

            };

            checkAd();

            if($('.dk-ad-checker-section:not(.dk-ad-checker--static) .dk-ad-sticky-toggle').is(':visible')){
                $('.vimasite').css('margin-top', stickyToggleHeight);
                $('.dk-ad-sticky-toggle').css('position', 'fixed');
                $('.dk-ad-sticky-toggle').css('top', '0');
                $('.dk-ad-close-cta').show();
        //        $('.dk-ad-sticky-toggle').css('transform', 'translateY(0px)');
            };

            if($('.dk-ad-checker--static .dk-ad-sticky-toggle').is(':visible')){
                $('.dk-ad-close-cta').show();
            };

            $('.dk-ad-close-stickt-cta').click(function(){
                $(this).closest('.dk-mobile-ad-sticky').fadeOut();
            });


            let buttonClicked = false; 
            $('.dk-ad-close-cta').click(function(){
                // $('.dk-ad-sticky-toggle').css('transform', 'translateY(-250px)');

                if($('.dk-ad-checker-section').hasClass('dk-ad-checker--static')){
                    $(this).closest('.dk-ad-checker--static').fadeOut();
                } else {
                    $('.dk-ad-sticky-toggle').css('transform', 'translateY(-'+stickyToggleHeight+'px)');
                } 

                $('.vimasite').css('margin-top','0');
                buttonClicked = true;
            });


            $(window).scroll(function() {
                if (buttonClicked == false){
                    const scrollPosition = $(window).scrollTop();
                    const stopPosition = 700;
                    const stickyElement = $('.dk-ad-sticky-toggle');

                    if (scrollPosition > stopPosition) {
                    //    stickyElement.css('transform', 'translateY(-250px)');
                      stickyElement.css('transform', 'translateY(-'+stickyToggleHeight+'px)');
                    } else {
                        stickyElement.css('transform', 'translateY(0px)');
                    }
                }
            });
            
        }
          
        });
        googletag.pubads().setCentering(true);
        googletag.enableServices();
        googletag.display(islot);
      
      
    });

    var invideoslot = '/28509845/tovima_group/tovima_640vast';
    var randomNumber=Math.floor(10000000000 + Math.random() * 90000000000);
    <?php if(is_tag()) { ?>
    var optionsString = 'Category=tags&SubCategory=<?php echo $tag->slug; ?>&Item_Id=<?php echo $varpostid; ?>&Skin=' + skinSize + '&Platform=' + platform + '&AdServer=' + adserver;
    var optionsUri = 'https://pubads.g.doubleclick.net/gampad/ads?sz=640x480%7C400x300&ad_type=audio_video&iu=/28509845/tovima_group/tovima_640vast&impl=s&gdfp_req=1&vpmute=1&env=vp&output=vast&unviewed_position_start=1&url=' + encodeURIComponent(plink) + '&description_url=' + encodeURIComponent(plink) +'&correlator=' + randomNumber + '&ciu_szs=640x360&cust_params=' + encodeURIComponent(optionsString);
    <?php } else { ?>
    var optionsString = 'Category=<?php echo $maincat; ?>&SubCategory=<?php echo $subcat; ?>&Item_Id=<?php echo $varpostid; ?>&Tags=<?php echo (isset($restags1) && count($restags1)) ? implode(',', $restags1) : ''; ?>&Length=<?php echo $postlengh; ?>&Skin=' + skinSize + '&Platform=' + platform + '&AdServer=' + adserver;
    var optionsUri = 'https://pubads.g.doubleclick.net/gampad/ads?sz=640x480%7C400x300&ad_type=audio_video&iu=/28509845/tovima_group/tovima_640vast&impl=s&gdfp_req=1&vpmute=1&env=vp&output=vast&unviewed_position_start=1&url=' + encodeURIComponent(plink) + '&description_url=' + encodeURIComponent(plink) +'&correlator=' + randomNumber + '&ciu_szs=640x360&cust_params=' + encodeURIComponent(optionsString);
    <?php } ?>

    var options = {
        id: 'content_video',
        adTagUrl: optionsUri
    };
</script>

<?php } ?>