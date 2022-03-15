<?php
/**
* Template Name: Front Page English
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
?>
    <?php get_header(); ?>
            <div id="phone1" class="section section__area">
                <div id="pin" class="app__video">
                    <div class="videoplayer">
                        <div class="videoFlex">
                            <video id="featurevideo" autoplay muted loop preload="none">
                                <source src="<?php echo get_template_directory_uri() ?>/assets/video/mp4.mp4" type="video/mp4"/>
                                <source src="<?php echo get_template_directory_uri() ?>/assets/video/webm.webm" type="video/webm"/>
                            </video>
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/Phya-sport.gif" alt="phya video">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="app__info">
                                <div class="app__text">
                                    <div class="app__text--number" data-aos="fade-up" data-aos-anchor="#phone1" data-aos-delay="550">1</div>
                                    <div class="app__text--content" data-aos="fade-up" data-aos-anchor="#phone1" data-aos-delay="550">
                                        <h3 class="text-uppercase">Learn</h3>
                                        <h2 class="text-uppercase">You’ll <strong>learn</strong>  proper technique for your <strong>favorite exercises</strong>  and how to correct  <strong>your posture</strong> .</h2>
                                        <p>That will help you maximize your results and avoid injuries. Our algorithms evaluate your workouts and give you a score so you can track your progress.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="phone2" class="section section__area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="app__info middle ms-auto">
                                <div class="app__text">
                                    <div class="app__text--number" data-aos="fade-up" data-aos-anchor="#phone2" data-aos-delay="550">2</div>
                                    <div class="app__text--content" data-aos="fade-up" data-aos-anchor="#phone2" data-aos-delay="550">
                                        <h3 class="text-uppercase">Train</h3>
                                        <h2 class="text-uppercase">Motivating  <strong>face-to-face</strong>  work-outs <strong>with your coach!</strong> </h2>
                                        <p>Choose what kind of workout you want to do depending on your mood: HIIT cardio, yoga stretching, core strength and more… and enjoy a unique experience! Wherever you want, whenever you want!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="phone3" class="section section__area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="app__info">
                                <div class="app__text">
                                    <div class="app__text--number" data-aos="fade-up" data-aos-anchor="#phone3" data-aos-delay="550">3</div>
                                    <div class="app__text--content" data-aos="fade-up" data-aos-anchor="#phone3" data-aos-delay="550">
                                        <h3 class="text-uppercase">Play</h3>
                                        <h2 class="text-uppercase"><strong>Rack up</strong> points and <strong>win prizes.</strong> </h2>
                                        <p>Join the workout challenges organized by our coaches. Build your community by sharing your score on social media! Challenge your friends! Will they beat you? Who will take home the biggest prize? </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="section promotion__area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="promotion__images">
                            <img data-aos="zoom-in" data-aos-anchor=".promotion__area" data-aos-delay="200" src="<?php echo get_template_directory_uri() ?>/assets/img/man-1.png" alt="">
                            <img data-aos="zoom-in" data-aos-anchor=".promotion__area" data-aos-delay="300" src="<?php echo get_template_directory_uri() ?>/assets/img/man-2.png" alt="">
                            <img data-aos="zoom-in" data-aos-anchor=".promotion__area" data-aos-delay="400" src="<?php echo get_template_directory_uri() ?>/assets/img/man-3.png" alt="">
                            <img data-aos="zoom-in" data-aos-anchor=".promotion__area" data-aos-delay="500" src="<?php echo get_template_directory_uri() ?>/assets/img/woman-1.png" alt="">
                            <img data-aos="zoom-in" data-aos-anchor=".promotion__area" data-aos-delay="600" src="<?php echo get_template_directory_uri() ?>/assets/img/woman-2.png" alt="">
                            <img data-aos="zoom-in" data-aos-anchor=".promotion__area" data-aos-delay="700" src="<?php echo get_template_directory_uri() ?>/assets/img/woman-3.png" alt="">
                        </div>
                        <div class="promotion__body">
                            <div class="promotion__text">
                                <h2 class="text-uppercase" data-aos="fade-up" data-aos-anchor=".promotion__area" data-aos-delay="100">
								<strong>Every week</strong> <br><strong>new</strong> content creators <br><strong>join the platform to make you move</strong></h2>
                                <p data-aos="fade-up" data-aos-anchor=".promotion__area" data-aos-delay="150">
								Physical trainers, Olympic athletes, or even
<br>dance teachers who come to share their experience <br>with you, PHYA virtually invites them to your living room!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=" section service__area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="service__wrapper wow fadeInUp">
                            <div class="service__text">
                                <h3 class="text-uppercase" data-aos="fade-up" data-aos-anchor=".service__text" data-aos-delay="100">Our technology</h3>
                                <h2 class="text-uppercase" data-aos="fade-up" data-aos-anchor=".service__text" data-aos-delay="200">AI is the bridge between <br> you and <span>your coach</span></h2>
                                <p data-aos="fade-up" data-aos-anchor=".service__text" data-aos-delay="300">Your phone camera compares <br>your movements and rhythm <br>to your coach’s !</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>


