<!DOCTYPE html>
<html>
<head>
    <title>Add Job</title>

    <style>
        body{
            font-family: Arial;
            background:#f5f5f5;
        }

        .form-box{
            width:400px;
            margin:50px auto;
            padding:20px;
            background:white;
            border-radius:8px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }

        input, textarea{
            width:100%;
            padding:8px;
            margin:8px 0;
        }

        button{
            background:green;
            color:white;
            padding:10px;
            border:none;
            cursor:pointer;
        }
        
    </style>
    <style>
        .toast{
            position: fixed;
            top: 20px;
            right: -350px;
            background: #28a745;
            color: white;
            padding: 14px 22px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            font-weight: bold;
            transition: 0.4s ease;
        }

        .toast.show{
            right: 20px;
        }
    </style>

</head>

<body>

<div class="form-box">

<h2>Post a Job Vacancy</h2>

<form action="save-job.php" method="POST">

    Company Name:
    <input type="text" name="company" required>

    Job Title:
    <input type="text" name="title" required>

    Location:
    <input type="text" name="location" required>

    Salary:
    <input type="text" name="salary">

    Description:
    <textarea name="description" rows="4"></textarea>

    <button type="submit">Post Job</button>

</form>

</div>
<?php if(isset($_GET['success'])){ ?>
    
<div id="toast" class="toast">
    ✅ Job posted successfully!
</div>

<script>
const toast = document.getElementById("toast");

setTimeout(() => {
    toast.classList.add("show"); // slide in
}, 100);

setTimeout(() => {
    toast.classList.remove("show"); // slide out
}, 4000);
</script>

<?php } ?>

</body>
</html>
