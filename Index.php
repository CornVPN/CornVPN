<?php
/**
 * CornVPN - Бесплатный VPN в Telegram
 * PHP-версия статического сайта с динамическими параметрами
 */

// ==================== НАСТРОЙКИ САЙТА ====================
$telegram_bot_url = 'https://t.me/CornVpn_robot';
$telegram_channel_url = 'https://t.me/CornVPN_no1';
$donate_url = 'https://dalink.to/odin_iz_hac';
$support_username = '@CornVPN_support';
$current_year = date('Y');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CornVPN — бесплатный VPN в Telegram</title>
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
    <style>
        /* Все стили без изменений (последняя рабочая версия) */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #fbfaf8;
            color: #1e1e2a;
            line-height: 1.5;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        :root {
            --primary: #F9C74F;
            --primary-dark: #e6b12e;
            --secondary: #1e1e2a;
            --accent: #4A90E2;
            --light-bg: #ffffff;
            --gray: #f0f0f0;
            --text-dark: #1e1e2a;
            --text-light: #5e5e6b;
            --border-radius: 24px;
            --shadow: 0 20px 35px -8px rgba(0,0,0,0.1);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .btn {
            display: inline-block;
            padding: 14px 32px;
            border-radius: 60px;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.2s ease;
            cursor: pointer;
            border: none;
            text-align: center;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--secondary);
            box-shadow: 0 8px 18px rgba(249, 199, 79, 0.3);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 12px 24px rgba(249, 199, 79, 0.4);
        }

        .btn-outline {
            background-color: transparent;
            border: 2px solid var(--secondary);
            color: var(--secondary);
        }

        .btn-outline:hover {
            background-color: var(--secondary);
            color: white;
        }

        .btn-donate {
            background-color: rgba(249, 199, 79, 0.15);
            color: var(--secondary);
            border: 1px solid var(--primary);
            padding: 10px 20px;
            font-size: 14px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .btn-donate:hover {
            background-color: var(--primary);
            transform: translateY(-2px);
        }
        .btn-donate i {
            color: #ff3366;
        }

        .header {
            padding: 20px 0;
            position: sticky;
            top: 0;
            background-color: rgba(251, 250, 248, 0.9);
            backdrop-filter: blur(10px);
            z-index: 100;
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        .header .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            font-size: 28px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .logo i {
            color: var(--primary);
            font-size: 32px;
        }

        .nav-menu {
            display: flex;
            gap: 40px;
            font-weight: 500;
        }

        .nav-menu a:hover {
            color: var(--primary-dark);
        }

        .header-buttons {
            display: flex;
            gap: 12px;
            align-items: center;
        }

        .btn-small {
            padding: 10px 20px;
            font-size: 14px;
        }

        .mobile-menu-toggle {
            display: none;
            font-size: 28px;
            cursor: pointer;
        }

        .hero {
            padding: 60px 0 40px;
        }

        .hero .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .hero-content h1 {
            font-size: 52px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 24px;
        }

        .hero-content h1 span {
            color: var(--primary);
            background-color: rgba(249, 199, 79, 0.2);
            padding: 0 8px;
            border-radius: 20px;
        }

        .hero-content p {
            font-size: 18px;
            color: var(--text-light);
            margin-bottom: 32px;
            max-width: 90%;
        }

        .hero-buttons {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
        }

        .hero-image {
            background: linear-gradient(145deg, #fff8e7, #fff1d6);
            border-radius: var(--border-radius);
            padding: 30px;
            box-shadow: var(--shadow);
            text-align: center;
        }

        .hero-image i {
            font-size: 160px;
            color: var(--primary);
            filter: drop-shadow(0 10px 15px rgba(249,199,79,0.4));
        }

        .badge-telegram {
            background-color: var(--accent);
            color: white;
            padding: 8px 16px;
            border-radius: 40px;
            display: inline-block;
            font-weight: 600;
            margin-top: 20px;
        }

        .section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 16px;
        }

        .section-subtitle {
            text-align: center;
            color: var(--text-light);
            font-size: 18px;
            max-width: 600px;
            margin: 0 auto 60px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
        }

        .feature-card {
            background: var(--light-bg);
            padding: 32px 24px;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            text-align: center;
            transition: transform 0.2s;
        }

        .feature-card:hover {
            transform: translateY(-8px);
        }

        .feature-icon {
            background-color: rgba(249, 199, 79, 0.15);
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
        }

        .feature-icon i {
            font-size: 36px;
            color: var(--primary);
        }

        .feature-card h3 {
            font-size: 20px;
            margin-bottom: 12px;
        }

        .feature-card p {
            color: var(--text-light);
        }

        .steps-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .step-item {
            background: var(--light-bg);
            border-radius: var(--border-radius);
            padding: 40px 30px;
            box-shadow: var(--shadow);
            position: relative;
            text-align: center;
        }

        .step-number {
            background-color: var(--primary);
            color: var(--secondary);
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 24px;
            margin: 0 auto 24px;
        }

        .step-item h3 {
            margin-bottom: 12px;
            font-size: 22px;
        }

        .step-item p {
            color: var(--text-light);
        }

        .free-card {
            max-width: 500px;
            margin: 0 auto;
            background: var(--light-bg);
            border-radius: var(--border-radius);
            padding: 50px 40px;
            box-shadow: var(--shadow);
            text-align: center;
            border: 3px solid var(--primary);
        }

        .free-price {
            font-size: 48px;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .free-features {
            list-style: none;
            margin: 30px 0;
            text-align: left;
            display: inline-block;
        }

        .free-features li {
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 18px;
        }

        .free-features i {
            color: var(--primary);
            font-size: 20px;
            width: 24px;
        }

        .tutorial-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin-top: 40px;
        }

        .tutorial-card {
            background: var(--light-bg);
            border-radius: var(--border-radius);
            padding: 30px;
            box-shadow: var(--shadow);
        }

        .tutorial-card h3 {
            font-size: 24px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--secondary);
        }

        .tutorial-card h3 i {
            color: var(--primary);
            font-size: 28px;
        }

        .tutorial-step {
            margin-bottom: 20px;
            padding-left: 20px;
            border-left: 3px solid var(--primary);
        }

        .tutorial-step p {
            margin-bottom: 8px;
            font-weight: 500;
        }

        .tutorial-step ul, .tutorial-step ol {
            margin-left: 20px;
            color: var(--text-light);
        }

        .tutorial-step li {
            margin-bottom: 6px;
        }

        .client-links {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 15px;
        }

        .client-link {
            background: var(--gray);
            padding: 8px 16px;
            border-radius: 40px;
            font-size: 14px;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: background 0.2s;
        }

        .client-link:hover {
            background: var(--primary);
            color: var(--secondary);
        }

        .client-link i {
            font-size: 16px;
        }

        .note {
            background: rgba(249, 199, 79, 0.1);
            border-radius: 16px;
            padding: 16px;
            margin-top: 20px;
            font-size: 14px;
            border-left: 4px solid var(--primary);
        }

        .cta {
            background: linear-gradient(135deg, var(--primary) 0%, #f8b500 100%);
            border-radius: var(--border-radius);
            padding: 60px;
            text-align: center;
            color: var(--secondary);
        }

        .cta h2 {
            font-size: 40px;
            margin-bottom: 16px;
        }

        .cta p {
            font-size: 18px;
            max-width: 600px;
            margin: 0 auto 32px;
            opacity: 0.9;
        }

        .cta .btn {
            background: var(--secondary);
            color: white;
            box-shadow: 0 8px 18px rgba(0,0,0,0.2);
        }

        .cta .btn:hover {
            background: #2a2a3a;
        }

        .donate-section {
            background: var(--light-bg);
            border-radius: var(--border-radius);
            padding: 60px;
            text-align: center;
            box-shadow: var(--shadow);
            margin: 40px 0;
        }
        .donate-section h2 {
            font-size: 36px;
            margin-bottom: 16px;
        }
        .donate-section p {
            font-size: 18px;
            color: var(--text-light);
            max-width: 600px;
            margin: 0 auto 32px;
        }
        .donate-section .btn {
            font-size: 20px;
            padding: 18px 48px;
            background-color: #ff3366;
            color: white;
            border: none;
            box-shadow: 0 8px 18px rgba(255, 51, 102, 0.3);
        }
        .donate-section .btn:hover {
            background-color: #e62e5c;
            transform: translateY(-2px);
        }
        .donate-section .btn i {
            margin-right: 10px;
        }

        .footer {
            background: var(--secondary);
            color: white;
            padding: 60px 0 30px;
            border-radius: 40px 40px 0 0;
            margin-top: 40px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-logo {
            font-size: 24px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 20px;
        }

        .footer-logo i {
            color: var(--primary);
        }

        .footer-about p {
            color: #b0b0b0;
            margin-bottom: 20px;
        }

        .social-links {
            display: flex;
            gap: 16px;
        }

        .social-links a {
            background: rgba(255,255,255,0.1);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.2s;
        }

        .social-links a:hover {
            background: var(--primary);
            color: var(--secondary);
        }

        .footer-links h4 {
            margin-bottom: 20px;
            font-size: 18px;
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .footer-links a {
            color: #b0b0b0;
            transition: color 0.2s;
        }

        .footer-links a:hover {
            color: var(--primary);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 30px;
            text-align: center;
            color: #b0b0b0;
            font-size: 14px;
        }

        @media (max-width: 1024px) {
            .features-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .tutorial-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 900px) {
            .hero .container {
                grid-template-columns: 1fr;
                text-align: center;
            }
            .hero-content p {
                margin-left: auto;
                margin-right: auto;
            }
            .hero-buttons {
                justify-content: center;
            }
            .steps-grid {
                grid-template-columns: 1fr;
            }
            .footer-content {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 768px) {
            .nav-menu, .header-buttons {
                display: none;
            }
            .mobile-menu-toggle {
                display: block;
            }
            .features-grid {
                grid-template-columns: 1fr;
            }
            .footer-content {
                grid-template-columns: 1fr;
                gap: 30px;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <i class="fas fa-seedling"></i> CornVPN
            </div>
            <nav class="nav-menu">
                <a href="#features">Преимущества</a>
                <a href="#how">Как работает</a>
                <a href="#tutorial">Туториал</a>
                <a href="#free">Тариф</a>
            </nav>
            <div class="header-buttons">
                <a href="<?php echo $donate_url; ?>" class="btn-donate" target="_blank"><i class="fas fa-heart"></i> Поддержать</a>
                <a href="<?php echo $telegram_bot_url; ?>" class="btn btn-primary btn-small" target="_blank">Запустить бота</a>
            </div>
            <div class="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <h1>Бесплатный и безопасный <span>VPN</span> прямо в Telegram</h1>
                    <p>CornVPN — это полностью бесплатный VPN-бот. Мгновенное подключение, никаких ограничений по трафику и скорости. Просто откройте чат.</p>
                    <div class="hero-buttons">
                        <a href="<?php echo $telegram_bot_url; ?>" class="btn btn-primary" target="_blank">Начать пользоваться</a>
                        <a href="#tutorial" class="btn btn-outline">Инструкция</a>
                    </div>
                    <div class="badge-telegram">
                        <i class="fab fa-telegram"></i> Работает внутри Telegram
                    </div>
                </div>
                <div class="hero-image">
                    <i class="fas fa-shield-halved"></i>
                    <div style="font-size: 24px; font-weight: 600; margin-top: 20px;">CornVPN</div>
                    <div style="color: #5e5e6b;">абсолютно бесплатно</div>
                </div>
            </div>
        </section>

        <section id="features" class="section">
            <div class="container">
                <h2 class="section-title">Почему CornVPN?</h2>
                <p class="section-subtitle">Мы сделали VPN простым, как кукуруза. Вкусно, полезно и без ГМО 😉</p>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-bolt"></i></div>
                        <h3>Молниеносная скорость</h3>
                        <p>Оптимизированные серверы по всему миру для стримов и загрузок без задержек.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-lock"></i></div>
                        <h3>Полная безопасность</h3>
                        <p>Шифрование AES-256 и политика отсутствия логов — ваши данные под защитой.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-robot"></i></div>
                        <h3>Управление через бота</h3>
                        <p>Всё в одном чате: подключение, поддержка, смена сервера. Ничего лишнего.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fas fa-globe"></i></div>
                        <h3>50+ стран</h3>
                        <p>Огромный выбор серверов для обхода блокировок и доступа к контенту.</p>
                    </div>
        
