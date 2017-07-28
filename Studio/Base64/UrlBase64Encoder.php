<?php

namespace Jwt\Studio\Base64;

class Base64Encoder implements EncoderInterface
{
	public function encode($data){
		return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
	}
	public function decode($data){
		return base64_decode(strtr($data, '-_', '+/'));
	}
}