<?php

header('Content-Type: application/json;charset=utf-8');

$string= $_GET['text'];
$lang = $_GET['lan'];
$to = $_GET['to'];
$txt = strtoupper($string);
$lan = strtoupper($lang);
$tol = strtoupper($to);
$txt1 = str_replace("+"," ",$txt);
$text = $txt1;
$source = $lan;
$target = $tol;
 
$translation 	= GoogleTranslate::translate($source, $target, $text);
 

//print_r($translation);

if($string == false || $lang == false || $to == false){
	
	
	Echo ("›› کد های موجود : ".PHP_EOL."  sq => آلبانیایی  ".PHP_EOL."  az => آذرباﻳﺠﺎﻧﻰ  ".PHP_EOL."  de => آلمانی  ".PHP_EOL."  ur => اردو  ".PHP_EOL."  hy => ارمنی  ".PHP_EOL."  uz => ازبکی  ".PHP_EOL."  es => اسپانیایی  ".PHP_EOL."  eo => اسپرانتو  ".PHP_EOL."  et => استونيايی  ".PHP_EOL."  sk => اسلواکی  ".PHP_EOL."  sl => اسلونیایی  ".PHP_EOL."  af => افریکانس  ".PHP_EOL."  uk => اکراينی  ".PHP_EOL."  am => امهری  ".PHP_EOL."  id => اندونزيايی  ".PHP_EOL."  en => انگلیسی  ".PHP_EOL."  it => ایتالیایی  ".PHP_EOL."  ga => ایرلندی  ".PHP_EOL."  is => ايسلندی  ".PHP_EOL."  ig => ایگبو  ".PHP_EOL."  eu => باسکی  ".PHP_EOL."  my => برمه‌ای  ".PHP_EOL."  be => بلاروسی  ".PHP_EOL."  bg => بلغاری  ".PHP_EOL."  bn => بنگالی  ".PHP_EOL."  bs => بوسنیایی  ".PHP_EOL."  pt => پرتغالی  ".PHP_EOL."  ps => پشتو  ".PHP_EOL."  pa => پنجابی  ".PHP_EOL."  tg => تاجیک  ".PHP_EOL."  ta => تاميلی  ".PHP_EOL."  th => تايلندی  ".PHP_EOL."  tr => ترکی استانبولی  ".PHP_EOL."  te => تلوگو  ".PHP_EOL."  jw => جاوه‌ای  ".PHP_EOL."  cs => چک  ".PHP_EOL."  ny => چوایی  ".PHP_EOL."  zh-CN => چینی  ".PHP_EOL."  km => خمری  ".PHP_EOL."  xh => خوسایی  ".PHP_EOL."  da => دانمارکی  ".PHP_EOL."  ru => روسی  ".PHP_EOL."  ro => رومانيايی  ".PHP_EOL."  zu => زولو  ".PHP_EOL."  ja => ژاپنی  ".PHP_EOL."  sm => ساموایی  ".PHP_EOL."  ceb => سبوانو  ".PHP_EOL."  sd => سندی  ".PHP_EOL."  sw => سواهيلی  ".PHP_EOL."  sv => سوئدی  ".PHP_EOL."  st => سوتو  ".PHP_EOL."  su => سودانی  ".PHP_EOL."  so => سومالیایی  ".PHP_EOL."  si => سینهالی  ".PHP_EOL."  sn => شونا  ".PHP_EOL."  sr => صربی  ".PHP_EOL."  iw => عبری  ".PHP_EOL."  ar => عربی  ".PHP_EOL."  fa => فارسی  ".PHP_EOL."  fr => فرانسوی  ".PHP_EOL."  fy => فريسی  ".PHP_EOL."  fi => فنلاندی  ".PHP_EOL."  tl => فیلیپینی  ".PHP_EOL."  ky => قرقیزی  ".PHP_EOL."  kk => قزاقی  ".PHP_EOL."  ca => کاتالان  ".PHP_EOL."  kn => کانارا  ".PHP_EOL."  ht => کرئول هائیتی  ".PHP_EOL."  ku => کردی  ".PHP_EOL."  co => كرسی  ".PHP_EOL."  hr => کرواتی  ".PHP_EOL."  ko => کره‌ای  ".PHP_EOL."  gl => گالیسی  ".PHP_EOL."  gd => گاليک اسکاتلندی  ".PHP_EOL."  gu => گجراتی  ".PHP_EOL."  ka => گرجی  ".PHP_EOL."  lo => لائوسی  ".PHP_EOL."  la => لاتين  ".PHP_EOL."  lv => لتونيايی  ".PHP_EOL."  lb => لوگزامبورگی  ".PHP_EOL."  pl => لهستانی  ".PHP_EOL."  lt => ليتوانيايی  ".PHP_EOL."  mi => مائوری  ".PHP_EOL."  mg => مالاگاسی  ".PHP_EOL."  ml => مالایالمی  ".PHP_EOL."  ms => مالايی  ".PHP_EOL."  mt => مالتی  ".PHP_EOL."  hu => مجاری  ".PHP_EOL."  mr => مراتی  ".PHP_EOL."  mn =>مغولی   ".PHP_EOL."  mk => مقدونيه‌ای  ".PHP_EOL."  ne => نپالی  ".PHP_EOL."  no => نروژی  ".PHP_EOL."  cy => ولزی  ".PHP_EOL."  vi => ويتنامی  ".PHP_EOL."  haw => هاوایی  ".PHP_EOL."  nl => هلندی  ".PHP_EOL."  hmn => همونگ  ".PHP_EOL."  hi => هندی  ".PHP_EOL."  ha => هوسا  ".PHP_EOL."  yi => یدیشی  ".PHP_EOL."  yo => یوروبایی  ".PHP_EOL."  el => يونانی ");
	
	
}else{

echo json_encode(array_merge(['ok'=> true, 'results'=>['Creator'=>"MONSTER_hp",'Team'=>"@MONSTER_SECURITY",'lang_text'=>"$source",'lang_to'=>"$target",'text'=>"$translation",


]]), 448);
}
 
class GoogleTranslate
{
 
    public static function translate($source, $target, $text) {
		
        $response 		= self::requestTranslation($source, $target, $text);
        $translation 	= self::getSentencesFromJSON($response);
        return $translation;
    }
 
    protected static function requestTranslation($source, $target, $text) {
        $url = "https://translate.google.com/translate_a/single?client=at&dt=t&dt=ld&dt=qca&dt=rm&dt=bd&dj=1&hl=es-ES&ie=UTF-8&oe=UTF-8&inputm=2&otf=2&iid=1dd3b944-fa62-4b55-b330-74909a99969e";
        $fields = array(
            'sl' => urlencode($source),
            'tl' => urlencode($target),
            'q' => urlencode($text)
        );
 
        $fields_string = "";
        foreach($fields as $key=>$value) {
            $fields_string .= $key.'='.$value.'&';
        }
        
        rtrim($fields_string, '&');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_USERAGENT, 'AndroidTranslate/5.3.0.RC02.130475354-53000263 5.1 phone TRANSLATE_OPM5_TEST_1');
 
        $result = curl_exec($ch);
 
        curl_close($ch);
        return $result;
    }
 
    protected static function getSentencesFromJSON($json) {
        $sentencesArray = json_decode($json, true);
        $sentences = "";
        foreach ($sentencesArray["sentences"] as $s) {
            $sentences .= $s["trans"];
        }
        return $sentences;
}}

Echo $sentences;





?>