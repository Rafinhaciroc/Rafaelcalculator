<h2>Vetor com índice textual</h2>
<pre>
            +--------+
    nome    |Notebook|
            +--------+
            +--------+
    nome    |Dell    |
            +--------+
            +--------+
    preco   |5.400   |
            +--------+
</pre>

<?php
    $produto = [
        "nome" => "Notebook",
        "marca" => "Dell",
        "preço" => "5.499.99"

    ];
    var_dump($produto);

    echo "<br>";
    echo $produto["nome"] . "<br>";
    echo $produto["marca"] . "<br>";
    echo $produto["preço"] . "<br>";
    //estrutura de repetiçao especifica
    //para percorrer vetores
    foreach($produto as $key => $value){
            echo $value . "</br>";
    }
?>