<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();  $this->setFrameMode(true);?>

<?if (!empty($arResult)):?>
<ul class="nav-menu">

<?
$curPage = $APPLICATION->GetCurPage();
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
<?if ($curPage <> "/" && $arItem["TEXT"] == GetMessage("MENU_INDEX")) {
			$arItem["LINK"] = SITE_DIR;
	}?>
	<?if($arItem["SELECTED"]):?>
		<li class=""current-menu-item"><a href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?> 

</ul>
<?endif?> 