<?php

class Game {

    private $db;

    function __construct(Database $db){
        $this->db = $db;
    }

    public function getAllGames(): array
    {
         return $this->db->select("SELECT * FROM results");
    }

    public function getUserGames(string $username): array
    {
        return $this->db->select("SELECT * FROM results WHERE username = :username",
            ["username" => $username]);
    }

    public function getTopWinners(int $count): array
    {
        return $this->db->select("SELECT username, max(result) as max FROM results GROUP BY username ORDER BY max DESC LIMIT :limit",
            ['limit' => $count]);
    }

    public function getTopPlayers(int $count): array
    {
        return $this->db->select("SELECT username, count(*) as games FROM results GROUP BY username ORDER BY games DESC LIMIT :limit",
        ['limit' => $count]);
    }

    public function storeResult(string $username, float $result, string $ip) {

        return $this->db->insert("INSERT into results (username, result, ip) VALUES (:username, :result, :ip)",
            [
                'username' => $username,
                'result' => $result,
                'ip' => $ip
            ]);
    }
}