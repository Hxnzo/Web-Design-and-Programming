var http = require('http');
var fs = require('fs');

function onRequest(req, res)
{ 
    if(request.method=='GET'&& request.url=='/')
    {
        response.writeHead(200,{'Content-Type': 'text/html'});
        fs.createReadStream("./DecToBin.html").pipe(response);
    }
    else if(request.method=='GET'&& request.url=='/')
    {
        response.writeHead(200,{'Content-Type': 'text/css'});
        fs2.createReadStream("./DecimalToBinary.css").pipe(response);
    }
    else
    {
        send404Response(response);
    }
    

};

function dec2bin()
{
    var x = document.getElementById("deci_bin").value;
    x = parseInt(x);
    var bin = x.toString(2);
    var num_bin = "The binary representation of " + x + " is " + bin + "<br>";
    document.getElementById("result_bin").innerHTML = num_bin;
}

function send404Response(res)
{
    res.writeHead(404, {'content-type':'text/plain'})
    res.write("Error 404: Page Not Found!")
    res.end;
};

var server = http.createServer(onRequest);

server.listen(1337, '127.0.0.1');

console.log('Server running at http://127.0.0.1:1337/')