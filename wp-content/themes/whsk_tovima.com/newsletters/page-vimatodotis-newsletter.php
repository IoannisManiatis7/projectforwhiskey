<?php // require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php'); ?>
<!-- <xsl:stylesheet -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" 
 xmlns:v="urn:schemas-microsoft-com:vml"
 xmlns:o="urn:schemas-microsoft-com:office:office">
  
<?php
$vimatodotis = get_posts( 
array('numberposts' => 1, 
'category_name' => 'inbox', 'no_found_rows' => true, 'post_status' =>'publish','date_query' => array( array( 'after'  => WHSK_DATE_QUERY))
)); ?>
  
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- enable media queries for windows phone 8 -->
  <meta name="format-detection" content="date=no"> <!-- disable auto date linking in iOS 7-9 -->
  <meta name="format-detection" content="telephone=no"> <!-- disable auto telephone linking in iOS 7-9 -->
  
  <?php foreach($vimatodotis as $post) : setup_postdata($post); $cc++; ?>
  <title><?php the_title(); ?></title>
  <?php endforeach; wp_reset_postdata(); ?>
  
  <!--[if gte mso 9]><xml>
   <o:OfficeDocumentSettings>
    <o:AllowPNG/>
    <o:PixelsPerInch>96</o:PixelsPerInch>
   </o:OfficeDocumentSettings>
  </xml><![endif]-->
  <!-- fix outlook zooming on 120 DPI windows devices -->  
  
<style>
#subject-line-1{display:none}
body{margin:0;padding:0;background-color:#fff;-ms-text-size-adjust:none;-webkit-text-size-adjust:none;font-family:'Arial',sans-serif}
table{border-spacing:0}
table td{border-collapse:collapse}
.slides{margin:0;padding:0;padding-left:20px}
.slides li p{margin:0;font-size:16px;line-height:22px;color:#000}
.slides li{margin-bottom:20px}
.slides li:last-child{margin-bottom:0}
.podcast_wrapper {
    border-bottom: 1px solid #ccc;
    padding-bottom: 30px;
    margin-bottom: 30px;
    border-top: 1px solid #ccc;
    padding-top: 30px;
}
.promotext,.promotext p{color:#000;font-size:17px;letter-spacing:-.34px;line-height:24px;margin:0}
.footer-text p{color:#000;margin-top:0;margin-bottom:20px;font-size:15px;line-height:20px}
.footer-text p:last-child{margin-bottom:0}
.footer-text p a {color: #3A55A6}
.author__image{border-radius:100%;overflow:hidden;margin-right:10px;border:1px solid #92a2b9}
.promo2,.promo2 p{color:#000;font-size:17px;line-height:24px;margin-bottom:20px}

.promotext p a,
.slides li p a {background-color: #f8e0b9;padding: 2px;color: #262626;text-decoration: none}
  
.vimatodotis-header .vimatodotis-title{letter-spacing:-0.26px;font-size:26px;line-height:1.2}
.vimatodotis-header .vimatodotis-summary{font-size:20px;line-height:24px}
  
.vimatodotis-header .article-image img{width:100%;max-width:100%;height:auto}
.vimatodotis-content{font-size:18px;line-height:1.3}
.vimatodotis-content blockquote{font-family:'Georgia';font-size:20px;text-align:center;margin:30px auto;max-width:400px}
.vimatodotis-content h2,
.vimatodotis-content h3{color:#8597bb;margin-bottom:20px;font-size:22px;text-align:left}
.vimatodotis-content h2{text-align:center;font-size:24px}
.vimatodotis-content blockquote h3, .vimatodotis-content blockquote h2 {text-align: center;color: #000}
.vimatodotis-content p{margin:0 0 29px}  
.vimatodotis-content p:last-child {
    margin-bottom: 0;
}  
.vimatodotis-content p img{max-width:100%;height:auto}
.vimatodotis-content p a {background-color: #d5e0f5;text-decoration:none;color:#222}    
.blue-box{background-color:#d5e0f5;text-align:left;padding:20px 20px;position:relative;margin-bottom:30px}
.blue-box:before{content:"";display:block;height:16px;width:83px;background-color:#8597bb;margin-bottom:24px;position:relative;margin-top:-20px}
.blue-box p{margin:0 0 30px}
.blue-box p:last-child{margin-bottom:0}
  
@media (max-width:550px) {
.footer-table td{display:inline-block;width:33.333%;box-sizing:border-box}
}  
</style>
  
</head>
  
<body style="margin:0; padding:0;" bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  
  <div style="max-width:530px;margin:0 auto;padding:0 10px">
    <?php include(TEMPLATEPATH.'/assets/newsletters/vimatodotis.php'); ?>
  </div>
  
</body>
</html>