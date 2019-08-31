#!/bin/bash

php artisan dusk tests/Browser/HomeTest.php

php artisan dusk tests/Browser/AuthTestRegister.php
php artisan dusk tests/Browser/AuthTestLogin.php
php artisan dusk tests/Browser/AuthTestCancel.php

php artisan dusk tests/Browser/AccountTest.php
