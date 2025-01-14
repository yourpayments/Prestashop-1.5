# «Твои платежи», модуль для CMS Prestashop-1.5

![](https://repository-images.githubusercontent.com/638835276/ff494b04-d65b-4843-8759-e85c689a7e80)

[НКО «Твои Платежи»](https://YPMN.ru/ "Платёжная система для сайтов, платформ и приложений") - платёжная система для сайтов, платформ, игр и приложений.
Модуль добавляет интеграцию с платежной системой «Твои Платежи».
Модуль совместим с версиями Prestashop 1.5.х и 1.6.x
(Разработан и протестирован на версии 1.5.4.0 и 1.6.0.6)

## Установка модуля
1. Скачайте архив с модулем
2. Распакуйте архив и загрузите файлы из папки ```payu``` в директорию по адресу {корень сайта}/modules/payu/
3. Перейти в раздел "Модули" ("Modules")
4. Выбрать раздел "Платежи и шлюзы" ("Payments & Gateways")
5. Из выпавшего списка выбрать "Платежи PayU" и нажать кнопку "Установить" ("Install")
6. Нажать ссылку Настроить
7. Ввести все необходимые данные (см. ниже)
8. Настройте модуль
9. После настройки включить

## Настройка модуля
Для настройки модуля Вам необходимо будет заполнить следующие поля
* ```Merchant ID```. Код продавца (идентификатор мерчанта).
* ```Secret key```. Секретный Ключ.

```Merchant ID``` и ```Secret key``` можно узнать в личном кабинете «Твои Платежи» на странице редактирования профиля в разделе ```Немедленное уведомление об оплате```

* ```Режим отладки (Debug mode)```. Включить или выключить режим отладки. При включенном режиме отладки фактическая оплата заказов не производиться!
* ```Ссылка (Live Update) Link for Live Update```. Для российских и украинских мерчантов это поле изменять не нужно.
* ```Ссылка возврата клиента (Back refference)```. Ссылка на страницу на которую будет возвращен пользователь после оплаты. Если это поле оставить пустым, пользователь останется в системе «Твои Платежи»
* ```Валюта мерчанта (Currency)```. Валюта платежа. Допустимые значения: RUB, EUR, USD. Если параметр не задан, значение по умолчанию: RUB.
* ```Язык страницы оплаты (Payment page language)```. Позволяет задавать определенный язык платежного интерфейса. Возможные значения:
	* RO - румынский
	* EN - английский
	* HU - венгерский
	* RU - русский
	* DE - немецкий
	* FR - французский
	* IT - итальянский
	* ES - испанский

## IPN
Для настройки IPN Вам необходимо в настройках аккаунта «Твои Платежи» в разделе ```Уведомления IPN``` выбрать значение ***IPN (Instant Payment Notification)***.
Далее перейдя на страницу ```Настройки IPN``` в поле ```URL``` указать ссылку для IPN: ***http://{домен сайта}/modules/payu/result.php***.
Полный адрес ссылки можно посмотреть в настройках модуля в поле ```IPN URL```.
