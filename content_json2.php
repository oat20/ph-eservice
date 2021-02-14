<?php
$json = array(
    array(
        'title' => 'PH Intranet',
        'url' => 'https://www.ph.mahidol.ac.th/intranet',
        'icon' => 'fa-sitemap'
    ),
    array(
        'title' => 'PH Photo Gallery',
        'url' => 'https://www.ph.mahidol.ac.th/intranet',
        'icon' => 'fa-images'
    ),
    array(
        'title' => 'ระบบของรับบริการด้าน ICT',
        'url' => 'http://ns2.ph.mahidol.ac.th/ict',
        'icon' => 'fa-desktop'
    ),
);

print json_encode($json, JSON_UNESCAPED_UNICODE);
?>