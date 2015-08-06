<?php
register_sidebar( array(
  'name' => 'Sidebar-Widget-1',
  'id' => 'sidebar-widget-1',
  'description' => 'This is sidebar widget area. ',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
) );
?>
