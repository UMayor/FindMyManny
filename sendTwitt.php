<?php

function sendTweet($mensaje){
        
		ini_set('display_errors', 1);
        require_once('TwitterAPIExchange.php');
		//hans
                /*
		$settings = array('oauth_access_token' => "43268686-pF4VI251ifZyBOSokiC8BSJU9cjLIL4DLpCt7NAb7",
		'oauth_access_token_secret' => "SEUhC4io6Lf3j34i3xFxypWfCRWJgGo4uLbzT6BBgKO0O",
		'consumer_key' => "bujQFEjb9uo2Y0prXxbwBxPgJ",
		'consumer_secret' => "txmvLHFlDMmp1wS0uZLC78Rl31RgowNNuq1xoHxiIdcEwm111B");
                */
                //manuel
                $settings = array(
		'oauth_access_token' => "142495825-pJcKGSK5qkKHnI0b6uO9diDCe2VSWti0Vu5C3TEG",
		'oauth_access_token_secret' => "CoqisP9paleVX2A1U9PvF2AwOzKOCcMD93EuyrMqPzmE8",
		'consumer_key' => "RT9fbhFbIKCIcspGTirdhWSui",
		'consumer_secret' => "cgEamEc3JyUI9BmOru0Wm5T3kVyhTfaNg88oV9bDZTjp73rCR4"
                );
		
        $url = 'https://api.twitter.com/1.1/statuses/update.json';
		$requestMethod = 'POST';
        
		$postfields = array( 'status' => $mensaje );
        
		$twitter = new TwitterAPIExchange($settings);
		//echo(">>>>>>".$twitter);
        return $twitter->buildOauth($url, $requestMethod)->setPostfields($postfields)->performRequest();
		
}//Fin: sendTweet($mensaje)

if(isset($_POST['twitt'])) {

if(!isset($_POST['twitt'])) {

echo "Ocurri� un error y el formulario no ha sido enviado.";
die();
}

$mensaje = $_POST['twitt'];
$respuesta = sendTweet($mensaje);
$json = json_decode($respuesta);

echo '<meta charset="utf-8">';
echo "Tweet Enviado por: ".$json->user->name." (@".$json->user->screen_name.")";
echo "<br>";
echo "Tweet: ".$json->text;
echo "<br>";
echo "Tweet ID: ".$json->id_str;
echo "<br>";
echo "Fecha Envio: ".$json->created_at;

}
?>
<script>
window.history.back();
</script>