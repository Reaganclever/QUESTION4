<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Character encoding -->
    <meta charset="UTF-8">

    <!-- Responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Page title -->
    <title>Employee Management</title>

    <!-- Link CSS file -->
    <link rel="stylesheet" href="styles.css">

</head>

<body>

  <!-- Particles Background -->
  <div id="particles-js"></div>

    <!-- Main container -->
    <div class="container">

        <!-- Heading -->
        <h1>Employee Details</h1>

        <!-- Button to add employee -->
        <button id="addEmployeeBtn">
            Add Employee
        </button>

        <!-- Employee Table -->
        <table id="employeeTable">

            <!-- Table headings -->
            <thead>

                <tr>
                    <th>Employee ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Department</th>
                </tr>

            </thead>

            <!-- Employee data inserted dynamically -->
            <tbody>

            </tbody>

        </table>

    </div>

    <!-- Link JavaScript file -->
    <script src="script.js"></script>

    <!-- Particles.js Script-->
  <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
  <script src="particles-config.js"></script> 

</body>

</html>