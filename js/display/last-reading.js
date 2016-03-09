function antonine_last_read_cookie(){
	console.log("cookie being set");
	Cookies.set("user_page_last_read_cookie", new Date().getTime());	
}

jQuery(document).ready( function(){
		console.log("cookie timer");
		setTimeout(antonine_last_read_cookie, 10000);
	}
);