<?php
// Define variables for SEO
$parent = 'SEO';
$parentId = 'seo';
$pageId = 'seo-pricing';
$pageTitle = 'SEO Pricing'; // Title of page //
$pageDescription = 'put page description here'; // Title of page //
$pageCanonical = 'http://www.url.com/';
// If we don't want the search engines to see our website just yet
//$pageRobots = 'noindex,nofollow';
include('includes/header.php') // Include header file //
?>

        <section class="hero__page--case-study group">
            <h1>SEO Pricing</h1>
            <p class="page__description">Search engine marketing done right, takes time and does involve a small investment and commitment on your end.</p>
            
        </section>

        <div class="content__service group">
            <!-- <div class="service__single--graphic">
                
            </div> -->

            <div class="service__single--wrap grid-full group">
                <div class="service__single--main grid-4">
                    
                </div>
                <?php include('includes/testimonial-sidebar.php'); ?>
            </div>
        </div>

<?php include('includes/footer.php'); ?>