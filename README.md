# *Who Wants to Be a Millionaire?* in JavaScript

[![GitHub last commit](https://img.shields.io/github/last-commit/mistermantas/millionaire-js.svg?style=flat-square)](https://github.com/mistermantas/millionaire-js/commits/master)   [![Twitter](https://img.shields.io/twitter/follow/mistermantas.svg?style=social&label=Follow)](https://twitter.com/mistermantas)

Originally airing in 1998, this is the remake of the popularly acclaimed game show that had its 20 year anniversary in the UK in May of 2018. This project was forked and built off of the foundation that [Luke Wlodarczyk](https://github.com/LukeWlodarczyk/Who-Wants-to-Be-a-Millionaire) created and mainly features UI improvements as well as some back-end changes. The front-end for Fastest Finger First has also been implemented.

This project was originally worked on for a special English lesson at a local high school on July 11, 2018. It will no longer receive updates.

**[Play game](https://millionaire-school.netlify.com/#/game)**  
**[Try Fastest Finger First](https://millionaire-school.netlify.com/fastest-finger-first.html)**

## For hosts

The original doc used for the project's host is now [available](https://millionaire-school.netlify.com/hostguide.html) in a HTML file.

## Changes

* Cleaned up interface, moved next question button
* Made to fit [sli.do](https://sli.do) events in schools
* The Double Dip & Change Question lifelines have been hidden
* Added manual stop and restart clock buttons at bottom left
* Hidden start game dialog to appear on hover in top right
* Final answer gets progressively longer as you climb the money tree
* Removed best scores, implemented by [the original author](https://github.com/LukeWlodarczyk/Who-Wants-to-Be-a-Millionaire)
* Removed guaranteed winnings and current winnings
* Changed money tree to points tree and changed its value

## Caveats

* The clock shows `-1:-2` once it goes negative (the clock has 2 extra seconds so that the presenter has enough time to choose an option)
* Must refresh page after finishing one game session so that questions do not repeat
* Clicking twice on next question button breaks the game
* Changing money values changes final answer delay

## FAQ

### How do I open this game?

Download it and extract it. You will need an up to date browser like Firefox or Chrome. Windows 10 is recommended (because of the Unicode characters in the bottom left).

For Fastest Finger First, open the `fastest-finger-first.html` file and click on any of the numbers to start showing the question. There is no backend for handling who will come to play.

Once you are ready to play, click `index.html` and then go fullscreen `F11`. It is highly recommended to set up [sli.do](https://sli.do) for interactivity with your audience.

### How do I start a game?

The start game dialog will appear after hovering over the money tree in top right of the screen. Entering any character apart from `x` will use a custom API (which you will have to host yourself). So to start a game from the opentdb.com database, enter 'x' and start the game.

### Does the call lifeline actually call someone?

No, the icon is a bit misleading; it adds 60 seconds to the clock and changes the background music. It is supposed to let you ask for help from your friend in the audience (ala Plus One in the US show).

### How do I change the questions?

Find the `baseUrl` variable and change the URL to the API of your choice, which has the questions in the proper JSON format:

```json
{
   "response_code": 0,
   "results": [
      {
         "question": "What is the scientific name for modern day humans?",
         "correct_answer": "Homo Sapiens",
         "incorrect_answers": [
            "Homo Ergaster",
            "Homo Erectus",
            "Homo Neanderthalensis"
         ]
      }
   ]
}
```

For a good example of this, check out the [Open Trivia Database](https://opentdb.com/api.php?amount=1&category=9&difficulty=easy&type=multiple).

### What tech does this software use?

* React
* React Router
* Fetch

Originally also built with Sass, Webpack, and ES6, but this project only adds on top of the distributed code, not the source code.

## License

The game is licensed under MIT.

*© [Mantas Vilčinskas](https://github.com/mistermantas/millionaire-js) & [Łukasz Włodarczyk](https://github.com/LukeWlodarczyk/Who-Wants-to-Be-a-Millionaire), 2017-2018*
