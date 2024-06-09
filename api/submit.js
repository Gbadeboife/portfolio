export default function handler(req, res) {
    if (req.method === 'POST') {
        const { name, email, message } = req.body;

        // Process the form data
        res.status(200).send(`Name: ${name}<br>Email: ${email}<br>Message: ${message}`);
    } else {
        res.status(405).send('Method Not Allowed');
    }
}
