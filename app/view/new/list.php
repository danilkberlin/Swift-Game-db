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
                                Nome line
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
                                        <?php
                                            if (isset($val["icon_foto"]) && $val["icon_foto"] !== NULL) {
                                                echo '
                                                <img src="' . $val["icon_foto"] . '" class="rounded-circle" style="width: 42px; height: 42px" alt="...">
                                                ';
                                            } else {
                                                echo '
                                                <img src="https://cdn.create.vista.com/api/media/small/454471360/stock-vector-people-icon-vector-person-icon-vector-user-icon-vector" class="rounded-circle" style="width: 92px; height: 92px" alt="...">
                                                ';
                                            }
                                        ?>
                                            <?php echo $val['login']?>
                                        </h5>
                                        <div class="dropup-center dropup">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" data-bs-toggle="dropdown" aria-expanded="false" class="bi bi-three-dots-vertical dropdown-toggle" viewBox="0 0 16 16">
                                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                                            </svg>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy2-fill" viewBox="0 0 16 16">
                                                            <path d="M12 2h-2v3h2z"/>
                                                            <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v13A1.5 1.5 0 0 0 1.5 16h13a1.5 1.5 0 0 0 1.5-1.5V2.914a1.5 1.5 0 0 0-.44-1.06L14.147.439A1.5 1.5 0 0 0 13.086 0zM4 6a1 1 0 0 1-1-1V1h10v4a1 1 0 0 1-1 1zM3 9h10a1 1 0 0 1 1 1v5H2v-5a1 1 0 0 1 1-1"/>
                                                        </svg>
                                                        Save
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item text-danger" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ban" viewBox="0 0 16 16">
                                                            <path d="M15 8a6.97 6.97 0 0 0-1.71-4.584l-9.874 9.875A7 7 0 0 0 15 8M2.71 12.584l9.874-9.875a7 7 0 0 0-9.874 9.874ZM16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0"/>
                                                        </svg>
                                                        Block
                                                    </a>
                                                </li>
                                                <?php if($val['login'] ==  $_SESSION['user']): ?>
                                                    <hr>
                                                    <li>
                                                        <form action="/new/delete" method="POST">
                                                            <input type="hidden" name="post_id" value="<?php echo $val['post_id']; ?>">
                                                            <button type="submit" class="dropdown-item text-danger align-items-center btn">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                                                </svg>
                                                                Delete
                                                                
                                                            </button>
                                                        </form>
                                                    </li>
                                                <?php endif; ?>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class='my-3'><?php echo $val['headline']?></h5>
                                    <img src="<?php echo $val['url_foto']?>" class="card-img-top w-100 my-4" alt="...">
                                    <p class='my-3'><?php echo $val['text']?></p>
                                    <h6 class='text-secondary'><?php echo $time_ago ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>