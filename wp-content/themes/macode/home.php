<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>

    <!-- ================== COMPANIES ================== -->

    <section class="company">
      <div class="company-container container">
        <div class="company-images">
          <img
            data-aos="fade-up"
            data-aos-delay="100"
            src="<?php the_field('edx-image');?>"
            alt="img"
          />
          <img
            data-aos="fade-up"
            data-aos-delay="200"
            src="<?php the_field('coursera-image');?>"
            alt="img"
          />
          <img
            data-aos="fade-up"
            data-aos-delay="400"
            src="<?php the_field('udemy-image');?>"
            alt="img"
          />
        </div>
      </div>
    </section>

    <!-- ================== FEATURES ================== -->

    <section class="features">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-12">
            <div class="features-text">
              <h4 data-aos="flip-up"><?php the_field('features-text');?></h4>
              <p data-aos="fade-down">
              <?php the_field('second-features-text');?>
              </p>
            </div>
            <div class="features-lines">
              <span
                style="transition: all 400ms ease"
                data-aos="fade-up"
                class="big"
              ></span>
              <span
                style="transition: all 400ms ease"
                data-aos="fade-down"
              ></span>
              <span
                style="transition: all 400ms ease"
                data-aos="fade-up"
              ></span>
            </div>
          </div>
          <div class="col-lg-7 col-12">
            <div class="features-blocks">
              <div
                data-aos="flip-down"
                style="transition: all 400ms ease"
                class="features-blocks__element"
              >
                <div class="features-blocks__element-img">
                  <img src="<?php bloginfo("template_url");?>/assets/images/elements/c2.png" alt="img" class="icon" />
                </div>
                <div class="features-blocks__element-text">
                  <h4>Best Tutors</h4>
                  <p>
                  <?php the_field('best-tutors-features-text');?>
                  </p>
                </div>
              </div>

              <div
                data-aos="flip-up"
                style="transition: all 400ms ease"
                class="features-blocks__element"
              >
                <div class="features-blocks__element-img">
                  <img src="<?php bloginfo("template_url");?>/assets/images/elements/c4.png" alt="img" class="icon" />
                </div>
                <div class="features-blocks__element-text">
                  <h4>Flexible</h4>
                  <p><?php the_field('flexible-features-text');?></p>
                </div>
              </div>

              <div
                data-aos="flip-down"
                style="transition: all 400ms ease"
                class="features-blocks__element"
              >
                <div class="features-blocks__element-img">
                  <img src="<?php bloginfo("template_url");?>/assets/images/elements/c1.png" alt="img" class="icon" />
                </div>
                <div class="features-blocks__element-text">
                  <h4>Easy Access</h4>
                  <p><?php the_field('easy-access-features-text');?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ================== STUDY ================== -->

    <section class="study" id="level-one">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-12">
            <div class="study-block__img">
              <img
                data-aos="flip-down"
                src="<?php the_field('code-image-study');?>"
                alt="img"
              />
            </div>
          </div>
          <div class="col-lg-5 col-12">
            <div class="study-block__info">
              <h4 data-aos="fade-up"><?php the_field('main-text-study');?></h4>
              <p data-aos="fade-down">
              <?php the_field('subtitle-text-study');?>
              </p>

              <a
                data-aos="fade-down"
                style="transition: all 400ms ease"
                href="#level-two"
                class="btn-website-global"
                >Try it Yourself
                <span><i class="fa-solid fa-arrow-down"></i></span
              ></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ================== TUTORS ================== -->

    <section class="tutors">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-12">
            <div class="tutors-block">
              <h4 class="tutors-block-h4" data-aos="fade-up">
              <?php the_field('main-text-tutors');?>
              </h4>
              <div class="tutors-block__elements">
                <div class="tutors-block__element">
                  <div class="tutors-block__element-img">
                    <img
                      data-aos="flip-down"
                      src="<?php bloginfo("template_url");?>/assets/images/elements/c5.png"
                      alt="img"
                      class="icon"
                    />
                  </div>
                  <div class="tutors-block__element-text">
                    <h4 data-aos="fade-down">University</h4>
                    <p data-aos="fade-up">
                    <?php the_field('second-text-tutors-1');?>
                    </p>
                  </div>
                </div>
                <div class="line"></div>
                <div class="tutors-block__element">
                  <div class="tutors-block__element-img">
                    <img
                      data-aos="flip-down"
                      src="<?php bloginfo("template_url");?>/assets/images/elements/c3.png"
                      alt="img"
                      class="icon"
                    />
                  </div>
                  <div class="tutors-block__element-text">
                    <h4 data-aos="fade-down">Showcase</h4>
                    <p data-aos="fade-up">
                    <?php the_field('second-text-tutors-2');?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-12">
            <div class="tutors-img">
              <img
                data-aos="flip-down"
                src="<?php the_field('person-image-tutors');?>"
                alt="img"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ================== COURSES ================== -->

    <section class="courses" id="level-two">
      <div class="courses-text">
        <h4 data-aos="flip-up"><?php the_field('main-text-courses');?></h4>
        <p data-aos="fade-up">
        <?php the_field('second-text-courses');?>
        </p>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-12 courses-shift">
            <div
              style="transition: all 800ms ease"
              data-aos="fade-down"
              class="course-block"
            >
              <h4>DEVELOPMENT</h4>
              <p class="course-block__price"><span>$</span><?php the_field('price-development');?></p>
              <div class="course-block__info">
                <p>1 Module Javascript</p>
                <p>1 Module Human Resources</p>
              </div>
              <div class="course-block__btn">
                <a href="<?php the_field('development-link');?>" class="btn-website">Buy Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-12 courses-shift">
            <div
              style="transition: all 800ms ease"
              data-aos="fade-up"
              class="course-block"
            >
              <h4>IT & SOFTWARE</h4>
              <p class="course-block__price"><span>$</span><?php the_field('price-software-it');?></p>
              <div class="course-block__img-element">
                <img src="<?php bloginfo("template_url");?>/assets/images/elements/new button.png" alt="img" />
              </div>
              <div class="course-block__info">
                <p>1 Module Javascript</p>
                <p>1 Module Human Resources</p>
                <p>2 Module Sales Teams</p>
                <p>Pack Marketing Skills</p>
                <p>5 Module Study Case</p>
              </div>
              <div class="course-block__btn">
                <a href="<?php the_field('software-it-link');?>" class="btn-website">Buy Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-12 courses-shift">
            <div
              style="transition: all 800ms ease"
              data-aos="fade-down"
              class="course-block"
            >
              <h4>BUSINESS</h4>
              <p class="course-block__price"><span>$</span><?php the_field('price-business');?></p>
              <div class="course-block__info">
                <p>1 Module Javascript</p>
                <p>1 Module Human Resources</p>
                <p>2 Module Sales Teams</p>
              </div>
              <div class="course-block__btn">
                <a href="<?php the_field('business-link');?>" class="btn-website">Buy Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ================== FAQS ================== -->

    <section class="faqs">
      <h2 data-aos="fade-up">FAQs</h2>
      <div class="container faqs__container">    
<?php
global $post;

$myposts = get_posts([ 
    'numberposts' => -1,
    'category'    => ''
]);

if( $myposts ){
    foreach( $myposts as $post ){
        setup_postdata( $post );
        ?>


        <div>
            <article class="faq">
            <div class="question__answer">
                <h4 data-aos="fade-up">
                <?php the_title();?>
                </h4>
                <p data-aos="fade-down">
                <?php the_content();?>
                </p>
            </div>
            <div
                class="faq__icon"
                data-aos="flip-up"
                style="transition: all 800ms ease"
            >
                <i class="fa-solid fa-circle-plus"></i>
            </div>
            </article>

            <hr data-aos="flip-up" />
        </div>


        <?php 
    }
} else {
    ?> 
    <div>
            <article class="faq">
            <div class="question__answer">
                <h4 data-aos="fade-up">
                01. Can I Find the right information faster?
                </h4>
                <p data-aos="fade-down">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Molestiae, optio soluta illum ullam nesciunt, reiciendis quia amet
                debitis assumenda iste a eum id sed reprehenderit temporibus
                voluptates hic corrupti explicabo.
                </p>
            </div>
            <div
                class="faq__icon"
                data-aos="flip-up"
                style="transition: all 800ms ease"
            >
                <i class="fa-solid fa-circle-plus"></i>
            </div>
            </article>

            <hr data-aos="flip-up" />
        </div>
    <?php 
    
}

wp_reset_postdata(); // Сбрасываем $post
?>   

        
        

      </div>
    </section>

    <!-- ================== SKILLS ================== -->

    <section class="skills">
      <div class="container">
        <div data-aos="flip-up" class="skills-block">
          <h2>
          <?php the_field('main-text-skills');?>
            <br class="skills-shift" />
            <span id="typewriter2"></span>|
          </h2>
          <p data-aos="fade-up">
          <?php the_field('second-text-skills');?>
          </p>
          <div class="skills-block__buttons">
            <a
              data-aos="fade-up"
              style="transition: all 800ms ease"
              href="#level-two"
              class="btn-website-global"
              >Try Yourself
            </a>
            <a
              data-aos="fade-up"
              style="transition: all 800ms ease"
              href="#level-one"
              class="btn-website-global"
              >Get started <span><i class="fa-solid fa-arrow-down"></i></span
            ></a>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>