function toggleMenu() {
    console.log('toggleMenu');
    let menuObj=document.getElementById("menu");
    if(menuObj.style.display=="none"){
        menuObj.style.display="block";
    }else{
        menuObj.style.display="none";
    }
}