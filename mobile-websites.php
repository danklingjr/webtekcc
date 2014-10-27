<?php
// Define variables for SEO
$parent = '';
$parentId = '';
$pageId = 'mobile-websites';
$pageTitle = 'Mobile Websites'; // Title of page //
$pageDescription = 'put page description here'; // Title of page //
$pageCanonical = 'http://www.url.com/';
// If we don't want the search engines to see our website just yet
//$pageRobots = 'noindex,nofollow';
include('includes/header.php') // Include header file //
?>

        <section class="hero__page group">
            <h1>Mobile Websites</h1>
            <p class="page__description">We’ve been building websites for a long time and with every industry you can think of.  Check out some of our work below to see if we’d be a good fit!</p>
            
        </section>

        <?php include('includes/web-nav.php'); ?>

        <div class="content__graphic--mobile group">
            
        </div>

        <div class="content__service group">
            <!-- <div class="service__single--graphic">
                
            </div> -->
            <?php include('includes/breadcrumbs.php'); ?>

            <div class="service__single--wrap grid-full group">
                <div class="service__single--main grid-4">
                    <p>Sometimes the best experience is the simplest one.  Dedicated mobile websites are still a viable option to promote your products or services, as long as they’re designed with content parity in mind.  Content parity is the idea that you serve the same content on your dedicated mobile website as you serve on your desktop version.  Some websites are very large and it can seem like a daunting task to add all of the same content  from the desktop version, so this may be an appropriate use case to leave out some content.  If you do it this way you run the risk of confusing or frustrating users who interact with your site on mobile and desktop.</p>
                    <p></p>
                    
                    <ul>
                        <li><b><a href="">Responsive Web Design</a></b> - Build your site to automatically respond to smaller screen sizes</li>
                        <li><b>Separate Mobile Site</b> - Build a totally separate condensed version of your main website</li>
                        <li><b>Hosted Mobile Platform</b> - Utilize a hosted software solution that converts your main site into something more mobile friendly</li>
                        <li><b>Mobile Friendly Main Site</b> - Design your site with larger buttons, text, phone number, etc so your main website looks pretty good on small screens as well</li>
                    </ul>
                    <p>WebTek can dig into your <a href="">Google Analytics</a> to help in determining what devices and how many mobile devices are accessing your site. This will help us consult you accordingly on a mobile website strategy for your business.</p>
                </div>
                <aside class="service__single--sidebar grid-2">
                    <a href="" class="button--sidebar"><i>like what you see?</i><b>Request A Quote</b></a>
                    <?php include('includes/testimonial-sidebar.php'); ?>
                </aside>
            </div>
        </div>

<?php include('includes/footer.php'); ?>