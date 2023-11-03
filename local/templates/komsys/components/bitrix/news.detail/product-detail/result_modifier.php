<?


$count = 0;
if($arResult["PROPERTIES"]["INFO_FOLDER"]["VALUE"] != ""){
$arSelect = Array();
$arFilter = Array("IBLOCK_ID"=> 4, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "IBLOCK_SECTION_ID" => $arResult["PROPERTIES"]["INFO_FOLDER"]["VALUE"]);
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement())
{
    $arFields = $ob->GetFields();
    $arProps = $ob->GetProperties();
    $arResult["INFO"][$count]["NAME"] = $arFields["NAME"];
    $arResult["INFO"][$count]["PRICE"] = $arProps["PRICE"]["VALUE"];
    $arResult["INFO"][$count]["NOTE"] = $arProps["NOTE"]["VALUE"];
    $count++;
}
}

foreach ($arResult["PROPERTIES"]["PHOTOS"]["VALUE"] as &$photo) {
    $arResult["PHOTOS"][$photo]["SRC"] =  CFile::GetPath($photo);
}

foreach($arResult["PROPERTIES"]["INFO"]["VALUE"] as $key => $value){
    $arResult["prop"][$value] = $arResult["PROPERTIES"]["INFO"]["DESCRIPTION"][$key];
}


$arResult["PROPERTIES"]["MORE_PHOTO"]["SRC"][0] = $arResult["DETAIL_PICTURE"]["SRC"];
foreach ($arResult["PROPERTIES"]["MORE_PHOTO"]["VALUE"] as $key => $value){
    $arResult["PROPERTIES"]["MORE_PHOTO"]["SRC"][] = CFile::GetPath($value);
}
//dump($arResult);
?>