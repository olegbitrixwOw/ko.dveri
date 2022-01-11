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
<div class="slidewrap wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.75s">
					
	<ul class="bxslider" id="reviews-slider">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<?
				$arFileTmp = CFile::ResizeImageGet(
					$arItem["PREVIEW_PICTURE"],
					array("width" => 100, "height" => 100),
					BX_RESIZE_IMAGE_EXACT,
					true,
					$arWaterMark
				);
			
			?>
			<li>
				<div class="wrp">
					<img src="<?=$arFileTmp["src"]?>">
					<div class="text">
						<p><?echo $arItem["DETAIL_TEXT"];?></p>
						<p><b><?echo $arItem["PREVIEW_TEXT"];?></b></p>
					</div> <!-- /.text -->
				</div> <!-- /.wrp -->
			</li>
		<?endforeach;?>
	</ul>
</div> <!-- /.sliderwrap -->
<div class="nav wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="1s">
	<div class="prev"></div>
	<div class="next"></div>
</div> <!-- /.nav -->
