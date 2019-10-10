							<cms:form
						        masterpage=k_template_name
						       	mode='edit'
					        	page_id=rt_id
						        enctype='multipart/form-data'
						        method='post'
						        anchor='0'
						        id='edit_department_form'
						        class="cart-form"
						        >

						        <cms:if k_success >
						            <cms:db_persist_form
						                _invalidate_cache='0'
						                _auto_title='0'
						                k_page_title = "<cms:show frm_k_page_title />"
						                k_page_name = "<cms:show k_page_title />"
						            />
						            <cms:if k_success >
							            <cms:validate_nonce my_action />
							            <cms:redirect url="<cms:route_link 'list_department' />" />
							        </cms:if>
						        </cms:if>

								<div class="gxcpl-card gxcpl-card-white gxcpl-card-shadow">
									<div class="gxcpl-card-header">
										<h5 class="gxcpl-no-margin">
											Add New / Edit Department
										</h5>
									</div>
									<div class="gxcpl-card-body">

										<cms:if k_success>
											Success
										</cms:if>
										
										<cms:if k_error >
											<div class="row">
												<div class="col-md-12">
													<div class="alert alert-danger alert-dismissible">
														<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
														<cms:each k_error >
										                    <cms:show item /><br>
										                </cms:each>
													</div>
												</div>
											</div>
										</cms:if>

										<div class="row">
											<div class="col-md-12">
												<label class="gxcpl-label">
													Department Title
												</label>
											</div>
											<div class="col-md-12">
												<cms:input class="gxcpl-input-text gxcpl-transition" type="bound" name="k_page_title" />
											</div>
										</div>
										<div class="gxcpl-ptop-10"></div>
									</div>
									<div class="gxcpl-card-footer">
										<center>
											<button class="btn btn-default gxcpl-btn ripple" type="submit">
												<i class="fa fa-save"></i> Save
											</button>
										</center>
									</div>
								</div>

							</cms:form>