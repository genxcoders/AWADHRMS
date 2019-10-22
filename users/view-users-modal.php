<?php require_once( '../couch/cms.php' ); ?>
<cms:template title='Users Modal' parent="_extusers_" />
<cms:no_cache />

<cms:set view_empid="<cms:gpc 'empid' method='get' />" scope="global" />
		
<cms:pages masterpage='users/index.php' id=view_empid show_future_entries='1' limit='1' >
	
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><cms:show user_fname /> <cms:show user_lname /></h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-3">
						<div class="row">
							<div class="col-md-12">
								<div class="gxcpl-emp-modal-image-container">
									<img class="gxcpl-emp-modal-image gxcpl-navbar-shadow" src="../assets/images/profile-image.jpg" />
								</div>
							</div>
						</div>
						<div class="gxcpl-ptop-10"></div>

						<div class="row">
							<div class="col-md-12 text-center">
								<label class="gxcpl-label gxcpl-no-margin text-muted">
									Work Location
								</label>
							</div>
							<div class="col-md-12 text-center">
								<cms:related_pages 'user_location'>
									<cms:show k_page_title />
								</cms:related_pages>
							</div>
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
								<cms:show user_fname /> <cms:show user_lname />
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
								<cms:related_pages 'user_gender' >
								<cms:show k_page_title />
								</cms:related_pages>
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
								+91-<cms:show user_mobile />
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
								<cms:show extended_user_email />
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
								<cms:if user_photo eq '1'>
									<cms:show_securefile 'user_aadhaar'>
									<a class="example-image-link gxcpl-anchor" href="<cms:securefile_link file_id />" data-lightbox="example-<cms:show k_user_id />">
										<img class="example-image gxcpl-aadhaar-card gxcpl-navbar-shadow" src="<cms:securefile_link file_id />" alt="Aadhaar Card of <cms:show user_fname /> <cms:show user_lname />" />
									</a>
									</cms:show_securefile>
								<cms:else />
									<img class="gxcpl-aadhaar-card gxcpl-navbar-shadow" src="<cms:show k_site_link />/assets/images/no-image-card.jpg" />
								</cms:if>
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
								<cms:if user_photo eq '1'>
									<cms:show_securefile 'user_fingerprint'>
									<a class="example-image-link gxcpl-anchor" href="<cms:securefile_link file_id />" data-lightbox="example-<cms:show k_user_id />">
										<img class="example-image gxcpl-aadhaar-card gxcpl-navbar-shadow" src="<cms:securefile_link file_id />" alt="Aadhaar Card of <cms:show user_fname /> <cms:show user_lname />" />
									</a>
									</cms:show_securefile>
								<cms:else />
									<img class="gxcpl-aadhaar-card gxcpl-navbar-shadow" src="<cms:show k_site_link />/assets/images/no-image-card.jpg" />
								</cms:if>
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
								<cms:show user_attendance_machine_id />
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
								<cms:related_pages 'user_department'>
								<cms:show k_page_title />
								</cms:related_pages>
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
								<cms:related_pages 'user_designation'>
								<cms:show k_page_title />
								</cms:related_pages>
							</div>
						</div>
						<div class="gxcpl-ptop-10"></div>

						<div class="row">
							<div class="col-md-12">
								<label class="gxcpl-label gxcpl-no-margin text-muted">
									Reports To (Manager)
								</label>
							</div>
							<div class="col-md-12">
								<cms:related_pages 'user_manager' >
								<cms:no_results>
								Does not report to anyone.
								</cms:no_results>
								<cms:show k_page_title />
								</cms:related_pages>
							</div>
						</div>
						<div class="gxcpl-ptop-10"></div>

						<div class="row">
							<div class="col-md-12">
								<label class="gxcpl-label gxcpl-no-margin text-muted">
									Employment Status
								</label>
							</div>
							<div class="col-md-12">
								<cms:if user_active_status eq '1'>
									<h2 class="gxcpl-emp-status-active gxcpl-no-margin">
										ACTIVE
									</h2>
								<cms:else />
									<h2 class="gxcpl-emp-status-inactive gxcpl-no-margin">
										INACTIVE
									</h2>
								</cms:if>
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
</cms:pages>
<?php COUCH::invoke(); ?>								