<!DOCTYPE html>
<html>

  <head>
        <meta charset = "UTF-8" / >
    <title> Exercicio 7 </title>
  </head>

<body>
      <h1> Este é um grande cabeçalho </h1>
      <h3> Este é um pequeno cabeçalho </h3>

       <p> Aqui eu coloquei um parágrafo com um texto aleatório,e a seguir<br /> vou 
inserir um formulário dentro de uma tabela. Além disso,aqui vai <br /> um link:<a href="http://icomp.ufam.edu.br">Instituto de Computação   </a> 
       </p>
<form action="imprimir.php" method="post">
 <table cellspacing="10">
<tr>
   <td>
    <label for="nome"> Seu Nome: </label>
   </td>
   <td align="left">
    <input id="nome" type="text" name="nome" required>
   </td>
</tr>
<tr>
   <td>
    <label for="sexo"> Seu Sexo: </label>
   </td>
   <td align="left">
<select name="sexo" id="sexo" required>
<option value="1">Masculino</option>
<option value="2">Femenino</option>
</select>
   </td>
</tr>
<tr>
   <td>
    <label for="comentario"> Seus <br /> Comentários: </label>
   </td>
   <td align="left">
    <textarea id="comentario" name="comentario" rows="10" cols="40" required> </textarea>
   </td>
</tr>
</table>
<br />
<input type="submit">
</form>        
</body>
