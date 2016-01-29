
    <div class="col-lg-12 no-padding-left no-padding-right">
        <div class="row no-padding-left no-padding-right">
                <?php
                    echo "  
                        <div class='review-tab-rating'><span>
                            <input id='input-2ee' name='rating' type='number' class='rating' min='0' max='5' step='0.5' value='". $avg . "' data-stars=5 data-size='xs'
                            data-symbol='&#xe005;' data-default-caption='{rating} hearts' data-star-captions='{}' data-disabled='true'>                                                
                        </span> <span class='customer-reviews'>Reviews (" . $count . ")</span></div>";
                          
                ?>
               
            <hr>
            <div class="review-list">


                            
                               <?php
                                    $result1=mysql_query("SELECT * FROM attReviews WHERE fac_id = '$key' order by createDate desc");
                                    $contentArray1 = array();
                                    while ($contents1=mysql_fetch_assoc($result1)) {
                                        $contentArray1[] = $contents1;
                                    }   
                                    foreach($contentArray1 as $row1) {
                                        $cdate = strtotime($row1['createDate']);
                                        $rating = $row1['revRating'];
                                        $name = $row1['revName'];
                                        $title= $row1['revTitle'];
                                        $comment = $row1['revComment'];
                                    echo "<div class='col-lg-2'>";
                                    echo "<span class='reviewer-name'><strong>" . $name . "</strong><br>". date('F j, Y g:i a',$cdate) . "</span>  
											
											</div>
											<div class='col-lg-10'>
                                            <span class='review-headline'>". $title . " </span><br/>
                                            <blockquote  class='review-quote'>". $comment . "<br>
											<span class='review-hearts'>
                                                <input id='input-2ee' name='rating' type='number' class='rating' min='0' max='5' step='0.5' value='". $rating . "' data-stars=5 data-size='xs'
                                                data-symbol='&#xe005;' data-default-caption='{rating} hearts' data-star-captions='{}' data-disabled='true'>
                                            </span></blockquote>
											</div>";    
                                    }      
                                ?>
								



            </div>
			<hr>
			<div class="col-lg-12">
				<button id="show-write-review"><span class="write-a-review">Write a review</span></button>
			</div>
        </div>
    </div>

<div class="container">
<div id="write-review-overlay" style="display:none;">
</div>
<div id="write-review" class="col-lg-5" style="display:none;">
	<div id="close-window">
		<i class="fa fa-times"></i>
	</div>
    <div class="row">
        <h4>Write a Review</h4>
        <table border="0">
            <div class="col-md-offset-0">
                <tr>
                    <td width="77%">
                    <div class="">
                      <form class="form-horizontal" action="ajax/submitReview.php" method="post">
                      <!--form id="revForm" name="revForm"-->
                          <fieldset>
                                <!-- Name input-->
                                <div class="form-group">
                                  <label class="col-md-3 control-label" for="name">Full Name</label>
                                  <div class="col-md-8">
                                    <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                                    <?php echo "<input id='facID' name='facID' type='Hidden' value='". $key . "''>"; ?>
                                  </div>
                                </div>
                        
                                <!-- Email input-->
                                <div class="form-group">
                                  <label class="col-md-3 control-label" for="email">Your E-mail</label>
                                  <div class="col-md-8">
                                    <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                                  </div>
                                </div>

                                <!-- Comment Title-->
                                <div class="form-group">
                                  <label class="col-md-3 control-label" for="title">Comment Title</label>
                                  <div class="col-md-8">
                                    <input id="title" name="title" type="text" placeholder="Enter Title" class="form-control">
                                  </div>
                                </div>
                        
                                <!-- Message body -->
                                <div class="form-group">
                                  <label class="col-md-3 control-label" for="comment">Your message</label>
                                  <div class="col-md-8">
                                    <textarea class="form-control" id="comment" name="comment" maxlength="1000" placeholder="Please enter your feedback here..." rows="5"></textarea>
                                  </div>
                                </div>


                                <!-- Rating -->
                                <div class="form-group">
                                  <label class="col-md-3 control-label" for="rating">Your rating</label>
                                  <div class="col-md-5">
                                    <!--input id="input-21e" name="rating" value="0" type="number" class="rating" min=0 max=5 step=1 data-size="lg"-->
                                    <input id="input-2ba" name="rating" type="number" class="rating" min="0" max="5" step="0.5" data-stars=5 data-size="sm"
                                                data-symbol="&#xe005;" data-default-caption="{rating} hearts" data-star-captions="{}">
                                  </div>
                                <!--/div>
                                <div class="form-group"-->
                                  <div class="col-md-3 ">
                                    <button id="revSubmit" type="submit" class="btn btn-primary btn-md">Submit</button>
                                    <button type="reset" class="btn btn-default btn-md">Clear</button>
                                  </div>
                                </div>
                          </fieldset>
                       </form>
                
                    </div>
                    </td>
                </tr>
            </div>    
        </table>
    </div>
</div> 
</div>
<script type="text/javascript">
	$(document).on('click', '#write-review-overlay', function() {
		$(this).hide();
		$('#write-review').hide();
	});
	$(document).on('click', '#close-window', function() {
		$('#write-review-overlay').hide();
		$('#write-review').hide();
	});
	$(document).on('click', '#show-write-review', function() {
		$('#write-review-overlay').show();
		$('#write-review').show();
	});
	$(document).ready(function () {
		$(".form-horizontal").submit(function(event) {
			$('#write-review-overlay').hide();
			$('#write-review').hide();
			event.preventDefault();
			var formData = $(this).serialize();
			$(this).trigger("reset");
			console.log(formData);
			$.ajax({
				type:'POST',
				url: $(this).attr("action"),
				data: formData
			});
		});
	});
</script>