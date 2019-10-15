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
	<cms:if k_logged_in >

        <!-- this 'login' template also handles 'logout' requests. Check if this is so -->
        <cms:set action="<cms:gpc 'act' method='get'/>" />
    
        <cms:if action='logout' >
            <cms:process_logout />
        <cms:else />  
            <!-- what is an already logged-in member doing on the login page? Send back to homepage. -->
            <cms:redirect k_site_link />
        </cms:if>
    
    <cms:else />
		<!-- Site Content -->
		<div class="gxcpl-center-div">
			<div class="row">
				<div class="col-md-12">
					<img src="../assets/images/awadh.png" class="gxcpl-login-logo" />
				</div>
			</div>
			
			<div class="gxcpl-ptop-10"></div>

			<cms:form method="post" name="login-form" id="login-form" anchor='0'>
			<cms:if k_success >
                <!-- 
                    The 'process_login' tag below expects fields named 
                    'k_user_name', 'k_user_pwd' and (optionally) 'k_user_remember', 'k_cookie_test'
                    in the form
                -->
                <cms:process_login />
                
            </cms:if>
            
            <cms:if k_error >
                <h3><font color='red'><cms:show k_error /></font></h3>
            </cms:if>
			<div class="gxcpl-card gxcpl-card-shadow gxcpl-card-white">
				<div class="gxcpl-card-header">
					<h4 class="gxcpl-no-margin text-center">
						Login
					</h4>
				</div>
				<div class="gxcpl-card-body">
					
					<div class="row">
						<div class="col-md-12">
							<label class="gxcpl-label">
								User Type
							</label>
						</div>
						<div class="col-md-12">
							<select class="gxcpl-transition" name="usertype">
								<option id="-" selected disabled>Select</option>
								<cms:pages masterpage="designation/designation.php">
								<option id="<cms:show k_page_id />" value="<cms:show k_page_id />"><cms:show k_page_title /></option>
								</cms:pages>
								<!-- <option id="owner">Chef</option>
								<option id="owner">Cashier</option>
								<option id="owner">Captain</option>
								<option id="owner">Waiter</option> -->
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
							<cms:input class="gxcpl-input-text gxcpl-transition" type="text" name="k_user_name" />
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
							<cms:input class="gxcpl-input-text gxcpl-transition" type="password" name="k_user_pwd" />
						</div>
					</div>
					
					<input type="hidden" name="k_cookie_test" value="1" />
					
					<div class="gxcpl-ptop-10"></div>
					
				</div>
				<div class="gxcpl-card-footer text-center">
					<button class="btn btn-success gxcpl-btn btn-sm" type="submit">
						<i class="fa fa-sign-in"></i> Login
					</button>
				</div>
			</div>
			</cms:form>

			<div class="gxcpl-ptop-10"></div>

			<cms:if k_user_lost_password_template >
			<center>
				<button class="btn btn-default ripple gxcpl-btn" type="button" onclick="window.location.href='<cms:link k_user_lost_password_template />';">
					<i class="fa fa-power-off"></i> Reset Password
				</button>
			</center>
			</cms:if>

		</div>
		<!-- Site Content -->
	</cms:if>
		
<cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>