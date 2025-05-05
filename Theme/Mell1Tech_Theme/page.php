<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mell1Tech2
 */

get_header(); ?>

			<?php
				// Start the Loop
				while ( have_posts() ) : the_post();

				// Content page
				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

			<?php
echo "
<form class='needs-validation' method='post'  novalidate>
	<div class='input-group d-flex justify-content-center'>
		<div class='col-md-4 mb-3'>
			<label for='validationFirstname'>First name</label>
			<input type='text' class='form-control' name='firstname' id='validationFirstname' placeholder='First name' value='' required>
			</div>
		<div class='col-md-4 mb-3'>
			<label for='validationEmail'>Email</label>
			<input type='email' class='form-control' name='email' id='validationEmail' placeholder='Email' value='' required>
		</div>
		<div class='col-md-8 mb-3'>
			<label for='validationationNotes'>Notes</label>
			<textarea class='form-control' name='notes' id='validationationNotes' aria-label='With textarea'></textarea>
		</div>
		<div class='col-md-8 mb-3'>
			<div class='form-check'>
				<input class='form-check-input' type='checkbox' value='' id='invalidCheck' required>
				<label class='form-check-label' for='invalidCheck'>
					Agree to be contacted by this Mell1Tech2
				</label>
				<div class='invalid-feedback'>
					You must agree before submitting.
				</div>
			</div>
		</div>
		<div class='col-md-8 mb-3'>
			<button class='btn btn-primary col-md-3 col-sm-6' name='submit' type='submit'>Submit form</button>
		</div>
	</div>
</form>

<script>
(function() {
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
</script>";
?>

<?php
	if(isset($_POST['submit']))
	{
		$to = 'KieranAbelen@gmail.com';
$subject = $_POST['firstname'] . ' ' . $_POST['email'] . ' Business Enquiry';
$body = $_POST['notes'];
$headers = array('Content-Type: text/html; charset=UTF-8');
 
wp_mail( $to, $subject, $body, $headers );
	}
?>

		</main><!-- #main -->

	</div><!-- #primary -->

<?php 
get_footer();
?>