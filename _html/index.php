<!DOCTYPE html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <title>Teste Vaga</title> 

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- style CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->  

    <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
</head>

<body>

    <div class="background_modal"></div>

    <div class="modal_product">

        <img src="assets/images/img_close.png" class="close" alt="" title="" width="18" height="18" />

        <div class="col-12 box_img">
            <img src="assets/images/img_product_view1.png" class="img_item" alt="" title="" />
        </div>

        <div class="col-12 text">Adicionado com sucesso!</div>

        <button type="submit" class="btn_finish">Finalizar compra</button>

        <div class="col-12 box_continue">
            <a href="">Continuar Comprando</a>
        </div>

    </div>

    

    <!--menu_mobile-->
    <div class="menu_mobile">
        <button class="btn_menu" onclick="menu();">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </button>

        <ul class="menu">
            <li class="li_menu">
                <a href="javascript:" class="menu">Sapatos</a>
            </li>

            <li class="li_menu">
                <a href="quem-somos.php" class="menu">Bolsas</a>
            </li>

            <li class="li_menu">
                <a href="javascript:" class="menu">Acessórios</a>
            </li>

            <li class="li_menu">
                <a href="javascript:" class="menu">Off</a>
            </li>
        </ul>

    </div>
    <!--menu_mobile-->

    <header>

        <!--container-->
        <div class="container">
            
            <button class="btn_menu" onclick="menu();">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </button>


            <a href="">
                <img src="assets/images/logo.png" class="logo" alt="" title="" width="148" height="34">                
            </a>


        </div>
        <!--container-->

    </header>

    <section class="box_menu">

        <!--container-->
        <div class="container">

            <ul class="float_left menu_user">
                <li class="float_left">
                    <a href="">Entrar</a>
                </li>

                <li class="float_left">
                    <a href="">Cadastrar-se</a>
                </li>
            </ul>


            <ul class="menu">
                <li>
                    <a href="">Sapatos</a>
                </li>

                <li>
                    <a href="">Bolsas</a>
                </li>

                <li>
                    <a href="">Acessórios</a>
                </li>

                <li>
                    <a href="">Off</a>
                </li>
            </ul>

            <div class="cart">
                <a href="">
                    <div class="bg transition"></div> 
                    <div class="bg_hover transition"></div>          
                    <span class="transition">0</span>
                </a>
            </div>

            <div class="search">
                <form action="">
                    <input type="text" name="search" id="search" value="" placeholder="Busca" class="field">
                </form>
            </div>


        </div>
        <!--container-->

    </section>

    <section>

        <div class="col-12 search_mobile">
            <form action="">
                <input type="text" name="search" id="search" value="" placeholder="Busca" class="field">
            </form>
        </div>

    </section>

    <section class="product_view">

        <!--container-->
        <div class="container">

            <nav class="col-12 box_breadcrumb">

                <ol class="breadcrumb">

                    <li>
                        <a href="">Home</a>
                    </li>

                    <li>
                        <a href="" class="active">Sapatos</a>
                    </li>

                </ol>

            </nav>

            <div class="row">

                <!--column_img-->
                <div class="col-6 column_img"> 

                    <!--box-->
                    <div class="box">

                        <div class="row">                 

                            <div class="col-3 box_carousel">  

                                <div class="item_video">
                                    <a href="javascript:" onclick="open_gallery(5)">
                                        <span>Vídeo</span>
                                        <img src="assets/images/img_video.png" class="img_video" width="32" height="32">
                                    </a>
                                </div>

                                <img src="assets/images/arrow_next.png" class="prev" id="prev" width="14" height="9">           

                                <ul class="carousel_product_thumb" id="carousel_product_thumb">

                                    <li id="1">
                                        <img src="assets/images/img_product_view1.png" class="img_item" alt="" title="" />
                                    </li>
                                    
                                    <li id="2">
                                        <img src="assets/images/img_product1.png" class="img_item" alt="" title="" />
                                    </li>
                                    
                                    <li id="3">
                                        <img src="assets/images/img_product2.png" class="img_item" alt="" title="" />
                                    </li>
                                    
                                    <li id="4">
                                        <img src="assets/images/img_product3.png" class="img_item" alt="" title="" />
                                    </li>
                                    
                                    <li id="5">
                                        <img src="assets/images/img_product4.png" class="img_item" alt="" title="" />
                                    </li>

                                </ul>

                                <img src="assets/images/arrow_prev.png" class="prev" id="prev" width="14" height="9">  

                            </div>


                            <div class="col-9 corousel_product_view">

                                <div class="col-12 item">

                                    <a href="javascript:" onclick="open_gallery(0)">
                                        <img src="assets/images/img_product_view1.png" class="img_item" alt="" title="">
                                    </a>

                                </div>

                                <div class="col-12 item">

                                    <a href="javascript:" onclick="open_gallery(1)">
                                        <img src="assets/images/img_product1.png" class="img_item" alt="" title="">
                                    </a>

                                </div>

                                <div class="col-12 item">

                                    <a href="javascript:" onclick="open_gallery(2)">
                                        <img src="assets/images/img_product2.png" class="img_item" alt="" title="">
                                    </a>

                                </div>

                                <div class="col-12 item">

                                    <a href="javascript:" onclick="open_gallery(3)">
                                        <img src="assets/images/img_product3.png" class="img_item" alt="" title="">
                                    </a>

                                </div>

                                <div class="col-12 item">

                                    <a href="javascript:" onclick="open_gallery(4)">
                                        <img src="assets/images/img_product4.png" class="img_item" alt="" title="">
                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>
                    <!--box-->  

                </div>
                <!--column_img-->

                <!--column_data-->
                <div class="col-6 column_data">
                    
                    <div class="col-12 box">

                        <div class="col-12 name">Rasteira Tira Dedo</div>

                        <div class="col-12 code">RT 0568 | 03.07.0653</div>

                        <div class="col-12 box_price">

                            <span class="price">R$ 69,00</span>

                            <span class="price_discount">R$ 55,20</span>

                            <span class="installments">Ou 6x de  R$ 9,20</span>

                        </div>

                        <!--box_attribute-->
                        <div class="col-12 box_attribute">
                            <div class="col-12 attribute_name">Cor: <span>(Fucsia)</span> </div>

                            <div class="col-12 box_colors">

                                <label>
                                    <input type="radio" name="color" value="Fucsia">
                                    <div class="color transition"><span class="pink"></span></div>
                                </label>

                                <label>
                                    <input type="radio" name="color" value="Purple">
                                    <div class="color transition"><span class="purple"></span></div>
                                </label>

                                <label>
                                    <input type="radio" name="color" value="Brown">
                                    <div class="color transition"><span class="brown"></span></div>
                                </label>

                                <label>
                                    <input type="radio" name="color" value="Black">
                                    <div class="color transition"><span class="black"></span></div>
                                </label>

                            </div>
                        </div>
                        <!--box_attribute-->

                        <!--box_attribute-->
                        <div class="col-12 box_attribute">
                            <div class="col-12 attribute_name">Tamanho: <span>(37)</span> <a href="">Guia de medidas</a></div>

                            <div class="col-12 box_size">

                                <label>
                                    <input type="radio" name="size" value="33">
                                    <div class="size transition">33</div>
                                </label>

                                <label>
                                    <input type="radio" name="size" value="34">
                                    <div class="size transition">34</div>
                                </label>

                                <label>
                                    <input type="radio" name="size" value="35">
                                    <div class="size transition">35</div>
                                </label>

                                <label>
                                    <input type="radio" name="size" value="36">
                                    <div class="size transition">36</div>
                                </label>

                                <label>
                                    <input type="radio" name="size" value="37">
                                    <div class="size transition">37</div>
                                </label>

                                <label>
                                    <input type="radio" name="size" value="38">
                                    <div class="size transition">38</div>
                                </label>

                                <label>
                                    <input type="radio" name="size" value="39">
                                    <div class="size transition">39</div>
                                </label>

                                <label>
                                    <input type="radio" name="size" value="40">
                                    <div class="size transition">40</div>
                                </label>

                                <label>
                                    <input type="radio" name="size" value="41">
                                    <div class="size transition">41</div>
                                </label>

                                <label>
                                    <input type="radio" name="size" value="42">
                                    <div class="size transition">42</div>
                                </label>

                            </div>
                        </div>
                        <!--box_attribute-->

                        <button type="submit" class="btn_add" id="btn_add">Adicionar à sacola</button>

                        <div class="col-12 description">Rasteira em atanado soft com tira no dedo e fechamento de fivela. Possui sola sempre na cor do cabedal.</div>

                    </div>

                </div>
                <!--column_data-->

                <!--box_similar-->
                <div class="col-12 box_similar">

                    <div class="col-12 title">Quem viu viu também</div>

                    <!--carousel_similar-->
                    <div class="col-12 carousel_similar">

                        <?php for ($i = 0;$i <2; $i++): ?>

                            <!--product-->
                            <div class="col-12 product">

                                <a href="">

                                    <div class="add">+</div>

                                    <div class="col-12 box_img">
                                        <img src="assets/images/img_product1.png" class="img_item" alt="Facebook" title="Facebook">
                                    </div>

                                    <div class="col-12 box_price">
                                        <span class="price">R$ 204,90</span>

                                        <div class="col-12 box_colors">

                                            <label>
                                                <div class="color transition"><span class="pink"></span></div>
                                            </label>

                                            <label>
                                                <div class="color transition"><span class="purple"></span></div>
                                            </label>

                                            <label>
                                                <div class="color transition"><span class="brown"></span></div>
                                            </label>

                                            <label>
                                                <div class="color transition"><span class="black"></span></div>
                                            </label>

                                        </div>
                                    </div>

                                </a>

                            </div>
                            <!--product-->

                            <!--product-->
                            <div class="col-12 product">

                                <a href="">

                                    <div class="add">+</div>

                                    <div class="col-12 box_img">
                                        <img src="assets/images/img_product2.png" class="img_item" alt="Facebook" title="Facebook">
                                    </div>

                                    <div class="col-12 box_price">
                                        <span class="price">R$ 204,90</span>

                                        <div class="col-12 box_colors">

                                            <label>
                                                <div class="color transition"><span class="pink"></span></div>
                                            </label>

                                            <label>
                                                <div class="color transition"><span class="purple"></span></div>
                                            </label>

                                            <label>
                                                <div class="color transition"><span class="brown"></span></div>
                                            </label>

                                            <label>
                                                <div class="color transition"><span class="black"></span></div>
                                            </label>

                                        </div>
                                    </div>

                                </a>

                            </div>
                            <!--product-->

                            <!--product-->
                            <div class="col-12 product">

                                <a href="">

                                    <div class="add">+</div>

                                    <div class="col-12 box_img">
                                        <img src="assets/images/img_product3.png" class="img_item" alt="Facebook" title="Facebook">
                                    </div>

                                    <div class="col-12 box_price">
                                        <span class="price">R$ 204,90</span>

                                        <div class="col-12 box_colors">

                                            <label>
                                                <div class="color transition"><span class="pink"></span></div>
                                            </label>

                                            <label>
                                                <div class="color transition"><span class="purple"></span></div>
                                            </label>

                                            <label>
                                                <div class="color transition"><span class="brown"></span></div>
                                            </label>

                                            <label>
                                                <div class="color transition"><span class="black"></span></div>
                                            </label>

                                        </div>
                                    </div>

                                </a>

                            </div>
                            <!--product-->

                            <!--product-->
                            <div class="col-12 product">

                                <a href="">

                                    <div class="add">+</div>

                                    <div class="col-12 box_img">
                                        <img src="assets/images/img_product4.png" class="img_item" alt="Facebook" title="Facebook">
                                    </div>

                                    <div class="col-12 box_price">
                                        <span class="price">R$ 204,90</span>

                                        <div class="col-12 box_colors">

                                            <label>
                                                <div class="color transition"><span class="pink"></span></div>
                                            </label>

                                            <label>
                                                <div class="color transition"><span class="purple"></span></div>
                                            </label>

                                            <label>
                                                <div class="color transition"><span class="brown"></span></div>
                                            </label>

                                            <label>
                                                <div class="color transition"><span class="black"></span></div>
                                            </label>

                                        </div>
                                    </div>

                                </a>

                            </div>
                            <!--product-->
                            
                        <?php endfor ?>

                    </div>
                    <!--carousel_similar-->

                    <div class="col-12 box_control">

                        <div class="box">

                            <img src="assets/images/img_arrow_similar_prev.png" class="prev" id="prev">
                            
                            <div class="box_number"><span id="current">1</span> de 10</div>

                            <img src="assets/images/img_arrow_similar_next.png" class="next" id="next">

                        </div>

                    </div>

                </div>
                <!--box_similar-->

            </div>

        </div>
        <!--container-->

    </section>


    <footer>
        <!--container-->
        <div class="container">

            <div class="box_newsletter">

                <div class="title">Assine nossa news</div>

                <form action="">
                    <label for="nome">
                        <input type="text" name="nome" id="nome" value="" class="field">
                        <span class="transition">Nome</span>
                    </label>

                    <label for="email">                        
                        <input type="text" name="email" id="email" value="" class="field">
                        <span class="transition">E-mail</span>
                    </label>

                    <div class="col-12 box_btn_send">
                        <button type="submit" class="btn_send">Enviar</button>
                    </div>
                </form>

            </div>
        </div>
        <!--container-->

        <!--container-->
        <div class="container">

            <!--row-->
            <div class="row">

                <ul class="col-12 media">

                    <li class="float_left">
                        <a href="" target="_blank">
                            <img src="assets/images/img_media1.png" alt="Facebook" title="Facebook" width="12" height="25">                
                        </a>
                    </li>

                    <li class="float_left">
                        <a href="" target="_blank">
                            <img src="assets/images/img_media2.png" alt="Facebook" title="Facebook" width="24" height="25">                
                        </a>
                    </li>

                    <li class="float_left">
                        <a href="" target="_blank">
                            <img src="assets/images/img_media3.png" alt="Facebook" title="Facebook" width="25" height="25">                
                        </a>
                    </li>

                </ul>

                <ul class="col-2 menu">

                    <li class="col-12">
                        <img src="assets/images/img_vtex.png" alt="Facebook" title="Facebook"width="88" height="54">

                        <img src="assets/images/img_selo_ebit.png" alt="Facebook" title="Facebook"  width="54" height="58">
                    </li>

                </ul>

                <ul class="col-2 menu">

                    <li class="col-12">
                        <div class="col-12 title">Institucional</div>
                    </li>

                    <li class="col-12">
                        <a href="">A Marca</a>
                    </li>

                    <li class="col-12">
                        <a href="">Lojas</a>
                    </li>

                    <li class="col-12">
                        <a href="">Contato</a>
                    </li>

                </ul>

                <ul class="col-2 menu">

                    <li class="col-12">
                        <div class="col-12 title">Informações</div>
                    </li>

                    <li class="col-12">
                        <a href="">Formas de Pagamento</a>
                    </li>

                    <li class="col-12">
                        <a href="">Trocas e Devoluções </a>
                    </li>

                    <li class="col-12">
                        <a href="">Cuidados Com o Produto</a>
                    </li>

                </ul>

                <ul class="col-2 menu">

                    <li class="col-12">
                        <div class="col-12 title">Conheça</div>
                    </li>

                    <li class="col-12">
                        <a href="">Franquias e Multimarcas</a>
                    </li>

                    <li class="col-12">
                        <a href="">Trabalhe com a Gente</a>
                    </li>

                    <li class="col-12">
                        <a href="">Procon-RJ</a>
                    </li>

                </ul>

            </div>
            <!--row-->

        </div>
        <!--container-->

        <div class="col-12 box_address">

            <!--container-->
            <div class="container">

                <!--row-->
                <div class="row">

                    <address class="col-7">
                        Via Mia | V. Milano Centro Comercio de Bolsas Eireli - EPP. <br>
                        Av.das Américas, 500 - bloco 20, loja 126 - Barra da Tijuca - Rio de Janeiro - RJ - CEP: 22640-100 <br>
                        CNPJ: 05.292.288/0002-10 - I.E: 86.732.548 - E-mail: ecommerce@viamia.com.br

                    </address>

                    <div class="col-5 box_logo">
                        <img src="assets/images/logo_footer.png" class="logo" alt="" title="" width="148" height="34">
                    </div>

                </div>
                <!--row-->

            </div>
            <!--container-->

        </div>

    </footer>

    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <!--lightSlider-->
    <link rel="stylesheet"  href="assets/js/lightSlider/css/lightSlider.css"/>
    <script src="assets/js/lightSlider/js/jquery.lightSlider.js"></script> 
    <!--lightSlider-->

    <link href="assets/js/owlcarousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/js/owlcarousel/owl.theme.css" rel="stylesheet">
    <script src="assets/js/owlcarousel/owl.carousel.js"></script>
    <!-- Owl Carousel Assets -->

    <!--jquery ui-->
    <link rel="stylesheet" href="assets/js/jquery-ui-1.12.1/jquery-ui.css">
    <script src="assets/js/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <!--jquery ui-->

    <script src="assets/js/main.js"></script>

    <!--modal product code-->    
    <link href="assets/js/photoswipe/photoswipe.css?v=4.1.1-1.0.4" rel="stylesheet" />
    <link href="assets/js/photoswipe/default-skin/default-skin.css?v=4.1.1-1.0.4" rel="stylesheet" />


    <script src="assets/js/photoswipe/photoswipe.min.js?v=4.1.1-1.0.4"></script>
    <script src="assets/js/photoswipe/photoswipe-ui-default.min.js?v=4.1.1-1.0.4"></script> 


    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe. 
             It's a separate element as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides. 
                PhotoSwipe keeps only 3 of them in the DOM to save memory.
                Don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <!--  Controls are self-explanatory. Order can be changed. -->

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share" title="Share"></button>

                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                    <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                    <!-- element will get class pswp__preloader--active when preloader is running -->
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                          <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div> 
                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>

            </div>

        </div>

    </div>

</body>
</html>