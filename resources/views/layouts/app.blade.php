<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'EduFun')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar { background-color: #f8f9fa; }
        .navbar .nav-link { font-weight: bold; }
        .footer { background-color: #0d0f36; color: #fff; padding: 20px 0; text-align: center; }
        .post-card { background-color: #f8f9fa; border-radius: 8px; overflow: hidden; margin-bottom: 20px; }
        .post-card img { width: 100%; height: auto; }
        .post-card-body { padding: 20px; }
        .read-more-btn { background-color: #0d0f36; color: white; border-radius: 20px; padding: 10px 20px; font-weight: bold; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">EduFun</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                            <li><a class="dropdown-item" href="#">Data Science</a></li>
                            <li><a class="dropdown-item" href="#">Software Engineering</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Writers</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Popular</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <footer class="footer">
        <p>© EduFun 2024 | Web Programming | Arnold Ricardo | 2602056864</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.2.0/js/bootstrap.min.js"></script>
</body>
</html>
