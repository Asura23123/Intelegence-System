<?php
include 'database/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $contact_no = $_POST['contact_no'];
    $role = 'staff';
    $created_at = date('Y-m-d H:i:s');

    $stmt = $con->prepare("INSERT INTO users (username, password, role, email, contact_no, created_at) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $username, $password, $role, $email, $contact_no, $created_at);

    if ($stmt->execute()) {
        echo "New staff added successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $con->close();
}
?>

<h2 class="mb-4">Add Staff</h2>

<div style="display: flex; justify-content: center; height: 100vh;">
    <form method="POST" action="" id="membershipForm" style="width: 50%;">
        <div class="mb-3">
            <label>Username:</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Password:</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Contact No:</label>
            <input type="text" name="contact_no" class="form-control" required>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary w-50" id="submitMembershipForm">Submit</button>
        </div>
    </form>
</div>