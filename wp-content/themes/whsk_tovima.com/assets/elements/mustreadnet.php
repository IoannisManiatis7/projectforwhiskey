<?php
$utmlink = '';

if (is_home()) {
    $source = 'hp_mustread_widget';
} else {
    $source = 'article_mustread_widget';
}

$utmlink = 'utm_source=tovimagr&utm_medium=' . $source . '&utm_campaign=NetworkWidget';

?>

<div class="columns is-mobile is-multiline is-variable <?php echo VARIABLES; ?>">
    <?php if (have_rows('must_read_repearer', 'external_posts')) { ?>

        <?php
        $mrs = 0;
        while (have_rows('must_read_repearer', 'external_posts')) : the_row();
            $mrs++;
            if ($mrs > 6) {
                continue;
            }

            $rptitle = get_sub_field('mr_rpt_title');
            $rplink = get_sub_field('mr_rpt_link');
            $rpimage = get_sub_field('mr_rpt_image');
            $rpbg = get_sub_field('mr_rpt_bgx');
            $rptext = get_sub_field('mr_rpt_text');
            $rpfeed = get_sub_field('mr_rpt_row');
            $size = 'medium';
            $rpimage = $rpimage['sizes'][$size];

            if (strpos($rplink, '?') !== false) {
                $utmlinknew = "&" . $utmlink;
            } else {
                $utmlinknew = "?" . $utmlink;
            }

            $rpbrand = get_sub_field('mr_rpt_brand');
if ($rpbrand == 'ot') {
    $logo = 'otLogo';
    $sitename = 'OT';
    $link = 'www.ot.gr';
    $feed = 'https://www.ot.gr/app/';
} elseif ($rpbrand == 'tovima') {
    $logo = 'toVimaLogo';
    $sitename = 'Το ΒΗΜΑ';
    $link = 'www.tovima.gr';
    $feed = 'https://www.ot.gr/app/';
} elseif ($rpbrand == 'tanea') {
    $logo = 'taNeaLogo';
    $link = 'www.tanea.gr';
    $sitename = 'TA NEA';
    $feed = 'https://www.tanea.gr/mobileapp-home/';
} elseif ($rpbrand == 'imommy') {
    $logo = 'imommyLogo';
    $link = 'www.imommy.gr';
    $sitename = 'IMOMMY';
    $feed = 'https://www.vita.gr/mobile-app';
} elseif ($rpbrand == 'vita') {
    $logo = 'vitaLogo';
    $link = 'www.vita.gr';
    $sitename = 'VITA';
    $feed = 'https://www.vita.gr/mobile-app';
} elseif ($rpbrand == 'mega') {
    $logo = 'megaLogo';
    $link = 'www.megatv.com';
    $sitename = 'MEGA';
    $feed = 'https://www.megatv.com/wp-content/mobile/index.php?page=gegonota';
} elseif ($rpbrand == 'ingr') {
    $logo = 'inLogo';
    $link = 'www.in.gr';
    $sitename = 'IN';
    $feed = 'https://www.in.gr/mobileapp-home/';
} elseif ($rpbrand == 'shopflix') {
    $logo = 'shopflixLogo';
    $link = 'www.shopflix.gr';
    $sitename = 'SHOPFLIX';
} elseif ($rpbrand == 'to10') {
    $logo = 'to10grLogo';
    $link = 'www.to10.gr';
    $sitename = 'TO 10';
} elseif ($rpbrand == 'bscience') {
    $logo = 'bScienceLogo';
    $link = 'www.in.gr/bscience';
    $sitename = 'B Science';
}

if ($rpfeed) {
    $getjsonfile = file_get_contents($feed);

    if ($rpbrand === 'mega') {
        $decodejson = json_decode($getjsonfile, true)['toparts'];
    } elseif ($rpbrand === 'ot') {
        $decodejson = json_decode($getjsonfile, true)['top']['posts'];
    } else {
        $decodejson = json_decode($getjsonfile, true)[0]['posts'];
    }

    if (!empty($decodejson)) {
        foreach ($decodejson as $objectc => $posts) { if($objectc > 0) continue;
            if (isset($posts['title']['rendered'])) {
              $rptitle = $posts['title']['rendered'];
            } elseif (isset($posts['title'])) {
              $rptitle = $posts['title'];
            }

            if (isset($posts['cwp_featured_medium'])) {
                $rpimage = $posts['cwp_featured_medium'];
            } elseif (isset($posts['image'])) {
                $rpimage = $posts['image'];
            }

            if (isset($posts['link'])) {
                $rplink = $posts['link'];
            } else {
                $rplink = '';
            }
        }
    }
}

                                                                   
        ?>
    <div class="column is-2-desktop is-half-small is-4-tablet is-4-mobile is-relative">
      <a href="<?php echo $rplink; ?><?php echo $utmlinknew; ?>" class="is-block relative-box is-relative <?php if($rpbg) { echo 'highlighted'; } ?>" <?php if($rpbg) {echo 'style="padding:8px;background-color:'.$rpbg.'"';} ?>>
      <div class="wrap-thumb">
      <figure class="tile-image thumb-holder">
        <img class="imagefit" alt="<?php echo $rptitle; ?>" 
        width="450" 
        height="250"
        src="<?php echo $rpimage; ?>" loading="lazy" />        
      </figure>
      </div>
      <div class="tile-content">
        <div class="wrap-main-tile-content">
        <div class="wrap-ohead">
          <span class="manrope ex-sitename" <?php if($rptext) {echo 'style="color:'.$rptext.'"';} ?>><?php echo $sitename; ?></span>
          <h3 class="o-head f-400 my-0 is-size-4-desktop is-size-4-tablet is-size-5-mobile zonabold" <?php if($rptext) {echo 'style="color:'.$rptext.'"';} ?>>
            <?php echo $rptitle; ?>
          </h3>
          </div>        
        </div>
      </div>
      </a>
    </div>
    <?php endwhile; ?>
    <?php } ?>
  </div>
