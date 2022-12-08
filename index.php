<?php

class Movie
{
    public $title;
    public $duration;
    public $category;

    function __construct(String $title, Int $duration, String $category)
    {
        $this->title = $title;
        $this->duration = $duration;
        $this->category = $category;
    }

    public function print()
    {
        return "$this->title, $this->duration, $this->category";
    }
}

$movies = [
    new Movie("Inception", 120, "thriller"),
    new Movie("Interstellar", 160, "Sci-Fi")
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Movies</h1>
    <?php foreach ($movies as $title) { ?>
    <?php echo $title->print();
    } ?>
</body>

</html>