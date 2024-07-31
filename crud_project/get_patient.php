<!-- <?php
        include 'db.php';

        if (isset($_GET['patient_id'])) {
            $patient_id = $_GET['patient_id'];
            $stmt = $pdo->prepare("SELECT * FROM patients WHERE patient_id = ?");
            $stmt->execute([$patient_id]);
            echo json_encode($stmt->fetch(PDO::FETCH_ASSOC));
        } else {
            $stmt = $pdo->query("SELECT * FROM patients");
            $patients = $stmt->fetchAll(PDO::FETCH_ASSOC);

            echo "<table border='1'>
            <tr>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Date of Birth</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Gender</th>
                <th>City</th>
                <th>District</th>
                <th>State</th>
                <th>Country</th>
                <th>Pincode</th>
                <th>Blood Group</th>
                <th>Height</th>
                <th>Weight</th>
                <th>BMI</th>
                <th>Marital Status</th>
                <th>Actions</th>
            </tr>";
            foreach ($patients as $patient) {
                echo "<tr>
                <td>{$patient['firstname']}</td>
                <td>{$patient['middlename']}</td>
                <td>{$patient['lastname']}</td>
                <td>{$patient['dob']}</td>
                <td>{$patient['mobile']}</td>
                <td>{$patient['email']}</td>
                <td>{$patient['gender']}</td>
                <td>{$patient['city']}</td>
                <td>{$patient['district']}</td>
                <td>{$patient['state']}</td>
                <td>{$patient['country']}</td>
                <td>{$patient['pincode']}</td>
                <td>{$patient['bloodgroup']}</td>
                <td>{$patient['height']}</td>
                <td>{$patient['weight']}</td>
                <td>{$patient['bmi']}</td>
                <td>{$patient['maritalstatus']}</td>
                <td>
                    <button onclick='editPatient({$patient['patient_id']})'>Edit</button>
                    <button onclick='deletePatient({$patient['patient_id']})'>Delete</button>
                </td>
            </tr>";
            }
            echo "</table>";
        }
        ?> -->



<?php
include 'db.php';

if (isset($_GET['patient_id'])) {
    $patient_id = $_GET['patient_id'];
    $stmt = $pdo->prepare("SELECT * FROM patients WHERE patient_id = ?");
    $stmt->execute([$patient_id]);
    echo json_encode($stmt->fetch(PDO::FETCH_ASSOC));
    echo"error";
} else {
    $stmt = $pdo->query("SELECT * FROM patients");
    $patients = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "get-data"; 
    echo "<table border='1'>
      <tr>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Date of Birth</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Gender</th>
                <th>City</th>
                <th>District</th>
                <th>State</th>
                <th>Country</th>
                <th>Pincode</th>
                <th>Blood Group</th>
                <th>Height</th>
                <th>Weight</th>
                <th>BMI</th>
                <th>Marital Status</th>
                <th>Actions</th>
            </tr>";
    foreach ($patients as $patient) {
        echo "<tr>
                <td>{$patient['firstname']}</td>
                <td>{$patient['middlename']}</td>
                <td>{$patient['lastname']}</td>
                <td>{$patient['dob']}</td>
                <td>{$patient['mobile']}</td>
                <td>{$patient['email']}</td>
                <td>{$patient['gender']}</td>
                <td>{$patient['city']}</td>
                <td>{$patient['district']}</td>
                <td>{$patient['state']}</td>
                <td>{$patient['country']}</td>
                <td>{$patient['pincode']}</td>
                <td>{$patient['bloodgroup']}</td>
                <td>{$patient['height']}</td>
                <td>{$patient['weight']}</td>
                <td>{$patient['bmi']}</td>
                <td>{$patient['maritalstatus']}</td>
                <td>
                    <button onclick='editPatient({$patient['patient_id']})'>Edit</button>
                    <button onclick='deletePatient({$patient['patient_id']})'>Delete</button>
                </td>
            </tr>";
    }
    echo "</table>";
}
?>