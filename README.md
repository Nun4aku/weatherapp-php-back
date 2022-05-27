php artisan serv<BR>

Проект на Laravel, тянет тестовые даныне погод с https://samples.openweathermap.org/data/2.5/forecast заносит из в БД<BR>

в БД таблица "moscows" (скачать: https://disk.yandex.ru/d/Nsao33ewAviUTw)<BR>
    имеет структуру  // moscows с s на конце, лол. Ларавель так подставил.

$table->id();<BR>
$table->date('date');<BR>
$table->string('temp');<BR>
$table->string('cloudy');<BR>
$table->timestamps();<BR>

Отдавет данные:<BR>
http://127.0.0.1:8000/api/moscow  - подтягивает из базы<BR>
http://127.0.0.1:8000/api/moscow/update - обновляет с АПИ, закидывает в базу и отдавет новые данные из базы<BR>
