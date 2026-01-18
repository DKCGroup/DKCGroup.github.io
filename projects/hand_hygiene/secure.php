<?php
$secretKey="6Ldggx8UAAAAAIr-ovvfugNRE5DTSSSrFtpfYGNS";
$ip=$_SERVER['REMOTE_ADDR'];
$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$_POST["gre"]."&remoteip=".$ip);
$responseKeys=json_decode($response,true);
if(intval($responseKeys["success"]) !== 1) {
    header( 'Location: ./error.html');
} else {
    echo "<table class=\"table table-hover\"><thead><tr><th>Name</th><th>Email</th></tr></thead>
<tbody>
<tr><td><a href=\"https://med.stanford.edu/profiles/terry-platchek\" target=\"_blank\">Terry Platchek</a></td><td>platchek@stanford.edu</td></tr>
<tr><td><a href=\"https://med.stanford.edu/profiles/49176\" target=\"_blank\">Amit Singh</a></td><td>atsingh@stanford.edu</td></tr>
<tr><td><a href=\"https://www.albert.cm\" target=\"_blank\">Albert Haque</a></td><td>ahaque@cs.stanford.edu</td></tr>
</tbody></table>";
}
