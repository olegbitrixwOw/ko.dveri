<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)  die();
$curPage = $APPLICATION->GetCurPage();
IncludeTemplateLangFile(__FILE__);

?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
 
<!--<![endif]-->
<head>
<meta charset="<?=SITE_CHARSET?>">
<title><?$APPLICATION->ShowTitle()?></title>
<?

$APPLICATION->ShowMeta("robots", false, false);
$APPLICATION->ShowMeta("keywords", false, false);
$APPLICATION->ShowMeta("description", false, false);
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
<meta name="author" content="">
<meta name="yandex-verification" content="">
<meta name="google-site-verification" content="">

<link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" type="image/x-icon">

<!-- Fav and touch icons -->
<link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico">



<?
	$APPLICATION->ShowLink("canonical", null, false);
	
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/ui.totop.css", true);
	
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/lightbox.min.css", true);
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/style.css", true);
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/animate.css", true);
	
	$APPLICATION->SetAdditionalCSS("/bitrix/css/main/bootstrap.css", true);
	
	$APPLICATION->ShowCSS(true, false);
?>


	  <?
	$APPLICATION->ShowHeadStrings();
	$APPLICATION->ShowHeadScripts();
	?>
 
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,700,700italic,400italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

</head>
<body class="lp">
    <?$APPLICATION->ShowPanel();?>
	<?if ($curPage <> "/") {
			$dir = SITE_DIR;
		}else{ 
		$dir = "/";
	}?>

 

		<header id="header">
			<div class="container">

				<div id="header-top">

					<div id="logo">
						<a href="<?=$dir?>"></a>
					</div> <!-- /#logo -->

					<div id="slogan">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/work_title.php"), false);?>

						
					</div> <!-- /#slogan -->

					<div id="top-phones">
						<span>
							<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/phone_header.php"), false);?>
						</span>
						<a href="#top" class="button"><?=GetMessage("FEEDBACK_TITLE")?></a>
					</div> <!-- /#top-phones -->

				</div> <!-- /#header-top -->

				<nav id="menu" class="default">
					<?$APPLICATION->IncludeComponent("bitrix:menu", "header_menu_by_ko", Array(
						"ALLOW_MULTI_SELECT" => "N",	
							"CHILD_MENU_TYPE" => "left",	
							"DELAY" => "N",	
							"MAX_LEVEL" => "1",	
							"MENU_CACHE_GET_VARS" => "",	
							"MENU_CACHE_TIME" => "3600",	
							"MENU_CACHE_TYPE" => "N",	
							"MENU_CACHE_USE_GROUPS" => "Y",	
							"ROOT_MENU_TYPE" => "top",	
							"USE_EXT" => "N",	 
							"COMPONENT_TEMPLATE" => "horizontal_multilevel"
						),
						false
					);?>
					
				</nav> <!-- /#menu -->
				<?if ($curPage == SITE_DIR):?>
					<div id="our-services">
						<h2 class="brown small-title">
							<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/services_title.php"), false);?>
						</h2>
						<?
							global $arrFilter;
							
							$arrFilter = array("!PROPERTY_OTHER_SERVICE_VALUE"=>GetMessage("YES"));
						?>
						<?$APPLICATION->IncludeComponent(
							"bitrix:catalog.section",
							"services_section_index_by_ko",
							Array(
								"ACTION_VARIABLE" => "action",
								"ADD_PICT_PROP" => "-",
								"ADD_PROPERTIES_TO_BASKET" => "Y",
								"ADD_SECTIONS_CHAIN" => "N",
								"AJAX_MODE" => "N",
								"AJAX_OPTION_ADDITIONAL" => "",
								"AJAX_OPTION_HISTORY" => "N",
								"AJAX_OPTION_JUMP" => "N",
								"AJAX_OPTION_STYLE" => "Y",
								"BACKGROUND_IMAGE" => "-",
								"BASKET_URL" => "/personal/basket.php",
								"BROWSER_TITLE" => "-",
								"CACHE_FILTER" => "N",
								"CACHE_GROUPS" => "Y",
								"CACHE_TIME" => "36000000",
								"CACHE_TYPE" => "A",
								"DETAIL_URL" => "",
								"DISABLE_INIT_JS_IN_COMPONENT" => "N",
								"DISPLAY_BOTTOM_PAGER" => "Y",
								"DISPLAY_TOP_PAGER" => "N",
								"ELEMENT_SORT_FIELD" => "sort",
								"ELEMENT_SORT_FIELD2" => "id",
								"ELEMENT_SORT_ORDER" => "asc",
								"ELEMENT_SORT_ORDER2" => "desc",
								"USE_FILTER" => "Y",
								"FILTER_NAME" => "arrFilter",
								"IBLOCK_ID" => "#SERVICES_IBLOCK_ID#",
								"IBLOCK_TYPE" => "ko_dveri",
								"INCLUDE_SUBSECTIONS" => "A",
								"LABEL_PROP" => "-",
								"LINE_ELEMENT_COUNT" => "5",
								"MESSAGE_404" => "",
								"MESS_BTN_ADD_TO_BASKET" => "В корзину",
								"MESS_BTN_BUY" => "Купить",
								"MESS_BTN_DETAIL" => "Подробнее",
								"MESS_BTN_SUBSCRIBE" => "Подписаться",
								"MESS_NOT_AVAILABLE" => "Нет в наличии",
								"META_DESCRIPTION" => "-",
								"META_KEYWORDS" => "-",
								"OFFERS_LIMIT" => "5",
								"PAGER_BASE_LINK_ENABLE" => "N",
								"PAGER_DESC_NUMBERING" => "N",
								"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
								"PAGER_SHOW_ALL" => "N",
								"PAGER_SHOW_ALWAYS" => "N",
								"PAGER_TEMPLATE" => ".default",
								"PAGER_TITLE" => "Товары",
								"PAGE_ELEMENT_COUNT" => "5",
								"PARTIAL_PRODUCT_PROPERTIES" => "N",
								"PRICE_CODE" => array(),
								"PRICE_VAT_INCLUDE" => "Y",
								"PRODUCT_ID_VARIABLE" => "id",
								"PRODUCT_PROPERTIES" => array(),
								"PRODUCT_PROPS_VARIABLE" => "prop",
								"PRODUCT_QUANTITY_VARIABLE" => "",
								"PROPERTY_CODE" => array("", ""),
								"SECTION_CODE" => "",
								"SECTION_ID" => $_REQUEST["SECTION_ID"],
								"SECTION_ID_VARIABLE" => "SECTION_ID",
								"SECTION_URL" => "",
								"SECTION_USER_FIELDS" => array("", ""),
								"SEF_MODE" => "N",
								"SET_BROWSER_TITLE" => "N",
								"SET_LAST_MODIFIED" => "N",
								"SET_META_DESCRIPTION" => "N",
								"SET_META_KEYWORDS" => "N",
								"SET_STATUS_404" => "N",
								"SET_TITLE" => "N",
								"SHOW_404" => "N",
								"SHOW_ALL_WO_SECTION" => "Y",
								"SHOW_PRICE_COUNT" => "1",
								"TEMPLATE_THEME" => "blue",
								"USE_MAIN_ELEMENT_SECTION" => "N",
								"USE_PRICE_COUNT" => "N",
								"USE_PRODUCT_QUANTITY" => "N"
							)
						);?>
					
					
					</div> <!-- /#our-services -->
				<?endif;?>
			</div> <!-- /.container -->
		</header> <!-- /#header -->

		<div id="body" class="land-page">

			<div id="h1-wrap" class="wave">
				<div class="container">
				<?if ($curPage == SITE_DIR){?>
								
					<h1 class="wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.5s">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/h1_title.php"), false);?>

					</h1>
							</div> <!-- /.container -->
					</div> <!-- /#h1-wrap -->
				<?}else{?>
						<?$APPLICATION->IncludeComponent(
						"bitrix:breadcrumb",
						"",
						Array(
							"PATH" => "",
							"SITE_ID" => "#BREADCRUMB_DIR#",
							"START_FROM" => "0"
						)
					);?>
				<?}?>
			


		