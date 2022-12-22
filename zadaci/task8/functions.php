<?php

/**
 * @param int $day
 * @param int $month
 * @return array
 */
function dynamicHolidays(int $day, int $month,PDO $pdo): array
{
    $sql = "SELECT * FROM holidays WHERE day=:day AND month=:month";
    $query = $pdo->prepare($sql);
    $query->bindParam(':day', $day, PDO::PARAM_STR);
    $query->bindParam(':month', $month, PDO::PARAM_STR);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}