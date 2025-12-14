// server.js
const http = require('http');

const hostname = '0.0.0.0'; // Listen on all network interfaces
const port = 80; // Standard HTTP port (exposed inside the container)

const server = http.createServer((req, res) => {
  res.statusCode = 200;
  res.setHeader('Content-Type', 'text/plain');
  res.end('Hello from a Git-built Docker Container!');
});

server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`);
});