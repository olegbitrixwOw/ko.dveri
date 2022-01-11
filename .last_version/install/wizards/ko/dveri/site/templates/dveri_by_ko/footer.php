<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)  die();
$curPage = $APPLICATION->GetCurPage();
IncludeTemplateLangFile(__FILE__);
?>		
<?//if ($curPage == SITE_DIR):?>		
	</div> <!-- /.container -->
			</div> <!-- /#h1-wrap -->
<?//endif;?>
		<section id="lp_action" class="section">
		<a name="top"></a> 
				<div class="container">

					<h2 class="white big-title wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.5s">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/action_title.php"), false);?>
					</h2>
					
					<div class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s">

						<h3>
							<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/action_title2.php"), false);?>
							
						</h3>

						<div class="form-wrp">
						<?$APPLICATION->IncludeComponent(
							"ko:main.feedback",
							"feedback_popup_by_ko",
							Array(
								"EMAIL_TO" => "zakaz@ko25.ru",
								"AJAX_MODE" => "Y",  // режим AJAX
								"AJAX_OPTION_SHADOW" => "N", // затемнять область
								"AJAX_OPTION_JUMP" => "N", // скроллить страницу до компонента
								"AJAX_OPTION_STYLE" => "Y", // подключать стили
								"AJAX_OPTION_HISTORY" => "N",
								"EVENT_MESSAGE_ID" => array("#EVENT_MESSAGE_ID#"),
								"OK_TEXT" => "Спасибо, ваше сообщение принято.",
								"REQUIRED_FIELDS" => array("NONE"),
								"USE_CAPTCHA" => "N"
							)
						);?>
							

						</div> <!-- /.form-wrp -->

						<div class="note">
							<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/action_title3.php"), false);?>	
						</div>

					</div> <!-- /.wow -->

				</div> <!-- /.container -->
			</section> <!-- /#lp_action -->

			<section id="lp_articles" class="section wave">
				<div class="container">

					<h2 class="black big-title wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.5s">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/articles_title.php"), false);?>	

					</h2>
<?
							$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"news_articles_list_index_by_ko", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "#ARTICLES_IBLOCK_ID#",
		"IBLOCK_TYPE" => "ko_dveri",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "2",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "news_articles_list_index_by_ko"
	),
	false
);
							
							?>	
					
					<div class="read-more wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1s">
						<a href="<?=SITE_DIR?>articles/" class="button"><?=GetMessage("SHOW_ALL_ARTICLES")?></a>
					</div> <!-- /.read-more -->

				</div> <!-- /.container -->
			</section> <!-- /#lp_articles -->

		</div> <!-- /#body -->

		<footer id="lp_contacts" class="section">
			<div class="container">

				<div class="left wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
					<h2>
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/contacts_footer_title.php"), false);?>
					</h2>
					<div class="phones">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/phone_footer.php"), false);?>
					</div>
					<div class="mail">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/email_footer.php"), false);?>
					</div>
					<div class="skype">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/skype_footer.php"), false);?>
					</div>
					<div class="copy">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/copy_footer.php"), false);?>
					</div>
				</div> <!-- /.left -->

			</div> <!-- /.container -->
		</footer> <!-- /#lp_contacts -->
		<div class="container-fluid">
		<div class="row">
			<div class="col">
				<?$APPLICATION->IncludeComponent(
					"bitrix:map.yandex.view",
					"",
					Array(
						"CONTROLS" => array("ZOOM","SMALLZOOM","MINIMAP","TYPECONTROL","SCALELINE","SEARCH"),
						"INIT_MAP_TYPE" => "MAP",
						"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.8637519999936;s:10:\"yandex_lon\";d:37.606011;s:12:\"yandex_scale\";i:14;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.605839338623035;s:3:\"LAT\";d:55.86112134783088;s:4:\"TEXT\";s:0:\"\";}}}",
						"MAP_HEIGHT" => "350",
						"MAP_ID" => "",
						"MAP_WIDTH" => "100%",
						"OPTIONS" => array("ENABLE_DBLCLICK_ZOOM","ENABLE_RIGHT_MAGNIFIER","ENABLE_DRAGGING")
					)
				);?>				
			</div>
		</div>
	</div>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		
		<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.bxslider.min.js"></script>
		<script src="<?=SITE_TEMPLATE_PATH?>/js/wow.min.js"></script>
		<script src="<?=SITE_TEMPLATE_PATH?>/js/lightbox.min.js"></script>
		<script src="<?=SITE_TEMPLATE_PATH?>/js/script.js"></script>
		<!--<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.ui.totop.min.js"></script>-->
		<script type="text/javascript">
			$(document).ready(function(){
				$('.bxslider').bxSlider({
					mode: 'fade',
					speed: 500,
					infiniteLoop: false,
					nextSelector: '.next',
					prevSelector: '.prev',
					nextText: '',
					prevText: '',
					pager: false,
					hideControlOnEnd: true,
				});
			});
		</script>

		<script type="text/javascript">
			// custom navigation
			$(document).ready(function() {
				$('a[href^="#lp_"]').click(function () {
					$('html, body').animate({
					scrollTop: $($(this).attr('href')).offset().top + 20 + "px"
					}, {
						duration: 500
					});
					return false;
				});
			});
		</script>

		<script>
			wow = new WOW({
				mobile: false
			});
			wow.init();
		</script>
		<a href="#" id="toTop" style="display: inline;"><span id="toTopHover" style="opacity: 1;"></span><span id="toTopHover"></span>To Top</a>
	</body>
</html>