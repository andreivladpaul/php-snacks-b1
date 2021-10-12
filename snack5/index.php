<?php
//Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

    $p = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est delectus laborum perferendis cum reprehenderit facilis at repudiandae unde eligendi consequatur accusantium nulla culpa aspernatur aperiam, optio alias quam ex velit quia quibusdam! Eos odio alias minima impedit eveniet, nisi nesciunt enim perspiciatis nemo cupiditate libero est, dolores aspernatur. Reiciendis eius rerum sed. Eius minima nulla quo, voluptates dolore alias aperiam labore consequuntur. Reprehenderit unde, quas neque maiores accusamus nobis maxime quis labore libero consequatur molestias quisquam odit minus animi eius repellendus fuga hic aliquam! Expedita deleniti molestiae, inventore corrupti harum soluta? Harum ea sint tempore omnis temporibus. Iusto, itaque tempora.';

    $phrases = explode('. ', $p);

    echo "Testo: <br> $p";

    foreach($phrases as $paragraph){
        echo "<p>$paragraph</p> <hr>";
    };

    $numP = count($phrases);
    echo "Total paragraphs = $numP";

?>