<?php
include 'db.php';

$patient_id = $_POST['patient_id'];
$firstname = $_POST['first_name'];
$middlename = $_POST['middle_name'];
$lastname = $_POST['last_name'];
$dob = $_POST['dob'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$district = $_POST['district'];
$state = $_POST['state'];
$country = $_POST['country'];
$pincode = $_POST['pincode'];
$bloodgroup = $_POST['blood_group'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$bmi = $_POST['bmi'];
$maritalstatus = $_POST['marital_status'];

if ($patient_id) {
    $sql = "UPDATE patients SET first_name=?, middle_name=?, last_name=?, dob=?, mobile=?, email=?, gender=?, city=?, district=?, state=?, country=?, pincode=?, blood_group=?, height=?, weight=?, bmi=?, marital_status=? WHERE patient_id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$firstname, $middlename, $lastname, $dob, $mobile, $email, $gender, $city, $district, $state, $country, $pincode, $bloodgroup, $height, $weight, $bmi, $maritalstatus, $patient_id]);

    echo"Updated successfully";
}
else{
    Echo "Error while  Updating data";
}
?>