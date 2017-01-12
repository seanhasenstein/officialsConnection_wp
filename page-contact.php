<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header('bg'); ?>

    <section class="contact-page">
        <div class="header"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h2>Contact Us</h2>
                    <p>Send us a message and we will get back to you as soon as possible.</p>
                    <h2>Send us a message</h2>
                    <?php gravity_form(1, false, false, false, '', true, 12); ?>
                </div>
                <div class="col-md-5 col-md-offset-1 col-sm-6 col-xs-12 row-2">
                    <h2>Contact us directly</h2>
                    <img src="<?php bloginfo('template_directory'); ?>/images/tom.jpg" class="tom">
                    <div class="details">
                        <h3>Tom Rusch</h3>
                        <h4>(920) 698-2400</h4>
                        <h4><a href="#">rusch@lutheranhigh.com</a></h4>
                    </div>
                    <img src="<?php bloginfo('template_directory'); ?>/images/don.jpg" class="don">
                    <div class="details details-2">
                        <h3>Don Baumgart</h3>
                        <h4>(920) 841-8813</h4>
                        <h4><a href="#">dsbaumgart3@gmail.com</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer (); ?>