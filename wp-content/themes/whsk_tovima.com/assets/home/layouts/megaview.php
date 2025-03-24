<div class="megaview">
  <div class="columns is-multiline is-variable <?php echo VARIABLES; ?>">
    
  <div class="column is-full is-hidden-fullwindow">
    <div class="columns is-mobile is-multiline is-variable <?php echo VARIABLES; ?>">    
      <div class="column is-fulll">
        <div class="wrap-header-section">        
          <h2 class="header-section zonaultra f-400 white-c uppercase">News Videos
        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 100 13.014" enable-background="new 0 0 100 13.014" xml:space="preserve">
        <g>
        <path d="M93.903,0L81.282,0.003c-2.117,0-3.608,1.48-3.64,3.579v2.149h-6.069v5.163c0,0-4.748-0.015-4.791-0.015
        c-2.686-0.035-4.898-1.662-4.898-4.4c0-2.658,2.146-4.259,4.809-4.329V2.144h9.894V0H61.72c-2.882,0-5.451,2.579-5.988,5.441
        H41.928c0.482-2.038,2.392-3.246,4.693-3.308h0.072v0.011h9.227V0h-14.28c-2.863,0-5.429,2.556-5.977,5.408V3.65
        c0-2.137-1.5-3.65-3.64-3.65H6.095C2.854,0,0,3.252,0,6.518c0,3.264,2.854,6.489,6.095,6.489h4.06v-0.074
        c-2.245-0.615-3.717-3.009-3.717-6.177c0-2.785,2.163-4.597,4.888-4.633h4.324v10.884h6.148V3.076
        c0-0.328-0.049-0.641-0.142-0.932h7.861v10.863h6.145V7.636c0.548,2.845,3.114,5.371,5.977,5.371h14.28v-2.127
        c0,0-9.205,0-9.217,0c-2.304-0.035-4.257-1.232-4.759-3.306h13.78c0.524,2.87,3.108,5.434,5.998,5.434l12.929,0.007
        c1.45,0,2.673-1.017,2.993-2.381v2.374h6.136V7.573h9.74c-0.221,2.755-1.628,4.799-3.667,5.36v0.074h4.052
        c3.24,0,6.097-3.225,6.097-6.489C100,3.252,97.143,0,93.903,0z M83.778,5.441V2.144h4.893c2.306,0,4.158,1.267,4.719,3.297H83.778
        z"></path>
        </g>
        </svg>    
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="column is-visible-fullwindow is-narrow">
    <div class="rect-width full-height">
      <div class="wrap-header-section inner-fullwindow-items">
        <h2 class="header-section zonaultra f-400 white-c uppercase">News Videos
        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 100 13.014" enable-background="new 0 0 100 13.014" xml:space="preserve">
        <g>
        <path d="M93.903,0L81.282,0.003c-2.117,0-3.608,1.48-3.64,3.579v2.149h-6.069v5.163c0,0-4.748-0.015-4.791-0.015
        c-2.686-0.035-4.898-1.662-4.898-4.4c0-2.658,2.146-4.259,4.809-4.329V2.144h9.894V0H61.72c-2.882,0-5.451,2.579-5.988,5.441
        H41.928c0.482-2.038,2.392-3.246,4.693-3.308h0.072v0.011h9.227V0h-14.28c-2.863,0-5.429,2.556-5.977,5.408V3.65
        c0-2.137-1.5-3.65-3.64-3.65H6.095C2.854,0,0,3.252,0,6.518c0,3.264,2.854,6.489,6.095,6.489h4.06v-0.074
        c-2.245-0.615-3.717-3.009-3.717-6.177c0-2.785,2.163-4.597,4.888-4.633h4.324v10.884h6.148V3.076
        c0-0.328-0.049-0.641-0.142-0.932h7.861v10.863h6.145V7.636c0.548,2.845,3.114,5.371,5.977,5.371h14.28v-2.127
        c0,0-9.205,0-9.217,0c-2.304-0.035-4.257-1.232-4.759-3.306h13.78c0.524,2.87,3.108,5.434,5.998,5.434l12.929,0.007
        c1.45,0,2.673-1.017,2.993-2.381v2.374h6.136V7.573h9.74c-0.221,2.755-1.628,4.799-3.667,5.36v0.074h4.052
        c3.24,0,6.097-3.225,6.097-6.489C100,3.252,97.143,0,93.903,0z M83.778,5.441V2.144h4.893c2.306,0,4.158,1.267,4.719,3.297H83.778
        z"></path>
        </g>
        </svg>
        </h2>
      </div>
    </div>
  </div>
    
  <div class="column">
    <div class="columns is-multiline is-mobile is-variable <?php echo VARIABLES; ?>">
      <?php
      $cc = 0;
      $args = array(
      'numberposts' => 1, 
      'tag_slug__in' => 'mega', 'no_found_rows' => true, 
      'post_status' =>'publish', 'date_query' => array( array( 'after'  => WHSK_DATE_QUERY ))
      );
      $vidrowposts = get_posts( $args );
      foreach($vidrowposts as $post) : setup_postdata($post); $cc++;
      $extraclass = null;
      $varsize = 'is-size-1-desktop is-size-3-1-mobile zonareg white-c f-400'; 
      ?>
      <div class="column is-full-touch">
       <?php include(TEMPLATEPATH .'/assets/blocks/abs-box.php'); ?>
      </div>
      <?php endforeach; wp_reset_postdata(); ?>
      <div class="column is-narrow-desktop is-full-touch">
        <div class="sidebar-width">
        <div class="columns is-mobile is-multiline is-variable <?php echo VARIABLES; ?>">
          <?php
          $cc = 0;
          $args = array(
          'numberposts' => 2, 'offset' => 1, 'tag_slug__in' => 'mega', 'no_found_rows' => true,  'post_status' =>'publish', 'date_query' => array( array( 'after'  => WHSK_DATE_QUERY ))
          );
          $vidrowposts = get_posts( $args );
          foreach($vidrowposts as $post) : setup_postdata($post); $cc++;
          $extraclass = null;
          $varsize = 'is-size-3 zonareg white-c f-400'; 
          ?>
          <div class="column is-full-desktop is-half-tablet is-half-mobile is-full-small">
             <?php include(TEMPLATEPATH .'/assets/blocks/relative-box.php'); ?>
          </div>
          <?php endforeach; wp_reset_postdata(); ?>          
        </div>
        </div>
      </div>
    </div>
  </div>    
    
  </div>
</div>