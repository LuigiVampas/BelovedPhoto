<?php

class InstagramApi {
	public static function getUserInfo($__code){
		$url = curl_init();
		curl_setopt($url, CURLOPT_URL, 'https://api.instagram.com/oauth/access_token');
		curl_setopt($url, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($url, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($url, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($url, CURLOPT_POST, true);
		
		$post_fields_arr = [
			'client_id' => CLIENT_ID,
			'client_secret' => CLIENT_SECRET,
			'grant_type' => 'authorization_code',
			'rediret_uri' => REDIRECT_URI,
			'code' => $__code
		];
		
		curl_setopt($url, CURLOPT_POSTFIELDS, $post_fields_arr);
		
		$data = curl_exec($url);
		curl_close($url);
		if ($data == false)
			return 'error';
		
		$user_info_arr = json_decode($data);
		return $user_info_arr;
	}
}
