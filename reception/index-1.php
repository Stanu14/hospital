<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opal Dental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container-box {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Login Page -->
        <div class="container-box" id="loginPage">
            <h3 class="text-center">Opal Dental Login</h3>
            <form id="loginForm">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>

        <!-- Dashboard Page -->
        <div class="container-box" id="dashboardPage" style="display: none;">
            <h3 class="text-center">Opal Dental Dashboard</h3>
            <ul>
                <li><a href="#" onclick="showPage('registerPatientPage')">Register Patient</a></li>
                <li><a href="#" onclick="showPage('appointmentPage')">Create Appointment</a></li>
                <li><a href="#" onclick="showPage('prescriptionPage')">Manage Prescriptions</a></li>
            </ul>
        </div>

        <!-- Patient Registration Page -->
        <div class="container-box" id="registerPatientPage" style="display: none;">
            <h3 class="text-center">Register New Patient</h3>
            <form id="registerPatientForm">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" required>
                </div>
                <button type="submit" class="btn btn-success w-100">Register</button>
            </form>
        </div>

        <!-- Appointment Page -->
        <div class="container-box" id="appointmentPage" style="display: none;">
            <h3 class="text-center">Create Appointment</h3>
            <form id="appointmentForm">
                <div class="mb-3">
                    <label class="form-label">Patient Email</label>
                    <input type="email" class="form-control" name="patient_email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Date & Time</label>
                    <input type="datetime-local" class="form-control" name="appointment_date" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Book Appointment</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function showPage(pageId) {
            $(".container-box").hide();
            $("#" + pageId).show();
        }

        $(document).ready(function() {
            $("#loginForm").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: "login.php",
                    type: "POST",
                    data: $(this).serialize(),
                    success: function(response) {
                        if(response.includes("success")) {
                            showPage('dashboardPage');
                        } else {
                            alert("Invalid credentials");
                        }
                    }
                });
            });

            $("#registerPatientForm").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    url: "register_patient.php",
                    type: "POST",
                    data: $(this).serialize(),
                    success: function(response) {
                        alert(response);
                    }
                });
            });
        });
    </script>
</body>
</html>
