<?php
   date_default_timezone_set("Asia/kolkata");
    $content = file_get_contents("php://input");
    $update = json_decode($content, true);
    $chat_id = $update["message"]["chat"]["id"];
    $message = $update["message"]["text"];
    $id = $update["message"]["from"]["id"];
 if ($message && $id == 1171876903){ send_message("@Parul1A3", "$message \nNotification pushed by @NotifiyMe_robot"); }

function send_message($channel_id, $message){
       $text = urlencode($message);
      file_get_contents("https://api.telegram.org/bot1404955037:AAGpzlePwzjyFhVXmGf7kTqmDblAgUF7ofA/sendMessage?chat_id=$channel_id&text=$text"); }
?>
