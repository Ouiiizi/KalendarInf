<?php
// Set your timezone!!
date_default_timezone_set('Asia/Calcutta');

// Get prev & next month
if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    // This month
    $ym = date('Y-m');
}

// Check format
$timestamp = strtotime($ym . '-01');  // the first day of the month
if ($timestamp === false) {
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}

// Today (Format:2018-08-8)
$today = date('Y-m-j');

// Title (Format:August, 2018)
$title = date('F, Y', $timestamp);

// Create prev & next month link
$prev = date('Y-m', strtotime('-1 month', $timestamp));
$next = date('Y-m', strtotime('+1 month', $timestamp));

// Number of days in the month
$day_count = date('t', $timestamp);

// 1:Mon 2:Tue 3: Wed ... 7:Sun
$str = date('N', $timestamp);

// Array for calendar
$weeks = [];
$week = '';

// Add empty cell(s)
$week .= str_repeat('<td></td>', $str - 1);

for ($day = 1; $day <= $day_count; $day++, $str++) {

    $date = $ym . '-' . $day;

    if ($today == $date) {
        $week .= '<td class="today">';
    } else {
        $week .= '<td>';
    }
    $week .= $day . '</td>';
    // Sunday OR last day of the month
    if ($str % 7 == 0 || $day == $day_count) {
        // last day of the month
        if ($day == $day_count && $str % 7 != 0) {
            // Add empty cell(s)
            $week .= str_repeat('<td></td>', 7 - $str % 7);
        }
        $weeks[] = '<tr>' . $week . '</tr>';

        $week = '';
    }
}
?>
    <!DOCTYPE html>
<link lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP Calendar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
</head>
<>
<div class="container">
    <ul class="list-inline">
        <li class="list-inline-item"><a href="?ym=<?= $prev; ?>" class="btn btn-link">&lt; prev</a></li>
        <li class="list-inline-item"><span class="title"><?= $title; ?></span></li>
        <li class="list-inline-item"><a href="?ym=<?= $next; ?>" class="btn btn-link">next &gt;</a></li>
    </ul>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>M</th>
            <th>T</th>
            <th>W</th>
            <th>T</th>
            <th>F</th>
            <th>S</th>
            <th>S</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($weeks as $week) {
            echo $week;
        }
        ?>
        </tbody>
    </table>
</div>
<form action="{{action([\App\Http\Controllers\PagesController::class,'list'])}}" method="post" class="agming">
    <center>  <input class="form-control" placeholder="Activity Name"  name="activity" type="text" autofocus> </center>
    <div class="form-group">
        <input class="form-control" placeholder="Description" name="description" type="Text" value="">
    </div>
    <div class="form-group">
        <input class="form-control" placeholder="Date of Activity" name="created_at" type="date" value="">
    </div>
    <center class="form-group">
        <center> <input type="submit" class="buton"></center>
    </center>
</form><br>

<style>

    *{
        background-color: white;
    }


    .container {
        font-family: 'Montserrat', sans-serif;
        margin: 60px auto;
    }
    .list-inline {
        text-align: center;
        margin-bottom: 30px;
    }
    .title {
        font-weight: bold;
        font-size: 26px;
        color: black;
    }
    th {
        text-align: center;
    }
    td {
        height: 100px;
    }
    th:nth-of-type(6), td:nth-of-type(6) {
        color: blue;
    }
    th:nth-of-type(7), td:nth-of-type(7) {
        color: red;

    }

    .today {
        background-color: orange;
    }

    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }


    .buton {
        padding: 1.3em 3em;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 2.5px;
        font-weight: 500;
        color: #000;
        background-color: #fff;
        border: none;
        border-radius: 45px;
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease 0s;
        cursor: pointer;
        outline: none;
    }

    .buton:hover {
        background-color: black;
        box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
        color: #fff;
        transform: translateY(-7px);
    }

    .buton:active {
        transform: translateY(-1px);
    }


    .updateform {
        position: relative;
        display: inline-block;
        max-width: 700px;
        min-width: 500px;
        box-sizing: border-box;
        padding: 30px 25px;
        background-color: white;
        border-radius: 40px;
        margin: 40px 0;
        margin-right: 50px;
    }



    .input{
        font-weight: 100;
        letter-spacing: 0.01em;
        margin-left: 15px;
        margin-bottom:35px;
        text-transform: uppercase;
        color: black;
    }


    .link {
        color: #090909;
        padding: 0.7em 1.7em;
        font-size: 18px;
        border-radius: 0.5em;
        background: #e8e8e8;
        border: 1px solid #e8e8e8;
        transition: all .3s;
        box-shadow: 6px 6px 12px #c5c5c5,
        -6px -6px 12px #ffffff;
    }

    .link:hover {
        border: 1px solid white;
    }

    .link:active {
        box-shadow: 4px 4px 12px #c5c5c5,
        -4px -4px 12px #ffffff;
    }

    .agming {
        color: white;
    }
</style>
{{--Calendar CSS--}}
</body>
</html>

