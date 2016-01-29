<div class="treatment-consult row">
	<div class="treatment-consult-title col-lg-12">
		<img src="images/email-icon.png">
		<h2><span>Free <img src="images/underline.png" class="treatment-consult-underline"></span> Treatment Consult</h2>
	</div>
	<div class="treatment-consult-separator col-lg-12">
	</div>
	<div class="treatment-consult-text col-lg-12">
		<span><font color="#f9ad81">Submit</font> your contact information to have a qualified treatment expert contact you and ensure you make the <strong>best treatment decision.</strong></span>
	</div>
	<div class="treatment-consult-form-container">
		<form id="treatment-consult-form" action="include/submit-free-consult.php" method="post">
		<div class="col-lg-12">
			<input type="text" name="name" class="treatment-consult-form-name" placeholder="Name" required>
		</div>
		<div class="col-lg-12">
			<input type="email" name="email" class="treatment-consult-form-email" placeholder="Email" required>
		</div>
		<div class="col-lg-12">
			<input type="tel" name="phone" class="treatment-consult-form-phone" placeholder="Phone Number">
		</div>
		<div class="col-lg-12">
			<textarea name="message" form="treatment-consult-form" placeholder="Type message here..." class="treatment-consult-form-message"></textarea>
		</div>
		<div class="col-lg-12">
			<button type="submit" id="submit-consult-form">Submit</button>
		</div>
		</form>
	</div>
	<div class="treatment-consult-form-bottom-separator">
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function () {
		$("#treatment-consult-form").submit(function(event) {
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