
<!-- Footer copyrgiht and navigation -->
<footer>

        <!-- Footer Subscribe -->
        <!-- Footer logo and social media button -->
<div class="logo-social-area section-padding text-white" style="background-color:#333333; padding-top:100px; padding-bottom:100px">
    <div class="container text-center">
        <a class="logo logo-footer" href="index.html">
            <h1>LOGO</h1>
        </a>
        <div class="footer-contact">
            <p class="phone"><i class="fa fa-phone"></i> +234 300 12 3456</p>
            <p class="email"><i class="fa fa-envelope-o"></i> info@123.net</p>
        </div>
        <div class="socials">
            <a href="https://snaprap.net/www.facebook.com/snaprapmovement"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/snaprapmovement"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/snaprapmovement"><i class="fa fa-instagram"></i></a>
            <a href="https://www.instagram.com/snaprapmovement"><i class="fa fa-linkedin"></i></a>
            <!--a href="#"><i class="fa fa-vimeo"></i></a-->
        </div>
    </div>
</div>
<!-- Footer logo and social media button -->
</footer>


<!-- Footer copyrgiht and navigation -->
<div class="copyright-footer" style="background-color:black; height:100px; padding-top:50px">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <p class="copyright">Copyright &copy; 2018, <a href="#">Jemoconcept</a>. All Right Reserved</p>
            </div>
            <div class="col-sm-6 col-xs-12">
                <p class="credit-text">Designed by <a href="#">Sico & Zplus Limited</a></p>
            </div>
        </div>
    </div>
</div>


</body>

    <script src="jquery/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

	<script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>
	<script src="assets/js/gsdk-checkbox.js"></script>
	<script src="assets/js/gsdk-radio.js"></script>
	<script src="assets/js/gsdk-bootstrapswitch.js"></script>
	<script src="assets/js/get-shit-done.js"></script>
    <script src="assets/js/custom.js"></script>

<script type="text/javascript">
         
    $('.btn-tooltip').tooltip();
    $('.label-tooltip').tooltip();
    $('.pick-class-label').click(function(){
        var new_class = $(this).attr('new-class');  
        var old_class = $('#display-buttons').attr('data-class');
        var display_div = $('#display-buttons');
        if(display_div.length) {
        var display_buttons = display_div.find('.btn');
        display_buttons.removeClass(old_class);
        display_buttons.addClass(new_class);
        display_div.attr('data-class', new_class);
        }
    });
    $( "#slider-range" ).slider({
		range: true,
		min: 0,
		max: 500,
		values: [ 75, 300 ],
	});
	$( "#slider-default" ).slider({
			value: 70,
			orientation: "horizontal",
			range: "min",
			animate: true
	});
	$('.carousel').carousel({
      interval: 4000
    });
      
    
</script>
</html>
