<?php require_once( '../couch/cms.php' ); ?>
<cms:template title='Modal - Delete Id' parent='_test_' />
<cms:set my_delete_page_id="<cms:gpc 'id' method='get' />" scope="global" />
<cms:set mytemplate="<cms:gpc 'mytemplate' method='get' />" scope="global" />
<cms:db_persist
    _auto_title             =   '0'
    _invalidate_cache       =   '0'
    _masterpage             =   '<cms:show mytemplate />'
    _mode                   =   'edit'
    _page_id				=	'<cms:show my_delete_page_id />'
>
	<cms:if k_error >
        <cms:abort>
            <cms:each k_error >
                <br><cms:show item />
            </cms:each>
        </cms:abort>
    <cms:else_if k_success />
        <cms:abort>Page Deleted</cms:abort>
    </cms:if>
</cms:db_persist>
<?php COUCH::invoke( ); ?>