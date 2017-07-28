<?php
namespace Jwt\Studio\Base64;

interface EncoderInterface
{
	function encode($data);
	function decode($data);
}