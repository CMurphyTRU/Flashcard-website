public function store() {
    $title = $_POST['title'];
    $description = $_POST['description'];

    Deck::create($title, $description);
    
    header("Location: /decks");
}