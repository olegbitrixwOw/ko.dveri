<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
 $this->setFrameMode(true);
?>

<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?>
	<script>
		//alert("123");
		$(".form").hide();
	</script>
	<div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div>
		
	
	<? 
}
?>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="form">
<?=bitrix_sessid_post()?>
<div class="field">
									<input type="text" class="name" name="user_name" placeholder="<?=GetMessage("MFT_NAME")?> *" required>
								</div>
								<div class="field">
									<input type="tel" class="phone" name="user_phone" placeholder="<?=GetMessage("MFT_PHONE")?> *" required>
								</div>
								<div class="submit">
									<input type="submit" name="submit" class="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
								</div>
								
								
	

	

	<?if($arParams["USE_CAPTCHA"] == "Y"):?>
	<div class="mf-captcha">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
		<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
		<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
		<input type="text" required name="captcha_word" size="30" maxlength="50" value="" placeholder="<?=GetMessage("MFT_CAPTCHA_CODE")?>">
	</div>
	<?endif;?>
	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
	
</form>
