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



<h2>Estrutura de repetição for</h2>
<p>
    Utilizada para repetir uma sequencia de
    instrução um numero predeterminado de vezes.
</p>

<p>
    <pre>
        for(inicio; condição; passo) {
            //instruções a serem repetidas
        }
    </pre>
</p>

<div class="container">
<?php
    for($tabuada = 1; $tabuada <= 10; $tabuada++){
        echo "<div>";
    for($contador = 0; $contador < 11; $contador++){
    echo "$tabuada x $contador = " . $contador * $tabuada . "<br>" ;
    
    }
    echo "</div>";
}
?>
</div>
