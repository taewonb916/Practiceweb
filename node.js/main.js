var http = require('http');

http.createServer(function(request, response){
    /*
        HTTP 헤더전송
        HTTP status:  200 : OK
        Content Type: text/plain
    */ 

    response.writeHead(200, { 'Content-Type': 'text/plain'});

    /*
        Response Body를 "Hello World"로 설정
    */
    response.end("Hello World Park!\n");
}).listen(8081);

console.log("server running at http://127.0.0.1:8081")