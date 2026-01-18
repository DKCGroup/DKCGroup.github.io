<?php
$secretKey = "6Ldggx8UAAAAAIr-ovvfugNRE5DTSSSrFtpfYGNS";
$ip = $_SERVER['REMOTE_ADDR'];
$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$_POST["gre"]."&remoteip=".$ip);
$responseKeys = json_decode($response,true);
if(intval($responseKeys["success"]) !== 1) {
    header( 'Location: ./error.html');
} else {
    echo "<table class=\"table table-hover\"><thead><tr><th>Name</th><th>Email</th><th>Website</th></tr></thead>
<tbody><tr>
<td><a href=\"http://activityrecognition.com\">Guido Pusiol</a></td>
<td>pusiol@cs.stanford.edu</td>
<td><a href=\"http://activityrecognition.com\">http://activityrecognition.com/</a></td>
</tr></tbody></table>";
}
