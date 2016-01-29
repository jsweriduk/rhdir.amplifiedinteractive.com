 <!-- /#footer -->
   <footer id="footer" class="midnight-blue">
        <div class="container footer-top">
            <div class="row">
                <div class="col-sm-4">
					<div class="pull-left footer-links">
						<ul>
							<li class="links pipe"><a href="#">Alternative Recovery Services</a></li>
							<li class="links pipe"><a href="#">About Us</a></li>
							<li class="links"><a href="#">Contact Us</a></li>
						</ul>
					</div>
					
                </div>
                <div class="col-sm-4">
                    <div class="social-links">
						<ul id="social-icons-list" class="social-list">
							<li id="facebook-icon" class="social-icon">
								<a href="#">
								<img class="hvr" data-alt-src="/images/social-icons/fb-2.png" src="/images/social-icons/fb-1.png" style="vertical-align:middle;"></a>
							</li>
							<li id="twitter-icon" class="social-icon">
								<a href="#">
								<img class="hvr" data-alt-src="/images/social-icons/twitter-2.png" src="/images/social-icons/twitter-1.png" style="vertical-align:middle;"></a>
							</li>
							<li id="instagram-icon" class="social-icon">
								<a href="#">
								<img class="hvr" data-alt-src="/images/social-icons/insta-2.png" src="/images/social-icons/insta-1.png" style="vertical-align:middle;"></a>
							</li>
							<li id="google-plus-icon" class="social-icon">
								<a href="#">
								<img class="hvr" data-alt-src="/images/social-icons/google-2.png" src="/images/social-icons/google-1.png" style="vertical-align:middle;"></a>
							</li>
							<li id="youtube-icon" class="social-icon">
								<a href="#">
								<img class="hvr" data-alt-src="/images/social-icons/youtube-2.png" src="/images/social-icons/youtube-1.png" style="vertical-align:middle;"></a>
							</li>
							<li id="vimeo-icon" class="social-icon">
								<a href="#">
								<img class="hvr" data-alt-src="/images/social-icons/vimeo-2.png" src="/images/social-icons/vimeo-1.png" style="vertical-align:middle;"></a>
							</li>
						</ul>
					</div>
                </div>
				<div class="col-sm-4">
					<div class="row">
						<div class="pull-left footer-legal">
							<ul>
								<li class="legal pipe" style="float:left;"><a href="terms-of-use.php">Copyright AllThingsTreatment.com</a></li>
								<li class="legal" style="float:left;"><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    </footer-->
	<script type="text/javascript">
		var sourceSwap = function () {
			var $this = $(this);
			var newSource = $this.data('alt-src');
			$this.data('alt-src', $this.attr('src'));
			$this.attr('src', newSource);
		}
		$( document ).ready(function() {
			$('img.hvr').hover(sourceSwap, sourceSwap);
		});
	</script>
<!--/#footer-->