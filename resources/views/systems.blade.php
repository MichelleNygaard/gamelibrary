<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Quarters</title>
    <style>
        body {
            background-image: linear-gradient(#1D5D79, #357C9A); /* Gradient background */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 150px;
            margin: auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .chip {
            background-color: #1D5D79;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .search-bar {
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .image-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            width: 100%;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(8, 1fr);
            gap: 10px; /* Space between grid items */
        }

        .grid-item {
            background-color: transparent; /* Light gray for grid items */
            height: 200px; /* Set a fixed height for uniformity */
            width: 150px;
            display: flex; /* Use flexbox to center the logo */
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
        }

        .system-logo {
            max-width: 100%; /* Make the logo take the full width of the container */
            max-height: 100%; /* Make the logo take the full height of the container */
            object-fit: contain; /* Ensure the image fits within the container */
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <span class="chip">System Collection</span>
            <input type="text" placeholder="Search Game" class="search-bar">
        </div>
        <div class="image-container">


        </div>
        <div class="grid">
            <div class="grid-item">
                <a href="nintendo.blade.php">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Nintendo.svg/900px-Nintendo.svg.png?20170720163516" alt="Nintendo" class="system-logo" data-system="nintendo">
                </a>
            </div>
            <div class="grid-item">
                <a href="playstation.blade.php">
                    <img src="https://banner2.cleanpng.com/20180729/gzw/09586814236b1e5c271e599460cd515d.webp" alt="PlayStation" class="system-logo" data-system="playstation">
                </a>
            </div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
        </div>
    </div>
</body>
</html>

