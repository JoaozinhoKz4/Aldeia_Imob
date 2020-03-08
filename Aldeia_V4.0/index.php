<!DOCTYPE html>
<html lang="pt-br">

<head>

    <!-- Meta -->

    <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Title -->
    <title>Aldeia Imobiliária</title>

    <!-- Favicons -->


    <!-- CSS Plugins -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/plugins/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" href="assets/plugins/animate.css/animate.min.css" />
    <link rel="stylesheet" href="assets/plugins/animsition/dist/css/animsition.min.css" />
    <link rel="stylesheet" href="assets/plugins/photoswipe/dist/photoswipe.css" />
    <link rel="stylesheet" href="assets/plugins/photoswipe/dist/default-skin/default-skin.css" />
    <link rel="stylesheet" href="assets/css/index.css" />
    <!-- CSS Icons -->
    <link rel="stylesheet" href="assets/css/themify-icons.css" />
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css" />

    <!-- CSS Theme -->
    <link id="theme" rel="stylesheet" href="assets/css/themes/theme-blue.css" />

</head>

<body class="header-horizontal dark-overlay">

    <!-- Body Wrapper -->
    <div id="body-wrapper" class="animsition" data-animsition-overlay="true">

        <!-- Header -->
        <header id="header" class="header-horizontal dark">

            <!-- Module - Navigation -->
        <nav id="navigation-main" class="module module-nav row">
            <img src="assets/img/logo-final3.png" alt="">
            <ul class="nav nav-main-horizontal pr-4">
                <li><a href="#home">Início</a></li>
                <li><a href="#flats">Comprar</a></li>
                <li><a href="#gallery">Galeria</a></li>
                <li><a href="#flats">Alugar</a></li>
                <li><a href="#who-we-are">Quem somos</a></li>
                <li><a href="#contact">Contato</a></li>
                <li><a href="#flats">Comprar</a></li>
                <li><a href="#flats">Vender</a></li> 
                <li><a href="area-do-usuario/login/">Área do usuário</a></li>
            </ul>
            <div class="selector"></div>
        </nav>
        </header>
        <!-- Header / End -->

        <!-- Content -->
        <div id="content">

            <!-- Section / Home -->
            <section id="home" class="section h-fullheight bg-dark cover dark">

                <!-- Slider Main -->
                <div class="slider-main slider-kenburns inner-controls">
                    <!-- Slide -->
                    <div class="slide">
                        <div class="slide-bg bg-image-holder bg-image-fixed">
                            <img src="assets/img/photos/slider01.jpg" alt="">
                        </div>
                        <div class="slide-content container text-center">
                            <a class="btn btn-link btn-init" href="">Quero comprar</a>
                        </div>
                    </div>
                    <!-- Slide -->
                    <div class="slide">
                        <div class="slide-bg bg-image-holder bg-image-fixed">
                            <img src="assets/img/photos/slider02.jpg" alt="">
                        </div>
                        <div class="slide-content container text-center">
                            <a class="btn btn-link btn-init" href="">Quero vender</a>
                        </div>
                    </div>
                    <!-- Slide -->
                    <div class="slide">
                        <div class="slide-bg bg-image-holder bg-image-fixed">
                            <img src="assets/img/photos/slider03.jpg" alt="">
                        </div>
                        <div class="slide-content container text-center">
                            <a class="btn btn-link btn-init" href="">Quero alugar um imóvel</a>
                        </div>
                    </div>
                    <!-- Slide -->
                    <div class="slide">
                        <div class="slide-bg bg-image-holder bg-image-fixed">
                            <img src="assets/img/photos/slider04.jpg" alt="">
                        </div>
                        <div class="slide-content container text-center">
                            <a class="btn btn-link btn-init" href="">Quero locar meu imóvel</a>
                        </div>
                    </div>
                </div>

                <!-- Slider Navigation -->
                <div class="slider-main-nav">
                    <div class="slide"><img src="assets/img/photos/slider01_thumbnail.jpg" alt=""></div>
                    <div class="slide"><img src="assets/img/photos/slider02_thumbnail.jpg" alt=""></div>
                    <div class="slide"><img src="assets/img/photos/slider03_thumbnail.jpg" alt=""></div>
                    <div class="slide"><img src="assets/img/photos/slider04_thumbnail.jpg" alt=""></div>
                </div>

                <!-- Gallery Toggle -->
                <a href="#" class="fullscreen-toggle" data-items="gallerySliderItems" data-toggle="gallery">
                    <span class="arrow-tl"></span>
                    <span class="arrow-tr"></span>
                    <span class="arrow-br"></span>
                    <span class="arrow-bl"></span>
                </a>

            </section>

            <!-- Section / Flats -->
            <section id="flats" class="section bg-light pt-0 pb-5">

                <!-- Objects - Search -->
                <div class="objects-search bg-dark dark">
                    <div class="bg-image-holder bg-image-fixed zooming"><img src="assets/img/photos/search-bg.jpg" alt=""></div>
                    <div class="container">
                        <h1 class="mb-1">Encontre o apartamento perfeito para você!</h1>
                        <hr>
                        <form action="./">
                            <div class="row align-items-end">
                                <div class="col-lg-3 col-md-4 form-group">
                                    <h5 class="mb-3"><i class="fa fa-arrows-alt text-muted mr-2"></i>Área:</h5>
                                    <div class="form-inline">
                                        <input type="text" class="form-control form-control-short" placeholder="de" name="area-menor">
                                        <label class="ml-2 mr-2">-</label>
                                        <input type="text" class="form-control form-control-short" placeholder="a" name="area-maior">
                                        <label class="ml-2">m<sup>2</sup></label>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 form-group">
                                    <h5 class="mb-3"><i class="fa fa-random text-muted mr-2"></i>Localização: </h5>
                                    <div class="">
                                        <select class="custom-select ml-2 mr-2 form-control" name="localizacao">
                                            <option value="">Selecione o Bairro desejado</option>
                                            <option value="LAGO SUL">Lago Sul</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 form-group">
                                    <h5 class="mb-3"><i class="fa fa-bed text-muted mr-2"></i>Número de quartos:</h5>
                                    <div class="form-inline">
                                        <input type="text" class="form-control form-control-short" placeholder="de" name="quarto-menor">
                                        <label class="ml-2 mr-2">-</label>
                                        <input type="text" class="form-control form-control-short" placeholder="a" name="quarto-maior">
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-end">
                                <div class="col-lg-3 col-md-4 form-group">
                                    <label for="valor_imovel">
                                        <h5 class="mb-3"><i class="fa fa-dollar text-muted mr-2"></i>Valor</h5>
                                    </label>
                                    <div class="form-inline">
                                        <!-- <input type="range" class="custom-range" id="valor_imovel" min="50000" max="30000000" step="100000"> -->
                                        <input type="text" class="form-control form-control-short" placeholder="de" name="valor-menor">
                                        <label class="ml-2 mr-2">-</label>
                                        <input type="text" class="form-control form-control-short" placeholder="a" name="valor-maior">
                                    </div>
                                </div>
                                <input type="hidden" value="1" name="pesquisa">
                                <div class="col-lg-3 col-md-4 form-group">
                                    <label for="valor_imovel">
                                        <h5 class="mb-3"><i class="fa fa-search text-muted mr-2"></i>Tipo de Imóvel:</h5>
                                    </label>
                                    <div class="">
                                        <select class="custom-select ml-2 mr-2 form-control" name="tipo-imovel">
                                            <option value="">Selecione o Tipo de Imóvel</option>
                                            <option value="CASA">Casa</option>
                                            <option value="APARTAMENTO">Apartamento</option>
                                            <option value="SALA">Sala</option>
                                            <option value="GARAGEM">Garagem</option>
                                            <option value="CHALE">Chalé</option>
                                            <option value="LOJA">Loja</option>
                                            <option value="FAZENDA">Fazenda</option>
                                            <option value="PREDIO">Prédio</option>
                                            <option value="TERRENO">Terreno</option>
                                            <option value="GALPAO">Galpão</option>
                                            <option value="CHACARA">Chácara</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 form-group">
                                    <label for="modalidade">
                                        <h5 class="mb-3"><i class="fa fa-home text-muted mr-2"></i>Você quer?</h5>
                                    </label>
                                    <div class="">
                                        <select class="custom-select ml-2 mr-2 form-control" name="categoria">
                                            <option value="">Deseja Comprar ou Alugar?</option>
                                            <option value="Venda">Comprar</option>
                                            <option value="Locação">Alugar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 form-group">
                                    <button class="btn btn-secondary btn-block" type="submit"><i class="fa fa-search mr-2"></i>Procurar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Objects -->
                <div class="objects-container container">
                    <div class="text-right">
                        <!-- Objects - Change Display -->
                        <ul class="nav nav-view" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#grid_view"><i class="fa fa-th"></i></a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#list_view"><i class="fa fa-th-list"></i></a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="grid_view" class="tab-pane fade show active" role="tabpanel">
                            <!-- Objects - Grid-->
                            <div class="objects-grid gutters-sm row">

                                <?php
                                 
                                 function money_format($format, $number)
                                 {
                                     $regex  = '/%((?:[\^!\-]|\+|\(|\=.)*)([0-9]+)?'.
                                               '(?:#([0-9]+))?(?:\.([0-9]+))?([in%])/';
                                     if (setlocale(LC_MONETARY, 0) == 'C') {
                                         setlocale(LC_MONETARY, '');
                                     }
                                     $locale = localeconv();
                                     preg_match_all($regex, $format, $matches, PREG_SET_ORDER);
                                     foreach ($matches as $fmatch) {
                                         $value = floatval($number);
                                         $flags = array(
                                             'fillchar'  => preg_match('/\=(.)/', $fmatch[1], $match) ?
                                                            $match[1] : ' ',
                                             'nogroup'   => preg_match('/\^/', $fmatch[1]) > 0,
                                             'usesignal' => preg_match('/\+|\(/', $fmatch[1], $match) ?
                                                            $match[0] : '+',
                                             'nosimbol'  => preg_match('/\!/', $fmatch[1]) > 0,
                                             'isleft'    => preg_match('/\-/', $fmatch[1]) > 0
                                         );
                                         $width      = trim($fmatch[2]) ? (int)$fmatch[2] : 0;
                                         $left       = trim($fmatch[3]) ? (int)$fmatch[3] : 0;
                                         $right      = trim($fmatch[4]) ? (int)$fmatch[4] : $locale['int_frac_digits'];
                                         $conversion = $fmatch[5];
                                 
                                         $positive = true;
                                         if ($value < 0) {
                                             $positive = false;
                                             $value  *= -1;
                                         }
                                         $letter = $positive ? 'p' : 'n';
                                 
                                         $prefix = $suffix = $cprefix = $csuffix = $signal = '';
                                 
                                         $signal = $positive ? $locale['positive_sign'] : $locale['negative_sign'];
                                         switch (true) {
                                             case $locale["{$letter}_sign_posn"] == 1 && $flags['usesignal'] == '+':
                                                 $prefix = $signal;
                                                 break;
                                             case $locale["{$letter}_sign_posn"] == 2 && $flags['usesignal'] == '+':
                                                 $suffix = $signal;
                                                 break;
                                             case $locale["{$letter}_sign_posn"] == 3 && $flags['usesignal'] == '+':
                                                 $cprefix = $signal;
                                                 break;
                                             case $locale["{$letter}_sign_posn"] == 4 && $flags['usesignal'] == '+':
                                                 $csuffix = $signal;
                                                 break;
                                             case $flags['usesignal'] == '(':
                                             case $locale["{$letter}_sign_posn"] == 0:
                                                 $prefix = '(';
                                                 $suffix = ')';
                                                 break;
                                         }
                                         if (!$flags['nosimbol']) {
                                             $currency = $cprefix .
                                                         ($conversion == 'i' ? $locale['int_curr_symbol'] : $locale['currency_symbol']) .
                                                         $csuffix;
                                         } else {
                                             $currency = '';
                                         }
                                         $space  = $locale["{$letter}_sep_by_space"] ? ' ' : '';
                                 
                                         $value = number_format($value, $right, $locale['mon_decimal_point'],
                                                  $flags['nogroup'] ? '' : $locale['mon_thousands_sep']);
                                         $value = @explode($locale['mon_decimal_point'], $value);
                                 
                                         $n = strlen($prefix) + strlen($currency) + strlen($value[0]);
                                         if ($left > 0 && $left > $n) {
                                             $value[0] = str_repeat($flags['fillchar'], $left - $n) . $value[0];
                                         }
                                         $value = implode($locale['mon_decimal_point'], $value);
                                         if ($locale["{$letter}_cs_precedes"]) {
                                             $value = $prefix . $currency . $space . $value . $suffix;
                                         } else {
                                             $value = $prefix . $value . $space . $currency . $suffix;
                                         }
                                         if ($width > 0) {
                                             $value = str_pad($value, $width, $flags['fillchar'], $flags['isleft'] ?
                                                      STR_PAD_RIGHT : STR_PAD_LEFT);
                                         }
                                 
                                         $format = str_replace($fmatch[0], $value, $format);
                                     }
                                     return $format;
                                 } 
                                //// Validação de qual o filtro estabelecido
                                if (isset($_GET['area-menor'])) {
                                    $area_menor = $_GET['area-menor'];
                                }
                                if (isset($_GET['area-maior'])) {
                                    $area_maior = $_GET['area-maior'];
                                }
                                if (isset($_GET['localizacao'])) {
                                    $localizacao = $_GET['localizacao'];
                                }
                                if (isset($_GET['quarto-menor'])) {
                                    $quarto_menor = $_GET['quarto-menor'];
                                }
                                if (isset($_GET['quarto-maior'])) {
                                    $quarto_maior = $_GET['quarto-maior'];
                                }
                                if (isset($_GET['valor-menor'])) {
                                    $valor_menor = $_GET['valor-menor'];
                                }
                                if (isset($_GET['valor-maior'])) {
                                    $valor_maior = $_GET['valor-maior'];
                                }
                                if (isset($_GET['tipo-imovel'])) {
                                    $tipo_imovel = $_GET['tipo-imovel'];
                                }
                                if (isset($_GET['categoria'])) {
                                    $categoria = $_GET['categoria'];
                                }

                                $link = "http://integracaounion.com.br/union/13448/13448.xml";
                                $xml = simplexml_load_file($link)->Imoveis;
                                $contador = 0;
                                foreach ($xml->Imovel as $item) {

                                    if (utf8_decode($item->Titulo) == "") {
                                        $titulo = utf8_decode($item->Bairro);
                                    } else {
                                        $titulo = utf8_decode($item->Titulo);
                                    }

                                    $tipo = utf8_decode($item->Tipo);
                                    $area = utf8_decode($item->Areatotalsemdeciamal);
                                    $quartos = utf8_decode($item->Dormitorios);
                                    $foto = utf8_decode($item->Fotos->Foto->URL);

                                    if (utf8_decode($item->Valorvenda) != "") {
                                        $valor = utf8_decode($item->Valorvenda);
                                    }
                                    if (utf8_decode($item->Valorlocacao) != "") {
                                        $valor = utf8_decode($item->Valorlocacao);
                                    }
                                    if (utf8_decode($item->Valortemporada) != "") {
                                        $valor = utf8_decode($item->Valortemporada);
                                    }
                                    if (utf8_decode($item->Valorvenda) != "" && utf8_decode($item->Valorvenda) != 0.00) {
                                        $categoria_item = "Venda";
                                    } else if (utf8_decode($item->Valorlocacao) != "" && utf8_decode($item->Valorlocacao) != 0.00) {
                                        $categoria_item = "Locação";
                                    } else {
                                        $categoria_item = "Indefinido";
                                    }
                                    //// DEfinição das variáveis a serem enviadas para a página de cada anúncio
                                    $fotos = array();
                                    foreach ($item->Fotos->Foto as $x) {
                                        $fotos[] = utf8_decode($x->URL);
                                    }
                                    if (utf8_decode($item->Numero) != "") {
                                        $numero = utf8_decode($item->Numero);
                                    } else {
                                        $numero = NULL;
                                    }
                                    if (utf8_decode($item->Quadra) != "") {
                                        $quadra = utf8_decode($item->Quadra);
                                    } else {
                                        $quadra = NULL;
                                    }
                                    if (utf8_decode($item->Regiao) != "") {
                                        $regiao = utf8_decode($item->Regiao);
                                    } else {
                                        $regiao = NULL;
                                    }
                                    if (utf8_decode($item->Pontoreferencia) != "") {
                                        $ponto_ref = utf8_decode($item->Pontoreferencia);
                                    } else {
                                        $ponto_ref = NULL;
                                    }
                                    if (utf8_decode($item->Areaterrenosemdeciamal) != "") {
                                        $terreno = utf8_decode($item->Areaterrenosemdeciamal);
                                    } else {
                                        $terreno = NULL;
                                    }
                                    if (utf8_decode($item->Areacosntruidasemdeciamal) != "") {
                                        $construida = utf8_decode($item->Areacosntruidasemdeciamal);
                                    } else {
                                        $construida = NULL;
                                    }
                                    if (utf8_decode($item->Areautilsemdeciamal) != "") {
                                        $util = utf8_decode($item->Areautilsemdeciamal);
                                    } else {
                                        $util = NULL;
                                    }
                                    if (utf8_decode($item->Banheiroauxiliar) != "") {
                                        $banheiro_a = utf8_decode($item->Banheiroauxiliar);
                                    } else {
                                        $banheiro_a = NULL;
                                    }
                                    if (utf8_decode($item->Banheiroempregada) != "") {
                                        $banheiro_e = utf8_decode($item->Banheiroempregada);
                                    } else {
                                        $banheiro_e = NULL;
                                    }
                                    if (utf8_decode($item->Banheiro) != "") {
                                        $banheiro1 = utf8_decode($item->Banheiro);
                                    } else {
                                        $banheiro1 = NULL;
                                    }
                                    if (utf8_decode($item->Banheiro2) != "") {
                                        $banheiro2 = utf8_decode($item->Banheiro2);
                                    } else {
                                        $banheiro2 = NULL;
                                    }
                                    if (utf8_decode($item->Dormitorios) != "") {
                                        $dormitorio = utf8_decode($item->Dormitorios);
                                    } else {
                                        $dormitorio = NULL;
                                    }
                                    if (utf8_decode($item->Valorvenda) != "") {
                                        $valor_venda = utf8_decode($item->Valorvenda);
                                    } else {
                                        $valor_venda = NULL;
                                    }
                                    if (utf8_decode($item->Valorlocacao) != "") {
                                        $valor_locacao = utf8_decode($item->Valorlocacao);
                                    } else {
                                        $valor_locacao = NULL;
                                    }
                                    if (utf8_decode($item->Valortemporada) != "") {
                                        $valor_temporada = utf8_decode($item->Valortemporada);
                                    } else {
                                        $valor_temporada = NULL;
                                    }
                                    if (utf8_decode($item->Valorcondominio) != "") {
                                        $valor_condominio = utf8_decode($item->Valorcondominio);
                                    } else {
                                        $valor_condominio = NULL;
                                    }
                                    if (utf8_decode($item->Valoriptu) != "") {
                                        $valor_iptu = utf8_decode($item->Valoriptu);
                                    } else {
                                        $valor_iptu = NULL;
                                    }

                                    //////// Filtro
                                    if (isset($_GET['pesquisa'])) {
                                        if ($_GET['area-maior'] != "") {
                                            if ($area > $area_maior) continue;
                                        }
                                        if ($_GET['area-menor'] != "") {
                                            if ($area < $area_menor) continue;
                                        }
                                        if ($_GET['quarto-maior'] != "") {
                                            if ($quartos > $quarto_maior) continue;
                                        }
                                        if ($_GET['quarto-menor'] != "") {
                                            if ($quartos < $quarto_menor) continue;
                                        }
                                        if ($_GET['valor-maior'] != "") {
                                            if ($valor > $valor_maior) continue;
                                        }
                                        if ($_GET['valor-menor'] != "") {
                                            if ($valor < $valor_menor) continue;
                                        }
                                        if ($_GET['tipo-imovel'] != "") {
                                            if ($tipo != $tipo_imovel) continue;
                                        }
                                        if ($_GET['localizacao'] != "") {
                                            if ($regiao != $localizacao) continue;
                                        }
                                        if ($_GET['categoria'] != "") {
                                            if ($categoria_item != $categoria) continue;
                                        }
                                    }
                                    echo '<div class="col-lg-3 col-6">
                                <div class="object object-vertical">
                            
                                    <form action="imovel/?pesquisa=1" method="POST">';
                                    echo '<input type="hidden" name="titulo" value="' . $titulo . '">';
                                    echo '<input type="hidden" name="fotos" value="' . implode('|', $fotos) . '">';
                                    echo '<input type="hidden" name="endereco" value="' . utf8_decode($item->Endereco) . '">';
                                    echo '<input type="hidden" name="numero" value="' . $numero . '">';
                                    echo '<input type="hidden" name="quadra" value="' . $quadra . '">';
                                    echo '<input type="hidden" name="cep" value="' . utf8_decode($item->CEP) . '">';
                                    echo '<input type="hidden" name="bairro" value="' . utf8_decode($item->Bairrocomercial) . '">';
                                    echo '<input type="hidden" name="cidade" value="' . utf8_decode($item->Cidade) . '">';
                                    echo '<input type="hidden" name="uni_fed" value="' . utf8_decode($item->UnidadeFederativa) . '">';
                                    echo '<input type="hidden" name="regiao" value="' . utf8_decode($item->Regiao) . '">';
                                    echo '<input type="hidden" name="ponto_ref" value="' . $ponto_ref . '">';
                                    echo '<input type="hidden" name="anuncio" value="' . utf8_decode($item->Anuncioparainternet) . '">';
                                    echo '<input type="hidden" name="categoria" value="' . utf8_decode($item->Categoria) . '">';
                                    echo '<input type="hidden" name="finalidade" value="' . utf8_decode($item->Finalidade) . '">';
                                    echo '<input type="hidden" name="tipo" value="' . utf8_decode($item->Tipo) . '">';
                                    echo '<input type="hidden" name="categoria_item" value="' . $categoria_item . '">';
                                    echo '<input type="hidden" name="area_total" value="' . $area . '">';
                                    echo '<input type="hidden" name="area_terreno" value="' . $terreno . '">';
                                    echo '<input type="hidden" name="area_construida" value="' . $construida . '">';
                                    echo '<input type="hidden" name="area_util" value="' . $util . '">';
                                    echo '<input type="hidden" name="banheiro_auxiliar" value="' . $banheiro_a . '">';
                                    echo '<input type="hidden" name="banheiro_empregada" value="' . $banheiro_e . '">';
                                    echo '<input type="hidden" name="banheiro1" value="' . $banheiro1 . '">';
                                    echo '<input type="hidden" name="banheiro2" value="' . $banheiro2 . '">';
                                    echo '<input type="hidden" name="dormitorio" value="' . $dormitorio . '">';
                                    echo '<input type="hidden" name="valor" value="' . $valor . '">';
                                    echo '<input type="hidden" name="venda" value="' . $valor_venda . '">';
                                    echo '<input type="hidden" name="temporada" value="' . $valor_temporada . '">';
                                    echo '<input type="hidden" name="locacao" value="' . $valor_locacao . '">';
                                    echo '<input type="hidden" name="condominio" value="' . $valor_condominio . '">';
                                    echo '<input type="hidden" name="iptu" value="' . $valor_iptu . '">';

                                    echo    '<div class="object-image">';
                                    echo            '<img src="' . $foto . '" alt="">
                                    </div>';
                                    echo            '<div class="object-content">
                                        <h5 class="object-title">' . $titulo . '</h5>
                                        <ul class="object-details list-unstyled">';
                                    echo        '<li><span class="text-muted">Tipo:</span>' . " " . $tipo . '</li>';
                                    echo        '<li><span class="text-muted">Categoria:</span>' . " " . $categoria_item . " " . '</li>';
                                    echo        '<li><span class="text-muted">Area total:</span>' . " " . $area . " " . 'm<sup>2</sup></li>';
                                    if ($quartos != "")
                                        echo        '<li><span class="text-muted">Quartos:</span>' . " " . $quartos . '</li>';
                                    echo    '        </ul>
                                        <span class="object-price">' . money_format("%.2n", $valor) . '</span>
                                        <button type="submit"  class="btn btn-primary"><span class="hidden-xs-down">Detalhes</span></button>
                                    </div>
                                    </form> 
                                </div>
                            </div>';

                                    if (isset($_GET['pesquisa'])) {
                                    } else {
                                        $contador = $contador + 1;
                                        if ($contador == 4) {
                                            break;
                                        }
                                    }
                                }
                                ?>
                            </div>
                        </div>

                        <div id="list_view" class="tab-pane fade" role="tabpanel">
                            <!-- Objects - List -->
                            <div class="objects-list">
                                <?php

                                $contador = 0;
                                foreach ($xml->Imovel as $item) {

                                    if (utf8_decode($item->Titulo) == "") {
                                        $titulo = utf8_decode($item->Bairro);
                                    } else {
                                        $titulo = utf8_decode($item->Titulo);
                                    }

                                    $tipo = utf8_decode($item->Tipo);
                                    $area = utf8_decode($item->Areatotalsemdeciamal);
                                    $quartos = utf8_decode($item->Dormitorios);
                                    $foto = utf8_decode($item->Fotos->Foto->URL);

                                    if (utf8_decode($item->Valorvenda) != "") {
                                        $valor = utf8_decode($item->Valorvenda);
                                    }
                                    if (utf8_decode($item->Valorlocacao) != "") {
                                        $valor = utf8_decode($item->Valorlocacao);
                                    }
                                    if (utf8_decode($item->Valortemporada) != "") {
                                        $valor = utf8_decode($item->Valortemporada);
                                    }
                                    if (utf8_decode($item->Valorvenda) != "" && utf8_decode($item->Valorvenda) != 0.00) {
                                        $categoria_item = "Venda";
                                    } else if (utf8_decode($item->Valorlocacao) != "" && utf8_decode($item->Valorlocacao) != 0.00) {
                                        $categoria_item = "Locação";
                                    } else {
                                        $categoria_item = "Indefinido";
                                    }
                                    //// DEfinição das variáveis a serem enviadas para a página de cada anúncio
                                    $fotos = array();
                                    foreach ($item->Fotos->Foto as $x) {
                                        $fotos[] = utf8_decode($x->URL);
                                    }
                                    if (utf8_decode($item->Numero) != "") {
                                        $numero = utf8_decode($item->Numero);
                                    } else {
                                        $numero = NULL;
                                    }
                                    if (utf8_decode($item->Quadra) != "") {
                                        $quadra = utf8_decode($item->Quadra);
                                    } else {
                                        $quadra = NULL;
                                    }
                                    if (utf8_decode($item->Regiao) != "") {
                                        $regiao = utf8_decode($item->Regiao);
                                    } else {
                                        $regiao = NULL;
                                    }
                                    if (utf8_decode($item->Pontoreferencia) != "") {
                                        $ponto_ref = utf8_decode($item->Pontoreferencia);
                                    } else {
                                        $ponto_ref = NULL;
                                    }
                                    if (utf8_decode($item->Areaterrenosemdeciamal) != "") {
                                        $terreno = utf8_decode($item->Areaterrenosemdeciamal);
                                    } else {
                                        $terreno = NULL;
                                    }
                                    if (utf8_decode($item->Areacosntruidasemdeciamal) != "") {
                                        $construida = utf8_decode($item->Areacosntruidasemdeciamal);
                                    } else {
                                        $construida = NULL;
                                    }
                                    if (utf8_decode($item->Areautilsemdeciamal) != "") {
                                        $util = utf8_decode($item->Areautilsemdeciamal);
                                    } else {
                                        $util = NULL;
                                    }
                                    if (utf8_decode($item->Banheiroauxiliar) != "") {
                                        $banheiro_a = utf8_decode($item->Banheiroauxiliar);
                                    } else {
                                        $banheiro_a = NULL;
                                    }
                                    if (utf8_decode($item->Banheiroempregada) != "") {
                                        $banheiro_e = utf8_decode($item->Banheiroempregada);
                                    } else {
                                        $banheiro_e = NULL;
                                    }
                                    if (utf8_decode($item->Banheiro) != "") {
                                        $banheiro1 = utf8_decode($item->Banheiro);
                                    } else {
                                        $banheiro1 = NULL;
                                    }
                                    if (utf8_decode($item->Banheiro2) != "") {
                                        $banheiro2 = utf8_decode($item->Banheiro2);
                                    } else {
                                        $banheiro2 = NULL;
                                    }
                                    if (utf8_decode($item->Dormitorios) != "") {
                                        $dormitorio = utf8_decode($item->Dormitorios);
                                    } else {
                                        $dormitorio = NULL;
                                    }
                                    if (utf8_decode($item->Valorvenda) != "") {
                                        $valor_venda = utf8_decode($item->Valorvenda);
                                    } else {
                                        $valor_venda = NULL;
                                    }
                                    if (utf8_decode($item->Valorlocacao) != "") {
                                        $valor_locacao = utf8_decode($item->Valorlocacao);
                                    } else {
                                        $valor_locacao = NULL;
                                    }
                                    if (utf8_decode($item->Valortemporada) != "") {
                                        $valor_temporada = utf8_decode($item->Valortemporada);
                                    } else {
                                        $valor_temporada = NULL;
                                    }
                                    if (utf8_decode($item->Valorcondominio) != "") {
                                        $valor_condominio = utf8_decode($item->Valorcondominio);
                                    } else {
                                        $valor_condominio = NULL;
                                    }
                                    if (utf8_decode($item->Valoriptu) != "") {
                                        $valor_iptu = utf8_decode($item->Valoriptu);
                                    } else {
                                        $valor_iptu = NULL;
                                    }

                                    //////// Filtro
                                    if (isset($_GET['pesquisa'])) {
                                        if ($_GET['area-maior'] != "") {
                                            if ($area > $area_maior) continue;
                                        }
                                        if ($_GET['area-menor'] != "") {
                                            if ($area < $area_menor) continue;
                                        }
                                        if ($_GET['quarto-maior'] != "") {
                                            if ($quartos > $quarto_maior) continue;
                                        }
                                        if ($_GET['quarto-menor'] != "") {
                                            if ($quartos < $quarto_menor) continue;
                                        }
                                        if ($_GET['valor-maior'] != "") {
                                            if ($valor > $valor_maior) continue;
                                        }
                                        if ($_GET['valor-menor'] != "") {
                                            if ($valor < $valor_menor) continue;
                                        }
                                        if ($_GET['tipo-imovel'] != "") {
                                            if ($tipo != $tipo_imovel) continue;
                                        }
                                        if ($_GET['localizacao'] != "") {
                                            if (utf8_decode($item->Regiao) != $localizacao) continue;
                                        }
                                        if ($_GET['categoria'] != "") {
                                            if ($categoria_item != $categoria) continue;
                                        }
                                    }

                                    echo    '<div class="object object-horizontal">

                    <form action="imovel/?pesquisa=1" method="POST">';
                                    echo '<input type="hidden" name="titulo" value="' . $titulo . '">';
                                    echo '<input type="hidden" name="fotos" value="' . implode('|', $fotos) . '">';
                                    echo '<input type="hidden" name="endereco" value="' . utf8_decode($item->Endereco) . '">';
                                    echo '<input type="hidden" name="numero" value="' . $numero . '">';
                                    echo '<input type="hidden" name="quadra" value="' . $quadra . '">';
                                    echo '<input type="hidden" name="cep" value="' . utf8_decode($item->CEP) . '">';
                                    echo '<input type="hidden" name="bairro" value="' . utf8_decode($item->Regiao) . '">';
                                    echo '<input type="hidden" name="cidade" value="' . utf8_decode($item->Cidade) . '">';
                                    echo '<input type="hidden" name="uni_fed" value="' . utf8_decode($item->UnidadeFederativa) . '">';
                                    echo '<input type="hidden" name="regiao" value="' . $regiao . '">';
                                    echo '<input type="hidden" name="ponto_ref" value="' . $ponto_ref . '">';
                                    echo '<input type="hidden" name="anuncio" value="' . utf8_decode($item->Anuncioparainternet) . '">';
                                    echo '<input type="hidden" name="categoria" value="' . utf8_decode($item->Categoria) . '">';
                                    echo '<input type="hidden" name="finalidade" value="' . utf8_decode($item->Finalidade) . '">';
                                    echo '<input type="hidden" name="tipo" value="' . utf8_decode($item->Tipo) . '">';
                                    echo '<input type="hidden" name="categoria_item" value="' . $categoria_item . '">';
                                    echo '<input type="hidden" name="area_total" value="' . $area . '">';
                                    echo '<input type="hidden" name="area_terreno" value="' . $terreno . '">';
                                    echo '<input type="hidden" name="area_construida" value="' . $construida . '">';
                                    echo '<input type="hidden" name="area_util" value="' . $util . '">';
                                    echo '<input type="hidden" name="banheiro_auxiliar" value="' . $banheiro_a . '">';
                                    echo '<input type="hidden" name="banheiro_empregada" value="' . $banheiro_e . '">';
                                    echo '<input type="hidden" name="banheiro1" value="' . $banheiro1 . '">';
                                    echo '<input type="hidden" name="banheiro2" value="' . $banheiro2 . '">';
                                    echo '<input type="hidden" name="dormitorio" value="' . $dormitorio . '">';
                                    echo '<input type="hidden" name="valor" value="' . $valor . '">';
                                    echo '<input type="hidden" name="venda" value="' . $valor_venda . '">';
                                    echo '<input type="hidden" name="temporada" value="' . $valor_temporada . '">';
                                    echo '<input type="hidden" name="locacao" value="' . $valor_locacao . '">';
                                    echo '<input type="hidden" name="condominio" value="' . $valor_condominio . '">';
                                    echo '<input type="hidden" name="iptu" value="' . $valor_iptu . '">';

                                    echo        '<div class="object-image">
                                    <img src="' . $foto . '" alt="">
                                </div>';
                                    echo        '<div class="object-content">
                                    <h5 class="object-title">' . $titulo . '</h5>
                                    <ul class="object-details list-inline">';
                                    echo        '<li class="list-inline-item"><span class="text-muted">Tipo:</span>' . " " . $tipo . '</li>';
                                    echo        '<li class="list-inline-item"><span class="text-muted">Categoria:</span>' . " " . $categoria_item . " " . '</li>';
                                    echo        '<li class="list-inline-item"><span class="text-muted">Area total:</span>' . " " . $area . " " . 'm<sup>2</sup></li>';
                                    if ($quartos != "")
                                        echo        '<li class="list-inline-item"><span class="text-muted">Quartos:</span>' . " " . $quartos . '</li>';
                                    echo    '</ul>
                            <span class="object-price">R$' . $valor . '</span>
                                </div> 
                                <button type="submit" class="btn btn-primary"><span class="hidden-xs-down">Detalhes</span></button>
                            </div>
                            </form>';

                                    if (isset($_GET['pesquisa'])) {
                                    } else {
                                        $contador = $contador + 1;
                                        if ($contador == 5) {
                                            break;
                                        }
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>


                </div>
            </section>

            <!-- Section / Gallery -->
            <section id="gallery" class="section bg-black cover dark">

                <h2 class="sr-only">Gallery</h2>

                <div class="carousel-gallery">
                    <a href="#" data-toggle="gallery" data-items="galleryCarouselItems" data-slide="0"><img src="assets/img/gallery/gallery01.jpg" alt=""></a>
                    <a href="#" data-toggle="gallery" data-items="galleryCarouselItems" data-slide="1"><img src="assets/img/gallery/gallery02.jpg" alt=""></a>
                    <a href="#" data-toggle="gallery" data-items="galleryCarouselItems" data-slide="2"><img src="assets/img/gallery/gallery03.jpg" alt=""></a>
                    <a href="#" data-toggle="gallery" data-items="galleryCarouselItems" data-slide="3"><img src="assets/img/gallery/gallery04.jpg" alt=""></a>
                    <a href="#" data-toggle="gallery" data-items="galleryCarouselItems" data-slide="4"><img src="assets/img/gallery/gallery05.jpg" alt=""></a>
                    <a href="#" data-toggle="gallery" data-items="galleryCarouselItems" data-slide="5"><img src="assets/img/gallery/gallery06.jpg" alt=""></a>
                </div>

            </section>

            <!-- Section / Who we are? -->
            <section id="who-we-are" class="section">

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <figure class="media-box">
                                <div class="image"><img src="assets/img/photos/about02.jpg" alt=""></div>
                                <button class="btn-play animated" data-animation="fadeInUp" data-toggle="video-modal" data-target="#modalVideo" data-video="https://www.youtube.com/embed/uVju5--RqtY"></button>
                            </figure>
                        </div>
                        <div class="col-lg-5 push-lg-1 col-md-6">
                            <h1>Quem somos?</h1>
                            <ul class="nav nav-icons" role="tablist">
                                <li class="nav-item"><a href="#tab_about" data-toggle="tab" class="nav-link active"><i class="ti-comment" style="color: #f15e23"></i>Sobre nós</a></li>
                                <li class="nav-item"><a href="#tab_history" data-toggle="tab" class="nav-link"><i class="ti-time" style="color: #f15e23;"></i>Nossa história</a></li>
                            </ul>
                            <div class="tab-content" data-local-scroll>
                                <div id="tab_about" class="tab-pane fade show active" role="tabpanel">
                                    <p class="lead">Mauris dolor orci, sagittis ut varius in, interdum nec sapien. Mauris rutrum lacinia orci nec maximus.</p>
                                    <p class="mb-5">Mauris dolor orci, sagittis ut varius in, interdum nec sapien. Mauris rutrum lacinia orci nec maximus.</p>
                                    <a href="#contact" class="btn btn-primary mb-4">Fale conosco!</a>
                                </div>
                                <div id="tab_history" class="tab-pane" role="tabpanel">
                                    <p class="lead">Sagittis ut varius in, interdum nec sapien. Mauris rutrum lacinia orci nec maximus.</p>
                                    <p class="mb-5">Mauris dolor orci, sagittis ut varius in, interdum nec sapien. Mauris rutrum lacinia orci nec maximus.</p>
                                    <a href="#contact" class="btn btn-primary mb-4">Fale conosco!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!-- Section / Contact -->
            <section id="contact" class="section section-double bg-light">

                <footer class="page-footer fila">
                    <div class="content col-md-4 p-4">
                        <h2 class="mb-0">Faça uma visita ou<br> entre em contato!</h2>
                        <hr class="hr-primary">
                        <address>
                            SEPN 504,<br>
                            Bloco C,<br>
                            Loja 37,<br>
                            Edifício Marianna</br>
                        </address>
                        <p class="lead">
                            E-mail: <a class="link-inherit" href="#">aldeia@imobiliariaaldeia.com.br</a><br>
                            Telefone: (61) 3034-6677 </br>
                            Celular: (61) 99944-1932
                        </p>
                        <a href="#" class="icon icon-circle icon-sm icon-facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="icon icon-circle icon-sm icon-youtube"><i class="fa fa-youtube"></i></a>
                        <a href="#" class="icon icon-circle icon-sm icon-instagram"><i class="fa fa-instagram"></i></a>
                    </div>
                    <div class="col-md-8 p-4">
                        <div id="google-map" class="google-maps" data-type="wy" data-latitude="-15.776242" data-longitude="-47.887554"></div>
                    </div>
                </footer>

            </section>

        </div>
        <!-- Content / End -->


        <!-- Body Overlay -->
        <div id="body-overlay"></div>

    </div>


    <!-- Video Modal / Demo -->
    <div class="modal modal-video fade" id="modalVideo" role="dialog">
        <button class="close dark" data-dismiss="modal"></button>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <iframe height="500"></iframe>
            </div>
        </div>
    </div>

    <!-- JS Plugins -->
    <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
    <script src="assets/plugins/animsition/dist/js/animsition.min.js"></script>
    <script src="assets/plugins/tether/dist/js/tether.min.js"></script>
    <script src="assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="assets/plugins/jquery.appear/jquery.appear.js"></script>
    <script src="assets/plugins/jquery.scrollto/jquery.scrollTo.min.js"></script>
    <script src="assets/plugins/jquery.localscroll/jquery.localScroll.min.js"></script>
    <script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="assets/plugins/photoswipe/dist/photoswipe.min.js"></script>
    <script src="assets/plugins/photoswipe/dist/photoswipe-ui-default.min.js"></script>
    <script src="assets/plugins/twitter-fetcher/js/twitterFetcher_min.js"></script>

    <!-- JS Core -->
    <script src="assets/js/core.js"></script>

    <!-- JS Gallery -->
    <script>
        var gallerySliderItems = [{
                src: 'assets/img/photos/slider01.jpg',
                w: 1920,
                h: 1080
            },
            {
                src: 'assets/img/photos/slider02.jpg',
                w: 1920,
                h: 1080
            },
            {
                src: 'assets/img/photos/slider03.jpg',
                w: 1920,
                h: 1080
            },
            {
                src: 'assets/img/photos/slider04.jpg',
                w: 1920,
                h: 1080
            },
            {
                src: 'assets/img/photos/slider05.jpg',
                w: 1920,
                h: 1080
            }
        ];

        var galleryCarouselItems = [{
                src: 'assets/img/gallery/gallery01.jpg',
                w: 1100,
                h: 750
            },
            {
                src: 'assets/img/gallery/gallery02.jpg',
                w: 1100,
                h: 750
            },
            {
                src: 'assets/img/gallery/gallery03.jpg',
                w: 1100,
                h: 750
            },
            {
                src: 'assets/img/gallery/gallery04.jpg',
                w: 1100,
                h: 750
            },
            {
                src: 'assets/img/gallery/gallery05.jpg',
                w: 1100,
                h: 750
            },
            {
                src: 'assets/img/gallery/gallery06.jpg',
                w: 1100,
                h: 750
            }
        ];
    </script>

    <!-- JS Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvzW2Nz4KveSszsYlJ3-uUpghaOyvGyA0&callback=initMap" async defer></script>

</body>

</html>