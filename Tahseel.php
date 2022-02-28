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
<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/tahseel.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                 
                </div>
            </div>
        </div>
    </section> 
<br><br>
<center>
<p id="g1" style="color: white; font-size:35px; background-color:#011657"><b>TAS-HEEL</b></p>
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
                            <h2 id="id1">TAS-HEEL</h2>
                        </div>
                        
                      
                        <h5 id="" class="mb-4">✔️ EMPLOYEE OFFER LETTER</h5>
                        <h5 id="" class="mb-4">✔️ ABSCONDING </h5>
                        <h5 id="" class="mb-4">✔️ LABOUR CONTRACT </h5>
                        <h5 id="" class="mb-4">✔️ CONTRACT MODIFICATIONS </h5>
                        <h5 id="" class="mb-4">✔️ LABOUR CARD FEES </h5>
                        <h5 id="" class="mb-4">✔️ CANCELLATIONS</h5>
                        <h5 id="" class="mb-4">✔️ NEW OR RENEW LABOUR CARD </h5>
                        <h5 id="" class="mb-4">✔️ TEMPORARY AND PART TIME PERMITS</h4>
                        <h5 id="" class="mb-4">✔️ LABOUR CANCELLATIONS (INSIDE OR OUT SIDE)</h5>
                        <h5 id="" class="mb-4">✔️ SALARY DETAILS </h5>
                        <h5 id="" class="mb-4">✔️ LABOUR CONTRACT PRINTOUT </h5>
                        
                        <a href="services.php">
                       <button class="btn btn-primary">More Services</button>
                       </a> 
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="about-thumbnail mb-100">
                        <img id="id2" src="img/bg-img/tas1.png" height="300px" width="500px" alt="">
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