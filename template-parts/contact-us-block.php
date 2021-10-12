<php 

?>

<div class="contact-us-block" style="padding: <?php if($args['isTitle'] == 'no') { echo '20px 0 200px'; } ?>">
  <div class="container">
    <?php if($args['isTitle'] !== 'no'):?>
    <h2 class="contact-us-block__h2">
      Contact us
    </h2>
    <?php endif; ?>
    <div class="row">
      <div class="col-12 col-l-6">
        <div class="contact-us-block__back">
          <div class="contact-us-block__desc">
            Please fill out the form and we will contsct you shortly 
          </div>
        </div> 
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-l-6">
        <form action="" class="contact-form">
          <div class="row">
            <div class="col-12">
              <label class="contact-form__label">
                <div class="contact-form__text">
                  Name *
                </div>
                <input class="contact-form__input" type="text" placeholder="Type your name">
              </label>
            </div>
            <div class="col-12 col-l-6">
              <label class="contact-form__label">
                  <div class="contact-form__text">
                    Email﹡
                  </div>
                  <input class="contact-form__input" type="email" placeholder="Type your email">
                </label>
            </div>
            <div class="col-12 col-l-6">
              <label class="contact-form__label">
                  <div class="contact-form__text">
                    Phone﹡
                  </div>
                  <input class="contact-form__input" type="tel" placeholder="Type your phone">
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
            <div class="contact-form__recaptcha">
              recaptcha
            </div>
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
            Schwitterberg 111
            58708 Menden
            Germany
          </div>
          <hr class="c-info__hr">
          <div class="c-info__header">
            Phone
          </div>
          <div class="c-info__text">
            +49 (0) 2373 395 30 21
          </div>
          <hr class="c-info__hr">
          <div class="c-info__header">
            Email
          </div>
          <div class="c-info__text">
            info@beauty-tech.de
          </div>
        </div>
      </div>
    </div>
  </div>
</div>