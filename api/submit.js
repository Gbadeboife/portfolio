const nodemailer=require('nodemailer')
require('dotenv').config()


async function handler(req, res) {
    if (req.method === 'POST') {
        const { name, email, message } = req.body;

        // Set up nodemailer
        let transporter = nodemailer.createTransport({
            host: "smtp.gmail.com",
            port: 465,
            secure: true,
            service: 'gmail',
            auth: {
                user: process.env.GMAIL_USER, 
                pass: process.env.GMAIL_PASS  
            }
        });

        // Email content
        let mailOptions = {
            from: process.env.GMAIL_USER,
            to: process.env.RECEIVER_EMAIL,
            subject: 'New Form Submission',
            html: `<p>Name: ${name}</p><p>Email: ${email}</p><p>Message: ${message}</p>`
        };

        try {
            await transporter.sendMail(mailOptions);
            res.status(200).send('Form submitted successfully');
        } catch (error) {
            res.status(500).send('Error sending email');
        }
    } else {
        res.status(405).send('Method Not Allowed');
    }
    
}


export default handler