<h2>Operadores Aritiméticos</h2>
<hr>

<p> 
    
    São utilizados para relaicar calculas matemáticos.

</p>

//tr => table row => Linha da tabela
//td => tabea data => dados da tabela 

<Table border="1" width="100%">
    <thead>
    
        <tr>
            <th>Operadores</th>
            <th>Descrição</th>
            <th>Exemplo</th>
        </tr>

    </thead> 
    
<tbody>
    
 
        <tr>
            <td>+</td>
            <td>Soma</td>
            <td>$soma= 10 + 5;</td>
        </tr>
        <tr>
            <td>-</td>
            <td>Substração;</td>
            <td>$sub = 10-5;</td>
        </tr>
        <tr>
            <td>/</td>
            <td>Divisão</td>
            <td>$div = 10 / 5;</td>
        </tr>
        <tr>
            <td>*</td>
            <td>Multiplicação</td>
            <td>$multi=10 * 5;</td>
        </tr>
        <tr>
            <td>%</td>
            <td>Resto da Dvisão</td>
            <td>$resto = 10 % 5;</td>
        </tr>
        <tr>
            <td>**</td>
            <td>Potênciação</td>
            <td>$pot = 10 ** 5;</td>
        </tr>
</tbody>
   
</Table>

<?php
    
    $soma= 10 + 5 ;
    $sub = 10 - 5 ;
    $div = 10 / 5 ;
    $multi = 10 * 5 ;
    $resto = 10 % 5 ;
    $pot = 10 ** 5 ;
    
    echo "Soma $soma <br>";
    echo "Substração $sub <br>";
    echo "Divisão $div <br>";
    echo "Multiplicação $multi <br>";
    echo "Resto $resto <br>";
    echo "Potênciação $pot <br>";

?>


