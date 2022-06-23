#!/usr/bin/env bash

php artisan migrate:refresh

sleep 10;

php artisan db:seed --class="YaangVu\SisModel\Database\Seeders\DatabaseSeeder"

# php artisan db:seed --class="YaangVu\SisModel\Database\Seeders\PermissionSeeder"
