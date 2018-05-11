<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function topDay() {
    ?>
    <div class="col-sm-4">
        <table>
            <?php
                for($i=0; $i<5; $i++)
                {
                    ?>
            <tr>
                <td>
                    <?php
                for($j=0; $j<5; $j++)
                {
                    ?>
                    d
                    <?php 
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
    <div class="col-sm-4">
        <table>
            <?php
                for($i=0; $i<5; $i++)
                {
                    ?>
            <tr>
                <td>
                    <?php
                for($j=0; $j<5; $j++)
                {
                    ?>
                    w
                    <?php 
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
    <div class="col-sm-4">
        <table>
            <?php
                for($i=0; $i<5; $i++)
                {
                    ?>
            <tr>
                <td>
                    <?php
                for($j=0; $j<5; $j++)
                {
                    ?>
                    m
                    <?php 
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
    <div class="col-sm-4">
        <table>
            <?php
                for($i=0; $i<5; $i++)
                {
                    ?>
            <tr>
                <td>
                    <?php
                for($j=0; $j<5; $j++)
                {
                    ?>
                    e
                    <?php 
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
