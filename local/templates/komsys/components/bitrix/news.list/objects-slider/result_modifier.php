<?
foreach ($arResult["ITEMS"] as &$arItem){
	foreach ($arItem["PROPERTIES"]["PHOTOS"]["VALUE"] as &$photo) {
    	$arItem["PHOTOS"][$photo]["SRC"] =  CFile::GetPath($photo);
	}
}
?>