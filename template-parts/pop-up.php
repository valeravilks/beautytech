<div class="pop-up js-pop-up">
  <div class="pop-up__block1 js-pop-up-bl-1">
    <div class="pop-up__title">
      <?php the_field('pop_title', 'option'); ?>
    </div>
    <div class="pop-up__text">
      <?php the_field('pop_subtitle', 'option'); ?>
    </div>
    <div class="pop-up__close js-pop-up-close">
      <div class="pop-up__bt">
        
        </div>
      </div>
      <form action="" class="contact-form js-pop-up-forms">
        <div class="row">
          <div class="col-12">
            <label class="contact-form__label">
              <div class="contact-form__text">
                Name *
              </div>
              <input class="contact-form__input" required type="text" placeholder="Type your name">
            </label>
          </div>
          <div class="col-12 col-l-6">
            <label class="contact-form__label">
              <div class="contact-form__text">
                Email﹡
              </div>
              <input class="contact-form__input" required type="email" placeholder="Type your email">
            </label>
          </div>
          <div class="col-12 col-l-6">
            <label class="contact-form__label">
              <div class="contact-form__text">
                Phone﹡
              </div>
              <input class="contact-form__input" required type="tel" placeholder="Type your phone">
            </label>
          </div>
          <div class="col-12">
            <label class="contact-form__label">
              <div class="contact-form__text">
                Message
              </div>
              <textarea class="contact-form__input contact-form__textarea" placeholder="Type your message here..."></textarea>
            </label>
          </div>
          <div class="col-12">
            <div class="contact-form__text2">
              <?php the_field('pop_text'); ?>
            </div>
          </div>
          <div class="contact-form__sel">
            <div class="row">
              <?php if(have_rows('pop_product_item', 'option')): ?>
                <?php while(have_rows('pop_product_item', 'option')): the_row();?>
                  <div class="col-6 col-l-4">
                    <label class="contact-form__rl">
                      <input type="radio" name="contact" class="contact-form__input contact-form__radio">
                        <?php the_sub_field('name'); ?>
                    </label>
                  </div>
                <?php endwhile;?>
              <?php endif;?>
            </div>
          </div>
          <div class="col-12">
            <div class="contact-form__checkbox">
              <img src="<?php echo get_template_directory_uri();?>/img/svg/icon-whatsapp.svg" alt=""> 
              <label class="contact-form__check check option">
                <input class="check__input" type="checkbox">
                <span class="check__box"></span>
                Please contact me by Whatsapp
            </label>
            </div>
          </div>
        </div>
        <div class="contact-form__bottom">
          <div class="contact-form__recaptcha" id="js-recaptcha-2">
           
          </div>
          <input class="contact-form__submit" type="submit" value="SEND">
        </div>
      </form>
  </div>
  <div class="pop-up__block2 js-pop-up-bl-2">
    <div class="pop-up__close js-pop-up-close">
      <div class="pop-up__bt">

      </div>
    </div>
    <div class="pop-up__title5">
      Thank you for your request
    </div>
    <div class="pop-up__text5">
      Thank you for your request
    </div>
  </div>
  <div class="pop-up__block3 js-pop-up-bl-3">
    <div class="pop-up__close js-pop-up-close">
      <div class="pop-up__bt">

      </div>
    </div>
    <div class="pop-up__title5">
      Failed to submit the form. Email us.
    </div>
  </div>
</div>