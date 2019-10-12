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
			<cms:set page_to_delete=k_page_id scope='global' />
			Page to delete=<cms:show page_to_delete /><br>
			<cms:set my_action="delete_page_<cms:show page_to_delete />" scope='global' />
			My Action=<cms:show my_action /><br>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-page-id="<cms:show k_page_id />" data-nonce="<cms:create_nonce my_action />" style="width: 200px;" id="delete_page_id">
				<cms:show k_page_title /> <br><small><em>{Page Id::<cms:show k_page_id />}</em></small>
			</button>
			<div style="padding-top: 10px;"></div>
		</cms:pages>


		<div class="modal fade" id="delete_page_id" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="exampleModalLabel">New message</h4>
					</div>
					<div class="modal-body">
						<cms:form id="<div id='pageid'></div>">
							<span></span>
						</cms:form>
						<cms:input name='nonce' class='my_nounce' type='text' value="<cms:create_nonce my_action />" />
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Send message</button>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="../assets/js/jquery-2.0.0.js"></script>
		<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
		<script type="text/javascript">
			

		    $(document).on('click','#delete_page_id',function(e) {
		    	var button = $(event.relatedTarget) // Button that triggered the modal
				var page_id = button.data('page-id')
 				var nonce = button.data('nonce')
				e.preventDefault();
				$.ajax({
					url:"<cms:link url='department/delete_department.html' />",
					data:{page_id:"button.data('page-id')", my_nonce:"button.data('nonce')"},
					contentType:"application/json; charset=utf-8",
					async: false,
			    	cache: false,
					success: function(response)
					{
						var modal = $(this)
						modal.find('.modal-body .my_nounce').text('New message to ' + nonce)
						modal.find('.modal-body form span').val(page_id)
						alert(response);
					}
				});
 			});
		</script>

	</body>
</html>
<?php COUCH::invoke( ); ?>