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
    
    public $vraag;
    public $visible;
    
    function saveq($vraag, $visible) {
        $sql = "INSERT INTO surveys (vraag, visible) VALUES (:vraag, :visible)";
        $stmt = $this->pdo->prepare($sql);
        
        $stmt->bindParam(':vraag', $vraag);
        $stmt->bindParam(':visible', $visible);
        
        try {
            $stmt->execute();
        } catch(PDOException $e) {
            die("ERROR: Not able to execute $sql. " . $e->getMessage());
        }
    }
    
    function inserted_id()
    {
        $stmt = $this->pdo->query('SELECT LAST_INSERT_ID() AS `id`;');
        $res = $stmt->fetch();
        
        return $res['id'];
    }
    
        function fetchAllTasks()                                                // function is called
    { 
        $statement = $this->pdo->prepare('SELECT * FROM hallowinkel ORDER BY straat ASC');             // prepare SQL Query

        $statement->execute();                                              // execute prepared statement

        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }
        function fetchAllQuestions() 
    {
        $statement = $this->pdo->prepare('SELECT * FROM surveys WHERE visible = 1');
        
        $statement->execute();
        
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
        function fetchAllQuestionsWithStatus() 
    {
        $statement = $this->pdo->prepare('SELECT * FROM surveys order by visible, vraag');
        
        $statement->execute();
        
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
        function changequestions($id, $waarde) 
        {
            if ($waarde == 1)
            {
                $waarde = 0;
            }
            else
            {
                $waarde = 1;
            }
            $sql = "UPDATE surveys SET visible=" . $waarde . " WHERE survey_id=" . $id;
            $stmt= $this->pdo->prepare($sql);
            $stmt->execute();
        }
}

