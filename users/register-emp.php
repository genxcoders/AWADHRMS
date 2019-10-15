<?php require_once( '../couch/cms.php' ); ?>
<cms:template title='Registration' hidden='1' parent="_extusers_" />
<!-- 
	Company Name:	GenXCoders Pvt. Ltd.
	Author Name:	Er Aashish Handa
	Date:			Oct 04, 2019
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
							Register Employee <span class="pull-right"><a href="#!" class="gxcpl-anchor" data-toggle="modal" data-target="#myModal"><i class="fa fa-info-circle"></i></a></span>
						</h4>
						<hr class="style7" />
						<div class="gxcpl-ptop-10"></div>
					</div>

					<cms:form 
		                masterpage=k_user_template 
		                mode='create'
		                enctype='multipart/form-data'
		                method='post'
		                anchor='0'
		                id='create_user_form'
	                >

	                <cms:if k_success >        

	                    <cms:check_spam email=frm_extended_user_email />            

	                    <cms:db_persist_form 
	                        _invalidate_cache='0'
	                        k_page_title = "<cms:show frm_user_fname />_<cms:show frm_user_lname />"
	                        k_page_name = "<cms:show frm_user_mobile />"
	                    />                    

	                    <cms:if k_success >
	                        <cms:send_mail from="<cms:php>echo K_EMAIL_FROM;</cms:php>" to=frm_extended_user_email subject='New Account Confirmation' debug='1'>
	                            Welcome!
	                            <br>
								Your username is: "<cms:show frm_extended_user_email /> or <cms:show frm_user_mobile />"<br>
								Your password is: "<cms:show frm_extended_user_password />"<br>

								If you have questions or if you need further information please do not hesitate to contact us at any time!<br>

								Your Team
								<cms:show k_site_link />
	                        </cms:send_mail>                   
	                        <cms:if k_success >                 
	                        	<cms:set_cookie 'submit_success_create_gender' value='Employee added successfully.' expire='86400' />
	                        	<cms:redirect k_page_link />
	                        </cms:if>
	                    </cms:if> 
	                </cms:if>
	                <cms:if k_error >
	                	<div class="row">
			                <cms:each k_error >
				                <div class="col-md-6 text-center">
									<div class="alert alert-danger gxcpl-shadow-1">
										<cms:show item />
									</div>
									<div class="gxcpl-ptop-20"></div>
								</div>
							</cms:each>
						</div>
					</cms:if>
					<div class="col-md-3">
						<div class="gxcpl-card gxcpl-card-shadow gxcpl-card-white">
							<div class="gxcpl-card-header">
								<h4 class="gxcpl-no-margin">
									Add Employee
								</h4>
							</div>
							<div class="gxcpl-card-body">
								<cms:if "<cms:not_empty "<cms:get_cookie 'submit_success_create_gender' />" />">
									<div class="row">
										<div class="col-md-12">
											<div class="alert alert-success alert-dismissible">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<strong><cms:get_cookie 'submit_success_create_gender' /></strong>
											</div>
										</div>
									</div>
									<cms:delete_cookie 'submit_success_create_gender' />
								</cms:if>

								<cms:if "<cms:not_empty "<cms:get_cookie 'submit_success_edit_gender' />" />">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="alert alert-success alert-dismissible">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <strong><cms:get_cookie 'submit_success_edit_gender' /></strong>
                                            </div>
                                        </div>
                                    </div>
                                    <cms:delete_cookie 'submit_success_edit_gender' />
                                </cms:if>

								<cms:if "<cms:not_empty "<cms:get_cookie 'submit_success_delete_gender' />" />">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="alert alert-success alert-dismissible">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <strong><cms:get_cookie 'submit_success_delete_gender' /></strong>
                                            </div>
                                        </div>
                                    </div>
                                    <cms:delete_cookie 'submit_success_delete_gender' />
                                </cms:if>

								<div class="row">
									<div class="col-md-12 text-center">
										<label class="gxcpl-label text-muted">
											<u>Personal Information</u>
										</label>
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>

								<div class="row">
									<div class="col-md-12">
										<label class="gxcpl-label">
											Employee Photo
										</label>
									</div>
									<div class="col-md-12">
										<cms:input class="gxcpl-input-text gxcpl-transition" type="bound" name="user_photo" />
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>

								<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<label class="gxcpl-label">
											First Name
										</label>
										<cms:input class="gxcpl-input-text gxcpl-transition" type="bound" name="user_fname" />
									</div>
								
									<div class="col-md-6 col-sm-6 col-xs-6">
										<label class="gxcpl-label">
											Last Name
										</label>
										<cms:input class="gxcpl-input-text gxcpl-transition" type="bound" name="user_lname" />
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>

								<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<label class="gxcpl-label">
											Gender
										</label>
										<cms:input class="gxcpl-input-text gxcpl-transition" type="bound" name="user_gender" />
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6">
										<label class="gxcpl-label">
											Mobile Number
										</label>
										<cms:input class="gxcpl-input-text gxcpl-transition" type="bound" name="user_mobile" />
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>
							</div>

							<div class="gxcpl-card-body">
								<div class="row">
									<div class="col-md-12 text-center">
										<label class="gxcpl-label text-muted">
											<u>Identity Information</u>
										</label>
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>

								<div class="row">
									<div class="col-md-12">
										<label class="gxcpl-label">
											Aadhaar Card
										</label>
									</div>
									<div class="col-md-12">
										<cms:input class="gxcpl-input-text gxcpl-transition" type="bound" name="user_aadhaar" />
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>

								<div class="row">
									<div class="col-md-12">
										<label class="gxcpl-label">
											Finger Print Document
										</label>
									</div>
									<div class="col-md-12">
										<cms:input class="gxcpl-input-text gxcpl-transition" type="bound" name="user_fingerprint" />
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>
							</div>

							<div class="gxcpl-card-body">
								<div class="row">
									<div class="col-md-12 text-center">
										<label class="gxcpl-label text-muted">
											<u>Employment Information</u>
										</label>
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>

								<div class="row">
									<div class="col-md-12">
										<label class="gxcpl-label">
											Employee Machine Id
										</label>
									</div>
									<div class="col-md-12">
										<cms:input class="gxcpl-input-text gxcpl-transition" type="bound" name="user_attendance_machine_id" />
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>

								<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<label class="gxcpl-label">
											Department
										</label>
										<cms:input class="gxcpl-input-text gxcpl-transition" type="bound" name="user_department" />
									</div>

									<div class="col-md-6 col-sm-6 col-xs-6">
										<label class="gxcpl-label">
											Designation
										</label>
										<cms:input class="gxcpl-input-text gxcpl-transition" type="bound" name="user_designation" />
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>

								<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<label class="gxcpl-label">
											Reports To (Manager)
										</label>
										<cms:input class="gxcpl-input-text gxcpl-transition" type="bound" name="user_manager" />
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6">
										<label class="gxcpl-label">
											Employment Status
										</label>
										<br>	
										<cms:input type="bound" name="user_active_status" />
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>

							</div>

							<div class="gxcpl-card-body">
								<div class="row">
									<div class="col-md-12 text-center">
										<label class="gxcpl-label text-muted">
											<u>Login Account Details</u>
										</label>
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>

								<div class="row">
									<div class="col-md-12">
										<label class="gxcpl-label">
											Email
										</label>
									</div>

									<div class="col-md-12">
										<cms:input class="gxcpl-input-text gxcpl-transition" type="bound" name="extended_user_email" />
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>

								<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<label class="gxcpl-label">
											Password
										</label>
										<cms:input class="gxcpl-input-text gxcpl-transition" type="bound" name="extended_user_password" />
									</div>

									<div class="col-md-6 col-sm-6 col-xs-6">
										<label class="gxcpl-label">
											Confirm Password
										</label>
										<cms:input class="gxcpl-input-text gxcpl-transition" type="bound" name="extended_user_password_repeat" />
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>

							</div>

							<div class="gxcpl-card-footer text-center">
								<button class="btn btn-success gxcpl-btn btn-sm" type="submit">
									<i class="fa fa-save"></i> Save
								</button>
							</div>
						</div>
						<div class="gxcpl-ptop-30"></div>
					</div>

					</cms:form>
					<div class="col-md-9">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default gxcpl-card-shadow">
								<div class="panel-heading" role="tab" id="headingOne">
									<strong>
										<a class="gxcpl-anchor" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Department Name #1
										</a>
									</strong>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-2 col-sm-6 col-xs-6">
												<div class="gxcpl-emp-card gxcpl-card-shadow">
													<div class="gxcpl-emp-card-header">
														<img class="gxcpl-emp-photo" src="../assets/images/profile-image.jpg" />
													</div>
													<div class="gxcpl-emp-card-body">
														<div class="gxcpl-emp-card-name text-center">
															Aashish Handa
														</div>
													</div>
													<div class="gxcpl-emp-card-footer text-center">
														<div class="btn-group" role="group" aria-label="...">
															<button type="button" class="btn btn-default btn-sm gxcpl-btn" data-toggle="modal" data-target=".emp-details">
																VIEW
															</button>
															<button type="button" class="btn btn-default btn-sm gxcpl-btn">
																EDIT
															</button>
														</div>
													</div>
												</div>
												<div class="gxcpl-ptop-10"></div>
											</div>

										</div>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default gxcpl-card-shadow">
								<div class="panel-heading" role="tab" id="headingTwo">
									<strong>
										<a class="gxcpl-anchor" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											Department Name #2
										</a>
									</strong>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
										<div class="row">
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default gxcpl-card-shadow">
								<div class="panel-heading" role="tab" id="headingThree">
									<strong>
										<a class="gxcpl-anchor" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											Department Name #3
										</a>
									</strong>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										<div class="row">
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
		<!-- Content -->

		<!-- Site Content -->

		<!-- Employee Detail Modals -->
		<div class="modal fade emp-details" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Aashish Handa</h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-3">
								<div class="gxcpl-emp-modal-image-container">
									<img class="gxcpl-emp-modal-image gxcpl-navbar-shadow" src="../assets/images/profile-image.jpg" />
								</div>
								<div class="gxcpl-ptop-10"></div>
							</div>
							<div class="col-md-3">
								<label class="gxcpl-label">
									Personal Information
								</label>
								<hr class="style7" />

								<div class="row">
									<div class="col-md-12">
										<label class="gxcpl-label gxcpl-no-margin text-muted">
											Name
										</label>
									</div>
									<div class="col-md-12">
										Aashish Handa
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>

								<div class="row">
									<div class="col-md-12">
										<label class="gxcpl-label gxcpl-no-margin text-muted">
											Gender
										</label>
									</div>
									<div class="col-md-12">
										Male
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>

								<div class="row">
									<div class="col-md-12">
										<label class="gxcpl-label gxcpl-no-margin text-muted">
											Mobile
										</label>
									</div>
									<div class="col-md-12">
										+91-898 367 9491
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>

								<div class="row">
									<div class="col-md-12">
										<label class="gxcpl-label gxcpl-no-margin text-muted">
											Email Id
										</label>
									</div>
									<div class="col-md-12">
										aashish@genxcoders.in
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>
								<div class="gxcpl-ptop-30"></div>
							</div>

							<div class="col-md-3">
								<label class="gxcpl-label">
									Identity Information
								</label>
								<hr class="style7" />
								
								<div class="row">
									<div class="col-md-12">
										<label class="gxcpl-label gxcpl-no-margin text-muted">
											Aadhaar Card
										</label>
										<div class="gxcpl-ptop-10"></div>
									</div>
									<div class="col-md-12" style="position: relative;">
										<a class="example-image-link gxcpl-anchor" href="../assets/images/aadhaar.jpg" data-lightbox="example-1">
											<img class="example-image gxcpl-aadhaar-card gxcpl-navbar-shadow" src="../assets/images/aadhaar.jpg" alt="Aadhaar Card of Aashish Handa" />
											<div class="gxcpl-overlay"></div>
										</a>
									</div>
								</div>
								<div class="gxcpl-ptop-20"></div>

								<div class="row">
									<div class="col-md-12">
										<label class="gxcpl-label gxcpl-no-margin text-muted">
											Finger Print Document
										</label>
										<div class="gxcpl-ptop-10"></div>
									</div>
									<div class="col-md-12" style="position: relative;">
										<a class="example-image-link gxcpl-anchor" href="../assets/images/fingerprint-document.png" data-lightbox="example-1">
											<img class="example-image gxcpl-aadhaar-card gxcpl-navbar-shadow" src="../assets/images/fingerprint-document.png" alt="Fingerprints of Aashish Handa" />
											<div class="gxcpl-overlay"></div>
										</a>
									</div>
									<div class="gxcpl-ptop-30"></div>
								</div>
								<div class="gxcpl-ptop-10"></div>

							</div>
							<div class="col-md-3">
								<label class="gxcpl-label">
									Employment Information
								</label>
								<hr class="style7" />
								
								<div class="row">
									<div class="col-md-12">
										<label class="gxcpl-label gxcpl-no-margin text-muted">
											Employee Id
										</label>
									</div>
									<div class="col-md-12">
										GXCPL4369001
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>
							
								<div class="row">
									<div class="col-md-12">
										<label class="gxcpl-label gxcpl-no-margin text-muted">
											Department
										</label>
									</div>
									<div class="col-md-12">
										Management
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>

								<div class="row">
									<div class="col-md-12">
										<label class="gxcpl-label gxcpl-no-margin text-muted">
											Designation
										</label>
									</div>
									<div class="col-md-12">
										Chief Technical Officer
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>

								<div class="row">
									<div class="col-md-12">
										<label class="gxcpl-label gxcpl-no-margin text-muted text-muted">
											Reports To (Manager)
										</label>
									</div>
									<div class="col-md-12">
										Not Applicable
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>

								<div class="row">
									<div class="col-md-12">
										<label class="gxcpl-label gxcpl-no-margin">
											Employment Status
										</label>
									</div>
									<div class="col-md-12">
										<h2 class="gxcpl-emp-status-active gxcpl-no-margin">
											ACTIVE
										</h2>
									</div>
								</div>
								<div class="gxcpl-ptop-10"></div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default gxcpl-btn ripple" data-dismiss="modal">
							<i class="fa fa-times"></i> Close
						</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Employee Detail Modals -->
<cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>