<?php require_once( '../couch/cms.php' ); ?>

<cms:template clonable='1' title='Users' hidden='1' parent="_extusers_">
    <!-- 
        If additional fields are required for users, they can be defined here in the usual manner.
    -->        
    <cms:editable name='fname' label='First Name' type='text' order='1' />
    <cms:editable name='lname' label='Last Name' type='text' order='2' />
    <cms:editable name='user_gender' label='Gender' type='relation' masterpage='gender/gender.php' has='one' order='3' />
</cms:template>

<?php COUCH::invoke(); ?>