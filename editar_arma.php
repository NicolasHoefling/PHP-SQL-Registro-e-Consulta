<?php
  include ("arma.controller.php");
  $id = $_GET['id'];
  $armaService = new armaService($conexao, $arma);
  $arma = $armaService->recuperarUmarma($id);
  function selected( $value, $selected ){
      return $value==$selected ? ' selected="selected"' : '';
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- W3 CSS -->
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- links w3 -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- FONTS GOOGLE -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500&display=swap" rel="stylesheet">

      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">

      <!-- ICONS -->
      <script src="https://kit.fontawesome.com/8a4e2e6b4c.js" crossorigin="anonymous"></script>

    <!-- CORES CSS -->
      <style>
        
.box {
  transition: box-shadow .3s;
  border-radius:10px;
  border: 1.5px solid #F2641E;
  padding: 10px;
  box-shadow: 5px 10px rgba(8, 0, 0, 0.68);
}
.box:hover {
  box-shadow: 0 0 21px red; 
}
.boox:hover {
  box-shadow: 0 0 22px #04AA6D; 
  color:rgb(255, 100, 10); 
}
.boxx:hover {
  box-shadow: 0 0 11px yellow; 
}
.botao:hover {
  box-shadow: 0 0 21px #04AA6D;
}

          /* USO DAS FONTS EM */
          h1, h2{
              font-family: "Oswald", sans-serif;
          }
          h5 {
              font-family: 'Roboto Mono', sans-serif;
          }
          /* CORES DO IMC */
          .w3-arma        {color:rgb(251, 249, 249) !important; background-color:rgba(138, 0, 0, 0.68) !important}
          .w3-colorinput  {color:rgb(255, 100, 10) !important; background-color:rgba(6, 1, 1, 0.59) !important}
          .w3-fundoinput  {background-color:#3e464f  !important}
          .w3-borderinput {border-color:rgb(255, 100, 10) !important}
          .w3-theme       {color:#fff !important; background-color:#262626 !important}
      </style>

    <title>INSIRA OS DADOS</title>

</head>
<body style="background-image: url(img/akfundo1.jpg);background-repeat: no-repeat;background-size: cover  ;background-attachment: fixed;">
    
<!-- MENU -->
  <?php include("menu.php"); ?>
<!-- FIM MENU -->

  <div class="container ">
    <h2 class="w3-center text-white m-5">REGISTRE SUA ARMA</h2>

    <div class="card w3-arma w3-borderinput mb-5 boxx shadow-lg">
        <div class="text-center card-header text-white">
          PREENCHA CORRETAMENTE A SEGUIR
        </div>

      <div class="card-body">
        <form method="POST" action="arma.controller.php?acao=editar">
        <input type="hidden" name="id" value="<?= $arma['id'] ?>">
          <div class="w3-container w3-margin w3-padding ">
          <div class="w3-container w3-fundoinput w3-hover-border-inputt p-3 mb-4  box ">
          <i class="fas fa-user-circle"></i>
                <label class="form-label text-white">REGISTRADOR DA ARMA</label>
                <input class="w3-form-control w3-input w3-animate-input w3-colorinput w3-border-bottom w3-round-large" type="text" style="width: 85%" name="nome" id="nome" placeholder="Nome do Dono" required value="<?= $arma['nome'] ?>">
          </div>    
    
          <div class="w3-container w3-fundoinput w3-hover-border-inputt p-3  mb-4   box ">
                <label class="form-label text-white">ARMA</label>
                <input class="w3-form-control w3-input w3-animate-input w3-colorinput w3-border-bottom w3-round-large" type="text" style="width: 85%;" name="weapon" id="weapon" placeholder="Digite sua Arma" required value="<?= $arma['weapon'] ?>">
              
          </div>

          <div class="w3-container w3-fundoinput w3-hover-border-inputt p-3  mb-4   box ">
          <i class="fas fa-barcode"></i>
            <label class="form-label text-white">CATEGORIA DA ARMA</label>
            <select class="w3-form-select  w3-input w3-animate-input w3-colorinput w3-border-bottom w3-round-large" style="width: 85%;"name="categoria" id="categoria" required>
                <option disabled selected>Selecione a Categoria</option>
                <option value="Armas Branca"   <?php echo selected( 'Armas Branca', $arma['categoria'] ); ?>   style="background-color: rgba(230, 0, 23, 0.76); color:#e8eaf6">Armas Branca</option>
                <option value="Pistols"        <?php echo selected( 'Pistols', $arma['categoria'] ); ?>        style="background-color: rgba(230, 0, 23, 0.76); color:#e8eaf6">Pistols</option>
                <option value="Submachine Gun" <?php echo selected( 'Submachine Gun', $arma['categoria'] ); ?> style="background-color: rgba(230, 0, 23, 0.76); color:#e8eaf6">Submachine Gun [SMG]</option>
                <option value="Rifle"          <?php echo selected( 'Rifle', $arma['categoria'] ); ?>          style="background-color: rgba(230, 0, 23, 0.76); color:#e8eaf6">Rifle</option>
                <option value="Assault Rifle"  <?php echo selected( 'Assault Rifle', $arma['categoria'] ); ?>  style="background-color: rgba(230, 0, 23, 0.76); color:#e8eaf6">Assault Rifle</option>
            </select>
         </div>
        
          <div class="w3-container w3-fundoinput w3-hover-border-inputt p-3  mb-4  box ">
                <label class="form-label text-white">CALIBRE DA ARMA</label>
                <input class="w3-form-control w3-input w3-animate-input w3-colorinput w3-border-bottom w3-round-large" type="text" style="width: 85%;" name="calibre" id="calibre" placeholder="Digite calibre de origem da Arma" required value="<?= $arma['calibre'] ?>">
          </div>

          <div class="w3-container w3-fundoinput w3-hover-border-inputt p-3  mb-4  box ">
          <i class="fas fa-globe-americas"></i>
                <label class="form-label text-white">PAIS DE ORIGEM</label>
                <input class="w3-form-control w3-input w3-animate-input w3-colorinput w3-border-bottom w3-round-large" type="text" style="width: 85%;" name="pais" id="pais" placeholder="Digite Pais de origem da Arma" required value="<?= $arma['pais'] ?>">
          </div>
    
          </div>
          <div class="w3-center">
            <button type="submit" class="btn btn-dark btn-outline-success p-2 botao" style="width: 33%;"><i class="far fa-save"></i> Confirmar Edição </button>
          </span>

        </form>
      </div>
    </div>
  </div>
<?php
  include ("rodape.php")
?>

</body>
</html>

