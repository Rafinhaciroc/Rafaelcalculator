<h2>Operadores logicos</h2>
<hr>

É utilizado para avaliar uma expressão formada 
por um conjunto de operadores lógicos.

<ul>
    <li>and | E </li>
    <li>or  | OU </li>
    <li>&&  | E </li>
    <li>||  | OU </li>
    <li>!   | Não </li>
    <li>xor | Ou exclusivos </li>
</ul>

<h3>Tabela Verdade - E </h3> 
<table border="i">
   <TR>
    <th colspan=3>Tabela do E</th>

   </TR>
    <tr>
        <td>V</td>
        <td>V</td>
        <td>V</td>
    </tr>
    <tr>
        <td>V</td>
        <td>F</td>
        <td>F</td>
    </tr>
    <tr>
        <td>F</td>
        <td>V</td>
        <td>F</td>
    </tr>
    <tr>
        <td>F</td>
        <td>F</td>
        <td>F</td>
    </tr>
   
</table>
<br>
<strong>Exemplo</strong>
    Murilo disse a Bruna que iria ao parque se: <br>
<ol>
    1) Domingo estivesse de sol;<br>
    2) Tivesse realizado todas as ativades do IF.
</ol>
<?php
    $condicao1 = true;
    $condicao2 = false;
    $acao_murilo =$condicao1 and $condicao2;
    var_dump($acao_murilo);

?>
<h3>Tabela Verdade - OU</h3> 
<table border="i">
   <TR>
    <th colspan=3>Tabela do OU</th>

   </TR>
    <tr>
        <td>V</td>
        <td>V</td>
        <td>V</td>
    </tr>
    <tr>
        <td>V</td>
        <td>F</td>
        <td>V</td>
    </tr>
    <tr>
        <td>F</td>
        <td>V</td>
        <td>V</td>
    </tr>
    <tr>
        <td>F</td>
        <td>F</td>
        <td>F</td>
    </tr>
   
</table>
<br>
<strong>Exemplo</strong>
    Murilo disse a Bruna que iria ao parque se: <br>
<ol>
    1) Domingo estivesse de sol;<br>
    2) Tivesse realizado todas as ativades do IF.
</ol>
<?php
    $condicao1 = true;
    $condicao2 = false;
    $acao_murilo =$condicao1 or $condicao2;
    var_dump($acao_murilo);

?>
<br>
<h3>Tabela Verdade - Não</h3> 
<table border="i">
   <TR>
    <th colspan=3>Tabela do Não</th>

   </TR>
    <tr>
        <td>V</td>
        <td>F</td>
     
    </tr>
    <tr>
        <td>F</td>
        <td>v</td>
    </tr>
    
</table>
<br>
<strong>Exemplo</strong>
    Murilo é um cara legal: <br>
<br>
<?php
    $condicao1 = true;
    $acao_murilo = !(!$condicao1);
    var_dump($acao_murilo);

?>