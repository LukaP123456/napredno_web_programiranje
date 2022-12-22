<?php
require "config.php";
require "db_config.php";

class  InsertMailsClass
{

    public static function insertMails($pdo, $ip_address, $country_code, $subject, $to, $cc, $bcc, $is_html, $text, $file, $status)
    {
        $sql = "INSERT INTO mails(ip_address, country_code, subject, `to`, cc, bcc, is_html, text, file, status, date_time)
        VALUES (:ip_address, :country_code, :subject, :to, :cc, :bcc, :is_html, :text, :file, :status, NOW())";
        $query = $pdo->prepare($sql);

        // Bind the parameters using the execute() method
        $query->execute([
            ':ip_address' => $ip_address,
            ':country_code' => $country_code,
            ':subject' => $subject,
            ':to' => $to,
            ':cc' => $cc,
            ':bcc' => $bcc,
            ':is_html' => $is_html,
            ':text' => $text,
            ':file' => $file,
            ':status' => $status,
        ]);
    }

    public static function insertErrors($pdo,$message)
    {
        $sql = "INSERT INTO errors(id_mail, message, date_time)
        VALUES (LAST_INSERT_ID(),:message,NOW())";
        $query = $pdo->prepare($sql);

        // Bind the parameters using the execute() method
        $query->execute([
            ':message' => $message,
        ]);
    }


}