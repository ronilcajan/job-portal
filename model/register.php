<?php 
	include '../server/server.php';

    if($_POST['role']){
        $name 	= $conn->real_escape_string($_POST['name']);
        $role 	= $conn->real_escape_string($_POST['role']);
        $email	= $conn->real_escape_string($_POST['email']);
        $pass 	= md5($conn->real_escape_string($_POST['pass']));
        $answer = $conn->real_escape_string($_POST['answer']);

        $sql = "SELECT * FROM registrants WHERE email='$email' AND user_type='$role'";
        $result = $conn->query($sql);

        if($result->num_rows){
            $row = $result->fetch_assoc();

            if($row['status']){
                $_SESSION['message'] = 'Email address already registered. Please login <a href="login.php">here</a>.';
                $_SESSION['success'] = 'warning';
            }else{
                $_SESSION['message'] = 'Email address already have a pending registration. Please wait for the management to approve the registration.';
                $_SESSION['success'] = 'warning';
            }

        }else{

            if($role == 'worker'){

                if(empty($answer)){

                    $_SESSION['message'] = 'Answer is required.';
                    $_SESSION['success'] = 'danger';
    
                }else{
                    $insert = "INSERT INTO registrants (`name`,email, user_type, answer, `password`) VALUES ('$name', '$email', '$role', '$answer', '$pass')";	
                    $register = $conn->query($insert);

                    if($register === true){
                        $_SESSION['message'] = 'Success! We will notify you when the management approved your registration.';
                        $_SESSION['success'] = 'success';
                    }else{
                        $_SESSION['message'] = 'Unsuccessful. Please try again later.';
                        $_SESSION['success'] = 'success';
                    }
                }
                

            }else{

                $srs_form 		= $_FILES['srs_form']['name'];
                $permit 		= $_FILES['permit']['name'];
                $bir_form 		= $_FILES['bir_form']['name'];
                $company_profile = $_FILES['company_profile']['name'];
                
                if(empty($srs_form) && empty($permit) && empty($bir_form) && empty($company_profile)){

                    $_SESSION['message'] = 'Please upload all the files required.';
                    $_SESSION['success'] = 'danger';

                }else{

                    // change img name
                    $newsrs_form = date('dmYHis').'-'.str_replace(" ", "", $srs_form);
                    $newpermit = date('dmYHis').'-'.str_replace(" ", "", $permit);
                    $newbir_form = date('dmYHis').'-'.str_replace(" ", "", $bir_form);
                    $newcompany_profile = date('dmYHis').'-'.str_replace(" ", "", $company_profile);
        
                    // image file directory
                    $target = "../uploads/employer_files/".basename($newsrs_form);
                    $target1 = "../uploads/employer_files/".basename($newpermit);
                    $target2 = "../uploads/employer_files/".basename($newbir_form);
                    $target3 = "../uploads/employer_files/".basename($newcompany_profile);

                    if(move_uploaded_file($_FILES['srs_form']['tmp_name'], $target)){

                        move_uploaded_file($_FILES['permit']['tmp_name'], $target1);
                        move_uploaded_file($_FILES['bir_form']['tmp_name'], $target2);
                        move_uploaded_file($_FILES['company_profile']['tmp_name'], $target3);
                        
                        $insert = "INSERT INTO registrants (`name`,email, user_type, file1, file2, file3, file4, `password`) 
                        VALUES ('$name', '$email', '$role', '$newsrs_form', '$newpermit', '$newbir_form', '$newcompany_profile', '$pass')";	
                        $register = $conn->query($insert);
                        
                        if($register === true){

                                $_SESSION['message'] = 'Success! We will notify you when the management approved your registration.';
                                $_SESSION['success'] = 'success';
                            }else{
                                $_SESSION['message'] = 'Unsuccessful. Please try again later.';
                                $_SESSION['success'] = 'success';
                            }

                    }else{
                        $_SESSION['message'] = 'Unsuccessful. Please try again later.';
                        $_SESSION['success'] = 'success';
                    }

                }

            }

        }

        header('Location: ../register.php');

    }
	

  	// suppurted file
	// $supported_image = array('image/gif', 'image/jpg', 'image/jpeg', 'image/png');

	// $sql		= "SELECT id FROM applicants WHERE id='$id'";
	// $result 	= $conn->query($sql);

	// if($result->num_rows > 0){

	// 	if(!empty($img) && in_array($_FILES['profile_img']['type'], $supported_image)){
	// 		$update  = "UPDATE applicants SET `name`='$name', contact_num=$contact, `address`='$address', gender='$gender', birthday='$bday', course='$course', experience='$work_ex', educ_level='$educ_level', status='$status',`image`='$newimg' WHERE id='$id'";
	// 		$update_res  = $conn->query($update);

	// 		if($update_res === true){
	// 			$validation['message'] = 'Applicant information has been saved!';
	// 			$validation['success'] = true;

	// 			if(move_uploaded_file($_FILES['profile_img']['tmp_name'], $target)){
	// 				$validation['message'] = 'Applicant image has been saved!';
	// 				$validation['success'] = true;
	// 			}
	// 		}else{
	// 			$validation['message'] = 'Applicant not save!';
	// 			$validation['success'] = false;
	// 		}

	// 	}else{
	// 		$update  = "UPDATE applicants SET `name`='$name', contact_num=$contact, `address`='$address', gender='$gender', birthday='$bday', course='$course', experience='$work_ex', educ_level='$educ_level', `status`='$status' WHERE id='$id'";
	// 		$update_res  = $conn->query($update);

	// 		if($update_res === true){
	// 			$validation['message'] = 'Applicant information has been updated!';
	// 			$validation['success'] = true;
	// 		}else{
	// 			$validation['message'] = 'Applicant not save!';
	// 			$validation['success'] = false;
	// 		}
	// 	}
	// }else{
	// 	if(!empty($img) && in_array($_FILES['profile_img']['type'], $supported_image)){
	// 		$insert 	= "INSERT INTO applicants (`name`, `contact_num`, `address`, gender, birthday, course, experience, educ_level, `image`) VALUES ('$name', $contact, '$address', '$gender', '$bday', '$course', '$work_ex', '$educ_level', '$newimg')";	
	// 		$insert_res 	= $conn->query($insert);

	// 		if($insert_res === true){
	// 			if(move_uploaded_file($_FILES['profile_img']['tmp_name'], $target)){
	// 				$validation['message'] = 'Applicant image has been saved!';
	// 				$validation['success'] = true;
	// 			}
	// 			$validation['message'] = 'Applicant information has been saved!';
	// 			$validation['success'] = true;
	// 		}else{
	// 			$validation['message'] = 'Applicant not save!';
	// 			$validation['success'] = false;
	// 		}

	// 	}else{
	// 		$insert 	= "INSERT INTO applicants (`name`, `contact_num`, `address`, gender, birthday, course, experience, educ_level) VALUES ('$name', $contact,' $address', '$gender', '$bday', '$course', '$work_ex', '$educ_level')";	
	// 		$insert_res 	= $conn->query($insert);
	// 		if($insert_res === true){
	// 			$validation['message'] = 'Applicant information has been saved!';
	// 			$validation['success'] = true;
	// 		}else{
	// 			$validation['message'] = 'Product not save!';
	// 			$validation['success'] = false;
	// 		}
	// 	}
		
	// }

	$conn->close();

