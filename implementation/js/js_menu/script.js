var showMenu3 = true;
var showMenu4 = true;

	function  menuClick(menu) {
		if ((showMenu3 && menu == "3") || (showMenu4 && menu == "4")) {
			showMenu(menu);
			if (menu == "3")
				showMenu3 = false;
			else
				showMenu4 = false;
			} else {
				hideMenu(menu)
				if (menu == "3")
					showMenu3 = true;
				else
					showMenu4 = true;
			}
	}
		
	function showMenu(menu) {
			
		if (menu == 4) {
			document.getElementById(menu).style.width = "400px";
			document.getElementById(menu).style.height = "400%";
		} else {
			document.getElementById(menu).style.top = "110%";
		}
	}
		
	function hideMenu(menu) {
			
		if (menu == 4) {
			document.getElementById(menu).style.width = "0";
			document.getElementById(menu).style.height = "0";
		} else {
			document.getElementById(menu).style.top = "-300%";
		}	
	}