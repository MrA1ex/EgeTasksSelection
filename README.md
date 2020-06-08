# EgeTasksSelection

Веб-сервис по подбору заданий ЕГЭ

## Предварительные требования

В системе должны быть установлены и доступны через терминал следующие программные средства: `git`, `php`, `composer`, `npm`.

Конфигурация php должна соответствовать [требованиям Laravel](https://laravel.com/docs/7.x#server-requirements).

## Установка

Ниже приведен базовый пример установки и запуска проекта в Windows.

БД находиться в папке database/laravel_ege_tasks.sql
Подключение БД смотрим [в документации](https://laravel.com/docs/7.x/installation).

    # клонируем исходный код проекта
    git clone git@github.com:MrA1ex/EgeTasksSelection.git
    cd it-univer-projector

    # устанавливаем зависимости
    composer install
    npm install

    # производим базовую настройку
    copy .env.example .env
    php artisan key:generate

    # создаем базу данных и наполняем её тестовыми данными
    php -r "touch('database/database.sqlite');"
    php artisan migrate --seed

    # запускаем проект на http://localhost:8000/
    php artisan serve

