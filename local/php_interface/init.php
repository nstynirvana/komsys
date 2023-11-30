<?php
function dump($data, $deleteKeys = null)
{
    global $USER;

    if (!$USER->IsAdmin() && !isset($_GET['dev'])) {
        return;
    }

    if (is_array($data)) {
        foreach ($deleteKeys as $key) {
            unset($data[$key]);
        }
    }

    echo "<pre style='background-color: #615555; color: #e2e2e2; border: 2px solid red; padding: 10px; border-radius: 5px'>";
    print_r($data);
    echo "</pre>";
}

AddEventHandler("main", "OnEpilog", "error_page");
function error_page()
{
    $page_404 = "/404.php";
    GLOBAL $APPLICATION;
    if(strpos($APPLICATION->GetCurPage(), $page_404) === false && defined("ERROR_404") && ERROR_404 == "Y")
    {
        $APPLICATION->RestartBuffer();
        CHTTP::SetStatus("404 Not Found");
        include($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/header.php");
        include($_SERVER["DOCUMENT_ROOT"].$page_404);
        include($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH."/footer.php");
        die();
    }
}