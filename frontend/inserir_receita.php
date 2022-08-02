<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/estilo.css" rel="stylesheet" type="text/css" />


        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>++Vegan - Receitas</title>
    </head>
    <body style="background-color: rgb(255, 244, 213);">


        <?php
            include_once 'header.php';
        ?>

      <div class="container">
          <div class="row">
            <h3 class="display-5 text-center" style="color: #92a34f;">Receita</h3>
            <hr>

            <div class="row">
<div class="col-lg-12">
<div class="card send-recipe-form">
<h2 class="card-title" id="card-title">
<div class="ico-svg svg-big ico-orange">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24"><defs><clipPath id="b"><rect width="24" height="24"></rect></clipPath></defs><g id="a" clip-path="url(#b)"><g transform="translate(3.671 2)"><path d="M89.509,200.781a.784.784,0,0,0-.781-.781H80.681a.781.781,0,0,0,0,1.563h8.047A.784.784,0,0,0,89.509,200.781Z" transform="translate(-76.779 -192.187)"></path><path d="M80.681,280a.781.781,0,0,0,0,1.563h4.887a.781.781,0,0,0,0-1.562Z" transform="translate(-76.779 -269.063)"></path><path d="M5.738,18.438H3.125a1.562,1.562,0,0,1-1.562-1.562V3.125A1.562,1.562,0,0,1,3.125,1.563H12.73a1.562,1.562,0,0,1,1.563,1.563v4.8a.781.781,0,0,0,1.563,0v-4.8A3.129,3.129,0,0,0,12.73,0H3.125A3.129,3.129,0,0,0,0,3.125v13.75A3.129,3.129,0,0,0,3.125,20H5.738a.781.781,0,0,0,0-1.562Z"></path><path d="M225.7,272.736a2.343,2.343,0,0,0-3.313,0l-4.289,4.277a.77.77,0,0,0-.2.324l-.934,3.074a.779.779,0,0,0,.746,1.008.735.735,0,0,0,.207-.027l3.152-.875a.783.783,0,0,0,.344-.2l4.281-4.273A2.339,2.339,0,0,0,225.7,272.736Zm-5.238,6.336-1.586.438.465-1.527,2.895-2.887,1.105,1.105Zm4.133-4.129-.152.152-1.105-1.105.152-.152a.782.782,0,0,1,1.105,1.105Z" transform="translate(-208.466 -261.423)"></path><path d="M88.728,120H80.681a.781.781,0,0,0,0,1.563h8.047a.781.781,0,0,0,0-1.562Z" transform="translate(-76.779 -115.313)"></path></g></g></svg>
</div>
Enviar receita
</h2>
<form accept-charset="UTF-8" action="/receita/enviar-receita" class="simple_form col-lg-12" enctype="multipart/form-data" id="new_recipe" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="yfbNqIq7DrJvDonLS+vLd7fFBLUrsF3vUbe6wIYaKxs="></div><div class="message-errors"></div>
<ul></ul>
<div class="row">
<div class="col-lg-12">
<div class="control-group string optional"><div class="controls"><input aria-label="Nome da receita" class="string optional gray-box" data-error-message="Favor inserir o nome da receita" id="recipe_title" name="recipe[title]" placeholder="Nome da Receita" size="50" type="text"></div></div>
</div>
<div class="send-recipe-images col-lg-6">
<div class="send-recipe-files gray-box">
<div class="send-recipe-image-list"></div>
<div class="clear-send-images">
<span>
X
</span>
Remover imagens
</div>
<div class="ico-svg svg-small ico-orange">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24"><defs><clipPath id="b"><rect width="24" height="24"></rect></clipPath></defs><g id="a" clip-path="url(#b)"><path d="M0,0H24V24H0Z" fill="none"></path><path d="M0,0H24V24H0Z" fill="none"></path><circle cx="3.2" cy="3.2" r="3.2" transform="translate(8.8 8.8)"></circle><path d="M9,2,7.17,4H4A2.006,2.006,0,0,0,2,6V18a2.006,2.006,0,0,0,2,2H20a2.006,2.006,0,0,0,2-2V6a2.006,2.006,0,0,0-2-2H16.83L15,2Zm3,15a5,5,0,1,1,5-5A5,5,0,0,1,12,17Z"></path><path d="M0,0H24V24H0Z" fill="none"></path></g></svg>
</div>
<div class="send-images-info">
<span class="drag-drop d-none d-lg-block">
Arraste para enviar fotos da receita
</span>
<span>
Você pode enviar até 6 fotos (opcional)
</span>
</div>
</div>
<label class="btn btn-gradient" for="send-recipe-images">
Adicionar fotos
<input class="d-none" id="send-recipe-images" multiple="multiple" name="recipe[images][]" type="file">
</label>
</div>
<div class="send-recipe-info col-lg-6">
<div class="send-recipe-measures gray-box">
<div class="measures-content row">
<div class="send-recipe-preparation-time col-lg-6">
<label class="label" for="recipe_preparation_time">
<div class="ico-svg svg-small ico-orange">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24"><defs><clipPath id="b"><rect width="24" height="24"></rect></clipPath></defs><g id="a" clip-path="url(#b)"><path d="M0,0H24V24H0Z" fill="none"></path><path d="M22,5.7,17.4,1.8,16.1,3.3l4.6,3.9ZM7.9,3.4,6.6,1.9,2,5.7,3.3,7.2,7.9,3.4ZM12.5,8H11v6l4.7,2.9.8-1.2-4-2.4ZM12,4a9,9,0,1,0,9,9A8.963,8.963,0,0,0,12,4Zm0,16a7,7,0,1,1,7-7A6.957,6.957,0,0,1,12,20Z" transform="translate(0 0.2)"></path><path d="M0,0H24V24H0Z" fill="none"></path></g></svg>
</div>
Tempo de preparo
</label>
<div class="number-input d-flex align-items-center">
<div class="control-group integer optional"><div class="controls"><input class="numeric integer optional input" data-error-message="Favor inserir o tempo de preparo da receita (minutos)" id="recipe_preparation_time" name="recipe[preparation_time]" step="1" type="number"></div></div>
minutos
</div>
</div>
<div class="send-recipe-servings col-lg-6">
<label class="label" for="recipe_servings">
<div class="ico-svg svg-small ico-orange">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24"><defs><clipPath id="b"><rect width="24" height="24"></rect></clipPath></defs><g id="a" clip-path="url(#b)"><path d="M0,0H24V24H0Z" fill="none"></path><path d="M0,0H24V24H0Z" fill="none"></path><g transform="translate(2 4)"><path d="M18.688,11.313A8.881,8.881,0,0,0,12,3.938,2.228,2.228,0,0,0,12.5,2.5a2.5,2.5,0,0,0-5,0A2.543,2.543,0,0,0,8,4a8.806,8.806,0,0,0-6.687,7.375A1.764,1.764,0,0,0,0,13.125,1.842,1.842,0,0,0,1.875,15h16.25A1.842,1.842,0,0,0,20,13.125,1.9,1.9,0,0,0,18.688,11.313ZM10,1.25A1.25,1.25,0,1,1,8.75,2.5,1.254,1.254,0,0,1,10,1.25ZM10,5a7.463,7.463,0,0,1,7.375,6.25H2.625A7.463,7.463,0,0,1,10,5Zm8.125,8.75H1.875a.625.625,0,0,1,0-1.25h16.25a.625.625,0,0,1,0,1.25Z"></path><path d="M15.625,10a.625.625,0,0,0,0,1.25h0A4.91,4.91,0,0,1,19.75,13.5a.633.633,0,0,0,1.063-.687A6.289,6.289,0,0,0,15.625,10Z" transform="translate(-5.625 -3.75)"></path></g></g></svg>
</div>
Porções
</label>
<div class="number-input d-flex align-items-center">
<div class="control-group integer optional"><div class="controls"><input class="numeric integer optional input" data-error-message="Favor inserir o número de porções que a receita serve" id="recipe_servings" name="recipe[servings]" step="1" type="number"></div></div>
porções
</div>
</div>
</div>
</div>
<label class="category-select" for="category-select">
<div class="control-group select optional"><div class="controls"><select class="select optional" data-error-message="Favor selecionar uma categoria" id="category-select" name="recipe[category_id]"><option value="">Escolha uma categoria</option>
<option value="1000">Bolos e tortas doces</option>
<option value="1004">Carnes</option>
<option value="1009">Aves</option>
<option value="1014">Peixes e frutos do mar</option>
<option value="1023">Saladas, molhos e acompanhamentos</option>
<option value="1027">Sopas</option>
<option value="1028">Massas</option>
<option value="1032">Bebidas</option>
<option value="1037">Doces e sobremesas</option>
<option value="1044">Lanches</option>
<option value="1057">Prato Único</option>
<option value="1329">Light</option>
<option value="1334">Alimentação Saudável</option></select></div></div>
</label>
</div>
<div class="send-recipe-ingredients mt-4">
<h2 class="card-title col-lg-12">
<div class="ico-svg svg-big ico-orange">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24"><defs><clipPath id="b"><rect width="24" height="24"></rect></clipPath></defs><g id="a" clip-path="url(#b)"><g transform="translate(2 2)"><path d="M158.4,279.684a3.226,3.226,0,0,0,3.223,3.223h1.18a3.226,3.226,0,0,0,3.223-3.223V277H158.4Zm1.172-1.512h5.281v1.512a2.053,2.053,0,0,1-2.051,2.051h-1.18a2.056,2.056,0,0,1-2.051-2.051Z" transform="translate(-152.212 -266.18)"></path><path d="M204,216.2h4.063v1.172H204Z" transform="translate(-196.031 -207.755)"></path><path d="M19.145,15.555a.315.315,0,0,1-.316-.316V11.273A1.49,1.49,0,0,0,17.34,9.785H16.5v-1.9L14.668,4.875V0h-3.7V2.313a.969.969,0,1,1-1.937,0V0H5.34V4.875L3.5,7.883v1.9H2.66a1.49,1.49,0,0,0-1.488,1.488v3.965a.315.315,0,0,1-.316.316H0v1.172H.855a1.49,1.49,0,0,0,1.488-1.488V11.273a.315.315,0,0,1,.316-.316H3.5V20H16.5V10.957h.836a.315.315,0,0,1,.316.316v3.965a1.49,1.49,0,0,0,1.488,1.488H20V15.555Zm-3.812,3.273H4.668V8.211L6.5,5.2V1.172H7.855V2.313a2.141,2.141,0,1,0,4.281,0V1.172h1.352V5.2l1.836,3.008V18.828Z"></path></g></g></svg>
</div>
Ingredientes
</h2>
<div class="col-lg-9">
<p class="info-text">
Escreva cada ingrediente por linha e, para separar, não use hífen, numeração ou outro marcador.
</p>
<div class="control-group text optional"><div class="controls"><textarea aria-label="Caixa de texto de ingredientes" class="text optional gray-box" cols="40" data-error-message="Favor inserir os ingredientes da receita" id="recipe_ingredients" name="recipe[ingredients]" placeholder="Ex: 03 ovos" rows="10"></textarea></div></div>
</div>
<div class="right-box-content col-lg-3">
<p class="info-text">
Preparamos uma tabela para te ajudar a calcular as medidas das receitas.
</p>
<a data-target="#ingredients-table" data-toggle="modal">
<label class="btn btn-gradient">
Ver tabela
</label>
</a>
</div>
</div>
<div class="send-recipe-directions col-lg-12 mt-4">
<h2 class="card-title">
<div class="ico-svg svg-big ico-orange">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24"><defs><clipPath id="b"><rect width="24" height="24"></rect></clipPath></defs><g id="a" clip-path="url(#b)"><g transform="translate(2 4)"><g transform="translate(1.955)"><path d="M46.543,2.128a1.43,1.43,0,0,0,.163-.657,1.471,1.471,0,0,0-2.943,0,1.446,1.446,0,0,0,.163.657C40.411,2.307,37.2,3.205,37.2,4.771a.418.418,0,0,0,.42.42H52.849a.422.422,0,0,0,.42-.42C53.269,3.205,50.069,2.3,46.543,2.128ZM45.256.846a.62.62,0,1,1-.62.62A.621.621,0,0,1,45.256.846ZM38.34,4.367c.778-.7,3.311-1.44,6.915-1.44v.016c3.6,0,6.138.741,6.915,1.419H38.34Z" transform="translate(-37.2)"></path></g><g transform="translate(3.468 7.22)"><path d="M66.42,137.4a.422.422,0,0,0-.42.42v4.519a.42.42,0,1,0,.841,0V137.82A.418.418,0,0,0,66.42,137.4Z" transform="translate(-66 -137.4)"></path></g><g transform="translate(0 5.707)"><path d="M19.58,110.224H18.024v-1.2a.422.422,0,0,0-.42-.42H2.417a.422.422,0,0,0-.42.42v1.2H.42a.42.42,0,1,0,0,.841H2v6.206a2.377,2.377,0,0,0,2.585,2.522H15.476A2.345,2.345,0,0,0,18,117.271v-6.206H19.58a.42.42,0,1,0,0-.841Zm-2.4,7.047a1.508,1.508,0,0,1-1.682,1.682H4.572a1.56,1.56,0,0,1-1.745-1.682v-7.83H17.183Z" transform="translate(0 -108.6)"></path></g></g></g></svg>
</div>
Modo de Preparo
</h2>
<p class="info-text">
Descreva os passos por linha e, para separar, não use hífen, numeração ou outro marcador.
</p>
<div class="control-group text optional"><div class="controls"><textarea aria-label="Caixa de texto do modo de preparo" class="text optional gray-box" cols="40" data-error-message="Favor inserir o modo de preparo da receita" id="recipe_preparation" name="recipe[preparation]" placeholder="Ex: bata todos os ingredientes..." rows="10"></textarea></div></div>
</div>
<div class="send-recipe-final-info col-lg-12 mt-4">
<h2 class="card-title">
Antes de enviar
</h2>
<ul>
<li>Revise sua receita para ter certeza que as quantidades estão corretas e todos os itens estão listados.</li>
<li>Por favor, só envie fotos tiradas por você, fotos tiradas da internet não serão aceitas e você ainda corre o risco de ter seu cadastro removido do site.</li>
<li>As informações serão posteriormente formatadas pelo time do ++Vegan.</li>
</ul>
</div>
<input class="btn btn btn-gradient btn-send-recipe" data-disable-with="Enviando..." name="commit" type="submit" value="Enviar receita">
</div>
</form>
</div>
<div aria-hidden="true" class="modal fade" id="ingredients-table" role="dialog" tabindex="-1">
<div class="modal-dialog ingredients-modal" role="document">
<div class="modal-content">
<button aria-label="Close" class="close" data-dismiss="modal">
<span class="icon-cross"></span>
</button>
<div class="modal-body ingredients-table-lightbox">
<div class="ingredient">
<div class="image-box">
<img alt="Leite" src="/assets/layout/infographic/milk-box.png">
</div>
<div class="portions">
<div class="title">
<h2>
Líquidos
</h2>
<p>
(leite, água, óleo, bebidas alcoólicas, café etc)
</p>
</div>
<div class="portions-content">
<div class="left">
<img alt="Xícara" src="/assets/layout/infographic/mug.png">
<p>
1 xícara =
<br>
240 ml
</p>
</div>
<div class="center">
<img alt="Colher" src="/assets/layout/infographic/milk-spoon-1.png">
<p>
1 colher (sopa) =
<br>
15 ml
</p>
</div>
<div class="right">
<img alt="Colher" src="/assets/layout/infographic/milk-spoon-2.png">
<p>
1 colher (chá) =
<br>
5 ml
</p>
</div>
</div>
</div>
</div>
<div class="ingredient">
<div class="image-box">
<img alt="Chocolate" src="/assets/layout/infographic/chocolate.png">
</div>
<div class="portions">
<div class="title">
<h2>
Chocolate em Pó
</h2>
<p>
(cacau em pó)
</p>
</div>
<div class="portions-content">
<div class="left">
<img alt="Xícara" src="/assets/layout/infographic/mug.png">
<p>
1 xícara = 90 g
</p>
</div>
<div class="right">
<img alt="Colher" src="/assets/layout/infographic/chocolate-spoon.png">
<p>
1 colher (sopa) = 6 g
</p>
</div>
</div>
</div>
</div>
<div class="ingredient">
<div class="image-box">
<img alt="Manteiga" src="/assets/layout/infographic/butter.png">
</div>
<div class="portions">
<div class="title">
<h2>
Manteiga
</h2>
<p>
(ou margarina)
</p>
</div>
<div class="portions-content">
<div class="left">
<img alt="Xícara" src="/assets/layout/infographic/mug.png">
<p>
1 xícara = 200 ml
</p>
</div>
<div class="right">
<img alt="Colher" src="/assets/layout/infographic/butter-spoon.png">
<p>
1 colher (sopa) = 15 ml
</p>
</div>
</div>
</div>
</div>
<div class="ingredient">
<div class="image-box">
<img alt="Açúcar" src="/assets/layout/infographic/sugar.png">
</div>
<div class="portions">
<div class="title">
<h2>
Açúcar
</h2>
</div>
<div class="portions-content">
<div class="left">
<img alt="Xícara" src="/assets/layout/infographic/mug.png">
<p>
1 xícara = 180 g
</p>
</div>
<div class="right">
<img alt="Colher" src="/assets/layout/infographic/sugar-spoon.png">
<p>
1 colher (sopa) = 12 g
</p>
</div>
</div>
</div>
</div>
<div class="ingredient last">
<div class="image-box">
<img alt="Trigo" src="/assets/layout/infographic/wheat.png">
</div>
<div class="portions">
<div class="title">
<h2>
Farinha de Trigo
</h2>
</div>
<div class="portions-content">
<div class="left">
<img alt="Xícara" src="/assets/layout/infographic/mug.png">
<p>
1 xícara = 120 g
</p>
</div>
<div class="right">
<img alt="Colher" src="/assets/layout/infographic/sugar-spoon.png">
<p>
1 colher (sopa) = 7,5 g
</p>
</div>
</div>
</div>
</div>
<button aria-label="Close" class="close-table-btn" data-dismiss="modal">
<div class="close-box">
x
</div>
</button>
</div>
</div>
</div>
</div>
</div>
</div>

      </div>

      <footer class="py-5">
        <div class="bg-dark text-light fixed-bottom d-flex justify-content-between py-4 border-top">
          <p>&copy; 2022 Company, Inc. All rights reserved.</p>
        </div>
      </footer>	
      
    </body>
</html>
