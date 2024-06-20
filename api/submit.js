function sendMail(event){

    event.preventDefault

    var contactForm= document.getElementById('contact-form')
    var msg= document.getElementById('msg')

    var serviceId= 'service_g1aomdf'
    var templateId= 'template_l5fythe'

    emailjs.sendForm( serviceId , templateId , contactForm ).then(function (res){
        msg.style.display='block'
        
        setTimeout(() => {
            msg.style.display='none'
            contactForm.reset()
        }, 3000);
    })
}


export default sendMail