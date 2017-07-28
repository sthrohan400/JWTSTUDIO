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
	$config['issued_by'] = '';
	return $config;
}

}

// Registered Claim Names

//    The following Claim Names are registered in the IANA "JSON Web Token
//    Claims" registry established by Section 10.1.  None of the claims
//    defined below are intended to be mandatory to use or implement in all
//    cases, but rather they provide a starting point for a set of useful,
//    interoperable claims.  Applications using JWTs should define which
//    specific claims they use and when they are required or optional.  All
//    the names are short because a core goal of JWTs is for the
//    representation to be compact.

// 4.1.1.  "iss" (Issuer) Claim

//    The "iss" (issuer) claim identifies the principal that issued the
//    JWT.  The processing of this claim is generally application specific.
//    The "iss" value is a case-sensitive string containing a StringOrURI
//    value.  Use of this claim is OPTIONAL.

// 4.1.2.  "sub" (Subject) Claim

//    The "sub" (subject) claim identifies the principal that is the
//    subject of the JWT.  The claims in a JWT are normally statements
//    about the subject.  The subject value MUST either be scoped to be
//    locally unique in the context of the issuer or be globally unique.
//    The processing of this claim is generally application specific.  The
//    "sub" value is a case-sensitive string containing a StringOrURI
//    value.  Use of this claim is OPTIONAL.

// 4.1.3.  "aud" (Audience) Claim

//    The "aud" (audience) claim identifies the recipients that the JWT is
//    intended for.  Each principal intended to process the JWT MUST
//    identify itself with a value in the audience claim.  If the principal
//    processing the claim does not identify itself with a value in the
//    "aud" claim when this claim is present, then the JWT MUST be
//    rejected.  In the general case, the "aud" value is an array of case-
//    sensitive strings, each containing a StringOrURI value.  In the
//    special case when the JWT has one audience, the "aud" value MAY be a
//    single case-sensitive string containing a StringOrURI value.  The
//    interpretation of audience values is generally application specific.
//    Use of this claim is OPTIONAL.

// 4.1.4.  "exp" (Expiration Time) Claim

//    The "exp" (expiration time) claim identifies the expiration time on
//    or after which the JWT MUST NOT be accepted for processing.  The
//    processing of the "exp" claim requires that the current date/time
//    MUST be before the expiration date/time listed in the "exp" claim.



// Jones, et al.                Standards Track                    [Page 9]
 
// RFC 7519                  JSON Web Token (JWT)                  May 2015


//    Implementers MAY provide for some small leeway, usually no more than
//    a few minutes, to account for clock skew.  Its value MUST be a number
//    containing a NumericDate value.  Use of this claim is OPTIONAL.

// 4.1.5.  "nbf" (Not Before) Claim

//    The "nbf" (not before) claim identifies the time before which the JWT
//    MUST NOT be accepted for processing.  The processing of the "nbf"
//    claim requires that the current date/time MUST be after or equal to
//    the not-before date/time listed in the "nbf" claim.  Implementers MAY
//    provide for some small leeway, usually no more than a few minutes, to
//    account for clock skew.  Its value MUST be a number containing a
//    NumericDate value.  Use of this claim is OPTIONAL.

// 4.1.6.  "iat" (Issued At) Claim

//    The "iat" (issued at) claim identifies the time at which the JWT was
//    issued.  This claim can be used to determine the age of the JWT.  Its
//    value MUST be a number containing a NumericDate value.  Use of this
//    claim is OPTIONAL.

// 4.1.7.  "jti" (JWT ID) Claim

//    The "jti" (JWT ID) claim provides a unique identifier for the JWT.
//    The identifier value MUST be assigned in a manner that ensures that
//    there is a negligible probability that the same value will be
//    accidentally assigned to a different data object; if the application
//    uses multiple issuers, collisions MUST be prevented among values
//    produced by different issuers as well.  The "jti" claim can be used
//    to prevent the JWT from being replayed.  The "jti" value is a case-
//    sensitive string.  Use of this claim is OPTIONAL.