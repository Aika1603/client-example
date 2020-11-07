<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

//for algo HS256
$config['jwt_key'] = '8cc58ca24d9bf1b488640e2d86974fc0'; 

//for algo RS256
$config['public_key'] = <<<EOD
-----BEGIN PUBLIC KEY-----
MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEA2jav8H+VNdKwoj89mLGJ
pK/3gIApXwJdYgidNiv5WGYPZ9DMcJ1+Y3JxArm7V/yFBdA99WB4eRn8MatuMZss
R5sOkVaRCJ/LFebjacq7wnJGW8InzOpVjCfwyTVnz6dEWqDoqmwtHTsFTQAF5Gk+
FxY0gUSaoaLZqn1iZ6Hl3n5Wzguz/YOkw235KPbi/ZdEA+FmVYELd8Z32P6LWSvT
YnTuL7b1dgcoggSEFMmSgg+wwvStfoHcUkvfisK+HzuubtgVXuhyVkDLaVXMxXst
5mTfDhbHYdxqAFPNshUwGRpSNt0Bg4/BiSyHXChua7Z12wD0zgZU/9t5/HU/o5Yf
rUFNsbwKGuZEfI3JoV/dZlp6jQCPh/0yJSMfQKvVvqxBmRW40xf9/UCK/u+x3bHR
KV9SxqIE+3pUagcG/5zUocZsavU5d6j/PlmaFzVWGhtgOdUbevtb8r3cJwGbpQ4J
Dv2+RKVWK8Y1jOIZtAxpNqxGlVvUII/WjU1/TqLdG7Mp3YA/8ccBVSI6skolXCrq
K6XB3kMkhcM8kjW6kcDFz8fODMEyGe7pQza0VX13w24dlaosdHzAz4Rc7MMbFgf7
7g42f09iiahPVxBhTi5R5uZU8FfeZEkT0/O7+Up642NJTRabfHHdkVI609hJm4X2
klAA0UNj3ZhO8jgBGrB31FkCAwEAAQ==
-----END PUBLIC KEY-----
EOD;
