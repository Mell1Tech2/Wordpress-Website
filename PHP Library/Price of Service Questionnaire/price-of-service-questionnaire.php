			<?php
echo "
<form class='needs-validation' method='post'  novalidate>
	<div class='input-group d-flex justify-content-center'>
		<div class='row col-5'>
			<h4 class='fw-bold text-center mt-3'></h4>
			<form class=' bg-white px-4' action=''>
				<p class='fw-bold'>How satisfied are you with our product?</p>
				<div class='form-check mb-2'>
					<input class='form-check-input' type='radio' name='exampleForm' id='radioExample1'>
					<label class='form-check-label' for='radioExample1'>
						Option 1
					</label>
				</div>
				<div class='form-check mb-2'>
					<input class='form-check-input' type='radio' name='exampleForm' id='radioExample2'>
					<label class='form-check-label' for='radioExample2'>
						Option 2
					</label>
				</div>
				<div class='form-check mb-2'>
					<input class='form-check-input' type='radio' name='exampleForm' id='radioExample3'>
					<label class='form-check-label' for='radioExample3'>
						Option 3
					</label>
				</div>
			</form>
			<div class='text-end'>
				<button type='button' class='btn btn-primary'>Submit</button>
			</div>
		</div>
	</div>
</form>

<script>
$(document).ready(function() {
  'use strict';
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
";
?>

<?php
	if(isset($_POST['submit']))
	{
		echo "console.log" . $_POST['exampleForm'];
	}
?>