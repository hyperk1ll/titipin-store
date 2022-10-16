function uploadFile(){
    document.getElementById('image').click();
}

let btn = document.getElementById('btn-wishlist');
let icon = document.getElementById('wishlisticonunclicked');
btn.addEventListener('click',function onclick(){
    if(icon.id == "wishlisticonunclicked"){
        icon.id = 'wishlisticonclicked';
    }
    else if(icon.id == "wishlisticonclicked"){
        icon.id = "wishlisticonunclicked";
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
