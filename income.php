<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="income.css">
</head>
<body>
    <div class="income">
        <center><h2>Income</h2></center>
    <form action="./income.php" method="POST">
    <label>reason</label><br>
    <input type="text" name="reason" required><br>
    <label>description</label><br>
    <input type="text" name="description" required><br>
    <label>amount</label><br>
    <input type="number" name="amount" required><br>
    <label>created date</label><br>
    <input type="date" name="created_date" required><br>
    <input type="submit" value="send" name="btn">
    </form>
    <?php
    if (isset($_POST['btn'])) {
        include'conn.php';
        $reason=$_POST['reason'];
        $description=$_POST['description'];
        $amount=$_POST['amount'];
        $created_date=$_POST['created_date'];

        $insert=mysqli_query($con,"insert into expenses(reason,description,amount,created_date) values('$reason','$description','$amount','$created_date')");
        if ($insert) {
           header("location:incomeform.php");
        }
        
    }
    
    ?>
</div>
</body>
</html>