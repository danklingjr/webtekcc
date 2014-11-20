<?php
// Define variables for SEO
$parent = '';
$parentId = '';
$pageId = 'web-design';
$pageTitle = 'Web Design'; // Title of page //
$pageDescription = 'put page description here'; // Title of page //
$pageCanonical = 'http://www.url.com/';
// If we don't want the search engines to see our website just yet
//$pageRobots = 'noindex,nofollow';
include('includes/header.php') // Include header file //
?>

        <section class="hero__page--overview group">
            <figure class="overview__graphic">
                <img src="img/web-design-graphic.png" alt="">
            </figure>
            <h1>Web Design</h1>
            <div class="content__overview--points group">
                <div class="point grid-25">
                    <h3>Custom.</h3>
                    <p>Design shouldn’t just look good, it should function. Our designs are custom so that they fit seemlessly with your brand and business goals yet stand out from the crowd.</p>
                </div>
                <div class="point grid-25">
                    <h3>Responsive.</h3>
                    <p>Our websites are designed to work on any device.  Whether its a smartphone or a desktop your content will adjust to enhance readability and accessibility.</p>
                </div>
                <div class="point grid-25">
                    <h3>Usable.</h3>
                    <p>A user interface is like a joke, if you have to explain it, it isn’t that good. Users shouldn’t be confused or frustrated trying to find products or services on your website.</p>
                </div>
                <div class="point grid-25">
                    <h3>Accessible.</h3>
                    <p>No one should be left behind. Web accessibility means people with disabilities can use your website. We develop websites that work for everyone.</p>
                </div>
            </div>            
        </section>


        <section class="content__overview--design group">
            <div class="overview__design--description grid-half no-margin">
                <h2>Great design<br>starts with a plan...</h2>
                <p>Design shouldn’t just look good, it should function. Our designs are custom so that they fit seemlessly with your brand and business goals yet stand out from the crowd.</p>
            </div>
            <div class="overview__design--graphic grid-half no-margin">
                <img src="img/wireframe.png" alt="">
            </div>
        </section>

        <section class="content__overview--process group">
            <h2>...and every plan is part of a process</h2>
            <div class="group">
                <div class="step-1 grid-2">
                    <h3>Research</h3>
                    <p>Design shouldn’t just look good, it should function. Our designs are custom so that they fit seemlessly with your brand and business goals yet stand out from the crowd.</p>
                </div>
                <div class="step-2 grid-2">
                    <h3>Concept</h3>
                    <p>Design shouldn’t just look good, it should function. Our designs are custom so that they fit seemlessly with your brand and business goals yet stand out from the crowd.</p>
                </div>
                <div class="step-3 grid-2">
                    <h3>Design</h3>
                    <p>Design shouldn’t just look good, it should function. Our designs are custom so that they fit seemlessly with your brand and business goals yet stand out from the crowd.</p>
                </div>
            </div>
            <div class="group">
                <div class="step-4 grid-2">
                    <h3>Development</h3>
                    <p>Design shouldn’t just look good, it should function. Our designs are custom so that they fit seemlessly with your brand and business goals yet stand out from the crowd.</p>
                </div>
                <div class="step-5 grid-2">
                    <h3>Quality Control</h3>
                    <p>Design shouldn’t just look good, it should function. Our designs are custom so that they fit seemlessly with your brand and business goals yet stand out from the crowd.</p>
                </div>
                <div class="step-6 grid-2">
                    <h3>Go Live</h3>
                    <p>Design shouldn’t just look good, it should function. Our designs are custom so that they fit seemlessly with your brand and business goals yet stand out from the crowd.</p>
                </div>
            </div>
        </section>

        <section class="content__overview--responsive group">
            <div class="overview__responsive--description group">
                <h2>Design done right is responsive.</h2>
                <p>Responsive web design is the practice of designing and developing one website that adjusts to whatever device you’re using.  All content will adjust to fit the current device size but will maintain optimal readability and usability.</p>
                <a href="" class="button">What is responsive design?</a>
            </div>
            <div class="overview__responsive--graphic group">
                <div class="grid-half no-margin">
                    <img src="img/responsive-graphic2.png" alt="">
                </div>
                <div class="grid-half no-margin">
                    <img src="img/responsive-graphic1.png" alt="">
                </div>
            </div>
        </section>

        <section class="content__overview--development group">
            <h2>&lt;<span>h2</span>&gt;Development&lt;/<span>h2</span>&gt;</h2>
            <p>&lt;<span>p</span>&gt;Custom web development is usually needed when you want your website to be more interactive or keep track of things. Web Development usually requires databases. Databases are used to help record and organize products, items or records of information. Some examples of custom development using databases are to show inventory, upcoming events or organize products. WebTek uses the main stream platform of PHP for back-end coding and mySQL for database solutions. This is what the majority of custom web development is built in across the web.&lt;/<span>p</span>&gt;</p>
            <div class="overview__services group">
                <div class="service__box--ecommerce bounce grid-2">
                    <a href="">
                        <h3>Ecommerce Development</h3>
                        <hr>
                        <p>Learn More</p>
                    </a>
                </div>
                <div class="service__box--cms grid-2">
                    <a href="">
                        <h3>Content Management Systems (CMS)</h3>
                        <hr>
                        <p>Learn More</p>
                    </a>
                </div>
                <div class="service__box--wordpress grid-2">
                    <a href="">
                        <h3>Wordpress Development</h3>
                        <hr>
                        <p>Learn More</p>
                    </a>
                </div>
            </div>
        </section>

        <section class="content__overview--additional group">
            <div class="additional-service grid-half">
                <h4>Web Hosting</h4>
                <p>WebTek offers commercial grade hosting on dedicated servers that are safely located in a state-of-the-art server facility.</p>
                <a href="" class="button">Learn More</a>
            </div>
            <div class="additional-service grid-half">
                <h4>Domain Names</h4>
                <p>WebTek offers commercial grade hosting on dedicated servers that are safely located in a state-of-the-art server facility.</p>
                <a href="" class="button">Learn More</a>
            </div>
        </section>

        <div class="main__call">
            <b>Sound Good?</b>
            <a href="" class="button">Let's get started</a> 
        </div>


<?php include('includes/footer.php'); ?>