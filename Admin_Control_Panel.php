<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <h2>Smart Helpdesk</h2>
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="#" data-page="dashboard">Dashboard</a></li>
                    <li><a href="#" data-page="tickets">Tickets</a></li>
                    <li><a href="#" data-page="canned-replies">Canned Replies</a></li>
                    <li><a href="#" data-page="departments">Departments</a></li>
                    <li><a href="settings.php" data-page="settings">Settings</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <div id="content">
                <!-- Default content -->
                <h1>Welcome to the Admin Dashboard</h1>
                <p>Select an option from the menu to see details.</p>
            </div>
        </main>
    </div>
    <script src="dashboard.js"></script>
</body>
</html>
