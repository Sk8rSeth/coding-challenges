# Coding Challenge 01 - PHP Questions

## PHP - core language knowledge
How PHP removes unused objects?

- [x] PHP is a script language and there's no need to remove objects from memory - all objects will dead after finishing script.
- [x] By using Garbage Collection since version 5.3
- [ ] In PHP there is no GC and objects are not removed. From version 5.3 we have optimization reducing objects count.

## PHP - core language knowledge
How can you pass a local variable to an anonymous function?

- [x] We can pass any variable in parameter when executing function
- [ ] By using keyword "use", for example => $sum = function($a, $b) use ($localEngine) {};
- [ ] We can pass it as default parameter value, for example => $sum = function ($a, $b, $engine = $localEngine) {};

## Superglobals
Which of the following is a superglobal array?

- [ ] `$_GOT`
- [x] `$_ENV`
- [ ] `$_COOKIES`
- [ ] `$_POS`

## PHP - core language knowledge
Can you remove a loaded class and load it one more time?

- [ ] Yes, you just need to remove all objects of the class
- [ ] Yes, by using \__destruct function
- [x] No

## PHP - core language knowledge
What does the `session_set_save_handler()` function do in PHP?

- [x] Sets the user-level session storage functions which are used for storing and retrieving session data
- [ ] Creates a session or resumes the current one based on a session identifier passed via a GET or POST request
- [ ] Sets the name of the current session module
