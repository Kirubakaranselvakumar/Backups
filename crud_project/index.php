<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operations</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Patient Management</h1>
    <form id="patientForm">
        <input type="hidden" id="patient_id" name="patient_id">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required><br><br>

        <label for="middlename">Middle Name:</label>
        <input type="text" id="middlename" name="middlename"><br><br>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required><br><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required><br><br>

        <label for="mobile">Mobile:</label>
        <input type="text" id="mobile" name="mobile" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label>Gender:</label>
        <input type="radio" name="gender" value="M"> Male
        <input type="radio" name="gender" value="F"> Female<br><br>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" required><br><br>

        <label for="district">District:</label>
        <input type="text" id="district" name="district" required><br><br>

        <label for="state">State:</label>
        <input type="text" id="state" name="state" required><br><br>

        <label for="country">Country:</label>
        <input type="text" id="country" name="country" required><br><br>

        <label for="pincode">Pincode:</label>
        <input type="text" id="pincode" name="pincode" required><br><br>

        <label>Blood Group:</label>
        <select id="bloodgroup" name="bloodgroup">
            <option value="">select</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select><br><br>

        <label>Height (cm):</label>
        <input type="number" step="0.01" id="height" name="height"><br><br>

        <label>Weight (kg):</label>
        <input type="number" step="0.01" id="weight" name="weight"><br><br>

        <label>BMI:</label>
        <input type="number" step="0.01" id="bmi" name="bmi" ><br><br>

        <label>Marital status:</label>
        <select id="bloodgroup" name="bloodgroup">
            <option value="">select</option>
            <option value="unmarried">Unmarried</option>
            <option value="married">Married</option>
            
            
        </select><br><br>


        <button type="submit">Submit</button><br><br>
    </form>

    <div id="patientList"></div>

    <script src="assets/js/script.js"></script>
</body>
</html> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operations</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Patient Management</h1>
    <form id="patientForm">
        <input type="hidden" id="patient_id" name="patient_id">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" ><br>

        <label for="middlename">Middle Name:</label>
        <input type="text" id="middlename" name="middlename"><br>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" ><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" ><br>

        <label for="mobile">Mobile:</label>
        <input type="text" id="mobile" name="mobile" ><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" ><br>

        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="Male" >
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label>
        <br><br>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" ><br>

        <label for="district">District:</label>
        <input type="text" id="district" name="district" ><br>

        <label for="state">State:</label>
        <input type="text" id="state" name="state" ><br>

        <label for="country">Country:</label>
        <input type="text" id="country" name="country" ><br>

        <label for="pincode">Pincode:</label>
        <input type="text" id="pincode" name="pincode" ><br>

        <label for="bloodgroup">Blood Group:</label>
        <select id="bloodgroup" name="bloodgroup" >
            <option value="">Select</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select>
        <br><br>

        <label for="height">Height:</label>
        <input type="number" id="height" name="height" ><br>

        <label for="weight">Weight:</label>
        <input type="number" id="weight" name="weight" ><br>

        <label for="bmi">BMI:</label>
        <input type="number" id="bmi" name="bmi" ><br>

        <label for="maritalstatus">Marital Status:</label>
        <select id="maritalstatus" name="maritalstatus" >
            <option value="">Select</option>
            <option value="Unmarried">Unmarried</option>
            <option value="Married">Married</option>
        </select>
        <br><br>
        <!-- <label for="maritalstatus">Marital Status:</label>
        <input type="text" id="maritalstatus" name="maritalstatus" ><br> -->

        <button type="submit">Submit</button>
    </form>

    <div id="patientList"></div>

    <script src="assets/js/script.js"></script>
</body>
</html>
