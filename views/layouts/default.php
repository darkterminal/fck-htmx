<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->title ?></title>
    <link rel="stylesheet" href="fckout.css">
    <script src="https://unpkg.com/htmx.org@1.9.10" integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include 'components/navbar.php';
    ?>
    <?= toast('success') ?>
    {{content}}

    <script>
        document.addEventListener('htmx:load', () => {
            let themeToggle = document.querySelector('.theme-controller');

            // Check LocalStorage for the theme preference
            let isDark = localStorage.getItem('isdark') === 'yes';

            // Set the initial state of the checkbox
            themeToggle.checked = isDark;

            // Add a click event listener to toggle the checkbox and update LocalStorage
            themeToggle.addEventListener('click', () => {
                isDark = !isDark; // Toggle the theme preference
                localStorage.setItem('isdark', isDark ? 'yes' : 'no'); // Update LocalStorage
                themeToggle.checked = isDark; // Update the checkbox state
            });
        });
    </script>
</body>

</html>
