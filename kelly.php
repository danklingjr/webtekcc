<?php
// Define variables for SEO
$parent = '';
$parentId = '';
$pageId = 'about-us';
$pageTitle = 'About Us'; // Title of page //
$pageDescription = 'put page description here'; // Title of page //
$pageCanonical = 'http://www.url.com/';
// If we don't want the search engines to see our website just yet
//$pageRobots = 'noindex,nofollow';
include('includes/header.php') // Include header file //
?>

        <section class="hero__page--staff group">
            <figure class="about__team">
                <img src="img/kelly-big.jpg" alt="">
            </figure>
            <div class="employee--details">
               <h1>Kelly Schwarz</h1><br>
               <b>Internet Marketing Specialist</b>
            </div>
            
        </section>


        <section class="content__staff group">
            <div class="staff__bio grid-half no-margin">
                <h2>Aspiring magician</h2>
                <p>I am a graduate of West Virginia University and a proud member of the WebpageFX Team.</p>

                <p>I'm happy to say that I learn something new everyday at WPFX--ranging from Web Analytics to Joomla, servers, SEO, PPC, coding and much, much more. I have also been working with the Adobe Creative Suite applications to strengthen my web design and graphic design skills.</p>
            </div>
            <div class="staff__gallery grid-half no-margin">
                <div class="staff__gallery--image grid-2 no-margin">
                   <img src="img/kelly/gameday.jpg" alt="">
                </div>
                <div class="staff__gallery--image grid-2 no-margin">
                   <img src="img/kelly/kayaking.jpg" alt="">
                </div>
                <div class="staff__gallery--image grid-2 no-margin">
                   <img src="img/kelly/brother.jpg" alt="">
                </div>
                <div class="staff__gallery--image grid-2 no-margin">
                   <img src="img/kelly/brother.jpg" alt="">
                </div>
                <div class="staff__gallery--image grid-2 no-margin">
                   <img src="img/kelly/gameday.jpg" alt="">
                </div>
                <div class="staff__gallery--image grid-2 no-margin">
                   
                   <img src="img/kelly/kayaking.jpg" alt="">
                </div>

            </div>
        </section>

<?php include('includes/footer.php'); ?>