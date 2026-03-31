<?php foreach ($decks as $deck): ?>
    <div class="deck-card">
        <h3><?= $deck['title'] ?></h3>
        <p><?= $deck['description'] ?></p>
    </div>
<?php endforeach; ?>