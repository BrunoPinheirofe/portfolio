<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Meu Portfolio</title>
</head>

<body class="bg-slate-900 text-white">
    <?php
    include("./components/header.php");
    ?>



    <main class="mx-auto mx-2/3 max-w-screen-lg min-h-20 px-3 py-6">
        <?php
        include("./components/hero.php");
        include("./components/projetos.php");
        ?>

        

    </main>
    <footer class=" min-h-20 max-w-screen-lg mx-auto">
        <div class="border-t border-gray-600 py-3 ">

            <p > ©copyright - feito por mim mesmo :) </p>
        </div>
        <!-- rodapé -->
    </footer>

</body>

</html>