<?php

namespace app\model;

include 'app/_utils/Database.php';

use app\_utils\Database as Db;

class GuitarDao{

    public function getAllGuitars(){
        $conn = Db::getConnection();
        $statement = $conn->prepare("SELECT g.id, g.gyarto, g.tipus, g.kategoria_id, g.hurok_szama, g.ar, g.raktar_mennyiseg, g.allapot FROM gitarok as g INNER JOIN gitar_kategoriak as gk ON g.kategoria_id = gk.id");
        $statement->setFetchMode(\PDO::FETCH_OBJ);
        $statement->execute();
        return $statement->fetchAll();
    }


}




