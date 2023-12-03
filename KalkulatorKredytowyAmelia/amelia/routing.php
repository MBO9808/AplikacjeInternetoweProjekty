<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('start'); #default action

Utils::addRoute('start', 'CreditCalcController');
Utils::addRoute('calc', 'CreditCalcController');