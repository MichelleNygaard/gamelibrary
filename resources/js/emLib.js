

document.getElementById('search').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    const articles = document.querySelectorAll('article');

    articles.forEach(article => {
        const title = article.querySelector('h2').textContent.toLowerCase();
        if (title.includes(searchTerm)) {
            article.style.display = 'block'; // Show matching articles
        } else {
            article.style.display = 'none'; // Hide non-matching articles
        }
    });
});

