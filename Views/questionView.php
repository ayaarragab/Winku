<?php
include_once '../Controllers/dbControllers.php';
$attributes = array(
    'id',
    'userId',
    'username',
    'publishedDate',
    'body',
    'tags',
    'numOfReacts',
    'numOfReports',
    'numOfViews',
    'title'
);
$questions = DBMapper::retrieve('questions', $attributes);


foreach ($questions as $question) {
    echo '<div class="central-meta item"> <!-- Questions -->';
    echo '<div class="user-post">';
    echo '<div class="title-and-ellipse d-flex">';
    echo '<a href="question_detail.php"><h5 style="font-weight: bold; width: 70%; color: rgb(45, 45, 45); font-size: 1.6rem;">' . $question['title'] . '</h5></a>';
    echo '<i id="ellipse-element" class="fa-solid fa-ellipsis-vertical cursor-pointer" style="font-size:30px; margin-top:2px"></i>';
    echo '</div>';
    echo '<div class="d-flex ff">';
    echo '<ul id="op-list" class="options-list" style="display: none;">';
    echo '<li><i class="fa-solid fa-pen"></i><span class="p-2">Edit</span></li>';
    echo '<li><i class="fa-solid fa-trash"></i><span class="p-2">Delete</span></li>';
    echo '<li><i class="fa-solid fa-flag"></i><span class="p-2">Report</span></li>';
    echo '<li><i class="fa-solid fa-bookmark"></i><span class="p-2">Bookmark</span></li>';
    echo '</ul>';
    echo '</div>';
    echo '<div class="friend-info">';
    echo '<div class="friend-name">';
    echo '<ins><a title="" href="time-line.php" style="font-size: 1rem;">' . $question['username'] . '</a></ins>';
    echo '<span>published: ' . $question['publishedDate'] . '</span>';
    echo '</div>';
    echo '</div>';
    echo '<div class="description" style="display: none;">';
    echo '<p style="font-size: 0.99rem;">' . $question['body'] . '</p>';
    echo '</div>';
    echo '<div class="we-video-info mb-3">';
    echo '<ul>';
    echo '<li><span class="views" data-toggle="tooltip" title="views"><span><i class="fa-regular fa-eye"></i></span>(' . $question['numOfViews'] . ')</span></li>';
    echo '<li><span class="comment" data-toggle="tooltip" title="Answers"><span><i class="fa-solid fa-pen-to-square"></i></span>(' . $question['numOfReacts'] . ')</span></li>';
    echo '<li data-toggle="tooltip" title="share"><span><span><i class="fa-solid fa-share-from-square"></i></span>(' . $question['numOfReports'] . ')</span></li>';
    echo '</ul>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}