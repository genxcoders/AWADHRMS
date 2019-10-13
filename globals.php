<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Global Site Settings' parent='_masterentry_' executable='0' order='100'>
	<!-- Page Titles -->
	<cms:editable name='page_title' label='Group: Page Titles' type='group' />
		<cms:editable name='page_title_department' label='Department' type='text' group='page_title' order='1' />
		<cms:editable name='page_title_gender' label='Gender' type='text' group='page_title' order='2' />
		<cms:editable name='page_title_designation' label='Designation' type='text' group='page_title' order='3' />
		<cms:editable name='page_title_certification' label='Certifications' type='text' group='page_title' order='4' />
	<!-- Page Titles -->
</cms:template>
<?php COUCH::invoke( ); ?>