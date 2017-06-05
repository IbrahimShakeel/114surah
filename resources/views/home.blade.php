<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	       <meta name="_token" content="{!! csrf_token() !!}"/>
        <title>114surah</title>
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

        <link href="https://fonts.googleapis.com/css?family=Lateef|Didact+Gothic|Varela+Round" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/aplayer.css">

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Didact Gothic', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .links{
              margin-top: 1em;

            }

            .links > a {
                color: #444;
                padding: 0 10px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-transform: uppercase;
                color:#A79C8E;
            }
            .links >a:hover {
                color: #6B5344;``
            }
            .links > a > i{
              font-size: 2em;
            }

            .m-b-md {
                margin-bottom: 30px;
                margin-top: 2em;
            }
            .media-div{
              text-align:left;
              margin-bottom: 2em;
              width: 100%;
              padding: 5px;

            }

            select.custom-dropdown {
             -webkit-appearance: none;
             -moz-appearance: none;
             border: 0 !important;
             color: #fff;
             -webkit-border-radius: 5px;
             font-size: 1.3em;
             font-weight: 100;
             padding: 10px;
             width: 99%;
             cursor: pointer;
             background: #3EC987 url(img/drop-down-arrow.png) no-repeat right center;
             border-radius: 3px;
             background-size: 40px 37px;
             outline: none;
            font-family: 'Didact Gothic', sans-serif, 'Lateef', cursive;
            }


            table {
              line-height: 0.9rem;
              width: auto;

            }
              td {
                width: 20%;
                text-align: center;
                font-family: 'Didact Gothic', sans-serif;
                font-weight: 400;
              }

              tr:first-child {
                text-transform: uppercase;
                font-size: 12px;
                color:#777;
              }

              tr:last-child {
                font-size:18px;
                color:#777;
              }

              p.h4{
                font-size: 1em;
                font-family: 'Didact Gothic', sans-serif;
                margin-bottom: 1em;
                color: #777;
              }

              .pic-round-corner {
                display: block;
                width: 10em;
                height: 10em;
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;
                border: solid 1px #ccc;
              }
        </style>
    </head>
    <body>
      <nav class="navbar navbar-toggleable-md navbar-light bg-faded" style="background-color: #fff; margin-left: 10%; margin-right: 10%; width:80%;">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" style="font-family: Didact Gothic; font-size:1.5em;
          letter-spacing:1px; color:#3EC987; font-weight: 100; " href="{{ url('/') }}">
              114surah.
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <div class="form-inline my-2 my-lg-0">
            <a style="color:#3EC987;" onclick="return showHideFAQ();"><i class="fa fa-question-circle fa-fw" aria-hidden="true" style="cursor:pointer; font-size:1.8rem;" ></i></a>
            <a style="color:#3EC987;" href="https://github.com/IbrahimShakeel/114surah"><i class="fa fa-github fa-fw" aria-hidden="true" style=" font-size:1.8rem;"></i></a>
          </div>
        </div>
      </nav>
      <div class="container theme-showcase" role="main">
        <div class="jumbotron" style="background-color: #fff; padding:0px;">
          <div class="alert alert-warning alert-dismissible fade show" role="alert" >
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="alert-heading">Disclaimer!</h4>
            <p>I do not own the content provided here. The audio files have been downloaded from www.everyayah.com and the text has been pulled from alquran.cloud.</p>
            <p class="mb-0">I will make an effort to fix things as/if they break.</p>
          </div>
            <div id="faq" class="media-div" style="display:none;">
              <div class="card">
                <div class="card-header">
                  Frequently Asked Questions
                  <a class="btn btn-xs btn-default pull-right" onclick="return showHideFAQ();"><i class="fa fa-close fa-fw" aria-hidden="true" style="font-size:0.8rem; color:#636b6f"></i></a>
                </div>
                <div class="card-block">
                  <div id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="card">
                      <div class="card-header"role="tab" id="headingOne">
                        <h5 class="mb-0">
                          <a data-toggle="collapse"  style="color:#636b6f; font-size: 1rem;" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Is this service free?
                          </a>
                        </h5>
                      </div>

                      <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                        <div class="card-block">
                          <i class="fa fa-arrow-right fa-fw" aria-hidden="true" style="font-size:1.0rem;"></i>Yes, This is a free service unless you are the dude who wrote the original sun.mv article to which the following text belongs.
                          <div class="row" style="text-align: center;">
                            <img class="pic-round-corner" src="img/article_snapshot.jpg">
                          </div>
                          <br><i class="fa fa-arrow-right fa-fw" aria-hidden="true" style="font-size:1.0rem;"></i>In which case you will have to pay MVR 10,000.00 to any charity of your choice on behalf of everyone working in IT sector in the  Maldives.
                          <br><i class="fa fa-arrow-right fa-fw" aria-hidden="true" style="font-size:1.0rem;"></i>This is a recurrent fee and by using this website you agree to pay the amount every time you use our service. Thank you :)
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" role="tab" id="headingTwo">
                        <h5 class="mb-0">
                          <a class="collapsed" style="color:#636b6f; font-size: 1rem;" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Who built this?
                          </a>
                        </h5>
                      </div>
                      <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="card-block">
                          <i class="fa fa-arrow-right fa-fw" aria-hidden="true" style="font-size:1.0rem;"></i>Does it really matter? If you are really curious, head over to <a href="http://www.github.com/IbrahimShakeel"><i class="fa fa-github fa-fw" aria-hidden="true" style="font-size:1.5em; color:#333"></i></a> or <a href="https://twitter.com/chiplessfreak"><i class="fa fa-twitter fa-fw" aria-hidden="true" style="font-size:1.5em; color:#333"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" role="tab" id="headingThree">
                        <h5 class="mb-0">
                          <a class="collapsed" style="color:#636b6f; font-size: 1rem;"  data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Is this service dedicated to anyone in particular?
                          </a>
                        </h5>
                      </div>
                      <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="card-block">
                          <i class="fa fa-arrow-right fa-fw" aria-hidden="true" style="font-size:1.0rem;"></i>Yup. This is dedicated to my son, Raphael. <i class="fa fa-heart fa-fw" aria-hidden="true" style="font-size:1.2em; color:#A00000"></i>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" role="tab" id="headingFour">
                        <h5 class="mb-0">
                          <a class="collapsed"  style="color:#636b6f; font-size: 1rem;" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            May I download the source code and all the audio files please?
                          </a>
                        </h5>
                      </div>
                      <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="card-block">
                          <i class="fa fa-arrow-right fa-fw" aria-hidden="true" style="font-size:1.0rem;"></i>Sure, go ahead and click here: <a href="https://github.com/IbrahimShakeel/114surah"><i class="fa fa-github fa-fw" aria-hidden="true" style="font-size:1.5em; color:#333"></i></a>
                          <br><i class="fa fa-arrow-right fa-fw" aria-hidden="true" style="font-size:1.0rem;"></i>This project is completely opensource and it itself includes a lot of opensource components. Make sure that you read the license agreements though.
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" role="tab" id="headingFive">
                        <h5 class="mb-0">
                          <a class="collapsed" style="color:#636b6f; font-size: 1rem;"  data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            I live in ..xyz.. island / country and the prayer times seem a bit off. Why is that?
                          </a>
                        </h5>
                      </div>
                      <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
                        <div class="card-block">
                          <i class="fa fa-arrow-right fa-fw" aria-hidden="true" style="font-size:1.0rem;"></i>Prayer times are pulled from an api (http://api.aladhan.com) and accounts only to Male' City area and I am too lazy to implement dynamic geo locations. Feel free to implement it yourself if you are feeling adventurous today. <b>Tip:</b> There is a decent JavaScript library for that (prayertimesjs.org).
                          <br><i class="fa fa-arrow-right fa-fw" aria-hidden="true" style="font-size:1.0rem;"></i>Fork the repo, implement it yourself and send a pull request. I'm sure I'll be able to find a minute or two to merge it. Plus, I will officially name you as a contributor! :)
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" role="tab" id="headingSix">
                        <h5 class="mb-0">
                          <a class="collapsed" style="color:#636b6f; font-size: 1rem;" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Is there any way I can contribute to this project?
                          </a>
                        </h5>
                      </div>
                      <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix">
                        <div class="card-block">
                          <i class="fa fa-arrow-right fa-fw" aria-hidden="true" style="font-size:1.0rem;"></i>There are a few ways:
                          <br><i class="fa fa-check-square fa-fw" aria-hidden="true" style="font-size:1.0rem; margin-left:1em; color:#A00000;"></i><i style="font-style:normal; color:#333;">Contribute to Content:</i>
                          <br><i class="fa fa-arrow-right fa-fw" aria-hidden="true" style="font-size:1.0rem; margin-left:2em;"></i>Check and report to me if you find anything wrong with the content (i.e quran text, audio and translations)
                          <br><i class="fa fa-arrow-right fa-fw" aria-hidden="true" style="font-size:1.0rem; margin-left:2em;"></i>Provide Dhivehi Translations?
                          <br><i class="fa fa-check-square fa-fw" aria-hidden="true" style="font-size:1.0rem; margin-left:1em; color:#A00000;"></i><i style="font-style:normal; color:#333;">Contribute to the service:</i>
                          <br><i class="fa fa-arrow-right fa-fw" aria-hidden="true" style="font-size:1.0rem; margin-left:2em;"></i>contribute to the development, updates and maintenance. Searching for individual words, Ayah, Surah and Juz is possible. I intend to develop this functionality at a later stage. This will allow people to research and learn more about quran :)
                          <br><i class="fa fa-arrow-right fa-fw" aria-hidden="true" style="font-size:1.0rem; margin-left:2em;"></i>contribute financially to pay for domain and web hosting.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
        </div>
        <div class="jumbotron" style="background-color: #fff; padding:0px;">
          <div class="media-div">
            <center>
              <select id="surahlistdropdown" class="custom-dropdown" >
                @if(isset($surahs))
                  @foreach($surahs['data'] as $surah)
                    <option value="{{ $surah['number'] }}">{{ $surah['englishName'] }}  - {{ $surah['name'] }}</option>
                  @endforeach
                @endif
              </select>
            </center>
            <div id="player1" class="aplayer" style="width:auto">
            </div>
          </div>
        </div>
      </div>
      <div class="container theme-showcase">
        <div class="jumbotron" style="background-color: #fff; padding:0px;">
          <center>
            @if(isset($prayerTimes))
            <p class="h4">{{$prayerTimes->data->date->readable}}</p>
            <table>
              <tr>
                <td>Fajr</td>
                <td>Zuhr</td>
                <td>Asr</td>
                <td>Maghrib</td>
                <td>Isha</td>
              </tr>
              <tr>
                <td>{{$prayerTimes->data->timings->Fajr}}</td>
                <td>{{$prayerTimes->data->timings->Dhuhr}}</td>
                <td>{{$prayerTimes->data->timings->Asr}}</td>
                <td>{{$prayerTimes->data->timings->Maghrib}}</td>
                <td>{{$prayerTimes->data->timings->Isha}}</td>
              </tr>
            </table>

            @endif
            <div class="links">
                <i class="fa fa-heart fa-fw" style="color:#34AB72; font-size:18px;" aria-hidden="true"></i>
            </div>
</center>
</div>
        </div>
        <script language="JavaScript" type="text/javascript" src="js/APlayer.js"></script>

        <script>
          function showHideFAQ() {
              if(document.getElementById('faq').style.display=='none') {
                  document.getElementById('faq').style.display='block';
                }else{
                  document.getElementById('faq').style.display='none';
                }

              return false;
          }
        </script>


        <script type="text/javascript">
        var ar = <?php echo json_encode($playlist) ?>;
        var ap1 = new APlayer({
            element: document.getElementById('player1'),
            narrow: false,
            autoplay: false,
            showlrc: false,
            mutex: true,
            theme: '#00cc92',
            preload: 'metadata',
            mode: 'circulation',
            music: ar
        });

        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        </script>
        <script type="text/javascript">

        $(document).ready(function(){

        $('#surahlistdropdown').on('change',function(e){
          console.log("\n %c Ajax Script 1.0.0 %c http://aplayer.js.org \n\n","color: #f9f9f9; background: #3b5598; padding:5px 0;","background: #fadfa3; padding:5px 0;");

          var $id = $('#surahlistdropdown option:selected').attr('value');
	// console.log($id);
            jQuery.ajax({
              url:'/surah',
              type: 'GET',
              data: {
                  name: $id
              },
              success: function( data ){
                  ar = data;
                  console.log(data);
                  ap1.destroy();
                   ap1 = new APlayer({
                      element: document.getElementById('player1'),
                      narrow: false,
                      autoplay: false,
                      showlrc: false,
                      mutex: true,
                      theme: '#00cc92',
                      preload: 'metadata',
                      mode: 'circulation',
                      music: ar
                  });
              },
              error: function (xhr, b, c) {
                  console.log("xhr=" + xhr + " b=" + b + " c=" + c);
              }
          });
          });
        });
        </script>
</body>

</html>
