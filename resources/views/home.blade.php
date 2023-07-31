@extends('layouts.main')

@section('title', 'Sulplast')

@section('content')

<section class='header bkg-color'>
    <div>
        <img src="/image/logotipo-sulplast.png" alt="logotipo-sulplast">
    </div>

        <ul>
            <li><img src="./image/phone.png" alt="">Tel.: +55 (19) <strong>3535-6550</strong></li>
            <li><img src="./image/email.png" alt="">E-mail: <strong>sulplast@sulplast.com.br</strong></li>
            <li><img src="./image/locate.png" alt="">Av. Sulplast, 1969 - Distrito Industrial - Rio Claro/SP - Brasil - 13505-680</li>
        </ul>
</section>
<navbar class="navBar">
    <ul>
        <li>A empresa</li>
        <li>Certificações e prêmios</li>
        <li>Tecnologias e processos</li>
        <li>Meio ambiente</li>
        <li>Canais de comunicação</li>
        <li>Notícias</li>
    </ul>
</navbar>

<slider>
    <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2000">
        <img src="./image/40anos.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
        <img src="./image/fibra.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
        <img src="./image/pintura.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
        <img src="./image/termo.png" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</slider>
<div class="cards">
    <card class="info bkg-color">
        <div class="info-left">
            <h1>Sulplast</h1>
            <p>Há mais de 40 anos no mercado, a Sulplast é uma empresa especializada no desenvolvimento e fabricação de peças técnicas em termoplástico e fibra de vidro. Capaz de atender aos mais rigorosos padrões de qualidade e segurança, a Sulplast possui expertise nos processos de Vacuum Forming, Rotomoldagem, Injeção, RTM Light, RTM Skin, Hand Lay Up e Pintura Classe A.</p>
            <div id="btn-selos">
                <div id="selos">
                    <img src="./image/q1.png" alt="q1">
                    <img src="./image/selo-vda-63.png" alt="selo-vda-63">
                    <img src="./image/selo-iso9001.png" alt="selo-iso9001">
                    <img src="./image/selo-iso14001.png" alt="selo-iso14001">
                    <img src="./image/selo-iatf16949.png" alt="selo-iatf16949">
                </div>
            <button>Sobre a Sulplast</button>
            </div>
        </div>
        <div class="info-right">
            <img src="./image/sulplast-circulo.png" alt="sulplast-circulo.png">
        </div>
    </card>
    <card class="card">
        <div class="side-text">
            <h1>Automotivo</h1>
            <p>Com forte atuação neste setor, especialmente no segmento de caminhões e veículos especiais, as peças automotivas <strong>Sulplast</strong> possuem elevado desempenho e atendem as exigências das principais montadoras do mundo.</p>
        </div>
        <div class="side-image">
            <img src="./image/setor-automotivo-3.jpg" alt="setor-automotivo-3">
        </div>
    </card>
    <card class="card bkg-color">
        <div class="side-image">
            <img src="./image/setor-agricola.jpg" alt="setor-agricola">
        </div>
        <div class="side-text">
            <h1>Agrícola</h1>
            <p>Fornecedora de soluções plásticas para os principais fabricantes de máquinas e implementos agrícolas presentes no mercado, a <strong>Sulplast</strong> contribui para a expansão do agronegócio e aumento da produção de alimentos ao redor do planeta.</p>
        </div>
    </card>
    <card class="card">
        <div class="side-text">
            <h1>Construção e Mineração</h1>
            <p>A <strong>Sulplast</strong> também fornece componentes de alta qualidade para os principais fabricantes de máquinas e implementos para construção civil e mineração, contribuindo em obras de infraestrutura e na extração de recursos naturais.</p>
        </div>
        <div class="side-image">
            <img src="./image/setor-civil.jpg" alt="setor-civil">
        </div>
    </card>
    <card class="card bkg-color">
        <div class="side-image">
            <img id="div-set-eco" src="./image/diversos-setores-da-economia.jpg" alt="diversos-setores-da-economia">
        </div>
        <div class="side-text">
            <h1>Diversos Setores da Economia</h1>
            <p>A estrutura e o conhecimento técnico da <strong>Sulplast</strong> tornam a empresa capaz de desenvolver soluções plásticas eficientes para todos os setores da economia, com a excelência que destaca nossos produtos e processos.</p>
        </div>
    </card>
    <card class="card">
        <div class="side-text">
            <h1>Meio ambiente</h1>
            <p>A <strong>Sulplast</strong> assume o compromisso de construir um mundo mais sustentável. Certificado pela norma <strong>ISO 14001</strong>, nosso <strong>Sistema de Gestão Ambiental</strong> é rigorosamente aplicado em todas as etapas produtivas da empresa.</p>
        </div>
        <div class="side-image premios-certif">
            <ul class="premios-certif-list">
                <li><img src="./image/certificate.png" alt="">Certificações</li>
                <li><img src="./image/trofeus.png" alt="">Prêmios</li>
            </ul>
            <p>Sempre em busca do mais alto nível de qualidade para seus produtos e processos, a Sulplast conquistou e mantém renomadas certificações nacionais e internacionais.</p>

            <a href="">Nossas certificações</a>
        </div>
    </card>
</div>
