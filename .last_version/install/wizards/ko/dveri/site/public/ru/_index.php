<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "УСТАНОВЩИКА.NET | Установка, ремонт дверей и замков в Ростове-на-Дону и области");
$APPLICATION->SetTitle("УСТАНОВЩИКА.NET | Установка, ремонт дверей и замков в Ростове-на-Дону и области");
$APPLICATION->SetPageProperty("tags", "УСТАНОВЩИКА.NET | Установка, ремонт дверей и замков в Ростове-на-Дону и области");
$APPLICATION->SetPageProperty("keywords", "УСТАНОВЩИКА.NET | Установка, ремонт дверей и замков в Ростове-на-Дону и области");
$APPLICATION->SetPageProperty("description", "УСТАНОВЩИКА.NET | Установка, ремонт дверей и замков в Ростове-на-Дону и области");
?>


			<section id="promo" class="slide2">
				<div class="overlay">
					<div class="container">

						<div class="left wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
							<div id="page-menu">
								<span class="title">
									<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/nav_title.php"), false);?>
								</span>
								<ol>
									<li>
										<a href="#lp_about">									
											<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/nav1.php"), false);?>
										</a>
									</li>
									<li>
										<a href="#lp_price">										
											<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/nav2.php"), false);?>
										</a>
									</li>
									<li>
										<a href="#lp_advantages">
											<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/nav3.php"), false);?>
										</a>
									</li>
									<li>
										<a href="#lp_guaranty">
											<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/nav4.php"), false);?>
										</a>
									</li>
									<li>
										<a href="#lp_reviews">
											<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/nav5.php"), false);?>
										</a>
									</li>
									
									<li>
										<a href="#lp_portfolio">
											<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/nav6.php"), false);?>
										</a>
									</li>
									<li>
										<a href="#lp_action">
											<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/nav7.php"), false);?>
										</a>
									</li>
									<li>
										<a href="#lp_articles">
											<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/nav8.php"), false);?>
										</a>
									</li>
									<li>
										<a href="#lp_contacts">
											<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/nav9.php"), false);?>
										</a>
									</li>
								</ol>
							</div> <!-- /#page-menu -->
						</div> <!-- /.left -->

						<div class="right wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
							<h2>
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/zamok_title.php"), false);?>
							</h2>
							<h3>
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/feed_title.php"), false);?>

							</h3>
							<a href="#top" class="button"><?=GetMessage("CALL_MASTER_TITLE")?></a>
						</div> <!-- /.right -->

					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</section> <!-- /#promo -->

			<section id="lp_about" class="section wave">
				<div class="container">

					<h2 class="black big-title wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.5s">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/master_yst_dverei.php"), false);?>
					</h2>
					<ul class="regards-list">
						<li class="_1 wow flipInX" data-wow-delay="0s">
							<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/master_yst_dverei1.php"), false);?>
						</li>
						<li class="_2 wow flipInX" data-wow-delay="0.5s">
							<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/master_yst_dverei2.php"), false);?>
						</li>
						<li class="_3 wow flipInX" data-wow-delay="1s">
							&nbsp;
						</li>
						<li class="_4 wow flipInX" data-wow-delay="1.5s">
							<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/master_yst_dverei3.php"), false);?>
						</li>
						<li class="_5 wow flipInX" data-wow-delay="2s">
							<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/master_yst_dverei4.php"), false);?>
						</li>
					</ul>
					<div class="text wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.5s">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/master_text.php"), false);?>
					</div> <!-- /.text -->

				</div> <!-- /.container -->
			</section> <!-- /#lp_about -->

			<section id="lp_price" class="section">
				<div class="container">

					<h2 class="brown big-title wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.5s">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/price_title.php"), false);?>
					</h2>

					<div class="left wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
						<a href="<?=SITE_TEMPLATE_PATH?>/images/price1.jpg" class="img" data-lightbox="example-1">
							<span class="overlay"></span>
							<span class="zoom"></span>
							<img src="<?=SITE_TEMPLATE_PATH?>/images/price1.jpg">
						</a>
						<h3>
							<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/dver1_title.php"), false);?>
						</h3>
						<div class="features-list">
							<ul>
								<li>							
									<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/dver1.php"), false);?>
								</li>
								<li>
									<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/dver2.php"), false);?>
								</li>
								<li>
									<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/dver3.php"), false);?>
								</li>
								<li>
									<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/dver4.php"), false);?>
								</li>
								<li>
									<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/dver5.php"), false);?>
								</li>
								<li class="last">
									<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/dver6.php"), false);?>
								</li>
							</ul>
						</div> <!-- .features-list -->
						<a href="#top" class="button"><?=GetMessage("ZAKAZ_DVERI")?></a>
					</div> <!-- /.left -->

					<div class="right wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
						<a href="<?=SITE_TEMPLATE_PATH?>/images/price2.jpg" class="img" data-lightbox="example-2">
							<span class="overlay"></span>
							<span class="zoom"></span>
							<img src="<?=SITE_TEMPLATE_PATH?>/images/price2.jpg">
						</a>
						<h3>
							<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/dver2_title.php"), false);?>
						</h3>
						<div class="features-list">
							<ul>
								<li>
									<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/dver2_title.php"), false);?>
								</li>
								<li>									
									<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/dver22_title.php"), false);?>
								</li>
								<li>									
									<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/dver23_title.php"), false);?>
								</li>
								<li>									
									<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/dver24_title.php"), false);?>
								</li>
								<li>									
									<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/dver25_title.php"), false);?>
								</li>
								<li class="last">
									<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/dver26_title.php"), false);?>
								</li>
							</ul>
						</div> <!-- .features-list -->
						<a href="#top" class="button"><?=GetMessage("ZAKAZ_DVERI")?></a>
					</div> <!-- /.right -->

					<div class="also wow rotateIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
						<h2>									
							<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/work_services_title.php"), false);?>
						</h2>
												<?
							global $arrFilter;
							
							$arrFilter = array("PROPERTY_OTHER_SERVICE_VALUE"=>GetMessage("YES"));
						?>
						<?$APPLICATION->IncludeComponent(
							"bitrix:catalog.section",
							"other_section_index_by_ko",
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
						
					</div> <!-- /.also -->

				</div> <!-- /.container -->
			</section> <!-- /#lp_price -->

			<section id="lp_advantages" class="section darkwave">
				<div class="container">

					<h2 class="white big-title wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.5s">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/adv_title.php"), false);?>
					</h2>	


					<table id="adv" cellpadding="0" cellspacing="0">
						<tr>
							<th class="minus wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/adv_title2.php"), false);?>
							</th>
							<th class="plus wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
									<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/adv_title3.php"), false);?>
								</th>
						</tr>
						<tr>
							<td class="minus wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.6s">
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/adv_title4.php"), false);?>
							</td>
							<td class="plus wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.6s">
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/adv_title5.php"), false);?>
							</td>
						</tr>
						<tr>
							<td class="minus wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.7s">
							<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/adv_title6.php"), false);?>
								</td>
							<td class="plus wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.7s">
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/adv_title7.php"), false);?>
							</td>
						</tr>
						<tr>
							<td class="minus wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.8s">
							<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/adv_title8.php"), false);?>
								</td>
							<td class="plus wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.8s">
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/adv_title9.php"), false);?>
							</td>
						</tr>
						<tr>
							<td class="minus wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.9s">
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/adv_title10.php"), false);?>
							</td>
							<td class="plus wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.9s">
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/adv_title11.php"), false);?>
							</td>
						</tr>
						<tr>
							<td class="minus wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="1s">
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/adv_title12.php"), false);?>
							</td>
							<td class="plus wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="1s">
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/adv_title13.php"), false);?>
							</td>
						</tr>
						<tr>
							<td class="minus wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="1.1s">
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/adv_title14.php"), false);?>
							</td>
							<td class="plus wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="1.1s">
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/adv_title15.php"), false);?>
							</td>
						</tr>
					</table>

				</div> <!-- /.container -->
			</section> <!-- /#lp_advantages -->

			<section id="lp_guaranty" class="section wave">
				<div class="container">

					<h2 class="black big-title wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.5s">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/garant_title.php"), false);?>
					</h2>

					<ul id="guaranty-list">
						<li class="_1 wow flipInX" data-wow-delay="0s">
							<h3>
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/garant_title1.php"), false);?>
							</h3>
							<p>
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/garant_title2.php"), false);?>
							</p>
						</li>
						<li class="_2 wow flipInX" data-wow-delay="0.5s">
							<h3>
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/garant_title3.php"), false);?>
							</h3>
							<p>
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/garant_title4.php"), false);?>
							</p>
						</li>
						<li class="_3 wow flipInX" data-wow-delay="1s">
							<h3>
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/garant_title5.php"), false);?>
							</h3>
							<p>
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/garant_title6.php"), false);?>
							</p>
						</li>
						<li class="_4 wow flipInX" data-wow-delay="1.5s">
							<h3>
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/garant_title7.php"), false);?>
							</h3>
							<p>
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/garant_title8.php"), false);?>
							</p>
						</li>
					</ul>

				</div> <!-- /.container -->
			</section> <!-- /#lp_guaranty -->

			<section id="lp_reviews" class="section">
				<div class="container">

					<h2 class="brown big-title wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.5s">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/reviews_title.php"), false);?>
					</h2>
						<?
							$APPLICATION->IncludeComponent(
								"bitrix:news.list",
								"reviews_index_by_ko",
								Array(
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
									"FIELD_CODE" => array("", ""),
									"FILTER_NAME" => "",
									"HIDE_LINK_WHEN_NO_DETAIL" => "N",
									"IBLOCK_ID" => "#REVIEWS_IBLOCK_ID#",
									"IBLOCK_TYPE" => "ko_dveri",
									"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
									"INCLUDE_SUBSECTIONS" => "N",
									"MESSAGE_404" => "",
									"NEWS_COUNT" => "100",
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
									"PROPERTY_CODE" => array("", ""),
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
									"SORT_ORDER2" => "ASC"
								)
							);
							
							?>	
					
					
				</div> <!-- /.container -->
					
			</section> <!-- /#lp_reviews -->
					<div class="read-more wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1s">
						<a href="<?=SITE_DIR?>reviews/" class="button"><?=GetMessage("SHOW_ALL_REVIEWS")?></a>
					</div> <!-- /.read-more -->

			<section id="lp_portfolio" class="section wave">
				<div class="container">

					<h2 class="black big-title wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.5s">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/gal_title.php"), false);?>

					</h2>
						<?
							$APPLICATION->IncludeComponent(
								"bitrix:news.list",
								"portfolio_index_by_ko",
								Array(
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
									"FIELD_CODE" => array("", ""),
									"FILTER_NAME" => "",
									"HIDE_LINK_WHEN_NO_DETAIL" => "N",
									"IBLOCK_ID" => "#PORTFOLIO_IBLOCK_ID#",
									"IBLOCK_TYPE" => "ko_dveri",
									"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
									"INCLUDE_SUBSECTIONS" => "N",
									"MESSAGE_404" => "",
									"NEWS_COUNT" => "100",
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
									"PROPERTY_CODE" => array("", ""),
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
									"SORT_ORDER2" => "ASC"
								)
							);
							
							?>	

					
				</div> <!-- /.container -->
					<div class="read-more wow fadeInUp" data-wow-duration="0.5s" id="photo" data-wow-delay="1s">
						<a href="<?=SITE_DIR?>photo/" class="button"><?=GetMessage("SHOW_ALL_PHOTO")?></a>
					</div> <!-- /.read-more -->
			</section> <!-- /#lp_portfolio -->
				



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>