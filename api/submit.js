function sendMail(event){

    event.preventDefault

    var params={
        name: document.getElementById('name').value,
        email: document.getElementById('email').value,
        message: document.getElementById('message').value

    }
    var msg= document.getElementById('msg')

    var serviceId= 'service_g1aomdf'
    var templateId= 'template_l5fythe'

    emailjs.send( serviceId , templateId , params ).then(function (res){
        msg.style.display='block'
        
        setTimeout(() => {
            msg.style.display='none'
            contactForm.reset()
        }, 3000);
    })
}
