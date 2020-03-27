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

<?php
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';
    switch($url){
        case 'depoimentos':
            echo '<target target="depoimentos"/>';
        break;
        case 'servicos':
            echo '<target target="servicos"/>';
         break;
    }
?>
<?php //new Email(); ?>

<header>
    <div class="center">
    <div class="logo left"><a href="">logomarca</a></div><!--logo-->
    <nav class="desktop right">
    <ul>
        <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
        <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
        <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
        <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
    </ul>
    </nav>
    <nav class="mobile right">
        <div class="botao-menu-mobile"><i class="fas fa-bars"></i></div>
    <ul>
        <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
        <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
        <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
        <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
    </ul>
    </nav>
    <div class="clear"></div>
</div><!--center-->
</header>
<?php
        //$url = isset($_GET['url']) ? $_GET['url'] : 'home';

        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }
        else{
            if($url != 'depoimentos' && $url != 'servicos'){
                $pagina404 = true;
            include('pages/404.php');
        }else{
            include('pages/home.php');
        }
    }
?>

<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"' ?>>
        <div class="center">
            <p>Fernando Oliveira - Todos os direitos reservados®</p>
        </div><!--center-->
</footer>
<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
<?php 
    if($url == 'home' || ''){
        ?>
<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>        
<?php } ?>
<?php 
    if($url == 'contato'){
        ?>
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
  <?php } ?>
</body>
</html>