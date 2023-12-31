<?php

function language_list(...$languages)
{
    $language_list = [];
    foreach ($languages as $language)
        $language_list[] = $language;
    return $language_list;
}

function add_to_language_list(
    Array $array_languages, String $new_language)
{
    $array_languages[] = $new_language;
    return $array_languages;
}

function prune_language_list(Array $array_languages)
{
    array_shift($array_languages);
    return $array_languages;
}

function current_language(Array $array_languages)
{
    return $array_languages[0];
}

function language_list_length(Array $array_languages)
{
    return count($array_languages);
}
