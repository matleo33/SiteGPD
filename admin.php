<?php
include 'functions.php';
//Afficher tableau meilleurs joueurs
topDay();
topWeek();
topMonth();
topEver();
?>
<form method="post" action="disconnect.php">
    <input type="submit" value="disconnect">
</form>

<h2 style="text-align: center;">Features</h2>
<form class="col-sm-8 col-sm-offset-2" method="post" action="realisation.php">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="player">Player</label>
            <select id="player" class="form-control">
                <?php
                listPlayers();
                ?>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="inputState">Feature</label>
            <select id="feature" class="form-control">
                <?php
                listFeatures();
                ?>
            </select>
        </div>
        <div class="form-row">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>

    </div>
</form>
<?php
//Validation fonctionnalités
//Liste déroulante joueurs          A réalisé           Liste déroulante fonctionalités
?>
