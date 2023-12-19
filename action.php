<?php
//include_once("api.php");
$query = urlencode("action movie");
//$data = file_get_contents("https://api.themoviedb.org/3/discover/movie?api_key=af327102f938cc14497683c073a957ee&with_genres=18&primary_release_year=2010&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false");
//$data = file_get_contents("https://api.themoviedb.org/3/movie/upcoming?api_key=af327102f938cc14497683c073a957ee&language=en-US&page=1");
$data = file_get_contents("https://api.themoviedb.org/3/search/movie?api_key=af327102f938cc14497683c073a957ee&language=en-US&page=1&include_adult=false&query=$query");

$data = json_decode($data, true);
echo "<pre>";
//print_r($data);
echo "<center><h1>ACTION MOVIES</h1></center>";
foreach($data['results'] as $result)
{
    
    //echo $result['poster_path'];
    echo "<h1>".$result['original_title']."</h1>";
    echo "<h2>".$result['overview']."</h2>";
    echo "<h2>"."Popularity : ".$result['popularity']."</h2>";
    echo "<h2>"."Release Date : ".$result['release_date']."</h2>";
    echo "<h2>"."Rating : ".$result['vote_average']."</h2>","<br>";
}

?>
<style>
html { 
  background: url(https://i.pinimg.com/originals/5c/f2/66/5cf2660af5f4214def7166dc7a7c8062.jpg) no-repeat center fixed; 
  background-size: cover;
}

body { 
  color: white; 
}
</style>