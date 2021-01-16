<?php
    $title = "";
    include "includes/greeklish.php";
    global $slug;
    if (isset($_POST['generate_slug'])){
        if ($_POST['title'] != null) {
            $title = $_POST['title'];
            $slug = greeklish($title);
        }
    }
    if (isset($_POST['Clear'])) {
        $title = "";
        $slug = "";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <title>Slug Generator</title>
    </head>
    <body>
        <div class="container">
            <H1 class="page-header">Slug Generator</H1>
            <form action="" method="post">
                <div class='form-group'>
                    <label for="title" class="for">Title</label>
                    <input type="text" class="form-control" name="title" value="<?php echo $title; ?>">
                </div>
                <div class='form-group'>
                    <label for="Slug" class="for">Generated Slug (leave it empty)</label>
                    <input type="text" class="form-control" name="title_slug" id = "title_slug" value="<?php echo $slug; ?>">
                </div>
                <div class='form-group'>
                    <input class = 'btn btn-primary' type = 'submit' name = 'generate_slug' value = 'Generate Slug'>
                    <input class = 'btn btn-primary' type = 'submit' name = 'Clear' value = 'Clear'>
                    <input class = 'btn btn-primary' type = 'submit' name = 'info' value = 'About' onclick='about()'>
                    <input class = 'btn btn-primary' type = 'submit' name = 'Copy' value = 'Copy' onclick='myFunction()'>
                </div>
            </form>
        </div>
        <div class="container">
            <footer class="bg-light text-center text-lg-start">
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                    © <?php echo date("Y"); ?> Created by Nikolaos Psaltakis
                </div>
            </footer>
        </div>
        <script>
            function myFunction() {
                var copyText = document.getElementById("title_slug");
                copyText.select();
                copyText.setSelectionRange(0, 99999); /*For mobile devices*/
                document.execCommand("copy");
                alert("Copied the text: " + copyText.value);
            }
            function about() {
                $message1 = "This program generates slug from title.\n";
                $message2 = "The user types a title in greek on english and it generates the slug in greeklish.\n";
                $message3 = "Programmer : Nikolaos Psaltakis";
                alert($message1 + $message2 + $message3);
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    </body>
</html>