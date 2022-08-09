    <!-- ================== FOOTER ================== -->

    <footer>
      <div class="footer-container container">
        <div class="footer-row row">
          <div class="col-lg-6 col-12">
            <div data-aos="flip-up" class="footer-mark">
              <img src="<?php bloginfo("template_url");?>/assets/images/elements/mocode.png" alt="img" />
              <h2>Macode</h2>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <ul class="footer-links">
              <li>
                <a
                  data-aos="flip-up"
                  style="transition: all 800ms ease"
                  href="<?php the_field('link_tutorials');?>"
                  class="footer-links__link"
                  >Tutorials<span class="fancy-line"></span
                ></a>
              </li>
              <li>
                <a
                  data-aos="flip-up"
                  style="transition: all 800ms ease"
                  href="<?php the_field('link_studies');?>"
                  class="footer-links__link"
                  >Studies<span class="fancy-line"></span
                ></a>
              </li>
              <li>
                <a
                  data-aos="flip-up"
                  style="transition: all 800ms ease"
                  href="<?php the_field('link_resources');?>"
                  class="footer-links__link"
                  >Resources<span class="fancy-line"></span
                ></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container">
        <div data-aos="fade-up" data-aos-offset="100" class="line"></div>
      </div>
      <div class="container">
        <div class="footer-social-others">
          <div class="footer-social__links">
            <a
              data-aos="fade-up"
              style="transition: all 400ms ease"
              href="<?php the_field('facebook-link');?>"
              data-aos-offset="50"
              target="_blank"
              ><i class="fa-brands fa-facebook-f"></i
            ></a>
            <a
              data-aos="fade-down"
              style="transition: all 400ms ease"
              href="<?php the_field('instagram-link');?>"
              data-aos-offset="50"
              target="_blank"
              ><i class="fa-brands fa-instagram"></i
            ></a>
            <a
              data-aos="fade-up"
              style="transition: all 400ms ease"
              href="<?php the_field('linkedIn-link');?>"
              data-aos-offset="50"
              target="_blank"
              ><i class="fa-brands fa-linkedin-in"></i
            ></a>
            <a
              data-aos="fade-down"
              style="transition: all 400ms ease"
              href="<?php the_field('twitter-link');?>"
              data-aos-offset="50"
              target="_blank"
              ><i class="fa-brands fa-twitter"></i
            ></a>
            <a
              data-aos="fade-up"
              style="transition: all 400ms ease"
              href="<?php the_field('vk-link');?>"
              data-aos-offset="50"
              target="_blank"
              ><i class="fa-brands fa-vk"></i
            ></a>
          </div>
          <div class="line-container">
            <div class="container">
              <div data-aos="fade-up" data-aos-offset="100" class="line"></div>
            </div>
          </div>
          <div class="footer-copyright">
            <p data-aos="fade-down" data-aos-offset="50">
              &copy; 2021 Copyright. <span>Macode.io</span>
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- ============== SCRIPTS ============== -->

    <?php wp_footer(); ?>

  </body>
</html>
