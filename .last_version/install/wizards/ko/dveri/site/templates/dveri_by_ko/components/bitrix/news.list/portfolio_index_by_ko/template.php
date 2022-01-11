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
<div class="gallery-wrap">
	<ul>
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<?
				$arFileTmp = CFile::ResizeImageGet(
					$arItem["PREVIEW_PICTURE"],
					array("width" => 140, "height" => 140),
					BX_RESIZE_IMAGE_EXACT,
					true,
					$arWaterMark
				);
			?>
			<li class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
				<a href="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" data-lightbox="example-1">
					<span class="overlay"></span>
					<span class="zoom"></span>
					<img src="<?=$arFileTmp["src"]?>">
				</a>
				
			</li>
		<?endforeach;?>
		
	</ul>
</div> <!-- /.gallery-wrap -->


