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
                <img src="img/levi-mccurdy.jpg" alt="">
            </figure>
            <div class="employee--details">
               <h1>Levi McCurdy</h1><br>
               <b>Happiness Manager</b>
            </div>
            
        </section>


        <section class="content__staff2 group">
            <div class="staff__bio2 grid-4">
                <!-- <h2>Aspiring magician</h2> -->

                <p>My main passion in life is video. Whether it’s filming, editing, or directing it’s what I love to do! I have four different YouTube channels all with unique topics of interest.</p>
                <p>After high school I enrolled in the web design and interactive media program at the Art Institute of York Pennsylvania. Just months before I graduated in December of 2013, I was employed by WebTek, a company based in Ephrata PA.</p>

                <p>Along the lines of YouTube, in my spare time I’m always entertaining. I myself have been performing magic and illusions on and off stages for over nine years. I am a huge people person. This helps in not only performing magic but also talking to potential clients throughout the entire scope of any project.Now a days social media is accessible at any given second. I believe it is extremely important to not only give your business or company a proper online presents via a website but social media as well. I’ve professionally developed graphics and content for multiple businesses and entrepreneurs.</p>
                
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