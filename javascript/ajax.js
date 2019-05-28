function pageContentLoad(){
	var xmlHttp = new XMLHttpRequest();		
	xmlHttp.open('POST', '../pages/filterProduct.php', true);
	var sendData = new FormData();
	sendData.append('filter_details', this.value);
	xmlHttp.send(sendData);

	xmlHttp.onreadystatechange = function(){
		if(xmlHttp.readyState == 4){
			document.getElementById('furnitureSelectQuery').innerHTML = xmlHttp.responseText;	
		}
	}
}
function furnitureModification(){
	var filterDetails = document.getElementsByClassName('filter_details')[0];
	filterDetails.addEventListener('change', pageContentLoad);
}
document.addEventListener('DOMContentLoaded', furnitureModification);