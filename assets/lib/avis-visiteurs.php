<?php

function getReviews(PDO $pdo): array
{
    $query = $pdo->prepare("SELECT * FROM avis_visiteurs ORDER BY id DESC");
    $query->execute();

    return $query->fetchAll(PDO::FETCH_ASSOC);
}




function saveReview(PDO $pdo, string $email, string $auteur, string $avis, int $id = null): int|bool
{
    if ($id) {
        //UPDATE
    } else {
        //INSERT
        $query = $pdo->prepare("INSERT INTO avis_visiteurs (email, auteur, avis) VALUES (:email, :auteur, :avis)");
    }

    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->bindValue(':auteur', $auteur, PDO::PARAM_STR);
    $query->bindValue(':avis', $avis, PDO::PARAM_STR);

    $res = $query->execute();
    if ($res) {
        if ($id) {
            return $id;
        } else {
            return $pdo->lastInsertId();
        }
    } else {
        return false;
    }
}

function validateReview(PDO $pdo, string $email, string $auteur, string $avis, int $id = null): int|bool
{
    if ($id) {
        //UPDATE
    } else {
        //INSERT
        $query = $pdo->prepare("INSERT INTO avis_valides (email, auteur, avis) VALUES (:email, :auteur, :avis)");
    }

    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->bindValue(':auteur', $auteur, PDO::PARAM_STR);
    $query->bindValue(':avis', $avis, PDO::PARAM_STR);

    $res = $query->execute();
    if ($res) {
        if ($id) {
            return $id;
        } else {
            return $pdo->lastInsertId();
        }
    } else {
        return false;
    }
}


function getApprovedReviews(PDO $pdo): array
{
    $query = $pdo->prepare("SELECT auteur, avis FROM avis_valides ORDER BY id DESC");
    $query->execute();

    return $query->fetchAll(PDO::FETCH_ASSOC);
}




function deleteReview(PDO $pdo, int $id): bool
{
    $query = $pdo->prepare('DELETE FROM avis_visiteurs WHERE id = :id');
    $query->bindValue(':id', $id, PDO::PARAM_INT);

    return $query->execute();
}



function getReviewById(PDO $pdo, $id)
{
    $query = $pdo->prepare('SELECT email, auteur, avis FROM avis_visiteurs WHERE id = :id');
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();

    return $query->fetch(PDO::FETCH_ASSOC);
}
