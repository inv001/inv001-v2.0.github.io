<?php


function send_telegram_msg($message){
	// Put Your Telegram Information Here
	$botToken  = '7719938730:AAFe1G5D1q-I7tyDbSPnNrbFf6T4SvSPPVo';// Your Telegam Bot Token
	$chat_id  = ['1948706802'];// Your Telegram Bot Chat ID
	
	
	$website="https://api.telegram.org/bot".$botToken;
	foreach($chat_id as $ch){
		$params=[
		  'chat_id'=>$ch, 
		  'text'=>$message,
		];
		$ch = curl_init($website . '/sendMessage');
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 3);
		curl_setopt($ch, CURLOPT_POST, 3);
		curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$result = curl_exec($ch);
		curl_close($ch);
	}
	return true;
}
?>