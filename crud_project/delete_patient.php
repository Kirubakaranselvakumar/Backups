 <!-- <?php
include 'db.php';

//$patient_id = $_POST['patient_id'];

$sql = "DELETE FROM patients WHERE patient_id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$patient_id]);
?>  -->



<!-- $sql = "UPDATE patients SET firstname='$firstname, middlename='$middlename', lastname='$lastname', dob='$dob', mobile='$mobile', email='$email', gender='$gender', city='$city', district='$district', state='$state', country='$country', pincode='$pincode', bloodgroup='$bloodgroup',weight=$weight, height=$height, bmi=$bmi, maritalstatus='$maritalstatus' WHERE patient_id=$patient_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(); -->



    <?php
include 'db.php';

$patient_id = $_POST['patient_id'];

$sql = "DELETE FROM patients WHERE patient_id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$patient_id]);
?>
