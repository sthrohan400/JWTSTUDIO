<?php

namespace Jwt\Studio;

class Config
{
public function algorithm(){
	$config = array();
	$config['JWT_ALGORITHM'] = "CRYPT_SHA_256";
	$config['secret_key'] = "Test";//confidential Information;
	$config['user'] = array();//payload for token
	$config['expire_time'] = '';
	$config['created_time'] = true; //true or false;
	return $config;
}

}