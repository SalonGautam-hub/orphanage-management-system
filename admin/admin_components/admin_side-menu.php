


<div class="four wide column" id="example1">
    <div class="ui secondary vertical pointing menu">
        <a class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/admin/index.php" ? "active" : "");?>" href="index.php">Dashboard</a>
        <a class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/admin/OrphanageName.php" ? "active" : "");?>" href="./OrphanageName.php">Orphanage Name</a>
        <a class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/admin/orphanage_add.php" ? "active" : "");?>" href="./orphanage_add.php">Add Orphanage</a>
        <a class="item <?php echo ($_SERVER['PHP_SELF'] == "/orphan/admin/donators.php" ? "active" : "");?>" href="donators.php">Donators</a>
    </div>
</div>