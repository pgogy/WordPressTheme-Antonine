<p id="infoClose" class="holderclose"><span><i class="fa fa-times"></i></span></p>
<div id="infoform">
`<?PHP
	if(get_theme_mod("info")=="on"){
?>
<h1><i class="fa fa-info"></i></h1><p><?PHP echo __("shows this page", "antonine"); ?></p>
<?PHP
	}
	if(get_theme_mod("menu")=="on"){
?>
<h1><i class="fa fa-bars"></i></h1><p><?PHP echo __("shows this page", "antonine"); ?></p>
<?PHP
	}
	if(get_theme_mod("search")=="on"){
?>
<h1><i class="fa fa-search"></i></h1><p><?PHP echo __("shows a search box", "antonine"); ?></p>
<?PHP
	}
	if(get_theme_mod("updates")=="on"){
?>
<h1><i class="fa fa-globe"></i></h1><p><?PHP echo __("shows site updates, and will turn red when new ones exist", "antonine"); ?></p>
<?PHP
	}
	if(get_theme_mod("filters")=="on"){
?>
<h1><i class="fa fa-sliders"></i></h1><p><?PHP echo __("shows a site filter (only on the home page)", "antonine"); ?></p>
<?PHP
	}
	if(get_theme_mod("comments")=="on"){
?>
<h1><i class="fa fa-commenting"></i></h1><p><?PHP echo __("shows the 50 most recent comments", "antonine"); ?></p>

<?PHP
	}
	if(get_theme_mod("widgets")=="on"){
?>
<h1><i class="fa fa-sitemap"></i></h1><p><?PHP echo __("shows extra site information", "antonine"); ?></p>

<?PHP
	}
	if(get_theme_mod("files")=="on"){
?>
<h1><i class="fa fa-folder"></i></h1><p><?PHP echo __("shows files hosted on the site", "antonine"); ?></p>

<?PHP
	}
	if(get_theme_mod("accessibility")=="on"){
?>
<h1><i class="fa fa-eye"></i></h1><p><?PHP echo __("shows accessibility options", "antonine"); ?></p>

<?PHP
	}
	if(get_theme_mod("subscribe")=="on"){
?>
<h1><i class="fa fa-envelope"></i></h1><p><?PHP echo __("shows information on subscribing to this site", "antonine"); ?></p>

<?PHP
	}
?>
</div>