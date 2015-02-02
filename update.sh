#!/bin/sh

composer install
composer update
bower update
compass compile
