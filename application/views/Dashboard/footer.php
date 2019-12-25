


        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="<?= base_url() ?>assets/dashboard/js/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/dashboard/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url() ?>assets/dashboard/js/modernizr.min.js"></script>
        <script src="<?= base_url() ?>assets/dashboard/js/metisMenu.min.js"></script>
        <script src="<?= base_url() ?>assets/dashboard/js/jquery.slimscroll.js"></script>
        <script src="<?= base_url() ?>assets/dashboard/js/waves.js"></script>

        <script src="<?= base_url() ?>assets/dashboard/pages/dashboard.js"></script>

        <!-- App js -->
        <script src="<?= base_url() ?>assets/dashboard/js/app.js"></script>

        <script type="text/javascript">
        	
        	$(document).ready(function(){

        		function readURL(input) {
				  if (input.files && input.files[0]) {
				    var reader = new FileReader();
				    reader.onload = function(e) {
				      $('#previewHolder').attr('src', e.target.result);
				    }

				    reader.readAsDataURL(input.files[0]);
				  }
				}

				$("#file").change(function() {
				  readURL(this);
				});

        	})

        </script>

    </body>
</html>