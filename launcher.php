<?php

require_once 'HtmlTagBuilder.php';

$htmlBuilder = new HtmlTagBuilder();

$head = (new HtmlTagBuilder())->create('div')
                    ->attr('class', 'container')
                    ->content('HTML AND CSS GENERATOR');

$form = (new HtmlTagBuilder())->create('form')
                    ->attr('action', 'process.php')
                    ->attr('method', 'post')
                    ->content(
                        '<br>' . (new HtmlTagBuilder())->create('input')->attr('type', 'text')->attr('name', 'username') . '<br>' .
                        '<br>' . (new HtmlTagBuilder())->create('input')->attr('type', 'password')->attr('name', 'password') . '<br>' .
                        '<br>' . (new HtmlTagBuilder())->create('input')->attr('type', 'submit')->attr('value', 'Submit')
                    );

echo $head;
echo $form;

?>
