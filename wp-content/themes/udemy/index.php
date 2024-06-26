<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

  <!-- Stylesheets
	============================================= -->
  <?php wp_head(); ?>

  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Document Title
	============================================= -->
  <title>Index Template</title>

</head>

<body class="stretched no-transition">

  <!-- Document Wrapper
  ============================================= -->
  <div id="wrapper" class="clearfix">
    <!-- Top Bar
    ============================================= -->
    <div id="top-bar" class="dark">

      <div class="container clearfix">

        <div class="col_half nobottommargin">

          <!-- Top Links
          ============================================= -->
          <div class="top-links">
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">FAQs</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div><!-- .top-links end -->

        </div>

        <div class="col_half fright col_last nobottommargin">

          <!-- Top Social
          ============================================= -->
          <div id="top-social">
            <ul>
              <li>
                <a href="#" class="si-facebook">
                  <span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span>
                </a>
              </li>
              <li>
                <a href="#" class="si-twitter">
                  <span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span>
                </a>
              </li>
              <li>
                <a href="#" class="si-instagram">
                  <span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span>
                </a>
              </li>
              <li>
                <a href="tel:+55.55.5555555" class="si-call">
                  <span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+55.55.5555555</span>
                </a>
              </li>
              <li>
                <a href="mailto:info@email.com" class="si-email3">
                  <span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text">info@email.com</span>
                </a>
              </li>
            </ul>
          </div><!-- #top-social end -->

        </div>

      </div>

    </div><!-- #top-bar end -->

    <!-- Header
    ============================================= -->
    <header id="header" class="sticky-style-2">

      <div class="container clearfix">

        <!-- Logo
        ============================================= -->
        <div id="logo">
          <a href="#" class="standard-logo">Udemy</a>
        </div><!-- #logo end -->

        <div class="top-advert">
          <img src="images/magazine/ad.jpg">
        </div>

      </div>

      <div id="header-wrap">

        <!-- Primary Navigation
        ============================================= -->
        <nav id="primary-menu" class="style-2">

          <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <?php
            if (has_nav_menu('primary')) {
              wp_nav_menu([
                'theme_location' => 'primary',
                'container' => false,
                'fallback_cb' => false,
                'depth' => 4,
                //'walker' => new JU_Custom_Nav_Walker()
              ]);
            }
            ?>

            <!-- Top Cart
            ============================================= -->
            <div id="top-cart">
              <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
              <div class="top-cart-content">
                <div class="top-cart-title">
                  <h4>Shopping Cart</h4>
                </div>
                <div class="top-cart-items">
                  <div class="top-cart-item clearfix">
                    <div class="top-cart-item-image">
                      <a href="#"><img src="images/shop/small/1.jpg" /></a>
                    </div>
                    <div class="top-cart-item-desc">
                      <a href="#">Blue Round-Neck Tshirt</a>
                      <span class="top-cart-item-price">$19.99</span>
                      <span class="top-cart-item-quantity">x 2</span>
                    </div>
                  </div>
                  <div class="top-cart-item clearfix">
                    <div class="top-cart-item-image">
                      <a href="#"><img src="images/shop/small/6.jpg" /></a>
                    </div>
                    <div class="top-cart-item-desc">
                      <a href="#">Light Blue Denim Dress</a>
                      <span class="top-cart-item-price">$24.99</span>
                      <span class="top-cart-item-quantity">x 3</span>
                    </div>
                  </div>
                </div>
                <div class="top-cart-action clearfix">
                  <span class="fleft top-checkout-price">$114.95</span>
                  <button class="button button-3d button-small nomargin fright">
                    View Cart
                  </button>
                </div>
              </div>
            </div><!-- #top-cart end -->

            <!-- Top Search
            ============================================= -->
            <div id="top-search">
              <a href="#" id="top-search-trigger">
                <i class="icon-search3"></i><i class="icon-line-cross"></i>
              </a>
              <form action="#" method="get">
                <input type="text" name="q" class="form-control" placeholder="Type &amp; Hit Enter.." value="">
              </form>
            </div><!-- #top-search end -->

          </div>

        </nav><!-- #primary-menu end -->

      </div>

    </header><!-- #header end -->

    <!-- Content
    ============================================= -->
    <section id="content">

      <div class="content-wrap">

        <div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
          <div>
            <div class="container clearfix">
              <span class="badge badge-danger bnews-title">Breaking News:</span>

              <div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false" data-pagi="false">
                <div class="flexslider">
                  <div class="slider-wrap">
                    <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </strong></a></div>
                    <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </strong></a></div>
                    <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </strong></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container clearfix">

          <!-- Post Content
          ============================================= -->
          <div class="postcontent nobottommargin clearfix">

            <!-- Posts
            ============================================= -->
            <div id="posts">

              <div class="entry clearfix">
                <div class="entry-image">
                  <a href="#">
                    <img class="image_fade" src="images/blog/standard/17.jpg">
                  </a>
                </div>
                <div class="entry-title">
                  <h2>
                    <a href="single.html">
                      This is a Standard post with a Preview Image
                    </a>
                  </h2>
                </div>
                <ul class="entry-meta clearfix">
                  <li><i class="icon-calendar3"></i> 10th February 2014</li>
                  <li>
                    <a href="#">
                      <i class="icon-user"></i>
                      admin
                    </a>
                  </li>
                  <li>
                    <i class="icon-folder-open"></i>
                    <a href="#">General</a>, <a href="#">Media</a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="icon-comments"></i>
                      13 Comments
                    </a>
                  </li>
                </ul>
                <div class="entry-content">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate,
                    asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est
                    quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis
                    rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat
                    atque vitae voluptatem libero at eveniet veritatis ab facere.
                  </p>
                  <a href="#" class="more-link">Read More</a>
                </div>
              </div>

              <div class="entry clearfix">
                <div class="entry-image">
                  <iframe src="http://player.vimeo.com/video/87701971" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
                <div class="entry-title">
                  <h2><a href="blog-single-full.html">This is a Standard post with an Embedded Video</a></h2>
                </div>
                <ul class="entry-meta clearfix">
                  <li><i class="icon-calendar3"></i> 16th February 2014</li>
                  <li><a href="#"><i class="icon-user"></i> admin</a></li>
                  <li><i class="icon-folder-open"></i> <a href="#">Videos</a>, <a href="#">News</a></li>
                  <li><a href="blog-single-full.html#comments"><i class="icon-comments"></i> 19 Comments</a></li>
                </ul>
                <div class="entry-content">
                  <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis
                    quisquam laboriosam esse beatae hic perferendis velit deserunt soluta iste repellendus officia in
                    neque veniam debitis placeat quo unde reprehenderit eum facilis vitae. Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. Nihil, reprehenderit!</p>
                  <a href="blog-single-full.html" class="more-link">Read More <i class="icon-caret-right"></i></a>
                </div>
              </div>

              <div class="entry clearfix">
                <div class="entry-image">
                  <div class="fslider" data-arrows="false" data-lightbox="gallery">
                    <div class="flexslider">
                      <div class="slider-wrap">
                        <div class="slide"><a href="images/blog/full/10.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/standard/10.jpg" alt="Standard Post with Gallery"></a>
                        </div>
                        <div class="slide"><a href="images/blog/full/20.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/standard/20.jpg" alt="Standard Post with Gallery"></a>
                        </div>
                        <div class="slide"><a href="images/blog/full/21.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/standard/21.jpg" alt="Standard Post with Gallery"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="entry-title">
                  <h2><a href="blog-single-small.html">This is a Standard post with a Slider Gallery</a></h2>
                </div>
                <ul class="entry-meta clearfix">
                  <li><i class="icon-calendar3"></i> 24th February 2014</li>
                  <li><a href="#"><i class="icon-user"></i> admin</a></li>
                  <li><i class="icon-folder-open"></i> <a href="#">Gallery</a>, <a href="#">Media</a></li>
                  <li><a href="blog-single-small.html#comments"><i class="icon-comments"></i> 21 Comments</a></li>
                </ul>
                <div class="entry-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi
                    autem blanditiis enim culpa reiciendis et explicabo tenetur voluptate rerum molestiae eaque possimus
                    exercitationem eligendi fuga. Maiores, sunt eveniet doloremque porro hic exercitationem distinctio
                    sequi adipisci. Nulla, fuga perferendis voluptatum beatae voluptate architecto laboriosam provident
                    deserunt. Saepe!</p>
                  <a href="blog-single-small.html" class="more-link">Read More</a>
                </div>
              </div>

              <div class="entry clearfix">
                <div class="entry-image clearfix">
                  <iframe width="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/115823769&amp;auto_play=false&amp;hide_related=true&amp;visual=true"></iframe>
                </div>
                <div class="entry-title">
                  <h2><a href="single.html">This is an Embedded Audio Post</a></h2>
                </div>
                <ul class="entry-meta clearfix">
                  <li><i class="icon-calendar3"></i> 28th April 2014</li>
                  <li><a href="#"><i class="icon-user"></i> admin</a></li>
                  <li><i class="icon-folder-open"></i> <a href="#">Audio</a>, <a href="#">General</a></li>
                  <li><a href="single.html#comments"><i class="icon-comments"></i> 16 Comments</a></li>
                </ul>
                <div class="entry-content">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi
                    autem blanditiis enim culpa reiciendis et explicabo tenetur voluptate rerum molestiae eaque possimus
                    exercitationem eligendi fuga. Maiores, sunt eveniet doloremque porro hic exercitationem distinctio
                    sequi adipisci. Nulla, fuga perferendis voluptatum beatae voluptate architecto laboriosam provident
                    deserunt. Saepe!</p>
                  <a href="single.html" class="more-link">Read More</a>
                </div>
              </div>

            </div><!-- #posts end -->

            <!-- Pagination
            ============================================= -->
            <div class="row mb-3">
              <div class="col-12">
                <a href="#" class="btn btn-outline-secondary float-left">
                  &larr; Older
                </a>
                <a href="#" class="btn btn-outline-dark float-right">
                  Newer &rarr;
                </a>
              </div>
            </div>
            <!-- .pager end -->

          </div><!-- .postcontent end -->

          <!-- Sidebar
          ============================================= -->
          <div class="sidebar nobottommargin col_last">
            <div class="sidebar-widgets-wrap">

              <div class="widget clearfix">
                <h4>Recipes of the Day</h4>

                <div class="portfolio-image">
                  <a href="#">
                    <img src="images/portfolio/4/3.jpg" alt="Mac Sunglasses">
                  </a>
                </div>
                <div class="portfolio-desc center nobottompadding">
                  <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
                </div>
              </div>

              <div class="widget clearfix">

                <h4>Tag Cloud</h4>
                <div class="tagcloud">
                  <a href="#">general</a>
                  <a href="#">videos</a>
                  <a href="#">music</a>
                  <a href="#">media</a>
                  <a href="#">photography</a>
                  <a href="#">parallax</a>
                  <a href="#">ecommerce</a>
                  <a href="#">terms</a>
                  <a href="#">coupons</a>
                  <a href="#">modern</a>
                </div>

              </div>
            </div>

          </div><!-- .sidebar end -->

        </div>

      </div>

    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">

      <!-- Copyrights
      ============================================= -->
      <div id="copyrights">

        <div class="container clearfix">

          <div class="col_half">
            Copyrights &copy; 2017 All Rights Reserved by Udemy.<br>
            <div class="copyright-links">
              <a href="#">Privacy Policy</a>
            </div>
          </div>

          <div class="col_half col_last tright">
            <div class="fright clearfix">
              <a href="#" class="social-icon si-small si-borderless si-facebook">
                <i class="icon-facebook"></i>
                <i class="icon-facebook"></i>
              </a>

              <a href="#" class="social-icon si-small si-borderless si-twitter">
                <i class="icon-twitter"></i>
                <i class="icon-twitter"></i>
              </a>

            </div>

            <div class="clear"></div>

            <i class="icon-envelope2"></i> info@email.com <span class="middot">&middot;</span>
            <i class="icon-headphones"></i> +55-5-5555-5555
          </div>

        </div>

      </div><!-- #copyrights end -->

    </footer><!-- #footer end -->
  </div><!-- #wrapper end -->

  <!-- Go To Top
  ============================================= -->
  <div id="gotoTop" class="icon-angle-up"></div>

  <!-- External JavaScripts
  ============================================= -->
  <?php wp_footer(); ?>

</body>

</html>