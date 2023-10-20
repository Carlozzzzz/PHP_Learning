	<!-- Vendor -->
	<script src="assets/vendor/axllent/jquery/jquery.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
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
								window.location.href = "includes/logout.inc.php";
							}, 1000);
						}
					});
				}
			});
		}
	</script>
	</body>

	</html>