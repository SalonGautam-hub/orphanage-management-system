<?php include './admin_components/admin_header.php' ?>

<div class="ui container">

    <?php include './admin_components/admin_top-menu.php' ?>

    <div class="ui grid">
        <?php include './admin_components/admin_side-menu.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $established_year = $_POST['established_year'];
            $location = $_POST['location'];
            $contact_number = $_POST['contact_number'];
            $number_of_orphans = $_POST['number_of_orphans'];

            if (
                empty($name) || empty($established_year) || empty($location) || empty($contact_number) ||
                empty($number_of_orphans)
            ) {
                $error = "All fields are required!";
            } else {
                $stmt = $conn->prepare("INSERT INTO orphanage (name, estyear, location, contact_number,
        number_of_orphans) VALUES (?, ?, ?, ?, ?)");
                if ($stmt === false) {
                    die('Prepare failed: ' . htmlspecialchars($conn->error));
                }

                $stmt->bind_param("sissi", $name, $established_year, $location, $contact_number, $number_of_orphans);

                if ($stmt->execute()) {
                    header('Location:orphanageName.php');
                } else {
                    $error = "Error: " . htmlspecialchars($stmt->error);
                }

                $stmt->close();
            }

            $conn->close();
        }
        ?>


        <div class="twelve wide column">
            <h1>Orphanage Registration Form</h1>
            <form action="<?php $_PHP_SELF ?>" method="post" class="ui form">
                <div class="seven wide field">
                    <label>orphanage Name</label>
                    <input type="text" name="name" placeholder="orphanage Name" required>
                </div>
                <div class="seven wide field">
                    <label>Established year</label>
                    <input type="date" name="established_year" required>
                </div>
                <div class="seven wide field">
                    <label>location </label>
                    <input type="text" name="location" placeholder="Location" required>
                </div>
                <div class="seven wide field">
                    <label>Contact Number</label>
                    <input type="number" name="contact_number" placeholder="contact_number" required>
                </div>
                <div class="seven wide field">
                    <label>Number of Orphans </label>
                    <input type="number" name="number_of_orphans" placeholder="Number of Orphans" required>
                </div>

                <button name="submit_orphanage" type="submit" class="ui primary button">Submit</button>
                <button type="reset" class="ui button">Reset</button>
            </form>


        </div>

    </div>
</div>