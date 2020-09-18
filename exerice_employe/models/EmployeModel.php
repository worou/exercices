<?php
require_once('./models/Employe.php');
require_once('./models/Driver.php');

class EmployeModel extends Driver{

    public function getEmployes(){
        $sql = "SELECT * FROM employe";
        $res = $this->getRequest($sql);
        $datas = $res->fetchAll(PDO::FETCH_OBJ);

        $employes = [];

        foreach($datas as $data){
            $employe = new Employe();
            $employe->setMatricule($data->matricule);
            $employe->setNom($data->nom);
            $employe->setPrenom($data->prenom);
            $employe->setAge($data->age);
            $employe->setAdresse($data->adresse);
            $employe->setSalaire($data->salaire);
            $employe->setDescription($data->description);
            $employe->date_created = $data->date_created;

            array_push($employes, $employe);

        }

        return $employes;



    }

    public function insertEmploye(Employe $emp){
        $sql ="INSERT INTO employe(nom,prenom,age,adresse,salaire,description)
                VALUES (:nom, :prenom, :age, :adresse, :salaire, :description)";
        $tabparams = ['nom'=>$emp->getNom(),'prenom'=>$emp->getPrenom(),'age'=>$emp->getAge(),'adresse'=>$emp->getAdresse(),'salaire'=>$emp->getSalaire(),'description'=>$emp->getDescription()];

        $res = $this->getRequest($sql,$tabparams);

        return $res;


    }

}