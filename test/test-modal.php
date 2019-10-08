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
	<button type="button" class="btn btn-success openBtn" id="<cms:show k_page_id />/delete"><cms:show k_page_title /></button>
	</cms:pages>



	<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Bootstrap Modal with Dynamic Content</h4>
                </div>
                <div class="modal-body">

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
		$('.openBtn').on('click',function(){
		    /*$('.modal-body').load('content.html',function(){
		        $('#myModal').modal({show:true});
		    })*/
			var id = $(this).attr('id');
		    $('.modal-body').load('<cms:embed "department/<cms:show k_matched_route />.html" />'+id,function(){
		        $('#myModal').modal({show:true});
		    });
		});
	</script>

</body>
</html>
<?php COUCH::invoke( ); ?>