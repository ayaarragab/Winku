<?php
require_once 'C:\xampp\htdocs\software-engineering-project-Updated\codebase\Controllers\questionControllers\questionMapper.php';
class questionToUser{
    public static function showAllQuestions(){

        $questions = QuestionMapper::selectAllQuestions();


        foreach ($questions as $question) {
            echo '<div class="central-meta item"> <!-- Questions -->';
            echo '<div class="user-post">';
            echo '<div class="title-and-ellipse d-flex">';
            echo '<a href="question_detail.php?id=' . $question['id'] . '">';
            echo '<h5 style="font-weight: bold; width: 100%; color: rgb(45, 45, 45); font-size: 1.6rem;">' . $question['title'] . '</h5></a>';
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
            echo '<li data-toggle="tooltip" title="downvote"><span><span><i class="fa-solid fa-down-long"></i></span>' . $question['numDownVotes'] . '</span></li>';
            echo '<li data-toggle="tooltip" title="upvote"><span><span><i class="fa-solid fa-up-long"></i></span>' . $question['numUpVotes'] . '</span></li>';
            echo '<li><span class="comment" data-toggle="tooltip" title="Answers"><span><i class="fa-solid fa-pen-to-square"></i></span>'. $question['numAnswers'] .'</span></li>';
            echo '</ul>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            
        }
    }
    public static function showOneQuestion($id){
        $question = QuestionMapper::selectObjectAsArray($id, 'id');
        echo '
        <div class="central-meta item"> <!-- Questions -->
            <div class="user-post">
                <div class="title-and-ellipse d-flex">
                    <h5 style="font-weight: bold; width: 70%; color: rgb(45, 45, 45); font-size: 1.6rem;">' . $question[0]['title'] . '</h5>
                    <i id="ellipse-element" class="fa-solid fa-ellipsis-vertical cursor-pointer" style="font-size:30px; margin-top:2px"></i>
                </div>
                <div class="d-flex ff">
                    <ul id="op-list" class="options-list" style="display: none;">
                        <li><i class="fa-solid fa-pen"></i><span class="p-2">Edit</span></li>
                        <li><i class="fa-solid fa-trash"></i><span class="p-2">Delete</span></li>
                        <li><i class="fa-solid fa-flag"></i><span class="p-2">Report</span></li>
                        <li><i class="fa-solid fa-bookmark"></i><span class="p-2">Bookmark</span></li>
                    </ul>
                </div>
                <div class="friend-info">
                    <div class="friend-name">
                        <ins><a title="" href="time-line.html" style="font-size: 1rem;">' . $question[0]['username'] . '</a></ins>
                        <span>published: ' . $question[0]['publishedDate'] . '</span>
                    </div>
                </div>
                <div class="description">
                    <p style="font-size: 0.99rem;" >' . $question[0]['body'] . '</p>
                </div>
                <div class="we-video-info mb-3">
                <ul>
                            <li>
                                <span class="views" data-toggle="tooltip" title="views">
                                    <span><i class="fa-regular fa-eye"></i></span>(1.2k)
                                </span>
                            </li>
                            <li>
                                <span class="comment" data-toggle="tooltip" title="Answers">
                                    <span><i class="fa-solid fa-pen-to-square"></i></span>(52)
                                    <!-- <ins>52</ins> -->
                                </span>
                            </li>
                            <li data-toggle="tooltip" title="share">
                                <span>
                                    <span><i class="fa-solid fa-share-from-square"></i></span>(100)
                                </span>
                            </li>
                            <li data-toggle="tooltip" title="upvote">
                                <span>
                                    <span><i class="fa-solid fa-up-long"></i></span>(100)
                                </span>
                            </li>
                            <li data-toggle="tooltip" title="downvote">
                                <span>
                                    <span><i class="fa-solid fa-down-long"></i></span>(100)
                                </span>
                            </li>
                </ul>
                </div>
                <div class="coment-area"> <!-- Answers -->
                    <ul class="we-comet">
    
                        <li class="post-comment">
                            <div class="comet-avatar">
                                <img src="images/resources/comet-1.jpg" alt="">
                            </div>
                            <div class="newpst-input">
                                <form method="post">
                                    <textarea rows="2" style="font-size: large;" placeholder="Add an answer!"></textarea>
                                    <div class="attachments">
                                        <ul>
                                            <li>
                                                <i class="fa fa-image"></i>
                                                <label class="fileContainer">
                                                    <input type="file">
                                                </label>
                                            </li>
                                            <li>
                                                <button type="submit">Ask</button>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>';
}
}