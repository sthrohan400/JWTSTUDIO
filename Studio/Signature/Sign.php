<?php

namespace Jwt\Studio\Signature;
use Jwt\Studio\Config;
class Sign 
{
	//Encrypting Technique One Way algorithm
	// 	[CRYPT_STD_DES] - Standard DES-based hash with two character salt from the alphabet
	// [CRYPT_EXT_DES] - Extended DES-based hash with a nine character salt consisting of an underscore followed by 4 bytes of iteration count and 4 bytes of salt. 
	// [CRYPT_MD5] - MD5 hashing with a 12 character salt starting with $1$
	// [CRYPT_BLOWFISH] - Blowfish hashing with a salt starting with $2a$,  $2x$, or $2y$, a two digit cost parameters "$", and 22 characters from the alphabet "./0-9A-Za-z".
	// [CRYPT_SHA_256] - SHA-256 hash with a 16 character salt starting with  $5$. If the salt string starts with "rounds=<N>$", the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameter on Blowfish.
	// [CRYPT_SHA_512] - SHA-512 hash with a 16 character salt starting with $6$. If the salt string starts with "rounds=<N>$", the numeric value of N is used to indicate how many times the hashing loop should be executed, much like the cost parameter on Blowfish. 

	private $encrypiton;
	private $key;
	private $config;
	private $isSigned = false;
	private $signature;
	public function __construct(Config $config){
		$this->encrypiton = $this->config->algorithm();
		//$this->key = $this->config->algorithm();
	}
	public function sign($input,$key)
	{
		$key = (!empty($this->encrypiton['secret_key']))?: false;
		if($key === false)
				echo "Key is not set.";exit;

		switch ($this->encrypiton) {
			case 'CRYPT_STD_DES':
				$this->signature =  hash('',(string) $input .$key);
				return $this->signature;
				break;
			case 'CRYPT_EXT_DES':
				
				break;
			case 'CRYPT_MD5':
				
				break;
			case 'CRYPT_BLOWFISH':
				
				break;
			case 'CRYPT_SHA_256':
				 $this->signature =  hash('sha256',(string) $input .$key);
				 return $this->signature;
				break;
			case 'CRYPT_SHA_512':
			
				break;

			
			default:
				
				break;
		}
	}

	public function verify($key,$signature,$input)
	{
		if($this->sign($input,$key) == $signature)
				return true;
	}
}