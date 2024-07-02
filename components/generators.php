<?php

function add_meta_description(string $url, string $title, string $description, string $short_description = "")
{
    if (!$short_description) {
        $short_description = $description;
    }
    echo "
        <meta property='og:title' content='$title'>
        <meta property='og:description' content='$short_description'>
        <meta property='og:url' content='$url'>

        <meta name='twitter:title' content='$title'>
        <meta property='twitter:url' content='$url'>
        <meta name='twitter:description' content='$short_description'>

        <title>$title</title>
        <meta name='description' content='$description'>
    ";
}
