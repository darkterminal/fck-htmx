<?php

/** @var Fckin\models\User $user */

use App\config\helpers\Utils;

 ?>
<div class="navbar bg-base-100 shadow-md mb-3" hx-boost="true">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li><a href="/">Home</a></li>
                <li><a href="/component">The fck. Component</a></li>
                <?php if (isAuthenticate()) : ?>
                    <li><a href="/profile">Profile</a></li>
                <?php endif ?>
            </ul>
        </div>
        <a href="/" class="btn btn-ghost text-xl">fck.</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li><a href="/">Home</a></li>
            <li><a href="/counter">Counter Example</a></li>
            <li><a href="/component">The fck. Component</a></li>
            <?php if (isAuthenticate()) : ?>
                <li><a href="/profile">Profile</a></li>
            <?php endif ?>
        </ul>
    </div>
    <div class="navbar-end gap-3">
        <?php if (!isAuthenticate()) : ?>
            <a href="/register" class="btn btn-outline btn-sm">Register</a>
            <a href="/login" class="btn btn-ghost btn-sm">Login</a>
        <?php else : ?>
            <a href="javascript:;" class="btn btn-outline btn-sm"><?= $user->firstName ?></a>
            <a href="/logout" class="btn btn-outline btn-sm">Logout</a>
        <?php endif ?>
        <?= Utils::renderComponent('components/theme-changer'); ?>
    </div>
</div>
