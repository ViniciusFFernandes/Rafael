<?php
 include 'cabecalho.php';
?>
     <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Presen&ccedil;a</label>
    <input type="aluno" class="form-control" id="exampleInputAluno" aria-describedby="emailHelp" placeholder="Digite o nome do Aluno">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">QRCode</label>
    <input type="qrcode" class="form-control" id="exampleInputQrcode" placeholder="QRcode de Presen&ccedil;a">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Aceito</label>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
 </form>

<?php
 include 'rodape.php';
?>