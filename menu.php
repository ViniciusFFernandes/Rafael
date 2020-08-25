<?php
    //
    //Define se deve voltar uma pasta no diretorio de arquivos
    $diretorioBase = "";
    if(basename($_SERVER['PHP_SELF']) != 'index.php'){
        $diretorioBase = "../";
    }
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-1 border border-secondary border-top-0 border-left-0 border-right-0 shadow-lg">
  <a class="navbar-brand" href="<?= $diretorioBase ?>index.php">Controle de Presença</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item  <?php if($menuActive == 'Home') echo "active"; ?> ">
        <a class="nav-link" href="<?= $diretorioBase ?>index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle <?php if($menuActive == 'Cadastro') echo "active"; ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cadastros
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= $diretorioBase ?>_Cadastros/alunos_edita.php">Aluno</a>
          <a class="dropdown-item" href="<?= $diretorioBase ?>_Cadastros/tipo_evento_edita.php">Tipo de Evento</a>
          <a class="dropdown-item" href="<?= $diretorioBase ?>_Cadastros/evento_edita.php">Evento</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle <?php if($menuActive == 'Relatorios') echo "active"; ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Relat&oacute;rios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= $diretorioBase ?>_Relatorios/rel_alunos_sel.php">Aluno</a>
          <a class="dropdown-item" href="<?= $diretorioBase ?>_Relatorios/rel_eventos_sel.php">Evento</a>
          <a class="dropdown-item" href="<?= $diretorioBase ?>_Relatorios/rel_presencas_sel.php">Presen&ccedil;a</a>
        </div>
      </li>
      <li class="nav-item  <?php if($menuActive == 'Validador') echo "active"; ?> ">
        <a class="nav-link" href="<?= $diretorioBase ?>validador.php">Validador <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
