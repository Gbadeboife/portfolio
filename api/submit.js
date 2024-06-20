
function sendMail(event){

    event.preventDefault

    var contactForm= document.getElementById('contact-form')
    var msg= document.getElementById('msg')

    var serviceId= process.env.SERVICE_ID
    var templateId= process.env.TEMPLATE_ID

    emailjs.sendForm( serviceId , templateId , contactForm ).then(function (res){
        msg.style.display='block'
        
        setTimeout(() => {
            msg.style.display='none'
            contactForm.reset()
        }, 3000);
    })
}

