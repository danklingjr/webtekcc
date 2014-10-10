<?php
// Define variables for SEO
$parent = 'Support';
$parentId = 'support';
$pageId = 'setup-email-computer';
$pageTitle = 'Email Help'; // Title of page //
$pageDescription = 'put page description here'; // Title of page //
$pageCanonical = 'http://www.url.com/';
// If we don't want the search engines to see our website just yet
//$pageRobots = 'noindex,nofollow';
include('../includes/header.php') // Include header file //
?>

        <section class="hero__page group">
            <h1>Email Help</h1>
            <p class="page__description">Having trouble setting up your email on your computers & devices? </p>
        </section>

        <?php include('../includes/support-nav.php'); ?>

        <div class="content__service group">
            <!-- <div class="service__single--graphic">
                
            </div> -->
            <?php include('../includes/breadcrumbs.php'); ?>

            <div class="service__single--wrap grid-full group">
                <div class="service__single--main grid-4">
                
                    <h2>Setting Up Email On Your Computers & Devices</h2>
                    <p><img src="../img/email-computer.jpg" /></p>
                    <p>If you want to use email, you must either use a web-based email program, or your local computer, smartphone and/or tablet to send 
                    and receive email. The following are instructions for setting up your local computers and/or devices to use email service from WebTek. 
                    Please note, email accounts must first be created on the web server. After they are created, you can configure your local computer using the instructions below.</p>

					<h2>Required Information</h2>
                    <p><strong>Display Name:</strong> This is what will display in the "From" field of the email you send<<br />
                    <strong>Username:</strong> user@yourdomain.com (fill in your full email address here)<br />
                    <strong>Password:</strong> use whatever password you were assigned<br />
                    <strong>Incoming Mail Server (POP3):</strong> mail.yourdomain.com (replace yourdomain.com with your domain name)<br />
                    <strong>Outgoing Mail Server (SMTP):</strong> mail.yourdomain.com (replace yourdomain.com with your domain name)<br />
                    <p><strong>Note:</strong>The outgoing mail server will require password authentication to send mail. The incoming does not. You do not need SSL or anything else it might ask you.</p>
                    
                </div>
                <?php include('../includes/sidebar-support.php'); ?>
            </div>
        </div>

<?php include('../includes/footer.php'); ?>