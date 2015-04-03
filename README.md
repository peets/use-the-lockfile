# Use the lockfile, mmmkay?

## The Problem

Sometimes it's hard to get a team working on a PHP project to run

    composer install

instead of

    composer update

## Enforce The Solution

Let's break the argument-less update command by running a pre-update
script that crashes with a non-zero exit status.

  1. Include this project as a dependency:

	  "repositories": [{
          "type": "git",
          "url": "git@github.com:peets/use-the-lockfile"
      }],
      "require-dev": {
          "peets/use-the-lockfile": "0.1.0"
      }

  2. Hook the crashing script on pre-update:

      "scripts": {
          "pre-update-cmd": [
              "UseThe\\Lockfile::Mmmkay"
          ]
      }
