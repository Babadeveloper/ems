<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expenses | EMS</title>
    <link rel="stylesheet" type="text/css" href="expensesform.css">
</head>
<body>
    <div class="tables">    
    <h2>Expenses Table</h2>
    <table border='1' class="tablew3\4">
        <tr>
            <th>ID</th>
            <th>Description</th>
            <th>Reason</th>
            <th>Amount</th>
            <th>Date</th>
        </tr>
        <?php 
        include'conn.php';
        $sql = mysqli_query($con,"select * from expenses;");
        if($sql == true){
           $id = 1;
           while($fetch = $sql->fetch_assoc()){
            $reason = $fetch['reason'];
            $descr= $fetch['description'];
            $amt = $fetch['amount'];
            $date = $fetch['created_date'];
            echo"<tr>
            <td>".$id."</td>
            <td>".$descr."</td>
            <td>".$reason."</td>
            <td>".$amt."</td>
            <td>".$date."</td>
            </tr>";
            $id++;
        }
        }
        ?>
        
    </table>
    <button><a href="expenses.php">Add new</a></button>
    </div>    
</body>
</html>
