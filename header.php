<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pagename ?></title>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <!-- Tailwind CDN FIRST -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            200: '#bfdbfe',
                            300: '#93c5fd',
                            400: '#60a5fa',
                            500: '#3b82f6',
                            600: '#2563EB', // YOUR MAIN BRAND COLOR
                            700: '#1d4ed8',
                            800: '#1e40af',
                            900: '#1e3a8a',
                        },
                        dark: {
                            DEFAULT: '#0F172A',
                            100: '#1e293b',
                            200: '#334155'
                        }
                    },
                    fontFamily: {
                        sans: ['Roboto', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- ================= NAVBAR ================= -->
    <nav class="bg-white shadow-sm fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <h1 class="text-2xl font-extrabold text-primary-700">
                <img class="logo" src="assets/images/logo.png" alt="logo">
            </h1>

            <!-- Desktop Menu -->
            <ul class="hidden md:flex items-center space-x-8 font-medium text-gray-600">
                <li><a href="./" class="hover:text-primary-700">Home</a></li>
                <li><a href="./services" class="hover:text-primary-700">Services</a></li>
                <li><a href="./portfolio" class="hover:text-primary-700">Portfolio</a></li>
                <li><a href="./about" class="hover:text-primary-700">About</a></li>
                <li>
                    <a href="./contact"
                        class="bg-primary-700 text-white px-5 py-2 rounded-lg hover:bg-primary-500 hover:text-white transition">
                        Contact
                    </a>
                </li>
            </ul>

            <!-- Mobile Button -->
            <button id="menuBtn" class="md:hidden focus:outline-none">
                <svg class="w-7 h-7 text-gray-700" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="md:hidden max-h-0 overflow-hidden transition-all duration-500 bg-white shadow-lg">
            <ul class="flex flex-col px-6 py-4 space-y-4 text-gray-600 font-medium">
                <li><a href="./" class="block hover:text-primary-700">Home</a></li>
                <li><a href="./services" class="block hover:text-primary-700">Services</a></li>
                <li><a href="./portfolio" class="block hover:text-primary-700">Portfolio</a></li>
                <li><a href="./about" class="block hover:text-primary-700">About</a></li>
                <li>
                    <a href="./contact" class="block bg-primary-700 text-white text-center py-2 rounded-lg hover:bg-primary-500 hover:text-white transition">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </nav>