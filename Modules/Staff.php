







<table class="data table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Contact No</th>
    </thead>
    <tbody>
        <?php
        // Database connection
        $con = new mysqli('localhost', 'root', '', 'form_db');
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }
        $sql = "SELECT id, username, email, contact_no FROM users WHERE role = 'staff'";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["username"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["contact_no"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No staff found</td></tr>";
        }

        $con->close();
        ?>
    </tbody>
</table>