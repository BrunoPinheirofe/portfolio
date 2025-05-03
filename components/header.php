<?php
$links = [
    ["href"=>"#projetos","texto"=> "Projetos"],
    ["href"=>"https://www.linkedin.com/in/brunopinheirofe","texto"=> "LinkedIn"],
    ["href"=>"https://github.com/BrunoPinheirofe","texto"=> "GitHub"],

]

?>

<header class=" mx-auto max-w-screen-lg items-center justify-between px-3 py-3 flex ">
        <div>
            <h1 class="font-bold text-cyan-600 text-xl">🐒 Meu portfolio...</h1>
        </div>
        <div class="font-medium text-gray-200">
            <ul class="flex gap-x-3">
                <?php foreach($links as $link):?>
                    <li><a href="<?=$link['href']?>" target="_blank" rel="noopener noreferrer"><?=$link['texto']?></a></li>
                <?php endforeach;?>
            </ul>
        </div>
    </header>