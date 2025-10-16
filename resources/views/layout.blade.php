<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($data['title']); ?></title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            margin: 0;
            padding: 0;
            color: #333;
        }
        header {
            background-color: #34495e;
            color: white;
            padding: 15px 30px;
            text-align: center;
            font-size: 24px;
            letter-spacing: 1px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        nav {
            background-color: #2c3e50;
            text-align: center;
            padding: 10px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: 500;
            transition: color 0.3s;
        }
        nav a:hover {
            color: #f1c40f;
        }
        main {
            padding: 40px;
            max-width: 800px;
            margin: 0 auto;
        }
        .card {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            padding: 20px 30px;
            margin-top: 20px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            background: #ecf0f1;
            margin: 8px 0;
            padding: 12px 20px;
            border-radius: 8px;
            font-size: 18px;
            display: flex;
            justify-content: space-between;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #34495e;
            color: white;
            margin-top: 30px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <header>Tugas MVC - Genre & Author</header>

    <nav>
        <a href="/Genre">Genre</a>
        <a href="/Author">Author</a>
    </nav>

    <main>
        <div class="card">
            <h2><?= htmlspecialchars($data['title']); ?></h2>
            <ul>
                <?php foreach ($data['items'] as $item): ?>
                    <li>
                        <span><?= htmlspecialchars($item['id']); ?></span>
                        <span><?= htmlspecialchars($item['name']); ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </main>

    <footer>
        &copy; <?= date('Y'); ?> | Sistem MVC Sederhana - Genre & Author
    </footer>
</body>
</html>
