# misis_coursework
<h2>Курсовая работа</h2>
<p>Задача проекта состояла в симуляции 2х разных серверов. Функционал 1го сервера - обслужить пользователя, загрузить на 1ый сервер файл и комментарий к нему
Именно эта часть сделана на MVC фреймворке. Также, у первого сервера имеется демон, запускаемый любым планировщиком. Задача демона - обнаружить загруженные файлы и отправить их на 2й сервер посредством любого протокола. Я выбрал FTP. Но хочу освоить технологию развертывания
RESTful API. Демон 1го сервера "возбуждает" слушателя 2го сервера и отсылает ему файлы и другие сопутствующие данные в формате JSON (сначала думал о XML, а потом понял, что это ни к чему. JSON формат легче, проще форматируется при создании и легче декодируется на стороне 2го сервера
2й сервер принимает данные, обрабатывает и в случае успешной транзакции, отправляет сигнал 1му серверу об успехе. Тот, в свою очередь, помечает файл в БД mysql как обработанный (для этого используются пиктограммы Glyphicon)

Дизайн веб-клиента постараюсь исправить в ближайшие часы, но и первая редакция выглядит разборчиво. Вёрстка: Twitter Bootstrap.

Также среди модулей присутствует логгер.

