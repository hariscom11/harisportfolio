<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $projects = [
        [
            'title' => 'HydroSmart',
            'category' => 'IoT & Web',
            'icon' => 'bi-droplet-half',
            'description' => 'Sistem monitoring hidroponik berbasis IoT menggunakan ESP32, sensor, Firebase, dan algoritma KNN.',
            'tech' => ['ESP32', 'Firebase', 'KNN'],
            'link' => '#',
        ],
        [
            'title' => 'Company Profile',
            'category' => 'Web Development',
            'icon' => 'bi-window-stack',
            'description' => 'Website company profile menggunakan Laravel dengan authentication, role-based access, admin panel, dan MySQL.',
            'tech' => ['Laravel', 'MySQL', 'Bootstrap'],
            'link' => '#',
        ],
        [
            'title' => 'IoT Gas Monitoring',
            'category' => 'Embedded Systems',
            'icon' => 'bi-cpu',
            'description' => 'Sistem monitoring gas, suhu, dan kelembapan menggunakan ESP32, MQ-2, DHT22, LCD, LED, dan buzzer.',
            'tech' => ['ESP32', 'C++', 'MQ-2', 'DHT22'],
            'link' => '#',
        ],
        [
            'title' => 'RGB Light Controller',
            'category' => 'IoT & Embedded',
            'icon' => 'bi-lightbulb',
            'description' => 'Sistem kontrol lampu RGB menggunakan ESP32 dan potentiometer untuk mengatur intensitas cahaya.',
            'tech' => ['ESP32', 'C++', 'PWM'],
            'link' => '#',
        ],
    ];

    $experiences = [
        ['company' => 'PT Yamaha Electronics Manufacturing Indonesia', 'role' => 'Internship', 'period' => '2025 - 2026'],
        ['company' => 'PT WinnieCode Garuda Teknologi', 'role' => 'Laravel Developer Intern', 'period' => '2025 - 2026'],
        ['company' => 'Indobot Academy', 'role' => 'Firmware Engineer & Project Manager', 'period' => '2025'],
        ['company' => 'MSIB IoT Program', 'role' => 'IoT Developer', 'period' => '2025'],
    ];

    $skills = [
        [
            'title' => 'Web Development',
            'icon' => 'bi-code-slash',
            'items' => [
                ['name' => 'Laravel', 'icon' => 'devicon-laravel-original'],
                ['name' => 'PHP', 'icon' => 'devicon-php-plain'],
                ['name' => 'CodeIgniter 4', 'icon' => 'devicon-codeigniter-plain'],
                ['name' => 'JavaScript', 'icon' => 'devicon-javascript-plain'],
                ['name' => 'HTML5', 'icon' => 'devicon-html5-plain'],
                ['name' => 'CSS3', 'icon' => 'devicon-css3-plain'],
                ['name' => 'Bootstrap', 'icon' => 'devicon-bootstrap-plain'],
            ],
        ],
        [
            'title' => 'IoT & Embedded Systems',
            'icon' => 'bi-cpu',
            'items' => [
                ['name' => 'ESP32', 'icon' => 'devicon-esp32-plain'],
                ['name' => 'ESP8266', 'icon' => 'bi-wifi'],
                ['name' => 'Arduino', 'icon' => 'devicon-arduino-plain'],
                ['name' => 'C', 'icon' => 'devicon-c-plain'],
                ['name' => 'C++', 'icon' => 'devicon-cplusplus-plain'],
                ['name' => 'Arduino IDE', 'icon' => 'devicon-arduino-plain'],
                ['name' => 'Sensors & Actuators', 'icon' => 'bi-cpu'],
            ],
        ],
        [
            'title' => 'Database, Tools & Productivity',
            'icon' => 'bi-grid-1x2',
            'items' => [
                ['name' => 'MySQL', 'icon' => 'devicon-mysql-plain'],
                ['name' => 'Git', 'icon' => 'devicon-git-plain'],
                ['name' => 'GitHub', 'icon' => 'devicon-github-original'],
                ['name' => 'VS Code', 'icon' => 'devicon-vscode-plain'],
                ['name' => 'Vite', 'icon' => 'devicon-vitejs-plain'],
                ['name' => 'Microsoft Office', 'icon' => 'devicon-microsoftoffice-plain'],
                ['name' => 'Canva', 'icon' => 'devicon-canva-original'],
            ],
        ],
    ];

    return view('home', compact('projects', 'experiences', 'skills'));
});
