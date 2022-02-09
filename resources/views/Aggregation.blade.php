
<?php
    while($agg->hasnext()) {
        $voitureNext = $agg->next();

        echo "[ ". get_class($voitureNext) ." ]   ";

        echo $voitureNext->object;
        echo "  :  ";
        echo $voitureNext->prix;
        echo "</br>";
    }

?>
