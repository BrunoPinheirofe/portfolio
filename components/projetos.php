<?php
$projetos = [
    [
        'nome' => 'Lista de contatos',
        'data' => '2024',
        'finalizado' => true,
        'descricao' => 'projeto com o objetivo de cadastrar, visualizar e',
        'img' => './assets/img/projeto.png',
        'stack' => [
            'HTML',
            'CSS',
            'JavaScript',
            'Django'
        ]
    ],

    [
        'nome' => 'Gerenciador de estoque',
        'data' => '2025-01-03',
        'finalizado' => false,
        'descricao' => 'sistema para gerenciamento de materiais de construcao',
        'img' => '',
        'stack' => [
            'JavaScript',
            'HTML',
            'CSS',
            'PHP'
        ]

    ],

    [
        'nome' => 'Sistema de agendamento',
        'data' => '2024-12-15',
        'finalizado' => false,
        'descricao' => 'aplicativo para agendamento de consultas médicas',
        'img' => '',
        'stack' => [
            'JavaScript',
            'HTML',
            'CSS',
            'Java'
        ]
    ]

];

$colors = [
    
    'teal',
    'cyan',
    'sky',
    'blue',
    'indigo',
    'violet',
    'purple',
    'fuchsia',
    'pink',
    'rose'
];

?>


<section class="bg-slate-800 rounded-lg p-3">
    <!-- lista de projetos -->
    <h2 class="text-xl font-semibold space-y-3 px-3 mb-3">Meus projetos</h2>

    <?php foreach ($projetos as $projeto): ?>
        <div class=" flex px-3">
            <!-- Projeto -->
            <div class=" w-1/5 p-2"><img class="w-90%" src="<?= $projeto["img"] ?>" alt="foto do projeto"></div>
            <div class=" w-4/5">


                <div class="flex gap-3 space-y-3 ">
                    <h3 class="font-semibold text-2xl"> <?= $projeto['finalizado'] ? "✅" : "" ?> <?=$projeto['nome']?> <span
                            class="text-gray-400 text-sm"><?= $projeto['finalizado'] ? "(finalizado em {$projeto['data']})" : "projeto em andamento" ?></span></h3>
                    <div class="gap-3">
                        <?php foreach ($projeto['stack'] as $indice => $stack): ?>
                            <span class="bg-<?=$colors[$indice]?>-400 text-<?=$colors[$indice]?>-900 p-2 rounded-md font-semibold text-sm"><?= $stack ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <p class="leading-6 text-sm"><?= $projeto['descricao'] ?>
                <?=$projeto['descricao']?>
                </p>

            </div>
        </div>
    <?php endforeach; ?>
    <!-- projetos -->
</section>