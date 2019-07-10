<?php
//http://www.oscarabadfolgueira.com/conectar-una-base-datos-mysql-desde-php/ referencia para la conexion a bases de datos desde PHP
//inicializamos las variables
$usuario = "root";
  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor = "localhost";
$basededatos = "employees";
//utilizamos la funcion mysqli_connect(servidor,usuario,contrasena) para abrir una nueva conexion con un servido MySql
$conexion = mysqli_connect( $servidor, $usuario, "" );
//utilizamos la funcion mysqli_select_db(conexion,basededatos)  par cambiar la base de datos:
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
//realizamos la consulta a la base de datos
//recuerda que $_POST['query'] es una variable predefinida que almacena la informacion de nuestro formulario
$consulta = "SELECT first_name,last_name,salary,hire_date
FROM current_dept_emp
INNER JOIN employees ON current_dept_emp.emp_no = employees.emp_no
INNER JOIN departments ON current_dept_emp.dept_no = departments.dept_no
INNER JOIN salaries ON current_dept_emp.emp_no = salaries.emp_no
WHERE salaries.to_date > CURDATE() AND dept_name = '{$_POST['query']}' LIMIT 20";


$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

echo "<style> table, tr, td {border: 1px solid black}         </style>"
echo "<table borde='5' >";
echo "<tr>";
echo "<th>first_name</th>";
echo "<th>last_name</th>";
echo "<th>salary</th>";
echo "<th>hire_date</th>";

echo "</tr>";

while ($columna = mysqli_fetch_array( $resultado ))
{
 echo "<tr>";
 echo "<td>" . $columna['first_name'] . "</td><td>" . $columna['last_name'] . "</td><td>" . $columna['salary'] . "</td><td>" . $columna['hire_date'] . "</td>";
 echo "</tr>";
}
echo "</table>";
?>
