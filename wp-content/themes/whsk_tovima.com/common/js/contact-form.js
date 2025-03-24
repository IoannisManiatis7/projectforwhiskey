$(document).ready(function() {
  $.validator.messages.required = 'This field is required';
  $.validator.messages.email = 'Please check your e-mail';
  $.validator.messages.digits = 'Please use only numbers.';
  var SUCCESS_MSG = "Your email has been sent successfully. We will contact you soon.";
  var ERROR_MSG = "Something went wrong. Please try again.";

  var $form = $("#contact-form");
  var $phoneField = $form.find(".contact-form__field--phone");
  var $departmentSelect = $form.find("#cfDepartment");
  var $department = $form.find('select[name=department]');
  var $fullName = $form.find('input[name=fullName]');
  var $telephone = $form.find('input[name=telephone]');
  var $email = $form.find('input[name=email]');
  var $subject = $form.find('input[name=subject]');
  var $body = $form.find('textarea[name=body]');
  var $responseDiv = $form.find(".contact-form__response");
  var $submitBtn = $form.find("#contact-form-submit-btn");

  var selectedDepartment = '';
  
  $departmentSelect.on('change', function(e) {
    selectedDepartment = e.target.value;
    if (isTelephoneRequired(selectedDepartment)) {
      $phoneField.show();
    }
    else{
      $phoneField.hide();
    }
  });

  $form.validate({
    rules: {
      telephone: {
        digits: true,
        required: {
          depends: function(element) { return isTelephoneRequired(selectedDepartment) }
        }
      }
    },
    submitHandler: function() {
      grecaptcha.execute();
    }
  });

  function showSuccessMsg() {
    $responseDiv
    .hide()
    .addClass("contact-form__response--success")
    .text(SUCCESS_MSG)
    .show();
  }

  function showErrorMsg() {
    $responseDiv
    .hide()
    .addClass("contact-form__response--error")
    .text(ERROR_MSG)
    .show();
  }

  function isTelephoneRequired(selectedDepartment) {
    //if (selectedDepartment == 2 || selectedDepartment == 3){
    if (selectedDepartment == 2 || selectedDepartment == 3 || selectedDepartment == 6 || selectedDepartment == 7 || selectedDepartment == 11 ){    
      return true;
    }
    return false;
  }

  handleFormSubmit = function(captcha) {
   
    var data = {
      department: $department.val(),
      fullName: $fullName.val(),
      email: $email.val(),
      subject: $subject.val(),
      body: $body.val(),
      recaptcha: captcha,
      client: $form.data("client"),
      resolution: window.screen.width + 'x' + window.screen.height
    };
  
    if (isTelephoneRequired(selectedDepartment)){
      data.telephone = $telephone.val();
    }
  
    $submitBtn.attr("disabled", true);
    $submitBtn.addClass("running");
    $.post("https://contact.alteregomedia.org/Receive.ashx", data)
    .done(function(response){
      const success = response == 1;
  
      if (success){
        $submitBtn.remove();
        showSuccessMsg();
      }
      else{
        $submitBtn.removeClass("running");
        showErrorMsg();
      }
    })
    .fail(function(data){
      $submitBtn.removeClass("running");
      showErrorMsg();
    })
    .always(function(){
      $submitBtn.attr("disabled", false);
    });
  }
  
  window.handleRecaptchaSubmit = function(captcha) {
    handleFormSubmit(captcha);
  }

    $('#checkbox_oroi').click(function () {
    //check if checkbox is checked
    if ($(this).is(':checked')) {
        
        $('#contact-form-submit-btn').removeAttr('disabled'); //enable input
        
    } else {
        $('#contact-form-submit-btn').attr('disabled', true); //disable input
    }
});

});