<div id="widget-area" class="widget-area" role="complementary">
	<?php
		if(is_active_sidebar("sidebar-one")){
			dynamic_sidebar("sidebar-one"); 
		}else{
			if ( current_user_can( 'manage_options' ) ) {
				echo "<a href='" . admin_url("widgets.php") . "'>" . __("Add some widgets", "antonine") . "</a>"; 
			}else{
				echo __("Extra information will appear here", "antonine");
			}
		}
	?>
</div><!-- .widget-area -->
