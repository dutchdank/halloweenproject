<?php
require '../control/connect.php';

class task extends connect  
{
    public $voornaam;
    public $achternaam;
    public $straat;
    public $huisnummer;
    public $postcode;
    public $gemeente;
    public $telefoonnummer;

    /*function fetchAllTasks()                                                // function is called
    { 
        $statement = $this->pdo->prepare('select * from task');             // prepare SQL Query

        $statement->execute();                                              // execute prepared statement

        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }
    */
    function save($voornaam, $achternaam, $straat, $huisnummer, $postcode, $gemeente, $telefoonnummer) {
        // create prepared statement
        $sql = "INSERT INTO hallowinkel (voornaam, achternaam, straat, huisnummer, postcode, gemeente, telefoonnummer) VALUES (:voornaam, :achternaam, :straat,
                                        :huisnummer, :postcode, :gemeente, :telefoonnummer)";
        $stmt = $this->pdo->prepare($sql);
        
        // bind parameters to statement
            $stmt->bindParam(':voornaam', $voornaam);
            $stmt->bindParam(':achternaam', $achternaam);
            $stmt->bindParam(':straat', $straat);
            $stmt->bindParam(':huisnummer', $huisnummer);
            $stmt->bindParam(':postcode', $postcode);
            $stmt->bindParam(':gemeente', $gemeente);
            $stmt->bindParam(':telefoonnummer', $telefoonnummer);
        try {
        // execute the prepared statement
        $stmt->execute();
        // echo "Records inserted successfully.";
    } catch(PDOException $e){
        die("ERROR: Not able to execute $sql. " . $e->getMessage());
    }

}
}

