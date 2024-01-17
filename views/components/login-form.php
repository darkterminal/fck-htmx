<?php
use Fckin\core\form\Form;
use Fckin\core\db\Model;
use Fckin\core\View;

/** @var View $this */
/** @var Model $model */
echo toast('error');

Form::begin('/login', 'post', ['class' => 'w-1/3 mx-auto', 'autocomplete' => 'off', 'hx-post' => '/login', 'hx-swap' => 'outerHTML', 'id' => 'loginForm']);
Form::input($model, 'email', 'email');
Form::input($model, 'password', 'password');
Form::submit('Login', 'btn btn-outline btn-primary btn-block my-3');
Form::end();
