 <script>
$(document).on('mouseenter', '[data-toggle="tab"]', function () {
  $(this).tab('show');
});

</script>

    <!--header id="header"
        <div class="top-bar">
            <class="container">
                <div class="row">                    
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"></div>
                    <div><a class="logo" href="/"><img height="35px" src="images/ATT-logo.png"></a></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share" align="center">
                                <li class="callicon"><img height="20px" src="images/samples/icon-test-1.png"></li>
                                <a href="tel:8006783544"> <li class="top-number"> (800) 678-3544</li></a>
                            </ul>
                       </div>
                    </div>
                </div>
            </div><!--/.container>
        </div><!--/.top-bar-->

          <nav class="navbar navbar-custom navbar-static-top" role="navigation">
                <div class="container">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <!--a class="navbar-brand" href="http://rhdir.amplifiedinteractive.com">AI.com</a-->
                  </div>
                  <div class="navbar-collapse collapse">
				    <!-- White Logo -->
					<ul class="nav navbar-nav pull-left">
					  <li class="nav-logo"><a href="/"><img height="35px" src="/images/ATT-logo.png"></a></li>
                    </ul>
					<!-- Nav Bar Items -->
					<ul class="nav navbar-nav pull-right">
                      <!--<li class="home"><a href="/"><i class="fa fa-home"></i> Home</a></li>-->
                      <?php include 'include/nav-treatment-tube.php';  ?>
                      <?php include 'include/nav-news.php';  ?>
                      <?php include 'include/nav-opinion.php';  ?>
                      <?php include 'include/nav-education.php';  ?>
                      <?php include 'include/nav-blog.php';  ?>
                      <?php include 'include/nav-find-treatment.php';  ?>
                    </ul>
				  </div>
				</div><!--/.container-->      
		  </nav><!--/nav-->
		<!-- BIG UGLY Call to Action -->
		<div id="call-to-action" class="call-now">
			<a href="tel:8006783544">
				<div class="call-to-action-inner">
					<i class="fa fa-phone call-icon"></i><span>Call Us Today</span>
				</div>
			</a>
		</div>
   <!--/header--><!--/header-->