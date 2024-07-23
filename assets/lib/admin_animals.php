<?php



function getAnimalById(PDO $pdo)
{
    $query = $pdo->prepare('SELECT * FROM animaux');
    $query->execute();

    return $query->fetchAll(PDO::FETCH_ASSOC);
}


function newAnimal(PDO $pdo, string $nom, string $espece, string $espece_latin, string $description, string $photo_a, string $photo_b, string $photo_c, int $habitats_id)
{
    $query = $pdo->prepare("INSERT INTO animaux (nom, espece, espece_latin, description, photo_a, photo_b, photo_c, habitats_id)
                            VALUES (:nom, :espece, :espece_latin, :description, :photo_a, :photo_b, :photo_c, :habitats_id)");
    $query->bindValue(':nom', $nom, PDO::PARAM_STR);
    $query->bindValue(':espece', $espece, PDO::PARAM_STR);
    $query->bindValue(':espece_latin', $espece_latin, PDO::PARAM_STR);
    $query->bindValue(':description', $description, PDO::PARAM_STR);
    $query->bindValue(':photo_a', $photo_a, PDO::PARAM_STR);
    $query->bindValue(':photo_b', $photo_b, PDO::PARAM_STR);
    $query->bindValue(':photo_c', $photo_c, PDO::PARAM_STR);
    $query->bindValue(':habitats_id', $habitats_id, PDO::PARAM_INT);


    $add = $query->execute();
}



function getAnimalId(PDO $pdo, int $animal_id)
{
    $query = $pdo->prepare('SELECT avis_veto.*, animaux.nom as animaux_nom, animaux.espece as animaux_espece, animaux.espece_latin as animaux_espece_latin, animaux.photo_a as animaux_photo_a, animaux.photo_b as animaux_photo_b, animaux.photo_c as animaux_photo_c FROM `avis_veto`
JOIN animaux ON animaux.id = avis_veto.animal_id WHERE animal_id = :animal_id');
    $query->bindValue(':animal_id', $animal_id, PDO::PARAM_INT);
    $query->execute();

    return $query->fetch(PDO::FETCH_ASSOC);
}


function newVetVisit(PDO $pdo, string $etat_animal, string $nourriture, string $ration, string $passage, string $details_animal, int $animal_id)
{
    $query = $pdo->prepare("INSERT INTO avis_veto (etat_animal, nourriture, ration, passage, details_etat, animal_id)
                            VALUES (:etat_animal, :nourriture, :ration, :passage, :details_etat, :animal_id)");
    $query->bindValue(':etat_animal', $etat_animal, PDO::PARAM_STR);
    $query->bindValue(':nourriture', $nourriture, PDO::PARAM_STR);
    $query->bindValue(':ration', $ration, PDO::PARAM_STR);
    $query->bindValue(':passage', $passage, PDO::PARAM_STR);
    $query->bindValue(':details_etat', $details_animal, PDO::PARAM_STR);
    $query->bindValue(':animal_id', $animal_id, PDO::PARAM_INT);



    $add = $query->execute();
}


function getVisitedAnimal(PDO $pdo, int $id)
{
    $query = $pdo->prepare('SELECT * FROM animaux WHERE id = :id');
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();

    return $query->fetch(PDO::FETCH_ASSOC);
}



function updateAnimal(PDO $pdo, string $nom, string $espece, string $espece_latin, string $description, string $photo_a, string $photo_b, string $photo_c, int $id)
{
    $query = $pdo->prepare("UPDATE animaux SET nom = :nom, espece = :espece, espece_latin = :espece_latin, description = :description, photo_a = :photo_a, photo_b = :photo_b, photo_c = :photo_c WHERE id = :id");
    $query->bindValue(':nom', $nom, PDO::PARAM_STR);
    $query->bindValue(':espece', $espece, PDO::PARAM_STR);
    $query->bindValue(':espece_latin', $espece_latin, PDO::PARAM_STR);
    $query->bindValue(':description', $description, PDO::PARAM_STR);
    $query->bindValue(':photo_a', $photo_a, PDO::PARAM_STR);
    $query->bindValue(':photo_b', $photo_b, PDO::PARAM_STR);
    $query->bindValue(':photo_c', $photo_c, PDO::PARAM_STR);
    $query->bindValue(':id', $id, PDO::PARAM_INT);

    $update = $query->execute();
}


function deleteAnimal(PDO $pdo, int $id): bool
{
    $query = $pdo->prepare('DELETE FROM animaux WHERE id = :id');
    $query->bindValue(':id', $id, PDO::PARAM_INT);

    return $query->execute();
}

function addMeal(PDO $pdo, string $nourriture, string $quantite, string $date, string $heure, int $animal_id)
{
    $query = $pdo->prepare("INSERT INTO repas_animaux (nourriture, quantite, date, heure, animal_id)
                            VALUES (:nourriture, :quantite, :date, :heure, :animal_id)");
    $query->bindValue(':nourriture', $nourriture, PDO::PARAM_STR);
    $query->bindValue(':quantite', $quantite, PDO::PARAM_STR);
    $query->bindValue(':date', $date, PDO::PARAM_STR);
    $query->bindValue(':heure', $heure, PDO::PARAM_STR);
    $query->bindValue(':animal_id', $animal_id, PDO::PARAM_INT);



    $add = $query->execute();
}

function getAnimalMeal(PDO $pdo, int $animal_Id)
{
    $query = $pdo->prepare('SELECT repas_animaux.*, animaux.nom as animaux_nom, animaux.photo_c as animaux_photo_c, animaux.espece as animaux_espece, animaux.espece_latin as animaux_espece_latin from `repas_animaux`
JOIN animaux ON animaux.id = repas_animaux.animal_id WHERE animal_id = :animal_id;');
    $query->bindValue(':animal_id', $animal_Id, PDO::PARAM_INT);
    $query->execute();

    return $query->fetch(PDO::FETCH_ASSOC);
}


function getVetVisit(PDO $pdo, int $animal_id)
{
    $query = $pdo->prepare('SELECT avis_veto.*, animaux.nom as animaux_nom, animaux.espece as animaux_espece, animaux.espece_latin as animaux_espece_latin, animaux.photo_a as animaux_photo_a, animaux.photo_b as animaux_photo_b, animaux.photo_c as animaux_photo_c FROM `avis_veto`
JOIN animaux ON animaux.id = avis_veto.animal_id  WHERE animal_id = :animal_id ORDER BY passage DESC');
    $query->bindValue(':animal_id', $animal_id, PDO::PARAM_INT);
    $query->execute();

    return $query->fetch(PDO::FETCH_ASSOC);
}
