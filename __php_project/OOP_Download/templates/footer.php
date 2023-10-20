	<footer>
		<div class="container p-4 text-center">
			<a href="https://www.freepik.com/free-vector/young-man-classroom-character-scene_6151170.htm#page=3&query=animate%20profile&position=13&from_view=search&track=ais">Image by studiogstock</a> on Freepik
		</div>
	</footer>
	
	<!-- Vendor -->
	<script src="../assets/vendor/axllent/jquery/jquery.js"></script>

	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<script>
		$(document).ready(function() {
			// Your custom JavaScript code goes here
		});

	  	function signout_dialog() {
			Swal.fire({
				title: 'Are you sure you want to logout?',
				text: 'Your session will end here!',
				icon: 'warning',
				allowOutsideClick: false,
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, I want to logout!',
			}).then((result) => {
				if (result.value) {
					Swal.fire({
						title: 'Logging Out!',
						text: "You've been logged out, redirecting to the login page.",
						icon: 'success',
						showConfirmButton: false,
						allowOutsideClick: false,
						didOpen: () => {
							Swal.showLoading();
							setTimeout(() => {
								window.location.href = "../includes/logout.inc.php";
							}, 1000);
						}
					});
				}
			});
		}
	</script>
	
	</body>

	</html>