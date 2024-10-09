const games = {
    nintendo: [
        { title: "Animal Crossing", image: "https://www.nintendo.dk/templates/yootheme/cache/de/PS_HAC_AnimalCrossing_NewHorizons_UKV-debe246e.webp" },
        { title: "Legend og Zelda: Echoes of Wisdom", image: "https://www.nintendo.dk/templates/yootheme/cache/8d/HAC_TheLegendOfZelda_EchoesOfWisdom_PS_EN-8de24f92.webp" },
    ],
    playstation: [
        { title: "God of War", image: "https://upload.wikimedia.org/wikipedia/en/a/a7/God_of_War_4_cover.jpg" },
        { title: "Spider-Man", image: "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/764199b0-7c4a-43c4-834b-c610e11da99e/dfq3nr5-5f701bce-c6c3-44fd-8928-f6df71b91d91.jpg/v1/fit/w_799,h_1000,q_70,strp/marvel_s_spider_man_remastered__ps5_cover_art__by_ganteo260_dfq3nr5-414w-2x.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTAwMCIsInBhdGgiOiJcL2ZcLzc2NDE5OWIwLTdjNGEtNDNjNC04MzRiLWM2MTBlMTFkYTk5ZVwvZGZxM25yNS01ZjcwMWJjZS1jNmMzLTQ0ZmQtODkyOC1mNmRmNzFiOTFkOTEuanBnIiwid2lkdGgiOiI8PTc5OSJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.1a4UOmCjWd3Epy9swplzpbYyVU6PIvriO5PL734CeZY" },
    ],
};

document.querySelectorAll('.system-logo').forEach(logo => {
    logo.addEventListener('click', () => {
        const system = logo.getAttribute('data-system');
        displayGames(system);
    });
});

function displayGames(system) {
    const gameList = document.getElementById('game-list');
    gameList.innerHTML = ''; // Clear previous games

    games[system].forEach(game => {
        const gameItem = document.createElement('div');
        gameItem.className = 'game-item';
        gameItem.innerHTML = `
            <img src="${game.image}" alt="${game.title}" style="width: 100%;">
            <h3>${game.title}</h3>
        `;
        gameList.appendChild(gameItem);
    });
}
