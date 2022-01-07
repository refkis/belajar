const http = require('http')


// const server = http.createServer((req, res)=>{
// })
// server.listen(3000,()=>{
//     console.log("listening on port 3000")
// })

// chaining model
http
.createServer((req, res)=>{
    res.write('hello world');
    res.end();
})
.listen(3000,()=> {
    console.log("listening on port 3000");
})