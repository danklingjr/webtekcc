<?php
// Define variables for SEO
$parent = '';
$parentId = '';
$pageId = 'redesign';
$pageTitle = 'Redesign'; // Title of page //
$pageDescription = 'put page description here'; // Title of page //
$pageCanonical = 'http://www.url.com/';
// If we don't want the search engines to see our website just yet
//$pageRobots = 'noindex,nofollow';
include('../includes/header.php') // Include header file //
?>

        <section class="hero__page group">
            <h1>Redesign</h1>
            <p class="page__description">We’ve been building websites for a long time and with every industry you can think of.  Check out some of our work below to see if we’d be a good fit!</p>
            
        </section>

        <?php include('../includes/web-nav.php'); ?>

        <div class="content__graphic group">
            
        </div>

        <div class="content__service group">
            <!-- <div class="service__single--graphic">
                
            </div> -->
            <?php include('../includes/breadcrumbs.php'); ?>
            
            <div class="service__single--wrap grid-full group">
                <div class="service__single--main grid-4">
                    <p>Mobile phones have exploded in popularity and have become the new standard in telecommunications. As technology continues to evolve, most mobile phones being sold today are smartphones with built in website browsing.</p>
                    <p>What that means for website owners is, there is a whole new growing audience of people accessing your website from a small mobile phone. Do you even know how your website looks on a smartphone? If not, you should find out and start developing a mobile strategy for your viewing audience.</p>
                    <p>Depending on what type of business you are in and why your visitors are accessing your site will help determine what kind of mobile strategy you should be implementing. For instance, if you are a retail business, you might be getting a lot of visitors to your site just to find out your hours, address or phone number. If they are seeing your full desktop site with tons of links and the information they really need quick access to can't be found, that mobile user experience can be frustrating.</p>
                    <p>There are basically 4 options for mobile website development:</p>
                    <ul>
                        <li><a href="">Responsive Web Design</a> - Build your site to automatically respond to smaller screen sizes</li>
                        <li><a href="">Separate Mobile Site</a> - Build a totally separate condensed version of your main website</li>
                        <li><a href="">Hosted Mobile Platform</a> - Utilize a hosted software solution that converts your main site into something more mobile friendly</li>
                        <li><a href="">Mobile Friendly Main Site</a> - Design your site with larger buttons, text, phone number, etc so your main website looks pretty good on small screens as well</li>
                    </ul>
                    <p>WebTek can dig into your <a href="">Google Analytics</a> to help in determining what devices and how many mobile devices are accessing your site. This will help us consult you accordingly on a mobile website strategy for your business.</p>
                </div>
                <aside class="service__single--sidebar grid-2">
                    <a href="" class="button--sidebar"><i>like what you see?</i><b>Request A Quote</b></a>
                    <?php include('../includes/testimonial-sidebar.php'); ?>
                </aside>
            </div>
        </div>

<?php include('../includes/footer.php'); ?>