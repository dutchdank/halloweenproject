<?php
require '../control/connect.php';

date_default_timezone_set('Europe/Amsterdam');

$paymentid = date("d-m-Y H:i:s");

class task extends connect  
{
    public $voornaam;
    public $achternaam;
    public $straat;
    public $huisnummer;
    public $postcode;
    public $gemeente;
    public $telefoonnummer;
    public $enkelontbijt;
    public $dubbelontbijt;
    public $kinderontbijt;
    public $paymentid;
    public $email;
    public $afleveruur;

    /*function fetchAllTasks()                                                // function is called
    { 
    $statement = $this->pdo->prepare('select * from task');             // prepare SQL Query

    $statement->execute();                                              // execute prepared statement

    return $statement->fetchAll(PDO::FETCH_ASSOC);

    }
    */
    function save($voornaam, $achternaam, $straat, $huisnummer, $postcode, $gemeente, $telefoonnummer, $enkelontbijt, $dubbelontbijt, $kinderontbijt, $email, $paymentid, $afleveruur) {
        // create prepared statement
        $sql = "INSERT INTO hallowinkel (voornaam, achternaam, straat, huisnummer, postcode, gemeente, telefoonnummer, enkelontbijt, dubbelontbijt, kinderontbijt, email, paymentid, afleveruur) VALUES (:voornaam, :achternaam, :straat,
        :huisnummer, :postcode, :gemeente, :telefoonnummer, :enkelontbijt, :dubbelontbijt, :kinderontbijt, :email, :paymentid, :afleveruur)";
        $stmt = $this->pdo->prepare($sql);

        //    function email($email) 
        //    {
        //        mail($email, 'test', 'test body');
        //    }

        // bind parameters to statement
        $stmt->bindParam(':voornaam', $voornaam);
        $stmt->bindParam(':achternaam', $achternaam);
        $stmt->bindParam(':straat', $straat);
        $stmt->bindParam(':huisnummer', $huisnummer);
        $stmt->bindParam(':postcode', $postcode);
        $stmt->bindParam(':gemeente', $gemeente);
        $stmt->bindParam(':telefoonnummer', $telefoonnummer);
        $stmt->bindParam(':enkelontbijt', $enkelontbijt);
        $stmt->bindParam(':dubbelontbijt', $dubbelontbijt);
        $stmt->bindParam(':kinderontbijt', $kinderontbijt);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':paymentid', $paymentid);
        $stmt->bindParam(':afleveruur', $afleveruur);
        try {
            // execute the prepared statement
            $stmt->execute();
            // echo "Records inserted successfully.";
        } catch(PDOException $e){
            die("ERROR: Not able to execute $sql. " . $e->getMessage());
        }

    }
    
    function inserted_id()
    {
        $stmt = $this->pdo->query('SELECT LAST_INSERT_ID() AS `id`;');
        $res = $stmt->fetch();
        
        return $res['id'];
    }
}

