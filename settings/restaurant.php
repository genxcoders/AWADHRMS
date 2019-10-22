<?php require_once( '../couch/cms.php' ); ?>
<cms:template title='Restaurant' clonable='1' routable='1' parent="_masterentry_">
	<cms:editable name="business_logo" label="Business Logo" type="securefile" allowed_ext='jpg, jpeg, png, gif' max_size='20000' width='200' quality='90' order='1' thumb_width='100' show_preview='1' use_thumb_for_preview='1' />
	<cms:editable name="business_mobile" label="Business Mobile" type="text" order="2" />
	<cms:editable name="business_landline" label="Business Landline" type="text" order="3" />
	<cms:editable name="business_emailid" label="Business Email Id" type="text" validator="email" order="4" />
	<cms:editable name="business_address" label="Business Address" type="textarea" height='50' no_ss_check="1" required="1" order="5" />
	<cms:editable name="business_website" label="Business Website" type="text" order="6" />

	<cms:route name='list_restaurant' path='' />
	<cms:route name='create_restaurant' path='create' />
    <cms:route name='edit_restaurant' path='{:id}/edit' >
    	<cms:route_validators id='non_zero_integer' />
	</cms:route>
	<cms:route name='delete_restaurant' path='{:id}/delete' >
	    <cms:route_validators id='non_zero_integer' />
	</cms:route>
</cms:template>
<!-- 
	Company Name:	GenXCoders Pvt. Ltd.
	Author Name:	Er Aashish Handa
	Date:			Oct 01, 2019
	Client:			Gaurav Sharma
	Project Name:	AWADH
	Project Type:	Restaurant Management System
-->
<cms:embed 'header.html' />
		<!-- Content -->
		<cms:match_route debug='0' />
		<div class="gxcpl-content-div">
			
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h4 class="gxcpl-no-margin gxcpl-no-padding">
							Master Entry: Restaurant
						</h4>
						<hr class="style7" />
						<div class="gxcpl-ptop-10"></div>
					</div>
					
					<cms:embed "settings/restaurant/<cms:show k_matched_route />.html" />

				</div>
			</div>	
		</div>
		<!-- Content -->

		<!-- Page Modals -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Help Notes</h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingOne">
											<strong>
												<a class="gxcpl-anchor" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													Business Logo & Business Name Convention
												</a>
											</strong>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body">
												<strong>Business Logo: </strong>The logo of your restaurant goes here. This logo will appear on the bill, vendor purchase order, attendance record, payslip, etc. It provides the branding of your business
												<br>
												<strong>Business Name: </strong>Enter the name of your restaurant here. This name will appear on the bill, vendor purchase order, etc.
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingTwo">
											<strong>
												<a class="gxcpl-anchor" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
													Mobile & Landline Convention
												</a>
											</strong>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
											<div class="panel-body">
												<strong>Mobile & Landline: </strong>Do not add a preceeding 0 or +91 to the mobile/ landline number.
												<br>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingThree">
											<strong>
												<a class="gxcpl-anchor" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
													Restaurant Name Convention
												</a>
											</strong>
										</div>
										<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
											<div class="panel-body">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default gxcpl-btn ripple btn-xs" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Page Modals -->

		<!-- Site Content -->

<cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>