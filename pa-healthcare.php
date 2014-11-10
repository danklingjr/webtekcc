<?php
// Define variables for SEO
$parent = 'Case Studies';
$parentId = 'case-studies';
$pageId = 'vynecrest-winery';
$pageTitle = 'Vynecrest Winery Web Design'; // Title of page //
$pageDescription = 'put page description here'; // Title of page //
$pageCanonical = 'http://www.url.com/';
// If we don't want the search engines to see our website just yet
//$pageRobots = 'noindex,nofollow';
include('includes/header.php') // Include header file //
?>

        <section class="hero__page--pahc group">
            <img src="img/healthcare-device-graphic.png" alt="Vynecrest Winery, Devices">
            <div class="pagination__link--previous">
                <a href="">Previous: <span>Vynecrest Winery</span></a>
            </div>
            <div class="pagination__link--next">
                <a href="">Next: Red Rose Transit Authority</a>
            </div>
        </section>

        <div class="content__case-study group">
            <div class="case-study__header">
                <h1>PA Healthcare</h1>
                <div class="case-study__tags">
                    <a href="" class="button__tag">Responsive Design</a><a href="" class="button__tag">Wordpress</a><a href="" class="button__tag">CMS</a><a href="http://www.pahealthcare.org/" class="button" target="_blank">View Site</a>
                </div>
            </div>

            <div class="group">
                <div class="case-study__problem grid-half">
                    <h3>Problem</h3>
                    <p>A winery’s image is very important.  Vynecrest realized they had a website that didn’t match their company’s image and brand. Their website was designed for desktop only, which created a problem for customers using the site on mobile devices.</p>
                </div>
                <div class="case-study__problem grid-half">
                    <h3>Solution</h3>
                    <p>We came up with a responsive solution with a darker, more refined color palette with the use of some textures that made the design seem more classic and established.  The approach is device agnostic meaning it should work at any resolution and on any device.</p>
                </div>
            </div>
        </div>

        <section class="case-study__style-guide">
            <h2>Style Guide</h2>
            <p>We created a styleguide that blended the classic wine culture as well as Vynecrest’s modern beginnings in 1974.</p>
            <div class="color-palette group">
                <div class="color-swatch">
                    <div class="color-swatch__top--pa1">
                        
                    </div>
                    <div class="color-swatch__bottom">
                        <span>#3e9bbd</span>
                    </div>
                </div><!--
                --><div class="color-swatch">
                    <div class="color-swatch__top--pa2">
                        
                    </div>
                    <div class="color-swatch__bottom">
                        <span>#fecb4c</span>
                    </div>
                </div><!--
                --><div class="color-swatch">
                    <div class="color-swatch__top--pa3">
                        
                    </div>
                    <div class="color-swatch__bottom">
                        <span>#ffa94c</span>
                    </div>
                </div><!--
                -->
            </div>
        </section>

        <div class="case-study__breakdown group">
            <b class="quote"><img src="img/quote.jpg" alt=""></b>
            <p class="highlight">PA Healthcare.org provides resources to help businesses determine the best options for their business through the Affordable Care Act (ACA).</p>
            <p>We redesigned the PA Healthcare.org website to provide information about the Affordable Care Act (ACA) in an organized and efficient way.  The site is optimized for use on any device and performs well on mobile devices.</p>

            <div class="breakdown group">
                <div class="breakdown__graphic">
                    <div class="browser--top group">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <img src="img/pa-healthcare-homepage.png" alt="">
                    <span class="point-1--pa">1</span>
                    <span class="point-2--pa">2</span>
                    <span class="point-3--pa">3</span>
                    <span class="point-4--pa">4</span>
                </div><!--
                --><div class="breakdown__points">
                    <div class="breakdown__point">
                        <b><span>1</span> Main Focus</b>
                        <p>The main focus of this site is to provide info to businesses about the Affordable Care Act and the options that come with it.  A main call to action has to be clear and focused.</p>
                    </div>
                    <div class="breakdown__point">
                        <b><span>2</span> Inform</b>
                        <p>For a winery, focusing on their wine is extremely important. This section has a call to action to view their wine as well as order it online.</p>
                    </div>
                    <div class="breakdown__point">
                        <b><span>3</span> Display Up-to-date information</b>
                        <p>They run various events at the winery so we wanted to highlight those as well as their multiple locations where customers can visit.</p>
                    </div>
                    <div class="breakdown__point">
                        <b><span>4</span> Highlight Events</b>
                        <p>They needed a place to market their monthly deals that stood out and didn't clutter the layout.</p>
                    </div>
                </div>
            </div>
        </div>

<?php include('includes/footer.php'); ?>