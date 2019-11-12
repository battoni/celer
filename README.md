# CELER

## Fast. Simple. That's it!

The following key points will help you understand how to work with this boilerplate:

- The goal is to load only the very essential files per page
- If something can be reused, then it must become a component to be shared between pages (this can be a section, function, CSS or JS)
- Don't be afraid to create new files for a page. Import as many CSS you want. Everything will become a single file in the end. The same is valid for partials and components. JS files are already unified in a single file since these kinds of projects do not use that much JS.
- If you are a skilled experience developer, some things here will appear to be stupid and odd. Remember that the goal with this is to keep it very easy to work with and to learn. All kinds of developers come to work with us. We want a standard way that everyone can code. The top-level of this stack will build this code into something really fast and simple to maintain. Just trust us and code away!
- Use the "Go To File" shortcut on your editor (Ctrl + P on sublime). Every file has a prefix for a reason. For example, if you are working on the index page, hit Ctrl + P, type 'index_' and voilá - you will have all CSS, JS and partials files to select and navigate on.
- Try to understand the little defaults implemented on this project. Check how CSS classes are named, JS functions are named, files are created and the code is formatted. Follow the structure that is already implemented and you will be good to go in no time. We are not using any kind of linters at this time, so we are counting on you to follow the standard that was settled.
- Each page will have a handler to load all necessary files of that page

    For example, check out the index.php file. You will see that the specific code is coming from `_index.php`. The `_` indicates that this is a handler and will just center requests to inner files.

    Inside of `_index.php`, you will find the sections that combined will render the Index page. The idea here is making everything easier to debug and work with. Several developers can work on the same page without having a single conflict since all sections are pretty much independent. The same concept is being applied to the whole project.

    Let's check how the CSS for that page is loaded. Go to `head_stylesheets.php`. This is the main file that loads the CSS the whole project. The specific CSS of a given page can be found on its handler. Remember `_index.php`? Of course, we have an `_index.css` where all CSS will be loaded. If you need to add a new CSS file for a new section, here is where you are going to import the file. Or if you need to add a new CSS component file to your page, here is the place for. Got the idea right?

    And what about JS files? This is even easier! If the method you need can be shared between pages (like the method that triggers the top nav for example) it must become a component file. But if the method you need will handle only the page you are working on, then you just need to add your method to the JS page file. The `scripts.php` file will load the necessary file on that given page and the `handler.js` will init them all in the correct order. If you need to init some specific method, just add it to the specific section on the `handler.js`.

### The Basics

Every page must always follow this basic template:

```php

<?php 
    $page = "pageNameHere";

    require_once "./partials/init/start.php";
        require_once "./partials/pages/$pageNameHere/_$pageNameHere.php";
    require_once "./partials/init/end.php";

```

The `$page` variable will be used to set the CSS and JS files that must be loaded by the browser on that specific page. The goal with this set up is to manage all dependencies per page loading only the essential content and dependencies on each page. The first request will load everything from the `start.php`. Once the `start.php` is set, the specific code - all inner sections - of the page will be loaded. The last request will load everything from the `end.php`. 

---

Developed with love by [Battoni TI](http://battoniti.com.br) team.
