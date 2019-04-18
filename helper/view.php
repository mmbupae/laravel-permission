<?php

if (! function_exists('get_error')) {
    function get_error ($input)
    {
        $errors = session('errors');
        return isset($errors) ? '<div class="invalid-feedback">' . $errors->first($input) . '</div>' : '';
    }
}

if (! function_exists('set_error')) {
    function set_error ($input)
    {
        $errors = session('errors');
        if (isset($errors)) {
            return $errors->has($input) ? 'is-invalid' : '';
        }

        return "";
    }
}

if (! function_exists('set_selected')) {
    function set_selected($value1, $value2)
    {
        return $value1 == $value2 ? "selected" : "";
    }
}

