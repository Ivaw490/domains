<?php // оставление отзыва


class task3 extends Base {
    private $feedbackList; // массив отзывов
    private $Msg; // сообщение при неверном заполнении формы

    // добавление нового отзыва или вывод сообщения о неверно заполненных полях
    function addFeedback(){
        if($result = insertFeedBack()){
            $this->setMsg($result);
        }
        $this->build();
    }

    function setMsg($msg){
        $this->Msg = $msg;
    }

    function getMsg(){
        return $this->Msg;
    }

    function setFeedback(){
        $this->feedbackList = getAllFeedBacks();
    }

    function getFeedBack(){
        return $this->feedbackList;
    }

    // построение страницы
    function build(){
        $this->title = 'task 3';
        $this->setFeedBack();
        $this->content = $this->Template("task3", array(
            "feedbackList" => $this->getFeedBack(),
            'msg' => $this->getMsg()));
    }
}