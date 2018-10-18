<?php

// Headers
$headers = array();
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8';
$headers[] = 'Content-Type: application/json';

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');


// Questions
if($_GET['set'] == '1') {
  switch ($_GET['question']) {
    case 'one':
      echo('{"response_code":0,"results":[
        {"question":"What is the scientific name for modern day humans?",
         "correct_answer":"Homo Sapiens",
         "incorrect_answers": [
           "Homo Ergaster",
           "Homo Erectus",
           "Homo Neanderthalensis"
         ]}]}');
      break;
    ////////////
    case 'two':
      echo('{"response_code":0,"results":[
        {"question":"Which of the following regions is NOT a part of the United Kingdom?",
         "correct_answer":"The Isle of Man",
         "incorrect_answers": [
           "England",
           "Scotland",
           "Wales"
         ]}]}');
      break;
    ////////////
    case 'three':
      echo('{"response_code":0,"results":[
        {"question":"How many hours is the United Kingdom behind Lithuania?",
         "correct_answer":"2 hours",
         "incorrect_answers": [
           "5 hours",
           "3 hours",
           "4 hours"
         ]}]}');
      break;
    ////////////
    case 'four':
      echo('{"response_code":0,"results":[
        {"question":"Choose the correct tense, which the following sentence is using: “He told me Bill had been living in Paris.”",
         "correct_answer":"Past Perfect Continuous",
         "incorrect_answers": [
           "Past Perfect",
           "Past Simple",
           "Simple Continuous"
         ]}]}');
      break;
    ////////////
    case 'five':
      echo('{"response_code":0,"results":[
        {"question":"Typically what Northern American slang refers to the biceps?",
         "correct_answer":"Guns",
         "incorrect_answers": [
           "Elevators",
           "Large Boys",
           "My Friends"
         ]}]}');
      break;
    ////////////
    case 'six':
      echo('{"response_code":0,"results":[
        {"question":"What is the more common name for a “lexicon”?",
         "correct_answer":"Dictionary",
         "incorrect_answers": [
           "Prayers Book",
           "Autobiography",
           "Travel guide"
         ]}]}');
      break;
    ////////////
    case 'seven':
      echo('{"response_code":0,"results":[
        {"question":"Who made the first mobile phone in the United States?",
         "correct_answer":"Motorola",
         "incorrect_answers": [
           "Unbound Communications",
           "Exon",
           "Nokia"
         ]}]}');
      break;
    ////////////
    case 'eight':
      echo('{"response_code":0,"results":[
        {"question":"What does the word “renaissance” stand for?",
         "correct_answer":"Rebirth",
         "incorrect_answers": [
           "Truth",
           "Life",
           "Knowledge"
         ]}]}');
      break;
    ////////////
    case 'nine':
      echo('{"response_code":0,"results":[
        {"question":"The United States of America was founded on what date?",
         "correct_answer":"July 4, 1776",
         "incorrect_answers": [
           "March 20, 1776",
           "July 4, 1780",
           "July 4, 1767"
         ]}]}');
      break;
    ////////////
    case 'ten':
      echo('{"response_code":0,"results":[
        {"question":"Who wrote “Catcher in the Rye,” the 1951 novel about Houlden and his teenagehood problems?",
         "correct_answer":"J. D. Salinger",
         "incorrect_answers": [
           "Stephen King",
           "J. K. Rowling",
           "Ernest Hemingway"
         ]}]}');
      break;
    ////////////
    case 'eleven':
      echo('{"response_code":0,"results":[
        {"question":"Which of these abbreviations does NOT refer to a US state?",
         "correct_answer":"MK",
         "incorrect_answers": [
           "CA",
           "NY",
           "PA"
         ]}]}');
      break;
    ////////////
    case 'twelve':
      echo('{"response_code":0,"results":[
        {"question":"Which of the following is NOT a United States “Founding Father”?",
         "correct_answer":"Richard B. Morris",
         "incorrect_answers": [
           "Alexander Hamilton",
           "John Jay",
           "John Adams"
         ]}]}');
      break;
  }
};









if($_GET['set'] == '2') {
  switch ($_GET['question']) {
    case 'one':
      echo('{"response_code":0,"results":[
        {"question":"What is the largest city, by population, in Australia?",
         "correct_answer":"Sydney",
         "incorrect_answers": [
           "Calgary",
           "Edmonton",
           "Sunshine City"
         ]}]}');
      break;
    ////////////
    case 'two':
      echo('{"response_code":0,"results":[
        {"question":"What part of its body does a woodpecker use for pecking?",
         "correct_answer":"Beak",
         "incorrect_answers": [
           "Tail",
           "Wing",
           "Foot"
         ]}]}');
      break;
    ////////////
    case 'three':
      echo('{"response_code":0,"results":[
        {"question":"Which of the following is NOT a proper way to refer to a group of people grammatically?",
         "correct_answer":"Y’all",
         "incorrect_answers": [
           "Them",
           "They",
           "Those"
         ]}]}');
      break;
    ////////////
    case 'four':
      echo('{"response_code":0,"results":[
        {"question":"Who won Eurovision in 2015 with the Måns Zelmerlöw song entitled “Heroes”?",
         "correct_answer":"Sweden",
         "incorrect_answers": [
           "Lithuania",
           "Poland",
           "Estonia"
         ]}]}');
      break;
    ////////////
    case 'five':
      echo('{"response_code":0,"results":[
        {"question":"What is the first element on the periodic table?",
         "correct_answer":"Hydrogen (H)",
         "incorrect_answers": [
           "Coal (C)",
           "Oxygen (O)",
           "Calcium (Ca)"
         ]}]}');
      break;
    ////////////
    case 'six':
      echo('{"response_code":0,"results":[
        {"question":"What popular game’s name is derived from a Svahili word meaning “to build”?",
         "correct_answer":"Jenga",
         "incorrect_answers": [
           "Monopoly",
           "Scrabble",
           "Dominoes"
         ]}]}');
      break;
    ////////////
    case 'seven':
      echo('{"response_code":0,"results":[
        {"question":"English belongs to what Indo-European language family?",
         "correct_answer":"Germanic",
         "incorrect_answers": [
           "Romance",
           "Slavic",
           "Sitinic"
         ]}]}');
      break;
    ////////////
    case 'eight':
      echo('{"response_code":0,"results":[
        {"question":"What time zone is the United Kingdom NOT using?",
         "correct_answer":"Central",
         "incorrect_answers": [
           "British Summer Time",
           "Greenwich Mean Time",
           "Coordinated Universal Time"
         ]}]}');
      break;
    ////////////
    case 'nine':
      echo('{"response_code":0,"results":[
        {"question":"When did World War II end?",
         "correct_answer":"1945",
         "incorrect_answers": [
           "1944",
           "1946",
           "1939"
         ]}]}');
      break;
    ////////////
    case 'ten':
      echo('{"response_code":0,"results":[
        {"question":"As of 2018, what is the best-selling video game of all time?",
         "correct_answer":"Tetris",
         "incorrect_answers": [
           "Minecraft",
           "Fortnite",
           "Monopoly"
         ]}]}');
      break;
    ////////////
    case 'eleven':
      echo('{"response_code":0,"results":[
        {"question":"Who wrote “To Kill the Mockingbird”?",
         "correct_answer":"Harper Lee",
         "incorrect_answers": [
           "Stephanie Meyer",
           "Suzanne Collins",
           "Shakespeare"
         ]}]}');
      break;
    ////////////
    case 'twelve':
      echo('{"response_code":0,"results":[
        {"question":"Finish the quote from the 1937 John Steinbeck novel “Of Mice and Men”: “Maybe everyone in the whole damn world is” — what?",
         "correct_answer":"Scared of each other",
         "incorrect_answers": [
           "Full of mice",
           "Tired of everything",
           "Spinning ‘round and ‘round"
         ]}]}');
      break;
  }
};








if($_GET['set'] == '3') {
  switch ($_GET['question']) {
    case 'one':
      echo('{"response_code":0,"results":[
        {"question":"Which of the following was NOT a former capital of Lithuania?",
         "correct_answer":"Telšiai",
         "incorrect_answers": [
           "Kaunas",
           "Kernavė",
           "Trakai"
         ]}]}');
      break;
    ////////////
    case 'two':
      echo('{"response_code":0,"results":[
        {"question":"Which of these is a dwarf planet and is no longer considered a planet, alongside Earth, Mercury, Neptune, and others?",
         "correct_answer":"Pluto",
         "incorrect_answers": [
           "Mars",
           "Venus",
           "Uranus"
         ]}]}');
      break;
    ////////////
    case 'three':
      echo('{"response_code":0,"results":[
        {"question":"Russia is a — what?",
         "correct_answer":"Federation",
         "incorrect_answers": [
           "Democratic Republic",
           "Kingdom",
           "State of Anarchy"
         ]}]}');
      break;
    ////////////
    case 'four':
      echo('{"response_code":0,"results":[
        {"question":"Finish the common phrase (idiom): It’s not — what?",
         "correct_answer":"Rocket science",
         "incorrect_answers": [
           "Rock ‘n roll",
           "Something irrefutable",
           "A pine of pineapples on a map"
         ]}]}');
      break;
    ////////////
    case 'five':
      echo('{"response_code":0,"results":[
        {"question":"Which of these words is misspelled?",
         "correct_answer":"Conflagciation",
         "incorrect_answers": [
           "Confliction",
           "Configuration",
           "Contraction"
         ]}]}');
      break;
    ////////////
    case 'six':
      echo('{"response_code":0,"results":[
        {"question":"Commonly used in online discussions, what does the common abbreviation “IANAL” stand for?",
         "correct_answer":"I am not a lawyer",
         "incorrect_answers": [
           "I am not about lakes",
           "I am not agreesive, Luke",
           "I am not agreeing lately"
         ]}]}');
      break;
    ////////////
    case 'seven':
      echo('{"response_code":0,"results":[
        {"question":"Which of these is NOT a unit of measuring temperature?",
         "correct_answer":"Kevin",
         "incorrect_answers": [
           "Fahrenheit",
           "Celsius",
           "Kelvin"
         ]}]}');
      break;
    ////////////
    case 'eight':
      echo('{"response_code":0,"results":[
        {"question":"What time zone is Lithuania using (not counting daylight savings)?",
         "correct_answer":"GMT+2",
         "incorrect_answers": [
           "GMT",
           "GMT+1",
           "GMT+3"
         ]}]}');
      break;
    ////////////
    case 'nine':
      echo('{"response_code":0,"results":[
        {"question":"When did World War I end?",
         "correct_answer":"1918",
         "incorrect_answers": [
           "1914",
           "1915",
           "1916"
         ]}]}');
      break;
    ////////////
    case 'ten':
      echo('{"response_code":0,"results":[
        {"question":"When was YouTube founded?",
         "correct_answer":"February 14, 2005",
         "incorrect_answers": [
           "August 24, 2007",
           "August 29, 2004",
           "July 5, 2008"
         ]}]}');
      break;
    ////////////
    case 'eleven':
      echo('{"response_code":0,"results":[
        {"question":"How old is Dalia Grybauskaitė?",
         "correct_answer":"62",
         "incorrect_answers": [
           "52",
           "55",
           "58"
         ]}]}');
      break;
    ////////////
    case 'twelve':
      echo('{"response_code":0,"results":[
        {"question":"Vatican City borders only one other country. Which one is it?",
         "correct_answer":"Italy",
         "incorrect_answers": [
           "Spain",
           "Monaco",
           "Germany"
         ]}]}');
      break;
  }
};









if($_GET['set'] == '4') {
  switch ($_GET['question']) {
    case 'one':
      echo('{"response_code":0,"results":[
        {"question":"Typically in online discussions, what does “LMAO” stand for?",
         "correct_answer":"Laughing my ass off",
         "incorrect_answers": [
           "Scientific term to describe a state of ridiculousness",
           "Lambasting murals around Oakland",
           "Languishing mysteries about Oprah"
         ]}]}');
      break;
    ////////////
    case 'two':
      echo('{"response_code":0,"results":[
        {"question":"When is Halloween celebrated (in the United States)?",
         "correct_answer":"October 31st",
         "incorrect_answers": [
           "September 1st",
           "August 30th",
           "October 1st"
         ]}]}');
      break;
    ////////////
    case 'three':
      echo('{"response_code":0,"results":[
        {"question":"A gas giant is a giant planet composed mainly of hydrogen and helium. Which of these is NOT a gas giant?",
         "correct_answer":"Earth",
         "incorrect_answers": [
           "Uranus",
           "Neptune",
           "Jupiter"
         ]}]}');
      break;
    ////////////
    case 'four':
      echo('{"response_code":0,"results":[
        {"question":"What’s the largest country in the world, by geographic area?",
         "correct_answer":"Russia",
         "incorrect_answers": [
           "Canada",
           "United States",
           "Africa"
         ]}]}');
      break;
    ////////////
    case 'five':
      echo('{"response_code":0,"results":[
        {"question":"New Zealand is well known for one of its Northern Island cities. How should it be spelled?",
         "correct_answer":"Auckland",
         "incorrect_answers": [
           "Aukland",
           "Ookland",
           "Oakland"
         ]}]}');
      break;
    ////////////
    case 'six':
      echo('{"response_code":0,"results":[
        {"question":"Which artist was #1 on the charts of Billboard for the week of May 19th this year?",
         "correct_answer":"Post Malone",
         "incorrect_answers": [
           "P!nk",
           "Childish Gambino",
           "Drake"
         ]}]}');
      break;
    ////////////
    case 'seven':
      echo('{"response_code":0,"results":[
        {"question":"According to the International System of Units, what should electric current be measured in?",
         "correct_answer":"Amperes (A)",
         "incorrect_answers": [
           "Electrolytes (EL)",
           "Electrons (E)",
           "Milliamperes (mAh)"
         ]}]}');
      break;
    ////////////
    case 'eight':
      echo('{"response_code":0,"results":[
        {"question":"What is the capital of New York?",
         "correct_answer":"Albany",
         "incorrect_answers": [
           "New York City",
           "Rochester",
           "Buffalo"
         ]}]}');
      break;
    ////////////
    case 'nine':
      echo('{"response_code":0,"results":[
        {"question":"When was TAMO (aka “Tavo Mokykla”) created?",
         "correct_answer":"2011",
         "incorrect_answers": [
           "2010",
           "2012",
           "2013"
         ]}]}');
      break;
    ////////////
    case 'ten':
      echo('{"response_code":0,"results":[
        {"question":"Portugal borders only one other country. Which one is it?",
         "correct_answer":"Spain",
         "incorrect_answers": [
           "Italy",
           "Monaco",
           "Germany"
         ]}]}');
      break;
    ////////////
    case 'eleven':
      echo('{"response_code":0,"results":[
        {"question":"What was the original motto of Google?",
         "correct_answer":"Don’t be evil",
         "incorrect_answers": [
           "Do the right thing",
           "An app a day keeps the doctor away",
           "Embracing the temptation for information"
         ]}]}');
      break;
    ////////////
    case 'twelve':
      echo('{"response_code":0,"results":[
        {"question":"When was YouTube founded?",
         "correct_answer":"February 14, 2005",
         "incorrect_answers": [
           "August 24, 2007",
           "August 29, 2004",
           "July 5, 2008"
         ]}]}');
      break;
  }
};






if($_GET['set'] == '5') {
  switch ($_GET['question']) {
    case 'one':
      echo('{"response_code":0,"results":[
        {"question":"What does “LOL” stand for?",
         "correct_answer":"Laughing out loud",
         "incorrect_answers": [
           "A subtle way to critique this game",
           "A state of despair",
           "Laughing about Luke"
         ]}]}');
      break;
    ////////////
    case 'two':
      echo('{"response_code":0,"results":[
        {"question":"What is the capital of Estonia?",
         "correct_answer":"Tallinn",
         "incorrect_answers": [
           "Riga",
           "Warsaw",
           "Helsinki"
         ]}]}');
      break;
    ////////////
    case 'three':
      echo('{"response_code":0,"results":[
        {"question":"Who is the current Prime Minister of the United Kingdom?",
         "correct_answer":"Theresa May",
         "incorrect_answers": [
           "Jeremy Corbin",
           "Boris Johnson",
           "Nicola Sturgeon"
         ]}]}');
      break;
    ////////////
    case 'four':
      echo('{"response_code":0,"results":[
        {"question":"What’s the largest country in the world, by population?",
         "correct_answer":"China",
         "incorrect_answers": [
           "Canada",
           "United States",
           "Russia"
         ]}]}');
      break;
    ////////////
    case 'five':
      echo('{"response_code":0,"results":[
        {"question":"Which of these is NOT a programming language?",
         "correct_answer":"C Minus",
         "incorrect_answers": [
           "C Sharp",
           "C Plus Plus",
           "Java"
         ]}]}');
      break;
    ////////////
    case 'six':
      echo('{"response_code":0,"results":[
        {"question":"Which company sells the most amount of mobile devices and owns 22% of the smartphone marketshare worldwide?",
         "correct_answer":"Samsung",
         "incorrect_answers": [
           "Apple",
           "Huawei",
           "Oppo"
         ]}]}');
      break;
    ////////////
    case 'seven':
      echo('{"response_code":0,"results":[
        {"question":"In the popular animated TV series “Family Guy”, who is the talking dog?",
         "correct_answer":"Brian Griffin",
         "incorrect_answers": [
           "Chris Griffin",
           "Stewie Griffin",
           "Peter Griffin"
         ]}]}');
      break;
    ////////////
    case 'eight':
      echo('{"response_code":0,"results":[
        {"question":"Which of these places is the LEAST urban?",
         "correct_answer":"Nevarėnai",
         "incorrect_answers": [
           "Telšiai",
           "Klaipėda",
           "Vilnius"
         ]}]}');
      break;
    ////////////
    case 'nine':
      echo('{"response_code":0,"results":[
        {"question":"After the end of World War II, US president Winston Churchill reference Europe as being under — what?",
         "correct_answer":"Under an iron curtain",
         "incorrect_answers": [
           "Under pandemonium",
           "Under big trouble",
           "Under Soviet rule"
         ]}]}');
      break;
    ////////////
    case 'ten':
      echo('{"response_code":0,"results":[
        {"question":"In an CNBC interview from June 8th, what did Elon Musk say?",
         "correct_answer":"“I think I do have like an issue with, uh, time”",
         "incorrect_answers": [
           "“I think I have an issue with time”",
           "“I have time management issues”",
           "“I, uh, think I have to work differently for the Tesla 3”"
         ]}]}');
      break;
    ////////////
    case 'eleven':
      echo('{"response_code":0,"results":[
        {"question":"Which of these is NOT a former British colony?",
         "correct_answer":"The Netherlands",
         "incorrect_answers": [
           "Egypt",
           "Australia",
           "India"
         ]}]}');
      break;
    ////////////
    case 'twelve':
      echo('{"response_code":0,"results":[
        {"question":"Who is currently the White House Press Secretary (in the United States) under President Donald J. Trump?",
         "correct_answer":"Sarah Huckabee Sanders",
         "incorrect_answers": [
           "Sean Spicer",
           "Jay Carney",
           "Josh Earnest"
         ]}]}');
      break;
  }
};











if($_GET['set'] == '6') {
  switch ($_GET['question']) {
    case 'one':
      echo('{"response_code":0,"results":[
        {"question":"Which of these best describes what a “meme” is?",
         "correct_answer":"Internet culture phenomenon",
         "incorrect_answers": [
           "Tales of people’s lives",
           "Ancient folk stories",
           "Word pioneered by Mike Taylor in “Her”"
         ]}]}');
      break;
    ////////////
    case 'two':
      echo('{"response_code":0,"results":[
        {"question":"Which of these operating systems does not exist?",
         "correct_answer":"Windows 9",
         "incorrect_answers": [
           "Windows 10",
           "Windows 7",
           "Windows XP"
         ]}]}');
      break;
    ////////////
    case 'three':
      echo('{"response_code":0,"results":[
        {"question":"What is the newest line of products Apple has released to date?",
         "correct_answer":"Apple Homepod",
         "incorrect_answers": [
           "iPad",
           "Apple Watch",
           "Apple TV"
         ]}]}');
      break;
    ////////////
    case 'four':
      echo('{"response_code":0,"results":[
        {"question":"What’s the most radioactive fruit we regularly eat?",
         "correct_answer":"Banana",
         "incorrect_answers": [
           "Apple",
           "Pear",
           "Blueberries"
         ]}]}');
      break;
    ////////////
    case 'five':
      echo('{"response_code":0,"results":[
        {"question":"What is a samoyed?",
         "correct_answer":"Dog breed",
         "incorrect_answers": [
           "Cat breed",
           "Type of fish",
           "Greek word for dog"
         ]}]}');
      break;
    ////////////
    case 'six':
      echo('{"response_code":0,"results":[
        {"question":"What company sold the most amount of automobiles in 2016?",
         "correct_answer":"Toyota",
         "incorrect_answers": [
           "Volkswagen Group",
           "Hyundai",
           "General Motors"
         ]}]}');
      break;
    ////////////
    case 'seven':
      echo('{"response_code":0,"results":[
        {"question":"Which of these phrases has NEVER been used in the popular animated TV series “Rick and Morty”?",
         "correct_answer":"Rick it, please",
         "incorrect_answers": [
           "Get schwifty",
           "Wubba lubba dub dub",
           "PICKLE RICK"
         ]}]}');
      break;
    ////////////
    case 'eight':
      echo('{"response_code":0,"results":[
        {"question":"Since 2015, what has been the most valuable cosmetic and makeup brand in the world?",
         "correct_answer":"L’Oréal Paris",
         "incorrect_answers": [
           "Gillette",
           "L’Oréal",
           "Dove"
         ]}]}');
      break;
    ////////////
    case 'nine':
      echo('{"response_code":0,"results":[
        {"question":"Snapchat uses what kind of technology for its mobile apps?",
         "correct_answer":"Augmented reality (AR)",
         "incorrect_answers": [
           "Artifical intelligence (AI)",
           "Virtual reality (VR)",
           "None of these"
         ]}]}');
      break;
    ////////////
    case 'ten':
      echo('{"response_code":0,"results":[
        {"question":"In the United States, before the inception of Netflix, what service was usually used for watching movies, before its demise in 2013?",
         "correct_answer":"Blockbuster",
         "incorrect_answers": [
           "Hulu",
           "Monstervideo",
           "MovieRentals.com"
         ]}]}');
      break;
    ////////////
    case 'eleven':
      echo('{"response_code":0,"results":[
        {"question":"What spinoff of “Family Guy” was cancelled after 4 seasons?",
         "correct_answer":"The Cleveland Show",
         "incorrect_answers": [
           "American Dad!",
           "King of the Hill",
           "Sit Down and Shut Up"
         ]}]}');
      break;
    ////////////
    case 'twelve':
      echo('{"response_code":0,"results":[
        {"question":"Which of the following has never been the answer to a winning million dollar question on the US primetime version of “Millionaire”?",
         "correct_answer":"The Graphes of Wrath",
         "incorrect_answers": [
           "Richard Nixon",
           "Peru",
           "93 million"
         ]}]}');
      break;
  }
};


die();
