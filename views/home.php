<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio - Estrutura Mvc</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image-x/png" href="assets/favicon.ico"/>
    <link rel="stylesheet" href="<?=base_url?>assets/css/default.css" />
    <link rel="stylesheet" href="<?=base_url?>assets/css/style.css" />
</head>
<body>

    <?= $this->loadComponents('welcome')?>

    <section class="container">
        <img class="mvcImage" src="<?=base_url?>assets/images/diagramaMVC.png" />

        <h1 class="title">Historia do MVC?</h1>
        <p>A arquitetura MVC (Model-View-Controller) foi criada nos anos 80 na Xerox Parc, por Trygve Reenskaug, que iniciou em 1979 o que viria a ser o nascimento do padrão de projeto MVC. A implementação original foi descrita no artigo “Applications Programming in Smalltalk-80: How to use Model-View-Controller”.</p>
        
        <h1 class="title">O que é MVC</h1>
        <p>O MVC é uma sigla do termo em inglês Model (modelo) View (visão) e Controller (Controle) que facilita a troca de informações entre a interface do usuário aos dados no banco, fazendo com que as respostas sejam mais rápidas e dinâmicas. Normalmente ele é usado para o desenvolvimento de interfaces de usuário que divide uma aplicação em partes (camadas/componentes) interconectadas. Isto é feito para separar representações de informação internas dos modos como a informação é apresentada para e aceita pelo usuário,[3][4] levando ao desenvolvimento paralelo de maneira eficiente.</p>

        <h1 class="title">Por que usar MVC?</h1>
        <p>Muitos bootcamps de programação ensinam esse padrão de arquitetura de software por alguns benefícios que justificam o MVC como uma das mais escolhidas no processo de desenvolvimento. Esses benefícios são:</p>
        
        <br/><p><b>Segurança:</b> O controller funciona como uma espécie de filtro capaz de impedir que qualquer dado incorreto chegue até a camada modelo.</p>
        <br/><p><b>Organização:</b> Esse método de programação permite que um novo desenvolvedor tenha muito mais facilidade em entender o que foi construído, assim como os erros se tornam mais fácil de serem encontrados e corrigidos.</p>
        <br/><p><b>Eficiência:</b> Como a arquitetura de software é dividida em 3 componentes , sua aplicação fica muito mais leve, permitindo que vários desenvolvedores trabalhem no projeto de forma independente.</p>
        <br/><p><b>Tempo:</b> Com a dinâmica facilitada pela colaboração entre os profissionais de desenvolvimento, o projeto pode ser concluído com muito mais rapidez, tornando o projeto escalável. </p>
        <br/><p><b>Transformação:</b> As mudanças que forem necessárias também são mais fluidas, já que não será essencial trabalhar nas regras de negócio e correção de bugs.</p>

        <br/><br/><hr/><br/>
        <h3 class="creator">By <?=$data['name']?></h3>
    </section>
    
    
</body>
</html>