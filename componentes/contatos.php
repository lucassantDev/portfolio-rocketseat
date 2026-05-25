<?php

    $redes = [
        ['logo' => '<i class="ph ph-linkedin-logo text-3xl" ></i>', 'rede' => 'Linkedin', 'seta' => '<i class="ph ph-arrow-up-right text-xl mx-2 text-lg text-blue-400"></i>'],
        ['logo' => '<i class="ph ph-instagram-logo text-3xl"></i>', 'rede' => 'Instagram', 'seta' => '<i class="ph ph-arrow-up-right text-xl mx-2 text-lg text-blue-400"></i>'],
        ['logo' => '<i class="ph ph-github-logo text-3xl"></i>', 'rede' => 'Github', 'seta' => '<i class="ph ph-arrow-up-right text-xl mx-2 text-lg text-blue-400"></i>'],
        ['logo' => '<i class="ph ph-envelope-simple text-3xl"></i>', 'rede' => 'E-mail', 'seta' => '<i class="ph ph-arrow-up-right text-xl mx-2 text-lg text-blue-400"></i>'],
    ]

?>

<section class="bg-[url('./img/Background_Contacts.png')] bg-cover bg-center w-full h-screen flex flex-col items-center justify-center py-12">

    
    <div class="w-full text-center">
        <p class="text-purple-400 font-semibold text-2xl" >Contato</p>
        <h2 class="font-bold text-3xl text-gray-100">Gostou do meu trabalho?</h2>
        <p class="text-gray-400">entre em contato ou acompanhe as minhas redes sociais!</p>
    </div>

    <div class="my-6 w-full h-1/2 flex flex-col items-center justify-between ">

        <?php foreach($redes as $rede): ?>

            <div class="cursor-pointer bg-gray-800 w-1/4 py-6 flex items-center justify-between border-2 border-transparent hover:border-blue-400 transition-colors duration-200 ease-in-out">
                <div class="flex items-center text-gray-200 mx-2">
                    <?=$rede['logo'] ?>
                    <p class="text-xl mx-2 font-semibold"><?=$rede['rede'] ?></p>
                </div>

                <?=$rede['seta'] ?>
            </div>

        <?php endforeach; ?>
        

</section>