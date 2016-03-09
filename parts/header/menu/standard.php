`<?PHP
	if(get_theme_mod("info")=="on"){
?>
<a><div id="infoShow"><i class="fa fa-info"></i></div></a>
<?PHP
	}
	if(get_theme_mod("menu")=="on"){
		if ( has_nav_menu( "primary" ) ) {
			
			?>
			<div id="menuShow"><i class="fa fa-bars"></i></div>
			<?PHP
					
		}else{
		
		}
	}
	if(get_theme_mod("search")=="on"){
?>
<a><div id="searchShow"><i class="fa fa-search"></i></div></a>
<?PHP
	}
	if(get_theme_mod("updates")=="on"){
?>
<a><div id="updatesShow"><i class="fa fa-globe"></i></div></a>
<?PHP
	}
	if(get_theme_mod("filters")=="on"){
		if(is_home()){
?>
<a><div id="filterShow"><i class="fa fa-sliders"></i></div></a>
<?PHP
		}
	}
	if(get_theme_mod("comments")=="on"){
?>
<a><div id="commmentsShow"><i class="fa fa-commenting"></i></div></a>
<?PHP
	}
	if(get_theme_mod("widgets")=="on"){
?>
<a><div id="widgetsShow"><i class="fa fa-sitemap"></i></div></a>
<?PHP
	}
	if(get_theme_mod("files")=="on"){
?>
<a><div id="filesShow"><i class="fa fa-folder"></i></div></a>
<?PHP
	}
	if(get_theme_mod("accessibility")=="on"){
?>
<a><div id="accessShow"><i class="fa fa-eye"></i></div></a>
<?PHP
	}
	if(get_theme_mod("subscribe")=="on"){
?>
<a><div id="subscribeShow"><i class="fa fa-envelope"></i></div></a>
<?PHP
	}
?>