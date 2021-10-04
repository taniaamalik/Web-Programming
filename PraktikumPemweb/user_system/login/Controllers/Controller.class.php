<?php
    class Controller {
        public function loadModel($modelName) {
            include_once "Models/Model.class.php";
            include_once "Models/$modelName.class.php";

            return new $modelName;
        }

        public function loadView($viewName, $data = []) {
            foreach ($data as $var => $value) {
                $$var = $value;
            }

            include_once "Views/$viewName.php";
        }
    }