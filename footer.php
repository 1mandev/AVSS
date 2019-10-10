<!-- avss-footer -->
<div class="avss-footer">
  <div class="avss-footer__main container">
    <div class="row justify-content-md-center justify-content-start">
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="avss-footer__info d-flex flex-column align-items-start">
          <a href="#" class="avss-footer__info--image d-flex align-items-center mb-4">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/avss-dark.png' ?>" class="img-fluid mr-2" alt="app-image" />
            avss.io
          </a>
          <div class="avss-footer__info--text">
            Road # 2/23, Rajia Sultana Road, Mohammadpur, Dhaka, <br>
            Bangladesh - 1207
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-7 col-sm-12 mt-4 mt-md-0 pt-2 pt-md-0">
        <div class="row justify-content-md-center justify-content-start">
          <div class="col-5">
            <div class="avss-footer__menu--title">quick menu</div>
            <div class="avss-footer__menu-one">
              <a class="pb-3" href="<?php echo site_url('/dealers') ?>">dealers</a>
              <a class="pb-3" href="#testimonials">Testimonials</a>
              <a class="pb-3" href="<?php echo site_url('/blog') ?>">blog</a>
              <a class="pb-3" href="<?php echo site_url('/about') ?>">about us</a>
              <a href="<?php echo site_url('/contact') ?>">conatct us</a>
            </div>
          </div>
          <div class="col-5">
            <div class="avss-footer__menu-two pt-5 w-100">
              <a class="pb-3" href="<?php echo site_url('/#appinfo') ?>">download apps</a>
              <a class="pb-3" href="<?php echo site_url('/privacy-policy') ?>">Privacy Policy</a>
              <a class="pb-3" href="<?php echo site_url('/terms-conditions') ?>">Terms & Conditions</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 w-100 d-flex justify-content-center">
        <div class="avss-footer__communication">
          <div class="avss-footer__social mt-5 w-100">
            <div class="avss-footer__social--title mb-4 font-weight-bold">follow us</div>
            <div class="avss-footer__social--items">
              <a target="_blank" class="avss-footer__social--item" href="https://www.facebook.com/bikelock.bd/">
                <i class="icon ion-logo-facebook"></i>
              </a>
              <a target="_blank" class="avss-footer__social--item ml-2" href="">
                <i class="icon ion-logo-instagram"></i>
              </a>
              <a target="_blank" class="avss-footer__social--item ml-2" href="">
                <i class="icon ion-logo-linkedin"></i>
              </a>
              <a target="_blank" class="avss-footer__social--item ml-2" href="https://www.youtube.com/channel/UC0C_xwQaApMegikfPjgrRcg">
                <i class="icon ion-logo-youtube"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container m-auto mt-5">
      <p class="powered-text text-dark text-center pt-5 pb-3">POWERED BY</p>
      <div class="powered mr-3">
        <div class="row">
          <div class="col-sm-3 d-flex">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/power/power-one.png' ?>" alt="..." />
          </div>
          <div class="col-sm-3 d-flex">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/power/power-two.png' ?>" alt="..." />
          </div>
          <div class="col-sm-3 d-flex">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/power/power-three.png' ?>" alt="..." />
          </div>
          <div class="col-sm-3 d-flex">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/power/power-4.png' ?>" alt="..." />
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="avss-footer__copyright">
    <p>
      &copy; All Rights Reserved by <a href="<?php echo site_url('/') ?>">AVSS</a> <?php echo date('Y') ?> | Made with
      &hearts; by
      <a href="http://1mandev.com" target="_blank">1MANDEV</a>
    </p>
  </div>
</div>

<?php wp_footer(); ?>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
  (function() {
    var s1 = document.createElement("script"),
      s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/5d9c9c3f6c1dde20ed0598fd/default';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
  })();
</script>
<!--End of Tawk.to Script-->
</body>

</html>