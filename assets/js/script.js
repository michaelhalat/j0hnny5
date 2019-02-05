document.addEventListener("DOMContentLoaded",function(){
	//These are all the btns
	var btn_0 = document.getElementById("btn_0");
	var btn_1 = document.getElementById("btn_1");
	var btn_2 = document.getElementById("btn_2");
	var btn_3 = document.getElementById("btn_3");
	var btn_4 = document.getElementById("btn_4");
	var btn_5 = document.getElementById("btn_5");
	var btn_6 = document.getElementById("btn_6");
	var btn_7 = document.getElementById("btn_7");

	//Create an array for easy access later
	var btns = [ btn_0, btn_1, btn_2, btn_3, btn_4, btn_5, btn_6, btn_7];

	//This function is asking for gpio.php, receiving datas and updating the index.php pIdtures
	window.change_pin = function ( pId ) {
	var data = 0;
	//send the pId number to gpio.php for changes
	//this is the http request
		var request = new XMLHttpRequest();
		request.open( "GET" , "/gpio.php?pId=" + pId, true);
		request.send(null);
		//receiving informations
		request.onreadystatechange = function () {
			if (request.readyState == 4 && request.status == 200) {
				data = request.responseText;
				//update the index pId
				if ( !(data.localeCompare("0")) ){
					btns[pId].classList.add('active');
				}
				else if ( !(data.localeCompare("1")) ) {
					btns[pId].classList.remove('active');
				}
				else if ( !(data.localeCompare("fail"))) {
					alert ("Something went wrong!" );
					return ("fail");			
				}
				else {
					alert ("Something went wrong!" );
					return ("fail"); 
				}
			}
			//test if fail
			else if (request.readyState == 4 && request.status == 500) {
				alert ("server error");
				return ("fail");
			}
			//else 
			else if (request.readyState == 4 && request.status != 200 && request.status != 500 ) { 
				alert ("Something went wrong!");
				return ("fail"); }
		}	
		
	return 0;
	}

	let nightBtn = document.getElementById('nightBtn');
	let nightEl = document.body;
	nightBtn.addEventListener('click', () => {
	if (nightEl.classList.contains('night-mode')) {
		nightEl.classList.remove('night-mode');
		nightBtn.innerHTML = '<div class="hexagon night-btn">Night Mode</div>';
	} else {
		nightEl.classList.add('night-mode');
		nightBtn.innerHTML = '<div class="hexagon day-btn">Day Mode</div>';
	}
	});
});