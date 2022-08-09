<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal Website 💻</title>

    <!-- ============== STYLES ============== -->
    
    <?php wp_head(); ?>

    

    
  </head>
  <body>
    <!-- ================== HEADER ================== -->
    <header>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-12">
            <!-- ================== HEADER | NAVBAR ================== -->
            <nav class="nav">
              <a href="#" class="nav-brand"><span>></span></a>
              <div class="nav-collapse">
                <ul class="nav-nav">
                  <li class="nav-item">
                    <a href="#" class="nav-link"
                      >Tutorials <span class="fancy-line"></span
                    ></a>
                  </li>
                  <span></span>
                  <li class="nav-item">
                    <a href="#" class="nav-link"
                      >Case studies <span class="fancy-line"></span
                    ></a>
                  </li>
                  <span></span>
                  <li class="nav-item">
                    <a href="#" class="nav-link"
                      >Resources <span class="fancy-line"></span
                    ></a>
                  </li>
                </ul>
              </div>
            </nav>
            <div class="mobile-version">
              <div class="mobile-version__company">
                <a href="#" class="nav-brand"><span>></span></a>
                <h4>macode.</h4>
              </div>
              <div class="mob-nav">
                <input type="checkbox" id="active" />
                <label for="active" class="menu-btn"><span></span></label>
                <label for="active" class="close"></label>
                <div class="wrapper">
                  <ul>
                    <li><a href="<?php the_field('link_tutorials');?>">Tutorials</a></li>
                    <li><a href="<?php the_field('link_studies');?>">Studies</a></li>
                    <li><a href="<?php the_field('link_resources');?>">Resources</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="header-info">
              <h4>
                <?php the_field('main-text');?>
                <span><i class="fa-solid fa-code"></i></span>
                study <br class="br-header" /><!-- study with coding -->
                <span id="typewriter"></span>|
              </h4>
              <div class="header-text">
                <img src="<?php bloginfo("template_url");?>/assets/images/elements/line.png" alt="img" />
                <p data-aos="fade-down">
                <?php the_field('subtitle-main-text');?>
                </p>
              </div>
              <div class="btn-header">
                <a
                  style="transition: all 400ms ease"
                  data-aos="fade-up"
                  href="#level-one"
                  class="btn-website"
                  >Get started
                  <span><i class="fa-solid fa-arrow-down"></i></span
                ></a>
              </div>
            </div>
          </div>
          <div style="background-image: url('<?php the_field('fon-image');?>');" class="col-lg-6 col-12 bg-image img-relative">
            <img
              src="<?php the_field('code-image');?>"
              alt="img"
              class="level-one"
              data-aos="fade-up"
              data-aos-delay="500"
            />
            <img
              src="<?php the_field('person-image');?>"
              alt="img"
              class="level-two"
              data-aos="fade-up"
            />
            <div class="level-three">
              <div class="glass-section">
                <img src="<?php bloginfo("template_url");?>/assets/images/elements/Radio button.png" alt="img" />
                <span></span>
                <p>Name (Skill)</p>
              </div>
            </div>
            <img
              src="<?php bloginfo("template_url");?>/assets/images/elements/coursor.png"
              alt="img"
              class="level-four"
            />
          </div>
        </div>
      </div>
    </header>