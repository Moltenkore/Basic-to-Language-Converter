<?php

require('functions.php');

header("Content-Type: application/json");
header("Access-Control-Allow-Orgin: *");
header("Access-Control-Allow-Methods: *");

function err($text) {
  $arr = array(
    "status" => "error",
    "message" => $text
  );
  echo json_encode($arr);
}

function prep($arr) {
  $arrr = array(
    "result" => $arr,
    "status" => "success"
  );
  echo json_encode($arrr);
}

$para = array();

if (isset($_POST)) {
  $para = array_merge($para, $_POST);
}
if (isset($_GET)) {
  $para = array_merge($para, $_GET);
}

if (isset($para['o'])) {
  if ($para['o'] == "keys") {
    $arr = array(
      "keys" => $lang->getKeys()
    );
    prep($arr);
  }

  if ($para['o'] == "info") {
    if (isset($para["l"])) {
      if ($lang->exists($para["l"])) {
        //echo json_encode($lang->get($para["l"]));
        $l = $lang->get($para["l"]);
        $arr = array(
          "key" => $l->getKey(),
          "name" => $l->getName(),
          "description" => $l->getDescription(),
          "syllables" => $l->getSyllablesArr(),
          "spacechance" => $l->getSpaceChance(),
        );
        prep($arr);
      } else {
        err("language does not exist.");
      }
    } else {
      err("missing parameter l (language).");
    }
  }

  if ($para['o'] == "translate") {
    if (isset($para['t']) && isset($para['l'])) {
      if ($lang->exists($para['l'])) {
        $l = $lang->get($para['l']);
        $arr = array(
          "translation" => scramble($l->getSyllablesArr(), $para['t'], $l)
        );
        prep($arr);
      } else {
        err("language does not exist.");
      }
    } else {
      err("missing parameter(s).");
    }
  }

  if ($para['o'] == "decode") {
    if (isset($para['t'])) {
      $result = $db->findTranslationByText($para['t']);
      if ($result) {
        $arr = array(
          "translation" => $result['input']
        );
        prep($arr);
      } else {
        err("no translation found.");
      }
    } else {
      err("missing parameter t (text)");
    }
  }
}
