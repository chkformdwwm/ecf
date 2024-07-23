<?php


function getHabitats(PDO $pdo): array
{
    $query = $pdo->prepare("SELECT * FROM habitats ORDER BY id ASC");
    $query->execute();

    return $query->fetchAll(PDO::FETCH_ASSOC);
}


function newHabitat(PDO $pdo, string $name, string $description, string $photos)
{
    $query = $pdo->prepare("INSERT INTO habitats (name, description, photos)
                            VALUES (:name, :description, :photos)");
    $query->bindValue(':name', $name, PDO::PARAM_STR);
    $query->bindValue(':description', $description, PDO::PARAM_STR);
    $query->bindValue(':photos', $photos, PDO::PARAM_STR);


    $add = $query->execute();
}


function modifyHabitat(PDO $pdo, string $name, string $description, string $photos, int $id = null): int|bool
{
    $query = $pdo->prepare("UPDATE habitats SET name = :name, description = :description, photos = :photos WHERE id = :id");
    $query->bindValue(':id', $id, PDO::PARAM_INT);

    $query->bindValue(':name', $name, PDO::PARAM_STR);
    $query->bindValue(':description', $description, PDO::PARAM_STR);
    $query->bindValue(':photos', $photos, PDO::PARAM_BOOL);

    return $query->execute();
}


function getHabitatById(PDO $pdo, int $id): array|bool
{
    $query = $pdo->prepare('SELECT * FROM habitats WHERE id = :id');
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();

    return $query->fetch(PDO::FETCH_ASSOC);
}

function updateHabitat(PDO $pdo, string $name, string $description, string $photos, int $id)
{
    $query = $pdo->prepare("UPDATE habitats SET name = :name, description = :description, photos = :photos WHERE id = :id");
    $query->bindValue(':name', $name, PDO::PARAM_STR);
    $query->bindValue(':description', $description, PDO::PARAM_STR);
    $query->bindValue(':photos', $photos, PDO::PARAM_STR);
    $query->bindValue(':id', $id, PDO::PARAM_INT);

    $update = $query->execute();
}
