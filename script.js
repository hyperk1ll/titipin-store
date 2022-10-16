// function uploadFile(){
//     document.getElementById('inputImage').click();
// }

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
    var editable_elements = document.querySelectorAll("[contenteditable=false]");
    var btnedit= document.getElementById('btnedit');
    var btnsave= document.getElementById('btnsave');
    for(var i=0; i<editable_elements.length; i++){
        editable_elements[i].setAttribute("contenteditable", true);
    }
    btnedit.style.display = 'none';
    document.getElementById('btnsavehidden').id = 'btnsaveshow';


}
