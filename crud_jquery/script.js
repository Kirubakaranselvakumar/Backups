$(document).ready(function () {
    fetchPatients();
    console.log("fetch");
    $("#patientForm").on("submit", function (e) {
        e.preventDefault();
        let formData = $(this).serialize();
        let patient_id = $("#patient_id").val();
        console.log("before ajax");
        $.ajax({
            url: patient_id ? "update_patient.php" : "add_patient.php",
            type: "POST",
            data: formData,
            success: function (response) {
                console.log("@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@");
                fetchPatients();
                $("#patientForm")[0].reset();
                $("#patient_id").val('');
            }
            
        });
    });
});

// function fetchPatients() {
//     $.ajax({
//         url: "get_patient.php",
//         type: "GET",
//         success: function(data) {
//             $("#patientList").html(data);
//         }
//     });
// }

function editPatient(id) {
    $.ajax({
        url: "get_patient.php",
        type: "GET",
        data: { patient_id: id },
        success: function (data) {
            let patient = JSON.parse(data);
            $("#patient_id").val(patient.patient_id);
            $("#firstname").val(patient.first_name);
            $("#middlename").val(patient.middle_name);
            $("#lastname").val(patient.last_name);
            $("#dob").val(patient.dob);
            $("#mobile").val(patient.mobile);
            $("#email").val(patient.email);
            $("#gender").val(patient.gender);
            $("#city").val(patient.city);
            $("#district").val(patient.district);
            $("#state").val(patient.state);
            $("#country").val(patient.country);
            $("#pincode").val(patient.pincode);
            $("#bloodgroup").val(patient.blood_group);
            $("#height").val(patient.height);
            $("#weight").val(patient.weight);
            $("#bmi").val(patient.bmi);
            $("#maritalstatus").val(patient.marital_status);
        }
    });
}

// function deletePatient(id) {
//     if (confirm("Are you sure you want to delete this patient?")) {
//         $.ajax({
//             url: "delete_patient.php",
//             type: "POST",
//             data: { patient_id: id },
//             success: function(response) {
//                 fetchPatients();
//             }
//         });
//     }
// }



// $(document).ready(function() {
//     fetchPatients();

//     $("#patientForm").on("submit", function(e) {
//         e.preventDefault();
//         let formData = $(this).serialize();
//         alert(formData)

//         $.ajax({
//             url: "add_patient.php",
//             type: "POST",
//             data: formData,
//             success: function(response) {
//                 fetchPatients();
//                 console.log(formData);
//                 $("#patientForm")[0].reset();
//                 console.log(response);
//             }
//         });
//     });
// });

function fetchPatients() {
    $.ajax({
        url: "get_patient.php",
        type: "GET",
        success: function (data) {
            $("#patientList").html(data);
        }
    });
}

// function editPatient(id) {
//     $.ajax({
//         url: "update_patient.php",
//         type: "GET",
//         data: { patient_id: id },
//         success: function(data) {
//             let patient = JSON.parse(data);
//             $("#patient_id").val(patient.patient_id);
//             $("#firstname").val(patient.firstname);
//             $("#middlename").val(patient.middlename);
//             $("#lastname").val(patient.lastname);
//             $("#dob").val(patient.dob);
//             $("#mobile").val(patient.mobile);
//             $("#email").val(patient.email);
//             $("#gender").val(patient.gender);
//             $("#city").val(patient.city);
//             $("#district").val(patient.district);
//             $("#state").val(patient.state);
//             $("#country").val(patient.country);
//             $("#pincode").val(patient.pincode);
//             $("#bloodgroup").val(patient.bloodgroup);
//             $("#weight").val(patient.weight);
//             $("#bmi").val(patient.bmi);
//             $("#maritalstatus").val(patient.maritalstatus);
//             console.log('patient',patient);
//         }
//     });
// }

function deletePatient(id) {
    if (confirm("Are you sure you want to delete this patient?")) {
        $.ajax({
            url: "delete_patient.php",
            type: "POST",
            data: { patient_id: id },
            success: function (response) {
                fetchPatients();
            }
        });
    }
}


