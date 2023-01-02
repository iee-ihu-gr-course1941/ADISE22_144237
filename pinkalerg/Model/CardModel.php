<?php
require_once PROJECT_ROOT_PATH . "/Model/Database.php";
class CardModel extends Database
{
    // public function getUsers($limit)
    // {
    //     return $this->select("SELECT * FROM users ORDER BY user_id ASC LIMIT ?", ["i", $limit]);
    // }
    public function getCardById($cardId)
    {
        return $this->select("SELECT * FROM card WHERE id=?" , ["i", $cardId]);
    }
}