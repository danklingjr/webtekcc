<?php
// Define variables for SEO
$pageTitle = 'put page title here'; // Title of page //
$pageDescription = 'put page description here'; // Title of page //
$pageCanonical = 'http://www.url.com/';
// If we don't want the search engines to see our website just yet
//$pageRobots = 'noindex,nofollow';
include('includes/header.php') // Include header file //
?>
        <section class="hero group">

            <div class="tagline">
                <i>Helping You</i><br><b>Succeed Online</b><br>
                <a href="" class="button__cta">Work With Us</a>
            </div>
            
        </section>

        <section class="content__intro">
            <p class="intro__sentence">WebTek is a premier, award winning web design company in Lancaster PA specializing in <a href="">web design</a>, <a href="">search engine optimization (SEO)</a> and <a href="">Internet Marketing</a>.</p>
            <img src="img/team.png" alt="">
        </section>

        <h2 class="section__title">Web Professionals</h2>

        <section class="content__services">

            <div class="service--design group">
                <figure class="service__graphic">
                    <img src="img/design.jpg" alt="">
                </figure><!--
                --><div class="service__details">
                    <h3>Web Design</h3>
                    <div class="service__sub">
                        <a href="" class="button">Responsive Design</a>
                        <a href="" class="button">Mobile Sites</a>
                        <a href="" class="button">Accessibility</a>
                        <a href="" class="button">User Experience</a>
                        <a href="" class="button">Email Templates</a>
                    </div>
                    <p>We design websites based on your business goals and user’s needs.  Not only do they look great and function well, they’re designed with purpose. </p>
                </div>
            </div>

            <div class="service--development group">
                <figure class="service__graphic">
                    <img src="img/design.jpg" alt="">
                </figure><!--
                --><div class="service__details">
                    <h3>Development &amp; CMS</h3>
                    <div class="service__sub">
                        <a href="" class="button">Ecommerce</a>
                        <a href="" class="button">Content Management Systems</a>
                        <a href="" class="button">Blog Development</a>
                    </div>
                    <p>Development should have one purpose, to make your life easier. We develop solutions that make selling, editing, and managing your products and content easier. Your website shouldn’t work against you, it should work for you.</p>
                </div>
            </div>

            <div class="service--marketing group">
                <figure class="service__graphic">
                    <img src="img/design.jpg" alt="">
                </figure><!--
                --><div class="service__details">
                    <h3>Integrated Marketing</h3>
                    <div class="service__sub">
                        <a href="" class="button">SEO</a>
                        <a href="" class="button">PPC</a>
                        <a href="" class="button">Social Media Marketing</a>
                        <a href="" class="button">Internet Marketing</a>
                        <a href="" class="button">Content Creation &amp; Distribution</a>
                        <a href="" class="button">Local Marketing</a>
                    </div>
                    <p>Unlike traditional internet marketing, we take a refreshingly strategic approach to marketing your company. We utilize all of the critical components of internet marketing in order to craft a completely customized marketing solution for your business.</p>
                </div>
            </div>

        </section>

        <h2 class="section__title">Here's Some Proof</h2>

        <section class="content__portfolio">

            <div class="case-study group">
                <div class="case-study__info">
                    <h3>Deck Craft Plus</h3>
                    <span class="case-study__type">Responsive Design, CMS, SEO</span>

                    <p>WebTek began working with Deck Craft Plus 2 years ago.They came to use for a complete redesign, including a newcontent management system, a responsive design and search engine optimization.</p>

                    <a href="" class="button__case-study">View Case Study</a>
                </div><!--

                --><figure class="case-study__graphic">
                    <img src="img/case-study-pic.png" alt="">
                </figure>
            </div>

            <div class="case-study group">
                
                <figure class="case-study__graphic">
                    <img src="img/case-study-pic.png" alt="">
                </figure><!--

                --><div class="case-study__info">
                    <h3>Deck Craft Plus</h3>
                    <span class="case-study__type">Responsive Design, CMS, SEO</span>

                    <p>WebTek began working with Deck Craft Plus 2 years ago.They came to use for a complete redesign, including a newcontent management system, a responsive design and search engine optimization.</p>

                    <a href="" class="button__case-study">View Case Study</a>
                </div>

            </div>

            <div class="case-study group">
                <div class="case-study__info">
                    <h3>Deck Craft Plus</h3>
                    <span class="case-study__type">Responsive Design, CMS, SEO</span>

                    <p>WebTek began working with Deck Craft Plus 2 years ago.They came to use for a complete redesign, including a newcontent management system, a responsive design and search engine optimization.</p>

                    <a href="" class="button__case-study">View Case Study</a>
                </div><!--

                --><figure class="case-study__graphic">
                    <img src="img/case-study-pic.png" alt="">
                </figure>
            </div>

        </section>

        <section class="content__stats group">

            <div class="tagline__bottom grid-half">
                <p>Our tagline "Helping you succeed online" is more than just our tagline—it's our philosophy. We thrive on positive client feedback—it's what motivates us.</p>
            </div>

            <div class="stats grid-half group">
                <div class="stat__clients grid-half">
                    <div class="stat__ui">
                        <div class="stat__ui--outer">
                            <div class="stat__ui--inner">
                                <h4>583</h4>
                            </div>
                        </div>
                    </div>
                    <p>We've worked with over 500 clients!</p>
                </div>
                <div class="stat__sites grid-half">
                    <div class="stat__ui">
                        <div class="stat__ui--outer">
                            <div class="stat__ui--inner">
                                <h4>1204</h4>
                            </div>
                        </div>
                    </div>
                    <p>We've designed and developed over 1000 websites!</p>
                </div>
            </div>

        </section>
<?php include('includes/footer.php'); ?>