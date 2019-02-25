<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpstarcity
 */

?>

	</div><!-- #content -->

	
  <footer class="section">
    <div class="mw">
      <div class="col w-40-l w-100 fl">
        <a href="/">
          <img class="footer-logo" src="<?php echo get_template_directory_uri() ?>/assets/svg/logo-wordmark.svg"/>
        </a>
      </div>
      <div class="col w-60-l w-100 fl">
        <div class="w-25-l w-100 fl">
          <h6>Join Starcity</h6>
          <ul class="footer-nav">
            <li>
              <a href="/schedule-tour">Schedule a tour</a>
            </li>
            <li>
              <a href="/signup">Apply to move in</a>
            </li>
          </ul>
        </div>
        <div class="w-25-l w-100 fl">
          <h6>Why Starcity</h6>
          <ul class="footer-nav">
            <li>
              <a href="/coliving">What is Coliving?</a>
            </li>
            <li>
              <a href="/design">Design</a>
            </li>
            <li>
              <a href="/urban-revival">Urban Revival</a>
            </li>
            <li>
              <a href="/technology">Technology</a>
            </li>
            <li>
              <a href="/families">Starcity for Families</a>
            </li>
          </ul>
        </div>
        <div class="w-25-l w-100 fl">
          <h6>About</h6>
          <ul class="footer-nav">
            <li>
              <a href="/company">The Company</a>
            </li>
            <li>
              <a href="/faq">FAQ</a>
            </li>
            <li>
              <a href="https://blog.starcity.com">Blog</a>
            </li>
            <li>
              <a href="/careers">Careers</a>
            </li>
            <li>
              <a href="/press">Press Kit</a>
            </li>
          </ul>
        </div>
        <div class="w-25-l w-100 fl">
          <h6>Contact Us</h6>
          <p>Whether you’re a potential member, partner, or investor, we’d love to hear from you.</p>
          <a href="/contact" class="button button-outline-white">Get In Touch</a>
        </div>
      </div>
    </div>
    <div class="mw footer-skyline">
      <img src="<?php echo get_template_directory_uri() ?>/assets/svg/skyline-sf.svg" />
    </div>
    <div class="mw footer-nav-bottom">
      <div class="w-40 fl">
        <a href="/terms" class="mr2">Terms</a>
        <a href="/privacy" class="mr2">Privacy</a>
      </div>
      <div class="w-60 fl">
        <p class="member-login">Already a member?
          <a href="/login">Log in</a>
        </p>
      </div>
    </div>
  </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
