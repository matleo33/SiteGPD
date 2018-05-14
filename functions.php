<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function topDay() {
    ?>
    <div class="col-sm-3">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Rank</th>
                    <th scope="col">Username</th>
                    <th scope="col">Score</th>
                    <th scope="col">Performed tasks</th>
                </tr>
            </thead>
            <?php
            for ($i = 0; $i < 5; $i++) {
                ?>
                <tr>
                    <th scope="row">
                        <?php
                        for ($j = 0; $j < 4; $j++) {
                            if ($j == 0) {
                                echo '#';
                                echo $i+1;
                            }
                            ?>
                        </th>
                        <?php if ($j != 0) {
                            ?>
                            <td>
                                <?php
                                if ($j == 1) {
                                    echo 'username';
                                }
                                if ($j == 2) {
                                    echo 'score';
                                }
                                if ($j == 3) {
                                    echo 'nb tasks performed';
                                }
                            }
                        }
                        ?>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
    <?php
}

function topWeek() {
    ?>
    <div class="col-sm-3">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Rank</th>
                    <th scope="col">Username</th>
                    <th scope="col">Score</th>
                    <th scope="col">Performed tasks</th>
                </tr>
            </thead>
            <?php
            for ($i = 0; $i < 5; $i++) {
                ?>
                <tr>
                    <th scope="row">
                        <?php
                        for ($j = 0; $j < 4; $j++) {
                            if ($j == 0) {
                                echo '#';
                                echo $i+1;
                            }
                            ?>
                        </th>
                        <?php if ($j != 0) {
                            ?>
                            <td>
                                <?php
                                if ($j == 1) {
                                    echo 'username';
                                }
                                if ($j == 2) {
                                    echo 'score';
                                }
                                if ($j == 3) {
                                    echo 'nb tasks performed';
                                }
                            }
                        }
                        ?>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
    <?php
}

function topMonth() {
   ?>
    <div class="col-sm-3">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Rank</th>
                    <th scope="col">Username</th>
                    <th scope="col">Score</th>
                    <th scope="col">Performed tasks</th>
                </tr>
            </thead>
            <?php
            for ($i = 0; $i < 5; $i++) {
                ?>
                <tr>
                    <th scope="row">
                        <?php
                        for ($j = 0; $j < 4; $j++) {
                            if ($j == 0) {
                                echo '#';
                                echo $i+1;
                            }
                            ?>
                        </th>
                        <?php if ($j != 0) {
                            ?>
                            <td>
                                <?php
                                if ($j == 1) {
                                    echo 'username';
                                }
                                if ($j == 2) {
                                    echo 'score';
                                }
                                if ($j == 3) {
                                    echo 'nb tasks performed';
                                }
                            }
                        }
                        ?>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
    <?php
}

function topEver() {
    ?>
    <div class="col-sm-3">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Rank</th>
                    <th scope="col">Username</th>
                    <th scope="col">Score</th>
                    <th scope="col">Performed tasks</th>
                </tr>
            </thead>
            <?php
            for ($i = 0; $i < 5; $i++) {
                ?>
                <tr>
                    <th scope="row">
                        <?php
                        for ($j = 0; $j < 4; $j++) {
                            if ($j == 0) {
                                echo '#';
                                echo $i+1;
                            }
                            ?>
                        </th>
                        <?php if ($j != 0) {
                            ?>
                            <td>
                                <?php
                                if ($j == 1) {
                                    echo 'username';
                                }
                                if ($j == 2) {
                                    echo 'score';
                                }
                                if ($j == 3) {
                                    echo 'nb tasks performed';
                                }
                            }
                        }
                        ?>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
    <?php
}

function listPlayers() {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=sitegpd;charset=utf8', 'root', '');
        $query = 'SELECT * FROM users where username!=\'admin\'';
        $donnees = $bdd->query($query);
        while ($reponse = $donnees->fetch()) {
            ?> 
            <option value="<?php echo $reponse['id'] ?>"> <?php echo $reponse['username'] ?> </option>
            <?php
        }
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

function listFeatures() {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=sitegpd;charset=utf8', 'root', '');
        $query = 'SELECT * FROM features';
        $donnees = $bdd->query($query);
        while ($reponse = $donnees->fetch()) {
            ?> 
            <option value="<?php echo $reponse['id'] ?>" > <?php echo $reponse['name']; ?> - <?php echo $reponse['reward']; ?> </option>
            <?php
        }
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}
