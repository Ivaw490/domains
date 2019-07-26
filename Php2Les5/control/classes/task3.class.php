<?php // оставление отзыва


class task3 extends Base {
    private $feedbackList; // массив отзывов
    private $msg; // сообщение при неверном заполнении формы

    // добавление нового отзыва или вывод сообщения о неверно заполненных полях
    protected function addFeedback(){
        if($result = insertFeedBack()){
            $this->setMsg($result);
            $this->build();
        }else{
            header("location: index.php?p=task3&a=build");
        }
    }

    private function setMsg($msg){
        $this->msg = $msg;
    }

    private function getMsg(){
        return $this->msg;
    }

    private function setFeedback(){
        $this->feedbackList = getAllFeedBacks();
    }

    private function getFeedBack(){
        return $this->feedbackList;
    }

    // построение страницы
    protected function build(){
        $this->title = 'task 3';
        $this->setFeedBack();
        $this->content = $this->Template("task3", array(
            'msg' => $this->getMsg(), "feedbackList" => $this->getFeedBack()));
    }
}