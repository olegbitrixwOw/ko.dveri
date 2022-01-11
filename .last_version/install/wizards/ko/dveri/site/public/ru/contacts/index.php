<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><p>
	 Установка, ремонт дверей и замков<br>
	 в Ростове-на-Дону и области, 2016<br>
</p>
<p>
	 Адрес: <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."include/addr.php"
	)
);?>
</p>
<p>
	 Режим работы: <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."include/time.php"
	)
);?>
</p>
<p>
	 Телефон: <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."include/phone.php"
	)
);?>
</p>
<p>
	 Мы на карте: <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	"",
	Array(
		"CONTROLS" => array("ZOOM","SMALLZOOM","MINIMAP","TYPECONTROL","SCALELINE","SEARCH"),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.8637519999936;s:10:\"yandex_lon\";d:37.606011;s:12:\"yandex_scale\";i:14;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.605839338623035;s:3:\"LAT\";d:55.86112134783088;s:4:\"TEXT\";s:0:\"\";}}}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array("ENABLE_DBLCLICK_ZOOM","ENABLE_RIGHT_MAGNIFIER","ENABLE_DRAGGING")
	)
);?>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>