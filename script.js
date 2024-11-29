var menuStatus=false
var navBar=document.querySelector('.header-nav')
var socCard=document.querySelector('.soc-card')
var openBtn=document.querySelector('.fa-bars')
var closeBtn=document.querySelector('.fa-xmark')
var header=document.getElementsByTagName('header')
var headerLink=document.querySelectorAll('.link')

var viewportWidth = window.innerWidth;



function toggleMenu(){
    if(menuStatus==false){
        navBar.style.display='block'
        gsap.to('header', {
            height: '100vh',
            duration: 0.2,
            ease: "power1.out",
        })
        gsap.from('.header-nav ul li a', {
            opacity: 0,
            duration: 0.5
        })
        socCard.style.display='inline-flex'
        openBtn.style.display='none'
        closeBtn.style.display='inline'
        document.body.style.overflow='hidden'
        menuStatus=true
    }  else if (menuStatus==true){
        navBar.style.display='none'
        gsap.to('header', {
            height: '50px',
            duration: 0.2,
            ease: "power1.out",
        })
        socCard.style.display='none'
        openBtn.style.display='inline'
        closeBtn.style.display='none'
        document.body.style.overflow='unset'
        menuStatus=false
    } else {
        null
    }
}

function handleViewportChange() {

    viewportWidth = window.innerWidth


    if (viewportWidth > 800) {
        navBar.style.display='block'
        gsap.to('header', {
            height: '50px',
            duration: 0.2,
            ease: "power1.out",
        })
        socCard.style.display='flex'
        openBtn.style.display='inline'
        closeBtn.style.display='none'
        menuStatus=false
        document.body.style.overflow='unset'
    }
    if (viewportWidth < 800) {
        if(menuStatus==false){
            navBar.style.display='none'
            socCard.style.display='none'
        }
        
    }
}

window.addEventListener('resize', handleViewportChange);



if (viewportWidth < 800) {
    headerLink.forEach((link) => {
        link.addEventListener('click', toggleMenu);
    });
}
