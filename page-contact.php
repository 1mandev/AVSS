<?php get_header(); ?>

<main class="main-sec contact-page">
  <section class="page-header text-center">
    <div class="container">
      <div class="page-banner">
        <i class="icon ion-md-mail-unread page-header__icon"></i>
        <h1 class="page-header__title">Contact Us</h1>
        <p class="page-header__text">Send Us Message from here.</p>
      </div>
    </div>
  </section>

  <section class="contact-form">
    <h2 class="text-center text-grad">We will get back to you ASAP</h2>
    <hr class="divider divider-main">
    <div class="container">
      <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile;  ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>