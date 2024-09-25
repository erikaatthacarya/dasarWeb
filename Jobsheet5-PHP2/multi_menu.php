<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];

function tampilMenuBertingkat(array $menu){
    echo "<ul>";
    foreach ($menu as $item){
        echo "<li>{$item['nama']}";
        // Memeriksa apakah ada subMenu dan memanggil fungsi secara rekursif
        if (isset($item['subMenu'])) {
            tampilMenuBertingkat($item['subMenu']);
        }
        echo "</li>";
    }
    echo "</ul>";
}

// Memanggil fungsi untuk menampilkan menu
tampilMenuBertingkat($menu);
?>
