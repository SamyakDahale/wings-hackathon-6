<!-- feedback chat data-->
<?php

// Function to connect to the database
function connectToDatabase() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "feedback";

    $conn = new mysqli("localhost", "root", "", "feedback");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

// Function to insert data into the database
function insertData($Name, $PhoneNumber, $EmailID, $Complaint) {
    $conn = connectToDatabase();

    // Validate input
    if (empty($Name) || empty($PhoneNumber) || empty($EmailID) || empty($Complaint)) {
        throw new Exception("All fields must be filled out");
    }

    // You may want to add additional validation for email and phone number format

    // Insert data into the database
    $sql = "INSERT INTO content (Name, PhoneNumber, EmailID, Complaint) VALUES ('$Name', '$PhoneNumber', '$EmailID', '$Complaint')";

    if ($conn->query($sql) === FALSE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
        
    } else {
        echo "Data inserted successfully";
    }

    $conn->close();
}

// Usage example
try {
    // Get data from your form
    $name = $_POST['Name'];
    $phoneNumber = $_POST['PhoneNumber'];
    $email = $_POST['EmailID'];
    $Complaint = $_POST['Complaint'];

    // Insert data into the database
    insertData('Name', 'PhoneNumber', 'EmailID', 'Complaint');
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>
