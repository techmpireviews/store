		function search() {
			document.getElementById('search').style.width = "90%";
			document.getElementById('form').style.visibility = "visible";
			document.getElementById('search').style.left = "50%";
			document.getElementById('maintop').style.visibility = "hidden";
			document.getElementById('maintop').style.left = "-200%";
		}
		
		function closesearch() {
			document.getElementById('search').style.width = "90%";
			document.getElementById('form').style.visibility = "hidden";
			document.getElementById('search').style.left = "99%";
			document.getElementById('search').style.width = "0px";
			document.getElementById('maintop').style.visibility = "visible";
		}

		function open1() {
			document.getElementById('header').style.visibility = "hidden";
			document.getElementById('nav').style.visibility = "visible";
			document.getElementById('nav').style.left = "0px";
			document.getElementById('nav').style.clipPath = "inset(0 0 0 0)";
		}

		function close1() {
			document.getElementById('header').style.visibility = "visible";
			document.getElementById('nav').style.visibility = "hidden";
			document.getElementById('nav').style.left = "0px";
			document.getElementById('nav').style.clipPath = "inset(0 100% 0 0)";
		}