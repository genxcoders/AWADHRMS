<?php require_once( '../couch/cms.php' ); ?>

<cms:template clonable='1' title='Users' routable='1' hidden='1' parent="_extusers_">
    <!-- 
        If additional fields are required for users, they can be defined here in the usual manner.
    -->        
    <cms:editable name='user_photo' label='Photo' type='securefile' allowed_ext='jpg, jpeg, png, gif' max_size='20000' type='securefile' width='200' quality='90' order='1' thumb_width='100' show_preview='1' use_thumb_for_preview='1' />
    <cms:editable name='user_fname' label='First Name' type='text' order='1' />
    <cms:editable name='user_lname' label='Last Name' type='text' order='2' />
    <cms:editable name='user_gender' label='Gender' type='relation' masterpage='gender/gender.php' has='one' order='3' />
    <cms:editable name='user_mobile' label='Mobile' type='text' validator='non_negative_integer | exact_len=10' order='4' />
    <cms:editable name='user_aadhaar' label='Aadhaar' type='securefile' allowed_ext='jpg, jpeg, png, gif' max_size='20000' type='securefile' width='200' quality='90' thumb_width='100' show_preview='1' use_thumb_for_preview='1' order='5' />
    <cms:editable name='user_fingerprint' label='Fingerprint Document' type='securefile' allowed_ext='jpg, jpeg, png, gif' max_size='20000' type='securefile' width='200' quality='90' thumb_width='100' show_preview='1' use_thumb_for_preview='1' order='6' />
    <cms:editable name='user_attendance_machine_id' label='Biometric Machine Id' type='text' validator='non_negative_integer | max_len=3' order='7' />
    <cms:editable name='user_department' label='Department' type='relation' masterpage='department/department.php' has='one' order='8' />
    <cms:editable name='user_designation' label='Designation' type='relation' masterpage='designation/designation.php' has='one' order='9' />
    <cms:editable name='user_manager' label='Reports to (Manager)' type='relation' masterpage=k_user_template has='one' order='10' />
    <cms:editable name='user_active_status' label='Employment Status' type='checkbox' opt_values='Yes=1' opt_selected='' order='11' />

    <cms:route name='list_employee' path='' />
	<cms:route name='create_employee' path='create' />
    <cms:route name='edit_employee' path='{:id}/edit' >
    	<cms:route_validators id='non_zero_integer' />
	</cms:route>
	<cms:route name='delete_employee' path='{:id}/delete' >
	    <cms:route_validators id='non_zero_integer' />
	</cms:route>
</cms:template>
<cms:embed 'header.html' />
		<!-- Content -->
		<cms:match_route debug='0' />
		<div class="gxcpl-content-div">
			
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h4 class="gxcpl-no-margin gxcpl-no-padding">
							Master Entry: Employee (<cms:show usertype />)
						</h4>
						<hr class="style7" />
						<div class="gxcpl-ptop-10"></div>
					</div>
					
					<cms:embed "users/<cms:show k_matched_route />.html" />

				</div>
			</div>	
		</div>
		<!-- Content -->
<cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>