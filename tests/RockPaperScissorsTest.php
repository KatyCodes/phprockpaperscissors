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

        function test_paper_rock_player1()
        {
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "Paper";
            $second_input = "Rock";

            $result = $test_RockPaperScissors->playGame($first_input, $second_input);

            $this->assertEquals("Player 1", $result);
        }

        function test_paper_rock_player2()
        {
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "Rock";
            $second_input = "Paper";

            $result = $test_RockPaperScissors->playGame($first_input, $second_input);

            $this->assertEquals("Player 2", $result);
        }

        function test_scissors_paper_player1()
        {
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "Scissors";
            $second_input = "Paper";

            $result = $test_RockPaperScissors->playGame($first_input, $second_input);

            $this->assertEquals("Player 1", $result);
        }

        function test_scissors_paper_player2()
        {
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "Paper";
            $second_input = "Scissors";

            $result = $test_RockPaperScissors->playGame($first_input, $second_input);

            $this->assertEquals("Player 2", $result);
        }

        function test_draw()
        {
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "Paper";
            $second_input = "Paper";

            $result = $test_RockPaperScissors->playGame($first_input, $second_input);

            $this->assertEquals("Draw", $result);
        }


    }

?>
