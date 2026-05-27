<?php

// Check if form uses POST method
if($_SERVER["REQUEST_METHOD"] == "POST"){


    // Receive values from JavaScript
    $id = $_POST["id"];

    $name = $_POST["name"];

    $age = $_POST["age"];

    $department = $_POST["department"];


    // Load XML file
    $xml = simplexml_load_file("employees.xml");


    // Create new employee node
    $employee = $xml->addChild("employee");


    // Add employee details
    $employee->addChild("id", $id);

    $employee->addChild("name", $name);

    $employee->addChild("age", $age);

    $employee->addChild("department", $department);


    // Save updated XML file
    $xml->asXML("employees.xml");


    // Success message
    echo "Employee Saved Successfully";
}

?>