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
<tr><td><a href=\"https://med.stanford.edu/profiles/jeffrey-jopling\" target=\"_blank\">Orion Despo</a></td><td>odespo@stanford.edu</td></tr>
<tr><td><a href=\"https://profiles.stanford.edu/174040\" target=\"_blank\">Julia Lee</a></td><td>jullee@stanford.edu</td></tr>
<tr><td><a href=\"http://ai.stanford.edu/~syyeung/\" target=\"_blank\">Serena Yeung</a></td><td>syyeung@cs.stanford.edu</td></tr>
</tbody></table>";
}

