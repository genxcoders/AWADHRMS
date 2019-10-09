<?php require_once( '../couch/cms.php' ); ?>
<cms:template title='Modal' parent='_test_' />
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">	
</head>
<body>
	<cms:pages masterpage="department/department.php">
	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="<cms:show k_page_id />">
		<cms:show k_page_title /> <small><em>{<cms:show k_page_id />}</em></small>
	</button>
	<div style="padding-top: 10px;"></div>
	</cms:pages>


	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="exampleModalLabel">New message</h4>
				</div>
				<div class="modal-body">
					<cms:pages masterpage='department/department.php' page_id=k_page_id limit='1' show_future_entries='1' >

					   	<cms:form
							masterpage='department/department.php'
							mode='edit'
							page_id=k_page_id
							method='post'
							anchor='0'
						>
							<cms:show k_page_id />::<cms:show k_template_name />
							<br>
							<cms:if k_success>
								<!-- Delete the specified page -->
								<cms:db_delete masterpage=k_template_name page_id=k_page_id /> 
								<cms:redirect k_template_link />     
							<cms:else_if k_error />
								<cms:each k_error >
									<br><cms:show item />
								</cms:each>
							</cms:if>

							<input type="submit" name="submit" value="Delete page"/>
						</cms:form>

					</cms:pages>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="../assets/js/jquery-2.0.0.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
	<script type="text/javascript">
		$('#exampleModal').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) // Button that triggered the modal
			var recipient = button.data('whatever') // Extract info from data-* attributes
			// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
			// $(document).on('click','#delete_page',function(e) {
				// event.preventDefault();
				// $.ajax({
				// 	url:"ajax_page_to_delete.php",
				// 	data:{mytemplate:'<cms:show k_template_name />', id:button.data('whatever')},
				// 	contentType:"application/json; charset=utf-8",
				// 	success: function(response)
				// 	{
				// 		console.log(response);
				// 	}
				// });
			// });
			// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
			// var modal = $(this)
			// modal.find('.modal-title').text('New message to ' + recipient)
			// modal.find('.modal-body input').val(recipient)
		})
	</script>

</body>
</html>
<?php COUCH::invoke( ); ?>