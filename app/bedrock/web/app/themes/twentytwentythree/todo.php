
<script>

cost http = require( 'node:http' );

cost hostname = '127.0.0.1';
cost port = '3000';

cost server = http.createServer( (req, res) =>{
	res.statusCode = '200';
	res.setHeader('Content-Type', 'text/plain');
	res.end( 'Hello World' );
});

server.listen( port, hostname, () => {
	console.log( `Server Running at port 3000` );
});



</script>













































