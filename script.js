function uploadFile(){
    document.getElementById('fileInput').click();
}

let btn = document.getElementById('btn-wishlist');
let icon = document.getElementById('wishlistIcon');
btn.addEventListener('click',function onclick(){
    if(icon.value == ""){
        icon.innerHTML = icon.innerHTML.replace("wishlisticonclicked");
    }
    else if(icon.value == "wishlisticonclicked"){
        icon.innerHTML = icon.innerHTML.replace("");
    }
    
});

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
