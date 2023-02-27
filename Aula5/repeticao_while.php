<style>
    div{
        border: 1px solid #000;
    }

    .container {
        display:grid;
        grid-template-rows:auto auto ;
        grid-template-columns:auto auto auto auto auto;
    }
</style>



<h2>Estrutura de repetição while</h2>
<p>
    Utilizada para repetir uma sequencia de
    instruções, emquanto uma condição for verdadeira.
</p>

<p>
    <pre>
       while(condição){
        //instruçõesa serem repetidas
       }
    </pre>
</p>

<div class="container">
<?php
    
        $tabuada = 1;
        while($tabuada <=10){
        echo "<div>";
   
        $contador = 0;
        while($contador <=10){
        echo "$tabuada x $contador = " . $contador * $tabuada . "<br>" ;
        $contador++;
    
    }
    echo "</div>";
    $tabuada++;
}
?>
</div>
