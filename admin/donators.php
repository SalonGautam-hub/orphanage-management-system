<?php include './admin_components/admin_header.php' ?>

    <div class="ui container">

        <?php include './admin_components/admin_top-menu.php' ?>

        <div class="ui grid">
            <?php include './admin_components/admin_side-menu.php' ?>

            <div class="twelve wide column">
                <h1>Donators</h1>
                

                <table class="ui celled table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Orphanage Name</th>
                            <th>Amount</th>
                            <th>Check No.</th>
                            <th>Bank Name</th>
                            <th>Place</th>
                            <th>Donator's Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            $sql = "SELECT * FROM donator";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {

                        ?>
                        <tr>
                            <td data-label="ID"><?php echo $row['id']; ?></td>
                            <td data-label="orphanage Name"><?php echo $row['orphanage']; ?></td>
                            <td data-label="Amount"><?php echo $row['amount']; ?></td>
                            <td data-label="Check No."><?php echo $row['chequeno']; ?></td>
                            <td data-label="Bank Name"><?php echo $row['bankname']; ?></td>
                            <td data-label="Place"><?php echo $row['place']; ?></td>
                            <td data-label="Donator's Name"><?php echo $row['d_name']; ?></td>
                            <td data-label="Email"><?php echo $row['email']; ?></td>
                            <td data-label="Phone"><?php echo $row['phone']; ?></td>
                            <td data-label="Address"><?php echo $row['d_address']; ?></td>
                        </tr>

                        <?php
                                }
                            }
                        ?>

                    </tbody>
                </table>

            </div>
        </div>

    </div>
    