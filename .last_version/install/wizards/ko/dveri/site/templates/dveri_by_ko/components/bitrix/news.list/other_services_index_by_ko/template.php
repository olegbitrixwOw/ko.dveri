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
<ul>
	<?$i=0;foreach($arResult["ITEMS"] as $arItem): $i++;?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			
			$arFileTmp = CFile::ResizeImageGet(
				$arItem["PREVIEW_PICTURE"],
				array("width" => 180, "height" => 180),
				BX_RESIZE_IMAGE_EXACT,
				true,
				$arWaterMark
			);
		
		
		?>
		
			<li>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$arFileTmp["src"]?>"></a>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["PREVIEW_TEXT"]?></a>		
			</li>
		
	<?endforeach;?>
		
</ul>