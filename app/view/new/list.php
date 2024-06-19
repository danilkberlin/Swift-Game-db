<?php

    function format_time_ago($time_diff) {
        if ($time_diff < 60) {
            return 'just now';
        } elseif ($time_diff < 3600) {
            $minutes = floor($time_diff / 60);
            return $minutes . ' ' . get_noun_plural_form($minutes, 'minute', 'minutes', 'minutes') . ' ago';
        } elseif ($time_diff < 86400) {
            $hours = floor($time_diff / 3600);
            return $hours . ' ' . get_noun_plural_form($hours, 'hour', 'hours', 'hours') . ' ago';
        } elseif ($time_diff < 604800) {
            $days = floor($time_diff / 86400);
            return $days . ' ' . get_noun_plural_form($days, 'day', 'days', 'days') . ' ago';
        } elseif ($time_diff < 2592000) {
            $weeks = floor($time_diff / 604800);
            return $weeks . ' ' . get_noun_plural_form($weeks, 'week', 'weeks', 'weeks') . ' ago';
        } elseif ($time_diff < 31536000) {
            $months = floor($time_diff / 2592000);
            return $months . ' ' . get_noun_plural_form($months, 'month', 'months', 'months') . ' ago';
        } else {
            $years = floor($time_diff / 31536000);
            return $years . ' ' . get_noun_plural_form($years, 'year', 'years', 'years') . ' ago';
        }
    }


    function get_noun_plural_form($number, $single, $plural1, $plural2) {
        $number = abs($number) % 100;
        $last_digit = $number % 10;
        if ($number > 10 && $number < 20) {
            return $plural2;
        }
        if ($last_digit > 1 && $last_digit < 5) {
            return $plural1;
        }
        if ($last_digit == 1) {
            return $single;
        }
        return $plural2;
    }
?>

<section id="news" class='my-5'>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-2 col-md-6 col-sm-12">
                <div class="row justify-content-center">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item m-2">
                            <a class="nav-link rounded-2 px-4" href="/new">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                                    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z"/>
                                </svg>
                                Nome news
                            </a>
                        </li>
                        <li class="nav-item m-2">
                            <a class="nav-link rounded-2 px-4" href="#profile">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                </svg>
                                Search
                            </a>
                        </li>
                        <li class="nav-item m-2">
                            <a class="nav-link rounded-2 px-4" href="/new/show">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                </svg>
                                Posts
                            </a>
                        </li>
                        <li class="nav-item m-2">
                            <a class="nav-link rounded-2 px-4" href="#change-profile">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                                    <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm4 0v6h8V1zm8 8H4v6h8zM1 1v2h2V1zm2 3H1v2h2zM1 7v2h2V7zm2 3H1v2h2zm-2 3v2h2v-2zM15 1h-2v2h2zm-2 3v2h2V4zm2 3h-2v2h2zm-2 3v2h2v-2zm2 3h-2v2h2z"/>
                                </svg>
                                Reels
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-10 col-md-6 col-sm-12">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2>For you</h2>
                        <hr>
                    </div>
                </div>
                <?php foreach($news as $val):?>
                    <?php
                    $now = time();
                    $post_time = strtotime($val['date_post']);
                    $diff = $now - $post_time;
                    $time_ago = format_time_ago($diff);
                    ?>
                    <div class="row justify-content-center my-5">
                        <div class="col-lg-5 col-md-7 col-sm-10">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5>
                                            <svg width="48px" height="48px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="24" height="24" fill="white"></rect> 
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM11.9999 6C9.79077 6 7.99991 7.79086 7.99991 10C7.99991 12.2091 9.79077 14 11.9999 14C14.209 14 15.9999 12.2091 15.9999 10C15.9999 7.79086 14.209 6 11.9999 6ZM17.1115 15.9974C17.8693 16.4854 17.8323 17.5491 17.1422 18.1288C15.7517 19.2966 13.9581 20 12.0001 20C10.0551 20 8.27215 19.3059 6.88556 18.1518C6.18931 17.5723 6.15242 16.5032 6.91351 16.012C7.15044 15.8591 7.40846 15.7251 7.68849 15.6097C8.81516 15.1452 10.2542 15 12 15C13.7546 15 15.2018 15.1359 16.3314 15.5954C16.6136 15.7102 16.8734 15.8441 17.1115 15.9974Z" fill="#323232"></path>
                                            </svg>
                                            <?php echo $val['login']?>
                                        </h5>
                                        <h5><?php echo $time_ago ?></h5>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class='my-3'><?php echo $val['headline']?></h5>
                                    <img src="<?php echo $val['url_foto']?>" class="card-img-top w-100 my-4" alt="...">
                                    <p class='my-3'><?php echo $val['text']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>