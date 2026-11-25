<?php
if (isset($_POST["nome"])) {
    echo "Seja bem vindo " . $_POST["nome"] ?? "";
};
var_dump($_POST);
