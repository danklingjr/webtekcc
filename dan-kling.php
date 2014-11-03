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
                <img src="img/dan-kling.jpg" alt="">
            </figure>
            <div class="employee--details">
               <h1>Daniel Kling</h1><br>
               <b>Lead Designer</b>
            </div>
            
        </section>


        <section class="content__staff2 group">
            <div class="staff__bio2 grid-4">
                <!-- <h2>Aspiring magician</h2> -->

                <p>I'm happy to say that I learn something new everyday at WebTek--ranging from Web Analytics to Joomla, servers, SEO, PPC, coding and much, much more. I have also been working with the Adobe Creative Suite applications to strengthen my web design and graphic design skills.</p>
                <p>I am a graduate of West Virginia University and a proud member of the WebTek Team.</p>

                <p>I'm happy to say that I learn something new everyday at WebTek--ranging from Web Analytics to Joomla, servers, SEO, PPC, coding and much, much more. I have also been working with the Adobe Creative Suite applications to strengthen my web design and graphic design skills.</p>
                <p>I am a graduate of West Virginia University and a proud member of the WebTek Team.</p>

                <p>I'm happy to say that I learn something new everyday at WebTek--ranging from Web Analytics to Joomla, servers, SEO, PPC, coding and much, much more. I have also been working with the Adobe Creative Suite applications to strengthen my web design and graphic design skills.</p>
                
                <a href="https://twitter.com/webtekcc" target="_blank"><img src="<?php echo $siteUrl; ?>img/twitter.jpg" alt="Twitter"></a>
                <a href="https://plus.google.com/113276677194908813105?rel=author" target="_blank"><img src="<?php echo $siteUrl; ?>img/plus.jpg" alt="Google Plus"></a>
                
                <a href="https://www.linkedin.com/company/2394578" target="_blank"><img src="<?php echo $siteUrl; ?>img/linkedin.jpg" alt="LinkedIn"></a>
            </div>
            <div class="staff__gallery grid-2">
                <div class="staff__gallery--image grid-half">
                   <img src="img/kelly/gameday.jpg" alt="">
                </div>
                <div class="staff__gallery--image grid-half">
                   <img src="img/kelly/kayaking.jpg" alt="">
                </div>
                <div class="staff__gallery--image grid-half">
                   <img src="img/kelly/brother.jpg" alt="">
                </div>
                <div class="staff__gallery--image grid-half">
                   <img src="img/kelly/wv.jpg" alt="">
                </div>
            </div>
        </section>

        <section class="blog__content">
          
        </section>

<?php include('includes/footer.php'); ?>