<?php
$connect = mysqli_connect("localhost", "root", "", "testing");
$query = "Select * from tbl_order order by order_id desc";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DanielGeek | Ajax PHP MySQL Date Range Search using jQuery DatePicker</title>
    <script src=https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="js/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">  
</head>
<body>
    <br><br>
    <div class="container" style="width:900px;">
        <h2 align="center">Ajax PHP MySQL Date Range Seach using jQuery DataPicker</h2>
        <h3 align="center">Order Data</h3><br>
        <div class="col-md-3">
            <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />
        </div>
        <div class="col-md-3">
            <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />
        </div>
        <div class="col-md-5">
            <input type="button" name="filter" id="filter" value="Filter" class="btn btn-info" />
        </div>
        <div style="clear:both"></div>
        <br>
        <div id="order_table">
            <table class="table table-bordered">
                <tr>
                    <th width="5%">ID</th>
                    <th width="30%">Customer Name</th>
                    <th width="43%">Item</th>
                    <th width="10%">Value</th>
                    <th width="12%">Order Date</th>
                </tr>
            <?php
            while($row = mysqli_fetch_array($result)){
            ?>
                <tr>
                    <td><?php echo $row["order_id"]; ?></td>
                    <td><?php echo $row["order_customer_name"];?></td>
                    <td><?php echo $row["order_item"]; ?></td>
                    <td>$ <?php echo $row["order_value"]; ?></td>
                    <td><?php echo $row["order_date"]; ?></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
<script src="js/data.js">
</script>