<?php

function verifyUserLoginPassword(PDO $pdo, string $email, string $password): bool|array
{
    $query = $pdo->prepare("SELECT * FROM users WHERE email =:email");
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->execute();

    $user = $query->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        return $user;
    } else {
        return false;
        var_dump($user['password']);
    }
}


function verifyAdminLoginPassword(PDO $pdo, string $email, string $password): bool|array
{
    $query = $pdo->prepare("SELECT * FROM user_admin WHERE email =:email");
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->execute();

    $admin = $query->fetch(PDO::FETCH_ASSOC);

    if ($admin && password_verify($password, $admin['password'])) {
        return $admin;
    } else {
        return false;
    }
}



function getUser(PDO $pdo, $id): array
{
    $query = $pdo->prepare("SELECT users.*, staff.category as staff_category, staff.status as staff_status from `users`
JOIN staff ON staff.id = users.staff_id");
    $query->execute();

    return $query->fetchAll(PDO::FETCH_ASSOC);
}


function addUser(PDO $pdo, string $name, string $firstname, string $email, int $staff_id)
{
    $query = $pdo->prepare("INSERT INTO users (name, firstname, email, staff_id)
                            VALUES (:name, :firstname, :email, :staff_id)");
    $query->bindValue(':name', $name, PDO::PARAM_STR);
    $query->bindValue(':firstname', $firstname, PDO::PARAM_STR);
    $query->bindValue(':email', $email, PDO::PARAM_STR);

    $query->bindValue(':staff_id', $staff_id, PDO::PARAM_INT);


    $add = $query->execute();
}

function getStaff(PDO $pdo, $id): array
{
    $query = $pdo->prepare("SELECT * from `staff`");
    $query->execute();

    return $query->fetchAll(PDO::FETCH_ASSOC);
}
