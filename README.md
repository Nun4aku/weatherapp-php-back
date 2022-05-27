php artisan serv

Проект на Laravel, тянет тестовые даныне погод с https://samples.openweathermap.org/data/2.5/forecast заносит из в БД

в БД таблица "moscows" имеет структуру  // moscows с s на конце, лол. Ларавель так подставил.

$table->id();
$table->date('date');
$table->string('temp');
$table->string('cloudy');
$table->timestamps();

И от давет данные по адресам:
http://127.0.0.1:8000/api/moscow  - подтягивает из базы
http://127.0.0.1:8000/api/moscow/update - обновляет с АПИ, закидывает в базу и отдавет новые данные из базы
