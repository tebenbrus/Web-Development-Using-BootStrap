<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payslip</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
            font-size: 24px;
        }
        h3 {
            color: #007bff;
            font-size: 20px;
        }
        ul {
            padding-left: 20px;
        }
        .btn-primary {
            background-color: #007bff;
            width: 100%;
            margin-top: 20px;
            font-size: 14px;
        }
        .form-control-disabled {
            background-color: #f8f9fa;
            border: 1px solid #ced4da;
            border-radius: 4px;
            padding: 8px;
            font-size: 14px;
            color: #495057;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-3 mb-2">Employee Payslip</h1>
        <hr>
        <?php
        
        $employeeId = $_POST['employeeId'];
        $lastName = $_POST['lastName'];
        $firstName = $_POST['firstName'];
        $middleInitial = $_POST['middleInitial'];
        $basic = $_POST['basic'];
        $incentivePay = $_POST['incentivePay'];
        $houseRentAllowance = $_POST['houseRentAllowance'];
        $mealAllowance = $_POST['mealAllowance'];
        $providentFund = $_POST['providentFund'];
        $tax = $_POST['tax'];
        $loan = $_POST['loan'];

        //total earnings
        $totalEarnings = $basic + $incentivePay + $houseRentAllowance + $mealAllowance;

        //total deductions
        $totalDeductions = $providentFund + $tax + $loan;

        //net pay
        $netPay = $totalEarnings - $totalDeductions;
        ?>

        <h3>Employee Information</h3>
        <div class="row mb-3">
            <div class="col-sm-3"><label class="form-label-bold">Employee ID:</label></div>
            <div class="col-sm-8"><input type="text" class="form-control form-control-disabled" value="<?php echo $employeeId; ?>" disabled></div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-3"><label class="form-label-bold">Name:</label></div>
            <div class="col-sm-8"><input type="text" class="form-control form-control-disabled" value="<?php echo "$firstName $middleInitial $lastName"; ?>" disabled></div>
        </div>

        <h3>Earnings</h3>
        <ul>
            <li>Basic: <?php echo $basic; ?></li>
            <li>Incentive Pay: <?php echo $incentivePay; ?></li>
            <li>House Rent Allowance: <?php echo $houseRentAllowance; ?></li>
            <li>Meal Allowance: <?php echo $mealAllowance; ?></li>
        </ul>

        <h3>Deductions</h3>
        <ul>
            <li>Provident Fund: <?php echo $providentFund; ?></li>
            <li>Tax: <?php echo $tax; ?></li>
            <li>Loan: <?php echo $loan; ?></li>
        </ul>

        <h3>Computations</h3>
        <p><strong>Total Earnings:</strong> <?php echo $totalEarnings; ?></p>
        <p><strong>Total Deductions:</strong> <?php echo $totalDeductions; ?></p>
        <p><strong>Net Pay:</strong> <?php echo $netPay; ?></p>

        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    
</body>
</html>
