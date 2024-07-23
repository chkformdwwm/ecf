<?php


function getServices(PDO $pdo): array
{
    $query = $pdo->prepare("SELECT * FROM services_zoo ORDER BY id ASC");
    $query->execute();

    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function newService(PDO $pdo, string $name, string $description, string $photos)
{
    $query = $pdo->prepare("INSERT INTO services_zoo (name, description, photos)
                            VALUES (:name, :description, :photos)");
    $query->bindValue(':name', $name, PDO::PARAM_STR);
    $query->bindValue(':description', $description, PDO::PARAM_STR);
    $query->bindValue(':photos', $photos, PDO::PARAM_STR);


    $add = $query->execute();
}


function deleteService(PDO $pdo, int $id): bool
{
    $query = $pdo->prepare('DELETE FROM services_zoo WHERE id = :id');
    $query->bindValue(':id', $id, PDO::PARAM_INT);

    return $query->execute();
}


function updateService(PDO $pdo, string $name, string $description, string $photos, int $id)
{
    $query = $pdo->prepare("UPDATE services_zoo SET name = :name, description = :description, photos = :photos WHERE id = :id");
    $query->bindValue(':name', $name, PDO::PARAM_STR);
    $query->bindValue(':description', $description, PDO::PARAM_STR);
    $query->bindValue(':photos', $photos, PDO::PARAM_STR);
    $query->bindValue(':id', $id, PDO::PARAM_INT);

    $update = $query->execute();
}

function getServiceById(PDO $pdo, int $id): array|bool
{
    $query = $pdo->prepare('SELECT * FROM services_zoo WHERE id = :id');
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();

    return $query->fetch(PDO::FETCH_ASSOC);
}
