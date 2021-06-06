#!/usr/bin/env bash

php artisan migrate:refresh

php artisan db:seed --class="YaangVu\SisModel\Database\Seeders\DatabaseSeeder"
