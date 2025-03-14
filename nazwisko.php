<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .a{
        border: solid black 1px;
        padding: 5px;
        width: 125px;
    }
</style>
<body>
    <?php 
        $tekst = "Na karcie Wstawianie znajdują się galerie zawierające elementy, które zostały zaprojektowane tak, aby pasowały do ogólnego wyglądu dokumentu. Z tych galerii można wstawiać tabele, nagłówki, stopki, listy, strony tytułowe i inne bloki konstrukcyjne dokumentu.  Tworzone obrazy, wykresy lub diagramy również są dopasowywane do bieżącego wyglądu dokumentu. 
Formatowanie zaznaczonego tekstu w treści dokumentu można łatwo zmienić, wybierając wygląd zaznaczonego tekstu z galerii szybkich stylów na karcie Narzędzia główne. Można także sformatować tekst bezpośrednio, używając innych formantów na karcie Narzędzia główne. Większość formantów umożliwia zastosowanie wyglądu z bieżącego motywu lub bezpośrednio określonego formatu. 
Aby zmienić ogólny wygląd dokumentu, wybierz nowe elementy motywu na karcie Układ strony. Do zmieniania wyglądu elementów dostępnych w galerii szybkich stylów służy polecenie Zmień bieżący zestaw szybkich stylów.  Galeria motywów i galeria szybkich stylów oferują polecenia resetowania, dzięki którym zawsze można przywrócić oryginalny wygląd dokumentu określony w bieżącym szablonie. 
Na karcie Wstawianie znajdują się galerie zawierające elementy, które zostały zaprojektowane tak, aby pasowały do ogólnego wyglądu dokumentu. Z tych galerii można wstawiać tabele, nagłówki, stopki, listy, strony tytułowe i inne bloki konstrukcyjne dokumentu.  Tworzone obrazy, wykresy lub diagramy również są dopasowywane do bieżącego wyglądu dokumentu. 
Formatowanie zaznaczonego tekstu w treści dokumentu można łatwo zmienić, wybierając wygląd zaznaczonego tekstu z galerii szybkich stylów na karcie Narzędzia główne. Można także sformatować tekst bezpośrednio, używając innych formantów na karcie Narzędzia główne. Większość formantów umożliwia zastosowanie wyglądu z bieżącego motywu lub bezpośrednio określonego formatu.
";

        $strlen = strlen($tekst);
        $mbstrlen = mb_strlen($tekst);
        $wordcnt = explode(" ", $tekst);
        $wordcount2 = count($wordcnt);
        

        echo "Strlen: ". $strlen ."</br>" ."</br>";
        echo "mb_strlen: ". $mbstrlen ."</br>" ."</br>";
        echo "Liczba słów: ". $wordcount2 ."</br>" ."</br>";

        for($i = 0; $i < count($wordcnt); $i++){
            $dlugosc = strlen($wordcnt[$i]);
            if($dlugosc == 1){
                $wordcnt[$i] = "<b> JEDEN </b>  ";
            } 
        }

        $JEDEN = implode(" ",$wordcnt);
        echo $JEDEN."</br>" ."</br>";

        $exploded = explode(" ", $tekst);
        $ostatnie = array_pop($exploded);
        echo "Ostatnie słowo: ". $ostatnie."</br>" ."</br>";

        ?> <div class="a"> <?php
        for($i = 0; $i < count($wordcnt); $i++){
            echo $wordcnt[$i] ."</br>";
        }
        ?> </div> 
</body>
</html>