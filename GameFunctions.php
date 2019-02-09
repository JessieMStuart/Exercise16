<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Define all functinos
  function Computer() {
    $random = rand(0,2);
    
    $options=["Rock", "Paper", "Scissors"];
 
    
    return $compchoice=$options[$random];
}
 
 
function winner($first, $second){
    if($first==$second) {
        echo "It is a draw!";
    } elseif(ucfirst($first)=="Rock") {
        if($second=="Paper") {
            echo "The computer is the winner!";
        } elseif($second=="Scissors") {
            echo "You are the winner!";}
    } elseif(ucfirst($first)=="Paper") {
           if($second=="Rock") {
               echo "You are the winner!";
           } elseif($second=="Scissors") {
               echo "The computer is the winner!";}
    } elseif(ucfirst($first)=="Scissors") {
        if($second=="Rock") {
            echo "The computer is the winner!";
        } elseif($second=="Paper") {
            echo "You are the winner!";}
    } else {
    echo "You did not chose a valid option!";}}
    
    
 //Create a function to generate the users choice
function userchoice(){
    echo "Please enter your choice, either Rock, Paper or Scissors \n";
    return stream_get_line(STDIN, 100, "\n");
}


//Get the user_choice variable from incoming HTTP Request



//Play the game
//
//Get user choice
$userChoice = $_REQUEST["choice"];
echo "You chose $userChoice <br>";

//Get the computer to pick one
$Computer=Computer();
echo "The computer chose"." ".$Computer." <br>";

//Find the winner
echo winner($userChoice, $Computer)."<br>";

echo "To play again, click another option...";

