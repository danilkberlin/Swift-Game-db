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
                        <li class="nav-item m-2 nav-list-item rounded-2">
                            <a class="nav-link rounded-2 px-4" href="/new">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                                    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z"/>
                                </svg>
                                Home
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-10 col-md-6 col-sm-12">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class='title-text-gradient fs-2'>Save</h2>
                        <hr class='text-color'>
                    </div>
                </div>
                <?php foreach($posts as $val):?>
                    <?php
                    $now = time();
                    $post_time = strtotime($val['date_post']);
                    $diff = $now - $post_time;
                    $time_ago = format_time_ago($diff);
                    ?>
                    <div class="row justify-content-center my-5">
                        <div class="col-lg-5 col-md-7 col-sm-10">
                            <div class="card  text-bg-dark">
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-person-circle mx-2" viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                                    </svg>
                                                ';
                                            }
                                        ?>
                                        <?php 
                                            if($val['id'] == 42){
                                                echo $val['login'] .' '.  '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#00ffff" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                                                <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708"/>
                                              </svg>';
                                            }else{
                                                echo $val['login'];
                                            }
                                        ?>
                                        </h5>
                                        <div class="dropup-center dropup">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" data-bs-toggle="dropdown" aria-expanded="false" class="bi bi-three-dots-vertical dropdown-toggle" viewBox="0 0 16 16">
                                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                                            </svg>
                                            <ul class="dropdown-menu dropdown-menu-dark">
                                                <li>
                                                    <form action="/save/delete" method="POST">
                                                        <input type="hidden" name="save_id" value="<?php echo $val['save_id']; ?>">
                                                        <button type="submit" class="dropdown-item text-danger align-items-center btn">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                                            </svg>
                                                            Delete Save
                                                        </button>
                                                    </form>
                                                </li>
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