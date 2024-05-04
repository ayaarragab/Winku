<?php
echo '<a class="to-select-in-js" data-id='.$question[0]['id']."'";
echo ' onclick="'.'decreaseReacts'.'('.$question[0]['id'].')'.'">';
echo '<li data-toggle="tooltip" title="downvote"><span><span><i class="fa-solid fa-down-long"></i></span>';
echo $question[0]['numDownVotes'] . '</span></li>';