<?php

    abstract class htmlElement {
        private $name;
        private $id;
        private $style;
    
        abstract function renderHtml();

        public function getName()
        {
                return $this->name;
        }

        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        public function getId()
        {
                return $this->id;
        }

        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        public function getStyle()
        {
                return $this->style;
        }

        public function setStyle($style)
        {
                $this->style = $style;

                return $this;
        }
    }


?>