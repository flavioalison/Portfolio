<!--
Curso de Desenvolvimento WEB
Flavio Alison Simas Lopes
23/11/2020
-->
<?php
  include('vigia.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Flavio Alison</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container">

          <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <img src="unidentified.jpeg" width= 50px>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-light active" href="logged.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link text-light dropdown-toggle"  data-toggle="dropdown" href="#">Notícias</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Ontem</a>
                <a class="dropdown-item" href="#">Hoje</a>
                <a class="dropdown-item" href="#">Último Minuto</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="loggedAutor.php">+ Sobre mim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="loggedfotos.php">FOTOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#">Projetos ultra secretos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#">Editar perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="session_ending.php">logout</a>
            </li>
          </ul>
        </div>
      </nav>


          <div class="row">
            <div class="col-md-3 col-sm-4  bg-light text-dark">
               <h2>Últimas pesquisas</h2>
                  <img class="img-fluid" src="https://source.unsplash.com/featured/?{Fractal},{Tecnologia}" alt="Fractal" > 
               <p>
                  Minhas ultimas pesquisas tem sido na geometria de fractal, em busca de designs fratais para construção de elementos tecnologicos mais aperfeiçoados e também na elaboração de modelos na area de ensino e aprendizagem de física que envolvam conceitos de circuitos elétricos. Basicamente os fractais podem ser correlacionados aos sistemas elétricos de maneira a interpretar sistemas complexos de eletricidade e favorecer o aprendizado e a construção de projetos que envolvam esses tipos de sistemas. Além disso, os fractais também encontram aplicabilidade em varias areas do conhecimento e varios asssuntos podem estar ligados e fazer correlações com essa temática.
                  <a href="">Leia mais ... </a>
                </p>
            </div>
            <div class="col-md-7 col-sm-8">
              <h2>Nossa equipe:</h2>
              <br>

              <table class="tg">
          <thead>
            <tr>
          <th class="tg-0lax"> <img src="minhafoto7.jpg" width=100%> </th>
              <th class="tg-0lax">
                <h2>Flavio Alison Simas Lopes</h2>
                <p>Licenciado em matemática pelo Instituto Federal de Educação, Ciência e Tecnologia do Amazonas (IFAM). Estudante do Programa de Pós-Graduação em Ensino de Ciências e Matemática pela Universidade Federal do Amazonas(UFAM). Estudante de Engenharia de Controle e Automação do IFAM-CMDI</p>
                <hr>
                <a href="http://lattes.cnpq.br/9151192287069279"> CURRÍCULO LATTES </a>
                <hr>
              </th>
            </tr>
          </thead>
          <thead>
            <tr>
          <th class="tg-0lax"> <img src="unidentified.jpeg" width=100%> </th>
              <th class="tg-0lax">
                <h2>Futuros colaboradores</h2>
                <p>Caso queira colaborar com o site, acesse e fazer parte da nossa equipe acesse o link abaixo e faça seu cadastro</p>
                <hr>
                <a href="#"> CADASTRO </a>
                <hr>

              </th>
            </tr>
          </thead>
          <thead>
            <tr>
          <th class="tg-0lax"> <img src="unidentified.jpeg" width=100%> </th>
              <th class="tg-0lax">
                <h2>Futuros colaboradores</h2>
                <p>Caso queira colaborar com o site, acesse e fazer parte da nossa equipe acesse o link abaixo e faça seu cadastro</p>
                <hr>
                <a href="#"> CADASTRO </a>
                <hr>

              </th>
            </tr>
          </thead>
          <thead>
            <tr>
          <th class="tg-0lax"> <img src="unidentified.jpeg" width=100%> </th>
              <th class="tg-0lax">
                <h2>Futuros colaboradores</h2>
                <p>Caso queira colaborar com o site, acesse e fazer parte da nossa equipe acesse o link abaixo e faça seu cadastro</p>
                <hr>
                <a href="#"> CADASTRO </a>
                <hr>

              </th>
            </tr>
          </thead>
          </table>

            </div>
            <div class="col-md-2 bg-light text-muted" >
                <div class="noticia">
                <h2>Rapidinha</h2>
                <hr>
                <p>
                  Ultima semana antes da mundança para a casa nova, talvez eu não consiga assistir a aula de sabado do curso de Desenvolvimento WEB, pq não sei se os caras da internet vão conseguir instalar antes o roteador
                  <a href="">Leia mais ... </a>
                </p>
              </div> <!-- /noticia -->
              <div class="noticia">
                <h2>Rapidinhas</h2>
                <hr>
                <p>
                  Tentando terminar essa atividade pra poder entregar ao professor do curso de Desenvolvimento WEB... Ufa quase acabando rsrs
                  <a href="">Leia mais ... </a>
                </p>
              </div> <!-- /noticia -->
              <div class="noticia">
                <h2>Rapidinhas</h2>
                <hr>
                <p>
                  Prova de calculo realizada com sucesso! O assunto era facil, porem com calculos trabalhosos e demorados, faltando um 4 minutos para terminar a prova eu a entreguei mesmo sabendo que faltava fazer uma questão. mas muito provavelmente não iria conseguir fazer ela a tempo. Acesse "leia mais" e veja a questão final, tente fazer. Você acha que eu deveria ter tentado fazê-la? Deixe seu comentário.
                  <a href="">Leia mais ... </a>
                </p>
              </div> <!-- /noticia -->
              <div class="noticia">
                <h2>Rapidinhas</h2>
                <hr>
                <p>
                  Terminando o mês de Outubro. Trabalhos entregues e tudo atualizado. Seguimos para o penultimo mês do ano e espero conseguir manter tudo atualizado até dezembro, não quero ter que trabalhar no natal (T_T)
                  <a href="">Leia mais ... </a>
                </p>
              </div> <!-- /noticia -->
              <div class="noticia">
                <h2>Rapidinhas</h2>
                <hr>
                <p>
                  Chateado por não ter recebido presente de dia das crianças. É chato ser adulto.
                  <a href="">Leia mais ... </a>
                </p>
              </div> <!-- /noticia -->
            </div>
          </div>
    </div>
          </body>
          </html>