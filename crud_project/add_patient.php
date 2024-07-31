<!-- <?php
        include 'db.php';

        $patient_id = $_POST['patient_id'] ?? null;
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];
        $district = $_POST['district'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        $pincode = $_POST['pincode'];
        $bloodgroup = $_POST['bloodgroup'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $bmi = $_POST['bmi'];
        $maritalstatus = $_POST['maritalstatus'];

        if ($patient_id) {
            $sql = "UPDATE patients SET firstname=?, middlename=?, lastname=?, dob=?, mobile=?, email=?, gender=?, city=?, district=?, state=?, country=?, pincode=?, bloodgroup=?,weight=?, height=?, bmi=?, maritalstatus=? WHERE patient_id=?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$firstname, $middlename, $lastname, $dob, $mobile, $email, $gender, $city, $district, $state, $country, $pincode, $bloodgroup, $height, $weight, $bmi,  $maritalstatus, $patient_id]);
        } else {
            $sql = "INSERT INTO patients (firstname, middlename, lastname, dob, mobile, email, gender, city, district, state, country, pincode, bloodgroup, height, weight, bmi, maritalstatus) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            // $sql = "INSERT INTO public.patients( firstname, middlename, lastname, dob, mobile, email, gender, city, district, state, country, pincode, bloodgroup, weight,height,bmi, maritalstatus)
            // VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

            $stmt = $pdo->prepare($sql);
            $stmt->execute([$firstname, $middlename, $lastname, $dob, $mobile, $email, $gender, $city, $district, $state, $country, $pincode, $bloodgroup, $weight, $bmi, $height, $maritalstatus]);
        }
        ?> -->


<?php
include 'db.php';

$patient_id = $_POST['patient_id'] ?? null;
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$dob = $_POST['dob'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$district = $_POST['district'];
$state = $_POST['state'];
$country = $_POST['country'];
$pincode = $_POST['pincode'];
$bloodgroup = $_POST['bloodgroup'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$bmi = $_POST['bmi'];


if ($weight > 0 && $height > 0) {
    $bmi = $weight / ($height * $height);  // BMI formula
    // Round BMI to two decimal places
    $bmi = round($bmi, 2);
} else {
    $bmi = null;  // Handle invalid inputs gracefully
}

// $bmi = $_POST['bmi'];
$maritalstatus = $_POST['maritalstatus'];

if ($patient_id) {
    // $sql = "UPDATE patients SET firstname=?, middlename=?, lastname=?, dob=?, mobile=?, email=?, gender=?, city=?, district=?, state=?, country=?, pincode=?, bloodgroup=?, weight=?, height=?, bmi=?, maritalstatus=? WHERE patient_id=?";
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute([$firstname, $middlename, $lastname, $dob, $mobile, $email, $gender, $city, $district, $state, $country, $pincode, $bloodgroup, $weight, $bmi, $height, $maritalstatus, $patient_id]);
    $sql = "UPDATE patients SET firstname='$firstname, middlename='$middlename', lastname='$lastname', dob='$dob', mobile='$mobile', email='$email', gender='$gender', city='$city', district='$district', state='$state', country='$country', pincode='$pincode', bloodgroup='$bloodgroup',weight=$weight, height=$height, bmi=$bmi, maritalstatus='$maritalstatus' WHERE patient_id=$patient_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

} else {
    // $sql = "INSERT INTO patients (firstname, middlename, lastname, dob, mobile, email, gender, city, district, state, country, pincode, bloodgroup, weight, height, bmi, maritalstatus) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute([$firstname, $middlename, $lastname, $dob, $mobile, $email, $gender, $city, $district, $state, $country, $pincode, $bloodgroup, $weight, $bmi, $height, $maritalstatus]);
    $sql = "INSERT INTO public.patients( 
        patient_id, firstname, middlename, lastname, dob, mobile, email, gender, city, district, state, country, pincode, bloodgroup, weight, bmi, maritalstatus, height)
       VALUES ($patient_id, '$firstname','$middlename','$lastname', '$dob', '$mobile', '$email', '$gender', '$city', '$district', '$state', '$country', '$pincode', '$bloodgroup', $weight, $bmi, '$maritalstatus', $height);";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
}
?>