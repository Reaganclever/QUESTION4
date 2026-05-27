// Function to display employees from XML file

function displayEmployees() {

    // Fetch XML file
    fetch("employees.xml")

    .then(response => response.text())

    .then(data => {

        // Create XML parser
        const parser = new DOMParser();

        // Convert XML text into XML document
        const xml = parser.parseFromString(data, "application/xml");

        // Get all employee tags
        const employees = xml.getElementsByTagName("employee");

        // Select table body
        const tableBody =
        document.querySelector("#employeeTable tbody");

        // Clear previous rows
        tableBody.innerHTML = "";

        // Loop through each employee
        for(let employee of employees){

            // Get employee details
            const id =
            employee.getElementsByTagName("id")[0].textContent;

            const name =
            employee.getElementsByTagName("name")[0].textContent;

            const age =
            employee.getElementsByTagName("age")[0].textContent;

            const department =
            employee.getElementsByTagName("department")[0].textContent;

            // Add row to table
            tableBody.innerHTML += `

            <tr>

                <td>${id}</td>

                <td>${name}</td>

                <td>${age}</td>

                <td>${department}</td>

            </tr>

            `;
        }

    });

}


// Add Employee Button Event

document.getElementById("addEmployeeBtn")
.addEventListener("click", function(){


    // Ask user for employee ID
    let id = prompt("Enter Employee ID");

    // Ask user for employee name
    let name = prompt("Enter Employee Name");

    // Ask user for employee age
    let age = prompt("Enter Employee Age");

    // Ask user for department
    let department = prompt("Enter Department");


    // Send data to PHP file
    fetch("save.php", {

        // Use POST method
        method: "POST",

        // Data format
        headers: {
            "Content-Type":
            "application/x-www-form-urlencoded"
        },

        // Data sent to PHP
        body:

        "id=" + id +

        "&name=" + name +

        "&age=" + age +

        "&department=" + department

    })

    // Convert response to text
    .then(response => response.text())

    .then(data => {

        // Show success message
        alert(data);

        // Reload table immediately
        displayEmployees();

    });

});


// Initial display when page loads
displayEmployees();