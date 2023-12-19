<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genre</title>
</head>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 8px 24px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button1:hover {
  background-color: #008CBA;
  color: white;
}
html { 
  background: url(https://i.pinimg.com/originals/5c/f2/66/5cf2660af5f4214def7166dc7a7c8062.jpg) no-repeat center fixed; 
  background-size: cover;
}

body { 
  color: white; 
}
</style>
<body>
        <button class="button button1"><a href="trending.php">Trending</a></button>
        <button class="button button1"><a href="top rated.php">Top Rated</a></button>
        <button class="button button1"><a href="horror.php">Horror</a></button>
        <button class="button button1"><a href="action.php">Action</a></button>
        <button class="button button1"><a href="anime.php">Adventure</a></button>
        <button class="button button1"><a href="comedy.php">Comedy</a></button>
        <button class="button button1"><a href="drama.php">Drama</a></button>
        <button class="button button1"><a href="science.php">Science fiction</a></button>
        <button class="button button1"><a href="fantasy.php">Fantasy</a></button>
        <button class="button button1"><a href="thriller.php">Thriller</a></button>
        <button class="button button1"><a href="animation.php">Animation</a></button>
        <button class="button button1"><a href="crime.php">Crime</a></button>
        <button class="button button1"><a href="romantic.php">Romantic</a></button>
        <button class="button button1"><a href="mystery.php">Mystery</a></button>
        <button class="button button1"><a href="war.php">War</a></button>
        <button class="button button1"><a href="historical.php">Historical</a></button>
        <button class="button button1"><a href="martial.php">Martial Arts</a></button>
        <button class="button button1"><a href="western.php">Western</a></button>
        <button class="button button1"><a href="monster.php">Monster</a></button>

</body>
</html>
<?php
//$data = file_get_contents("https://api.themoviedb.org/3/discover/movie?api_key=af327102f938cc14497683c073a957ee&with_genres=18&primary_release_year=2010&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false");
$data = file_get_contents("https://api.themoviedb.org/3/movie/upcoming?api_key=af327102f938cc14497683c073a957ee&language=en-US&page=1");
//$data = file_get_contents("https://api.themoviedb.org/3/search/movie?api_key=af327102f938cc14497683c073a957ee&language=en-US&page=1&include_adult=false&query=$query");

$data = json_decode($data, true);
echo "<pre>";
//print_r($data);
echo "<center><h1>UPCOMMING MOVIES</h1></center>";
foreach($data['results'] as $result)
{
    
    //echo $result['poster_path'];
    echo "<h1>".$result['original_title']."</h1>";    
    echo "<h2>".$result['overview']."</p>";
    echo "<h2>"."Popularity : ".$result['popularity']."</h2>";
    echo "<h2>"."Release Date : ".$result['release_date']."</h2>";
    echo "<h2>"."Rating : ".$result['vote_average']."</h2>","<br>";
}

?>
