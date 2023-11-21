const menuBtn=document.getElementsByClassName('nav-btn')
const header= document.getElementsByTagName(header)
const headerNav=document.getElementsByClassName('header-nav')
var menuStatus=false

function openMenu(){

}
function toggleMenu(){
    if(menuStatus=false){
        header.animate({height: '100vh'}, 0.2)
        headerNav.animate({display: 'block'}, 0.2)
    } else if(menuStatus=true){
        header.animate({height: '100vh'})
        headerNav.animate({display: 'block'})
    }  
}