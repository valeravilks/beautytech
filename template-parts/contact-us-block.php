<php 

?>

<div class="contact-us-block">
  <div class="container">
    <div class="row">
      <div class="col-12 col-l-6">
        <form action="" class="contact-form js-contact-page-form <?php echo $args['class']?>">
          <div class="row">
            <div class="col-12">
              <h1 class="contact-us-block__h2">
                Contact
              </h1>
              <div class="contact-us-block__back">
                <div class="contact-us-block__desc">
                  Please fill out the form and we will contsct you shortly 
                </div>
              </div> 
            </div>
            <div class="col-12">
              <label class="contact-form__label">
                <!-- <div class="contact-form__text">
                  Name *
                </div> -->
                <input class="contact-form__input"  required name="name" type="text" placeholder="Name *">
              </label>
            </div>
            <div class="col-12 col-l-6">
              <label class="contact-form__label">
                  <!-- <div class="contact-form__text">
                    Email﹡
                  </div> -->
                  <input class="contact-form__input" required name="email" type="email" placeholder="Email﹡">
                </label>
            </div>
            <div class="col-12 col-l-6">
              <label class="contact-form__label">
                  <!-- <div class="contact-form__text">
                    Phone﹡
                  </div> -->
                  <input class="contact-form__input" required type="tel" name="phone" placeholder="Phone﹡">
                </label>
            </div>
            <div class="col-12">
              <label class="contact-form__label">
                <!-- <div class="contact-form__text">
                  Message
                </div> -->
                <textarea class="contact-form__input contact-form__textarea" name="messege" placeholder="Message"></textarea>
              </label>
            </div>
            <div class="col-12">
              <div class="contact-form__checkbox">
                <label class="contact-form__check check option check-m0">
                  <input class="check__input js-policy" name="whatsapp" type="checkbox">
                  <span class="check__box"></span>
                  I authorize the processing of the 
                  <a class="pr-po" href="<?php echo bloginfo('url');?>/privacy-policy">personal data</a>
              </label>
              </div>
            </div>
          </div>
          <div class="contact-form__bottom">
            <input class="contact-form__submit" type="submit" value="SEND">
          </div>
        </form>
      </div>
      <div class="col-12 offset-l-1 col-l-5">
        <div class="contact-us-block__info c-info">
          <div class="c-info__header">
            Address
          </div>
          <div class="c-info__text">
            <?php the_field('con_address', 'option'); ?>
          </div>
          <hr class="c-info__hr">
          <div class="c-info__header">
            Phone
          </div>
          <div class="c-info__text">
            <a href="tel:<?php the_field('con_phone', 'option'); ?>" class="c-info__link">
              <?php the_field('con_phone', 'option'); ?>
            </a>
          </div>
          <hr class="c-info__hr">
          <div class="c-info__header">
            Email
          </div>
          <div class="c-info__text">
            <a href="mailto:<?php the_field('con_email_contact', 'option'); ?>" class="c-info__link">
              <?php the_field('con_email_contact', 'option'); ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>