# ExercicioOOP

O ficheiro shape.php é o ficheiro principal e nele encontra-se a Class Shape,a classe base.

 A Class Shape é constituda na sua essência por 
 $name - uma propriedade publica 
 $width e $lenght - propriedades protegidas
 $id - propriedade privada 
 $x -constante 

A funcion __construct aceita as propriedades length e width como parametros e inicializa as respectivas propriedades do objeto e define a constante com o valor de 1

A funcion _get da propriedade id permite receber o valor da mesma

A function _set da propriedade id permite definir o valor da variavel constituida como propriedade privada

A function area é na classe Shape uma função abstrata que será definida de acordo com as especificidades de cada forma.

A function object retorna um novo objecto criado de acordo com as propriedades name, width, length, id da Class Shape


O ficheiro Rectangle.php representa a Class Rectangle, uma extensão da Class Shape.

 A function __construct recebe da Class Shape as suas propriedades e altera o valor da constante para 2.
 
 A function area calcula e retorna a area da forma rectangulo com recurso às propriedades width e lenght.
 

O ficheiro Circle.php representa a Class Circle, uma extensão da Class Shape.

À Class Circle é acrescentada uma propriedade protegida - $radius.

 A function __construct recebe da Class Shape as suas propriedades, altera o valor da constante para 3 e inicializa a propriedade radius.
 
 A function area calcula e retorna a area da forma circulo com recurso ao radius e ao valor do PI.
 
 A function newObject retorna um novo objecto criado de acordo com as propriedades name, radius, id da Class Shape.
 
