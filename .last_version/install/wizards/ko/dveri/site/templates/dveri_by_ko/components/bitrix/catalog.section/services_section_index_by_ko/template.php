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
<ul id="our-services-list">
	<?$i=0;foreach ($arResult['ITEMS'] as $key => $arItem): $i++;?>
		<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strElementEdit);
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strElementDelete, $arElementDeleteParams);
		?>
		
			<li>
				<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
					<div class="flipper service<?=$i?>">
						<div class="front">
							<?echo $arItem["PREVIEW_TEXT"]?>
						</div> <!-- /.front -->
						<div class="back">
							<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?=GetMessage("DETAIL_KO")?></a>
						</div> <!-- /.back -->
					</div> <!-- /.flipper -->
				</div> <!-- /.flip-container -->
			</li>
		
	<?endforeach;?>	
</ul>