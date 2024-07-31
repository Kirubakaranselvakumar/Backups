<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="script.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<h1>Patient Management</h1>
<form id="patientForm">
        <input type="hidden" id="patient_id" name="patient_id">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="first_name"><br>

        <label for="middlename">Middle Name:</label>
        <input type="text" id="middlename" name="middle_name"><br>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="last_name"><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob"><br>

        <label for="mobile">Mobile:</label>
        <input type="text" id="mobile" name="mobile"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>

        <label>Gender:</label>
        <input type="radio" id="male" name="gender" id="gender" value="Male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" id="gender" value="Female">
        <label for="female">Female</label>
        <br><br>

        <label for="city">City:</label>
        <input type="text" id="city" name="city"><br>

        <label for="district">District:</label>
        <input type="text" id="district" name="district"><br>

        <label for="state">State:</label>
        <input type="text" id="state" name="state"><br>

        <label for="country">Country:</label>
        <input type="text" id="country" name="country"><br>

        <label for="pincode">Pincode:</label>
        <input type="text" id="pincode" name="pincode"><br>

        <label for="bloodgroup">Blood Group:</label>
        <select id="bloodgroup" name="blood_group">
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
        <input type="number" id="height" name="height"><br>

        <label for="weight">Weight:</label>
        <input type="number" id="weight" name="weight"><br>

        <label for="bmi">BMI:</label>
        <input type="number" id="bmi" name="bmi"><br>

        <label for="maritalstatus">Marital Status:</label>
        <select id="maritalstatus" name="marital_status">
            <option value="">Select</option>
            <option value="Unmarried">Unmarried</option>
            <option value="Married">Married</option>
        </select>
        <br><br>
        <!-- <label for="maritalstatus">Marital Status:</label>
        <input type="text" id="maritalstatus" name="maritalstatus" ><br> -->

        <a type="submit" class="btn btn-info" href="/crud_jquery/">Submit</a>
        </form>


