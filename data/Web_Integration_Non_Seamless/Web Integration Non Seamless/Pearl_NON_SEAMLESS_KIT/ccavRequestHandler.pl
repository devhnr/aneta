#!/usr/bin/perl

require 'ccavutil.pl';
use CGI;
use URI::Encode qw(uri_encode uri_decode);

my $access_code = "";		#Access Code shared by CCAvenue for current URL
my $workingKey = "";		#Working Key shared by CCAvenue for current URL
my $q = new CGI;
my $requestParams = "";
my( $name, $value );


foreach $name ( $q->param ) {
    $requestParams = $requestParams.$name."=";
    foreach $value ( $q->param( $name ) ) {
        $requestParams = $requestParams.uri_encode($value)."&";
    }
}

my $encrypted = encrypt($workingKey,$requestParams);

print<<EOSTUFF; 
Content-type: text/html

<HTML>
<BODY>
<form method="post" name="redirect" action="https://test.ccavenue.com/transaction/transaction.do?command=initiateTransaction">
<input type=hidden name=encRequest value="$encrypted">
<input type=hidden name=access_code value="$access_code">
</form>
<script language='javascript'>document.redirect.submit();</script>
EOSTUFF

print<<EOF;                      <!-- Finish up document -->
</BODY>
</HTML>
EOF
