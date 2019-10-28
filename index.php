<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Dashboard'>

</cms:template>
<!-- 
	Company Name:	GenXCoders Pvt. Ltd.
	Author Name:	Er Aashish Handa
	Date:			Sep 30, 2019
	Client:			Gaurav Sharma
	Project Name:	AWADH
	Project Type:	Restaurant Management System
 -->
<cms:embed 'header.html' />
		<!-- Content -->
		<div class="gxcpl-content-div">
			<div class="container-fluid">
				<!-- Remove at delivery -->
				<div class="row">
					<div class="col-md-12">
						<cms:if usertype eq 'Captain' >
							Welcome Captain
						<cms:else_if usertype eq 'Manager' />
							Hello Manager!
						</cms:if>
					</div>
				</div>
				<!-- Remove at delivery -->

				<div class="row">
				
					<!-- Total Sales Today -->
					<div class="col-md-2 col-sm-6 col-xs-6">
						<div class="gxcpl-card gxcpl-card-white gxcpl-shadow-1">
							<div class="gxcpl-card-header-small">
								<h5 class="gxcpl-no-margin">Sales</h5>
							</div>
							<div class="gxcpl-card-body">
								<h3 class="gxcpl-no-margin text-center">
									<i class="fa fa-inr"></i> 0.00
								</h3>
							</div>
							<div class="gxcpl-card-footer-small text-center">
								Invoices: 0
							</div>
						</div>
						<div class="gxcpl-ptop-10"></div>
					</div>
					<!-- Total Sales Today -->

					<!-- Total Discount Today -->
					<div class="col-md-2 col-sm-6 col-xs-6">
						<div class="gxcpl-card gxcpl-card-white gxcpl-shadow-1">
							<div class="gxcpl-card-header-small">
								<h5 class="gxcpl-no-margin">Discounts</h5>
							</div>
							<div class="gxcpl-card-body">
								<h3 class="gxcpl-no-margin text-center">
									<i class="fa fa-inr"></i> 0.00
								</h3>
							</div>
							<div class="gxcpl-card-footer-small text-center">
								Discount: <i class="fa fa-inr"></i> 0
							</div>
						</div>
						<div class="gxcpl-ptop-10"></div>
					</div>
					<!-- Total Discount Today -->

					<!-- Total Payment Pending Today -->
					<div class="col-md-2 col-sm-6 col-xs-6">
						<div class="gxcpl-card gxcpl-card-white gxcpl-shadow-1">
							<div class="gxcpl-card-header-small">
								<h5 class="gxcpl-no-margin">Due</h5>
							</div>
							<div class="gxcpl-card-body">
								<h3 class="gxcpl-no-margin text-center">
									<i class="fa fa-inr"></i> 0.00
								</h3>
							</div>
							<div class="gxcpl-card-footer-small text-center">
								Invoices #0
							</div>
						</div>
						<div class="gxcpl-ptop-10"></div>
					</div>
					<!-- Total Payment Pending Today -->

					<!-- Total Pending Orders -->
					<div class="col-md-2 col-sm-6 col-xs-6">
						<div class="gxcpl-card gxcpl-card-white gxcpl-shadow-1">
							<div class="gxcpl-card-header-small">
								<h5 class="gxcpl-no-margin">Orders</h5>
							</div>
							<div class="gxcpl-card-body">
								<h3 class="gxcpl-no-margin text-center">
									<i class="fa fa-inr"></i> 0.00
								</h3>
							</div>
							<div class="gxcpl-card-footer-small text-center">
								Cancelled #0
							</div>
						</div>
						<div class="gxcpl-ptop-10"></div>
					</div>
					<!-- Total Pending Orders -->

					<!-- Total Customers Today -->
					<div class="col-md-2 col-sm-6 col-xs-6">
						<div class="gxcpl-card gxcpl-card-white gxcpl-shadow-1">
							<div class="gxcpl-card-header-small">
								<h5 class="gxcpl-no-margin">Customers</h5>
							</div>
							<div class="gxcpl-card-body">
								<h3 class="gxcpl-no-margin text-center">
									<i class="fa fa-inr"></i> 0.00
								</h3>
							</div>
							<div class="gxcpl-card-footer-small text-center">
								Repeat #0
							</div>
						</div>
						<div class="gxcpl-ptop-10"></div>
					</div>
					<!-- Total Customers Today -->

					<!-- Total Expenses Today -->
					<div class="col-md-2 col-sm-6 col-xs-6">
						<div class="gxcpl-card gxcpl-card-white gxcpl-shadow-1">
							<div class="gxcpl-card-header-small">
								<h5 class="gxcpl-no-margin">Expenses</h5>
							</div>
							<div class="gxcpl-card-body">
								<h3 class="gxcpl-no-margin text-center">
									<i class="fa fa-inr"></i> 0.00
								</h3>
							</div>
							<div class="gxcpl-card-footer-small text-center">
								Expense <i class="fa fa-inr"></i> 0
							</div>
						</div>
						<div class="gxcpl-ptop-10"></div>
					</div>
					<!-- Total Expenses Today -->
				</div>

				<hr>

				<div class="row">
					<!-- Shortcuts -->
					<div class="col-md-2">

						<!-- Buttons -->
						<div class="row">
							<div class="col-md-12">
								<strong>QUICK LINKS</strong>
								<div class="gxcpl-ptop-10"></div>
							</div>

							<div class="col-md-12 text-center">
								<button class="btn btn-default gxcpl-shadow-1">
									<i class="fa fa-file-text-o"></i> <strong>CREATE BILL</strong>
								</button>
								<div class="gxcpl-ptop-10"></div>
							</div>

							<div class="col-md-12 text-center">
								<button class="btn btn-default gxcpl-shadow-1">
									<i class="fa fa-file-text-o"></i> <strong>CREATE BILL</strong>
								</button>
								<div class="gxcpl-ptop-10"></div>
							</div>

							<div class="col-md-12 text-center">
								<button class="btn btn-default gxcpl-shadow-1">
									<i class="fa fa-file-text-o"></i> <strong>CREATE BILL</strong>
								</button>
								<div class="gxcpl-ptop-10"></div>
							</div>
						</div>
						<!-- Buttons -->
						<div class="gxcpl-ptop-10"></div>
					</div>
					<!-- Shortcuts -->

					<!--  -->
					<div class="col-md-10">

					</div>
					<!--  -->
				</div>
				<!-- Shortcuts -->

			</div>	
		</div>
		<!-- Content -->
<cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>