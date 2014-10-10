<?php
// Define variables for SEO
$parent = 'Support';
$parentId = 'support';
$pageId = 'request-support';
$pageTitle = 'Request Support'; // Title of page //
$pageDescription = 'put page description here'; // Title of page //
$pageCanonical = 'http://www.url.com/';
// If we don't want the search engines to see our website just yet
//$pageRobots = 'noindex,nofollow';
include('../includes/header.php') // Include header file //
?>

        <section class="hero__page group">
            <h1>Website Update Requests &amp; Support</h1>
            <p class="page__description">If you are an existing client in need of a website update, special request or other support issue our Support Team can help</p>
        </section>

        <?php include('../includes/support-nav.php'); ?>

        <div class="content__service group">
            <!-- <div class="service__single--graphic">
                
            </div> -->
            <?php include('../includes/breadcrumbs.php'); ?>

            <div class="service__single--wrap grid-full group">
                <div class="service__single--main grid-4">
                    <h2>Submit a Support Request</h2>
                    <p>How much does it cost? Ah, something everyone wants to know. Before pricing can be given, you really need to understand what 
                    search engine optimization (SEO) is and how it is achieved. You must know what White Hat SEO and Black Hat SEO is. You must understand 
                    in this industry at least, low pricing is generally not the SEO packages you want to participate in. Low cost SEO usually translates to 
                    spammy techniques. Search engine marketing done right, takes time and does involve a small investment and commitment on your end.</p>
                    
                    <form action="contact-proc.php" method="post" name="contact_us">
                    	<p>Your Name:<br />
                    	<input type="text" name="Name" placeholder="Name" /></p>
                        
                        <p>Company Name:<br />
                        <input type="company" name="Company"  placeholder="Company"/></p>
                   
                        <p>Website:<br />
                        <input type="website" name="Website"  placeholder="Website"/></p>
                        
                        <p>Email Address:<br />
                        <input type="email" name="Email"  placeholder="Email"/></p>
                                            
                        <p>Phone:<br />
                        <input type="phone" name="Phone"  placeholder="Phone"/></p>            
                        
                        <p>Please provide your request in as much detail as you can.<br />
                        <textarea name="Message" cols="" rows="3" placeholder="Comments/Message"></textarea></p>
                        
                        <p>Enter Code:<br />
                        <img src="images/captcha.png" width="150" height="50" alt="Captcha" />
                        <input type="text" name="captcha" placeholder="Captcha/Security" /></p>
                        <input type="submit" name="Submit" value="Submit" />
                    </form>
                    
                    
                    
                    
                    
                </div>
                <?php include('../includes/sidebar-support.php'); ?>
            </div>
        </div>

<?php include('../includes/footer.php'); ?>