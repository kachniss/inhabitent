<?php
	$args = array(
		'name' => 'Footer Sidebar',
		'id' => 'footer-sidebar',
		'description' => 'Widget footer area',
		'before_widget' => '<div class "widget-area">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    );  
    register_sidebar($args);        
?>