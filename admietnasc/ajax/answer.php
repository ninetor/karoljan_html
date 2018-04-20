<?php

require('../engine.php');

if(isset($_SESSION['CUR_USER']) && !empty($_SESSION['CUR_USER'])){
    if(isset($_SESSION['USERS_ANS'][$_SESSION['CUR_USER']]['QUEST_NUMB']) ){

        if(isset($_POST['idQ']) && $_POST['idQ'] == $_SESSION['USERS_ANS'][$_SESSION['CUR_USER']]['QUEST_NUMB']){
            $quest = new NSEngineTesting;
            $value = isset($_POST['idA']) ? $_POST['idA'] : 0;
            $quest->fixAnswer($value);
            $_SESSION['USERS_ANS'][$_SESSION['CUR_USER']]['QUEST_NUMB']++;
        }
    }
}

echo json_encode(true);
?>
