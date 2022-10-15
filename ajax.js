// function inlineEdit(){
//     var xmlhttp = new XMLHttpRequest();
//     var t = document.getElementById("table");
//     var trs = t.getElementsByTagName("tr");
//     var tds = null;

    
// 	xmlhttp.open("GET",url, true);
// 	xmlhttp.onreadystatechange = function() {
// 		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
// 			for (var i=0; i<trs.length; i++){
//                 tds = trs[i].getElementsByTagName("td");
//                 for (var n=0; n<tds.length;n++)
//                 {
//                     tds[n].contentEditable = "true";
//                 }
//             }
// 		}
// 	}
// 	xmlhttp.send(null);
// }