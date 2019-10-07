<?php require_once( '../couch/cms.php' ); ?>
<cms:template title='Login' hidden='1' parent="_extusers_" order="2" />
<!-- 
	Company Name:	GenXCoders Pvt. Ltd.
	Author Name:	Er Aashish Handa
	Date:			Sep 29, 2019
	Client:			Gaurav Sharma
	Project Name:	AWADH
	Project Type:	Restaurant Management System
 -->
<cms:embed 'header.html' />

		<!-- Site Content -->
		<div class="gxcpl-center-div">
			<div class="row">
				<div class="col-md-12">
					<img src="../assets/images/awadh.png" class="gxcpl-login-logo" />
				</div>
			</div>
			
			<div class="gxcpl-ptop-10"></div>

			<div class="gxcpl-card gxcpl-card-shadow gxcpl-card-white">
				<div class="gxcpl-card-header">
					<h4 class="gxcpl-no-margin text-center">
						Login
					</h4>
				</div>
				<div class="gxcpl-card-body">
					<form method="post" name="login-form" id="login-form">
						<div class="row">
							<div class="col-md-12">
								<label class="gxcpl-label">
									User Type
								</label>
							</div>
							<div class="col-md-12">
								<select class="gxcpl-transition" name="usertype">
									<option id="-" selected disabled>Select</option>
									<option id="owner">Owner</option>
									<option id="owner">Chef</option>
									<option id="owner">Cashier</option>
									<option id="owner">Captain</option>
									<option id="owner">Waiter</option>
								</select>
							</div>
						</div>
						
						<div class="gxcpl-ptop-10"></div>

						<div class="row">
							<div class="col-md-12">
								<label class="gxcpl-label">
									Username
								</label>
							</div>
							<div class="col-md-12">
								<input class="gxcpl-input-text gxcpl-transition" type="text" name="username" />
							</div>
						</div>

						<div class="gxcpl-ptop-10"></div>

						<div class="row">
							<div class="col-md-12">
								<label class="gxcpl-label">
									Password
								</label>
							</div>
							<div class="col-md-12">
								<input class="gxcpl-input-text gxcpl-transition" type="password" name="password" />
							</div>
						</div>
						
						<div class="gxcpl-ptop-10"></div>

					</form>
				</div>
				<div class="gxcpl-card-footer">
					<center>
						<button class="btn btn-default ripple gxcpl-btn" type="submit">
							<i class="fa fa-sign-in"></i> Login
						</button>
					</center>
				</div>
			</div>

			<div class="gxcpl-ptop-10"></div>

			<center>
				<button class="btn btn-default ripple gxcpl-btn" type="button" onclick="window.location.href='reset-password.html';">
					<i class="fa fa-power-off"></i> Reset Password
				</button>
			</center>

		</div>
		<!-- Site Content -->

		<!-- Site Footer -->
		<div class="gxcpl-ptop-30"></div>
		<footer class="footer">
			<div class="col-md-12">
				&copy; AWADH | Powered by GXCPL
			</div>
		</footer>
		<!-- Site Footer -->

		<!-- Scripts -->
		<script type="text/javascript" src="../assets/js/jquery-2.0.0.js"></script>
		<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
		<script type="text/javascript" src="../assets/js/lv-ripple.jquery.js"></script>
		<script type="text/javascript">
			// Ripple
			(function(exports){
				$.ripple.init();
			})(window);
			// Ripple
		</script>
		<!-- Scripts -->
	</body>
</html>
<cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>