<?php

    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {

        function test_rock_scissors_player1()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "Rock";
            $second_input = "Scissors";

            //Act
            $result = $test_RockPaperScissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 1", $result);
        }

        function test_rock_scissors_player2()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "Scissors";
            $second_input = "Rock";

            //Act
            $result = $test_RockPaperScissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player 2", $result);
        }


    }

?>
