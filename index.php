<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/all.min.css" >
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/style.css">
    <link rel="canonical" href="#" />
    <meta name="description" content="Site desenvolvido para Portfólio Fernando Oliveira, Projeto baseado nas aulas do curso Danki Code, Desenvolvido com as tecnologias, php, Ajax, JQuery, MySql">
    <meta name="keywords" content="php programmer, full php developer, senior php programmer, php home office programmer, php developer, programador php freelancer, UI/UX, ux, ui, mobile, app, design, development, website, user experience, enterprise, website design, SEO, design, user interface, user experience, webdesign, ">
    <meta name="robots" content="none">
    <meta name="revisit-after" content="1 day">
    <meta name="language" content="Portuguese">
    <meta name="generator" content="N/A">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projeto PHP</title>
</head>
<body>

<header>
    <div class="center">
    <div class="logo left"><a href="">logomarca</a></div><!--logo-->
    <nav class="desktop right">
    <ul>
        <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
        <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
        <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
        <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
    </ul>
    </nav>
    <nav class="mobile right">
        <div class="botao-menu-mobile"><i class="fas fa-bars"></i></div>
    <ul>
        <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
        <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
        <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
        <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
    </ul>
    </nav>
    <div class="clear"></div>
</div><!--center-->
</header>

<section class="banner-principal">
    <div class="overlay"></div><!--overlay-->
    <div class="center">
    <form action="">
    <h2>Qual o seu melhor E-mail?</h2>
    <input type="email" name="email" required>
    <input type="submit" name="acao" value="Cadastrar!">
    </form>
</div><!--center-->
</section><!--banner-principal-->

<section class="descricao-autor">
    <div class="center">
    <h1>Portfólio Fernando Oliveira</h1>
    <div class="w50 left">
   <p>Dolore invidunt aliquyam duo consetetur et sanctus et, sanctus sit kasd et est at diam. 
    Rebum nonumy ut consetetur consetetur amet et aliquyam diam amet. Dolores magna diam magna sed,
     eirmod duo consetetur dolor sea sit. Ipsum dolore sed labore et tempor sadipscing vero eos, no 
     kasd kasd sed lorem ipsum elitr. Sed et ipsum dolor erat, ut et no at elitr eos, vero ea nonumy 
     diam clita sea et ipsum sea, diam lorem sed justo gubergren justo sed eos dolores, stet magna  
     At sea gubergren sanctus eirmod et duo tempor clita est. Et..</p>
   <p>Dolore invidunt aliquyam duo consetetur et sanctus et, sanctus sit kasd et est at diam. 
       Rebum nonumy ut consetetur consetetur amet et aliquyam diam amet. Dolores magna diam magna sed,
        eirmod duo consetetur dolor sea sit. Ipsum dolore sed labore et tempor sadipscing vero eos, no 
        kasd kasd sed lorem ipsum elitr. Sed et ipsum dolor erat, ut et no at elitr eos, vero ea nonumy 
        diam clita sea et ipsum sea, diam lorem sed justo gubergren justo sed eos dolores, stet magna  
        At sea gubergren sanctus eirmod et duo tempor clita est. Et.</p>
    </div><!--w50-->
    <div class="w50 left">
      <img class="right" src="<?php echo INCLUDE_PATH; ?>images/foto-dev.png" alt="foto-dev">
    </div><!--w50-->
    <div class="clear"></div>
</div><!--center-->
</section><!--descricao-autor-->

<section class="especialidades">
       <div class="center">
        <h2 class="title">Especialidades</h2>
        <div class="w33 left box-especialidade">
            <h3><i class="fab fa-css3-alt"></i></h3>
            <h3>CSS3</h3>
            <p>Lorem ipsum dolore sanctus sadipscing amet sanctus 
                rebum lorem vero magna. 
                Est erat elitr invidunt sea duo et vero, clita.</p>
            </div><!--box-especialidade-->
                <div class="w33 left box-especialidade">
                <h3><i class="fab fa-html5"></i></h3>
                <h3>HTML5</h3>
                <p>Lorem ipsum dolore sanctus sadipscing amet sanctus 
                    rebum lorem vero magna. 
                    Est erat elitr invidunt sea duo et vero, clita.</p>
                </div><!--box-especialidade-->
                    <div class="w33 left box-especialidade">
                    <h3><i class="fab fa-js-square"></i></h3>
                    <h3>JavaScript</h3>
                    <p>Lorem ipsum dolore sanctus sadipscing amet sanctus 
                        rebum lorem vero magna. 
                        Est erat elitr invidunt sea duo et vero, clita.</p>
            </div><!--box-especialidade-->
            <div class="clear"></div>
    </div><!--center-->
</section><!--especialidades-->

<section class="extras">
    <div class="center">
        <div class="w50 left depoimentos-container">
        <h2 class="title">Depoimentos dos nossos clientes</h2>
        <div class="depoimento-single">
            <p class="depoimento-descricao">``Erat amet ut sed et et at erat aliquyam dolor..´´</p><!--depoimento-descricao-->
            <p class="nome-autor">Lorem ipsum</p><!--nome-autor-->
        </div><!--depoimento-single-->
        <div class="depoimento-single">
            <p class="depoimento-descricao">``Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                 Laboriosam temporibus expedita porro nesciunt, necessitatibus amet totam vel, 
                aspernatur quo, aperiam molestiae beatae itaque illum dolorum minima deserunt quibusdam. Ab, nemo?´´</p><!--depoimento-descricao-->
            <p class="nome-autor">Lorem ipsum</p><!--nome-autor-->
        </div><!--depoimento-single-->
        <div class="depoimento-single">
            <p class="depoimento-descricao">``Erat amet ut sed et et at erat aliquyam dolor..´´</p><!--depoimento-descricao-->
            <p class="nome-autor">Lorem ipsum</p><!--nome-autor-->
        </div><!--depoimento-single-->
        </div><!--w50-->   
        <div class="w50 left servicos-container">
            <h2 class="title">Serviços</h2>
            <div class="servicos">
            <ul>
                <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto velit incidunt voluptate ullam commodi?
                     Et error optio molestiae nesciunt laborum? Non maxime fugit aut commodi. Esse totam illo exercitationem aliquid?
                </li>
                <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto velit incidunt voluptate ullam commodi?
                    Et error optio molestiae nesciunt laborum? Non maxime fugit aut commodi. Esse totam illo exercitationem aliquid?
               </li>
               <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto velit incidunt voluptate ullam commodi?
                Et error optio molestiae nesciunt laborum? Non maxime fugit aut commodi. Esse totam illo exercitationem aliquid?
               </li>
            </ul>
        </div><!--servicos-->
            </div><!--w50--> 
            <div class="clear"></div>
    </div><!--center-->
</section><!--extras-->
    <footer>
        <div class="center">
            <p>Fernando Oliveira - Todos os direitos reservados®</p>
        </div><!--center-->
    </footer>
<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
</body>
</html>