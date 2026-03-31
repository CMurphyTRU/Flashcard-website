class Deck {
    public static function all() {
        global $conn;
        return mysqli_query($conn, "SELECT * FROM decks");
    }
}