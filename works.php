<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Work</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet" />
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.css" rel="stylesheet" />
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/modal.css" rel="stylesheet" />

    <link href="css/parsley.css" rel="stylesheet">
</head>

<body id="body">
  <!-- Start your project here-->
  
  <nav class="navbar navbar-expand-lg ">
			<div class="col-lg-8 mx-auto">
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
					aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse" id="navbarNav">
				<a class="navbar-brand" href="index.php">
				<img src="./img/logo/cotton-digital-logo.png" class="logo" alt="" width="25%" />
				</a>
					<ul class="navbar-nav ml-auto mt-lg-0">
                  <li class="nav-item">
                     <a class="nav-link text-dk" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link text-dk" href="about.php">About</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link text-dk" href="services.php">Services</a>
                  </li>
                  <li class="nav-item active">
                     <a class="nav-link text-dk" href="works.php">Work</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link text-dk" href="contact.php">Contact</a>
                  </li>
               </ul>
				</div>
			</div>
		</nav>

  <section class="">
    <div class="our__work">
      <div class="col-lg-10 mx-auto text-center">
        <p class="text-uppercase _20sbg line our-work">our work</p>
        <h2 class="_58light-grey">  
          Every project is customized <br /> to meet your goals.
          
        </h2>
      </div>
    </div>
  </section>




  


   <section class="">
      <div class="col-lg-9 mx-auto">
         <div class="filter">
            <div class="models">
            <div class="checkbox">
               <label><input type="checkbox" rel="apple" onchange="change();"/><span class="pl-3 pt-2">Branding</span></label>
            </div>
            <div class="checkbox">
               <label><input type="checkbox" rel="samsung" onchange="change();"/><span class="pl-3 pt-2">Applications</span></label>
            </div>
            <div class="checkbox">
               <label><input type="checkbox" rel="xiaomi" onchange="change();"/><span class="pl-3 pt-2">Design</span></label>
            </div>
            <div class="checkbox">
               <label><input type="checkbox" rel="nokia" onchange="change();"/><span class="pl-3 pt-2">Web</span></label>
            </div>
         </div>
      </div>
   </section>

   <section class="col-lg-11 mx-auto works_div">
      <div class="result row">
         <!-- <div class="apple card card__height col-lg-3">
            <h1>iPhone 7</h1>
         </div> -->
         <div class="container-img apple col-lg-3 pad-remove yellow_over_lay" onclick="openNavOne()">
            <img src="./Assets/77infra/77infr card.jpg" alt="Avatar" class="image" style="width:100%">
            <div class="middle">
               <h5 class="white-text card__text--one">77 Infrastructrure <br /> Partnes </h5>
               <h2 class="white-text card__text--two">Branding</h2>
            </div>
         </div>


         <div class="container-img xiaomi col-lg-3 pad-remove red_over_lay" onclick="openNavTwo()">
            <img src="./Assets/BKC/Business card.jpg" alt="Avatar" class="image" style="width:100%">
            <div class="middle">
               <h5 class="white-text card__text--one">Babajide Koku & Co</h5>
               <h2 class="white-text card__text--two">Branding and <br /> website</h2>
            </div>
         </div>

         <div class="container-img samsung col-lg-3 pad-remove green_over_lay" onclick="openNavThree()">
            <img src="./Assets/Helios/one.jpg" alt="Avatar" class="image" style="width:100%">
            <div class="middle">
               <h5 class="white-text card__text--one">Helios Investment <br /> Partners</h5>
               <h2 class="white-text card__text--two">IT support</h2>
            </div>
         </div>

         <div class="container-img xiaomi col-lg-3 pad-remove rgba-blue-strong" onclick="openNavFour()">
            <img src="./Assets/Primrose/website on macbook.jpg" alt="Avatar" class="image" style="width:100%">
            <div class="middle">
               <h5 class="white-text card__text--one">Primrose</h5>
               <h2 class="white-text card__text--two">Branding and <br /> website</h2>
            </div>
         </div>

         <div class="container-img xiaomi col-lg-3 pad-remove green_over_lay" onclick="openNavFive()">
            <img src="./Assets/Kogsy/kogsy IG.jpg" alt="Avatar" class="image" style="width:100%">
            <div class="middle">
               <h5 class="white-text card__text--one">Kogsy Sugarcraft</h5>
               <h2 class="white-text card__text--two">Branding, Website, Social Media</h2>
            </div>
         </div>

         <div class="container-img nokia col-lg-3 pad-remove yellow_over_lay mask" onclick="openNav()">
            <img src="./Assets/Delano/imac delano.jpg" alt="Avatar" class="image" style="width:100%">
            <div class="middle">
               <h5 class="white-text card__text--one">Delano Archirects </h5>
               <h2 class="white-text card__text--two">Website</h2>
            </div>
         </div>

         <div class="container-img xiaomi col-lg-3 pad-remove red_over_lay mask" onclick="openNavSix()">
            <img src="./Assets/STMary/website.jpg" alt="Avatar" class="image" style="width:100%">
            <div class="middle">
               <h5 class="white-text card__text--one">St Mary’s hospital</h5>
               <h2 class="white-text card__text--two">Website, <br /> IT support </h2>
            </div>
         </div>


         <div class="container-img nokia col-lg-3 pad-remove rgba-blue-strong mask" onclick="openNavSeven()">
            <img src="./Assets/Tosan/Tosan 1.jpg" alt="Avatar" class="image" style="width:100%">
            <div class="middle">
               <h5 class="white-text card__text--one">CakeByTosan</h5>
               <h2 class="white-text card__text--two">Website</h2>
            </div>
         </div>
         <!-- <div class="samsung col-lg-3">
            <h1>Samsung s7</h1>
         </div>
         <div class="xiaomi col-lg-3">
            <h1>Xiaomi Redmi note 4x</h1>
         </div>
         <div class="nokia col-lg-3">
            <h1>Nokia 6</h1>
         </div> -->
      </div>
      

   </section>



   <!-- <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="">
         <div class="text-center mt-5">
            <h5 class="white-black project-name">DELANO ARCHIRECTS</h5>
            <h2 class="white-black project-title">Website</h2>
         </div>

         <div class="col-11 mx-auto">
            <div class="summary text-center">
              <h3 class="summary-text">Summary</h3>
              <p class="">
                Delano Architects (DA) is a multi-disciplinary practice that has expertise in architectural design, interior planning, planning and urban design. DA strives to create architectural excellence while working carefully to achieve the client’s goals and needs. When they came to us, they had an existing website that did not meet their needs. After conversations, we understood that they needed a better website that would translate their values as a firm as one of the leading architectural firms in Nigeria. We decided to with a modern minimalist design in line with the firm’s design ethos. We also did a photoshoot for staff portraits and pictures to be used across the site.
              </p>
              <h2 class="web-link">https://udemy.com</h2>
            </div>
          </div>
          <img class="delano2" src='./img/delano.jpeg' />
      </div>
   </div> -->

   <!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span> -->

   <style>
      .result{
         /* display: flex ; */
      }
      .models {
         display: flex;
         justify-content: space-around;
      }
      .models label{
         font-size: 20px;
         font-weight: bold;
      }

      input[type=checkbox] {
         position: relative;
	       cursor: pointer;
         }
         input[type=checkbox]:before {
               content: "";
               display: block;
               position: absolute;
               width: 20px;
               height: 20px;
               top: 0;
               left: 0;
               border: 2px solid #555555;
               border-radius: 3px;
               background-color: white;
      }
         input[type=checkbox]:checked:after {
               content: "";
               display: block;
               width: 8px;
               height: 12px;
               border: solid black;
               border-width: 0 2px 2px 0;
               -webkit-transform: rotate(45deg);
               -ms-transform: rotate(45deg);
               transform: rotate(45deg);
               position: absolute;
               top: 2px;
               left: 6px;
      }

      label{
         display: flex;
         align-items: center;
         justify-content: center;
      }
      .apple{
         height: 270px;
         width: 100%;
         border-radius: 2px;
         
         /* background: rgba(33, 150, 243, 0.7); */
         background-size: cover;
         cursor: pointer;
      }

      .samsung {
         height: 270px;
         width: 100%;
         /* background-image: url('../img/delano.jpeg'); */
         background-size: cover;
         /* background: rgba(33, 150, 243, 0.7); */
         background-position: center;
         cursor: pointer;
      }

      .xiaomi {
         height: 270px;
         width: 100%;
         /* background-image: url('../img/delano.jpeg'); */
         /* background: rgba(33, 150, 243, 0.7); */
         background-size: cover;
         background-position: center;
         cursor: pointer;
      }

      .nokia {
         height: 270px;
         width: 100%;
         /* background-image: url('../img/delano.jpeg'); */
         /* background: rgba(33, 150, 243, 0.7); */
         background-size: cover;
         background-position: center;
         cursor: pointer;
      }
   </style>

  <?php include 'modal.php'; ?>

  <!-- Footer -->
  
  <!-- Footer -->
  <!-- /Start your project here-->
  <script type="text/javascript" src="js/modal.js"></script>
  <script type="text/javascript" src="js/listing.js"></script>


  <script>
      function change() {
         var modelCbs = document.querySelectorAll(".models input[type='checkbox']");
         var processorCbs = document.querySelectorAll(".processors input[type='checkbox']");
         var filters = {
            models: getClassOfCheckedCheckboxes(modelCbs),
            processors: getClassOfCheckedCheckboxes(processorCbs)
         };

         filterResults(filters);
      }

      function getClassOfCheckedCheckboxes(checkboxes) {
         var classes = [];

         if (checkboxes && checkboxes.length > 0) {
            for (var i = 0; i < checkboxes.length; i++) {
               var cb = checkboxes[i];

               if (cb.checked) {
               classes.push(cb.getAttribute("rel"));
               }
            }
         }

         return classes;
      }

      function filterResults(filters) {
         var rElems = document.querySelectorAll(".result div");
         var hiddenElems = [];

         if (!rElems || rElems.length <= 0) {
            return;
         }

         for (var i = 0; i < rElems.length; i++) {
            var el = rElems[i];

            if (filters.models.length > 0) {
               var isHidden = true;

               for (var j = 0; j < filters.models.length; j++) {
               var filter = filters.models[j];

               if (el.classList.contains(filter)) {
                  isHidden = false;
                  break;
               }
               }

               if (isHidden) {
               hiddenElems.push(el);
               }
            }

            if (filters.processors.length > 0) {
               var isHidden = true;

               for (var j = 0; j < filters.processors.length; j++) {
               var filter = filters.processors[j];

               if (el.classList.contains(filter)) {
                  isHidden = false;
                  break;
               }
               }

               if (isHidden) {
               hiddenElems.push(el);
               }
            }
         }

         for (var i = 0; i < rElems.length; i++) {
            rElems[i].style.display = "block";
         }

         if (hiddenElems.length <= 0) {
            return;
         }

         for (var i = 0; i < hiddenElems.length; i++) {
            hiddenElems[i].style.display = "none";
         }
      }
  </script>
  
  <script>
    const current = document.querySelector('#current');
    const imgs = document.querySelectorAll('.imgs img');

    imgs.foreach(img => img.addEventListener('click', ImgClick));

    function imgClick(e) {
      current.src = e.target.src;
    }
  </script>

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/listing.js"></script>
  <script type="text/javascript" src="js/modal.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script type="text/javascript" src="js/parsley.min.js"></script>
  
</body>

</html>








