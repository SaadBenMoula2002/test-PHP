<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Saad BenMoula</title>
    <link rel="stylesheet" href="./Saad-Ben-moula.css">
</head>
<body>
    <?php 
//___________________________________________________________________________
    function afficher($table)
    {
        echo "<h3>Tableau principal</h3>";
        echo "<table>";
        foreach ($table as $key => $value){
            echo "<tr>";
            echo  "<td>",$key,"</td>";
            echo  "<td>",$value,"</td>";
        }
        echo "</table>";
    }
//___________________________________________________________________________

    function ajouter(array $table, string $key, int $value)
    {
       $table[$key] = $value;
    }
//___________________________________________________________________________
    function meilleur($table)
    {
        $tab = [];
        foreach($table as $key => $value)
        {
            array_push($tab, $value);
        }
        echo "<h3>l'élève qui a eu la meilleur note est : </h3>","<span>",array_search(max($tab), $table),"</span>","<br>";
    }
//____________________________________________________________________________
    function nul($table)
    {
        $tab = [];
        foreach($table as $key => $value)
        {
            array_push($tab, $value);
        }
        $M = min($tab);
        foreach($table as $key => $value)
        {
            if ($value == $M) {
                echo "<h3>l'élève qui a eu la note la plus bas est : </h3>","<span>",$key,"</span>","<br>";
            }
        }
    }
//____________________________________________________________________________
    function triparnom($table)
    {
        ksort($table);
        echo "<h3>le tableau trier par ordre de mérite :</h3>";
        echo "<table>";
        foreach ($table as $key => $value){
            echo "<tr>";
            echo  "<td>",$key,"</td>";
            echo  "<td>",$value,"</td>";
        }
        echo "</table>";
        // OU
        /*$tab =[] ;
        foreach($table as $key => $value)
        {
            array_push($tab, $key);
        }
        sort($tab);
        echo "<h3>le tableau trier par ordre alphabétique :</h3>";
        foreach($tab as $value)
        {
            echo $value," : ",$table[$value],"<br>";
        }
        */
    }
//____________________________________________________________________________
    function triparmerite($table)
    {
        arsort($table);
        echo "<h3>le tableau trier par ordre de mérite :</h3>";
        echo "<table>";
        foreach ($table as $key => $value){
            echo "<tr>";
            echo  "<td>",$key,"</td>";
            echo  "<td>",$value,"</td>";
        }
        echo "</table>";
        
    }
//____________________________________________________________________________
function moyenne($table)
{
    echo "<h3>la Moyenne de la classe est :</h3>";
    $note = 0;
    foreach($table as $key => $value)
    {
        $note += $value;
    }
    echo "<span>",$note/count($table),"</span>";
    echo "<br>";
    
}
//____________________________________________________________________________
        $notes_apprenants = [
            "Mohamed" => 16,
            "Ahmed" => 14,
            "Rafika" => 13,
            "Aicha" => 15,
            "Samir" => 13,
            "Samar" => 13,
            "Rafik" => 10,
            "Samiha" => 9,
            "Fourat" => 7,
            "Sami" => 7,
            "Noura" => 14
            ];

    $notes_apprenants["Naim"] = 10;
    $notes_apprenants["Naima"] = 12;
    $notes_apprenants["Nsib"] = 10 ;
    ajouter($notes_apprenants, 'naima', 15);
    afficher($notes_apprenants);

    triparnom($notes_apprenants);
    triparmerite($notes_apprenants);
    
    
    
    moyenne($notes_apprenants);
    echo(meilleur($notes_apprenants));
    echo(nul($notes_apprenants));

    
    ?>
</body>
</html>
