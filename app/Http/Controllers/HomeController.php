<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
      $surahid = 1;
      $surahs = json_decode(file_get_contents('data/surah_list.json'), true);
      $ayahs = json_decode(file_get_contents('data/'.$surahid.'.json'), true);
      $ayahCount = sizeof($ayahs['data'][0]['ayahs']);
      $playlist = array();
      $value = 1000 *  $surahid;
      array_push($playlist, array("title"=>"I seek Allah’s protection/refuge/shelter from Shaitaan, the Accursed one.", "author"=>"أعوذ بالله من الشيطان الرجيم", "url"=>'media/basfar_walk/1/0.mp3' ) );
      for($i = 0; $i < $ayahCount; $i++){
        if($surahid < 10){
          array_push($playlist, array("title"=>$ayahs['data'][1]['ayahs'][$i]['text'], "author"=>$ayahs['data'][0]['ayahs'][$i]['text'], "url"=>'media/basfar_walk/00'.$surahid.'/00'.($value+$i).'.mp3' ));
        }else{
          array_push($playlist, array("title"=>$ayahs['data'][1]['ayahs'][$i]['text'], "author"=>$ayahs['data'][0]['ayahs'][$i]['text'], "url"=>'media/basfar_walk/0'.$surahid.'/0'.($value+$i).'.mp3' ));
        }
      }

      $prayerTimes = file_get_contents('http://api.aladhan.com/timingsByCity?city=male&country=MV&method=2');
      $prayerTimes = json_decode($prayerTimes);
      return view ('home', compact('surahs', 'playlist', 'prayerTimes'));
    }

    public function getSurah(Request $request){
        $surahid = $request->input( 'name' );
        if($surahid === null){
          return $this->index();
        }
        $ayahs = json_decode(file_get_contents('data/'.$surahid.'.json'), true);
        $ayahCount = sizeof($ayahs['data'][0]['ayahs']);
        $playlist = array();
        $value = 1000 *  $surahid;

        for($i = 0; $i < $ayahCount; $i++){
            if($surahid < 10){
              array_push($playlist, array("title"=>$ayahs['data'][1]['ayahs'][$i]['text'], "author"=>$ayahs['data'][0]['ayahs'][$i]['text'], "url"=>'media/basfar_walk/00'.$surahid.'/00'.($value+$i).'.mp3' ));
            }elseif($surahid > 9 && $surahid < 100){
              array_push($playlist, array("title"=>$ayahs['data'][1]['ayahs'][$i]['text'], "author"=>$ayahs['data'][0]['ayahs'][$i]['text'], "url"=>'media/basfar_walk/0'.$surahid.'/0'.($value+$i).'.mp3' ));
            }
            else{
              array_push($playlist, array("title"=>$ayahs['data'][1]['ayahs'][$i]['text'], "author"=>$ayahs['data'][0]['ayahs'][$i]['text'], "url"=>'media/basfar_walk/'.$surahid.'/'.($value+$i).'.mp3' ));
            }
        }
        return $playlist;

    }
}
