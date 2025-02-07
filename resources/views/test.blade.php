<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticky Footer with Bootstrap 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Make the html and body take up the full height */
        html, body {
            height: 100%;
        }

        /* Flexbox layout: allow the container to stretch */
        body {
            display: flex;
            flex-direction: column;
        }

        /* Content will take up remaining space */
        .content {
            flex: 1;
        }
    </style>
</head>
<body>
    <!-- Navbar (optional) -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="content container my-4">
        <h1>Sticky Footer Example</h1>
        <p>This is the main content area. If the content is short, the footer will stay at the bottom of the viewport.</p>
    </main>

    <!-- Sticky Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <div class="container">
            <p class="mb-0">This is a sticky footer &copy; 2024</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
