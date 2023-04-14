<?php
    $menu = [
        [
            "label" => "login",
            "link" => "index.php"
        ],
        [
            "label" => "page1",
            "link" => "page1.php"
        ]
    ];


foreach($menu as $item){
    $label=$item["label"];
    $link=$item["link"];
    echo "<a href='$link'>$label</a>";
}