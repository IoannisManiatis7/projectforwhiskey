<!-- <xsl:stylesheet -->

<?php
date_default_timezone_set ( 'Europe/Athens' );
  get_header();
  if(isset($_GET['date'])){
    $thedate = date('Ymd', strtotime($_GET['date']));
  } else {
    $thedate = date('Ymd');
  }
  $thedate = date('Ymd', strtotime($thedate . " -".date('w', strtotime( $thedate ))." days"));
  $datename = array("Κυριακή","Δευτέρα","Τρίτη","Τετάρτη","Πέμπτη","Παρασκευή","Σάββατο");
?>
  <?php if(isset($_COOKIE['user_email'])) { ?>
  <?php } else { ?>
  <div class="print-disclaimer">
    <div class="maxgridrow">
    <div class="level columns is-justify-content-space-between">
    <div class="column is-8">
    <h3 class="line-height-1 py-1 manrope is-size-normal my-0 f-600">
      Ένα μέρος του περιεχομένου του tovima.gr είναι διαθέσιμο μόνο σε συνδρομητές.    
    </h3>
    <h4 class="line-height-1 py-2 manrope is-size-5 my-0 f-400">
      Αποκτήστε μία συνδρομή σήμερα ή κάντε είσοδο για να έχετε πλήρη πρόσβαση.
    </h4>
    </div>
    <div class="column is-4 has-text-right">
    <a href="https://www.helioskiosk.gr/newspapers-digital" target="_blank" class="call-action-button white-button">
    ΑΠΟΚΤΗΣΤΕ ΣΥΝΔΡΟΜΗ ΣΗΜΕΡΑ
    </a>
    </div>    
    </div>
    </div>
  </div>
  <?php } ?>  
<div class="wrap-page-newspaper">
<div class="minigridrow">
  
  <div class="columns is-mobile level is-multiline">
<div class="is-half column">
<h1 class="m-0 is-size-1 f-400 zonaultra">Πρωτοσέλιδο</h1>
<h4 class="m-0 pt-4 is-size-5 f-600 darkblue-c manrope">
  <?php $ccdate = $datename[date('w', strtotime($thedate))] . " " . date('d/m/Y', strtotime($thedate)); echo $ccdate; ?>  
</h4>   
</div>
<div class="column is-half has-text-right">
<div class="inputdate calendar_paper">
  <input class="is-datepick" placeholder="<?php echo date('d/m/Y', strtotime($thedate)); ?>" type="text" id="getthedate" onchange="getDate()"> 
</div>
</div>
  
<div class="column is-full">
  <?php
  $arg = array(
  'posts_per_page' => 1, 'no_found_rows' => true, 'post_type' => 'kioski_posts', 'date_query' => array( array( 'after'  => '2 years ago')), 'meta_query' => array( array( 'key' => 'kioski_date', 'value'   => $thedate, 'compare' => '<=') )
  );
  $getpost = get_posts($arg);
  foreach ($getpost as $post) { setup_postdata( $post ); ?>
  
  <div class="newspaper-issue">
    
      <?php
        if(empty(get_field('locked_article_paper')) || isset($_COOKIE['premiumAids'])) {
           $thecook = explode(',',$_COOKIE['premiumAids']);
           if( empty(get_field('locked_article_paper')) || in_array(35,$thecook) || in_array(36,$thecook)) { ?>

      <?php if( get_field('tanea__pdf_shortcode')) {
              $varpdf = get_field('tanea__pdf_shortcode');
              echo do_shortcode( $varpdf); ?>
      <?php } else {
            echo '<span class="twenty zonabold">Η πλήρης έκδοση δεν ειναι διαθέσιμη</span>';
            echo get_the_post_thumbnail();
            } // WE HAVENT PAPER
            } // WE ARE LOGGED OR UNCLOCKED
           ?>

       <?php } else { 
          echo get_the_post_thumbnail();
        } ?>
  </div>
  
  <?php  } wp_reset_postdata(); ?>
</div>  
  
</div>
</div>
</div>

<?php /*
<div class="maxgridrow">
  <div class="paper-footer">
    <div class="minigridrow">
      <div class="columns level">
        <div class="column is-4">
        <h2 class="is-size-1 m-0 f-400 zonabold">Γίνε συνδρομητής</h2>
        </div>
        
        <div class="column is-4">
          <p class="newspaper-disclaimer m-0 is-size-4" style="color:#737373">Αν θέλετε να δείτε την πλήρη έκδοση θα πρέπει να είστε συνδρομητής</p>
        </div>
        
        <div class="column is-4">
          <div class="newspaper-buttons">
          <button onclick="loginButtton()">Σύνδεση</button>
          <a rel="nofollow" href="https://www.helioskiosk.gr/register" target="_blank" title="Register" class="register-member">Εγγραφή</a>
          </div>
        </div>        
        
      </div>
    </div>
  </div>
</div>
*/ ?>

<script>
  
    $(function() {
      $( "#getthedate" ).datepicker({
       format: 'dd-mm-yyyy'
      });
    });  
  
  function getDate() {
    var date = document.getElementById('getthedate');
    window.location.replace("/to-vima/?date=" + date.value+"&v="+Math.floor(Math.random() * 10000));
  }
</script>
<?php get_footer();?>