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
            box-sizing: border-box;
            font-size: 14px;
        }
        .container {
            max-width: 500px; 
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
            font-size: 20px;
        }
        .form-label-bold {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            width: 100%;
            margin-top: 20px;
            font-size: 14px;
        }
            .colored-input:valid {
            background-color: lightblue;
    }
</style>

    </style>
</head>

<body>
    <div class="container">
        <h1 class="mt-7 mb-4">Employee's Payroll</h1>
        <br>
        <form method="POST" action="payslip.php">
            <div class="row mb-3">
                <label for="employeeId" class="col-sm-2 col-form-label form-label-bold" >Employee ID</label>
                <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm colored-input" id="employeeId" name="employeeId" required>

                </div>
            </div>
            <div class="row mb-3">
                <label for="lastName" class="col-sm-2 col-form-label form-label-bold">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm colored-input" id="lastName" name="lastName" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="firstName" class="col-sm-2 col-form-label form-label-bold">First Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm colored-input" id="firstName" name="firstName" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="middleInitial" class="col-sm-2 col-form-label form-label-bold">MI</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-sm colored-input" id="middleInitial" name="middleInitial" maxlength="1" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="basic" class="col-sm-2 col-form-label form-label-bold">Basic</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control form-control-sm" id="basic" name="basic" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="incentivePay" class="col-sm-2 col-form-label form-label-bold">Incentive Pay</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control form-control-sm" id="incentivePay" name="incentivePay" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="houseRentAllowance" class="col-sm-2 col-form-label form-label-bold">House Rent Allowance</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control form-control-sm" id="houseRentAllowance" name="houseRentAllowance" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="mealAllowance" class="col-sm-2 col-form-label form-label-bold">Meal Allowance</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control form-control-sm" id="mealAllowance" name="mealAllowance" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="providentFund" class="col-sm-2 col-form-label form-label-bold">Provident Fund</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control form-control-sm" id="providentFund" name="providentFund" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="tax" class="col-sm-2 col-form-label form-label-bold">Tax</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control form-control-sm" id="tax" name="tax" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="loan" class="col-sm-2 col-form-label form-label-bold">Loan</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control form-control-sm" id="loan" name="loan" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">View Payslip</button>
                </div>
            </div>
        </form>
    </div>

</body>
</html>
