<?php require_once( '../couch/cms.php' ); ?>
<cms:template title='Modal - Delete Id' parent='_test_' />
<cms:set my_edit_page_id="<cms:gpc 'id' method='get' />" scope="global" />
<cms:set mytemplate="<cms:gpc 'mytemplate' method='get' />" scope="global" />

    <cms:if mytemplate && my_edit_page_id >
    {
        <cms:abort><cms:show my_edit_page_id /></cms:abort>
    }
    </cms:if>
<?php COUCH::invoke( ); ?>