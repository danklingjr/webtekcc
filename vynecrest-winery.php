<?php
// Define variables for SEO
$parent = 'Portfolio';
$parentId = 'portfolio';
$pageId = 'vynecrest-winery';
$pageTitle = 'Vynecrest Winery Web Design'; // Title of page //
$pageDescription = 'put page description here'; // Title of page //
$pageCanonical = 'http://www.url.com/';
// If we don't want the search engines to see our website just yet
//$pageRobots = 'noindex,nofollow';
include('includes/header.php') // Include header file //
?>

        <section class="hero__page--vynecrest group">
            <img src="img/vynecrest-device-graphic.png" alt="Vynecrest Winery, Devices">
        </section>

        <div class="content__case-study group">
            <div class="case-study__header">
                <h1>Vynecrest Winery</h1>
                <div class="case-study__tags">
                    <a href="" class="button__tag">Responsive Design</a><a href="" class="button__tag">ECommerce</a><a href="" class="button__tag">CMS</a><a href="http://www.vynecrest.com" class="button" target="_blank">View Site</a>
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
                    <div class="color-swatch__top--green">
                        
                    </div>
                    <div class="color-swatch__bottom">
                        <span>#798a56</span>
                    </div>
                </div><!--
                --><div class="color-swatch">
                    <div class="color-swatch__top--red">
                        
                    </div>
                    <div class="color-swatch__bottom">
                        <span>#600f10</span>
                    </div>
                </div><!--
                --><div class="color-swatch">
                    <div class="color-swatch__top--orange">
                        
                    </div>
                    <div class="color-swatch__bottom">
                        <span>#8e441f</span>
                    </div>
                </div><!--
                --><div class="color-swatch">
                    <div class="color-swatch__top--blue">
                        
                    </div>
                    <div class="color-swatch__bottom">
                        <span>#517991</span>
                    </div>
                </div>
            </div>
        </section>

        <div class="case-study__breakdown group">
            <b class="quote"><img src="img/quote.jpg" alt=""></b>
            <p class="highlight">Our wines speak to our dedication in producing fine wines. With over twenty wines ranging from red to white, dry to sweet, we are committed to making only quality wines. We enjoy what we do and we hope you enjoy the fruits of our labor!</p>
            <p>We designed the Vynecrest homepage to focus on and compliment Vynecrest's dedication to producing quaility wines. Their dedication really impressed us so we wanted to match that level of quality and dedication with this design.</p>

            <div class="breakdown group">
                <div class="breakdown__graphic">
                    <div class="browser--top group">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <img src="img/vynecrest-homepage.png" alt="">
                    <span class="point-1">1</span>
                    <span class="point-2">2</span>
                    <span class="point-3">3</span>
                    <span class="point-4">4</span>
                    <span class="point-5">5</span>
                </div><!--
                --><div class="breakdown__points">
                    <div class="breakdown__point">
                        <b><span>1</span> Present the brand</b>
                        <p>Presenting the brand front and center was important to show current and new customers that they are an established, respected winery.</p>
                    </div>
                    <div class="breakdown__point">
                        <b><span>2</span> Focus on the wine</b>
                        <p>For a winery, focusing on their wine is extremely important. This section has a call to action to view their wine as well as order it online.</p>
                    </div>
                    <div class="breakdown__point">
                        <b><span>3</span> Highlight locations</b>
                        <p>They run various events at the winery so we wanted to highlight those as well as their multiple locations where customers can visit.</p>
                    </div>
                    <div class="breakdown__point">
                        <b><span>4</span> Wine of the month</b>
                        <p>They needed a place to market their monthly deals that stood out and didn't clutter the layout.</p>
                    </div>
                    <div class="breakdown__point">
                        <b><span>5</span> Large Footer</b>
                        <p>We designed a large footer to make their wines and contact info accessible on any page.</p>
                    </div>
                </div>
            </div>
        </div>

<?php include('includes/footer.php'); ?>