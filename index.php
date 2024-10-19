<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoldKit - Мемкоин с блеском золота</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Шапка сайта -->
    <header>
        <div class="logo">
            <h1>GoldKit</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#about">О монете</a></li>
                <li><a href="#team">Команда</a></li>
                <li><a href="#calculator">Калькулятор</a></li>
                <li><a href="#contact">Контакты</a></li>
            </ul>
        </nav>
    </header>

    <!-- Главная секция -->
    <section id="hero">
        <h2>Добро пожаловать в мир GoldKit</h2>
        <p>Мемкоин с золотым блеском! Присоединяйся к нам и стань частью сообщества.</p>
        <button onclick="scrollToSection('#about')">Узнать больше</button>
    </section>

    <!-- О монете GoldKit -->
    <section id="about">
        <h2>О GoldKit</h2>
        <p>GoldKit — это мемкоин, который объединяет силу криптовалюты и развлекательный потенциал мемов. Мы стремимся создать сообщество, которое не только зарабатывает, но и весело проводит время.</p>
    </section>

    <!-- Секция команды -->
    <section id="team">
        <h2>Наша команда</h2>
        <p>Наша команда состоит из экспертов в области блокчейна и мемов. Мы ценим веселье, инновации и доверие.</p>
        <div class="team-members">
            <div class="member">
                <img src="team1.jpg" alt="Член команды 1">
                <h3>Алексей Иванов</h3>
                <p>Основатель и технический директор</p>
            </div>
            <div class="member">
                <img src="team2.jpg" alt="Член команды 2">
                <h3>Мария Смирнова</h3>
                <p>Маркетинг и продвижение</p>
            </div>
        </div>
    </section>

    <!-- Калькулятор конверсии -->
    <section id="calculator">
        <h2>Калькулятор конверсии</h2>
        <p>Введите количество GoldKit для расчета его стоимости в долларах США.</p>
        <input type="number" id="amount" placeholder="Введите количество GoldKit">
        <button onclick="convertCurrency()">Рассчитать</button>
        <p id="result"></p>
    </section>

    <!-- Контакты -->
    <section id="contact">
        <h2>Контакты</h2>
        <p>Свяжитесь с нами по любым вопросам или предложениям.</p>
        <p>Email: <a href="mailto:info@goldkit.com">info@goldkit.com</a></p>
        <p>Телефон: +7 (800) 123-4567</p>
    </section>

    <!-- Подвал сайта -->
    <footer>
        <p>&copy; 2024 GoldKit. Все права защищены.</p>
    </footer>

    <!-- Подключение JS-файла -->
    <script src="script.js"></script>
</body>
</html>
