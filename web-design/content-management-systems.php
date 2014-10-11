<?php
// Define variables for SEO
$parent = '';
$parentId = '';
$pageId = 'content-management-systems';
$pageTitle = 'Content Management Systems'; // Title of page //
$pageDescription = 'put page description here'; // Title of page //
$pageCanonical = 'http://www.url.com/';
// If we don't want the search engines to see our website just yet
//$pageRobots = 'noindex,nofollow';
include('../includes/header.php') // Include header file //
?>

        <section class="hero__page group">
            <h1>Content Management Systems</h1>
            <p class="page__description">Wordpress, first and foremost, was a blogging platform that has evolved into a complete CMS that carries a huge following of community and user support.</p>
            
        </section>

        <?php include('../includes/dev-nav.php'); ?>

        <div class="content__graphic group">
            
        </div>

        <div class="content__service group">
            <!-- <div class="service__single--graphic">
                
            </div> -->
            <?php include('../includes/breadcrumbs.php'); ?>
            
            <div class="service__single--wrap grid-full group">
                <div class="service__single--main grid-4">
                    <p>Wordpress is a popular open-source Content Management System (CMS) some websites are developed in. Wordpress, first and foremost, was a blogging platform that has evolved into a complete CMS that carries a huge following of community and user support.</p>
                    <p>WebTek can develop your website in Wordpress if that seems to be the best fit for your project. Wordpress should be considered if you would like to do frequent updates to the website yourself, want to <a href="">populate your site with content</a> or have a <a href="">blog</a>.</p>
                    <p>There can sometimes be cyber attacks on Wordpress sites as they are typically easy targets because of their popularity and free open source code. Strong security settings and anti-spam bot settings must be in place to keep your website secure and operating smoothly.</p>
                    <p>Other popular content management systems include Drupal, Joomla, Concrete, Expression Engine and there are literally hundreds more and some companies develop their own properitory content management systems too.</p>
                    <p><a href="">Ecommerce</a> websites have content management on them too, but are usually built with ecommerce software since they are first and foremost ecommerce websites. Wordpress has plug-ins to enable a website to do some simple ecommerce, but WebTek usually does not recommend this method.</p>
                    <p>For a free consultation to see if Wordpress is right for your website, contact us today.</p>
                </div>
                <aside class="service__single--sidebar grid-2">
                    <a href="" class="button--sidebar"><i>like what you see?</i><b>Request A Quote</b></a>
                    <?php include('../includes/testimonial-sidebar.php'); ?>
                </aside>
            </div>
        </div>

<?php include('../includes/footer.php'); ?>