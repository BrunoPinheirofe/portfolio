<?php
$hero = [
    "titulo" => "Oi, meu nome Bruno!!!",
    "texto" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Iusto beatae et earum incidunt illo quaerat odio iste illum placeat inventore, temporibus asperiores
            ullam! Asperiores in quidem, corporis iusto aliquam nihil!",
            "foto_perfil"=> "./assets/img/perfil.jpg",
    "links" => [
        [
            "href" => "https://www.instagram.com/bruno_phf/",
            "icon"=> "./assets/img/instagram.png",
        ],
        [
            "href" => "https://www.linkedin.com/in/brunopinheirofe/",
            "icon"=> "./assets/img/linkedin.png",
        ],
        [
            "href" => "https://x.com/bruno_phf",
            "icon"=> "./assets/img/x.png",
        ],
        [
            "href" => "https://github.com/BrunoPinheirofe",
            "icon"=> "./assets/img/github.png",
        ]
    ],
]
?>


<section class="flex py-3">
    <div>
        <h1 class=" text-3xl text-gray-200 font-semibold mb-3"><?= $hero['titulo'] ?></h1>
        <p class=" text-xl leading-10 text-gray-200">
            <?=$hero['texto']?>
        </p>
        <div>
            <ul class="flex gap-x-3">
                <?php foreach($hero['links'] as $link): ?>
                <li>
                    <a href="<?=$link["href"]?>" target="_blank">
                        <img class="h-8 hover:animate-bounce" src="<?=$link["icon"]?>" alt="logo instagram">
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <img class="h-50 rounded-lg border-solid border-5 border-sky-800" src="<?=$hero['foto_perfil']?>" alt="foto de perfil">
</section>