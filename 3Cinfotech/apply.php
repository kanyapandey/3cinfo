<?php include_once("header.php"); ?>
        <!-- ======== @Region: #content ======== -->
    <div id="content">
      <div class="container" id="about">
        <div class="row">
          <!--main content-->
          <div class="col-md-9 col-md-push-3">
            <div class="page-header">
              <h1>
                Learn how uniquely we engage with our people
              </h1>
            </div>
            <div class="block block-border-bottom-grey block-pd-sm">
               <form action="applysub.php" id="EmploymentApplication100" method="post">
                <script type="text/javascript">
                function ValidateForm(frm) {
                if (frm.First_Name.value == "") { alert('First name is required.'); frm.First_Name.focus(); return false; }
                if (frm.Last_Name.value == "") { alert('Last name is required.'); frm.Last_Name.focus(); return false; }
                if (frm.Email_Address.value == "") { alert('Email address is required.'); frm.Email_Address.focus(); return false; }
                if (frm.Email_Address.value.indexOf("@") < 1 || frm.Email_Address.value.indexOf(".") < 1) { alert('Please enter a valid email address.'); frm.Email_Address.focus(); return false; }
                if (frm.Position.value == "") { alert('Position is required.'); frm.Position.focus(); return false; }
                if (frm.Phone.value == "") { alert('Phone is required.'); frm.Phone.focus(); return false; }
                return true; }
                </script>
            <table border="0" cellpadding="5" cellspacing="0">
            <tr> <td style="width: 50%">
            <label for="First_Name"><b>First name *</b></label><br />
            <input name="First_Name" type="text" maxlength="50" style="width: 260px" />
            </td> <td style="width: 50%">
            <label for="Last_Name"><b>Last name *</b></label><br />
            <input name="Last_Name" type="text" maxlength="50" style="width: 260px" />
            </td> </tr> <tr> <td colspan="2">
            <label for="Email_Address"><b>Email *</b></label><br />
            <input name="Email_Address" type="text" maxlength="100" style="width: 535px" />
            </td> </tr> <tr> <td colspan="2">
            <label for="Portfolio"><b>Portfolio website</b></label><br />
            <input name="Portfolio" type="text" maxlength="255" value="http://" style="width: 535px" />
            </td> </tr> <tr> <td colspan="2">
            <label for="Position"><b>Position you are applying for *</b></label><br />
            <input name="Position" type="text" maxlength="100" style="width: 535px" />
            </td> </tr> <tr> <td>
            <label for="Salary"><b>Salary requirements</b></label><br /> <input name="Salary" type="text" maxlength="50" style="width: 260px" /> </td> <td>
            <label for="StartDate"><b>When can you start?</b></label><br />
            <input name="StartDate" type="text" maxlength="50" style="width: 260px" />
            </td> </tr> <tr> <td>
            <label for="Phone"><b>Phone *</b></label><br />
            <input name="Phone" type="text" maxlength="50" style="width: 260px" />
            </td> <td>
            <label for="Fax"><b>Fax</b></label><br />
            <input name="Fax" type="text" maxlength="50" style="width: 260px" />
            </td> </tr> <tr> <td colspan="2">
            <label for="Relocate"><b>Are you willing to relocate?</b></label><br />
            <input name="Relocate" type="radio" value="Yes" checked="checked" /> Yes      
            <input name="Relocate" type="radio" value="No" /> No      
            <input name="Relocate" type="radio" value="NotSure" /> Not sure
            </td> </tr> <tr> <td colspan="2">
            <label for="Organization"><b>Last company you worked for</b></label><br />
            <input name="Organization" type="text" maxlength="100" style="width: 535px" />
            </td> </tr> <tr> <td colspan="2">
            <label for="Reference"><b>Reference / Comments / Questions</b></label><br />
            <textarea name="Reference" rows="7" cols="40" style="width: 535px"></textarea>
            </td> </tr> <tr> <td colspan="2" style="text-align: center;">
            <!-- <div style="float: right"> <a href="https://www.100forms.com" id="lnk100" title="form to email">form to email</a></div> -->
            <!-- <script src="https://www.100forms.com/js/FORMKEY:PPA29DQAALKZ/SEND:my@email.com" type="text/javascript"></script> -->
            <input name="skip_submit" type="submit" value="Send Application" />
            </td> </tr>
            </table>
        </form>
            </div>
          </div>
          <!-- sidebar -->
          <div class="col-md-3 col-md-pull-9 sidebar visible-md-block visible-lg-block">
            <ul class="nav nav-pills nav-stacked">
              <li>
                <a href="3Cinfotechway.php" class="first">
                  3Cinfotech Way           
                </a>
              </li>
              <li class="active">
                <a href="apply.php">
                  Apply Online                  
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- ======== @Region: #footer ======== -->
    <footer id="footer" class="block block-bg-grey-dark" data-block-bg-img="img/bg_footer-map.png" data-stellar-background-ratio="0.4">
      <div class="container">
        <a href="#top" class="scrolltop">Top</a> 
        <div class="row" id="contact">
          
          <div class="col-md-3">
            <address>
              <strong>3Cinfotech Co. Limited</strong>
              <br>
              <i class="fa fa-map-pin fa-fw text-primary"></i> Sunshine House, Sunville. SUN12
              <br>
              <i class="fa fa-phone fa-fw text-primary"></i> 019223 8092344
              <br>
              <i class="fa fa-envelope-o fa-fw text-primary"></i> info@3Cinfotech.com
              <br>
            </address>
          </div>
          
          <div class="col-md-6">
            <h4 class="text-uppercase">
              Contact Us
            </h4>
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>
          
          <div class="col-md-3">
            <h4 class="text-uppercase">
              Follow Us On:
            </h4>
            <!--social media icons-->
            <div class="social-media social-media-stacked">
              <!--@todo: replace with company social media details-->
              <a href="https://www.twitter.com"><i class="fa fa-twitter fa-fw"></i> Twitter</a>
              <a href="https://www.facebook.com"><i class="fa fa-facebook fa-fw"></i> Facebook</a>
              <a href="https://www.linkedin.com"><i class="fa fa-linkedin fa-fw"></i> LinkedIn</a>
              <a href="https://www.googleplus.com"><i class="fa fa-google-plus fa-fw"></i> Google+</a>
            </div>
          </div>
          
        </div>
        <div class="row subfooter">
          <!--@todo: replace with company copyright details-->
          <div class="col-md-7">
            <p>Copyright © 2017 3Cinfotech Co. Limited</p>
            <div class="credits">
              <!-- 
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flexor
              -->
              <a href="https://bootstrapmade.com/">All Rights Reserved</a> by 3Cinfotech.com
            </div>
          </div>
          <div class="col-md-5">
            <ul class="list-inline pull-right">
              <li><a href="#">Terms</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    
    <!-- Required JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/stellar/stellar.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="contactform/contactform.js"></script>
    
    <!-- Template Specisifc Custom Javascript File -->
    <script src="js/custom.js"></script>
    
    <!--Custom scripts demo background & colour switcher - OPTIONAL -->
    <script src="js/color-switcher.js"></script>
    
    <!--Contactform script -->
    <script src="contactform/contactform.js"></script>
    <script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-55234356-4', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>