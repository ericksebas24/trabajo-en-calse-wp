<?php get_header(); ?>

<main class="h-full">
    <div class="flex w-full justify-center items-center space-x-10 my-20">
        <div class="w-1/12 rounded-full hover:shadow-2xl transition">
            <img
                class="rounded-full w-full"
                src="<?php echo get_template_directory_uri() ?>/assets/img/erick.jpg" 
                alt="imagen de perfil de Erick"
            >
        </div>
        <div class="w-6/12">
           <p class="select-none"> Erick Sebastian Fernandez <h1> Nací en Quito/ Ecuador el 13 de Enero del 2000 </p> Me gusta mucho la tecnología, y sobre todo la programación.
    en mis tiempoos libres me gusta salir a caminar y conocer lugares nuevos.
        </div>
    </div>
    <div class="flex h-85 space-x-10 mt-10 w-8/12 mx-auto">
        <div class="w-full h-full border-2 hover:shadow-lg transition rounded-b-lg">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/valorant.jpg" alt="valorant.jpg">
            <p class="h-1/5 text-center leading-9 select-none">Valorant</p>
        </div>
        
        
    <div class="flex w-full justify-center mt-10 text-justify">
        <p class="w-8/12 select-none">
        En mis ratos libres me gusta jugar juegos que son competitivos, como valorant. Con mis amigos hacemos directo cada que tenemos tiempo 
        </p>
    </div>
    

</main>

<?php get_footer(); ?>