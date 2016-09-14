<?php

    class RockPaperScissors
    {

        function playGame($player1, $player2)
        {
            if (($player1 == "Rock" && $player2 == "Scissors")  || ($player1 == "Paper" && $player2 == "Rock") || ($player1 == "Scissors" && $player2 == "Paper")) {
                return "Player 1";
            } elseif (($player1 == "Scissors" && $player2 == "Rock") || ($player1 == "Rock" && $player2 == "Paper") || ($player2 == "Scissors" && $player1 == "Paper")) {
                return "Player 2";
            } else {
                return "Draw";
            }

        }

    }

?>
