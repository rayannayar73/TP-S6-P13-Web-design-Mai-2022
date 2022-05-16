<?php
    function select($critere,$valeur){
        $Requete="SELECT * from blog where ".$critere."='".$valeur."'";
        $Requetequery=mysqli_query(dbconnect(),$Requete);
        $RequeteAssoc=mysqli_fetch_assoc($Requetequery);
        $result=$RequeteAssoc[$valiny];
        mysqli_free_result($Requetequery);
        return $result;
    }
    function inserer($args){
        $reqInsertion="INSERT INTO blog values($args)";
        $valiny=mysqli_query(dbconnect(),$reqInsertion);
    }
    function supprimer($critere,$args){
        $reqSuppression="DELETE FROM blog WHERE $critere='$args' ";
        $valiny=mysqli_query(dbconnect(),$reqSuppression);
    }
    function modifier($valeurs,$critere,$nom){
        $reqModification="UPDATE blog SET $valeurs WHERE $critere='$nom' ";
        $valiny=mysqli_query(dbconnect(),$reqModification);
    }
    function get($requ,$ind)
    {
        $resRequ = mysqli_query(dbconnect(), $requ );
        $result = array();
        $j=0;
        while ($valiny = mysqli_fetch_assoc($resRequ)) {
                $result[$j] = $valiny[$ind];
                $j++;
            }
        mysqli_free_result($resRequ);
        return $result;
    }
    
?>