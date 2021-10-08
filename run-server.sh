#!/bin/bash

tsc
sed 's/import(.*\)from(.*\)/\"(.*\)"/import(.*\)from(.*\)/\"(.*\).js"/' public/index.js
php -S 127.0.0.1:8080