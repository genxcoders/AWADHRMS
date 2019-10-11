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
			<cms:set my_action="delete_page_<cms:show page_to_delete />" scope='global' />
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-page-id="<cms:show k_page_id />" data-nonce="<cms:create_nonce my_action />" style="width: 200px;">
				<cms:show k_page_title /> <br><small><em>{Page Id::<cms:show k_page_id />}</em></small>
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
						<cms:form id="<div id='pageid'></div>">

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
			$('#exampleModal').on('show.bs.modal', function (event) {
				var button = $(event.relatedTarget) // Button that triggered the modal
				var page_id = button.data('page-id')
     			var nonce = button.data('nonce')

     			
     			
				var modal = $(this)
				modal.find('.modal-body .my_nounce').text('New message to ' + nonce)
				modal.find('.modal-body form#pageid').val(page_id)
			})
		</script>

	</body>
</html>
<?php COUCH::invoke( ); ?>