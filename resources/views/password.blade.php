<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Password</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg p-4" style="width: 380px;">
        <h4 class="text-center mb-3 fw-bold">Enter Access Password</h4>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" id="pass" class="form-control" placeholder="Enter Password">
        </div>

        <button class="btn btn-primary w-100" onclick="check()">Submit</button>
    </div>
</div>

<script>
    function check() {
        const pass = document.getElementById("pass").value;

        if (pass === "12345") {
            window.location.href = "/settings";
        } else {
            alert("Wrong Password!");
        }
    }
</script>

</body>
</html>
