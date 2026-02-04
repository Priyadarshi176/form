<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>
<title>View Jobs</title>

<style>

body{
    font-family: Arial;
    background:#f2f2f2;
}

.container{
    display:flex;
    flex-wrap:wrap;
    gap:20px;
    padding:20px;
}

.card{
    width:250px;
    background:white;
    padding:15px;
    border-radius:10px;
    box-shadow:0 2px 8px rgba(0,0,0,0.1);
}

.card h3{
    margin:0 0 10px;
    color:#2c3e50;
}

.badge{
    background:green;
    color:white;
    padding:3px 8px;
    font-size:12px;
    border-radius:5px;
}

</style>
</head>

<body>

<h2 style="text-align:center;">Available Jobs</h2>

<div class="container">

<?php

$result = $conn->query("SELECT * FROM jobs ORDER BY id DESC");

while($row = $result->fetch_assoc()){

?>

    <div class="card">
        <h3><?php echo $row['job_title']; ?></h3>

        <p><b>Company:</b> <?php echo $row['company_name']; ?></p>

        <p><b>Location:</b> <?php echo $row['location']; ?></p>

        <p><b>Salary:</b>
            <span class="badge"><?php echo $row['salary']; ?></span>
        </p>

        <p><?php echo $row['description']; ?></p>
    </div>

<?php
}
?>

</div>

</body>
</html>
