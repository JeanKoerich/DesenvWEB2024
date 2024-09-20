<?php

    $boletim = array(
        array("Disciplina" =>  "Matemática" , "Faltas" => "5" , "Média" => "8.5"),
        array("Disciplina" =>  "Português" , "Faltas" => "2" , "Média" => "9"),
        array("Disciplina" =>  "Geografia" , "Faltas" => "10" , "Média" => "6"),
        array("Disciplina" =>  "Educação Física" , "Faltas" => "2" , "Média" => "8")
    );

    echo "<table>
            <tr>
                <td>Disciplina<td>
                <td>Faltas<td>
                <td>Média<td>
            </tr>";

    foreach($boletim as $disciplina){
        echo "<tr>";
        foreach($disciplina as $chave => $valor){
            echo "<td>$valor<td>";
        }
        echo "</tr>";
    }
    echo "</table>"
?>