<?php
if ( !defined('K_COUCH_DIR') ) die(); // cannot be loaded directly

//require_once( K_COUCH_DIR.'addons/cart/cart.php' );
//require_once( K_COUCH_DIR.'addons/inline/inline.php' );
//require_once( K_COUCH_DIR.'addons/extended/extended-folders.php' );
//require_once( K_COUCH_DIR.'addons/extended/extended-comments.php' );
//require_once( K_COUCH_DIR.'addons/extended/extended-users.php' );
//require_once( K_COUCH_DIR.'addons/routes/routes.php' );
//require_once( K_COUCH_DIR.'addons/jcropthumb/jcropthumb.php' );


// Extended Users
require_once( K_COUCH_DIR.'addons/extended/extended-users.php' );
require_once( K_COUCH_DIR.'addons/cart/session.php' );
require_once( K_COUCH_DIR.'addons/data-bound-form/data-bound-form.php' );

// Template Grouping in Admin Panel
if( defined('K_ADMIN') ){
    $FUNCS->add_event_listener( 'register_admin_menuitems', 'my_register_admin_menuitems' );

    function my_register_admin_menuitems(){
        global $FUNCS;
        
        $FUNCS->register_admin_menuitem( array('name'=>'_extusers_', 'title'=>'Extended Users', 'is_header'=>'1', 'weight'=>'100')  );
        $FUNCS->register_admin_menuitem( array('name'=>'_masterentry_', 'title'=>'Master Entry', 'is_header'=>'1', 'weight'=>'1')  );
        $FUNCS->register_admin_menuitem( array('name'=>'_mastersettings_', 'title'=>'Master Settings', 'is_header'=>'1', 'weight'=>'1')  );
        $FUNCS->register_admin_menuitem( array('name'=>'_test_', 'title'=>'Test Code', 'is_header'=>'1', 'weight'=>'200')  );
    }
}

// CRUD
require_once( K_COUCH_DIR.'addons/routes/routes.php' );