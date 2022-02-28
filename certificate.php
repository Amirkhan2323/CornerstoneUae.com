<?php
include('header.php');
?>
<style>
    #g1 {
  animation-duration: 3s;
  animation-name: slidein;
}

@keyframes slidein {
  from {
    margin-left: 100%;
    width: 300%;
  }

  to {
    margin-left:0%;
    width: 100%;
  }
}

#id1 {
  animation-duration: 3s;
  animation-name: slidein;
}

@keyframes slidein {
  from {
    margin-left: 100%;
    width: 300%;
  }

  to {
    margin-left:0%;
    width: 100%;
  }
}
#id2 {
  animation-duration: 3s;
  animation-name: slidein;
}

@keyframes slidein {
  from {
    margin-bottom: 100%;
    width: 300%;
  }

  to {
    margin-bottom   :0%;
    width: 100%;
  }
}
</style>

<body style="background-color:#f7f7f2">
<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/con1.jpg); border:black,round;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                 
                </div>
            </div>
        </div>
    </section> 
<br><br>
<center>
<p id="g1" style="color: white; font-size:35px; background-color:#011657"><b>Certificate Attestation</b></p>
<br>
</center>

<section class="about-area section-padding-100-0" style="background-color: #f5f2e9;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="about-content mb-100">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <div class="line"></div>
                            <h2 id="id1">Certificate Attestation</h2>
                        </div>
                        
                      
                        <p style="font-size: 15px;color:black;"><b>CornerStone provides expedited legalization services to certify documents from the Embassy of UAE Embassy in India, UK, USA, Canada, Australia, Etc. A professional company specializing in world-wide expedited authentication documents for international use For last 10 years we have been specialized in Apostille and Embassy Legalization.</b></p>
                        <h5 id="" class="mb-4">✔️ Sending documents internationally can be a painful and time consuming process and therefore a waste of money if not done correctly.</h5>
                        <h5 id="" class="mb-4">✔️ It is important to hand your documents for Apostille or legalization over an experienced professional </h5>
                        <h5 id="" class="mb-4">✔️ Serving clients throughout the Middle East and around the world </h5>
                        <h5 id="" class="mb-4">✔️ we provide consulting and services to obtain official government authentication of personal and business documents from the Embassy of UAE, India, UK, USA, Canada, Australia, Etc. </h5>
                        
                        <a href="services.php">
                       <button class="btn btn-primary">More Services</button>
                       </a> 
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="about-thumbnail mb-100">
                        <img id="id2" src="img/bg-img/stam.jpg" height="300px" width="500px" alt="">
                    </div>
                </div>
            </div>
        </div>
       
    </section>
<br><br>

</body>
<?php
include('footer.php');
?>