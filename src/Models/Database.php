<?php

namespace src\Models;

final class Database
{

    private $pdo;
    private $config;
    public function __construct()
    {
        $this->config = __DIR__ . "/../../config.php";
        require_once $this->config;

        try {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";";
            $this->pdo = new \PDO($dsn, DB_USER, DB_PWD);
        } catch (\PDOException $e) {
            throw new \Exception("Erreur de connexion à la BDD : " . $e->getMessage());
        }
    }

    public function getPDO()
    {
        return $this->pdo;
    }

    public function isDBInitialized()
    {
        $existant = $this->pdo->query('SHOW TABLES FROM ' . DB_NAME . ' LIKE \'users\'')->fetch();

        if ($existant !== false && $existant[0] ==  "films") {
            return true;
        } else {
            return false;
        }
    }

    public function initializeDB()
    {

        $i = 0;
        $existant = true;
        while ($existant) {
            $fichier = __DIR__ . "/../Migrations/migration" . $i . ".sql";
            if (file_exists($fichier)) {
                $sql = file_get_contents($fichier);

                $i++;

                try {
                    $this->pdo->query($sql);

                    $this->updateConfig();
                } catch (\PDOException $e) {
                    throw new \Exception("L'initialisation de la BDD a échoué : " . $e->getMessage());
                }
            } else {
                $existant = false;
            }
        }
    }

    private function updateConfig()
    {
        $newConfig = '<?php

    define("DB_HOST","' . DB_HOST . '");
    define("DB_NAME","' . DB_NAME . '");
    define("DB_USER","' . DB_USER . '");
    define("DB_PWD","' . DB_PWD . '");
    
    
    define("HOME_URL","' . HOME_URL . '");
    
    define("DB_INITIALIZED", TRUE);';

        $oldconfig = fopen($this->config, "w");
        fwrite($oldconfig, $newConfig);
        fclose($oldconfig);
    }
}
