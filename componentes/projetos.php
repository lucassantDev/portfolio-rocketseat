<?php

    $info_card = [
        ['titulo' => 'Travelgram', 'img'=> './img/image.png', 'descricao' => 'Rede social onde as pessoas mostram os registros de suas viagens pelo mundo'],
        ['titulo' => 'Página de receita', 'img'=> './img/image-1.png', 'descricao' => 'Página com o passo a passo de uma receita para cupcakes'],
        ['titulo' => 'Tech News', 'img'=> './img/image-2.png', 'descricao' => 'Homepage de um portal de notícias sobre a área de tecnologia'],
        ['titulo' => 'Refund', 'img'=> 'img/Thumbnail_Project-04.png', 'descricao' => 'Um sistema para pedido e acompanhamento de reembolso '],
        ['titulo' => 'Página de turismo', 'img'=> 'img/Thumbnail_Project-06.png', 'descricao' => 'Página com as principais informações para quem quer viajar para Busan'],
        ['titulo' => 'Zingen', 'img'=> 'img/Thumbnail_Project-05.png', 'descricao' => 'Landing Page completa e responsiva de um aplicativo de Karaokê'],
    ];

?>

<section class="bg-[url(./img/Background_Intro.png)] bg-cover bg-center bg-mist-900 h-screen py-24 flex flex-col items-center justify-center gap-16">
    <div class="w-full text-center">
        <p class="text-red-400 font-semibold text-2xl">Meu trabalho</p>
        <h2 class="font-bold text-3xl text-gray-100">Veja os projetos em destaque!</h2>
    </div>

    <div class="w-full h-1/2 grid grid-cols-2 gap-4 items-center justify-items-center">

        <?php foreach($info_card as $card): ?>
            <div class="w-2/3 h-54 bg-gray-800 flex justify-center rounded-xl scale-95">
                <img src=<?=$card['img'] ?> class="scale-85 rounded-xl" alt="">

                <div class=" w-full flex flex-col items-left justify-center px-4">
                    <div>
                        <h2 class="font-bold text-gray-200 text-lg"><?=$card['titulo'] ?></h2>
                        <p class="text-gray-400"><?=$card['descricao']?></p>
                    </div>
                    <div class="w-full h-24 flex items-center justify-start gap-2">
                        <p class="bg-purple-500 p-2 rounded-xl font-semibold">PHP</p>
                        <p class="bg-blue-500 p-2 rounded-xl font-semibold">CSS</p>
                        <p class="bg-red-500 p-2 rounded-xl font-semibold">HTML</p>
                        <p class="bg-yellow-500 p-2 rounded-xl font-semibold">Javascript</p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
