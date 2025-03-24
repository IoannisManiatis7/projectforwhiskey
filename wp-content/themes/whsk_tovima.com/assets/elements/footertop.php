<?php 

$footertopi = array(
  array('layout' => 'onerow', 'relationship' => 'yes', 'acfname' => 'box4_selection', 'pagename' => 'tovima_afieromata', 'pubitems' => '4', 'size' => 'is-full'),
  );

  $footertop = array('subitems' => array(
    array('title' => 'ΝΕΕΣ ΕΠΟΧΕΣ', 'relationship' => 'yes', 'acfname' => 'box3_selection', 'pagename' => 'tovima_neesepoxes', 'slug' => 'nees-epoxes', 'layout' => 'onerow', 'size' => 'donti-2-3 is-full-tablet is-full-mobile is-full-small sq', 'type' => 'cat'),
    array('title' => 'ΒΗΜΑ HISTORY', 'slug' => 'istoriko-arxeio', 'layout' => 'ft-1', 'size' => 'donti-2-3 is-full-tablet is-full-mobile is-full-small sq', 'type' => 'cat'),

    // array('title' => 'ΜΕΓΕΘΥΝΣΕΙΣ', 'relationship' => 'yes', 'acfname' => 'box3_selection', 'pagename' => 'tovima_megenthinseis', 'slug' => 'megethynseis', 'layout' => 'triple', 'size' => 'donti-1-3 is-full-tablet is-full-mobile is-full-small sq', 'type' => 'cat'),

  ));
?>

<div class="columns is-multiline is-mobile is-variable <?php echo VARIABLES; ?>">

<?php if(get_field('activated_elwidget', 'election_index')) { ?>
<div class="column is-full">
  <div class="wrap-eklogeswidget">
  <div class="wrap-inner-ekloges maxgridrow">
    <?php include(TEMPLATEPATH.'/assets/elements/eklogeswidget.php'); ?>  
  </div>
  </div>
</div>
<?php } ?>

<?php foreach ($footertopi as $row) { ?>
  <?php if(get_field('activated_widget', $row['pagename']) ) { ?>
  <div class="column is-full">
  <?php include(TEMPLATEPATH.'/assets/home/layouts/'.$row['layout'].'.php'); ?>
  </div>
  <div class="column is-full separator-horizontal-row"> <sep></sep></div>  
  <?php } ?>
<?php } ?>

<div class="column is-full">
  <?php include(TEMPLATEPATH .'/assets/elements/podcasts.php'); ?>
</div>
  
<?php /*
<?php $cci = 0; foreach ($footertop['subitems'] as $subitem) { $cci++; ?>
<div class="column is-full">  
<?php include(TEMPLATEPATH.'/assets/home/layouts/'.$subitem['layout'].'.php'); ?>
</div>
<?php } ?>
*/ ?>
  
</div>