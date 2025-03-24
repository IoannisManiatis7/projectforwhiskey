jQuery(document).ready(function () {
  /* Config */
  var tks_max_title = tks_wc_vars.tks_max_title || 65;
  var tks_max_excerpt = tks_wc_vars.tks_max_excerpt || 270;
  var tks_max_acf_title = tks_wc_vars.tks_max_acf_title || 65;
  var tks_max_acf_excerpt = tks_wc_vars.tks_max_acf_excerpt || 240;
  var tks_max_acf_quota = tks_wc_vars.tks_max_acf_quota || 100;
  
  if (jQuery('.post-type-post #title').size()>0) {
    var tks_ctitle = jQuery('.post-type-post #title').val().length;
    jQuery('.post-type-post #title').parent().append('<div>Χαρακτήρες: <span id="tks_ctitle">'+tks_ctitle+'</span>/'+tks_max_title+'</div>');
    if (tks_ctitle > tks_max_title) {
      jQuery('.post-type-post #title').css('background-color','#FFD4D4');
      jQuery("#tks_ctitle").css('color','red');
    }
    jQuery('.post-type-post #title').keyup(function () {
      var tks_ctitle = jQuery(this).val().length;
      jQuery('#tks_ctitle').text(tks_ctitle);
      if (tks_ctitle > tks_max_title) {
        jQuery(this).css('background-color','#FFD4D4');
        jQuery("#tks_ctitle").css('color','red');
      } else {
        jQuery(this).css('background-color','#FFF');
        jQuery("#tks_ctitle").css('color','#000');
      }
    });
  }

  if (jQuery('.post-type-post #excerpt').size()>0) {
    var tks_cexcerpt = jQuery('.post-type-post #excerpt').val().length;
    jQuery('.post-type-post #excerpt').parent().append('<div>Χαρακτήρες: <span id="tks_cexcerpt">'+tks_cexcerpt+'</span>/'+tks_max_excerpt+'</div>');
    if (tks_cexcerpt > tks_max_excerpt) {
      jQuery('.post-type-post #excerpt').css('background-color','#FFD4D4');
      jQuery("#tks_cexcerpt").css('color','red');
    }
    jQuery('.post-type-post #excerpt').keyup(function () {
      var tks_cexcerpt = jQuery(this).val().length;
      jQuery('#tks_cexcerpt').text(tks_cexcerpt);
      if (tks_cexcerpt > tks_max_excerpt) {
        jQuery(this).css('background-color','#FFD4D4');
        jQuery("#tks_cexcerpt").css('color','red');
      } else {
        jQuery(this).css('background-color','#FFF');
        jQuery("#tks_cexcerpt").css('color','#000');
      }
    });
  }


  if (jQuery('.post-type-post #acf-field_5a801ac4e2qqqtd1').size()>0) {
    var tks_acf_ctitle = jQuery('.post-type-post #acf-field_5a801ac4e2qqqtd1').val().length;
    jQuery('.post-type-post #acf-field_5a801ac4e2qqqtd1').parent().append('<div>Χαρακτήρες: <span id="tks_acf_ctitle">'+tks_acf_ctitle+'</span>/'+tks_max_acf_title+'</div>');
    if (tks_acf_ctitle > tks_max_acf_title) {
      jQuery('.post-type-post #acf-field_5a801ac4e2qqqtd1').css('background-color','#FFD4D4');
      jQuery("#tks_acf_ctitle").css('color','red');
    }
  }

  if (jQuery('.post-type-post #acf-field_55b28bbec4f52').size()>0) {
    var tks_acf_cexcerpt = jQuery('.post-type-post #acf-field_55b28bbec4f52').val().length;
    jQuery('.post-type-post #acf-field_55b28bbec4f52').parent().append('<div>Χαρακτήρες: <span id="tks_acf_cexcerpt">'+tks_acf_cexcerpt+'</span>/'+tks_max_acf_excerpt+'</div>');
    if (tks_acf_cexcerpt > tks_max_acf_excerpt) {
      jQuery('.post-type-post #acf-field_55b28bbec4f52').css('background-color','#FFD4D4');
      jQuery("#tks_acf_cexcerpt").css('color','red');
    }
  }

//   if (jQuery('.post-type-post #acf-field_55b28d71e8e4c').size()>0) {
//     var tks_acf_cquota = jQuery('.post-type-post #acf-field_55b28d71e8e4c').val().length;
//     jQuery('.post-type-post #acf-field_55b28d71e8e4c').parent().append('<div>Χαρακτήρες: <span id="tks_acf_cquota">'+tks_acf_cquota+'</span>/'+tks_max_acf_quota+'</div>');
//     if (tks_acf_cquota > tks_max_acf_quota) {
//       jQuery('.post-type-post #acf-field_55b28d71e8e4c').css('background-color','#FFD4D4');
//       jQuery("#tks_acf_cquota").css('color','red');
//     }
//   }

  jQuery(document).on({
    keyup: function (e) {
      var tks_acf_ctitle = jQuery(this).val().length;
      jQuery('#tks_acf_ctitle').text(tks_acf_ctitle);
      if (tks_acf_ctitle > tks_max_acf_title) {
        jQuery(this).css('background-color','#FFD4D4');
        jQuery("#tks_acf_ctitle").css('color','red');
      } else {
        jQuery(this).css('background-color','#FFF');
        jQuery("#tks_acf_ctitle").css('color','#000');
      }
    }
  }, ".post-type-post #acf-field_5a801ac4e2qqqtd1");

  jQuery(document).on({
    keyup: function (e) {
      var tks_acf_cexcerpt = jQuery(this).val().length;
      jQuery('#tks_acf_cexcerpt').text(tks_acf_cexcerpt);
      if (tks_acf_cexcerpt > tks_max_acf_excerpt) {
        jQuery(this).css('background-color','#FFD4D4');
        jQuery("#tks_acf_cexcerpt").css('color','red');
      } else {
        jQuery(this).css('background-color','#FFF');
        jQuery("#tks_acf_cexcerpt").css('color','#000');
      }
    }
  }, ".post-type-post #acf-field_55b28bbec4f52");

  jQuery(document).on({
    keyup: function (e) {
      var tks_acf_cquota = jQuery(this).val().length;
      jQuery('#tks_acf_cquota').text(tks_acf_cquota);
      if (tks_acf_cquota > tks_max_acf_quota) {
        jQuery(this).css('background-color','#FFD4D4');
        jQuery("#tks_acf_cquota").css('color','red');
      } else {
        jQuery(this).css('background-color','#FFF');
        jQuery("#tks_acf_cquota").css('color','#000');
      }
    }
  }, ".post-type-post #acf-field_55b28d71e8e4c");

  jQuery(document).on({
    change: function (e) {
      jQuery( document ).ajaxComplete(function() {
        if (jQuery('#tks_acf_ctitle').size()==0 && jQuery('.post-type-post #acf-field_5a801ac4e2qqqtd1').size()>0) {
          var tks_acf_ctitle = jQuery('.post-type-post #acf-field_5a801ac4e2qqqtd1').val().length;
          jQuery('.post-type-post #acf-field_5a801ac4e2qqqtd1').parent().append('<div>Χαρακτήρες: <span id="tks_acf_ctitle">'+tks_acf_ctitle+'</span>/'+tks_max_acf_title+'</div>');
          if (tks_acf_ctitle > tks_max_acf_title) {
            jQuery('.post-type-post #acf-field_5a801ac4e2qqqtd1').css('background-color','#FFD4D4');
            jQuery("#tks_acf_ctitle").css('color','red');
          }
        }
        if (jQuery('#tks_acf_cexcerpt').size()==0 && jQuery('.post-type-post #acf-field_55b28bbec4f52').size()>0) {
          var tks_acf_cexcerpt = jQuery('.post-type-post #acf-field_55b28bbec4f52').val().length;
          jQuery('.post-type-post #acf-field_55b28bbec4f52').parent().append('<div>Χαρακτήρες: <span id="tks_acf_cexcerpt">'+tks_acf_cexcerpt+'</span>/'+tks_max_acf_excerpt+'</div>');
          if (tks_acf_cexcerpt > tks_max_acf_excerpt) {
            jQuery('.post-type-post #acf-field_55b28bbec4f52').css('background-color','#FFD4D4');
            jQuery("#tks_acf_cexcerpt").css('color','red');
          }
        }
        if (jQuery('#tks_acf_cquota').size()==0 && jQuery('.post-type-post #acf-field_55b28d71e8e4c').size()>0) {
          var tks_acf_cquota = jQuery('.post-type-post #acf-field_55b28d71e8e4c').val().length;
          jQuery('.post-type-post #acf-field_55b28d71e8e4c').parent().append('<div>Χαρακτήρες: <span id="tks_acf_cquota">'+tks_acf_cquota+'</span>/'+tks_max_acf_quota+'</div>');
          if (tks_acf_cquota > tks_max_acf_quota) {
            jQuery('.post-type-post #acf-field_55b28d71e8e4c').css('background-color','#FFD4D4');
            jQuery("#tks_acf_cquota").css('color','red');
          }
        }
      });
    }
  }, "#taxonomy-category input");

});