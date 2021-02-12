<?php
    namespace Fordee  {
        use \PDO;

        class Hash {
            public function key() {
                return $key = '58c02ac8b9ba04ec61cb32165060eca1c8f6618a'; 
            }

            public function encrypt($data, $key) {
                $method 	    = 'aes-256-cbc';
                $iv_lenght 	    = openssl_cipher_iv_length($method);  
                $iv_bytes	    = openssl_random_pseudo_bytes($iv_lenght);
                $ciphertext     = openssl_encrypt($data, $method, $key, 0, $iv_bytes);
                return base64_encode($ciphertext . '|:' . $iv_bytes);
            }
            
            public function decrypt($data, $key) {
                $encrypted	    = base64_decode($data);
                $separator 	    = explode('|:', $encrypted);
                return openssl_decrypt($separator[0], 'aes-256-cbc', $key, 0, $separator[1]);
            }
        }

        class Create {
            public function connection($a,$b,$c,$d) {  
                $conn = null;

                try{
                    $conn = new PDO("mysql:host=$a;dbname=$b;set names utf8",$c,$d);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }catch(PDOException $ex){
                    die();
                }
        
                return $conn;
            }

            public function token($x,$y) {
                $token = sha1(hash('sha512',$x.$y.'>F0RD3E-T0K3N-2O20!<'));
                return $token; 
            }

            public function session($x,$y) {
                $_SESSION[$x] = $y;
                return true;
            }
        }

        class Validate {
            public function token($x,$y,$token) {
                if(sha1(hash('sha512',$x.$y.'>F0RD3E-T0K3N-2O20!<')) == $token){
                    return true;
                };
                return false;
            }

            public function strip($x,$y = true) {
                return $y ? htmlspecialchars(strip_tags($x)) : $x ;
            }
        }

        class Request {
            public function post($x,$y = true, $z = '') {
                $formdata = isset($_POST['formdata']) ? $_POST['formdata'] : file_get_contents('php://input');
                $request  = json_decode($formdata, true);
                return isset($request[$x]) ? $request[$x] : ($y ? $z : die()); 
            }

            public function get($x,$y = true) {
                return isset($_GET[$x]) ? $_GET[$x] : ($y ? '' : die()); 
            }

            public function file($x,$y = true) {
                $files = isset($_FILES[$x]['name']) ? $_FILES[$x]['name'] : ($y ? null : die()); 
                return $files != null ? 
                    $arr = array(
                        'name'=> $_FILES[$x]['name'],
                        'type'=> $_FILES[$x]['type'],
                        'tmp_name' => $_FILES[$x]['tmp_name'], 
                        'size'=> $_FILES[$x]['size']
                    ) : null;
            }

            public function file_encrypt($x,$y) {
                return $x.sha1(date('YmdHis').gettimeofday()['usec']).'.'.pathinfo($y, PATHINFO_EXTENSION);
            }

            public function ip() {
                $ip = null;
                if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                    $ip = $_SERVER['HTTP_CLIENT_IP'];
                } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                } else {
                    $ip = $_SERVER['REMOTE_ADDR'];
                }

                return $ip;
            }
        }

        class Response {
            public function json($x) {
                echo json_encode($x); 
            }
        }


    }
    
?>
