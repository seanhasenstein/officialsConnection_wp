<?php
/*
Template Name: Plymouth Registration Page
*/
?>

<?php get_header('bg'); ?>

    <section class="registration-form">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>2017 Plymouth Camp Online Registration</h1>
     				<div class="notes">
	     				<p><i class="fa fa-check" aria-hidden="true"></i>You must be able to attend the ENTIRE session(s) that you register for.</p>
	     				<p><i class="fa fa-check" aria-hidden="true"></i>You can receive a full refund up until June 14th, 2017.</p>
	     			</div>
                    <?php gravity_form(3, false, false, false, '', true, 12); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer (); ?>