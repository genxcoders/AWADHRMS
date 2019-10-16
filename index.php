<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Dashboard'>

</cms:template>
<cms:set usertype="<cms:pages masterpage='users/index.php' id=k_user_id><cms:related_pages 'user_designation'><cms:show k_page_title /></cms:related_pages></cms:pages>" scope='global' />
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
				<div class="row">
					<div class="col-md-12">
						<cms:if usertype eq 'Captain' >
							Welcome Captain
						<cms:else_if usertype eq 'Manager' />
							Hello Manager!
						</cms:if>
					</div>
				</div>
			</div>	
		</div>
		<!-- Content -->
<cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>