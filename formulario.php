<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<!-- action=a donde mandamos y method=que metodo utilizamos para enviar informacion -->
  <form action="sql2.php" method="post">
    <!--creamos una etiqueta de tipo select con un catalogo de las opciones que podemos
         almacenar en la variable global $_POST['query']-->
  <p><strong>query</stronh>: <select type="text" name="query" >
    <option value="Development">Development</option>
    <option value="Finance">Finance</option>
    <option value="Human Resources">Human Resources</option>
    <option value="Marketing">Marketing</option>
    <option value="Production">Production</option>
    <option value="Quality Management">Quality Management</option>
    <option value="Research">Research</option>
    <option value="Sales">Sales</option>
            </select>




  </p>

  <p><input type="submit" name="submit" value="Submit" /></p>
</form>
  </body>
</html>
