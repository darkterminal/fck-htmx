<?php

use Fckin\core\View;

/** @var View $this */

$this->title = 'Profile | fck.';
?>
<section class="w-8/12 mx-auto my-5">
    <h1 class="font-bold">Profile</h1>
    <div class="card w-96 bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title">Hi, <?= $user->firstName . ' ' . $user->lastName ?></h2>
            <p>If a dog chews shoes whose shoes does he choose?</p>
            <div class="card-actions justify-end">
                <button class="btn btn-primary">Buy Now</button>
            </div>
        </div>
    </div>
</section>
