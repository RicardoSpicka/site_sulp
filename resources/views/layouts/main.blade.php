<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.png">
        <script src="https://kit.fontawesome.com/0362170bf2.js" crossorigin="anonymous"></script>
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        <!-- Fontes do Google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato" rel="stylesheet">

        <!-- Link para CSS -->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/bootstrap.js"></script>

        <title>@yield('title')</title>

    </head>
    <body>

        @yield('content')

        <footer>
            <div class="collumns">
                <div class="collumn logos">
                    <img id="sulp-logo" src="./image/logotipo-sulplast-rodape.png" alt="logotipo-sulplast-rodape">
                    <img id="duns" src="./image/duns.png" alt="duns">
                </div>
                <div class="collumn">
                    <h3>Empresa</h3>
                    <ul>
                        <li>Quem somos</li>
                        <li>Missão e visão</li>
                        <li>Certificações e prêmios</li>
                        <li>Política de ética empresarial e sustentabilidade</li>
                        <li>Notícias</li>
                    </ul>
                </div>
                <div class="collumn">
                    <h3>Tecnologias e processos</h3>
                    <ul>
                        <li>Termoplástico</li>
                        <li>Fibra de vidro</li>
                        <li>Pintura</li>
                        <li>Desenvolvimento de produtos</li>
                    </ul>
                </div>
                <div class="collumn">
                    <h3>Meio ambiente</h3>
                    <ul>
                        <li>A Sulplast e o meio ambiente</li>
                        <li>Ciclo de vida do produto</li>
                        <li>Fornecedores e meio ambiente</li>
                    </ul>
                </div>
                <div class="collumn">
                    <h3>Fale conosco</h3>
                    <ul>
                        <li>Fale conosco</li>
                        <li>Localização</li>
                        <li>Trabalhe conosco</li>
                    </ul>
                </div>
            </div>
            <p>
            2023 - <span>Sulplast</span>, todos os direitos reservados. As imagens apresentadas neste website são meramente ilustrativas. <br><span>Sulplast - Fibra de vidro e termoplástico LTDA</span>. Avenida Sulplast, 1969 - Distrito Industrial - Rio Claro/SP - Brasil. <span><br>Crédito das imagens</span>. Desenvolvido por <span>Ricardo Spicka</span>.
            </p>
        </footer>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
    </body>
</html>
