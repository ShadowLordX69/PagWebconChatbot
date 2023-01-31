<?php
include "Bot.php";

$bot = new Bot;
$questions = [
    //inicio de pregunta
    "quisiera hacer una pregunta?" => "cuanta dura  su proyecto",
    "hola quisiera una tasacion?" =>  "cuanta dura  su proyecto",
    "me podria hacer una tasacion de un proyecto?" =>  "cuanta dura  su proyecto",
    "quisiera hacer una pregunta" =>  "cuanta dura  su proyecto",
    "hola quisiera una tasacion" => "cuanta dura  su proyecto",
    "me podria hacer una tasacion de un proyecto" =>  "cuanta dura  su proyecto",
    //Duracion del proyecto
    "3 meses" =>"se plantea un total de 1000 soles como inversion sin contar gastos de instalacion de servicios.",
    "6 meses" =>"se plantea un total de 3000 soles como inversion sin contar gastos de instalacion de servicios.",
    "9 meses" =>"se plantea un total de 6000 soles como inversion sin contar gastos de instalacion de servicios.",
    "1 año" =>"se plantea un total de 9000 soles como inversion sin contar gastos de instalacion de servicios.",
    "2 año" =>"se plantea un total de 18000 soles como inversion sin contar gastos de instalacion de servicios.",
    "3 año" =>"se plantea un total de 27000 soles como inversion sin contar gastos de instalacion de servicios.",
    //mas informacion
    "y con los servicios cuanto seria" =>"un coste estimado seria 10000 soles",
    //name
    "como te llamas?" =>"Soy ChatBot y estoy para servirte",
    "cual es tu nombre?" =>"Soy ChatBot y estoy para servirte",
    "tienes nombre?" =>"Soy ChatBot y estoy para servirte",


    //saludo
    "hola" =>"Hola que tal!",
    "un saludo" =>"como te va",
    "hello" =>"un gusto de verte",
 
    //despedida
    "adios" =>"cuidate",
    "gracias" =>"cuidate",
    "muchas gracias" =>"cuidate",
    "hasta la proxima" =>"nos vemos pronto",
    "nos vemos" =>"te estare esperando",
    "bye" =>"Good bye ♥",
    "see you" =>"see you lader ♥",
    //
    "what is your name?" =>" my name is " . $bot->getName(),
   


    "tu nombre es?" => "Mi nombre es " . $bot->getName(),
    "tu eres?" => "Yo soy un " . $bot->getGender()
    
];

if (isset($_GET['msg'])) {
   
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hi' || $msg == "hello") {
            $botty->reply('Hola');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Lo siento, Las preguntas deben estar relacionadas con el servicio de tasacion.");
        } else {
            $botty->reply($botty->ask($msg,$questions));
        }
    });
}
