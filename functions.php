<?php
require('classLoader.php');

$lang = new \Language\lang();
if (!isset($debug)) {
  $db = new \Database\handle();
}

$langSiik = new \Language\language("siik", "Siik'maas");
$langSiik->setDescription("The traditionally employed tongue of Ahdomai, composed of expressive yowls and chirps. Native to the Tajaran.");
$langSiik->setSyllablesArr(array("mrr", "rr", "tajr", "kir", "raj", "kii", "mir", "kra", "ahk", "nal", "vah", "khaz", "jri", "ran", "darr",
  "mi", "jri", "dynh", "manq", "rhe", "zar", "rrhaz", "kal", "chur", "eech", "thaa", "dra", "jurl", "mah", "sanu", "dra", "ii'r",
  "ka", "aasi", "far", "wa", "baq", "ara", "qara", "zir", "sam", "mak", "hrar", "nja", "rir", "khan", "jun", "dar", "rik", "kah",
  "hal", "ket", "jurl", "mah", "tul", "cresh", "azu", "ragh", "mro", "mra", "mrro", "mrra"));
$lang->add($langSiik);

$langSinta = new \Language\language("sinta", "Sinta'unathi");
$langSinta->setDescription("The common language of Moghes, composed of sibilant hisses and rattles. Spoken natively by Unathi.");
$langSinta->setSyllablesArr(array("ss", "ss", "ss", "ss", "skak", "seeki", "resh", "las", "esi", "kor", "sh"));
$lang->add($langSinta);

$langRoot = new \Language\language("root", "Rootspeak");
$langRoot->setDescription("A creaking, subvocal language spoken instinctively by the Dionaea. Due to the unique makeup of the average Diona, a phrase of Rootspeak can be a combination of anywhere from one to twelve individual voices and notes.");
$langRoot->setSyllablesArr(array("hs", "zt", "kr", "st", "sh"));
$lang->add($langRoot);

$langSkrell = new \Language\language("skrell", "Skrellian");
$langSkrell->setDescription("A melodic and complex language spoken by the Skrell of Qerrbalak. Some of the notes are inaudible to humans.");
$langSkrell->setSyllablesArr(array("qr", "qrr", "xuq", "qil", "quum", "xuqm", "vol", "xrim", "zaoo", "qu-uu", "qix", "qoo", "zix", "*", "!"));
$lang->add($langSkrell);

$langBug = new \Language\language("bug", "Hivenet");
$langBug->setDescription("Complex Vaurcesian language comprised of rapid mandible-clicking, \"It's a bugs life.\"");
$langBug->setSyllablesArr(array("vaur", "uyek", "uyit", "avek", "sc'theth", "k'ztak", "teth", "wre'ge", "lii", "dra'", "zo'", "ra'", "k'lax'", "zz", "vh", "ik", "ak",
  "uhk", "zir", "sc'orth", "sc'er", "thc'yek", "th'zirk", "th'esk", "k'ayek", "ka'mil", "sc'", "ik'yir", "yol", "kig", "k'zit", "'", "'", "zrk", "krg", "isk'yet", "na'k",
  "sc'azz", "th'sc", "nil", "n'ahk", "sc'yeth", "aur'sk", "iy'it", "azzg", "a'", "i'", "o'", "u'", "a", "i", "o", "u", "zz", "kr", "ak", "nrk"));
$lang->add($langBug);

$langSol = new \Language\language("sol", "Sol Common");
$langSol->setDescription("A bastardized hybrid of informal English and elements of Mandarin Chinese; the common language of the Sol system.");
$langSol->setSyllablesArr(array("a", "ai", "an", "ang", "ao", "ba", "bai", "ban", "bang", "bao", "bei", "ben", "beng", "bi", "bian", "biao",
  "bie", "bin", "bing", "bo", "bu", "ca", "cai", "can", "cang", "cao", "ce", "cei", "cen", "ceng", "cha", "chai",
  "chan", "chang", "chao", "che", "chen", "cheng", "chi", "chong", "chou", "chu", "chua", "chuai", "chuan", "chuang", "chui", "chun",
  "chuo", "ci", "cong", "cou", "cu", "cuan", "cui", "cun", "cuo", "da", "dai", "dan", "dang", "dao", "de", "dei",
  "den", "deng", "di", "dian", "diao", "die", "ding", "diu", "dong", "dou", "du", "duan", "dui", "dun", "duo", "e",
  "ei", "en", "er", "fa", "fan", "fang", "fei", "fen", "feng", "fo", "fou", "fu", "ga", "gai", "gan", "gang",
  "gao", "ge", "gei", "gen", "geng", "gong", "gou", "gu", "gua", "guai", "guan", "guang", "gui", "gun", "guo", "ha",
  "hai", "han", "hang", "hao", "he", "hei", "hen", "heng", "hm", "hng", "hong", "hou", "hu", "hua", "huai", "huan",
  "huang", "hui", "hun", "huo", "ji", "jia", "jian", "jiang", "jiao", "jie", "jin", "jing", "jiong", "jiu", "ju", "juan",
  "jue", "jun", "ka", "kai", "kan", "kang", "kao", "ke", "kei", "ken", "keng", "kong", "kou", "ku", "kua", "kuai",
  "kuan", "kuang", "kui", "kun", "kuo", "la", "lai", "lan", "lang", "lao", "le", "lei", "leng", "li", "lia", "lian",
  "liang", "liao", "lie", "lin", "ling", "liu", "long", "lou", "lu", "luan", "lun", "luo", "ma", "mai", "man", "mang",
  "mao", "me", "mei", "men", "meng", "mi", "mian", "miao", "mie", "min", "ming", "miu", "mo", "mou", "mu", "na",
  "nai", "nan", "nang", "nao", "ne", "nei", "nen", "neng", "ng", "ni", "nian", "niang", "niao", "nie", "nin", "ning",
  "niu", "nong", "nou", "nu", "nuan", "nuo", "o", "ou", "pa", "pai", "pan", "pang", "pao", "pei", "pen", "peng",
  "pi", "pian", "piao", "pie", "pin", "ping", "po", "pou", "pu", "qi", "qia", "qian", "qiang", "qiao", "qie", "qin",
  "qing", "qiong", "qiu", "qu", "quan", "que", "qun", "ran", "rang", "rao", "re", "ren", "reng", "ri", "rong", "rou",
  "ru", "rua", "ruan", "rui", "run", "ruo", "sa", "sai", "san", "sang", "sao", "se", "sei", "sen", "seng", "sha",
  "shai", "shan", "shang", "shao", "she", "shei", "shen", "sheng", "shi", "shou", "shu", "shua", "shuai", "shuan", "shuang", "shui",
  "shun", "shuo", "si", "song", "sou", "su", "suan", "sui", "sun", "suo", "ta", "tai", "tan", "tang", "tao", "te",
  "teng", "ti", "tian", "tiao", "tie", "ting", "tong", "tou", "tu", "tuan", "tui", "tun", "tuo", "wa", "wai", "wan",
  "wang", "wei", "wen", "weng", "wo", "wu", "xi", "xia", "xian", "xiang", "xiao", "xie", "xin", "xing", "xiong", "xiu",
  "xu", "xuan", "xue", "xun", "ya", "yan", "yang", "yao", "ye", "yi", "yin", "ying", "yong", "you", "yu", "yuan",
  "yue", "yun", "za", "zai", "zan", "zang", "zao", "ze", "zei", "zen", "zeng", "zha", "zhai", "zhan", "zhang", "zhao",
  "zhe", "zhei", "zhen", "zheng", "zhi", "zhong", "zhou", "zhu", "zhua", "zhuai", "zhuan", "zhuang", "zhui", "zhun", "zhuo", "zi",
  "zong", "zou", "zuan", "zui", "zun", "zuo", "zu",
  "al", "an", "ar", "as", "at", "ea", "ed", "en", "er", "es", "ha", "he", "hi", "in", "is", "it",
  "le", "me", "nd", "ne", "ng", "nt", "on", "or", "ou", "re", "se", "st", "te", "th", "ti", "to",
  "ve", "wa", "all", "and", "are", "but", "ent", "era", "ere", "eve", "for", "had", "hat", "hen", "her", "hin",
  "his", "ing", "ion", "ith", "not", "ome", "oul", "our", "sho", "ted", "ter", "tha", "the", "thi",
  "al", "an", "ar", "as", "at", "ea", "ed", "en", "er", "es", "ha", "he", "hi", "in", "is", "it",
  "le", "me", "nd", "ne", "ng", "nt", "on", "or", "ou", "re", "se", "st", "te", "th", "ti", "to",
  "ve", "wa", "all", "and", "are", "but", "ent", "era", "ere", "eve", "for", "had", "hat", "hen", "her", "hin",
  "his", "ing", "ion", "ith", "not", "ome", "oul", "our", "sho", "ted", "ter", "tha", "the", "thi",
  "al", "an", "ar", "as", "at", "ea", "ed", "en", "er", "es", "ha", "he", "hi", "in", "is", "it",
  "le", "me", "nd", "ne", "ng", "nt", "on", "or", "ou", "re", "se", "st", "te", "th", "ti", "to",
  "ve", "wa", "all", "and", "are", "but", "ent", "era", "ere", "eve", "for", "had", "hat", "hen", "her", "hin",
  "his", "ing", "ion", "ith", "not", "ome", "oul", "our", "sho", "ted", "ter", "tha", "the", "thi",
  "al", "an", "ar", "as", "at", "ea", "ed", "en", "er", "es", "ha", "he", "hi", "in", "is", "it",
  "le", "me", "nd", "ne", "ng", "nt", "on", "or", "ou", "re", "se", "st", "te", "th", "ti", "to",
  "ve", "wa", "all", "and", "are", "but", "ent", "era", "ere", "eve", "for", "had", "hat", "hen", "her", "hin",
  "his", "ing", "ion", "ith", "not", "ome", "oul", "our", "sho", "ted", "ter", "tha", "the", "thi",
  "al", "an", "ar", "as", "at", "ea", "ed", "en", "er", "es", "ha", "he", "hi", "in", "is", "it",
  "le", "me", "nd", "ne", "ng", "nt", "on", "or", "ou", "re", "se", "st", "te", "th", "ti", "to",
  "ve", "wa", "all", "and", "are", "but", "ent", "era", "ere", "eve", "for", "had", "hat", "hen", "her", "hin",
  "his", "ing", "ion", "ith", "not", "ome", "oul", "our", "sho", "ted", "ter", "tha", "the", "thi",
  "al", "an", "ar", "as", "at", "ea", "ed", "en", "er", "es", "ha", "he", "hi", "in", "is", "it",
  "le", "me", "nd", "ne", "ng", "nt", "on", "or", "ou", "re", "se", "st", "te", "th", "ti", "to",
  "ve", "wa", "all", "and", "are", "but", "ent", "era", "ere", "eve", "for", "had", "hat", "hen", "her", "hin",
  "his", "ing", "ion", "ith", "not", "ome", "oul", "our", "sho", "ted", "ter", "tha", "the", "thi"));
$lang->add($langSol);

$langSign = new \Language\language("sign", "Sign Language");
$langSign->setDescription("A signed version of Standard, though its intent is primarily to help out people who are deaf and mute.");
$langSign->setSyllablesArr(array("signs", "gestures"));
$langSign->setSpaceChance(100);
$lang->add($langSign);

$langTrade = new \Language\language("trade", "Tradeband");
$langTrade->setDescription("Maintained by the various trading cartels in major systems, this elegant, structured language is used for bartering and bargaining.");
$langTrade->setSyllablesArr(array("lorem", "ipsum", "dolor", "sit", "amet", "consectetur", "adipiscing", "elit",
  "sed", "do", "eiusmod", "tempor", "incididunt", "ut", "labore", "et", "dolore",
  "magna", "aliqua", "ut", "enim", "ad", "minim", "veniam", "quis", "nostrud",
  "exercitation", "ullamco", "laboris", "nisi", "ut", "aliquip", "ex", "ea", "commodo",
  "consequat", "duis", "aute", "irure", "dolor", "in", "reprehenderit", "in",
  "voluptate", "velit", "esse", "cillum", "dolore", "eu", "fugiat", "nulla",
  "pariatur", "excepteur", "sint", "occaecat", "cupidatat", "non", "proident", "sunt",
  "in", "culpa", "qui", "officia", "deserunt", "mollit", "anim", "id", "est", "laborum"));
$langTrade->setSpaceChance(100);
$lang->add($langTrade);

$langGut = new \Language\language("gut", "Gutter");
$langGut->setDescription("Much like Standard, this crude pidgin tongue descended from numerous languages and serves as Tradeband for criminal elements.");
$langGut->setSyllablesArr(array("slo","nik","ko","zels","het","zlo","nis","iv","da","ati","yib","ban","dup","sha","ansh","nou","nec","zby", "ci"));
$lang->add($langGut);

function generateScramble($syllables, $input, \Language\language $language, $insizeplus = 0) {
  $insize = strlen($input) + $insizeplus;
  $scram = "";
  $capitalize = 1;

  while (strlen($scram) < $insize) {
    $next = $syllables[rand(0, sizeof($syllables) - 1)];
    if ($capitalize) {
      $next = ucwords($next);
      $capitalize = 0;
    }
    $scram = $scram . $next;
    $chance = rand(0, 100);
    if ($chance <= 5) {
      $scram = $scram . ". ";
      $capitalize = 1;
    }
    if ($chance > 5 && $chance <= $language->getSpaceChance()) {
      $scram = $scram . " ";
    }
  }
  $scram = rtrim($scram);

  $ending = substr($scram, -1);
  if ($ending == ".") {
    $scram = substr($scram, 0, -1);
  }

  $inending = substr($input, -1);
  if (in_array($inending, array("!", "?", "."), true)) {
    $scram = $scram . $inending;
  }

  return $scram;
}

function scramble($syllables, $input, \Language\language $language) {
  global $db;

  if (!isset($debug)) {
    //If the input has already been translated
    $row = $db->findTranslation($language->getKey(), $input);
    if ($row != false) {
      return $row['output'];
    }

    $scram = generateScramble($syllables, $input, $language);

    //Attempt to get rid of collisions
    $count = 0;
    $insize = 0;
    while ($db->findTranslationByText($scram) == $scram) {
      $scram = generateScramble($syllables, $input, $language, $insize);
      if ($count == 5) {
        $insize++;
        $count = 0;
      }
      $count++;
    }

    $db->insertScramble($language->getKey(), $input, $scram);
  } else {
    return generateScramble($syllables, $input, $language);
  }

  return $scram;
}

function buildOptions() {
  global $lang;
  $keys = $lang->getKeys();
  foreach ($keys as $k) {
    $l = $lang->get($k);
    $add = "";
    if (isset($_POST['select'])) {
      if ($_POST['select'] == $k) {
        $add = 'selected="selected"';
      }
    }
    echo "<option value='" . $l->getKey() . "'" . $add . ">" . $l->getName() . "</option>";
  }
}

function getLanguageName() {
  global $lang;
  $l = $lang->get($_POST['select']);
  echo $l->getName();
}

function getLanguageDesc() {
  global $lang;
  $l = $lang->get($_POST['select']);
  echo $l->getDescription();
}

function getLanguageTranslation() {
  global $lang;
  $l = $lang->get($_POST['select']);
  echo scramble($l->getSyllablesArr(), $_POST['textarea'], $l);
}

function getReverseLanguageTranslation() {
  global $db;
  global $lang;

  $result = $db->findTranslationByText(rtrim($_POST['textarea2']));
  if ($result) {
    $l = $lang->get($result['lkey']);
    echo
     '<h1 class="cover-heading">' . $l->getName() . '</h1>' .
     '<p class="small">' . $l->getDescription() . '</p>' .
     '<hr />' .
     '<p class="lead">' . $result['input'] . '</p>' .
     '<hr />'
    ;
  } else {
    echo '<h1 class="cover-heading">No translation could be found.</h1>';
  }
}
