<?php
include 'database/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $contact_no = $_POST['contact_no'];
    $role = 'staff';
    $created_at = date('Y-m-d H:i:s');
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $experience = isset($_POST['experience']) ? $_POST['experience'] : '';

    $stmt = $con->prepare("INSERT INTO users (username, password, role, email, contact_no, created_at, gender, experience) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $username, $password, $role, $email, $contact_no, $created_at, $gender, $experience);

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
        <div class="mb-3">
            <label>Gender</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="genderMale" value="Male">
                <label class="form-check-label" for="genderMale">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="Female">
                <label class="form-check-label" for="genderFemale">Female</label>
            </div>
             <div class="mb-3">
            <label>Have Expeince?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="experience" id="experienceYes" value="Yes">
                <label class="form-check-label" for="experienceYes">Yes</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="experience" id="experienceNo" value="No">
                <label class="form-check-label" for="experienceNo">No</label>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary w-50" id="submitMembershipForm">Submit</button>
        </div>
    </form>
</div>