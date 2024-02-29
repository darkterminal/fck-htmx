<form id="form" class="w-8/12 m-auto text-center">
    <input type="hidden" name="count" value="<?= $counter ?>">
    <button class="btn btn-primary" hx-post="/counter/decrement" hx-target="#form" hx-swap="innerHTML">-</button>
    <button class="btn btn-primary" hx-post="/counter/increment" hx-target="#form" hx-swap="innerHTML">+</button>
    <div id="result" class="text-5xl mt-5"><?= $counter ?></div>
</form>
