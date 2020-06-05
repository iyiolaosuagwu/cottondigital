<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Home</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet" />
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.css" rel="stylesheet" />
  <link href="css/modal.css" rel="stylesheet" />
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- Start your project here-->
  <?php include 'navbar.php'; ?>

  <section class="">
    <div class="design__in--mind" style="background-image: url('../img/home_header.jpg'); background-position: center;">
      <div class="col-lg-8 mx-auto text-center">
        <h2 class="text-white index__header">
          <!-- We are a creative agency that specializes in branding and digital marketing. -->
          Experts in Design, <br /> Technology and Data
        </h2>
        <a href="" class="btn our__team mt-4"> 
          Our Team
        </a>
      </div>
    </div>
  </section>


    <section class="big__impact-sec">
    <div class="big__impact back_big__impact">
      <div class="col-lg-8 mx-auto text-center">
        <p class="text-uppercase _22caps line">Strategic minds + Creative hearts + Technical muscle</p>
        <h1 class="beutiful__text lightlarge line">
        We create captivating <br /> designs to engage your <br /> audience.
        </h1>
        <a href="about.php" class="btn learn__more mt-3"> Learn more</a>
      </div>
    </div>
  </section>

  <section class="our__clients">
     <div class="project__listing text-center">
      <div class="col-lg-10 mx-auto">
        <h3 class="text-uppercase client__text">Our Clients</h3>
        <div class="row">
          <div class="col-lg-3">
            <img alt="" width="80%"  src="./img/helios.png" class="py-4 client-logo" />
          </div>
          <div class="col-lg-3">
            <img alt="" width="80%" src="./Assets/bkg.jpeg" class="py-4 client-logo"/>
          </div>
          <div class="col-lg-3">
            <img alt="" width="80%" src="./img/delano.png" class="py-4 client-logo" />
          </div>
          <div class="col-lg-3">
            <img alt="" width="80%" src="./img/77in.jpg" class="py-4 client-logo" />
          </div>
        </div>
      </div>
      <div class="learn__more__two-p">
        <a href="works.php" class="btn learn__more__two mt-3"> Learn more</a>
      </div>
        
    </div>
  </section>


  <section class="some__work">
    <h3 class="text-uppercase client__text">check out some of our work</h3>
      <div class="col-lg-10 mx-auto">
        <div class="row" id="appt">


          <div class='col-lg-3 col__pad'>
            <a class=''  onClick="allCall(1)">
              <div class='card card__height infra view overlay'>
                <div class='card__text--div'>
                  <div class='mask red_over_lay card__text'>
                    <div class='content-rel'>
                      <h5 class='white-text card__text--one'>77 Infrastructrure Partnes</h5>
                      <h2 class='white-text card__text--two'>Branding</h2>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class='col-lg-3 col__pad'>
            <a class=''  onClick="allCall(2)">
              <div class='card card__height Babajide view overlay'>
                <div class='card__text--div'>
                  <div class='mask rgba-blue-strong card__text'>
                    <div class='content-rel'>
                      <h5 class='white-text card__text--one'>Babajide Koku & Co</h5>
                      <h2 class='white-text card__text--two'>Branding and website</h2>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class='col-lg-3 col__pad'>
            <a class=''  onClick="allCall(3)">
              <div class='card card__height prime view overlay'>
                <div class='card__text--div'>
                  <div class='mask yellow_over_lay card__text'>
                    <div class='content-rel'>
                      <h5 class='white-text card__text--one'>Primerose</h5>
                      <h2 class='white-text card__text--two'>Website and Branding</h2>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>




          <div class='col-lg-3 col__pad'>
            <a class=''  onClick="allCall(4)">
              <div class='card card__height delano-img view overlay'>
                <div class='card__text--div'>
                  <div class='mask green_over_lay card__text'>
                    <div class='content-rel'>
                      <h5 class='white-text card__text--one'>Delano Archirects</h5>
                      <h2 class='white-text card__text--two'>Website</h2>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
  </section>


    <section class="talk__expert">
      <h3 class=" text-center  text-uppercase have-a-project">
        have a project? talk to an expert
      </h3>
    </section>


    <div class="container">
      <!-- ff -->

      <div class="container">
        <div class="interior">
          <!-- <a class="btnTwo" href="#open-modalTwo">👋 2</a> -->
        </div>
      </div>
      <?php include 'modal.php'; ?>
         
      </div>

      <!--  -->




      <style>

        /* The Modal (background) */
        .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          /* padding-top: 100px; Location of the box */
          left: 0;
          font-family: 'Open Sans', sans-serif;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
          background-color: #fefefe;
          /* margin: auto; */
          padding: 20px;
          /* left: 0; */
          border: 0;
          width: 80%;
          border-radius: 0;
          height: 100vh;
          font-family: 'Open Sans', sans-serif;
        }

        /* The Close Button */
        .close {
          color: #aaaaaa;
          float: right;
          font-size: 28px;
          font-weight: bold;
          font-family: 'Open Sans', sans-serif;
        }

        .close:hover,
        .close:focus {
          color: #000;
          text-decoration: none;
          cursor: pointer;
          font-family: 'Open Sans', sans-serif;
        }
        </style>

  <!-- Footer -->
  <?php include 'footer.php'; ?>
  <!-- Footer -->
  <!-- /Start your project here-->
    <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script type="text/javascript" src="js/modal.js"></script>
  <script type="text/javascript" src="js/listing.js"></script>



  <script>
    
    
</script>

  <script>
    
    async function allCall(id) {
      await localStorage.setItem('modalID', id);
      window.location = '/works.php';
    }
    
  </script>

  <!-- <script>
    MicroModal.show('modal-id'); // [1]
    MicroModal.close('modal-id'); // [2] -->
  <!-- </script> -->
</body>

</html>