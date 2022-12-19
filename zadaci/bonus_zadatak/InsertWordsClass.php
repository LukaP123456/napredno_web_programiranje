<?php

class  InsertWordsClass
{

    public static function insert($insert_word, $pdo): void
    {
        $sql = "INSERT INTO words (word) VALUE (:word)";

        $query = $pdo->prepare($sql);
        $query->bindParam(':word', $insert_word, PDO::PARAM_STR);
        $query->execute();
    }

    public static function select($pdo): bool
    {
        $sql = "SELECT * FROM words";

        $query = $pdo->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ); // PDO::FETCH_ASSOC
        if (empty($results)) {
            return true;
        }
        return false;
    }

    public static function findWordId($pdo,$closest)
    {
        $sql = "SELECT id_word FROM words WHERE word=:word";

        $query = $pdo->prepare($sql);
        $query->bindParam(':word', $closest, PDO::PARAM_STR);

        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC
        return $results[0]['id_word'];
    }

    public static function result($pdo, $input, $distance,$word_id)
    {
        $sql = "INSERT INTO results (id_word,input,distance,date_time) VALUES (:id_word,:input,:distance,now())";

        $query = $pdo->prepare($sql);
        $query->bindParam(':id_word', $word_id, PDO::PARAM_INT);
        $query->bindParam(':input', $input, PDO::PARAM_STR);
        $query->bindParam(':distance', $distance, PDO::PARAM_INT);
        $query->execute();
    }


}