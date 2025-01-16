<?php include './admin_components/admin_header.php' ?>

    <div class="ui container">

        <?php include './admin_components/admin_top-menu.php' ?>

        <div class="ui grid">
            <?php include './admin_components/admin_side-menu.php' ?>
            
            <div class="twelve wide column">
                <h1>Orphanage Name</h1>


                <table class="ui celled table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Established Year</th>
                            <th>location</th>
                            <th>Contact</th>
                            <th>No of orphans</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            $sql = "SELECT * FROM orphanage";
                            $result = $conn->query($sql);
    
                            if ($result->num_rows > 0) {
                                $serialNumber = 1;
                                while($row = $result->fetch_assoc()) {
                                $unformated = $row['estyear'];
                                $formateddate = date("d-m-Y", strtotime($unformated));
                        ?>

                        <tr>
                        <td><?php echo $serialNumber++; ?></td>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $formateddate; ?></td>
                            <td><?php echo $row['Location']; ?></td>
                            <td><?php echo $row['Contact_number']; ?></td>
                            <td><?php echo $row['Number_of_orphans'];?></td>
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