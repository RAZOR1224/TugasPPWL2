<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ebook Website</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2; /* Tambahkan warna background */
}

header {
    background: linear-gradient(to right, #333, #666); /* Tambahkan gradient background */
    color: #fff;
    padding: 20px;
    text-align: center;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
}

.main-content {
    padding: 20px;
}

.ebook {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 20px;
    background-color: #fff; /* Tambahkan warna background */
}

.ebook img {
    max-width: 100%;
    height: auto;
    border-radius: 5px;
}

.ebook h3 {
    margin-top: 10px;
    margin-bottom: 5px;
}

.ebook p {
    margin-bottom: 10px;
}

button {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 8px 12px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease; /* Tambahkan transisi */
}

button:hover {
    background-color: #555; /* Ubah warna background pada hover */
}

footer {
    background: linear-gradient(to right, #333, #666); /* Tambahkan gradient background */
    color: #fff;
    text-align: center;
    padding: 10px 0;
    position: fixed;
    bottom: 0;
    width: 100%;
}

</style>
</head>
<body>
    <header>
        <h1>Selamat Datang di Ebook</h1>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="main-content">
        <h2>Featured eBooks</h2>
        <div class="ebook">
            <img src="https://cdn.gramedia.com/uploads/items/9786239712716.jpg" alt="Angkasa dan 56 Hari" width="200px">
            <h3>Angkasa dan 56 Hari</h3>
            <p>Nadine, Angkasa mu ini sedang tidak baik baik saja. Maaf butuh waktu lama untuk aku menyampaikan rasa padamu. Namun, satu hal yang harus kamu tau, ...</p>
            <button>Read More</button>
        </div>
        <div class="ebook">
            <img src="https://deepublishstore.com/wp-content/uploads/2018/01/Wujud-Tanpa-Suara-Nurul-depan1.jpg" alt="Wujud tanpa Suara" width="200px">
            <h3>Wujud tanpa Suara</h3>
            <p>Buku Umum | Novel | Buku Novel Wujud Tanpa Suara | Nurul Izzah Andini | Buku ini merupakan novel karya nurul Izzah Andini yang bercerita tentang...</p>
            <button>Read More</button>
        </div>
        <!-- Add more ebook entries here -->
    </section>

    <footer>
        <p>&copy; 2024 Ebook World. All rights reserved.</p>
    </footer>
    <script>
        // JavaScript code starts here

        // Function to toggle eBook description visibility
        function toggleDescription(button) {
            var ebook = button.parentElement;
            var description = ebook.querySelector('p');
            if (description.classList.contains('show')) {
                description.classList.remove('show');
                button.textContent = 'Read More';
            } else {
                description.classList.add('show');
                button.textContent = 'Read Less';
            }
        }

        // Smooth scroll to anchor links
        document.querySelectorAll('nav a').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Modal Popup
        var modal = document.createElement('div');
        modal.classList.add('modal');
        modal.innerHTML = `
            <div class="modal-content">
                <span class="close-btn">&times;</span>
                <h2>Ebook Title</h2>
                <p>Detailed description of the ebook...</p>
            </div>
        `;
        document.body.appendChild(modal);

        document.querySelectorAll('.read-more-btn').forEach(button => {
            button.addEventListener('click', function() {
                modal.style.display = 'block';
            });
        });

        document.querySelector('.close-btn').addEventListener('click', function() {
            modal.style.display = 'none';
        });

        window.addEventListener('click', function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        });
    </script>
</body>
</html>