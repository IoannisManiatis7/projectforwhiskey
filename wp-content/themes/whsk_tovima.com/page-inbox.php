<?php
/* Template Name: Insert Post Form */

//get_header(); 
?>

<style>
*{outline:0}
a,a:hover,a:visited{color:#00e;text-decoration:none;font-weight:bold}
body{font-size:15px;font-family:Arial}
#colophon,#superheader{display:none}
.inxform input[type="text"]{-webkit-appearance:none;-moz-appearance:none;border:0;font-size:15px;font-family:inherit;float:left;color:#000;width:50%;padding:0;box-shadow:none;border-radius:0;line-height:1.6}
.inxform{display:flex;align-items:center;width:100%;padding-bottom:10px;border-bottom:1px solid #DDD;margin-bottom:10px;position:relative}
input[type="submit"].ghxy61{position:absolute;font-family:inherit;-webkit-appearance:none;-moz-appearance:none;font-size:15px;position:absolute;right:0;padding:5px 10px;border:1px solid #DDD}
.categories{line-height:1.6;color:red;width:160px;letter-spacing:-0.25px;margin-right:10px}
input[type="submit"].ghxy61:hover{background:green;cursor:pointer;color:#FFF}
ol{padding-inline-start:20px}
.tab{overflow:hidden;border:1px solid #ccc;background-color:#f1f1f1}
.tab button{background-color:inherit;float:left;border:0;outline:0;font-size:16px;font-weight:bold;cursor:pointer;padding:14px 16px;transition:.3s}
.tab button:hover{background-color:#ddd}
.tab button.active{background-color:#ccc}
.tabcontent{background-color:#FFF;display:none;padding:6px 12px;border:1px solid #ccc;border-top:0}
.tabcontent{animation:fadeEffect 1s}
@keyframes fadeEffect{from{opacity:0}
to{opacity:1}
}.inxform img{width:80px;overflow:hidden;margin-right:10px}
</style>

<?php
if(isset($_POST['submit'])) {
  $image_url = $_POST['mainimage'];
  $mainvideo = $_POST['mainvideo'];
  $title = $_POST['title'];
  $description = $_POST['description'];
  $maincontent = $_POST['maincontent'];


$my_post = array(
        'post_type' => 'post',
        'post_title' => $title,
        'post_excerpt' => $description,
        'post_status' => 'draft',
        'post_category' => array('90107'),
        'post_content' => $maincontent,
        'post_author' => 3,

    );

$post_ID = wp_insert_post($my_post);  

// function postmeta_img_insert($post_ID,$image_url) {

// Add Featured Image to Post
$upload_dir = wp_upload_dir(); // Set upload folder
$image_data = file_get_contents($image_url); // Get image data
$filename   = basename($image_url); // Create image file name

// Check folder permission and define file location
if (wp_mkdir_p( $upload_dir['path'] ) ) {
$file = $upload_dir['path'] . '/' . $filename;
}
else {
$file = $upload_dir['basedir'] . '/' . $filename;
}

// Create the image  file on the server
file_put_contents( $file, $image_data );

  
// Check image file type
$wp_filetype = wp_check_filetype( $filename, null );

// Set attachment data
$attachment = array(
'post_mime_type' => $wp_filetype['type'],
'post_title'     => sanitize_file_name( $filename ),
'post_content'   => '',
'post_status'    => 'inherit'
);
  
// Create the attachment
$attach_id = wp_insert_attachment( $attachment, $file, $post_ID );
// Include image.php
require_once(ABSPATH . 'wp-admin/includes/image.php');
// Define attachment metadata
$attach_data = wp_generate_attachment_metadata( $attach_id, $file );
// Assign metadata to attachment
wp_update_attachment_metadata( $attach_id, $attach_data );

  
// And finally assign featured image to post
set_post_thumbnail( $post_ID, $attach_id );
// }

$my_post = array(
//    'post_content' => $event_desc,
   'ID' => $post_ID
);

wp_update_post( $my_post );
update_post_meta($post_ID, $attach_id , true);
update_field('extra_video', $mainvideo, $post_ID);
  
}

?>

<div class="tab">
    <button class="tablinks active" onclick="openCity(event, 'ingr')">in.gr</button>
    <button class="tablinks" onclick="openCity(event, 'tanea')">Τα Νέα</button>
    <button class="tablinks" onclick="openCity(event, 'vitagr')">Vita.gr</button>
    <button class="tablinks" onclick="openCity(event, 'imommy')">iMommy</button>  
    <button class="tablinks" onclick="openCity(event, 'to10')">To10</button>
    <button class="tablinks" onclick="openCity(event, 'megatv')">MegaTV</button>
    <button class="tablinks" onclick="openCity(event, 'otgr')">OT.gr</button>
</div>

<div id="ingr" class="tabcontent" style="display:block;">
<?php
$getjsoningr = file_get_contents("http://wp.mgmt.in.gr/wp-json/wp/v2/posts?per_page=100");
$decodejsonin = json_decode($getjsoningr); 
// foreach($decodejson as $postszz ) { 
//if($postszz->type == 'top_articles' ) { 
?>
<h1>Τελευταία άρθρα in.gr</h1>
<ol>
      <?php 
      $objectc = 0;
      foreach($decodejsonin as $objectz ) { ?>
      <?php $objectc++; ?>
      <?php //if($objectc > 5) continue; ?>
<li>
<form action="" method="post" class="inxform">
    <?php $thdat = $objectz->date; 
          //$image_url = $objectz->cwp_featured_full;
      ?>
    <?php foreach ($objectz->cwp_category as $categorx ) {
      echo '<span class="categories">';
      echo $categorx->name;
      echo '</span>';
      break;
     } ?>
    <img src="<?php echo $objectz->cwp_featured_thumbnail; ?>" height="50px" />
    <input type="text" size="80" name="title" value="<?php echo $objectz->title->rendered; ?>">
    <input type="text" style="display:none" name="description" value="<?php echo strip_tags($objectz->excerpt->rendered); ?>">
    <textarea style="display:none" name="maincontent"><?php echo $objectz->content->rendered; ?></textarea>
    <textarea style="display:none" name="mainimage"><?php echo $objectz->cwp_featured_full; ?></textarea>
    <textarea style="display:none" name="mainvideo"><?php echo $objectz->extra_video; ?></textarea>
    <a href="<?php echo $objectz->link; ?>" target="_blank">Προβολή</a>
    <input type="submit" name="submit" value="Προσθήκη" class="ghxy61">
</form>
</li>
<?php }  
?>
</ol>
</div>
<div id="tanea" class="tabcontent">
<?php
$getjsonnea = file_get_contents("http://wp.mgmt.tanea.gr/wp-json/wp/v2/posts?per_page=100");
$decodejsonnea = json_decode($getjsonnea); 
// foreach($decodejson as $postszz ) { 
//if($postszz->type == 'top_articles' ) { 
?>
<h1>Τελευταία άρθρα Τα Νέα</h1>
<ol>
      <?php 
      $objectc = 0;
      foreach($decodejsonnea as $objectz ) { ?>
      <?php $objectc++; ?>
      <?php //if($objectc > 5) continue; ?>
<li>
<form action="" method="post" class="inxform">
    <?php $thdat = $objectz->date; ?>
    <?php foreach ($objectz->cwp_category as $categorx ) {
      echo '<span class="categories">';
      echo $categorx->name;
      echo '</span>';
      break;
     } ?>
    <img src="<?php echo $objectz->cwp_featured_thumbnail; ?>" height="50px" />  
    <input type="text" size="80" name="title" value="<?php echo $objectz->title->rendered; ?>">
    <input type="text" style="display:none" name="description" value="<?php echo strip_tags($objectz->excerpt->rendered); ?>">
    <textarea style="display:none" name="maincontent"><?php echo $objectz->content->rendered; ?></textarea>
    <textarea style="display:none" name="mainimage"><?php echo $objectz->cwp_featured_full; ?></textarea>
    <textarea style="display:none" name="mainvideo"><?php echo $objectz->extra_video; ?></textarea>  
    <a href="<?php echo $objectz->link; ?>" target="_blank">Προβολή</a>
    <input type="submit" name="submit" value="Προσθήκη" class="ghxy61">
</form>
</li>
<?php }  
?>
</ol>
</div>
<div id="vitagr" class="tabcontent">
<?php
$getjsonvitagr = file_get_contents("http://wp.mgmt.vita.gr/wp-json/wp/v2/posts?per_page=30");
$decodejsonvitagr = json_decode($getjsonvitagr); 
// foreach($decodejson as $postszz ) { 
//if($postszz->type == 'top_articles' ) { 
?>
<h1>Τελευταία άρθρα Vita.gr</h1>
<ol>
      <?php 
      $objectc = 0;
      foreach($decodejsonvitagr as $objectz ) { ?>
      <?php $objectc++; ?>
      <?php //if($objectc > 5) continue; ?>
<li>
<form action="" method="post" class="inxform">
    <?php $thdat = $objectz->date; ?>
    <?php foreach ($objectz->cwp_category as $categorx ) {
      echo '<span class="categories">';
      echo $categorx->name;
      echo '</span>';
      break;
     } ?>
    <img src="<?php echo $objectz->cwp_featured_thumbnail; ?>" height="50px" />  
    <input type="text" size="80" name="title" value="<?php echo $objectz->title->rendered; ?>">
    <input type="text" style="display:none" name="description" value="<?php echo strip_tags($objectz->excerpt->rendered); ?>">
    <textarea style="display:none" name="maincontent"><?php echo $objectz->content->rendered; ?></textarea>
    <textarea style="display:none" name="mainimage"><?php echo $objectz->cwp_featured_full; ?></textarea>
    <textarea style="display:none" name="mainvideo"><?php echo $objectz->extra_video; ?></textarea>  
    <a href="<?php echo $objectz->link; ?>" target="_blank">Προβολή</a>
    <input type="submit" name="submit" value="Προσθήκη" class="ghxy61">
</form>
</li>
<?php }  
?>
</ol>
</div>
<div id="imommy" class="tabcontent">
<?php
$getjsonimommy = file_get_contents("http://wp.mgmt.imommy.gr/wp-json/wp/v2/posts?per_page=30");
$decodejsonimommy = json_decode($getjsonimommy); 
// foreach($decodejson as $postszz ) { 
//if($postszz->type == 'top_articles' ) { 
?>
<h1>Τελευταία άρθρα iMOMMY.gr</h1>
<ol>
      <?php 
      $objectc = 0;
      foreach($decodejsonimommy as $objectz ) { ?>
      <?php $objectc++; ?>
      <?php //if($objectc > 5) continue; ?>
<li>
<form action="" method="post" class="inxform">
    <?php $thdat = $objectz->date; ?>
    <?php foreach ($objectz->cwp_category as $categorx ) {
      echo '<span class="categories">';
      echo $categorx->name;
      echo '</span>';
      break;
     } ?>
    <img src="<?php echo $objectz->cwp_featured_thumbnail; ?>" height="50px" />  
    <input type="text" size="80" name="title" value="<?php echo $objectz->title->rendered; ?>">
    <input type="text" style="display:none" name="description" value="<?php echo strip_tags($objectz->excerpt->rendered); ?>">
    <textarea style="display:none" name="maincontent"><?php echo $objectz->content->rendered; ?></textarea>
    <textarea style="display:none" name="mainimage"><?php echo $objectz->cwp_featured_full; ?></textarea>
    <textarea style="display:none" name="mainvideo"><?php echo $objectz->extra_video; ?></textarea>  
    <a href="<?php echo $objectz->link; ?>" target="_blank">Προβολή</a>
    <input type="submit" name="submit" value="Προσθήκη" class="ghxy61">
</form>
</li>
<?php }  
?>
</ol>
</div>
<div id="to10" class="tabcontent">
<?php
$getjsonto10 = file_get_contents("http://wp.mgmt.to10.gr/wp-json/wp/v2/posts?per_page=30");
$decodejsonto10 = json_decode($getjsonto10); 
// foreach($decodejson as $postszz ) { 
//if($postszz->type == 'top_articles' ) { 
?>
<h1>Τελευταία άρθρα To10.gr</h1>
<ol>
      <?php 
      $objectc = 0;
      foreach($decodejsonto10 as $objectz ) { ?>
      <?php $objectc++; ?>
      <?php //if($objectc > 5) continue; ?>
<li>
<form action="" method="post" class="inxform">
    <?php $thdat = $objectz->date; ?>
    <?php foreach ($objectz->cwp_category as $categorx ) {
      echo '<span class="categories">';
      echo $categorx->name;
      echo '</span>';
      break;
     } ?>
    <img src="<?php echo $objectz->cwp_featured_thumbnail; ?>" height="50px" />  
    <input type="text" size="80" name="title" value="<?php echo $objectz->title->rendered; ?>">
    <input type="text" style="display:none" name="description" value="<?php echo strip_tags($objectz->excerpt->rendered); ?>">
    <textarea style="display:none" name="maincontent"><?php echo $objectz->content->rendered; ?></textarea>
    <textarea style="display:none" name="mainimage"><?php echo $objectz->cwp_featured_full; ?></textarea>
    <textarea style="display:none" name="mainvideo"><?php echo $objectz->extra_video; ?></textarea>  
    <a href="<?php echo $objectz->link; ?>" target="_blank">Προβολή</a>
    <input type="submit" name="submit" value="Προσθήκη" class="ghxy61">
</form>
</li>
<?php }  
?>
</ol>
</div>
<div id="megatv" class="tabcontent">
<?php
$getjsonmegatv = file_get_contents("http://wp.mgmt.megatv.com/wp-json/wp/v2/posts?per_page=30");
$decodejsonmega = json_decode($getjsonmegatv); 
// foreach($decodejson as $postszz ) { 
//if($postszz->type == 'top_articles' ) { 
?>
<h1>Τελευταία άρθρα MegaTv.com</h1>
<ol>
      <?php 
      $objectc = 0;
      foreach($decodejsonmega as $objectz ) { ?>
      <?php $objectc++; ?>
      <?php //if($objectc > 5) continue; ?>
<li>
<form action="" method="post" class="inxform">
    <?php $thdat = $objectz->date; ?>
    <?php foreach ($objectz->cwp_category as $categorx ) {
      echo '<span class="categories">';
      echo $categorx->name;
      echo '</span>';
      break;
     } ?>
    <img src="<?php echo $objectz->cwp_featured_thumbnail; ?>" height="50px" />  
    <input type="text" size="80" name="title" value="<?php echo $objectz->title->rendered; ?>">
    <input type="text" style="display:none" name="description" value="<?php echo strip_tags($objectz->excerpt->rendered); ?>">
    <textarea style="display:none" name="maincontent"><?php echo $objectz->content->rendered; ?></textarea>
    <textarea style="display:none" name="mainimage"><?php echo $objectz->cwp_featured_full; ?></textarea>
    <textarea style="display:none" name="mainvideo"><?php echo $objectz->extra_video; ?></textarea>  
    <a href="<?php echo $objectz->link; ?>" target="_blank">Προβολή</a>
    <input type="submit" name="submit" value="Προσθήκη" class="ghxy61">
</form>
</li>
<?php }  
?>
</ol>
</div>
<div id="otgr" class="tabcontent">
<?php
$getjsonotgr = file_get_contents("http://wp.mgmt.ot.gr/wp-json/wp/v2/posts?per_page=100");
$decodejsonot = json_decode($getjsonotgr); 
// foreach($decodejson as $postszz ) { 
//if($postszz->type == 'top_articles' ) { 
?>
<h1>Τελευταία άρθρα Ot.gr</h1>
<ol>
      <?php 
      $objectc = 0;
      foreach($decodejsonot as $objectz ) { ?>
      <?php $objectc++; ?>
      <?php //if($objectc > 5) continue; ?>
<li>
<form action="" method="post" class="inxform">
    <?php $thdat = $objectz->date; ?>
    <?php foreach ($objectz->cwp_category as $categorx ) {
      echo '<span class="categories">';
      echo $categorx->name;
      echo '</span>';
      break;
     } ?>
    <img src="<?php echo $objectz->cwp_featured_thumbnail; ?>" height="50px" />  
    <input type="text" size="80" name="title" value="<?php echo $objectz->title->rendered; ?>">
    <input type="text" style="display:none" name="description" value="<?php echo strip_tags($objectz->excerpt->rendered); ?>">
    <textarea style="display:none" name="maincontent"><?php echo $objectz->content->rendered; ?></textarea>
    <textarea style="display:none" name="mainimage"><?php echo $objectz->cwp_featured_full; ?></textarea>
    <textarea style="display:none" name="mainvideo"><?php echo $objectz->extra_video; ?></textarea>  
    <a href="<?php echo $objectz->link; ?>" target="_blank">Προβολή</a>
    <input type="submit" name="submit" value="Προσθήκη" class="ghxy61">
</form>
</li>
<?php }  
?>
</ol>
</div>
<script>
function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

</script>
<?php //get_footer(); ?>