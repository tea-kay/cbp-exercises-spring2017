<?php
$movies = [
  'The Shawshank redemption',
  'The Godfather',
  'The Godfather II',
  'Dark Knight', 
  '12 angry men', 
  'Schindler\'s list',
  'Pulp fiction',
  'Lord of the Rings: Return of the King',
  'The good, the bad and the ugly',
  'Fight club'
];

sort($movies);

$movie_names = [
  'tt0111161' => 'The Shawshank redemption',
  'tt0068646' => 'The Godfather',
  'tt0071562' => 'The Godfather II',
  'tt0468569' => 'Dark Knight', 
  'tt0050083' => '12 angry men', 
  'tt0108052' => 'Schindler\'s list',
  'tt0110912' => 'Pulp fiction',
  'tt0167260' => 'Lord of the Rings: Return of the King',
  'tt0060196' => 'The good, the bad and the ugly',
  'tt0137523' => 'Fight club'
];
$movie_ratings = [
  'tt0111161' => 9.2,
  'tt0068646' => 9.2,
  'tt0071562' => 9.0,
  'tt0468569' => 8.9, 
  'tt0050083' => 8.9, 
  'tt0108052' => 8.9,
  'tt0110912' => 8.9,
  'tt0167260' => 8.9,
  'tt0060196' => 8.9,
  'tt0137523' => 8.8
];
asort($movie_ratings);

isset($_GET['order']); // returns true if order is within GET params

if(isset($_GET['order']) && $_GET['order'] == 'desc')
{
    arsort($movie_ratings);
    $order = 'desc';
} else {
    arsort($movie_ratings);
    $order = 'asc';
}

$films = [];

foreach($movie_names as $movie_id => $name) {
    $films[$movie_id] = [
        'name' => $name,
        'rating' => $movie_ratings[$movie_id]
    ];
}

function compare_files($film1, $film2) {
    if($film1['rating'] < $film2['rating']

    || $flim1['rating'] == $film2['rating'] && $film1["name"] < $film2['name']){
        return -1;
    } elseif ($film1['rating'] == $flim2['rating'] && $film1['name'] == $film2['name']) {
        return 0;
    } else {
        return 1;
    }
}

?>
<ol>

    <?php foreach ($movies as $title) :?>
        <li><?php echo $title; ?></li>
    <?php endforeach; ?>
      

</ol>

In this array there are <?php echo count($movies); ?> items.

<ol>

    <?php for($i = 0; $i < count($movies); $i++) : ?>
        <li><?php echo $movies[$i]; ?></li>
    <?php endfor; ?>
      

</ol>

Movies With Ratings

<form action="" method="get">
    <select name ="order">

    </select>
<ol>

    <?php foreach ($movie_ratings as $i => $ratings) :?>
        <li><?php echo $movie_names[$i];?> (<?php echo $ratings;?>)</li>
    <?php endforeach; ?>
      

</ol>
<h2>Film arrays</h2>
<ol>
    <?php foreach($films as $movie_id => $film) : ?>
        <li><?php echo $film['name'];?> (<?php echo $film['rating'];?>)</li>
    <?php endforeach; ?>
</ol>
