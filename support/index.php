<?php
// Define variables for SEO
$seoTitle = '';
$parent = 'Support';
$parentId = 'support';
$pageId = 'support';
$pageTitle = 'Website Support Team'; // Title of page //
$pageDescription = 'put page description here'; // Title of page //
$pageCanonical = 'http://www.url.com/';
// If we don't want the search engines to see our website just yet
//$pageRobots = 'noindex,nofollow';
include('../includes/header.php') // Include header file //
?>

        <section class="hero__page group">
            <h1>Support</h1>
            <p class="page__description">If you are an existing client in need of a website update, special request or other support issue our Support Team can help.</p>
            
        </section>

        <?php include('../includes/support-nav.php'); ?>

        <div class="content__service group">
            <!-- <div class="service__single--graphic">
                
            </div> -->
            <?php include('../includes/breadcrumbs.php'); ?>

            <div class="service__single--wrap grid-full group">
                <div class="service__single--main grid-4">
                    <h2>Website Update Requests</h2>
                    <p>If you are an existing client in need of a website update, special request or other support issue our Support Team can help. You must know what White Hat SEO and 
                    Black Hat SEO is. You must understand in this industry at least, low pricing is generally not the 
                    SEO packages you want to participate in. Low cost SEO usually translates to spammy techniques. Search engine marketing done right, takes time and does involve a 
                    small investment and commitment on your end.<br />
                    <a href="request-support.php" class="button--support">Request a website Update</a></p>
                    
                    <hr />

                    <h2>Email or Website Access Issues</h2>
                    <p>If you really understand how search engine marketing works, you will understand that you cannot target more than a handful of keywords phrases at a time on a 
                    moderate budget. The reason is simply that good links take time to build and time is money. Gone are the days of building quick links for a bunch of keywords you 
                    want to rank for. Actually some companies still do this, just 
                    stay clear from those that promise too many keywords at a time.<br />
                    <a href="email-help.php" class="button--support">Email Help</a></p>
                   
                    <hr />
                    
                    <h2>Remote Support</h2>
                    <p>If you really understand SEO, you will know that no one can guarantee results, not even Google. Google and other search engines will rank you depending on 
                    where they feel you are best suited for the keyword phrases being searched. If someone guarantees something like that, run away fast. The only exception to that 
                    might be if they are talking pay-per-click and not organic SEO. In that case yes, whoever is willing to pay the most can show up on the first page of Google in 
                    the "Sponsored Ads" section, but that is just pure advertising and not SEO... which should be another reason to run because they are obviously trying to deceive 
                    you by calling it SEO. We are here to educate you and help you understand.</p>
                </div>
                <?php include('../includes/sidebar-support.php'); ?>
            </div>
        </div>

<?php include('../includes/footer.php'); ?>