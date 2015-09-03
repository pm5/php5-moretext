
php-moretext
============

Get dummy Chinese text (lorem ipsum) with [Handlino][] serivce.

[Handlino]: http://more.handlino.com/


Usage
-----

```
$moretext = new Moretext\Client();
foreach ($moretext->get(5, [20, 30]) as $sentence) {
    echo $sentence . "\n";
}
```

See <http://more.handlino.com/api> for the Handlino API.

TODO
----

Command-line tool:
```
$ moretext
$ moretext -n 11 --limit 29
```


License
-------

[MIT License](http://pm5.mit-license.org/)
