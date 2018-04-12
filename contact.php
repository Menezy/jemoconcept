<?php
require_once('inc/header.php');
?>

<style>
nav{
	background-color:blue;
}

.text-white{
	color:white;
}
#vision{
	 background-color:#38aedd; 
	 height: 300px;
}
.vision-text{
	padding:50px;
	font-weight: bold;
}
#mission{
	background-color: white;
	height:300px;
}
.mission-text{
	padding-top:50px;
	color:#38aedd;
	font-weight:bold;
}
.text-blue{
	color: #38aedd;
}
</style>
 <div class='blurred-container' style="background-color:#38aedd; height:300px">
        <div class="motto">
            <div>  <h2>Contact Us</h2></div>
            
        </div>
        <!--div class="img-src" style="background-image: url('assets/img/blurred-black-cover.jpeg')"></div-->
        <!--div class="img-src img-blurred" style="background-image: url('assets/img/blurred-black-cover.jpeg')"></div-->
    </div>
	
	<div class="container" style="padding-top:100px">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="post">
          <fieldset>
            <legend class="text-center">Contact us</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>
<!--     end row -->



<!-- end main -->


<!--Begin Vision and Mision-->


<?php
require_once('inc/footer.php');
?>