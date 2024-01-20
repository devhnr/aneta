#!/usr/bin/perl

require 'ccavutil.pl';
use CGI;
use Crypt::CBC;
use MIME::Base64;
use Digest::MD5 qw(md5 md5_hex md5_base64);
  
#print "Content-Type: text/plain\n\n";
$cgi    = new CGI;                
my $encResp = $cgi->param("encResp"); 
my $workingKey = "";			#Working Key shared by CCAvenue for current URL
my $plainText = decrypt($workingKey,$encResp);

my @params = split('&', $plainText);

print<<EOSTUFF; 
Content-type: text/html

<html>
<body>
<center>
<h4>RESPONSE DATA</h4>
<table border="1">
EOSTUFF

foreach my $paramsVal (@params) {
	#print "$paramsVal";
	print "<tr>";
	my @values = split('=', $paramsVal);
	print "<td>$values[0]</td><td>$values[1]</td>";
	#print "\n\n$values[0] :: $values[1]\n";
	print "</tr>";
	
}

print "</table></center>";

print<<EOF;                      <!-- Finish up document -->
</body>
</html>
EOF
