<p id="accessClose" class="holderclose"><span><i class="fa fa-times"></i></span></p>
<h2><?PHP echo __("Accessibility", 'antonine'); ?></h2>
<div id="accessform">
	<div id="basic_accessibility_widget_options">
		<p>
			Background Colour
		</p>
		<p>
			<input type='text' id="basic_accessibility_background-color" />
			<input type='hidden' id="basic_accessibility_background-color_default" value="<?PHP echo get_theme_mod('site_allsite_background_colour'); ?>" />
			<button id="basic_accessibility_widget_restore_background">Restore</button>
		</p>
		<p>
			Text Colour
		</p>
		<p>
			<input type='text' id="basic_accessibility_color" />
			<input type='hidden' id="basic_accessibility_color_default" value="<?PHP echo get_theme_mod('site_alltext_colour'); ?>" />
			<button id="basic_accessibility_widget_restore_colour">Restore</button>
		</p>
		<p>
			Text Size : <span id="basic_accessibility_font-size_display"></span>
		</p>
		<p>
			<div id="access-font-size"></div>
		</p>
		<p>
			<input type='hidden' id="basic_accessibility_font-size_default" value="14px" />
			<button id="basic_accessibility_widget_font-size_restore">Restore</button>
		</p>
		<button id="basic_accessibility_widget_default">Default Settings</button>
	</div>
</div>