# Site-constructorENG
Welcome! How to create pages? 

Open folder "tpl" next create file witdh extension .html.

Go folder "pages" and create file witdh extension .php, then open file and write 

<?php
include Base::PathTPL("home"); //include Base::PathTPL("tpl/filename");

In file index.php you need manage string (defaul is home)

$main_page = 'home';

Recommended in file "filename.html" set lang on PHP.

RU

Добро пожаловать! Как создавать страницы?

Открой папку "tpl" далее создай файл с расширением .html

Открой папку "pages" и создай файл с расширением .php, нужно открыть файл и написать 

<?php
include Base::PathTPL("home"); //include Base::PathTPL("filename in foulder tpl");

В файле index.php вам нужно устоновить в строке название страницы в папке pages

$main_page = 'home';

Рекомендуется в файле "filename.html" установить язык PHP.
