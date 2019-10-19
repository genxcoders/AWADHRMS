<?php require_once( '../couch/cms.php' ); ?>
<cms:template title='Restaurant' clonable='1' routable='1' parent="_masterentry_">
	<cms:route name='list_gender' path='' />
	<cms:route name='create_gender' path='create' />
    <cms:route name='edit_gender' path='{:id}/edit' >
    	<cms:route_validators id='non_zero_integer' />
	</cms:route>
	<cms:route name='delete_gender' path='{:id}/delete' >
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
		<div class="gxcpl-content-div">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h4 class="gxcpl-no-margin gxcpl-no-padding">
							Master Settings: Restaurant <span class="pull-right"><a href="#!" class="gxcpl-anchor" data-toggle="modal" data-target="#myModal"><i class="fa fa-info-circle"></i></a></span>
						</h4>
						<hr class="style7" />
						<div class="gxcpl-ptop-10"></div>
					</div>

					<!-- Restaurant: Add New -->
					<div class="col-md-3">
						<div class="gxcpl-card gxcpl-card-shadow gxcpl-card-white">
							<div class="gxcpl-card-header">
								<h4 class="gxcpl-no-margin">
									Restaurant Details
								</h4>
							</div>
							<div class="gxcpl-card-body">
								<div class="gxcpl-ptop-20"></div>
								<div class="row">
									<div class="col-md-12">
										<label class="gxcpl-label">
											Restaurant Logo
										</label>
									</div>
									<div class="col-md-12">
										<input class="gxcpl-input-text gxcpl-transition" type="file" name="business_logo" />
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>

								<div class="row">
									<div class="col-md-12">
										<label class="gxcpl-label">
											Restaurant Name
										</label>
									</div>
									<div class="col-md-12">
										<input class="gxcpl-input-text gxcpl-transition" type="text" name="business_name" />
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>

								<div class="row">
									<div class="col-md-12">
										<label class="gxcpl-label">
											Restaurant Mobile
										</label>
									</div>
									<div class="col-md-12">
										<input class="gxcpl-input-text gxcpl-transition" type="text" name="business_mobile" />
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>

								<div class="row">
									<div class="col-md-12">
										<label class="gxcpl-label">
											Restaurant Landline
										</label>
									</div>
									<div class="col-md-12">
										<input class="gxcpl-input-text gxcpl-transition" type="text" name="business_landline" />
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>

								<div class="row">
									<div class="col-md-12">
										<label class="gxcpl-label">
											Restaurant Email Id
										</label>
									</div>
									<div class="col-md-12">
										<input class="gxcpl-input-text gxcpl-transition" type="text" name="business_emailid" />
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>

								<div class="row">
									<div class="col-md-12">
										<label class="gxcpl-label">
											Restaurant Address
										</label>
									</div>
									<div class="col-md-12">
										<textarea class="gxcpl-input-text gxcpl-transition" name="business_address" ></textarea>
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>

								<div class="row">
									<div class="col-md-12">
										<label class="gxcpl-label">
											Business Website URL
										</label>
									</div>
									<div class="col-md-12">
										<input class="gxcpl-input-text gxcpl-transition" type="text" name="business_website" />
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>

								<div class="gxcpl-ptop-20"></div>
							</div>
							<div class="gxcpl-card-footer text-center">
								<button class="btn btn-default gxcpl-btn ripple">
									<i class="fa fa-save"></i> SAVE
								</button>
							</div>
						</div>
					</div>
					<!-- Restaurant: Add New -->

					<!-- Restaurant: List -->
					<div class="col-md-9">
						<!-- Group: List -->
						<table class="gxcpl-card-shadow gxcpl-card-white">
							<thead class="gxcpl-table-header">
								<tr>
									<th width="65px">
										Sr. No.
									</th>
									<th width="*">
										Restaurant Name
									</th>
									<th width="*">
										Contact Number
									</th>
									<th width="30%">
										Action
									</th>
								</tr>
							</thead>
							<tbody class="gxcpl-table-body">
								<tr>
									<td class="text-center">
										1.
									</td>
									<td>
										<a class="example-image-link gxcpl-anchor" href="http://lokeshdhakar.com/projects/lightbox2/images/image-1.jpg" data-lightbox="example-1">
											<img class="example-image gxcpl-list-thumbnail" src="http://lokeshdhakar.com/projects/lightbox2/images/thumb-1.jpg" alt="image-1" />
										</a> Awadh
									</td>
									<td>
										+91-1234567890
									</td>
									<td>
										<div class="btn-group btn-group-xs" role="group" aria-label="...">
											<button type="button" class="btn btn-default">
												<i class="fa fa-edit"></i>
											</button>
											<button type="button" class="btn btn-default">
												<i class="fa fa-trash"></i>
											</button>
										</div>
									</td>
								</tr>
							</tbody>
							<tfoot class="gxcpl-table-footer">
								<tr>
									<td colspan="4" class="text-center">
										<div class="btn-group btn-group-xs" role="group" aria-label="...">
											<button type="button" class="btn btn-default">
												<
											</button>
											<button type="button" class="btn btn-default">
												1
											</button>
											<button type="button" class="btn btn-default">
												2
											</button>
											<button type="button" class="btn btn-default">
												>
											</button>
										</div>
									</td>
								</tr>
							</tfoot>
						</table>
						<!-- Group: List -->
						<div class="gxcpl-ptop-20"></div>
					</div>
					<!-- Restaurant: List -->
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