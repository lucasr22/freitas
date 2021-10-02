<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>documento</title>
  <link rel=stylesheet href="/aulasfreita/style.css">
</head>

<body>

  
    <div>
    <div class="bor">
      <h1>formulario</h1>

      <form action="res_relatorio.php" method="POST">
        nome:<input type="text" name="nome" class="d-block">

        escolaridade<select name="escolaridade" id="cars" class="d-block">
          <option value="infantil">infantil</option>
          <option value="fundamental">fundamental</option>
          <option value="medio">medio</option>
          <option value="superior">superior</option>
        </select>
        <br>
        sexo:<br>
        <input type="radio" name="sexo" value="masculino">masculino<br>
        <input type="radio" name="sexo" value="fenimino">feminino</br>
        hobby:<br>
        <input type="checkbox" name="hobby[]" value="bike">bike<br>
        <input type="checkbox" name="hobby[]" value="carro">carro</br>
        <button type=" submit">enviar</button>
      </form>
    </div>
  </div>

</body>

</html>