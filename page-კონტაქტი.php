<?php get_header(); ?>

<div class="contactbackground">
    <main>
        <div class="container-xl pb-5">
            <h2 class="text-center pb-5 pt-5 wht"><?php  the_title() ?><span class="line"></span></h2>
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="cont_h3">დაგვიკავშირდით</h3>
                    <?php
                    echo do_shortcode('[contact-form-7 id="fe57ddb" title="Contact form 1"]');
                    ?>
                    <?php
                    echo do_shortcode('[contact-form-7 id="9fc098b" title="contact form"]');
                    ?>
                    <h3 class="cont_h3">საკონტაქტო ინფორმაცია</h3>
                     <ul class="pt-2 ps-0 contact_info">
                        <li><img class="icon-size icnbx me-3" src="<?= get_template_directory_uri() ?>/assets/images/map-contact.png" alt="">  მ.ასათიანის ქუჩა #12</li>
                        <li><a href="maolto:info@poshtravel.ge"> <img class="icon-size icnbx me-3 " src="<?= get_template_directory_uri() ?>/assets/images/email-contact.png" alt="">  info@poshtravel.ge</a></li>
                        <li><a href="tel: +995 59191 50 80"> <img class="icon-size icnbx me-3" src="<?= get_template_directory_uri() ?>/assets/images/phone-contact.png" alt="">  +995 59191 50 80</a></li>
                     </ul>
                </div>
                <!-- ... (map) ... -->
                <div class="col-lg-6 ">
                    <!-- <div class="zoomable-image pt-lg-5"> -->
                       <!-- <img id="zoomImage" src="<?= get_template_directory_uri() ?>/assets/images/map.PNG" class="img-fluid" alt="Zoomable Image" style="transform: scale(1.3);"> -->
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2977.645967271574!2d44.74968799999999!3d41.72815779999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4044731cee1226c1%3A0xfec6f29590af84a3!2s12%20Mikheil%20Asatiani%20St%2C%20T&#39;bilisi!5e0!3m2!1sen!2sge!4v1701854003459!5m2!1sen!2sge"  width="100%" height="100%"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!-- </div> -->
                 </div>
            </div>
        </div>
    </main>
</div>


<?php get_footer(); ?>