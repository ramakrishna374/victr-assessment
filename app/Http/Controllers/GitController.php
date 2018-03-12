<?php

namespace App\Http\Controllers;
use App\Repository;
use Carbon\Carbon; 

class GitController extends Controller
{
   public function view()
   {

   	//Hit GitHub Api for each get to refresh the results before retrieving it
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13',
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'https://api.github.com/search/repositories?q=language:php&sort=stars&order=desc&per_page=100&page='
    ));
    $result = curl_exec($ch);
    $json = json_decode($result, true);

    // Counters
    $added = 0;
    $updated = 0;

    // Treat data
    foreach($json['items'] as $repo) {
        // Check whether this repository already on database
        $repository = Repository::where('repository_id', $repo['id'])->first();
        if ($repository) {
          $updated += 1;
        } else {
          $added += 1;
          $repository = new Repository;
        }

        // Save data
        $repository->repository_id = $repo['id'];
        $repository->name = $repo['full_name'];
        $repository->url = $repo['html_url'];
        $repository->created_date = new Carbon($repo['created_at']);
        $repository->last_pushed = new Carbon($repo['pushed_at']);
        $repository->description = $repo['description'];
        $repository->stars = $repo['stargazers_count'];
        $repository->save();
    }

    // Retrieve results 
    $repositories = Repository::take(1000)->get();
    // return response()->json(['message' => 'Added ' . $added . ' repository(ies) and updated ' . $updated . ' repository(ies)']);
    return view('welcome', ['repositories' => $repositories]);

   }

   public function execute(){
    return view('execute');
   }
    public function index(){
    return view('home');
   }

}
