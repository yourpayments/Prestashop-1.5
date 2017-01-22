<?php
include(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/../../header.php');
include(dirname(__FILE__).'/payu.php');
include(dirname(__FILE__).'/payu.scls.php');

$message = '';
if (isset($_GET['err'])) {
	$message = $_GET['err'] .'<br>';
}

$result = isset($_GET['result']) ? $_GET['result'] : '';
switch ($result) {
	case '-1': $message .= 'Вам выставлен счёт в системе Qiwi. Пожалуйста перейдите в личный кабинет Qiwi по адресу http://qiwi.com/ и подтвердите оплату.'; break;
	case '0' : $message .= 'Ваш платёж успешно выполнен. Ваш заказ будет обработан...'; break;
	case '1' : $message .= 'Не удалось обработать ваш платёж. Пожалуйста попробуйте повторить платёж или обратитесь к нашему консультанту...'; break;
	default  : $message .= 'Информация о платеже не доступна.'; break;
}

?>
<div>
	<h1>Информация о статусе оплаты</h1>
	<h4>Уважаемый покупатель!</h4>
	<p><?= $message ?></p>
</div>
