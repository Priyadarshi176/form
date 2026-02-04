<?php

include "db.php";   // connect database

$company = $_POST['company'];
$title = $_POST['title'];
$location = $_POST['location'];
$salary = $_POST['salary'];
$description = $_POST['description'];

$sql = "INSERT INTO jobs (company_name, job_title, location, salary, description)
        VALUES ('$company', '$title', '$location', '$salary', '$description')";

$conn->query($sql);

header("Location: add-job.php?success=1");

?>
