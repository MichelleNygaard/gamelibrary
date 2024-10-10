<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Quarters</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            background-image: linear-gradient(to top right, #0E1F33,#0D2237,#132D46,#152F48,#283150,#312A4C,#332244,#311C3B,#22152F,#151329,#15162B); /* Gradient background */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 100%;
            margin: auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        h1 {
            margin: 0; /* removes the default margin */
            color: white;

        }

        .chip {
            background-color: transparent;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            margin-top: 10px;
            font-weight: bold;
        }

        .search-bar {
            padding: 5px 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-right: 5px;
        }

        /*.image-container {*/
        /*    display: flex;*/
        /*    justify-content: center;*/
        /*    margin-bottom: 20px;*/
        /*    width: 100%;*/
        /*}*/

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 40px; /* Space between grid items */
            margin-left: 50px;
            margin-top: 20px;
        }

        .grid-item {
            background-color: transparent; /* Light gray for grid items */
            height: 200px; /* Set a fixed height for uniformity */
            width: 200px;
            display: flex; /* Use flexbox to center the logo */
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            overflow: hidden;
            border-radius: 5px;
        }

        .system-logo {
            max-width: 100%; /* Make the logo take the full width of the container */
            max-height: 100%; /* Make the logo take the full height of the container */
            object-fit: cover; /* Ensure the image fits within the container */
            border-radius: 5px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>The Game Quarters</h1>
            <input type="text" placeholder="Search Game" class="search-bar">
        </div>
        <div class="chip">System Collection</div>

        <div class="grid">
            <div class="grid-item">
                <a href="nintendo.blade.php">
                    <img src="https://wallpaperbat.com/img/20402863-the-classic-nintendo-logo-led.jpg" alt="Nintendo" class="system-logo" data-system="nintendo">
                </a>
            </div>
            <div class="grid-item">
                <a href="playstation.blade.php">
                    <img src="https://i.pinimg.com/736x/38/60/0f/38600fbe826588f9fa225fe436aa38ac.jpg" alt="PlayStation" class="system-logo" data-system="playstation">
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

