<?php

// Copyright © 2015 Pierre-Paul Paquin <ppp@salesfloor.net>
// This work is free. You can redistribute it and/or modify it under the
// terms of the Do What The Fuck You Want To Public License, Version 2,
// as published by Sam Hocevar. See the COPYING file for more details.

namespace UseThe;

use Composer\Script\Event;

$scold = <<<EOF
It appears you're trying to update the project dependencies.

        You're doing it wrong.

What you want to do is run `composer install`.

Not only is it safer (everyone working on the project will have the
same versions of all dependencies), it's also much faster.

Direct all complaints to ppp@salesfloor.net, and have a nice day.

EOF;

class Lockfile {
    static function Mmmkay(Event $event) {
        if(count($event->getArguments()) === 0) {
            echo $scold;
            exit(1);
        }
    }
}
