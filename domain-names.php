<?php
// Define variables for SEO
$parent = 'Additional Services';
$parentId = 'additional-services';
$pageId = 'domain-names';
$pageTitle = 'Register Domain Names | Buy Sell Domain Names | WebTek, Lancaster PA';
$breadcrumbTitle = 'Domain Names';
 // Title of page //
$pageDescription = ''; // Title of page //
$pageCanonical = 'http://www.webtekcc.com/domain-names.php';
// If we don't want the search engines to see our website just yet
//$pageRobots = 'noindex,nofollow';
include('includes/header.php') // Include header file //
?>


        <section class="hero__page group">
            <h1>Domain Names Registrations</h1>
            <p class="page__description">Use the tool below to check if the domain name you want is available to purchase.</p>
            
        </section>

        

        <div class="content__service group">
            <!-- <div class="service__single--graphic">
                
            </div> -->
            <?php include('includes/breadcrumbs.php'); ?>

            <div class="service__single--wrap grid-full group">
                <div class="service__single--main grid-4">
                  <h2>Get your domain name here!</h2>
                   <p>Your domain name is your online identity.  A domain name is usually something like "yourcompany.com". Although there are many extensions to pick from, the most common extension is .com.  However if the domain name you desire is already taken, you are most likely out of luck.  Just because a website doesn't load when you type that domain name in a browser, it doesn't mean someone already doesn't own it.</p>
        <p><strong>Use the tool below to check if the domain name you want is available to purchase</strong>.  If someone has the name, it will show up as "Taken".  If it shows as "Available", you may <a href="contact-us.php">contact us</a> to register it for you.</p>

<!-- Code Begins -->

<div class="vpb_main_wrapper">
<div class="results">
    <div>
        <input type="text" autocomplete="off" class="vpb_textAreaBoxInputs" id="suggested_names" name="suggested_names" placeholder="Enter a desired domain name here"> 
    </div>

<div>
    <a href="javascript:void(0);" class="vpb_general_button always-on" onClick="vpb_check_this_domain();">Check</a>
</div>
<br clear="all">

<div id="vpb_search_status"></div>

        <br clear="all">
 </div> 
        <br clear="all">
 </div>

<!-- Code Ends -->


<p>
  <h2>Domain name rates are:</h2>
  <ul>
    <li>$29.95/yr for a 1 year term.</li>
    <li>$24.95/yr to reserve it for 3 years.</li>
    <li>$19.95/yr to reserve it for 5 years.</li>
</ul>
</p>

                </div>
                <?php include('includes/sidebar-additional.php'); ?>
            </div>
        </div>


       

<?php include('includes/footer.php'); ?>