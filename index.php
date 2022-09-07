<?php namespace x;

function lazy($content) {
    if (
        false === \strpos($content, '</iframe>') &&
        false === \strpos($content, '<img')
    ) {
        return $content;
    }
    return \preg_replace_callback('/<(iframe|img)(?:\s[^>]*)?>/', static function ($m) {
        if (false !== \strpos($m[0], ' loading=')) {
            return $m[0];
        }
        $out = new \HTML($m[0]);
        if (isset($out['loading']) || 0 === \strpos($out['src'], 'data:image/')) {
            return $m[0];
        }
        $out['loading'] = 'lazy';
        return $out;
    }, $content);
}

\Hook::set('content', __NAMESPACE__ . "\\lazy", 20);