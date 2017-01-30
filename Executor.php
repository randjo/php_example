<?php
class Executor {
    
    private $entity;
    
    function __construct(IIntroducable $entity) {
        $this->entity = $entity;
    }
    
    function getEntity() {
        return $this->entity;
    }

    function setEntity($entity) {
        $this->entity = $entity;
    }
    
    public function makeItSpeak() {
        echo '---------- I will make you speak! ----------<br>';
        $this->entity->introduceYourSelf();
        echo '<br>---------- Ha-ha-ha! I told you! ----------<br>';
    }
}