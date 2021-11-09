# ExercicioOOP

# Shape.php
O ficheiro shape.php é o ficheiro principal e nele encontra-se a Class Shape,a classe base.

 A Class Shape é constituda na sua essência por : <br>
 $name - uma propriedade publica <br>
 $width e $lenght - propriedades protegidas <br>
 $id - propriedade privada <br>
 $x -constante 

<br> funcion __construct aceita as propriedades length e width como parametros e inicializa as respectivas propriedades do objeto e define a constante com o valor de 1

<br> funcion _get da propriedade id permite receber o valor da mesma

<br> function _set da propriedade id permite definir o valor da variavel constituida como propriedade privada

<br> function area é na classe Shape uma função abstrata que será definida de acordo com as especificidades de cada forma.

<br> function object retorna um novo objecto criado de acordo com as propriedades name, width, length, id da Class Shape


# Rectangle.php
O ficheiro Rectangle.php representa a Class Rectangle, uma extensão da Class Shape.

 <br> function __construct recebe da Class Shape as suas propriedades e altera o valor da constante para 2.
 
 <br> function area calcula e retorna a area da forma rectangulo com recurso às propriedades width e lenght.
 

# Circle.php

O ficheiro Circle.php representa a Class Circle, uma extensão da Class Shape.

<br>Class Circle é acrescentada uma propriedade protegida - $radius.

<br> function __construct recebe da Class Shape as suas propriedades, altera o valor da constante para 3 e inicializa a propriedade radius.
 
 <br> function area calcula e retorna a area da forma circulo com recurso ao radius e ao valor do PI.
 
 <br> function newObject retorna um novo objecto criado de acordo com as propriedades name, radius, id da Class Shape.
 
