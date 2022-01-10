var http = require('http');

function onRequest(req, res)
{
    res.writehead(200, {'content-type':'text/plain'})
    res.write('Hello World!')
    res.end;
};

var server = http.createServer(onRequest);

server.listen(1337, '127.0.0.1');

console.log('Server running at http://127.0.0.1:1337/')