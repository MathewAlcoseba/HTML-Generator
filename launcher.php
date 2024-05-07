<?php

require_once 'HTMLGenerator.php';
require_once 'HTMLTagBuilder.php';

$generator = new HTMLGenerator(); 
$generator->createDoctype()
    ->createHead()
    ->createTitle('Sample Page')
    ->closeHead()
    ->createBody()
    ->addTag((new HTMLTagBuilder('div'))->withAttribute('class', 'container')->withContent(
        (new HTMLTagBuilder('h1'))->withContent('Welcome to my page!')->build()
    )->build())
    ->addTag((new HTMLTagBuilder('p'))->withContent('This is a paragraph.')->build())
    ->addTag((new HTMLTagBuilder('img'))->withAttribute('src', 'image.jpg')->withAttribute('alt', 'Image')->build())
    ->addTag((new HTMLTagBuilder('a'))->withAttribute('href', 'https://www.example.com')->withContent('Link')->build())
    ->addTag((new HTMLTagBuilder('ul'))->withContent(
        (new HTMLTagBuilder('li'))->withContent('Item 1')->build() .
        (new HTMLTagBuilder('li'))->withContent('Item 2')->build()
    )->build())
    ->addTag((new HTMLTagBuilder('table'))->withContent(
        (new HTMLTagBuilder('thead'))->withContent(
            (new HTMLTagBuilder('tr'))->withContent(
                (new HTMLTagBuilder('th'))->withContent('Header 1')->build() .
                (new HTMLTagBuilder('th'))->withContent('Header 2')->build()
            )->build()
        )->build() .
        (new HTMLTagBuilder('tbody'))->withContent(
            (new HTMLTagBuilder('tr'))->withContent(
                (new HTMLTagBuilder('td'))->withContent('Row 1, Cell 1')->build() .
                (new HTMLTagBuilder('td'))->withContent('Row 1, Cell 2')->build()
            )->build() .
            (new HTMLTagBuilder('tr'))->withContent(
                (new HTMLTagBuilder('td'))->withContent('Row 2, Cell 1')->build() .
                (new HTMLTagBuilder('td'))->withContent('Row 2, Cell 2')->build()
            )->build()
        )->build()
    )->build())
    ->addTag((new HTMLTagBuilder('hr'))->build())
    ->closeBody()
    ->saveToFile('output.html');

echo 'HTML file generated successfully!';
?>