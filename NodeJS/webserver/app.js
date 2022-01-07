const http = require('http');
const fs = require('fs');

// const server = http.createServer((req, res)=>{
// })
// server.listen(3000,()=>{
//     console.log("listening on port 3000")
// })
// chaining model
const renderHtml = (path, res) => {
    fs.readFile(path, (err, data)  => {
        if (err) {

            res.writeHead(404)
            res.write("File Not Found")
        } else {
            res.write(data)
        }
        res.end();
    })
}

http
    .createServer((req, res) => {
        res.writeHead(200, {
            'Content-Type': 'text/html'
        });


        const url = req.url
        switch (url) {
            case '/about':
                renderHtml('./about.html',res)
                break;
            case '/contact':
                renderHtml('./contact.html', res)
                break;

            default:
                renderHtml('./index.html',res)
                break;
        }
    })
    .listen(3000, () => {
        console.log("listening on port 3000");
    })