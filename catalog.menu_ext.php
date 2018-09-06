<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
global $APPLICATION;
$aMenuLinksExt = $APPLICATION->IncludeComponent(
	"websupps:menu.sections", "", array(
	"IS_SEF" => "Y",
	"SEF_BASE_URL" => SITE_DIR."catalog/",
	"SECTION_PAGE_URL" => "#SECTION_CODE_PATH#/",
	"DETAIL_PAGE_URL" => "#SECTION_CODE_PATH#/#ELEMENT_CODE_PATH#",
	"IBLOCK_TYPE" => "catalog",
	"IBLOCK_ID" => "1",
	"DEPTH_LEVEL" => "3",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"PATH" => rtrim(str_replace(SITE_DIR . 'catalog/', '', $APPLICATION->GetCurDir()), '/')
),
	false
);
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>