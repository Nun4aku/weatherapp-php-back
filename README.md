<b>Запуск:</b><BR>
php artisan serv<BR>

<b>Описание:</b><BR>
Проект на Laravel, тянет тестовые даныне погод с https://samples.openweathermap.org/data/2.5/forecast заносит их в БД<BR>

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
    <BR>
<b>Фронт:</b><BR>   
https://github.com/Nun4aku/weatherapp-react-front<BR>
        
<b>Тесты:</b><BR>   
/api/moscow -> status 200 <BR> 
/api/moscow/update -> status 200 <BR>
