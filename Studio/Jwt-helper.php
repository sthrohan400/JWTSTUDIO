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
			$tPayload = array();
			foreach($data as $key => $value){
					
						if($key == 'expire_time')
								$tPayload['exp'] = (isset($value) && !empty($value)) ? '' : '';
						if($key == 'issued_by')
								$tPayload['iss'] = (isset($value) && !empty($value)) ? $value : $_SERVER['SERVER_NAME'];
						if($key == 'created_time' && $value === true)
								$tPayload['iat'] = now();
						if($key == 'user'){
							foreach($user as $key => $u)
							{
								$tPayload[$key] = $u;
							}
						}
				}
				return json_encode($tPayload);
		}
		public function createHeader(array $data)
		{
			return $json_encode($data);
		}


}