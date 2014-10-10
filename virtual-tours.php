<?php
// Define variables for SEO
$parent = 'Additional Services';
$parentId = 'additional-services';
$pageId = 'virtual-tours';
$pageTitle = 'Virtual Tours Lancaster PA | Office Visual Tour 360 Photography';
$breadcrumbTitle = 'Virtual Tours';
 // Title of page //
$pageDescription = ''; // Title of page //
$pageCanonical = 'http://www.webtekcc.com/virtual-tours.php';
// If we don't want the search engines to see our website just yet
//$pageRobots = 'noindex,nofollow';
include('includes/header.php') // Include header file //
?>


        <section class="hero__page group">
            <h1>Virtual Tours PA</h1>
            <p class="page__description">WebTek is proud to announce a new service...360° virtual tours!</p>
            
        </section>

        <div class="videoWrapper">

                    <!-- Copy & Pasted from YouTube -->
                    <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?cbll=40.169604,-76.197232&amp;layer=c&amp;panoid=fOhVs2VFBQUAAAAGOynkbw&amp;cbp=12,70,,0,6.32&amp;ie=UTF8&amp;ll=40.137941,-76.155853&amp;spn=0.470866,1.056747&amp;t=m&amp;z=11&amp;source=embed&amp;output=svembed"></iframe>
         </div>

        

        <div class="content__service group">
            <!-- <div class="service__single--graphic">
                
            </div> -->
            <?php include('includes/breadcrumbs.php'); ?>

            <div class="service__single--wrap grid-full group">
                <div class="service__single--main grid-4">
                  <h2>Facility Virtual Tours Using Google Street View Technology!</h2>

                  <p>WebTek is proud to announce a new service...360° virtual tours! We've partenered with a local company, 360PA Media Solutions, to help elevate your business to the next level. Now you can showcase your business or store online, gain exposure, and reach new local customers.</p>
                        <img src="img/360.jpg" class="grid-flow-opposite">
                  <p>We will take 360° panoramic pictures of your business using Street View technology, which allows you to engage with your customers by giving them access to "walk-though" your business online. The images are taken by a trusted Google business photographer. Google Business View images appear in Google Search, Google Maps, Google+ and Google Maps for Mobile.</p>

                  <p>We can embed your virtual tour on your Google+ page as well as your company website. Virtual tours are sure to influence customers during their online search; let us help you invite customers into your business today!</p>
                  

                 
       

                </div>
                <?php include('includes/sidebar-additional.php'); ?>
            </div>
        </div>


       

<?php include('includes/footer.php'); ?>