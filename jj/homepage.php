<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karura Forest Nursery Management System</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f8f5f1; /* ivory */
            margin: 0;
            padding: 0;
        }
        
        /* Header styles */
        header {
            position: sticky;
            top: 0;
            background-color: #b5a58d; /* beige */
            color: #333;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 2rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 10;
        }
        .header-title {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .header-buttons {
            display: flex;
            gap: 1rem;
        }
        .header-buttons a {
            padding: 0.5rem 1rem;
            background-color: #8c8b85; /* gray */
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-size: 0.9rem;
        }
        .header-buttons a:hover {
            background-color: #6b6a64;
        }

        /* Main content styles */
        .main-content {
            padding: 2rem;
            display: grid;
            gap: 2rem;
        }

        .section {
            display: flex;
            gap: 2rem;
            align-items: center;
            background-color: #f1e7da; /* light beige */
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .section img {
            width: 200px;
            height: 200px;
            border-radius: 8px;
            object-fit: cover;
        }
        .section-text {
            flex: 1;
        }
        .section-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        .section-description {
            font-size: 0.95rem;
            line-height: 1.6;
            color: #555;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="header-title">KFNMS</div>
        <div class="header-buttons">
            <a href="admin/index.php">Sign in as Admin</a>
            <a href="user/index.php">Sign in as User</a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Section 1 -->
        <div class="section">
            <img src="https://via.placeholder.com/200" alt="Tree Inventory Image">
            <div class="section-text">
                <div class="section-title">Tree Inventory Management</div>
                <div class="section-description">
                    Discover the richness of tree species managed within the Karura Forest. Our system provides a streamlined way to manage and track inventory, ensuring sustainability.
                </div>
            </div>
        </div>

        <!-- Section 2 -->
        <div class="section">
            <img src="https://via.placeholder.com/200" alt="Seedling Nursery">
            <div class="section-text">
                <div class="section-title">Seedling Nursery</div>
                <div class="section-description">
                    Our nursery promotes growth from the seed up, carefully tending to seedlings until they're ready for planting. This contributes to reforestation and forest expansion efforts.
                </div>
            </div>
        </div>

        <!-- Section 3 -->
        <div class="section">
            <img src="https://via.placeholder.com/200" alt="Tracking Growth">
            <div class="section-text">
                <div class="section-title">Tracking Growth</div>
                <div class="section-description">
                    The system allows easy tracking of tree growth stages, offering insights into age, health, and readiness for reforestation, providing data for future forest projects.
                </div>
            </div>
        </div>

        <!-- Section 4 -->
        <div class="section">
            <img src="https://via.placeholder.com/200" alt="Forest Conservation">
            <div class="section-text">
                <div class="section-title">Forest Conservation</div>
                <div class="section-description">
                    Dedicated to conserving Karura's natural beauty, the system aids in preserving endangered species, promoting biodiversity, and contributing to environmental sustainability.
                </div>
            </div>
        </div>

        <!-- Section 5 -->
        <div class="section">
            <img src="https://via.placeholder.com/200" alt="Community Involvement">
            <div class="section-text">
                <div class="section-title">Community Involvement</div>
                <div class="section-description">
                    Our system supports community involvement in conservation activities, making it easy to register volunteers, track participation, and grow community-driven initiatives.
                </div>
            </div>
        </div>
    </main>

</body>
</html>
