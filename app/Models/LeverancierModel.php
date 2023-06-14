<?php
    class LeverancierModel
    {
        private Database $Db;

        public function __construct(Database $db = new Database)
        {
            $this->Db = $db;
        }

        public function GetAllLeveranciers() : mixed
        {
            try
            {
                $getAllLeveranciersQuery = "CALL spGetLeveranciers()";
                $this->Db->query($getAllLeveranciersQuery);
                $resultLeverancier = $this->Db->resultSet();

                return $resultLeverancier ?? [];
            }
            catch(PDOException $ex)
            {
                echo($ex->getMessage());
                throw $ex;
            }
        }
    }
?>