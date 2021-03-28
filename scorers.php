<?php
    $uri = 'https://api.football-data.org/v2/competitions/PD/scorers';
    $reqPrefs['http']['method'] = 'GET';
    $reqPrefs['http']['header'] = 'X-Auth-Token: 6505ad6e4d5147bd881dfea0542cf583';
    $stream_context = stream_context_create($reqPrefs);
    $response = file_get_contents($uri, false, $stream_context);
    $scorers = json_decode($response, true);
    //var_dump($matches);
?>