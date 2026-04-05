<?php include('includes/header.php') ?>
<!-- Sub banner start -->
 <style>
    img{
        border-radius: 20px;
    }
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");

* {
  margin: 0;
  padding: 0;
  scroll-behavior: smooth;
  box-sizing: border-box;
}

ul {
  list-style: none;
}

input {
  overflow: hidden;
}

.section-title {
  position: relative;
  font-size: 30px;
  font-weight: 600;
  font-family: "Poppins", sans-serif;
  margin: 0 0 35px;
}

.sec-pad {
  padding: 60px 0 0;
  /* margin: 50px 0; */
}

.contact-sec {
  align-item: center;
  display: flex;
  background-color: #5cbde466;
}

.contact-sec .contact-ul li,
.contact-ul b {
  font-size: 20px;
  margin: 10px 0;
  font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
  word-wrap: break-word;
}

.contact-sec .contact-ul i {
  font-size: 18px;
  padding: 10px;
  margin-right: 10px;
  border-radius: 50%;
}
.contact-detail a {
  color: #000;
  text-decoration: none;
}

.contact-sec .contact-ul li b:hover {
  color: #f93;
}

.contact-sec .contact-ul li .fa-location-dot {
  color: #f44337;
  border: 2px solid #f4433790;
}

.contact-sec .contact-ul li .fa-phone {
  color: #00b055;
  border: 2px solid #00b05590;
}

.contact-sec .contact-ul li .fa-envelope {
  color: #ff6347;
  border: 2px solid #ff634790;
}

.contact-detail span {
  width: 400px;
  display: flex;
  justify-content: center;
}
.contact-detail span a {
  font-size: 20px;
  padding: 6px 12px;
  color: #000;
  border-radius: 50%;
  margin: 0px 5px;
}
.contact-detail span .fb {
  color: #3b5998;
  border: 3px solid #3b5998;
}
.contact-detail span .fb:hover {
  color: #fff;
  background-color: #3b5998;
}

.contact-detail span .insta {
  color: #833ab4;
  border: 3px solid #833ab4;
}
.contact-detail span .insta:hover {
  color: #fff;
  background-color: #833ab4;
}

.contact-detail span .twitter {
  color: #00acee;
  border: 3px solid #00acee;
}
.contact-detail span .twitter:hover {
  color: #fff;
  background-color: #00acee;
}

form.contFrm {
  max-width: 396px;
  margin: auto;
}

.inptFld {
  width: 100%;
  height: 30px;
  border: 0;
  margin: 0 0 10px;
  border-radius: 8px;
  padding: 0 10px;
  font-size: 16px;
  color: #000;
}

.inptFld:focus {
  outline-offset: -4px;
  outline: 1px solid #f93;
}

.contFrm textarea {
  height: 75px;
  padding-top: 5px;
}
.inptBtn {
  height: 50px;
  border: 0;
  background: #00b055;
  font-size: 14px;
  color: #fff;
  margin: auto;
  letter-spacing: 1px;
  cursor: pointer;
  width: 100%;
  max-width: 200px;
}

/* Responcive css Start */

@media (max-width: 991px) {
  .sec-pad {
    padding: 20px 0 0px;
  }

  .contact-sec .contact-ul li,
  .contact-ul b {
    font-size: 18px;
  }

  .contact-sec .contact-ul i {
    font-size: 14px;
    padding: 6px;
    margin-right: 6px;
  }

  .inptFld {
    height: 40px;
    margin: 0 0 10px;
    padding: 0 14px;
    font-size: 14px;
  }
}

@media (max-width: 767px) {
  .contact-detail span {
    width: auto;
  }
  .contact-detail span a {
    font-size: 18px;
    padding: 5px 10px;
    color: #000;
    border-radius: 50%;
    margin: 0px 5px 20px;
  }
}

@media (max-width: 575px) {
  .section-title {
    font-size: 26px;
    font-weight: 500;
  }
  .contact-sec {
    border-radius: 10% 10% 0% 0% / 5% 5% 0% 0%;
  }

  .contact-sec .contact-ul i {
    border: none;
  }
  .inptFld {
    height: 36px;
    margin: 0 0 8px;
    padding: 0 14px;
    font-size: 14px;
  }
}

@media (max-width: 480px) {
  .contact-sec .contact-ul li,
  .contact-ul b {
    font-size: 16px;
  }
}

 </style>
<main class="main">
            
            <div class="page-header pl-4 pr-4  bg-dark p-5">
               
                <h1 class="page-title font-weight-bold lh-1 text-white text-capitalize text-center">Contact Us</h1>
                <ul class="breadcrumb sort-tech" style="justify-content: center;">
                <li ><a href="index.php"><i class="d-icon-home" style=" color:white;"></i></a></li>
                <li style="margin-left: 1%; color:white;">Contact Us</li>
                </ul>
            </div>
            <div class="page-content pt-10">
                <section class="contact-sec sec-pad col-lg-11 mx-auto">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="contact-detail">
          <h1 class="section-title">Contact us</h1>

          <ul class="contact-ul">
            <li class="text-dark"> 125/1, Sisoli, Meerut, Meerut, Uttar Pradesh, 250004</li>

            <li>
          
              <a href="tel:9311703804"><b>+91 9311703804</b></a>,
            </li>

            <li>
           
              <a href="mailto:info@rameshgiri.com"><b> info@rameshgiri.com</b></a>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-md-6 pb-5">
        <form action="#" class="contFrm" method="POST">
          <div class="row">
            <div class="col-sm-12 bg-light m-2">
              <input type="text" name="name" placeholder="Your Name" class="inptFld" required />
            </div>

            <div class="col-sm-12 bg-light m-2">
              <input type="email" name="email" placeholder="Email Address" class="inptFld" required />
            </div>

            <div class="col-sm-12 bg-light m-2">
              <input type="tel" name="phone" placeholder="Phone Number" class="inptFld" required />
            </div>

            <div class="col-sm-12 bg-light m-2">
              <textarea class="inptFld" rows="" cols="" placeholder="Your Message..." required></textarea>
            </div>

            <div class="col-12">
              <input type="submit" name="submit" value="SUBMIT" class="inptBtn rounded" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

            </div>
        </main>
        <!-- End Main -->

<?php include 'includes/footer.php' ?>