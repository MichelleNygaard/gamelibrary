<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Collection</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <h1>System Collection</h1>
    <div class="system-collection">
        <a href="nintendo.blade.php">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Nintendo.svg/900px-Nintendo.svg.png?20170720163516" alt="Nintendo" class="system-logo" data-system="nintendo">
        </a>

        <a href="playstation.blade.php">
            <img src="https://banner2.cleanpng.com/20180729/gzw/09586814236b1e5c271e599460cd515d.webp" alt="PlayStation" class="system-logo" data-system="playstation">
        </a>

    </div>
    <input type="text" id="search-game" placeholder="Search Game">
    <div class="game-list" id="game-list">
        <!-- Game items will be populated here -->
    </div>
</div>
<script src="script.js"></script>
</body>
</html>
