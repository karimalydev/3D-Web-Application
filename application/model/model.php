<?php
class Model
{
    public $dbhandle;

    public function __construct()
    {
        $dsn = 'sqlite:./db/database.db';

        try {
            $this->dbhandle = new PDO(
                $dsn,
                'karim',
                'password',
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => false,
                )
            );
            // $this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo 'Database connection created</br></br>';
        } catch (PDOEXception $e) {
            echo "can't connect to the database!";
            print new Exception($e->getMessage());
        }
    }

    public function dbCreateTable()
    {
        try {
            $this->dbhandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, x3dModelTitle TEXT, modelTitle TEXT, modelDescription TEXT)");
            return "Model_3D table is successfully created";
        } catch (PDOEXception $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }

    public function dbInsertData()
    {
        try {
            $this->dbhandle->exec(
                "INSERT INTO Model_3D (Id, x3dModelTitle, modelTitle, modelDescription) 
				VALUES (1, 'X3D Coke Model', 'Coca Cola Can', 'On May 8, 1886, Dr. John Pemberton brought his perfected syrup to Jacobs Pharmacy in downtown Atlanta where the first glass of Coca‑Cola was poured.  Serving about nine drinks per day in its first year, Coca‑Cola was an exciting new drink in the beginning.'); " .
                    "INSERT INTO Model_3D (Id, x3dModelTitle, modelTitle, modelDescription) 
				VALUES (2, 'X3D Dr Pepper Model', 'Dr Pepper Can', 'Dr Pepper is a carbonated soft drink. It was created in the 1880s by pharmacist Charles Alderton in Waco, Texas, and first served around 1885. Dr Pepper was first nationally marketed in the United States in 1904. It is now also sold in Europe, Asia, North and South America.'); " .
                    "INSERT INTO Model_3D (Id, x3dModelTitle, modelTitle, modelDescription) 
				VALUES (3, 'X3D Fanta Model', 'Fanta Can', 'Fanta is an orange soda drink. It was created in Germany in 1940. Fanta was created during World War II in Nazi Germany by the German Coca-Cola (GmbH) bottling company. Because of the war, there was no shipping between Nazi Germany and the United States.'); " .
                    "INSERT INTO Model_3D (Id, x3dModelTitle, modelTitle, modelDescription) 
				VALUES (4, 'X3D Fanta Blue Model', 'Fanta Blue Can', 'A FANTAstic and unique special edition flavour of Fanta. Although not a blue liquid, the blend of lemon and elderflower make this an enjoyable and thirst quenching soft drink, best served ice cold.'); "
            );
            return "X3D model data inserted successfully inside database.db";
        } catch (PDOEXception $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }

    public function dbGetData()
    {
        try {
            // Prepare a statement to get all records from the Model_3D table
            $sql = 'SELECT * FROM Model_3D';
            // Use PDO query() to query the database with the prepared SQL statement
            $stmt = $this->dbhandle->query($sql);
            // Set up an array to return the results to the view
            $result = null;
            // Set up a variable to index each row of the array
            $i = -0;
            // Use PDO fetch() to retrieve the results from the database using a while loop
            // Use a while loop to loop through the rows	
            while ($data = $stmt->fetch()) {
                // Don't worry about this, it's just a simple test to check we can output a value from the database in a while loop
                // echo '</br>' . $data['x3dModelTitle'];
                // Write the database conetnts to the results array for sending back to the view
                $result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
                $result[$i]['modelTitle'] = $data['modelTitle'];
                $result[$i]['modelDescription'] = $data['modelDescription'];
                //increment the row index
                $i++;
            }
        } catch (PDOEXception $e) {
            print new Exception($e->getMessage());
        }
        // Close the database connection
        $this->dbhandle = NULL;
        // Send the response back to the view
        return $result;
    }
}
