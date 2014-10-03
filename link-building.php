<?php
// Define variables for SEO
$parent = 'SEO';
$parentId = 'seo';
$pageId = 'link-building';
$pageTitle = 'Link Building'; // Title of page //
$pageDescription = 'put page description here'; // Title of page //
$pageCanonical = 'http://www.url.com/';
// If we don't want the search engines to see our website just yet
//$pageRobots = 'noindex,nofollow';
include('includes/header.php') // Include header file //
?>

        <section class="hero__page group">
            <h1>Link Building</h1>
            <p class="page__description">Search engine marketing done right, takes time and does involve a small investment and commitment on your end.</p>
            
        </section>

        <div class="service__links--marketing">
            <a href="" class="selected">SEO</a>
            <a href="">PPC</a>
            <a href="">SEM</a>
            <a href="">Social Media Marketing</a>
            <a href="">Facebook Advertising</a>
            <a href="">Internet Marketing</a>
            <a href="">Content Marketing</a>
            <a href="">Email Marketing</a>
            <a href="">Local Internet Marketing</a>
        </div>

        <div class="content__service group">
            <!-- <div class="service__single--graphic">
                
            </div> -->
            <?php include('includes/breadcrumbs.php'); ?>
            
            <div class="service__single--wrap grid-full group">
                <div class="service__single--main grid-4">
                    <p>For those of who are doing some research into how to get higher rankings for your website, it won't take you long to hear the term link building, building back links, or inbound links. These are all terms for a search engine optimization strategy that has to do with getting other places out there on the Internet to link to your website. Why is getting links that point to your website good? It's a signal to Google and other search engines that your website must be important. If two websites are equal in everything else, and one website has zero inbound links and the other website has 50 people that link to it, Google will treat the one with 50 links as a more authoritative website and therefore rank it higher.</p>
                    <blockquote>Link building is a major component in getting high search engine rankings</blockquote>
                    <p>So those doing research quickly find out that having links pointing to your website is good. The question then becomes "how do I do that"? That's where it can become complicated and different search engine marketing professionals will vary on technique and strategies.</p>

                    <h2>What makes a good link</h2>
                    <p>Not all inbound links are equal. The more authoritative the website is that is linking to you, the greater the value or "link juice" that is passed. However, one thing to remember is some sites use a "no-follow" tag which tells search engines not to pass the linking power onto the website being linked. An authoritative website is one that is already ranked high. There are many ranking metrics used to evaluate the popularity and authority of a web page. Some of the common ones are Google Page Rank and Alexa Rank. The position on the page that contains the link also matters. For instance, a link in the main body part of the page generally carries more weight than say a link in the footer of the page. The more links a page has (known as out bound links or "OBL"), the lesser the value that is passed with each link.</p>

                    <h2>Anchor Text</h2>
                    <p>The text that is contained within that link is referred to as "anchor text". It is great to use well researched keywords that you want to be found for as the anchor text. However, anchor text used in your link building strategy should be diverse in nature. For instance, you don't want to build all your links with the same anchor text keyword phrase. You want to vary the text that is used with words like "click here", "visit website" , www.mydomain.com, etc. In fact, Google is looking for approx. 50% of your anchor text used to be the official name of your business. You could also use infographics instead of text to build links.</p>

                    <h2>An Ideal Link</h2>
                    <p>So generally speaking, an ideal link is one that uses quality keywords in the anchor text, is found in the main body part of an existing high page rank page from an authoritative website with a related theme that uses a "do-follow" tag with minimal outbound links that you do not link to and resides in a different IP range in a favorable neighborhood. Easy, huh? Now go find them and obtain those links. Give up? Let us do the hard work for you.</p>
                </div>
                <?php include('includes/sidebar-marketing.php'); ?>
            </div>
        </div>

<?php include('includes/footer.php'); ?>