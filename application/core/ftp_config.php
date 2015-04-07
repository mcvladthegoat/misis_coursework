<?php
define("FTPADDR", "mcvlad.myjino.ru");
define("FTPLOGIN", "mcvlad");
define("FTPPWD", "thealgoritm2012");
define("FTPDEST", "/domains/mcvlad.myjino.ru/files/");
//Есть сложность с поддержкой интерпретатора на Windows. Путь к файлам для file_put_contents и ftp_put должен идти от КОРНЯ диска. Не удтверждаю что это проблема не в моем коде :), но выход вижу такой: при использовании демона, все-таки учитывать ОС, при Windows - использовать эту константу. Да, тут я всё понял - Windows отстой. Еще есть мысли про переменные среды (PATH)
define("FULLADDR", "C:\\wamp\\www\\mvc\\out\\");
?>