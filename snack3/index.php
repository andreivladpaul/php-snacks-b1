<?php 
// Creare un array di array. Ogni array figlio avrà come chiave...

    $blogPosts = [
        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];

    echo "<div style='font-family: sans-serif'>";
    foreach($blogPosts as $date => $element){
        echo "<hr><h2 style='color: #ff6666'><strong>Data: $date</strong></h2>";

        foreach($element as $post){
            foreach($post as $metaData => $info){
                $metaData = ucfirst($metaData);
                
                if($metaData === 'Title'){
                    echo "<h3 style='color: #660000'><strong>$metaData :</strong> $info</h3>";
                }else
                {
                   echo "<p><strong>$metaData :</strong> $info</p>";
                }
            }
        }
    }
    echo "</div>";

?>