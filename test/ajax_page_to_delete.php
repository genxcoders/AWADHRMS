<?php require_once( '../couch/cms.php' ); ?>
<cms:template title='Modal - Delete Id' parent='_test_' />
<cms:set my_delete_page_id="<cms:gpc 'id' method='get' />" scope="global" />
<cms:set mytemplate="<cms:gpc 'mytemplate' method='get' />" scope="global" />

    <cms:if mytemplate && my_delete_page_id >
        <cms:db_delete masterpage=mytemplate page_id=my_delete_page_id />
        <cms:abort>Page Deleted</cms:abort>
    </cms:if>
<?php COUCH::invoke( ); ?>