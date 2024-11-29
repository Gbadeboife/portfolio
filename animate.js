gsap.registerPlugin(ScrollTrigger);



gsap.from('.home-content', {
    y: 40,
    duration: 0.5,
    opacity: 0
})


const tl1= gsap.timeline()
tl1.from('.info h2',{
    y: 40,
    duration: 0.5,
    opacity: 0
})
.from('.info p', {
    y: 40,
    opacity: 0,
    duration: 0.5
})



const tl2= gsap.timeline({
    scrollTrigger: {
        trigger: '.about',
        start: 'top 90%',
    }
})
tl2.from('.about h2',{
    y: 40,
    duration: 0.5,
    opacity: 0
})
.from('.about article', {
    y: 40,
    opacity: 0,
    duration: 0.5
})
.from('.about .skills', {
    y: 40,
    opacity: 0,
    duration: 0.5
})


const tl3= gsap.timeline({
    scrollTrigger: {
        trigger: '.projects',
        start: 'top 90%',
    }
})
tl3.from('.projects h2',{
    y: 40,
    duration: 0.5,
    opacity: 0
})


const tl4= gsap.timeline({
    scrollTrigger: {
        trigger: '.project-1',
        start: 'top 90%',
    }
})
tl4.from('.project-1 figure',{
    y: 40,
    duration: 0.5,
    opacity: 0
})
.from('.project-1 article', {
    y: 40,
    opacity: 0,
    duration: 0.5
})


const tl5= gsap.timeline({
    scrollTrigger: {
        trigger: '.project-2',
        start: 'top 90%',
    }
})
tl5.from('.project-2 figure',{
    y: 40,
    duration: 0.5,
    opacity: 0
})
.from('.project-2 article', {
    y: 40,
    opacity: 0,
    duration: 0.5
})


const tl6= gsap.timeline({
    scrollTrigger: {
        trigger: '.project-3',
        start: 'top 90%',
    }
})
tl6.from('.project-3 figure',{
    y: 40,
    duration: 0.5,
    opacity: 0
})
.from('.project-3 article', {
    y: 40,
    opacity: 0,
    duration: 0.5
})



const tl7= gsap.timeline({
    scrollTrigger: {
        trigger: '.writing',
        start: 'top 90%',
    }
})
tl7.from('.writing h2',{
    y: 40,
    duration: 0.5,
    opacity: 0
})
.from('.writing div h4', {
    y: 40,
    opacity: 0,
    duration: 0.5
})
.from('.writing div p', {
    y: 40,
    opacity: 0,
    duration: 0.5
})


const tl8= gsap.timeline({
    scrollTrigger: {
        trigger: '.testimonial',
        start: 'top 90%',
    }
})
tl8.from('.testimonials h2',{
    y: 40,
    duration: 0.5,
    opacity: 0
})
.from('.testimonial', {
    y: 40,
    opacity: 0,
    duration: 0.5
})


const tl9= gsap.timeline({
    scrollTrigger: {
        trigger: '.contact',
        start: 'top 90%',
    }
})
tl9.from('.contact h2',{
    y: 40,
    duration: 0.5,
    opacity: 0
})
.from('.contact article', {
    y: 40,
    opacity: 0,
    duration: 0.5
})
.from('.contact form', {
    y: 40,
    opacity: 0,
    duration: 0.5
})



