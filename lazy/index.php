<?php namespace _\lot\x;

function lazy($content) {
    if (
        false === \strpos($content, '<iframe ') &&
        false === \strpos($content, '<img ')
    ) {
        return $content;
    }
    return \preg_replace_callback('/<(iframe|img)(?:\s[^>]*)?>/', function($m) {
        if (false !== \strpos($m[0], ' loading=')) {
            return $m[0];
        }
        $out = new \HTML($m[0]);
        if (isset($out['loading'])) {
            return $m[0];
        }
        $out['loading'] = 'lazy';
        return $out;
    }, $content);
}

\Hook::set('content', __NAMESPACE__ . "\\lazy", 20);
