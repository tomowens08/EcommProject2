<?php
//get from js files the json where p is like entry. put in string.
//create variables
var $title = array[0];
var desc = array[1];
var price = array[2];
var longdesc = array[3];
var pimg = array[4];
?>
<html>
<head>
	<title>Product Description Page</title>
	<script>
	$(function() {
        const $gallery = $('.gallery a').simpleLightbox();
      });
	</script>
	<style>
	:root {
  --primary-color: #333;
  --secondary-color: #444;
  --overlay-color: rgba(0, 0, 0, 0.7);
}

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: 'Catamaran', sans-serif;
  line-height: 1.6;
  color: #333;
  font-size: 1.1rem;
}

h1,
h2,
h3,
h4 {
  line-height: 1.3;
}

a {
  color: #444;
  text-decoration: none;
}

ul {
  list-style: none;
}

img {
  width: 100%;
}

.container {
  max-width: 1100px;
  margin: auto;
  overflow: hidden;
  padding: 0 2rem;
}

.navbar {
  font-size: 1.2rem;
  padding-top: 0.3rem;
  padding-bottom: 0.3rem;
}

.navbar .container {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 2rem;
}

.navbar .logo {
  font-size: 2rem;
}

.navbar ul {
  justify-self: flex-end;
  display: flex;
  align-items: center;
  justify-content: center;
}

.navbar a {
  padding: 0 1rem;
}

.navbar a:hover {
  color: #555;
}

.section-a {
  margin: 2rem 0;
}

.section-a .container {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 3rem;
  align-items: center;
  justify-content: center;
}

.section-ab .container {
  margin: 3rem;
  align-items: center;
  justify-content: center;
}

.section-a h1 {
  font-size: 4rem;
  color: var(--primary-color);
}

.section-a p {
  margin: 1rem 0;
}

.section-b {
  position: relative;
  background: url('pimg/OIP.jpg') no-repeat bottom center/cover;
  height: 600px;
  width:100%;
}

.section-b-inner {
  color: #fff;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  margin: auto;
  max-width: 860px;
  padding: 5rem 0;
}

.section-b-inner h3 {
  font-size: 2rem;
}

.section-b-inner h2 {
  font-size: 5rem;
  margin-top: 1rem;
}

.section-b-inner p {
  margin-top: 1rem;
  font-size: 1.5rem;
}

.section-c .gallery {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
}
.section-c .gallery a:first-child {
  /* grid-row-start: 1;
  grid-row-end: 3; */
  grid-row: 1/3;
  grid-column: 1/3;
}

.section-c .gallery a:nth-child(2) {
  grid-column-start: 3;
  grid-column-end: 5;
}

.section-c .gallery img,
.section-c .gallery a {
  width: 100%;
  height: 100%;
}

.section-footer {
  background: var(--primary-color);
  color: #fff;
  padding: 4rem 0;
}

.section-footer .container {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 1rem;
}

.section-footer h2 {
  font-size: 2rem;
  margin-bottom: 1rem;
}

.section-footer h3 {
  margin-bottom: 0.7rem;
}

.section-footer a {
  line-height: 1.9;
  color: #ccc;
}

.section-footer a > i {
  color: #555;
  margin-right: 0.5rem;
}

.email-form {
  width: 100%;
  display: inline-block;
  background-color: #555;
  position: relative;
  border-radius: 20px;
  line-height: 0;
  margin-top: 1rem;
}

/* // .form-control-wrap {
// 	position: relative;
// 	display: inline-block;
// 	width: 100%;
// } */

.email-form .form-control {
  display: inline-block;
  border: 0;
  outline: 0;
  font-size: 1rem;
  color: #ddd;
  background-color: transparent;
  font-family: inherit;
  margin: 0;
  padding: 0 3rem 0 1.5rem;
  width: 100%;
  height: 45px;
  border-radius: 20px;
}

.email-form .submit {
  display: inline-block;
  position: absolute;
  top: 0;
  right: 0;
  width: 45px;
  height: 45px;
  background-color: #eee;
  font-size: 1rem;
  text-align: center;
  margin: 0;
  padding: 0;
  outline: 0;
  border: 0;
  color: #333;
  cursor: pointer;
  border-radius: 0 20px 20px 0;
}

.btn {
  display: inline-block;
  background: #0f0;
  color: #fff;
  padding: 0.8rem 1.5rem;
  border: none;
  cursor: pointer;
  font-size: 1.1rem;
  border-radius: 30px;
}

.btn:hover {
  background: var(--secondary-color);
}
.btn-offer {
  display: inline-block;
  background: #000;
  color: #fff;
  padding: 0.8rem 1.5rem;
  border: none;
  cursor: pointer;
  font-size: 1.1rem;
  border-radius: 30px;
}

.btn-offer:hover {
   background: #ccc;
}

.btn2 {
  display: inline-block;
  background: #fff;
  color: #000;
  padding: 0.8rem 1.5rem;
  border: solid;
  border-size: 2px;
  cursor: pointer;
  font-size: 1.1rem;
  border-radius: 30px;
  margin-bottom:1.5rem;
}


.overlay {
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  background-color: var(--overlay-color);
}

@media (max-width: 700px) {
  .section-a .container {
    grid-template-columns: 1fr;
    text-align: center;
  }

  .section-a .container div:first-child {
    order: 2;
  }

  .section-a .container div:nth-child(2) {
    order: -1;
  }

  .section-a img {
    width: 80%;
    margin: auto;
  }

  .section-c .gallery {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
  }
  .section-c .gallery a:first-child {
    grid-row: 1/1;
    grid-column: 1/1;
  }

  .section-c .gallery a:nth-child(2) {
    grid-column: 2/4;
    grid-row: 2/2;
  }

  .section-c .gallery a:last-child {
    display: none;
  }

  .section-footer {
    padding: 2rem 0;
  }
  .section-footer .container {
    grid-template-columns: 1fr;
    text-align: center;
  }

  .section-footer div:nth-child(2),
  .section-footer div:nth-child(3) {
    display: none;
  }
}

	</style>
</head>
<body>
 <nav class="navbar">
      <div class="container">
        <img src="gslogo.png" style="width:140px;height:auto;">
        <ul class="nav">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">Delivery Policy</a></li>
					<li><a href="#contact">Contact</a></li> 
        </ul>
      </div>
    </nav>

    <!-- Showcase -->
    <section class="section-a">
      <div class="container">
        <div>
          <h1><? echo $_POST("p");?>Supplements and Nutrition</h1>
          <p>
            The Best Seller, Micro SD Card with 4 GB of Storage and Adapter for a multitude of devices.
          </p>
		  <div class="btn2">
		 <select style="width:3rem;font-size:2rem;border:0;" placeholder="1">
      <option value="1">1</option>
      <option value="2">2</option>
	  <option value="3">3</option>
      <option value="4">4</option>
	  <option value="5">5</option>
	  <option value="6">6</option>
	  <option value="7">7</option>
	  <option value="8">8</option>
	  <option value="9">9</option>
	  <option value="10">10</option>
    </select> 
		  </div></br>
          <a href="cart.html" class="btn">Buy Now</a>
		  <a href="contact.html" class="btn-offer">Make an Offer</a>
        </div>
        <img src="pimg/w.jpg" alt="" />
      </div>
    </section>
	
	

	
	<!-- tech spec -->
	<section id="about" class="section-b">
      <div class="overlay">
        <div class="section-b-inner py-5">
          <h3 class="text-2">Technical Specification</h3>
          <h2 class="text-5 mt-1">Good for you.</h2>
          <p class="mt-1">
            Our Payment Gateway Secures the Transaction and Protects the consumer with Purchase guaranetee and dispute resolution.
          </p>
        </div>
      </div>
    </section>
	
	<!-- description -->
 <section class="section-ab">
      <div class="container">
        <div>
          <h1><? echo $title; ?>Supplements and Nutrition</h1>
          <p>
            The Best Seller, Micro SD Card with 4 GB of Storage and Adapter for a multitude of devices.<br>
			The Best Seller, Micro SD Card with 4 GB of Storage and Adapter for a multitude of devices.<br>
			The Best Seller, Micro SD Card with 4 GB of Storage and Adapter for a multitude of devices.<br>
			The Best Seller, Micro SD Card with 4 GB of Storage and Adapter for a multitude of devices.
          </p>
		  
        </div>
        
      </div>
    </section>
	
    <!-- Large Text -->
    <section id="about" class="section-b">
      <div class="overlay">
        <div class="section-b-inner py-5">
          <h3 class="text-2">Safe & Secure</h3>
          <h2 class="text-5 mt-1">Pay through Stripe or WorldPay</h2>
          <p class="mt-1">
            Our Payment Gateway Secures the Transaction and Protects the consumer with Puschase guaranetee and dispute resolution.
          </p>
        </div>
      </div>
    </section>


    <!-- Gallery 
    <section class="section-c">
      <div class="gallery">
        <a href="https://i.ibb.co/CHLBZnp/gal2323.jpg" class="big"
          ><img src="pimg/OIP.jpg" alt=""
        /></a>
        <a href="https://i.ibb.co/4pBbhfY/gal39834.jpg" class="big"
          ><img src="pimg/OIP.jpg" alt=""
        /></a>
        <a href="https://i.ibb.co/xSnHP7g/gal43884.jpg" class="big"
          ><img src="pimg/OIP.jpg" alt=""
        /></a>
        <a href="https://i.ibb.co/QN6Bnrb/gal4958.jpg" class="big"
          ><img src="pimg/OIP.jpg" alt=""
        /></a>
        <a href="https://i.ibb.co/dGZvj75/gal4545.jpg" class="big">
          <img src="pimg/OIP.jpg" alt=""
        /></a>
        <a href="https://i.ibb.co/S6FVFNt/gal74744.jpg" class="big"
          ><img src="pimg/OIP.jpg" alt=""
        /></a>
      </div>
    </section>-->
	
	

	
    <!-- Footer -->
    <footer class="section-footer py-4 bg-primary">
      <div class="container">
        <div>
          <h2 class="text-2 mb-1">The Natural Shopping Experience</h2>
          <a href="http://twitter.com">
            <i class="fab fa-twitter fa-2x"></i>
          </a>
          <a href="http://facebook.com">
            <i class="fab fa-facebook fa-2x"></i>
          </a>
          <a href="http://youtube.com">
            <i class="fab fa-youtube fa-2x"></i>
          </a>
        </div>
        <div>
          <h3>Company Info</h3>
          <ul>
            <li><a href="#">All Products</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
          </ul>
        </div>
        <div>
          <h3>Blog Posts</h3>
          <ul>
            <li><a href="#">Pharmacy</a></li>
            <li><a href="#">Product Bundle Customizer</a></li>
            <li><a href="#">Complaints</a></li>
            <li><a href="#">Pay by Bitcoin</a></li>
          </ul>
        </div>
        <div>
          <h3>Subscribe</h3>
          <p>
             For latest and best offers.
          </p>
          <form
            class="mt-1"
            name="email-form"
            method="POST"
            data-netlify="true"
          >
            <div class="email-form">
              <span class="form-control-wrap"
                ><input
                  type="email"
                  name="email"
                  id="email"
                  size="40"
                  class="form-control"
                  placeholder="E-mail"/></span
              ><button type="submit" value="Submit" class="form-control submit">
                <i class="fas fa-chevron-right"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </footer>


</body>
</html>
<?
//
?>