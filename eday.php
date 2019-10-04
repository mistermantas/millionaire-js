<?php

// Headers
$headers = array();
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8';
$headers[] = 'Content-Type: application/json';

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');


// Questions
if($_GET['set'] == '1') {
  switch ($_GET['question']) {
    case 'one':
      echo('{"response_code":0,"results":[
        {"question":"How would one say goodbye in Spanish?",
         "correct_answer":"Adios",
         "incorrect_answers": [
           "Hola",
           "Salir",
           "Au Revoir"
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
        {"question":"English belongs to what Indo-European language family?",
         "correct_answer":"Germanic",
         "incorrect_answers": [
           "Romance",
           "Slavic",
           "Sitinic"
         ]}]}');
      break;
    ////////////
    case 'four':
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
    case 'five':
      echo('{"response_code":0,"results":[
        {"question":"What does the British slang “tosh” stand for?",
         "correct_answer":"Nonsense",
         "incorrect_answers": [
           "Dishes",
           "Dough",
           "Purse"
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
        {"question":"What is the capital of Estonia?",
         "correct_answer":"Talinn",
         "incorrect_answers": [
           "Riga",
           "Vilnius",
           "Helsinki"
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
        {"question":"What was the first country to recognize Lithuania’s independence?",
         "correct_answer":"Iceland",
         "incorrect_answers": [
           "Sweden",
           "Russia",
           "United States"
         ]}]}');
      break;
    ////////////
    case 'ten':
      echo('{"response_code":0,"results":[
        {"question":"How many languages has the European Union designated by agreement with the member states as “official and working”?",
         "correct_answer":"24",
         "incorrect_answers": [
           "8",
           "12",
           "18"
         ]}]}');
      break;
    ////////////
    case 'eleven':
      echo('{"response_code":0,"results":[
        {"question":"Which famous theologian founded Protestantism?",
         "correct_answer":"Martin Luther",
         "incorrect_answers": [
           "Voltear",
           "Adolf Hitler",
           "Ignatius Loyola"
         ]}]}');
      break;
    ////////////
    case 'twelve':
      echo('{"response_code":0,"results":[
        {"question":"Poisson d’Avril is the French equivalent of what day?",
         "correct_answer":"April Fools",
         "incorrect_answers": [
           "Good Friday",
           "Christmas Eve",
           "Thanksgiving"
         ]}]}');
      break;
  }
};









if($_GET['set'] == '2') {
  switch ($_GET['question']) {
    case 'one':
      echo('{"response_code":0,"results":[
        {"question":"What is the word for “hello” in German?",
         "correct_answer":"Hallo",
         "incorrect_answers": [
           "Tschess",
           "Auf Wiedersehen",
           "Bonjour"
         ]}]}');
      break;
    ////////////
    case 'two':
      echo('{"response_code":0,"results":[
        {"question":"What is the most widely translated book in the world?",
         "correct_answer":"The Bible",
         "incorrect_answers": [
           "Don Quixote",
           "Hamlet",
           "The Great Gatsby"
         ]}]}');
      break;
    ////////////
    case 'three':
      echo('{"response_code":0,"results":[
        {"question":"Which of the following countries is the smallest in the world?",
         "correct_answer":"Vatican City",
         "incorrect_answers": [
           "Cyprus",
           "Luxembourg",
           "Singapore"
         ]}]}');
      break;
    ////////////
    case 'four':
      echo('{"response_code":0,"results":[
        {"question":"Who won Eurovision in 2015 with the Mans Zelmerlow song entitled “Heroes”?",
         "correct_answer":"Sweden",
         "incorrect_answers": [
           "France",
           "Poland",
           "Estonia"
         ]}]}');
      break;
    ////////////
    case 'five':
      echo('{"response_code":0,"results":[
        {"question":"Which of these countries do NOT touch the Alps?",
         "correct_answer":"Poland",
         "incorrect_answers": [
           "Italy",
           "France",
           "Switzerland"
         ]}]}');
      break;
    ////////////
    case 'six':
      echo('{"response_code":0,"results":[
        {"question":"How many people in the world speak English?",
         "correct_answer":"Around 480 million",
         "incorrect_answers": [
           "Around 100 million",
           "Around 260 million",
           "Around a billion"
         ]}]}');
      break;
    ////////////
    case 'seven':
      echo('{"response_code":0,"results":[
        {"question":"1.	Which country won football World Cup 2018?",
         "correct_answer":"France",
         "incorrect_answers": [
           "Croatia",
           "Germany",
           "Mexico"
         ]}]}');
      break;
    ////////////
    case 'eight':
      echo('{"response_code":0,"results":[
        {"question":"What time zone is the United Kingdom has NEVER used?",
         "correct_answer":"Central European Time (CET)",
         "incorrect_answers": [
           "British Summer Time (BST)",
           "Greenwich Mean Time (GMT)",
           "Coordinated Universal Time (UTC)"
         ]}]}');
      break;
    ////////////
    case 'nine':
      echo('{"response_code":0,"results":[
        {"question":"Which of the following is the longest river in Europe?",
         "correct_answer":"Volga River",
         "incorrect_answers": [
           "Shannon River",
           "Tagus River",
           "Rhone River"
         ]}]}');
      break;
    ////////////
    case 'ten':
      echo('{"response_code":0,"results":[
        {"question":"Where was the croissant invented?",
         "correct_answer":"Austria",
         "incorrect_answers": [
           "Switzeland",
           "France",
           "Norway"
         ]}]}');
      break;
    ////////////
    case 'eleven':
      echo('{"response_code":0,"results":[
        {"question":"What are Switzerland’s official, national languages?",
         "correct_answer":"German, Italian, French, Romansh",
         "incorrect_answers": [
           "Italian, German, French, Dutch",
           "German, French, Bavarian, English",
           "French, English, German, Dutch"
         ]}]}');
      break;
    ////////////
    case 'twelve':
      echo('{"response_code":0,"results":[
        {"question":"What popular game’s name is derived from a Svahili word meaning “to build”?",
         "correct_answer":"Jenga",
         "incorrect_answers": [
           "Monopoly",
           "Scrabble",
           "Dominoes"
         ]}]}');
      break;
  }
};








if($_GET['set'] == '3') {
  switch ($_GET['question']) {
    case 'one':
      echo('{"response_code":0,"results":[
        {"question":"What countries consist of the Baltics?",
         "correct_answer":"Lithuania, Estonia, Latvia",
         "incorrect_answers": [
           "Finland, Sweden, Belgium",
           "Estonia, Lithuania, Russia",
           "Belgium, Bulgaria, Lithuania"
         ]}]}');
      break;
    ////////////
    case 'two':
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
    case 'three':
     echo('{"response_code":0,"results":[
       {"question":"Which country is world-renowned for chocolate with a major chocolate manufacturing center and more than 2,000 chocolate shops?",
        "correct_answer":"Belgium",
        "incorrect_answers": [
          "Lithuania",
          "Estonia",
          "Russia"
        ]}]}');
      break;
    ////////////
    case 'four':
      echo('{"response_code":0,"results":[
        {"question":"What is the capital of Lithuania?",
         "correct_answer":"Vilnius",
         "incorrect_answers": [
           "Helsinki",
           "Talinn",
           "Kaunas"
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
        {"question":"Commonly used in online discussions, what does the common abbreviation “IMHO” stand for?",
         "correct_answer":"In my honest opinion",
         "incorrect_answers": [
           "In my honorable opinion",
           "In my honor, Oliver",
           "In my house, oh!"
         ]}]}');
      break;
    ////////////
    case 'seven':
      echo('{"response_code":0,"results":[
        {"question":"Which country joined the European Union in 2007?",
         "correct_answer":"Bulgaria",
         "incorrect_answers": [
           "Sweden",
           "Norway",
           "Latvia"
         ]}]}');
      break;
    ////////////
    case 'eight':
      echo('{"response_code":0,"results":[
        {"question":"How many languages are spoken around the world?",
         "correct_answer":"Over 7,000",
         "incorrect_answers": [
           "2,000 ",
           "1,506",
           "Over 50,000"
         ]}]}');
      break;
    ////////////
    case 'nine':
      echo('{"response_code":0,"results":[
        {"question":"What does the German idiom “Ich verstehe nur Bahnhof” mean when not translated literally? If literally: “I only understand the train station.”",
         "correct_answer":"I don’t understand a thing about what that person is saying.",
         "incorrect_answers": [
           "I don’t understand a thing about what that person is saying.",
           "I can only be accustomed to few things.",
           "I don’t understand a thing about what I am saying."
         ]}]}');
      break;
    ////////////
    case 'ten':
      echo('{"response_code":0,"results":[
        {"question":"Which of the following European cities is NOT a national capital?",
         "correct_answer":"Zurich",
         "incorrect_answers": [
           "Minsk",
           "San Marino",
           "Vaduz"
         ]}]}');
      break;
    ////////////
    case 'eleven':
      echo('{"response_code":0,"results":[
        {"question":"Before its current name, the European Union was named — what?",
         "correct_answer":"European Coal and Steel Community",
         "incorrect_answers": [
           "European Common Goods Market",
           "United European Nations",
           "None of these"
         ]}]}');
      break;
    ////////////
    case 'twelve':
      echo('{"response_code":0,"results":[
        {"question":"Which of the following was NOT a former capital of Lithuania?",
         "correct_answer":"Telsiai",
         "incorrect_answers": [
           "Kaunas",
           "Kernave",
           "Trakai"
         ]}]}');
      break;
  }
};









if($_GET['set'] == '4') {
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
        {"question":"When is Halloween celebrated?",
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
        {"question":"European citizens can freely travel from countries like France to Belgium. This area of free travel has a name, what is it?",
         "correct_answer":"The Schengen Area",
         "incorrect_answers": [
           "EU Free Travel Area",
           "European Economical Prosperity Union",
           "EU Free Market Zone"
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
        {"question":"In 2017, the UK decided to leave the European Union in a referendum. What were the results of the vote?",
          "correct_answer":"Remain ~ 52%; Leave ~ 48%",
         "incorrect_answers": [
           "Remain ~ 85%; Leave ~ 14%",
           "Remain ~ 62%; Leave ~ 38%",
           "Remain ~ 42%; Leave ~ 58%"
         ]}]}');
      break;
    ////////////
    case 'six':
      echo('{"response_code":0,"results":[
        {"question":"Estonia borders only 2 other countries. Which ones are they?",
         "correct_answer":"Latvia, Russia",
         "incorrect_answers": [
           "Lithuania, Latvia",
           "Russia, Lithuania",
           "Finland, Latvia"
         ]}]}');
      break;
    ////////////
    case 'seven':
      echo('{"response_code":0,"results":[
        {"question":"In 2017, the UK decided to leave the European Union in a referendum. What were the results of the vote?",
          "correct_answer":"Remain ~ 52%; Leave ~ 48%",
         "incorrect_answers": [
           "Remain ~ 85%; Leave ~ 14%",
           "Remain ~ 62%; Leave ~ 38%",
           "Remain ~ 42%; Leave ~ 58%"
         ]}]}');
      break;
    ////////////
    case 'eight':
      echo('{"response_code":0,"results":[
        {"question":"Which of the following is a Germanic language?",
         "correct_answer":"Afrikaans",
         "incorrect_answers": [
           "Flemish",
           "Dutch",
           "Luxembourgish"
         ]}]}');
      break;
    ////////////
    case 'nine':
      echo('{"response_code":0,"results":[
        {"question":"How old is the former President of Lithuania, Dalia Grybauskaite?",
         "correct_answer":"63",
         "incorrect_answers": [
           "52",
           "55",
           "58"
         ]}]}');
      break;
    ////////////
    case 'ten':
      echo('{"response_code":0,"results":[
        {"question":"Estonia borders only 2 other countries. Which ones are they?",
         "correct_answer":"Latvia, Russia",
         "incorrect_answers": [
           "Lithuania, Latvia",
           "Russia, Lithuania",
           "Finland, Latvia"
         ]}]}');
      break;
    ////////////
    case 'eleven':
      echo('{"response_code":0,"results":[
        {"question":"What is the motto of the European Union?",
         "correct_answer":"United in diversity",
         "incorrect_answers": [
           "Don’t be evil",
           "United in coal and steel",
           "Embracing diversity in unison"
         ]}]}');
      break;
    ////////////
    case 'twelve':
      echo('{"response_code":0,"results":[
        {"question":"After the end of World War II, what president referencedd Europe as being under an iron curtain?",
         "correct_answer":"Winston Churchill",
         "incorrect_answers": [
           "Thomas Edison",
           "Franklin D. Roosevelt",
           "Harry S. Truman"
         ]}]}');
      break;
  }
};






if($_GET['set'] == '5') {
  switch ($_GET['question']) {
    case 'one':
      echo('{"response_code":0,"results":[
        {"question":"What does “ASAP” stand for?",
         "correct_answer":"As soon as possible",
         "incorrect_answers": [
           "As soon as prelevant",
           "As soon as prepared",
           "As simple as possible"
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
        {"question":"Good. Now, what is the largest country in Europe (not counting Russia) in order of geographical area?",
         "correct_answer":"Ukraine",
         "incorrect_answers": [
           "France",
           "Spain",
           "Sweden"
         ]}]}');
      break;
    ////////////
    case 'six':
      echo('{"response_code":0,"results":[
        {"question":"The Chernobyl disaster took place where?",
         "correct_answer":"Pripyat, Russia",
         "incorrect_answers": [
           "Alytus, Russia",
           "Vitebsk, Russia",
           "Grodno, Belarus"
         ]}]}');
      break;
    ////////////
    case 'seven':
      echo('{"response_code":0,"results":[
        {"question":"Who is a lexicographer?",
         "correct_answer":"A person who writes word definitions",
         "incorrect_answers": [
           "A person who discusses the meaning of words",
           "A person who teaches grammar in university",
           "A person who writes the rules of grammar"
         ]}]}');
      break;
    ////////////
    case 'eight':
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
    case 'nine':
      echo('{"response_code":0,"results":[
        {"question":"The motto of the European Union here is translated. What language is it?  “MagÄ§quda fid-diversitĆ .”",
         "correct_answer":"Maltese",
         "incorrect_answers": [
           "Polish",
           "Latvian",
           "Romanian"
         ]}]}');
      break;
    ////////////
    case 'ten':
      echo('{"response_code":0,"results":[
        {"question":"What does a funambulist walk on?",
         "correct_answer": "A Tight Rope",
         "incorrect_answers": [
           "Fire",
           "False hopes and expectations",
           "Daggers"
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
       {"question":"Finish the quote to “The Little Prince”, a French book by Antoine de Saint-ExupĆ©ry, “It is only with the heart that one can see rightly...",
        "correct_answer":"...what is essential is invisible to the eye.”",
        "incorrect_answers": [
          "...the friends we make do not change that.”",
          "...the soul-wrenching responsibility never ends.”",
          "...what is essentially invisible to the eye.”"
        ]}]}');
      break;
  }
};

// After breaking multiple times, we shall
// prepare for the Lithuanian ritual of...
die();
