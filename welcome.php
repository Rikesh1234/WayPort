<?php
session_start();

if(isset($_SESSION['uname']) == ""){
  header("location:login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waste Managment System</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

</head>
<body>
<section id="hero" class="d-flex align-items-center">
<div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200" >
          <h1>Better Solutions For The Waste Around You!</h1>
          <h2>Keep our Environment Healthy</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Request Project</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/recycling.jpeg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              
  The ‘WASTE MANAGEMENT SYSTEM’
 is a web application aimed to provide a digital way 
 of complaining the concerns of general citizens to their relative municipalities. 
 

            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Complaining about waste or garbage problems near their locality. </li>
              <li><i class="ri-check-double-line"></i> See thier complain Report and check if the work is done! or not. </li>
              <li><i class="ri-check-double-line"></i> people can take different ideas regarding recycling of waste through this website. </li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Complaining about the waste problem encountered everyday to municipality is hefty process and waste management
               aims to make this process easier. With a simple handheld device with access to internet, user can use this platform complain 
               their concerns to municipality . The automated system will redirect the complains .The municipality admins at the receiving side can acknowledge
                the reports which lets the users whether their complain is adddressed or not. 
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section>
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Guidelines implementation  <strong>must for proper management of medical waste</strong></h3>
              <p>
                A hospital is the last resort of hope for sick people who expect to get better and heal.
                However, shortcoming on the part of the hospital staff and management could instead have an adverse effect on public health.
                According to the annual health report published by the Department of Health Services in 2000/2001, there are 74 hospitals,
                172 Primary Health Care Units, 710 Health Posts and 3132 Sub-health Post run by the government across Nepal.
                The number of healthcare institutions has certainly surged in the recent years.
                All healthcare facilities are required to follow the ‘National Health Care Waste Management Guidelines’ 
                prepared by the National Health Research Council (NHRC).
            
             </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span>  “Wastes from health care institutions can be categorized as infectious or noninfectious." <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list" style="color:rgb(31 163 101);">
                    <p>
                      Infectious wastes include human, animal, or biological wastes and any items that may be contaminated with pathogens.
                       Noninfectious wastes include toxic chemicals, cytotoxic drugs, and radioactive, flammable, and explosive wastes,
                       reads the guideline.  
                   </p>
                
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Implementation problem <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list" style="color:rgb(31 163 101);">
                    <p>
                      However, not all hospitals are following the guidelines mainly because of the lack of budget, 
                      lack of orientation regarding medical waste management to waste handlers, and flimsy monitoring from the government.
                     Segregation of medical waste is a vital part of hospital waste management. Poor management of hospital waste poses 
                     risk not only to its handlers during its treatment and disposal but also to the environment 
                     if not disposed in a proper manner. Haphazard management of hospital waste also gives black marketers an opportunity
                      to collect the disposed medical equipment and resell them.                     </p>
                  </div>
                </li> 

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Dr Kedar Century, Executive Director at Bir Hospital said, <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list" style="color:rgb(31 163 101);">
                    <p>
                       “We used to have an ideal waste management system to sterilize and dispose hospital waste before the 2015 earthquake. But the earthquake damaged the building where we had installed the autoclave device and now we don’t have any space. The new building is currently being used to accommodate admitted patients.”

                      Dr Century added that lack of space has barred the hospital from following NHRC’s National Health Care Waste Management Guidelines and they are relying on traditional means of sterilization for the time being.
                      
                      Management of medical waste at private hospitals is poorer as compared to government run hospitals for want of regular monitoring from authorities concerned. A report published by the Ministry of Health and Population shows that private hospitals continue to burn, bury and dispose hazardous immunization waste mixing it up with the municipal waste.                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("https://www.sharpsmart.co.uk/sites/sharpsmart.co.uk/files/NEW%20Blog%20Thumbnails/Blog-Thumbnail-WhatisClinicalWaste-UK.jpg");'>&nbsp;</div>
        </div>

      </div>
    </section>

    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Waste management regulations and disposal methods.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"> What is waste management? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Waste management is the collection, transportation and disposal of waste materials.</p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">   How do I practice waste management at home? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Keep separate containers for dry and wet waste in the kitchen.
                  Keep two bags for dry waste collection- paper and plastic, for the rest of the household waste.
                  Keep plastic from the kitchen clean and dry and drop into the dry waste bin. Keep glass /plastic containers rinsed of food matter.
                  Keep a paper bag for throwing sanitary waste.                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed"> What are the first few steps to initiate a waste management programme in your apartment complex?
                <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Form a group with like-minded people.
                  Explain waste segregation to your family / neighbours in your apartment building.
                  Get the staff in the apartment building to also understand its importance.
                  Get separate storage drums for storing dry and wet waste.
                  Have the dry waste picked up by the dry waste collection centre or your local scrap dealer.                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">What are the different types of waste? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                   1. Wet waste- Wet waste consists of kitchen waste - including vegetable and fruit peels and pieces, tea leaves, coffee grounds, eggshells, bones and entrails, fish scales, as well as cooked food (both veg and non-veg).
                  <br><br>
                  2. Dry Waste- Paper, plastics, metal, glass, rubber, thermocol, styrofoam, fabric, leather, rexine, wood – anything that can be kept for an extended period without decomposing is classified as dry waste.
                  <br><br>
                   3 .Hazardous waste- Household hazardous waste or HHW include three sub-categories – E-waste; toxic substances such as paints, cleaning agents, solvents, insecticides and their containers, other chemicals; and biomedical waste.
                  <br><br>
                  4. E-waste- E-waste or electronic waste consists of batteries, computer parts, wires, electrical equipment of any kind, electrical and electronic toys, remotes, watches, cell phones, bulbs, tube lights and CFLs.
                  <br><br>
                   5. Biomedical waste- This includes used menstrual cloth, sanitary napkins, disposable diapers, bandages and any material that is contaminated with blood or other body fluids. 
               </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">What are ways of storing the waste at homes? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  1. Dry waste-                  
                  Store it in a bag in the utility area after cleaning and drying till it is picked up. No food residue must be left in the bottles and packets. Clean them as you would to reuse them. If clothes are totally unusable, or very damaged, they are categorized as dry waste. If clothes are soiled with body fluids, they become sanitary waste. If they are soiled with paint, or any chemicals, they are HHW (household hazardous waste).
                  
                  <br><br> 2. E-waste-                  
                  Store them in separate container which is kept closed, away from moisture and in which nothing else is put.                </p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="600">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed">How do I dispose my waste? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  1. Compost your wet waste at home-

                  Home composting can easily be done in any aerated container. Get more details on composting and begin composting today! 
                  <br><br>
                  2 Compost your wet waste at the community level-
                  
                  If you live in a large apartment building, a community composting system like tank composting could be set up for all the wet waste from the residents. If not, the wet waste can be given out every day to your Municipality collection system.
                  <br><br>
                  3 Biomedical waste has to be wrapped separately in a newspaper and handed over to the municipality waste collection system. Expired medicines and injections, used syringes also have to be disposed in the same manner.
                  
                  Paint and other hazardous waste like cosmetics, mosquito repellents, tube lights etc have to be stored separately and handed over to the Municipal collection system.
                </p>
              </div>
            </li>
          </ul>
        </div>

      </div>
    </section>

    <footer id="footer" class="footer" style="background-color:#37517e ;"> 
<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3><img src="assets/img/clients/Capture.PNG" style="width:80px;height:60px;"></h3>
        <p>
          Moti Nagar <br>
          New Delhi, Delhi<br>
          India <br><br>
          <strong>Phone:</strong> +91 9871946454<br>
          <strong>Email:</strong> <a href="mailto:info@bheemdattamun.gov.np bmuncipality@gmail.com">info@bheemdattamun.gov.np bmuncipality@gmail.com<br></a>
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#faq">FAQ</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Waste Pick up </a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">E- managementwaste</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Garbage Management</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Awareness program</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Complain Hnadling </a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Social Networks</h4>
        <p>Follow us in our social media to stay updated about community waste management.</p>
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
<script src="bower_components/aos/dist/aos.js"></script> 
<script src="script.js"></script>
<script src="sc.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script><script>
    AOS.init();
  </script>
</html>