<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<ul class="articles-list">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<? $arFileTmp = CFile::ResizeImageGet(
				$arItem["PREVIEW_PICTURE"],
				array("width" => 140, "height" => 140),
				BX_RESIZE_IMAGE_EXACT,
				true,
				$arWaterMark
			);
		?>
		<li class="wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
			<div class="left">
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?> "><img src="<?=$arFileTmp["src"]?>"></a>
			</div> <!-- /.left -->
			<div class="right">
				<h3><?=$arItem["NAME"]?></h3>
				<p><?=TruncateText($arItem["PREVIEW_TEXT"], 200)?></p>
				<p><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=GetMessage("DETAIL_BTN_KO")?></a></p>
			</div> <!-- /.right -->
		</li>
	<?endforeach;?>
</ul>				