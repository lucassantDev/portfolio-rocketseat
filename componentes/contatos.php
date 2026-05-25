<?php

    $redes = [
        ['logo' => '<i class="ph ph-linkedin-logo text-3xl" ></i>', 'rede' => 'Linkedin'],
        ['logo' => '<i class="ph ph-instagram-logo"></i>', 'rede' => 'Instagram'],
        ['logo' => '<i class="ph ph-github-logo"></i>', 'rede' => 'Github'],
        ['logo' => '<i class="ph ph-envelope-simple"></i>', 'rede' => 'E-mail'],
    ]

?>

<section class="bg-[url('./img/Background_Contacts.png')] bg-cover bg-center w-full h-screen flex-column items-center justify-center">
    <div class="w-full text-center">
        <p class="text-purple-400 font-semibold text-2xl" >Contato</p>
        <h2 class="font-bold text-3xl text-gray-100">Gostou do meu trabalho?</h2>
        <p class="text-gray-400">entre em contato ou acompanhe as minhas redes sociais!</p>
    </div>

    <?php foreach($redes as $rede): ?>
        <div class="bg-gray-800 w-1/4 py-6  flex items-center justify-between">
            <div class="flex items-center text-gray-200 mx-2">
                <?=$rede['logo']; ?>
                <p class="text-xl mx-2 font-semibold"><?php echo $rede['rede']; ?></p>
            </div>

            <i class="ph ph-arrow-up-right text-xl mx-2 text-lg text-blue-400"></i>
        </div>
    <?php endforeach; ?>

</section>