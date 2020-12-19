const mobile_menu=document.getElementsByClassName("mobile-menu")[0];
const body=document.getElementsByTagName("body")[0];
function open_menu(ev){
    ev.stopPropagation();
    mobile_menu.classList.remove('close');
    mobile_menu.classList.add('open');
    body.classList.add('unscrolled');
}
function hide_menu(){
    body.classList.remove('unscrolled');
    mobile_menu.classList.remove('open');
    mobile_menu.classList.add('close');
}
function toggle_lang(elem){
    if(elem.classList.contains('open')){
        elem.classList.remove('open');
        return 0;
    }
    elem.classList.add('open');
}
$( document ).ready(function() {$('#videoHome').play();});