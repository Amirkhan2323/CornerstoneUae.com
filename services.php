
<?php
include('header.php');
?>

<style>
    /* FontAwesome for working BootSnippet :> */

    @import url('https://fonts.googleapis.com/css?family=Philosopher:700&display=swap');
.pt-100{padding-top: 100px;}
.pb-70{padding-top: 70px;}


/*------ service ------*/

a,
a:hover {
	text-decoration: none;
	outline: 0;
}

.service {
	position: relative;
	background-color: #fff;
}

.section_headding h1 {
	font-size: 40px;
	margin-bottom: 0px;
	text-transform: capitalize;
}

.card-block {
	position: relative;
	box-shadow: 0px 20px 59px -15px rgba(0, 0, 0, 0.25);
	border: none;
	z-index: 5;
	padding: 30px;
	margin-bottom: 30px;
	border-radius: 20px;
	background: rgb(204,163,67);
background: linear-gradient(90deg, rgba(204,163,67,1) 1%, rgba(251,179,8,1) 31%, rgba(255,192,0,1) 56%, rgba(232,208,20,1) 100%);
}

.card-block:before {
	content: '';
	position: absolute;
	width: 100%;
	height: 100%;
	opacity: 0;
	z-index: -1;
	top: 0;
	left: 0;
	border-radius: 20px;
}

.card-block:hover:before {
	opacity: 1;
	transition-duration: 0.5s;
	transition-timing-function: ease;
	background-color: #ffffff;
}

.card-block .icon {
	width: 75px;
	height: 75px;
	position: relative;
	margin: 0 auto;
	display: flex;
	justify-content: center;
	align-items: center;
}

.card-block .icon img {
	width: 100%;
}

.card-block .card-heading,
.card-block .card-body,
.card-block p {
	color: #fff;
}

.card-block:hover .card-heading,
.card-block:hover .card-body,
.card-block:hover p {
	color: #000;
}

.card-block .card-heading {
	padding: 20px 0px 10px;
  font-size:24px;
}

</style>
<!------ Include the above in your HEAD tag ---------->

<<!-- Start Service Area -->
<section class="pt-100 pb-70 service" id="service">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-sm-6 text-center">
        <a href="business.php">
          <div class="card card-block">
            <div class="icon">
              <img src="img/bg-img/bus.png">      
            </div>
            <div class="card-body p-0">
              <h3 class="card-heading">Busniess Setup</h3>
              <p class="card-text"></p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6 text-center">
        <a href="businesstrade.php">
          <div class="card card-block">
            <div class="icon">
              <img src="img/bg-img/busi.png">  
            </div>
            <div class="card-body p-0">
              <h3 class="card-heading">Business Information</h3>
              <p class="card-text"></p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6 text-center">
        <a href="health.php">
          <div class="card card-block">
            <div style="height:73px; width:130px;" class="icon">
              <img  src="img/bg-img/hi.png">  
            </div>
            <div class="card-body p-0">
              <h3 class="card-heading">Health Services</h3>
              <p class="card-text"></p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6 text-center">
        <a href="interior.php">
          <div class="card card-block">
            <div  class="icon">
              <img src="img/bg-img/ai1.png">      
            </div>
            <div class="card-body p-0">
              <h3 class="card-heading">Immgerition Services </h3>
              <p class="card-text"></p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6 text-center">
        <a href="amer.php">
          <div class="card card-block">
            <div style="height:73px; width:130px;" class="icon">
              <img src="img/bg-img/a1.png">  
            </div>
            <div class="card-body p-0">
              <h3 class="card-heading">Amar Services</h3>
              <p class="card-text"></p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6 text-center">
        <a href="Tahseel.php">
          <div class="card card-block">
            <div style="height:73px; width:100px;" class="icon">
              <img src="img/bg-img/tas1.png">  
            </div>
            <div class="card-body p-0">
              <h3 class="card-heading">Tas-Heel Services</h3>
              <p class="card-text"></p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6 text-center">
        <a href="echannel.php">
          <div class="card card-block">
            <div  class="icon">
              <img src="img/bg-img/aaa.png">      
            </div>
            <div class="card-body p-0">
              <h3 class="card-heading">E-Channels Services </h3>
              <p class="card-text"></p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6 text-center">
        <a href="enrd.php">
          <div class="card card-block">
            <div class="icon">
              <img src="img/bg-img/aaa.png">  
            </div>
            <div class="card-body p-0">
              <h3 class="card-heading">EDNRD Services</h3>
              <p class="card-text"></p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6 text-center">
        <a href="road.php">
          <div class="card card-block">
            <div style="height:74px; width:120px;" class="icon">
              <img src="img/bg-img/r1.png">  
            </div>
            <div class="card-body p-0">
              <h3 class="card-heading">Road & Traffic Services</h3>
              <p class="card-text"></p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6 text-center">
        <a href="identity.php">
          <div class="card card-block">
            <div style="height:74px; width:140px;" class="icon">
              <img src="img/bg-img/i12.png">      
            </div>
            <div class="card-body p-0">
              <h3 class="card-heading"> EID Services</h3>
              <p class="card-text"></p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6 text-center">
        <a href="passportc.php">
          <div class="card card-block">
            <div style="height:74px; width:120px;" class="icon">
              <img src="img/bg-img/emi.png">  
            </div>
            <div class="card-body p-0">
              <h3 style="font-size: 19px;;" class="card-heading">Passport & Consular Services</h3>
              <p class="card-text"></p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-sm-6 text-center">
        <a href="certificate.php">
          <div class="card card-block">
            <div style="height:74px; width:120px;" class="icon">
              <img src="img/bg-img/att1.png">  
            </div>
            <div class="card-body p-0">
              <h3 class="card-heading">Certificate Attestation</h3>
              <p class="card-text"></p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>

</section>

<!-- End Service Area -->

<?php
include('footer.php');
?>