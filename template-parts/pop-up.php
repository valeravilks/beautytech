<div class="pop-up js-pop-up">
  <div class="pop-up__block1 js-pop-up-bl-1">
    <div class="pop-up__title">
      <?php the_field('pop_title', 'option'); ?>
    </div>
    <div class="pop-up__close js-pop-up-close">
      <div class="pop-up__bt">
        
        </div>
      </div>
      <form action="" class="contact-form js-pop-up-forms">
        <div class="row">
          <div class="col-12 col-l-6">
            <label class="contact-form__label">
              <input class="contact-form__input" required type="text" placeholder="Name *">
            </label>
          </div>
          <div class="col-12 col-l-6">
            <label class="contact-form__label">
              <input class="contact-form__input" required type="tel" placeholder="Phone﹡">
            </label>
          </div>
          <div class="col-12">
            <label class="contact-form__label">
              <input class="contact-form__input" required type="email" placeholder="Email﹡">
            </label>
          </div>
          <div class="col-12">
            <div class="contact-form__checkbox">
              <label class="contact-form__check check option check-m0">
                <input class="check__input js-policy" name="whatsapp" type="checkbox">
                <span class="check__box"></span>
                I agree to the  
                <a class="pr-po" href="<?php echo bloginfo('url');?>/privacy-policy">Privacy Policy </a>
            </label>
            </div>
          </div>
        </div>
        <div class="contact-form__bottom contact-form__bottom-2">
          <input class="contact-form__submit contact-form__submit-2" type="submit" value="Request a consultation">
        </div>
      </form>
  </div>
  <div class="pop-up__block2 js-pop-up-bl-2">
    <div class="pop-up__close js-pop-up-close">
      <div class="pop-up__bt">

      </div>
    </div>
    <div class="pop-up__title5">
      <?php the_field('pop_successful_submission_title', 'option'); ?>
    </div>
    <div class="pop-up__text5">
      <?php the_field('pop_successful_submission_text', 'option'); ?>
    </div>
  </div>
  <div class="pop-up__block3 js-pop-up-bl-3">
    <div class="pop-up__close js-pop-up-close">
      <div class="pop-up__bt">

      </div>
    </div>
    <div class="pop-up__title5">
      <?php the_field('pop_error_title', 'option'); ?>
    </div>
  </div>
</div>