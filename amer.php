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
<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/amer12.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                 
                </div>
            </div>
        </div>
    </section> 
<br><br>
<center>
<p id="g1" style="color: white; font-size:35px; background-color:#011657"><b>Ministry Of Interior - AMER</b></p>
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
                        
                            <h2 id="id1">Ministry Of Interior - AMER</h2>
                        </div>
                        <p style="font-size: 15px;color:black;"><b>AMER Is Online Service System That Will Allow Families To Apply, Track And Complete All That Immigration Procurers For Issue Visas, Stamping, Change Status For Families through Anwar Typing Centre in Ajman</b></p>
                        <h4 id="" class="mb-4">✔️ Entry permit typing and get approval from MOI issued visa printed in our typing center</h4>
                        <h4 id="" class="mb-4">✔️ New Visa stamping typing and get approval from MOI</h4>
                        <h4 id="" class="mb-4">✔️ Renew visa stamping typing and get approval from MOI </h4>
                        <h4 id="" class="mb-4">✔️ Cancellation for family Visa </h4>
                        <a href="services.php">
                       <button class="btn btn-primary">More Services</button>
                       </a> 
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="about-thumbnail mb-100">
                        <img id="id2" src="img/bg-img/amer.jpg" height="300px" width="500px" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
<br><br>
<br>


<?php
include('footer.php');
?>