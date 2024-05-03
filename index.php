<?php
// Create connection
$conn = new mysqli('localhost', 'root', '', 'CSCI4410', 3307);  // Adjusted for XAMPP default with port 3307

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

// Function to display query results in HTML table
function display_results($result) {
    if ($result->num_rows > 0) {
        // Start the table
        echo "<table>";
        // Output headers dynamically based on the fetched fields
        echo "<tr>";
        foreach ($result->fetch_fields() as $field) {
            echo "<th>" . $field->name . "</th>";
        }
        echo "</tr>";

        // Output rows
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>" . $value . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
}

// Select and display all records
$result = $conn->query("SELECT * FROM Students");
echo "<h3>All Students:</h3>";
display_results($result);

// Select and display all male students
$result = $conn->query("SELECT * FROM Students WHERE Gender='Male'");
echo "<h3>Male Students:</h3>";
display_results($result);

// Select and display all female students
$result = $conn->query("SELECT * FROM Students WHERE Gender='Female'");
echo "<h3>Female Students:</h3>";
display_results($result);

// Select and display all students older than 21
$result = $conn->query("SELECT * FROM Students WHERE Age > 21");
echo "<h3>Students Older Than 21:</h3>";
display_results($result);

// Find out how many different majors and display them
$result = $conn->query("SELECT DISTINCT Major FROM Students");
echo "<h3>Different Majors:</h3>";
display_results($result);

// Select all the students without phone information and display them
$result = $conn->query("SELECT * FROM Students WHERE Phone IS NULL");
echo "<h3>Students Without Phone Information:</h3>";
display_results($result);

// Insert a new row/tuple
$sql = "INSERT INTO Students (ID, Name, BlueCard, Major, Class_Level, Email, Gender, Age, Phone) VALUES (11, 'New Student', '99988877', 'New Major', 'Freshman', 'newstudent@mtsu.edu', 'Male', 20, '123-456-7891')";
if ($conn->query($sql) === TRUE) {
    echo "New record inserted successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
}

// Delete the tuple you just inserted
$sql = "DELETE FROM Students WHERE ID = 11";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
}

// Update John Doe's phone number
$sql = "UPDATE Students SET Phone='321-654-0987' WHERE Name='John Doe'";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
}

// Close the connection
$conn->close();
?>

<!-- Link to CSS file -->
<link type="text/css" rel="stylesheet" href="ola6.css" />
