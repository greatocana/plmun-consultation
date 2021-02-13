<?php
    use Fordee\Request;
    use Fordee\Create;
	use Fordee\Hash;

    class AuthController {

        function login($AuthModel,$key) {

            $AuthModel->stud_no = Request::post('stud_no');
			$AuthModel->password = Request::post('password');

            $data = $AuthModel->login();
 
			if($data->rowCount() > 0){

				$response = $data->fetch(PDO::FETCH_ASSOC);

				if(Hash::decrypt($response['password'],$key) == Request::post('password')){

                    $token = Create::token($response['stud_no'],session_id());
                    Create::session('stud_no',$response['stud_no']);
					Create::session('token',$token);

                    $user_arr=array(
                        'status'  => true,
                        'stud_no' => Hash::encrypt($response['stud_no'],$key),
                        'token'   => $token,
                    );
				
				}else{
					$user_arr=array( 
                        'status'  => false, 
                        'message' => 'Invalid credentials',
                    );
				}
			}else{
				$user_arr=array( 
                    'status'  => false, 
                    'message' => 'Invalid credentials'
                );
			}

			echo json_encode($user_arr);	
        }


        function register($AuthModel,$key) {
            
            /* Ito ung mga ipapasa sa model, ung kinocall nung $this->sample */
            $AuthModel->password = Hash::encrypt(Request::post('password'),$key);
            $AuthModel->stud_no = Request::post('stud_no',false);
            $AuthModel->Fname = Request::post('Fname');
            $AuthModel->Mname = Request::post('Mname');
            $AuthModel->Lname = Request::post('Lname');
            $AuthModel->course = Request::post('course');
            $AuthModel->year = Request::post('year');
            
            // ito yung name nung function sa model
            // yan haha
            if($AuthModel->existing_user()) { // ito function to dun sa Authmodel.php , may query doon na kapag meron stud no na, magrereturn ng true
                $user_arr=array(
                    "status"  => false,
                    "message" => 'Existing Student No.!'
                );
            }else {
                 if($AuthModel->register()) {
                    $user_arr=array(
                        "status"  => true,
                        "message" => 'Success!'
                    );
                } else{
                    $user_arr=array(
                        "status"  => false,
                        "message" => 'Failed!'
                    );
                }
            }

			echo json_encode($user_arr);
        }

        
    }
?>