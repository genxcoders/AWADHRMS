<?php require_once( '../couch/cms.php' ); ?>
<cms:template title='Certifications' clonable='1' routable='1' parent="_mastersettings_">
	
	<cms:editable name='certificate_number' label='Certificate Number' type='text' order='1' />
	<cms:editable name='certificate_image' label='Certificate Image' type='securefile' show_preview='1' preview_width='100' order='2' />

	<cms:route name='list_certifications' path='' />
	<cms:route name='create_certifications' path='create' />
    <cms:route name='edit_certifications' path='{:id}/edit' >
    	<cms:route_validators id='non_zero_integer' />
	</cms:route>
	<cms:route name='delete_certifications' path='{:id}/delete' >
	    <cms:route_validators id='non_zero_integer' />
	</cms:route>
</cms:template>
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
		<cms:match_route debug='0' />
		<div class="gxcpl-content-div">

			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h4 class="gxcpl-no-margin gxcpl-no-padding">
							Master Settings: Certifications
						</h4>
						<hr class="style7" />
						<div class="gxcpl-ptop-10"></div>
					</div>
					
					<cms:embed "settings/certifications/<cms:show k_matched_route />.html" />
						
				</div>
			</div>	
		</div>
		<!-- Content -->
<cms:embed 'footer.html' />
<?php COUCH::invoke( K_IGNORE_CONTEXT ); ?>