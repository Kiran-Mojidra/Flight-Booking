<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['ausername'])) {
    // User is not logged in, redirect to the login page
    header("Location: login.php");
    exit();
}

// User is logged in, display the index page content
?>


<?php
include 'connection.php';

// Query to fetch admin data
$sql = "SELECT id, ausername, emailid, fullname FROM adminlogin";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

// Check if the form is submitted
if (isset($_POST['add_admin'])) {
    // Retrieve form data
    $username = $_POST["ausername"];
    $emailid = $_POST["emailid"];
    $password = $_POST["password"];
    $fullname = $_POST["fullname"];

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the SQL statement
    $insert_sql = "INSERT INTO adminlogin (ausername, emailid, password, fullname) VALUES (?, ?, ?, ?)";
    $insert_stmt = $conn->prepare($insert_sql);
    $insert_stmt->bind_param("ssss", $username, $emailid, $hashedPassword, $fullname);

    // Execute the statement
    if ($insert_stmt->execute()) {
        // Successful insertion
        echo "<script>alert('Admin added successfully!');</script>";
        //Redirect back to this page to refresh the table
        echo "<script>window.location.href = 'admin.php';</script>";

    } else {
        // Error occurred
        echo "<script>alert('Error occurred while adding admin: " . $insert_stmt->error . "');</script>";
    }

    // Close the statement
    $insert_stmt->close();
}

if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    // Delete the record from the database
    $delete_query = "DELETE FROM adminlogin WHERE id = ?";
    $delete_stmt = $conn->prepare($delete_query);
    $delete_stmt->bind_param("i", $delete_id);

    if ($delete_stmt->execute()) {
        echo "<script>alert('Record deleted successfully');</script>";
        echo "<script>window.location.href = 'admin.php';</script>";
    } else {
        echo "<script>alert('Error deleting record: " . $delete_stmt->error . "');</script>";
    }

    $delete_stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Detail</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="icon" href="../Images/wings.png">
    <style>
        .add-admin-form {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <h2>Admin Data</h2>
        <!-- Search input -->
        <input type="text" id="searchInput" class="form-control mb-3" onkeyup="searchAdmin()" placeholder="Search...">

        <!-- Table for displaying admin data -->
        <table id="adminTable" class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email ID</th>
                    <th>Full Name</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . htmlspecialchars($row["id"]) . "</td>
                                <td>" . htmlspecialchars($row["ausername"]) . "</td>
                                <td>" . htmlspecialchars($row["emailid"]) . "</td>
                                <td>" . htmlspecialchars($row["fullname"]) . "</td>
                                <td><button style='background:red; height:50px;width:100px;border-radius:10px;'><a href='?delete_id=" . htmlspecialchars($row['id']) . "' style='text-decoration:none; color:white;'>Delete</a></button></td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No admin data found</td></tr>";
                }
                $stmt->close();
                $conn->close();
                ?>
            </tbody>
        </table>

        <!-- Button to add new admin -->
        <button class="btn btn-primary" onclick="showAddAdminForm()">Add New Admin</button>

        <!-- Form for adding new admin (initially hidden) -->
        <div id="addAdminForm" class="add-admin-form" style="display: none;">
            <h3>Add New Admin</h3>
            <form id="addAdminFormData" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="emailid" class="form-label">Email ID:</label>
                    <input type="email" class="form-control" id="emailid" name="emailid" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-3">
                    <label for="fullname" class="form-label">Full Name:</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" required>
                </div>
                <input type="submit" class="btn btn-primary" value="Add Admin" name="add_admin">
            </form>
        </div>
    </div>

    <script>
        function showAddAdminForm() {
            var addAdminForm = document.getElementById("addAdminForm");
            addAdminForm.style.display = addAdminForm.style.display === "none" ? "block" : "none";
        }

        function searchAdmin() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("adminTable");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1]; // Search by username
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

        // Client-side form validation
        document.getElementById("addAdminFormData").addEventListener("submit", function(event) {
            var usernameInput = document.getElementById("username");
            var emailInput = document.getElementById("emailid");
            var passwordInput = document.getElementById("password");
            var fullnameInput = document.getElementById("fullname");

            if (usernameInput.value.trim() === "") {
                alert("Please enter a username.");
                event.preventDefault();
                return;
            }

            if (emailInput.value.trim() === "") {
                alert("Please enter an email ID.");
                event.preventDefault();
                return;
            }

            if (passwordInput.value.trim() === "") {
                alert("Please enter a password.");
                event.preventDefault();
                return;
            }

            if (fullnameInput.value.trim() === "") {
                alert("Please enter a full name.");
                event.preventDefault();
                return;
            }
        });
    </script>

    <?php include 'footer.php'; ?>
</body>
</html>