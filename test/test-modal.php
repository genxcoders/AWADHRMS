<?php require_once( '../couch/cms.php' ); ?>
<cms:template title='Modal' parent='_test_' />
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">	
	<link rel="stylesheet" type="text/css" href="../assets/css/gxcpl.css">	
	<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">	
</head>
<body>
	<table class="gxcpl-card-shadow gxcpl-card-white">
		<thead class="gxcpl-table-header">
			<tr>
				<th width="65px">
					Sr. No.
				</th>
				<th width="*">
					Department Name
				</th>
				<th width="30%">
					Action
				</th>
			</tr>
		</thead>

		<tbody class="gxcpl-table-body">
			<cms:pages masterpage='department/department.php' show_future_entries='1' >
			<cms:no_results>
			<tr>
				<td colspan="3" class="text-center">
					- No Departments Found -
				</td>
			</tr>
			</cms:no_results>
			<tr>
				<td class="text-center">
					<cms:show k_absolute_count />.
				</td>
				<td>
					<cms:show k_page_title /> [<cms:show k_page_id />]
				</td>
				<td>
					<div class="btn-group btn-group-xs" role="group" aria-label="...">
						<button class="btn btn-success myModal" id='<cms:show k_page_id />'> 
						    <i class="fa fa-search-plus"></i> 
						    Order Preview
						</button>

						<cms:ignore>
						<button type="button" class="btn btn-danger gxcpl-btn" data-toggle="modal" data-target="#exampleModal" data-whatever="<cms:show k_page_id />">
							<i class="fa fa-trash"></i> Delete
						</button>
						</cms:ignore>
						
					</div>
				</td>
			</tr>
			</cms:pages>
		</tbody>
		<tfoot class="gxcpl-table-footer">
			<tr>
				<td colspan="3" class="text-center">
					ID::<cms:show my_page_id />
				</td>
			</tr>
		</tfoot>
	</table>


	

	<div class="modal fade myModal" id="" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="exampleModalLabel">New message</h4>
				</div>
				<div class="modal-body">
					Modal BODY					
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
		$(".updateBtn").click(function(){
			var ruleID = this.id;
			$.ajax({
				type: 'get',
				url: 'ajax_page_to_delete.php',
				success: function(data) {
					$('#myModal').modal({'show' : true});
					console.log(data);
				} 
			});
		});
	</script>
	
</body>
</html>
<?php COUCH::invoke( ); ?>