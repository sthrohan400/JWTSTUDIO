<?php

namespace Jwt\Studio\Base64;

class Base64Encoder implements EncoderInterface
{
	public function encode($data){
		return base64_encode($data);
	}
	public function decode($data){
		return base64_decode($data);
	}
}