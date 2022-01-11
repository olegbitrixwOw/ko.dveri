<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arServices = Array(
	"main" => Array(
		"NAME" => GetMessage("SERVICE_MAIN_SETTINGS"),
		"STAGES" => Array(
			"files.php", // Copy bitrix files
			"template.php", // Install template
			"theme.php", // Install theme
			"group.php", // Install group
			"menu.php", // Install menu
			"events.php", // Install menu
			"settings.php",
		),
	),

	"iblock" => Array(
		"NAME" => GetMessage("SERVICE_IBLOCK"),
		"STAGES" => Array(
			"types.php", //IBlock types
			"actions.php",
		//	"video.php",
		//	"clients.php",
		//	"adv.php",
		//	"news.php",
			"reviews.php",
			"portfolio.php",
			//"sertificates.php",
			//"vacancies.php",
		//	"slider.php",
		//	"empl.php",
			"articles.php",
			"services.php",
			"price.php",
		),
	),
);
?>