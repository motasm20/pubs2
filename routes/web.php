<?php

use Illuminate\Support\Facades\Route;

Route::get('/Maps', function () {
    return view('Maps');
});
Route::get('/Maps/Haven', function () {
    $roles = ['Controllers', 'Duelists', 'Sentinels', 'Initiators'];
    return view('Haven', ['roles' => $roles]);
});

Route::get('/Maps/Bind', function () {
    $roles = ['Controllers', 'Duelists', 'Sentinels', 'Initiators'];
    return view('Bind', ['roles' => $roles]);
});

Route::get('/Maps/Split', function () {
    $roles = ['Controllers', 'Duelists', 'Sentinels', 'Initiators'];
    return view('Split', ['roles' => $roles]);
});

Route::get('/Maps/Split/{role}', function ($role) {
    $agents = [
        'Controllers' => ['Brimstone', 'Omen', 'Viper', 'Astra', 'Clove', 'Harbor'],
        'Duelists' => ['Jett', 'Phoenix', 'Reyna', 'Raze', 'Yoru', 'Neon', 'Iso'],
        'Sentinels' => ['Sage', 'Cypher', 'Killjoy', 'Chamber', 'Deadlock', 'Vyse'],
        'Initiators' => ['Breach', 'Sova', 'Skye', 'KAYO', 'Fade', 'Gekko']
    ];

    $roles = array_keys($agents);
    return view('Split', [
        'roles' => $roles,
        'selectedRole' => $role,
        'agents' => $agents[$role]
    ]);
});

Route::get('/Maps/Haven/{role}', function ($role) {
    $agents = [
        'Controllers' => ['Brimstone', 'Omen', 'Viper', 'Astra', 'Clove', 'Harbor'],
        'Duelists' => ['Jett', 'Phoenix', 'Reyna', 'Raze', 'Yoru', 'Neon', 'Iso'],
        'Sentinels' => ['Sage', 'Cypher', 'Killjoy', 'Chamber', 'Deadlock', 'Vyse'],
        'Initiators' => ['Breach', 'Sova', 'Skye', 'KAYO', 'Fade', 'Gekko']
    ];

    $roles = array_keys($agents);
    return view('Haven', [
        'roles' => $roles,
        'selectedRole' => $role,
        'agents' => $agents[$role]
    ]);
});

Route::get('/Maps/Bind/{role}', function ($role) {
    $agents = [
        'Controllers' => ['Brimstone', 'Omen', 'Viper', 'Astra', 'Clove', 'Harbor'],
        'Duelists' => ['Jett', 'Phoenix', 'Reyna', 'Raze', 'Yoru', 'Neon', 'Iso'],
        'Sentinels' => ['Sage', 'Cypher', 'Killjoy', 'Chamber', 'Deadlock', 'Vyse'],
        'Initiators' => ['Breach', 'Sova', 'Skye', 'KAYO', 'Fade', 'Gekko']
    ];

    $roles = array_keys($agents);
    return view('Bind', [
        'roles' => $roles,
        'selectedRole' => $role,
        'agents' => $agents[$role]
    ]);
});



