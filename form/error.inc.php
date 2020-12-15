<style type="text/css">
/*================ Universal Styling ================================*/
* {
  margin: 0;
  padding: 0;
  border: 0;
  box-sizing: border-box;
}

html {
  scroll-behavior: smooth;
}

h1,
h2,
h3,
h4,
h5,
h6,
p,
ul {
  font-family: 'Montserrat', sans-serif;
}

a {
  text-decoration: none;
}

p {
    line-height: 26px;
    margin: 15px 0;
}

p {
  font-style: normal;
  font-weight: normal;
  font-size: 24px;
  line-height: 29px;
  text-align: center;
  color: #000000;
}

.container {
  max-width: 900px;
  margin: 30px auto;
  padding: 0 15px;
}

.container-page {
  max-width: 1000px;
  height: 1000px;
  margin: 30px auto;
  padding: 250px 15px;
  text-align: center;
}

.page-container {
  width: 1200px;
  margin: 0 auto;
}

.rounded-button {
  padding: 10px 30px;
  background-color: #FB8142;
  border-radius: 50px;
  font-family: montserrat;
  font-weight: 700;
  font-size: 20px;
  text-transform: uppercase;
  color: white;
  transition: background-color .3s ease;
}

.rounded-button:hover {
  background-color: #F3B844;
  transition: background-color .3s ease;
}
/*================ Universal Styling ================================*/


/*================ Navigation Styling ================================*/
header {
  background: linear-gradient(45deg, #FB8142, #F3B844, #FB8142);
  padding: 10px;
  position: fixed;
  width: 100%;
  z-index: 100;
}

header nav ul li {
  display: inline;
  padding: 0 15px;
}

header nav a {
  font-size: 1.5rem;
  text-decoration: none;
  color: white;
  font-weight: bold;
  text-transform: uppercase;
  transition: color .3s ease;
}

header nav a:hover {
  color: #333333;
  transition: color .3s ease;
}

.site-logo ,
header nav {
  display: inline-block;
  vertical-align: middle;
  padding: 0 50px;
}

.site-logo img {
  height: 35px;
  margin: 7px 0px;
}

#contact-us {
  font-family: 'Montserrat', sans-serif;
  font-weight: 700;
  font-size: 2rem;
  text-align: center;
  text-decoration: none;
  color: white;
  background-color: #333;
  padding: 25px 35px;
  position: fixed;
  top: 0;
  right: 50px;
  transition: background-color .3s ease;
  z-index: 101;
}

#contact-us:hover {
  background-color: #f3b844;
  transition: background-color .3s ease;
}
/*================ Navigation Styling ================*/

/* Footer Styling*/
.footer-wrap {
  background: url('../images/footer-bkg.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  width: 100%;
  height: 340px;
 }

.foot-block {
  display: inline-block;
  padding: 50px 50px;
  text-align: center;
  color: white;
  width: 330px;
}

.footer-container {
  width: 1000px;
  margin: 0 auto;
}

.foot-block:first-child {
  padding: 75px 50px 0px 0px;
  position: relative;
  top: -56px;
}

.foot-block:nth-child(3) {
  padding: 0px 0px 0px 50px;
}

.foot-block p {
  color: white;
  font-size: 20px;
  line-height: 22px;
}

.contact-info h2 {
  text-transform: uppercase;
  line-height: 50px;
}

.contact-info a {
  font-family: montserrat;
  color: white;
  text-decoration: underline;
  font-size: 18px;
  line-height: 24px;
  display: block;
  padding: 5px 0px;
  transition: opacity .2s ease;
}

.contact-info a:hover {
  opacity: 0.7;
  transition: opacity .2s ease;
}

.social-footer img {
  margin: 10px;
  display: inline-block;
  transition: opacity .2s ease;
}

.social-footer img:hover {
  opacity: 0.7;
  transition: opacity .2s ease;
}

.copyright {
  width: 100%;
  font-size: 16px;
  text-align: center;
  color: white;
}
</style>

<header>
  <div class="site-logo">
    <a href="index.html"><img src="images/reactiv-logo.png" alt="National Parks Logo" /></a>
  </div>

  <nav>
    <ul>
      <li><a href="agency.html">Agency</a></li>
      <li><a href="capabilities.html">Capabilities</a></li>
    </ul>
  </nav>
</header>

<section>
  <ul>
    <li><a id="contact-us" href="contact.html">LET'S CREATE</a> </li>
  </ul>
</section>

<div class="container-page">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>


<footer class="footer-wrap">
  <div class="footer-container">
    <div class="foot-block">
      <div class="contact-info">
        <h2>Where To find Us</h2>
        <a href="tel:813.564.7091">813.564.7091</a>
        <a href="mailto:info@goreactiv.io">info@goreactiv.io</a>
      </div>
    </div>
    <div class="foot-block">
      <div class="footer-logo">
        <a href="https://goreactiv.io"><img src="images/footer/footer-mark.png" alt="REACTIV R Logo" title="REACTIV R Logo" id="footer-logo"></a>
      </div>
    </div>
    <div class="foot-block">
      <div class="social-footer">
        <h2>@goReactiv</h2>
        <p>Follow us to stay up to date!</p>
        <a href="https://facebook.com/goreactiv" target="_blank"><img src="images/footer/fb-icon.png" alt="Facebook" title="Facebook"></a>
        <a href="https://instagram.com/goreactiv" target="_blank"><img src="images/footer/ig-icon.png" alt="Instagram" title="Instagram"></a>
        <a href="https://twitter.com/goreactiv" target="_blank"><img src="images/footer/tw-icon.png" alt="Twitter" title="Twitter"></a>
      </div>
    </div>
    <p class="copyright">Copyright 2020. All rights reserved. Designed & Developed by Corey Darnell.</p>
  </div>
</footer>
