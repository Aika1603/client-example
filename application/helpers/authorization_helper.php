<?php
use \Firebase\JWT\JWT;
class AUTHORIZATION
{

    public static function getAuthorizationGetParam(){
        $CI =& get_instance();
        return $CI->input->get('Authorization');
    }

    public static function validateToken($token)
    {
        $CI =& get_instance();
        return JWT::decode($token, $CI->config->item('public_key'), array('RS256'));
    }

    public static function checkToken()
    {
        $CI =& get_instance();
        $jwt_token = self::getAuthorizationGetParam();
        if ($jwt_token) {
            $decodedToken = self::validateToken($jwt_token);
            if ($decodedToken != false) {
                return true;
            }
        }
        return false;
       
    }

    public static function decodedToken()
    {
        $CI =& get_instance();
        $jwt_token = self::getAuthorizationGetParam();
        if ($jwt_token) {
            $decodedToken = self::validateToken($jwt_token);
            if ($decodedToken != false) {
                return $decodedToken;
            }
        }
        return false;
    }

}