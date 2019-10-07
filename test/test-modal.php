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
	<button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal" data-whatever="<cms:show k_page_id />">Open <cms:show k_page_title /> [<cms:show k_page_id />]</button><br>
	</cms:pages>



	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="exampleModalLabel">New message</h4>
				</div>
				<div class="modal-body">
					<cms:set my_page_id="<span></span>" scope="global" />
					ASD::<cms:show my_page_id />
					<cms:form 
                            masterpage='department/department.php'
                            mode='edit'
                            page_id='<cms:show my_page_id />'
                            method='post' 
                            anchor='0'
                            id='delete_department_form'
                            name='delete_department_form'
                        >
                        <cms:show k_page_id />
                    </cms:form>
					
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
			var recipient = button.data('whatever') // Extract info from data-* attributes
			// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
			// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
			var modal = $(this)
			modal.find('.modal-title').text('New message to ' + recipient)
			modal.find('.modal-body input').val(recipient)
			modal.find('span').text(recipient);
		})
	</script>

</body>
</html>
<?php COUCH::invoke( ); ?>