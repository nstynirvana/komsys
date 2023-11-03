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


AddEventHandler("main", "OnEpilog", "My404PageInSiteStyle");
function My404PageInSiteStyle()
{
    if(defined('ERROR_404') && ERROR_404 == 'Y')
    {
        global $APPLICATION;
        $APPLICATION->RestartBuffer();
        include $_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/header.php';
        include $_SERVER['DOCUMENT_ROOT'].'/404.php';
        include $_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/footer.php';
    }
}