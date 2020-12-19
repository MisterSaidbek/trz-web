document.getElementsById('glavniy_direktor').ondragstart = noselect();
document.getElementsById('glavniy_direktor').oncontextmenu = noselect();
document.getElementsById('glavniy_direktor').onselectstart = noselect();
function noselect() {return false;}