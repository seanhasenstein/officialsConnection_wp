<?php

/**
 * Template Name: 2017 Plymouth Camp Receipt
 * Version: 1.0
 * Description: This is a receipt template for Officials Connection and the WBYOC customers to both download and be emailed upon submission.
 * Author: Sean Hasenstein
 * Group: Core
 * License: GPLv2
 * Required PDF Version: 4.0
 */


/* Prevent direct access to the template (always good to include this) */
if ( ! class_exists( 'GFForms' ) ) {
    return;
}


?>


<!-- Any PDF CSS styles can be placed in the style tag below -->
<style>
div.document {
	padding: 20px 50px 10px;
}
.heading {
	position: relative;
}
img.paid {
	width: 100px;
	position: absolute;
	top: 0;
	left: 0;
}
img.logo {
	width: 280px;
	display: block;
	float: right;
}
.inner .left h2 {
	text-align: left;
	margin-top: 25px;
	margin-bottom: 30px;
	font-size: 21px;
	letter-spacing: -0.1px;
}
.inner .left {
	width: 49%;
	float: left;
}
.inner .right {
	width: 40%;
	float: right
}
.inner h3 {
	font-size: 14px;
	text-transform: uppercase;
	margin-top: 28px;
	margin-bottom: 12px;
}
.inner p {
	font-size: 12px;
	margin: 0 0 3px;
}
.inner p.name {
	font-size: 16px;
	margin: 0 0 5px;
}
.inner p.email {
	font-size: 16px;
	margin: 0 0 5px;
}
.inner p.address {
	font-size: 16px;
	margin: 0 0 5px;
}
.inner p.end {
	font-size: 16px;
	margin: 0 0 38px;
}
.inner p.date {
	font-size: 15px;
	margin-top: 30px
}
.inner p.green {
	color: #6bb05e;
	font-size: 20px;
	font-weight: bold;
}
.notes {
	background: #eee;
	padding: 18px 26px 3px;
	margin: 23px 0 8px;
	width: 100%;
	clear: both;
}
.notes h5 {
	margin-top: 0;
	margin-bottom: 15px;
	font-size: 14px;
	text-transform: uppercase;
}
.notes ul {
	padding-left: 15px;
}
.notes ul li {
	padding-left: 10px;
	margin-bottom: 7px;
	font-size: 12px;
	font-weight: 300;
}
.notes ul li span {
	font-weight: bold;
}
.footer {
	text-align: center;
}
.footer h4 {
	font-size: 19px;
	margin-bottom: 13px;
}
.footer p {
	color: #B80118;
	text-decoration: none;
	font-size: 13px;
	font-style: italic;
}
</style>

<div class="document">
	<div class="heading">
		<img class="paid" src="<?php echo PDF_TEMPLATE_LOCATION; ?>/images/paid.png" />
		<img class="logo" src="<?php echo PDF_TEMPLATE_LOCATION; ?>/images/pdf_logo.png" />
	</div>

	<div class="inner">
		<div class="left">
			<h2>2017 Plymouth Camp Receipt</h2>

			<p class="name">{Your Name (First):4.3} {Your Name (Last):4.6}</p>
			<p class="email">{Your Email:5}</p>
			<p class="address">{Your Address (Street Address):7.1} {Your Address (Address Line 2):7.2}</p>
			<p class="end">{Your Address (City):7.3}, {Your Address (State / Province):7.4} {Your Address (ZIP / Postal Code):7.5}</p>

			<h3>The Session(s) you signed up for</h3>
            <p>{Which session(s) will you be attending? (Women\'s College = Friday July 14th - Saturday July 15th):2.1}</p>
            <p>{Which session(s) will you be attending? (Men\'s College = Saturday July 15th - Sunday July 16th):2.2}</p>
            <p>{Which session(s) will you be attending? (High School - Master & L5 = Friday July 14th):2.3}</p>
            <p>{Which session(s) will you be attending? (High School - Master, L5, & L4 = Saturday Morning, July 15th):2.4}</p>
            <p>{Which session(s) will you be attending? (High School - All Levels (2 and 3 person) = Saturday Afternoon, July 15th):2.5}</p>
            <p>{Which session(s) will you be attending? (High School - All Levels (2 and 3 person) = Sunday July 16th):2.6}</p>

			<h3>Card Details</h3>
			<p>{Credit Card (Card Type):14.4}</p>
			<p>{Credit Card (Card Number):14.1}</p>

			<h3>Total</h3>
			<p class="green">{Total:13}</p>

		</div>
		<div class="right">
			<p class="date">{Post Date:26}</p>

			<h3>Transaction ID</h3>
			<p>{transaction_id}</p>

			<h3>Emergency Contact Info</h3>
	        <p>{Emergency Contact Name (First):19.3} {Emergency Contact Name (Last):19.6}&nbsp;&nbsp;at&nbsp;&nbsp;{Emergency Contact Phone Number:22}</p>

	        <h3>WIAA Number &amp; Classification</h3>
	        <p>{WIAA Number:8}&nbsp;&nbsp;-&nbsp;&nbsp;{WIAA Classification:9}</p>

	        <h3>T-shirt size</h3>
	        <p>{What is your t-shirt size?:10}</p>

	        <h3>Would you like hotel info?</h3>
	        <p>{Hotel accommodations are NOT included in your camp registration. However, if you need a room, we have a block reserved at a reduced rate. If interested in reducing cost even further, we can also help you find a camper to room with.:11}</p>

	        <h3>Camp Referral Option</h3>
	        <p>{Referral discount - Get someone to attend camp and receive a $10 discount! (limit 1 referral per person).:24}</p>
	        <p>{Who is your referral?:25}</p>

	    </div>

	    <div class="notes">
		    <h5>Important Camp Notes</h5>
	        <ul>
	            <li>Payment indicates that you agree to release the WBYOC from all liablity for injuries and illness while at camp.</li>
	            <li>Full refunds are accepted until June 14, 2017.</li>
	            <li>If you have any questions, please contact <span>Tom Rusch</span> at <span>(920) 698-2400</span> or <span>rusch@lutheranhigh.com</span>.</li>
	            <li>Check your email in the weeks leading up to camp for important information.</li>
	        </ul>
	    </div>

	    <div class="footer">
	        <h4>We look forward to having you at this year's Plymouth Camp!</h4>
	    	<p>www.officialsconnection.org</p>
	   	</div>
	</div>
</div>
