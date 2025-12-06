<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Settings</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow p-4">
                <h4 class="fw-bold text-center mb-4">WhatsApp API Settings</h4>

                @if(session('msg'))
                    <div class="alert alert-success">{{ session('msg') }}</div>
                @endif

                <form method="POST" action="/settings/save">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">App Key</label>
                        <input type="text" name="appkey" class="form-control" value="{{ $appkey }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Auth Key</label>
                        <input type="text" name="authkey" class="form-control" value="{{ $authkey }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="text" name="phone" class="form-control" value="{{ $phone }}">
                    </div>

                    <button class="btn btn-primary w-100">Save Settings</button>
                </form>

                <div class="text-center mt-4">
                    <a href="/send-message" class="btn btn-outline-dark w-100">Go to Send Message</a>
                </div>

            </div>

        </div>
    </div>
</div>

</body>
</html>
