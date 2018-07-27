<!-- Footer -->
<footer class="footer text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mb-5 mb-lg-0">
        <h4 class="text-uppercase mb-4">Location</h4>
        <p class="lead mb-0"><?php echo esc_html( get_option('ep_location') ); ?></p>
      </div>
      <div class="col-md-6 mb-5 mb-lg-0">
        <h4 class="text-uppercase mb-4">Around the Web</h4>

        <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="<?php echo esc_html( get_option('facebook_handler') ); ?>">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="<?php echo esc_html( get_option('behance_handler') ); ?>">
                  <i class="fa fa-fw fa-behance"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="<?php echo esc_html( get_option('twitter_handler') ); ?>">
                  <i class="fa fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="<?php echo esc_html( get_option('linkedin_handler') ); ?>">
                  <i class="fa fa-fw fa-linkedin"></i>
                </a>
              </li>
              

      </div>

    </div>
  </div>
</footer>

<div class="copyright py-4 text-center text-white">
  <div class="container">
    <small>Developed by <a href="https://elitedev.tech">eliteDevTech</a> <?php echo date('Y') ?></small>
  </div>
</div>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
  <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
    <i class="fa fa-chevron-up"></i>
  </a>
</div>


<?php wp_footer(); ?>
</body>

</html>
