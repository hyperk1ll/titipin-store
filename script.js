function uploadFile(){
    document.getElementById('fileInput').click();
}
function inlineEdit(){
    var t = document.getElementById("table");
    var trs = t.getElementsByTagName("tr");
    var tds = null;
    for (var i=0; i<trs.length; i++){
        tds = trs[i].getElementsByTagName("td");
        for (var n=0; n<tds.length;n++)
        {
            tds[n].contentEditable = "true";
        }
    }
}
