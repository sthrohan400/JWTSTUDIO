<?php

namespace Jwt\Studio;
use Jwt\Studio\Base64\Base64Encoder;
use Jwt\Studio\Base64\UrlBase64Encoder;

private $encoder;
public function __construct(Base64Encoder $encoder)
{
	$this->encoder = $encoder;
}
class JwtHelper{

		public function sanitizeInput($url){

		}
		public function setPayload($data){
			return $this->encoder->encode($data);
		}
		public function getPayload($data){
			return $this->encoder->decode($data);
		}
		public function setHeader($data){
			return $this->encoder->encode($data);
		}
		public function getHeader($data){
			return $this->encode->decode($data);
		}
		public function createPayload(array $data){

		}
		

}