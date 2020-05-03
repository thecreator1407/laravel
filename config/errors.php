<?php 
	return array (
			  100 => 
			  array (
			  	'code' => 100, 
			    'message' => '100 - Continue',
			    'description' => 'The server has received the request headers, and the client should proceed to send the request body.',
			  ),
			  101 => 
			  array (
			  	'code' => 101, 
			    'message' => '101 - Switching Protocols',
			    'description' => 'The requester has asked the server to switch protocols.',
			  ),
			  102 => 
			  array (
			  	'code' => 102, 
			    'message' => '102 - Processing',
			    'description' => 'This code indicates that the server has received and is processing the request, but no response is available yet. This prevents the client from timing out and assuming the request was lost.',
			  ),
			  103 => 
			  array (
			  	'code' => 103, 
			    'message' => '103 - Early Hints',
			    'description' => 'Used to return some response headers before final HTTP message.',
			  ),
			  200 => 
			  array (
			  	'code' => 200, 
			    'message' => '200 - OK',
			    'description' => 'The request is OK (this is the standard response for successful HTTP requests).',
			  ),
			  201 => 
			  array (
			  	'code' => 201, 
			    'message' => '201 - Created',
			    'description' => 'The request has been fulfilled, and a new resource is created.',
			  ),
			  202 => 
			  array (
			  	'code' => 202, 
			    'message' => '202 - Accepted',
			    'description' => 'The request has been accepted for processing, but the processing has not been completed.',
			  ),
			  203 => 
			  array (
			  	'code' => 203, 
			    'message' => '203 - Non-Authoritative Information',
			    'description' => 'The request has been successfully processed, but is returning information that may be from another source.',
			  ),
			  204 => 
			  array (
			  	'code' => 204, 
			    'message' => '204 - No Content',
			    'description' => 'The request has been successfully processed, but is not returning any content.',
			  ),
			  205 => 
			  array (
			  	'code' => 205, 
			    'message' => '205 - Reset Content',
			    'description' => 'The request has been successfully processed, but is not returning any content, and requires that the requester reset the document view.',
			  ),
			  206 => 
			  array (
			  	'code' => 206, 
			    'message' => '206 - Partial Content',
			    'description' => 'The server is delivering only part of the resource due to a range header sent by the client.',
			  ),
			  207 => 
			  array (
			  	'code' => 207, 
			    'message' => '207 - Multi-Status',
			    'description' => 'The message body that follows is by default an XML message and can contain a number of separate response codes, depending on how many sub-requests were made.',
			  ),
			  208 => 
			  array (
			  	'code' => 208, 
			    'message' => '208 - Already Reported',
			    'description' => 'The members of a DAV binding have already been enumerated in a preceding part of the (multistatus) response, and are not being included again.',
			  ),
			  218 => 
			  array (
			  	'code' => 218, 
			    'message' => '218 - This is fine (Apache Web Server)',
			    'description' => 'Used as a catch-all error condition for allowing response bodies to flow through Apache when ProxyErrorOverride is enabled.',
			  ),
			  226 => 
			  array (
			  	'code' => 226, 
			    'message' => '226 - IM Used',
			    'description' => 'The server has fulfilled a request for the resource, and the response is a representation of the result of one or more instance-manipulations applied to the current instance.',
			  ),
			  300 => 
			  array (
			  	'code' => 300, 
			    'message' => '300 - Multiple Choices',
			    'description' => 'A link list. The user can select a link and go to that location. Maximum five addresses.',
			  ),
			  301 => 
			  array (
			  	'code' => 301, 
			    'message' => '301 - Moved Permanently',
			    'description' => 'The requested page has moved to a new URL.',
			  ),
			  302 => 
			  array (
			  	'code' => 302, 
			    'message' => '302 - Found',
			    'description' => 'The requested page has moved temporarily to a new URL.',
			  ),
			  303 => 
			  array (
			  	'code' => 303, 
			    'message' => '303 - See Other',
			    'description' => 'The requested page can be found under a different URL.',
			  ),
			  304 => 
			  array (
			  	'code' => 304, 
			    'message' => '304 - Not Modified',
			    'description' => 'Indicates the requested page has not been modified since last requested.',
			  ),
			  306 => 
			  array (
			  	'code' => 306, 
			    'message' => '306 - Switch Proxy',
			    'description' => 'No longer used. Originally meant "Subsequent requests should use the specified proxy."',
			  ),
			  307 => 
			  array (
			  	'code' => 307, 
			    'message' => '307 - Temporary Redirect',
			    'description' => 'The requested page has moved temporarily to a new URL.',
			  ),
			  308 => 
			  array (
			  	'code' => 308, 
			    'message' => '308 - Resume Incomplete',
			    'description' => 'Used in the resumable requests proposal to resume aborted PUT or POST requests.',
			  ),
			  400 => 
			  array (
			  	'code' => 400, 
			    'message' => '400 - Bad Request',
			    'description' => 'The request cannot be fulfilled due to bad syntax.',
			  ),
			  401 => 
			  array (
			  	'code' => 401, 
			    'message' => '401 - Unauthorized',
			    'description' => 'The request was a legal request, but the server is refusing to respond to it. For use when authentication is possible but has failed or not yet been provided.',
			  ),
			  402 => 
			  array (
			  	'code' => 402, 
			    'message' => '402 - Payment Required',
			    'description' => 'Not yet implemented by RFC standards, but reserved for future use.',
			  ),
			  403 => 
			  array (
			  	'code' => 403, 
			    'message' => '403 - Forbidden',
			    'description' => 'The request was a legal request, but the server is refusing to respond to it.',
			  ),
			  404 => 
			  array (
			  	'code' => 404, 
			    'message' => '404 - Not Found',
			    'description' => 'The requested page could not be found but may be available again in the future.',
			  ),
			  405 => 
			  array (
			  	'code' => 405, 
			    'message' => '405 - Method Not Allowed',
			    'description' => 'A request was made of a page using a request method not supported by that page.',
			  ),
			  406 => 
			  array (
			  	'code' => 406, 
			    'message' => '406 - Not Acceptable',
			    'description' => 'The server can only generate a response that is not accepted by the client.',
			  ),
			  407 => 
			  array (
			  	'code' => 407, 
			    'message' => '407 - Proxy Authentication Required',
			    'description' => 'The client must first authenticate itself with the proxy.',
			  ),
			  408 => 
			  array (
			  	'code' => 408, 
			    'message' => '408 - Request Timeout',
			    'description' => 'The server timed out waiting for the request.',
			  ),
			  409 => 
			  array (
			  	'code' => 409, 
			    'message' => '409 - Conflict',
			    'description' => 'The request could not be completed because of a conflict in the request.',
			  ),
			  410 => 
			  array (
			  	'code' => 410, 
			    'message' => '410 - Gone',
			    'description' => 'The requested page is no longer available.',
			  ),
			  411 => 
			  array (
			  	'code' => 411, 
			    'message' => '411 - Length Required',
			    'description' => 'The "Content-Length" is not defined. The server will not accept the request without it.',
			  ),
			  412 => 
			  array (
			  	'code' => 412, 
			    'message' => '412 - Precondition Failed',
			    'description' => 'The precondition given in the request evaluated to false by the server.',
			  ),
			  413 => 
			  array (
			  	'code' => 413, 
			    'message' => '413 - Request Entity Too Large',
			    'description' => 'The server will not accept the request, because the request entity is too large.',
			  ),
			  414 => 
			  array (
			  	'code' => 414, 
			    'message' => '414 - Request-URI Too Long',
			    'description' => 'The server will not accept the request, because the URL is too long. Occurs when you convert a POST request to a GET request with a long query information.',
			  ),
			  415 => 
			  array (
			  	'code' => 415, 
			    'message' => '415 - Unsupported Media Type',
			    'description' => 'The server will not accept the request, because the media type is not supported.',
			  ),
			  416 => 
			  array (
			  	'code' => 416, 
			    'message' => '416 - Requested Range Not Satisfiable',
			    'description' => 'The client has asked for a portion of the file, but the server cannot supply that portion.',
			  ),
			  417 => 
			  array (
			  	'code' => 417, 
			    'message' => '417 - Expectation Failed',
			    'description' => 'The server cannot meet the requirements of the Expect request-header field.',
			  ),
			  418 => 
			  array (
			  	'code' => 418, 
			    'message' => '418 - I\'m a teapot',
			    'description' => 'Any attempt to brew coffee with a teapot should result in the error code "418 I\'m a teapot". The resulting entity body MAY be short and stout.',
			  ),
			  419 => 
			  array (
			  	'code' => 419, 
			    'message' => '419 - Page Expired',
			    'description' => 'Used by the Laravel Framework when a CSRF Token is missing or expired.',
			  ),
			  420 => 
			  array (
			  	'code' => 420, 
			    'message' => '420 - Method Failure (Spring Framework)',
			    'description' => 'A deprecated response used by the Spring Framework when a method has failed.',
			  ),
			  421 => 
			  array (
			  	'code' => 421, 
			    'message' => '421 - Misdirected Request',
			    'description' => 'The request was directed at a server that is not able to produce a response (for example because a connection reuse).',
			  ),
			  422 => 
			  array (
			  	'code' => 422, 
			    'message' => '422 - Unprocessable Entity',
			    'description' => 'The request was well-formed but was unable to be followed due to semantic errors.',
			  ),
			  423 => 
			  array (
			  	'code' => 423, 
			    'message' => '423 - Locked',
			    'description' => 'The resource that is being accessed is locked.',
			  ),
			  424 => 
			  array (
			  	'code' => 424, 
			    'message' => '424 - Failed Dependency',
			    'description' => 'The request failed due to failure of a previous request (e.g., a PROPPATCH).',
			  ),
			  426 => 
			  array (
			  	'code' => 426, 
			    'message' => '426 - Upgrade Required',
			    'description' => 'The client should switch to a different protocol such as TLS/1.0, given in the Upgrade header field.',
			  ),
			  428 => 
			  array (
			  	'code' => 428, 
			    'message' => '428 - Precondition Required',
			    'description' => 'The origin server requires the request to be conditional.',
			  ),
			  429 => 
			  array (
			  	'code' => 429, 
			    'message' => '429 - Too Many Requests',
			    'description' => 'The user has sent too many requests in a given amount of time. Intended for use with rate limiting schemes.',
			  ),
			  431 => 
			  array (
			  	'code' => 431, 
			    'message' => '431 - Request Header Fields Too Large',
			    'description' => 'The server is unwilling to process the request because either an individual header field, or all the header fields collectively, are too large.',
			  ),
			  440 => 
			  array (
			  	'code' => 440, 
			    'message' => '440 - Login Time-out',
			    'description' => 'The client\'s session has expired and must log in again. (IIS)',
			  ),
			  444 => 
			  array (
			  	'code' => 444, 
			    'message' => '444 - Connection Closed Without Response',
			    'description' => 'A non-standard status code used to instruct nginx to close the connection without sending a response to the client, most commonly used to deny malicious or malformed requests.',
			  ),
			  449 => 
			  array (
			  	'code' => 449, 
			    'message' => '449 - Retry With',
			    'description' => 'The server cannot honour the request because the user has not provided the required information. (IIS)',
			  ),
			  450 => 
			  array (
			  	'code' => 450, 
			    'message' => '450 - Blocked by Windows Parental Controls',
			    'description' => 'The Microsoft extension code indicated when Windows Parental Controls are turned on and are blocking access to the requested webpage.',
			  ),
			  451 => 
			  array (
			  	'code' => 451, 
			    'message' => '451 - Unavailable For Legal Reasons',
			    'description' => 'A server operator has received a legal demand to deny access to a resource or to a set of resources that includes the requested resource.',
			  ),
			  494 => 
			  array (
			  	'code' => 494, 
			    'message' => '494 - Request Header Too Large',
			    'description' => 'Used by nginx to indicate the client sent too large of a request or header line that is too long.',
			  ),
			  495 => 
			  array (
			  	'code' => 495, 
			    'message' => '495 - SSL Certificate Error',
			    'description' => 'An expansion of the 400 Bad Request response code, used when the client has provided an invalid client certificate.',
			  ),
			  496 => 
			  array (
			  	'code' => 496, 
			    'message' => '496 - SSL Certificate Required',
			    'description' => 'An expansion of the 400 Bad Request response code, used when a client certificate is required but not provided.',
			  ),
			  497 => 
			  array (
			  	'code' => 497, 
			    'message' => '497 - HTTP Request Sent to HTTPS Port',
			    'description' => 'An expansion of the 400 Bad Request response code, used when the client has made a HTTP request to a port listening for HTTPS requests.',
			  ),
			  498 => 
			  array (
			  	'code' => 498, 
			    'message' => '498 - Invalid Token (Esri)',
			    'description' => 'Returned by ArcGIS for Server. Code 498 indicates an expired or otherwise invalid token.',
			  ),
			  499 => 
			  array (
			  	'code' => 499, 
			    'message' => '499 - Client Closed Request',
			    'description' => 'A non-standard status code introduced by nginx for the case when a client closes the connection while nginx is processing the request.',
			  ),
			  500 => 
			  array (
			  	'code' => 500, 
			    'message' => '500 - Internal Server Error',
			    'description' => 'An error has occurred in a server side script, a no more specific message is suitable.',
			  ),
			  501 => 
			  array (
			  	'code' => 501, 
			    'message' => '501 - Not Implemented',
			    'description' => 'The server either does not recognize the request method, or it lacks the ability to fulfill the request.',
			  ),
			  502 => 
			  array (
			  	'code' => 502, 
			    'message' => '502 - Bad Gateway',
			    'description' => 'The server was acting as a gateway or proxy and received an invalid response from the upstream server.',
			  ),
			  503 => 
			  array (
			  	'code' => 503, 
			    'message' => '503 - Service Unavailable',
			    'description' => 'The server is currently unavailable (overloaded or down).',
			  ),
			  504 => 
			  array (
			  	'code' => 504, 
			    'message' => '504 - Gateway Timeout',
			    'description' => 'The server was acting as a gateway or proxy and did not receive a timely response from the upstream server.',
			  ),
			  505 => 
			  array (
			  	'code' => 505, 
			    'message' => '505 - HTTP Version Not Supported',
			    'description' => 'The server does not support the HTTP protocol version used in the request.',
			  ),
			  506 => 
			  array (
			  	'code' => 506, 
			    'message' => '506 - Variant Also Negotiates',
			    'description' => 'Transparent content negotiation for the request results in a circular reference.',
			  ),
			  507 => 
			  array (
			  	'code' => 507, 
			    'message' => '507 - Insufficient Storage',
			    'description' => 'The server is unable to store the representation needed to complete the request.',
			  ),
			  508 => 
			  array (
			  	'code' => 508, 
			    'message' => '508 - Loop Detected',
			    'description' => 'The server detected an infinite loop while processing the request (sent instead of 208 Already Reported).',
			  ),
			  509 => 
			  array (
			  	'code' => 509, 
			    'message' => '509 - Bandwidth Limit Exceeded',
			    'description' => 'The server has exceeded the bandwidth specified by the server administrator; this is often used by shared hosting providers to limit the bandwidth of customers.',
			  ),
			  510 => 
			  array (
			  	'code' => 510, 
			    'message' => '510 - Not Extended',
			    'description' => 'Further extensions to the request are required for the server to fulfil it.',
			  ),
			  511 => 
			  array (
			  	'code' => 511, 
			    'message' => '511 - Network Authentication Required',
			    'description' => 'The client needs to authenticate to gain network access.',
			  ),
			  520 => 
			  array (
			  	'code' => 520, 
			    'message' => '520 - Unknown Error',
			    'description' => 'The 520 error is used as a "catch-all response for when the origin server returns something unexpected", listing connection resets, large headers, and empty or invalid responses as common triggers.',
			  ),
			  521 => 
			  array (
			  	'code' => 521, 
			    'message' => '521 - Web Server Is Down',
			    'description' => 'The origin server has refused the connection from Cloudflare.',
			  ),
			  522 => 
			  array (
			  	'code' => 522, 
			    'message' => '522 - Connection Timed Out',
			    'description' => 'Cloudflare could not negotiate a TCP handshake with the origin server.',
			  ),
			  523 => 
			  array (
			  	'code' => 523, 
			    'message' => '523 - Origin Is Unreachable',
			    'description' => 'Cloudflare could not reach the origin server; for example, if the DNS records for the origin server are incorrect.',
			  ),
			  524 => 
			  array (
			  	'code' => 524, 
			    'message' => '524 - A Timeout Occurred',
			    'description' => 'Cloudflare was able to complete a TCP connection to the origin server, but did not receive a timely HTTP response.',
			  ),
			  525 => 
			  array (
			  	'code' => 525, 
			    'message' => '525 - SSL Handshake Failed',
			    'description' => 'Cloudflare could not negotiate a SSL/TLS handshake with the origin server.',
			  ),
			  526 => 
			  array (
			  	'code' => 526, 
			    'message' => '526 - Invalid SSL Certificate',
			    'description' => 'Used by Cloudflare and Cloud Foundry\'s gorouter to indicate failure to validate the SSL/TLS certificate that the origin server presented.',
			  ),
			  527 => 
			  array (
			  	'code' => 527, 
			    'message' => '527 - Railgun Listener to Origin Error',
			    'description' => 'Error 527 indicates that the request timed out or failed after the WAN connection had been established.',
			  ),
			  530 => 
			  array (
			  	'code' => 530, 
			    'message' => '530 - Origin DNS Error',
			    'description' => 'Error 530 indicates that the requested host name could not be resolved on the Cloudflare network to an origin server.',
			  ),
			  598 => 
			  array (
			  	'code' => 598, 
			    'message' => '598 - Network Read Timeout Error',
			    'description' => 'Used by some HTTP proxies to signal a network read timeout behind the proxy to a client in front of the proxy.',
			  ),
		);
?>