   <?php include'header-2.php';?>

<section class="header-8-sub" style="padding-top: 0px; height:30vh;margin-top: 90px;">
	<div class="background">&nbsp;</div>
	<div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
	            <h3 style="line-height:30vh;font-weight:100;">Contact us</h3>
            </div>
          </div>
          
        </div>
</section>  
<!-- contacts-4 -->
	<section class="contacts-4">
        <div class="container">
        	<div class="row">
       
        	<div class="col-sm-6 col-sm-offset-3 text-center">
        		<div class="content">
            <div class="social-btns">
              <a target="_blank">
                <div class="fui-twitter"></div>
                <div class="fui-twitter"></div>
              </a>
              <a href="https://www.facebook.com/pages/Syncify/137838319888819?fref=ts" target="_blank">
                <div class="fui-facebook"></div>
                <div class="fui-facebook"></div>
              </a>
            </div>
            <h3>Get in touch with us</h3>
            <p>Questions, concerns, and compliments?  Doesn't matter--we want to hear from you.</p>
            <div class="links">
              <a href="#">technology@liakadacapital.com</a>
            </div>
            <br><br><br><br>
          </div>
        	
        	
        		<h3>Send us an email</h3>
	        	<form class="well" method="post" name="myemailform" action="form-to-email.php">
		        	<div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Name" maxlength="60" size="40">
		        	</div>
		        	<div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="Email" maxlength="80" size="30">
		        	</div>
		        	<div class="form-group">
                    <textarea class="form-control" name="message" maxlength="1000" cols="25" rows="6"></textarea>
		        	</div>

                    <button type="submit" name='submit' value="submit" class="btn btn-primary" style="min-width:140px;"><span class="fui-mail"></span></button>
                </form>
                <script type="text/javascript">
				// Code for validating the form
				// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
				// for details
				var frmvalidator  = new Validator("myemailform");
				frmvalidator.addValidation("name","req","Please provide your name");
				frmvalidator.addValidation("email","req","Please provide your email");
				frmvalidator.addValidation("email","email","Please enter a valid email address");
				</script>
                
        	</div>
        	</div>
        </div>
      </section>
      
<?php include'footer.php';?>