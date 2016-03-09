<p id="searchClose" class="holderclose"><span><i class="fa fa-times"></i></span></p>
<div id="searchform">
	<form action="<?PHP echo home_url(); ?>" method="GET">
		<label for="searchbox"><?PHP echo __("Search for", "antonine"); ?></label>
		<input id="searchbox" type="text" class='antonine_search_box' name="s" value="<?PHP echo __("Enter term....", "antonine"); ?>" />
		<input type="submit" value="<?PHP echo __("Search", "antonine"); ?>" />
	</form>
</div>