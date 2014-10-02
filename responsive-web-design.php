<?php
// Define variables for SEO
$pageTitle = 'put page title here'; // Title of page //
$pageDescription = 'put page description here'; // Title of page //
$pageCanonical = 'http://www.url.com/';
// If we don't want the search engines to see our website just yet
//$pageRobots = 'noindex,nofollow';
include('includes/header.php') // Include header file //
?>

        <section class="hero__page group">
            <h1>Responsive Design</h1>
            <p class="page__description">We’ve been building websites for a long time and with every industry you can think of.  Check out some of our work below to see if we’d be a good fit!</p>
            
        </section>

        <div class="service__links--web">
            <a href="" class="selected">Responsive Design</a>
            <a href="">Mobile Websites</a>
            <a href="">Redesign</a>
            <a href="">Email Templates</a>
        </div>

        <div class="content__responsive group">
            <div class="responsive-example">
            <b class="whoa">hey</b>
                <div class="browser-outer">
                    <div class="browser-top">
                        <span class="first-circle"></span>
                        <span class="second-circle"></span>
                        <span class="last-circle"></span>
                    </div>
                    <div class="browser-inner">
                        <div class="block-wrap">
                            <div class="block-4">
                                <div class="large-block"></div>
                            </div>
                        </div>
                        <div class="block-wrap group">
                            <div class="block-1">
                                <div class="medium-block"></div>
                                <div class="text-block"></div>
                                <div class="text-block"></div>
                                <div class="text-block"></div>
                                <div class="half-text-block"></div>
                            </div>
                            <div class="block-1">
                                <div class="medium-block"></div>
                                <div class="text-block"></div>
                                <div class="text-block"></div>
                                <div class="text-block"></div>
                                <div class="half-text-block"></div>
                            </div>
                            <div class="block-1">
                                <div class="medium-block"></div>
                                <div class="text-block"></div>
                                <div class="text-block"></div>
                                <div class="text-block"></div>
                                <div class="half-text-block"></div>
                            </div>
                            <div class="block-1">
                                <div class="medium-block"></div>
                                <div class="text-block"></div>
                                <div class="text-block"></div>
                                <div class="text-block"></div>
                                <div class="half-text-block"></div>
                            </div>
                        </div>
                    </div>
                    <div class="browser-bottom">
                        <div class="push-button"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content__service group">
            <!-- <div class="service__single--graphic">
                
            </div> -->
            <div class="service__single--wrap grid-full group">
                <div class="service__single--main grid-4">
                    <p>Responsive Web Design is a newer way of building websites where in theory the website is built in a way to respond differently to different size devices. With the increased popularity of mobile devices (laptops, tablets, hybrids, smartphones, etc) showcasing a multitude of screen sizes, the concept seems to fit.</p>
                    <p>To code a responsive website, the developer will create a set of rules called media queries that tell the website to behave or respond differently based on the screen size of the viewing device. What this means is if you access a website on a small tablet screen like an Apple iPad instead of a traditional desktop widescreen monitor, you may see the same website displayed differently. And if you view that same website on a smartphone, you will probably see it displayed differently once again to be more accommodating to people viewing it on their phone. This could mean some graphics are eliminated, the content simplified or the navigation bar condensed into a single drop down icon.</p>
                </div>
                <aside class="service__single--sidebar grid-2">
                    <a href="" class="button--sidebar"><i>like what you see?</i><b>Request A Quote</b></a>
                    <?php include('includes/testimonial-sidebar.php'); ?>
                </aside>
            </div>
            <div class="service__single--wrap grid-full group">
                <div class="service__single--main grid-4">
                    <p>Another option for website owners is to build a completely different mobile website. Instead of one master website with a bunch of media queries and rules, there are two separate websites: one for smartphones and one for traditional desktops. The mobile version just displays the core basics of what mobile users may be interested in seeing, and not much else. You can also include a link to the full website, if mobile users would rather see that.</p>
                    <p>WebTek can analyze your website analytics to determine devices being used and percentages of overall traffic to better consult and recommend how to approach your mobile strategy and determine if responsive web design is right for you.</p>
                </div>
            </div>
        </div>

<?php include('includes/footer.php'); ?>