<?php get_header(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/jquery.validate.1.19.5.min.js" async="" defer=""></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/common/js/contact-form.js?v=1" async="" defer=""></script>

<main class="maxgridrow wrap-contact-form">
  <div class="columns is-multiline">
    
    <div class="column is-full mb-6">
      <h1 class='zonabold m-0 is-size-1 f-400'><?php the_title(); ?></h1>
    </div>
    
    <div class="column is-relative">
      
      <h2 class="zonaregular mt-0 is-size-5 f-400 mb-0">
        Please use the form below to contact tovima.com
      </h2>
      <h3 class="zonabold is-size-5 f-400 mb-0 mt-4">All Fields are required</h3>
      
      <form method="post" id="contact-form" data-client="tovimacom">
    <section class="contact-form__fields">
      <div class="contact-form__field">
        <label for="cfDepartment">Department <span class="contact-form__asterisk">*</span></label>
        <select required="" id="cfDepartment" name="department">
<option value="53">Newsroom</option>
<option value="54">Sales department / Digital:</option>
<option value="55">Sales department / Print:</option>
<option value="56">Support</option>
<option value="57">Other</option>
</select>
      </div>
      <div class="contact-form__field">
        <label for="cfFullname">First / Last name <span class="contact-form__asterisk">*</span></label>
        <input required="" id="cfFullname" name="fullName" type="text" />
      </div>
      <div class="contact-form__field contact-form__field--phone">
        <label for="cfTelephone">Tel: <span class="contact-form__asterisk">*</span></label>
        <input required="" id="cfTelephone" name="telephone" type="tel" />
      </div>
      <div class="contact-form__field">
        <label for="cfEmail">Email <span class="contact-form__asterisk">*</span></label>
        <input required="" id="cfEmail" name="email" type="email" />
      </div>
      <div class="contact-form__field">
        <label for="cfSubject">Subject <span class="contact-form__asterisk">*</span></label>
        <input required="" id="cfSubject" name="subject" type="text" />
      </div>
      <div class="contact-form__field form-textarea">
        <label for="cfBody">Subject <span class="contact-form__asterisk">*</span></label>
        <textarea required="" id="cfBody" name="body" rows="15" resize="no"></textarea>
      </div>
    </section>
    <div class="contact-form__response"></div>

    <div class="checkterms">
      <input type="checkbox" id="checkbox_oroi" width="5px;">
      I have read and accept<a style="text-decoration: underline;" target="_blabk" href="/terms-of-use/"> terms of use</a>
      </div>
      
    <div class="wrap-contact-footer">
    <div id="recaptcha" class="g-recaptcha" data-badge="inline" data-sitekey="6LcvzzYUAAAAAM-7hY26OIp59EBA_BXz9lwgr1cY" data-callback="handleRecaptchaSubmit" data-size="invisible"></div>
        
    <button type="submit" id="contact-form-submit-btn" class="contact-form__submit-btn ld-ext-right" disabled>
    Submit<div class="ld ld-ring ld-spin"></div>
    </button>
    </div>
        
  </form>
    </div>
    
    <div class="column is-narrow">
      <div class="sidebar-width">
        <div class="contact-box">
          <span class="is-block zonabold mt-0 mb-6 f-400 is-size-4">ALTER EGO MEDIA A.E.</span>
          <span class="contactbox-headline is-block manore f-500">Adress</span>
          <p>L. Syggrou 340</p>
          <p>Kallithea 176 73</p>
          <span class="contactbox-headline is-block manore f-500">Telephone</span>
          <p>(+30) 210 754 7000</p>
        </div>
      </div>
    </div>
    
  </div>
  
</main>

<?php get_footer();?>