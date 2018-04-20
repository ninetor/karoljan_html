<?php

session_start();

class NSEngineTesting
{
	public $questData     = array();
	public $questCount    = 5;
	public $questNumb     = 0;
	public $questCountAll = 0;
	public $startPage     = 'index.php';
	public $workPage      = 'testing.php';
	public $finalPage     = '../in.html?popup';
	public $curPage       = '';


	public function __construct(){
		$this->questData = $this->getDataQuest();
		$this->questCountAll = count($this->questData);
		$this->curPage = $this->workPage;
		$this->getQuestNumber();
	}

	//get data quest
	private function getDataQuest(){
		return require('datas.php');
	}

	//get cur quest
	public function getCurQuestion($questId){
		$arQuest = $this->questData;
		if(isset($arQuest[$questId]['QUESTION']) && !empty($arQuest[$questId]['QUESTION'])){
			return $arQuest[$questId]['QUESTION'];
		}
		else{ return false;}
	}
	
	//get cur image
	public function getCurImage ($questId) {
		$arQuest = $this->questData;
		if(isset($arQuest[$questId]['IMG']) && !empty($arQuest[$questId]['IMG'])){
			return $arQuest[$questId]['IMG'];
		}
		else {return false;}		
	}

	//get cur answers
	public function getCurAnswers($questId){
		$arQuest = $this->questData;
		if(is_array($arQuest[$questId]['ANSWERS']) && !empty($arQuest[$questId]['ANSWERS'])){
			return $arQuest[$questId]['ANSWERS'];
		}
		else{ return false;}
	}

	//reset session
	public function delCurSess(){
		if(isset($_SESSION['CUR_USER']) && !empty($_SESSION['CUR_USER'])){
			unset($_SESSION['USERS_ANS'][$_SESSION['CUR_USER']]);
			unset($_SESSION['CUR_USER']);
			return true;
		}
		else{
			return false;
		}
	}

	//get quest numb in session
	public function questNumbInSess(){
		$numbQuest = 0;
		if(isset($_SESSION['CUR_USER']) && isset($_SESSION['USERS_ANS'][$_SESSION['CUR_USER']]['CNT'])){
			$numbQuest = intval($_SESSION['USERS_ANS'][$_SESSION['CUR_USER']]['CNT']) + 1;
		}
		return $numbQuest;
	}

	//session & quest number
	public function getQuestNumber(){
		if(isset($_SESSION['CUR_USER']) && !empty($_SESSION['CUR_USER'])){
			if($_SESSION['USERS_ANS'][$_SESSION['CUR_USER']]['CNT'] == ($this->questCount -1)){
				$this->curPage = $this->finalPage;
			}
			if($_SESSION['USERS_ANS'][$_SESSION['CUR_USER']]['CNT'] >= $this->questCount){
				$this->questNumb = ($_SESSION['USERS_ANS'][$_SESSION['CUR_USER']]['QUEST_NUMB']+1 < $this->questCountAll)?$_SESSION['USERS_ANS'][$_SESSION['CUR_USER']]['QUEST_NUMB']:0;
				$str_log = date('d-m-Y H:i:s').';'.$_SESSION['CUR_USER'].';'.$_SESSION['USERS_ANS'][$_SESSION['CUR_USER']]['RESULTS'];
				file_put_contents('./results.csv', "\r\n".$str_log, FILE_APPEND);
				$this->delCurSess();
			}
		}
		if(isset($_SESSION['CUR_USER']) && !empty($_SESSION['CUR_USER'])){
			if(isset($_SESSION['USERS_ANS'][$_SESSION['CUR_USER']]['QUEST_NUMB']) && !empty($_SESSION['USERS_ANS'][$_SESSION['CUR_USER']]['QUEST_NUMB'])){
				if($_SESSION['USERS_ANS'][$_SESSION['CUR_USER']]['QUEST_NUMB'] < $this->questCountAll){
					$this->questNumb = $_SESSION['USERS_ANS'][$_SESSION['CUR_USER']]['QUEST_NUMB'];
				}
				else{
					$_SESSION['USERS_ANS'][$_SESSION['CUR_USER']]['QUEST_NUMB'] = $this->questNumb = 0;
				}
			}
		}
		else{
			$_SESSION['CUR_USER'] = md5(uniqid(rand(), true));
			$_SESSION['USERS_ANS'][$_SESSION['CUR_USER']] = array(
				"QUEST_NUMB" => $this->questNumb,
				"CNT" => 0
			);
		}
		return $this->questNumb;
	}

	public function fixAnswer($value){
		if(isset($_SESSION['USERS_ANS'][$_SESSION['CUR_USER']]['RESULTS'])){
		}
		else{
			$_SESSION['USERS_ANS'][$_SESSION['CUR_USER']]['RESULTS'] = 0;
		}

		$_SESSION['USERS_ANS'][$_SESSION['CUR_USER']]['RESULTS'] += $value;

		$_SESSION['USERS_ANS'][$_SESSION['CUR_USER']]['CNT']++;
	}
}
?>
