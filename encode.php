<?php
   function e(string $key, array $post, string $charset = 'UTF-8'):string {
        if(array_key_exists($key, $post)){
            return htmlspecialchars($post[$key], ENT_HTML5, $charset);
        }
        return '';
    }
