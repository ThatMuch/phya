<?
/**
 * @author      ThatMuch
 * @version     0.1.0
 * @since       phya_1.0.0
 */
?>
<div class="section footer fp-auto-height">
    <footer class="footer__area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-6">
                        <div class="footer__widget">
                            <h2>STAY CONNECTED</h2>
                            <p>Sign up to be the first to find out when we add new workouts, challenges and more informations. </p>
                            <div class="signup__form">
                                <form action="#" onsubmit="createContact2()">
                                    <input  id="emailContact2" type="email" placeholder="Email Address">
                                    <button type="submit"><img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow-right.svg" alt=""><span>SIGN UP</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2 ms-auto">
                        <div class="footer__widget">
                            <h2>SUPPORT</h2>
                            <ul>
                                <li><a href="https://www.phya.co/legal-mention/" target="_blank">Terms and Conditions</a></li>
                                <li><a href="https://www.phya.co/privacy-policy/" target="_blank">Private Policy</a></li>
                            </ul>
                            <ul class="social">
                                 <!-- <li><a href="#" target="_blank"><img src="<?php // echo get_template_directory_uri() ?>/assets/img/tiktok.svg" alt=""></a></li> -->
                                <li><a href="https://www.instagram.com/phya_sport/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram.svg" alt=""></a></li>
                                <li><a href="https://www.linkedin.com/company/phyaco/?originalSubdomain=fr" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/assets/img/linkedin.svg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-0">
                        <div class="footer__widget">
                            <div class="app__link">
                                <a href="https://apps.apple.com/fr/app/phya/id1596641685" target="_blank">
                                    <span class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/img/apple.svg" alt=""></span>
                                    <span class="text">Download on the <strong>App Store</strong></span>
                                </a>
                                <!-- <a href="https://play.google.com/store/apps/details?id=com.bodystat.phya_v3" target="_blank">
                                    <span class="icon"><img src="<?php // echo get_template_directory_uri() ?>/assets/img/play.svg" alt=""></span>
                                    <span class="text">Get it on <strong>Google Play</strong></span>
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
          <script>
            function createContact() {
                let email = document.getElementById("emailContact").value
                let URL = "https://bodystat.api-us1.com/api/3/contacts"
                let body = {contact:{email}}
                let hearderTok = {"Api-Token": "55572801cc6a442b8248962a2a1069c6efb3f97074c6b2957fb940ff32c552bd5371fd20"}

                fetch(URL, {method:"POST", mode: "cors",body: JSON.stringify(body), headers: hearderTok}).then(res => res.json()).then(console.log)
            }
            console.log(email);
            </script>

                      <script>
            function createContact2() {
                let email = document.getElementById("emailContact2").value
                let URL = "https://bodystat.api-us1.com/api/3/contacts"
                let body = {contact:{email}}
                let hearderTok = {"Api-Token": "55572801cc6a442b8248962a2a1069c6efb3f97074c6b2957fb940ff32c552bd5371fd20"}

                fetch(URL, {method:"POST", mode: "cors",body: JSON.stringify(body), headers: hearderTok}).then(res => res.json()).then(console.log)
            }
            console.log(email);
            </script>
    <?php wp_footer() ?>
</div>
	</div>
  </body>
</html>
