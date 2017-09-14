var protocol = location.protocol;
var slashes = protocol.concat("//");
var host = slashes.concat(window.location.hostname);
var url = host.concat("/jobs/minify");

var request = new XMLHttpRequest();
request.open('GET', url, true);
request.setRequestHeader('X-Requested-With', 'XMLHttpRequest');  // Tells server that this call is made for ajax purposes.
                                                                 // Most libraries like jQuery/Prototype/Dojo do this
request.send(null);  // No data needs to be sent along with the request.