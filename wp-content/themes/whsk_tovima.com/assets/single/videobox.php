<?php 
    $inviewurl = get_field('postvideo_url');
    if($inviewurl) {
    $m3u8_content = file_get_contents(get_field('postvideo_url'));
    $m3u8_lines = explode("\n", $m3u8_content);

    $resolution = null;
    $bandwidth = null;
    $is_vertical = false;

    foreach ($m3u8_lines as $line) {
        // Check if the line starts with '#EXT-X-STREAM-INF'
        if (strpos($line, '#EXT-X-STREAM-INF') === 0) {
            // Extract the RESOLUTION and BANDWIDTH from the line
            preg_match('/RESOLUTION=([0-9]+)x([0-9]+)/', $line, $matches);
            if (count($matches) === 3) {
                $width = intval($matches[1]);
                $height = intval($matches[2]);
                if ($resolution === null || $width * $height > $resolution) {
                    $resolution = $width * $height;
                    $bandwidth = intval(substr($line, strpos($line, 'BANDWIDTH=') + 10));
                    // Check if the video is vertical
                    if ($height > $width) {
                        $is_vertical = true;
                    }
                }
            }
        }
    }
    ?>

    <?php if (strpos($inviewurl, 'youtube') !== false) {
    $embed_url = str_replace("watch?v=", "embed/", $inviewurl);
    echo '<div class="is-relative" style="width:100%;padding-bottom:56.25%;height:0">';
    echo $iframe = '<iframe style="position:absolute;top:0;left:0;height:100%;width:100%" width="560" height="315" src="' . $embed_url . '" frameborder="0" allowfullscreen></iframe>';
    echo '</div>'; ?>

    <?php } elseif ($is_vertical) { ?>

    <div class="article-assets vert__v">
        <video id="player" class="plyr-player inview-player" muted playsinline automatically controls data-poster="<?php echo $thumb_full[0]; ?>" data-plyr-config='{"ratio": 9:16, "autoplay": true, "volume": 0, "quality": { "default": 720 } }'>
          <source src="<?php echo get_field('postvideo_url'); ?>" type="application/x-mpegURL" />
        </video>
      </div>
      <style>
      .article-assets.vert__v .plyr__video-wrapper.plyr__video-wrapper--fixed-ratio {aspect-ratio: 9 / 16 !important}
      .article-assets.vert__v {max-width:400px;margin: 0 auto;min-height:650px}
    </style>      

    <?php } else { ?>
    <div class="wrap__video__article">
      <video id="player" class="plyr-player inview-player" muted playsinline automatically controls data-poster="<?php echo $thumb_full[0]; ?>" data-plyr-config='{"autoplay": true, "volume": 0, "quality": { "default": 720 } }'>
        <source src="<?php echo get_field('postvideo_url'); ?>" type="application/x-mpegURL" />
      </video>
    </div>
    <?php } } ?>