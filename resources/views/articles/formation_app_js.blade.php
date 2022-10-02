<script>
  // 変数に入れる
var $start_button_1 = $('#1');
var $start_button_3 = $('#3');
var $start_button_4 = $('#4');
var $start_button_6 = $('#6');
var $start_button_7 = $('#7');
var $start_button_8 = $('#8');
var $start_button_9 = $('#9');
var $start_button_10 = $('#10');
var $start_button_11 = $('#11');
var $start_button_12 = $('#12');
var $start_button_13 = $('#13');
var $start_button_18 = $('#18');
var $start_button_19 = $('#19');
var $start_button_22 = $('#22');
var $start_button_26 = $('#26');
var $start_button_37 = $('#37');
var $start_button_40 = $('#40');
var $ball = $('#ball');
var $player_pg_1 = $('#player_pg_1');
var $player_sg_1 = $('#player_sg_1');
var $player_sf_1 = $('#player_sf_1');
var $player_pf_1 = $('#player_pf_1');
var $player_c_1 = $('#player_c_1');
var $player_pg_2 = $('#player_pg_2');
var $player_sg_2 = $('#player_sg_2');
var $player_sf_2 = $('#player_sf_2');
var $player_pf_2 = $('#player_pf_2');
var $player_c_2 = $('#player_c_2');

//
//pick&roll
//
$start_button_1.on('click',function(){
  // $player_c_1
  $player_c_1.animate({
    left: "650px",
    bottom: "125px"
  },1000, 'swing', $player_c_2.animate({
  //$player_c_2
    left: "655px",
    bottom: "200px"
  }, 1000, 'swing', function(){
  // $player_pg_1
  $player_pg_1.animate({
    left: "750px",
    bottom: "100px"
  }, 1000, 'swing', $ball.animate({
  //$ball
    left: "810px",
    bottom: "100px"
  }, 1000, 'swing', function(){
  //$player_pg_1
  $player_pg_1.animate({
    left: "840px",
    bottom: "150px"
  }, 1000, 'swing', $ball.animate({
  //$ball
    left: "903px",
    bottom: "150px"
  }, 1000, 'swing', function(){
  //$player_c_2
  $player_c_2.animate({
    left: "790px",
    bottom: "200px"
  }, 1000, 'swing', function(){
  //$player_c_1
  $player_c_1.animate({
    left: "595px",
    bottom: "350px"
  }, 1000, 'swing', $player_pg_2.animate({
  //$player_pg_2
    left: "550px",
    bottom: "290px"
  }, 1000, 'swing', function(){
  //$ball
  $ball.animate({
    left: "658px",
    bottom: "350px"
  }, 1000, 'swing');
  }));
  });
  }));
  }));
  }));
});

//
//sa-kurumu-bu
//

$start_button_3.on('click', function(){
  $ball.animate({
  //1
    left: "1047px",
    bottom: "255px"
  }, 1000, 'swing', function(){
  $player_pg_1.animate({
  //2
    left: "680px",
    bottom: "100px"
  }, 1000, 'swing', $player_pg_2.animate({
    left: "600px",
    bottom: "80px"
  }, 1000, 'swing', function(){
  //3
  $player_c_2.animate({
    left: "660px",
    bottom: "350px"
  }, 1000, 'swing', function(){
  //4
  $player_pg_1.animate({
    left: "720px",
    bottom: "400px"
  }, 1000, 'swing', $player_pg_2.animate({
    left: "750px",
    bottom: "340px"
  }, 1000, 'swing', function(){
  //5
  $player_pg_1.animate({
    left: "700px",
    bottom: "430px"
  }, 100, 'swing', $player_pg_2.animate({
    left: "730px",
    bottom: "360px"
  }, 100, 'swing', function(){
  //6
  $player_pg_1.animate({
    left: "680px",
    bottom: "430px"
  }, 100, 'swing', $player_pg_2.animate({
    left: "740px",
    bottom: "400px"
  }, 100, 'swing', function(){
  //7
  $player_pg_1.animate({
    left: "660px",
    bottom: "430px"
  }, 100, 'swing', $player_pg_2.animate({
    left: "720px",
    bottom: "410px"
  }, 100, 'swing', function(){
  //8
  $player_pg_1.animate({
    left: "640px",
    bottom: "430px"
  }, 100, 'swing', $player_pg_2.animate({
    left: "700px",
    bottom: "420px"
  }, 100, 'swing', function(){
  //9
  $player_pg_1.animate({
    left: "620px",
    bottom: "430px"
  }, 100, 'swing', $player_pg_2.animate({
    left: "680px",
    bottom: "420px"
  }, 100, 'swing', function(){
  //10
  $player_pg_1.animate({
    left: "600px",
    bottom: "420px"
  }, 100, 'swing', $player_pg_2.animate({
    left: "660px",
    bottom: "420px"
  }, 100, 'swing', function(){
  //11
  $player_c_1.animate({
    left: "600px",
    bottom: "320px"
  }, 500, 'swing', function(){
  //12
  $player_pg_1.animate({
    left: "580px",
    bottom: "410px"
  }, 100, 'swing', $player_pg_2.animate({
    left: "640px",
    bottom: "420px"
  }, 100, 'swing', function(){
  //13
  $player_pg_1.animate({
    left: "550px",
    bottom: "390px"
  }, 100, 'swing', $player_pg_2.animate({
    left: "610px",
    bottom: "400px"
  }, 100, 'swing', function(){
  //14
  $player_pg_1.animate({
    left: "530px",
    bottom: "370px"
  }, 100, 'swing', $player_pg_2.animate({
    left: "600px",
    bottom: "380px"
  }, 100, 'swing', function(){
  //15
  $player_pg_1.animate({
    left: "580px",
    bottom: "20px"
  }, 1000, 'swing', function(){
  //16
  $ball.animate({
    left: "640px",
    bottom: "25px"
  }, 1000, 'swing');
  });
  }));
  }));
  }));
  });
  }));
  }));
  }));
  }));
  }));
  }));
  }));
  });
  }));
  });
});

//
// suinngu mu-bu
//
$start_button_4.on('click', function(){
  //1
  $player_sg_1.animate({
    left: "540px",
    bottom: "210px"
  }, 1000, 'swing', $player_sg_2.animate({
  //2
    left: "530px",
    bottom: "280px"
  }, 1000, 'swing', function(){
  //3
  $player_sg_1.animate({
    left: "560px",
    bottom: "210px"
  }, 100, 'swing', function(){
  //4
  $player_sg_1.animate({
    left: "580px",
    bottom: "210px"
  }, 100, 'swing', function(){
  //5
  $player_sg_1.animate({
    left: "600px",
    bottom: "210px"
  }, 100, 'swing', function(){
  //6
  $player_sg_1.animate({
    left: "620px",
    bottom: "210px"
  }, 100, 'swing', function(){
  //7
  $player_sg_1.animate({
    left: "650px",
    bottom: "230px"
  }, 100, 'swing', $player_sg_2.animate({
  //8
    left: "570px",
    bottom: "210px"
  }, 300, 'swing', function(){
  //9
  $player_sf_1.animate({
    left: "870px",
    bottom: "240px"
  }, 1000, 'swing', $player_sf_2.animate({
    left: "810px",
    bottom: "310px"
  }, 1000, 'swing', function(){
  //10
  $player_sg_1.animate({
    left: "680px",
    bottom: "250px"
  }, 100, 'swing', $player_sg_2.animate({
    left: "600px",
    bottom: "210px"
  }, 100, 'swing', function(){
  //11
  $player_sg_1.animate({
    left: "700px",
    bottom: "270px"
  }, 100, 'swing', $player_sg_2.animate({
    left: "640px",
    bottom: "220px"
  }, 100, 'swing', function(){
  //12
  $player_sg_1.animate({
    left: "720px",
    bottom: "290px"
  }, 100, 'swing', $player_sg_2.animate({
    left: "660px",
    bottom: "240px"
  }, 100, 'swing', function(){
  //13
  $player_sf_1.animate({
    left: "880px",
    bottom: "280px"
  }, 100, 'swing', function(){
  //14
  $player_sg_1.animate({
    left: "740px",
    bottom: "310px"
  }, 100, 'swing', $player_sg_2.animate({
    left: "680px",
    bottom: "260px"
  }, 100, 'swing', function(){
  //15
  $player_sg_1.animate({
    left: "740px",
    bottom: "330px"
  }, 100, 'swing', $player_sg_2.animate({
    left: "700px",
    bottom: "280px"
  }, 100, 'swing', function(){
  //16
  $player_sg_1.animate({
    left: "770px",
    bottom: "370px"
  }, 100, 'swing', $player_sg_2.animate({
    left: "750px",
    bottom: "300px"
  }, 100, 'swing', function(){
  //17
  $player_sg_1.animate({
    left: "790px",
    bottom: "380px"
  }, 100, 'swing', $player_sg_2.animate({
  //18
    left: "750px",
    bottom: "310px"
  }, 100, 'swing', function(){
  //19
  $player_sg_1.animate({
    left: "810px",
    bottom: "380px"
  }, 100, 'swing', $player_sg_2.animate({
    left: "750px",
    bottom: "330px"
  }, 100, 'swing', function(){
  //20
  $player_sg_1.animate({
    left: "830px",
    bottom: "380px"
  }, 100, 'swing', $player_sg_2.animate({
    left: "750px",
    bottom: "350px"
  }, 100, 'swing', function(){
  //21
  $player_sg_1.animate({
    left: "860px",
    bottom: "370px"
  }, 100, 'swing', $player_sg_2.animate({
    left: "780px",
    bottom: "380px"
  }, 100, 'swing', function(){
  //22
  $player_sg_1.animate({
    left: "890px",
    bottom: "370px"
  }, 100, 'swing', $player_sg_2.animate({
    left: "810px",
    bottom: "380px"
  }, 100, 'swing', function(){
  //23
  $player_sg_1.animate({
    left: "920px",
    bottom: "345px"
  }, 100, 'swing', $player_sg_2.animate({
    left: "840px",
    bottom: "370px"
  }, 100, 'swing', function(){
  //24
  $player_sg_1.animate({
    left: "950px",
    bottom: "320px"
  }, 100, 'swing', $player_sg_2.animate({
    left: "870px",
    bottom: "360px"
  }, 100, 'swing', function(){
  //25
  $player_sg_1.animate({
    left: "930px",
    bottom: "140px"
  }, 500, 'swing', $player_sg_2.animate({
    left: "880px",
    bottom: "350px"
  }, 100, 'swing', function(){
  //26
  $ball.animate({
    left: "880px",
    bottom: "125px"
  }, 1000, 'swing');
  }));
  }));
  }));
  }));
  }));
  }));
  }));
  }));
  }));
  }));
  }));
  });
  }));
  }));
  }));
  }));
  }));
  });
  });
  });
  });
  }));
});


//
//6
//
$start_button_6.on('click', function(){
  //1
  $ball.animate({
    left: "1050px",
    bottom: "250px"
  }, 1000, 'swing', function(){
  //2
  $player_c_1.animate({
    left: "490px",
    bottom: "510px"
  }, 1000, 'swing', $player_c_2.animate({
  //3
    left: "550px",
    bottom: "540px"
  }, 1000, 'swing', function(){
  //4
  $player_pf_1.animate({
    left: "440px",
    bottom: "450px"
  }, 1000, 'swing', function(){
  //5
  $player_pf_1.animate({
    left: "700px",
    bottom: "450px"
  }, 1000, 'swing', function(){
  //6
  $ball.animate({
    left: "755px",
    bottom: "435px"
  }, 1000, 'swing');
  });
  });
  }));
  });
});

//
//7
//
$start_button_7.on('click', function(){
  //1
  $player_sf_1.animate({
    left: "490px",
    bottom: "530px"
  }, 1000, 'swing', $player_sf_2.animate({
    left: "510px",
    bottom: "600px"
  }, 1000, 'swing', function(){
  //2
  $player_pf_1.animate({
    left: "450px",
    bottom: "460px"
  }, 500, 'swing', function(){
  //3
  $player_pf_1.animate({
    left: "800px",
    bottom: "500px"
  }, 800, 'swing', $player_pf_2.animate({
    left: "730px",
    bottom: "500px"
  }, 800, 'swing', function(){
  //4
  $player_c_1.animate({
    left: "530px",
    bottom: "330px"
  }, 800, 'swing', function(){
  //5
  $player_sf_1.animate({
    left: "535px",
    bottom: "20px"
  }, 800, 'swing', $player_sf_2.animate({
    left: "530px",
    bottom: "400px"
  }, 800, 'swing', function(){
  //6
  $ball.animate({
    left: "600px",
    bottom: "20px"
  }, 1000, 'swing');
  }));
  });
  }));
  });
  }));
});

//
//8
//
$start_button_8.on('click', function(){
  //1
  $player_c_1.animate({
    left: "530px",
    bottom: "340px"
  }, 800, 'swing', function(){
  //2
  $player_sf_1.animate({
    left: "650px",
    bottom: "20px"
  }, 800, 'swing', $player_sf_2.animate({
    left: "650px",
    bottom: "90px"
  }, 800, 'swing', function(){
  //3
  $player_c_1.animate({
    left: "600px",
    bottom: "550px"
  }, 800, 'swing', function(){
  //4
  $ball.animate({
    left: "660px",
    bottom: "540px"
  }, 800, 'swing');
  });
  }));
  });
});

//
//9
//
$start_button_9.on('click', function(){
  //1
  $player_c_1.animate({
    left: "780px",
    bottom: "460px"
  }, 800, 'swing', $player_c_2.animate({
    left: "710px",
    bottom: "480px"
  }, 800, 'swing', function(){
  //2
  $player_pf_1.animate({
    left: "400px",
    bottom: "460px"
  }, 800, 'swing', $player_pf_2.animate({
    left: "470px",
    bottom: "480px"
  }, 800, 'swing', function(){
  //3
  $player_sg_1.animate({
    left: "830px",
    bottom: "520px"
  }, 500, 'swing', $player_sg_2.animate({
    left: "750px",
    bottom: "530px"
  }, 500, 'swing', function(){
  //4
  $player_sg_1.animate({
    left: "850px",
    bottom: "490px"
  }, 500, 'swing', $player_sg_2.animate({
    left: "780px",
    bottom: "530px"
  }, 500, 'swing', function(){
  //5
  $player_sg_1.animate({
    left: "820px",
    bottom: "300px"
  }, 500, 'swing', function(){
  //6
  $player_sf_1.animate({
    left: "330px",
    bottom: "520px"
  }, 500, 'swing', $player_sf_2.animate({
    left: "400px",
    bottom: "530px"
  }, 500, 'swing', function(){
  //7
  $player_sf_1.animate({
    left: "400px",
    bottom: "300px"
  }, 500, 'swing', function(){
  //8
  $ball.animate({
    left: "450px",
    bottom: "270px"
  }, 800, 'swing');
  });
  }));
  });
  }));
  }));
  }));
  }));
});

//
//10
//
$start_button_10.on('click', function(){
  //1
  $ball.animate({
    left: "170px",
    bottom: "230px"
  }, 800, 'swing', function(){
  //2
  $player_pf_2.animate({
    left: "415px",
    bottom: "520px"
  }, 500, 'swing', $player_sf_2.animate({
    left: "190px",
    bottom: "310px"
  }, 800, 'swing', function(){
  //3
  $player_pf_2.animate({
    left: "320px",
    bottom: "480px"
  }, 500, 'swing', function(){
  //4
  $player_pg_1.animate({
    left: "970px",
    bottom: "290px"
  }, 800, 'swing', $player_pg_2.animate({
    left: "900px",
    bottom: "320px"
  }, 800, 'swing', function(){
  //5
  $player_pf_1.animate({
    left: "610px",
    bottom: "550px"
  }, 800, 'swing', $player_pf_2.animate({
    left: "540px",
    bottom: "510px"
  }, 800, 'swing', function(){
  //6
  $player_c_1.animate({
    left: "540px",
    bottom: "440px"
  }, 800, 'swing', $player_c_2.animate({
    left: "570px",
    bottom: "370px"
  }, 800, 'swing', function(){
  //7
  $player_sg_1.animate({
    left: "590px",
    bottom: "20px"
  }, 800, 'swing', $player_pf_1.animate({
    left: "610px",
    bottom: "300px"
  }, 800, 'swing', function(){
  //8
  $ball.animate({
    left: "540px",
    bottom: "20px"
  }, 800, 'swing');
  }));
  }));
  }));
  }));
  });
  }));
  });
});

//
//11
//
$start_button_11.on('click', function(){
  //1
  $player_pg_1.animate({
    left: "920px",
    bottom: "270px"
  }, 800, 'swing', $player_pg_2.animate({
    left: "1010px",
    bottom: "350px"
  }, 800, 'swing', function(){
  //2
  $ball.animate({
    left: "880px",
    bottom: "240px"
  }, 800, 'swing', function(){
  //3
  $player_c_1.animate({
    left: "170px",
    bottom: "390px"
  }, 800, 'swing', $player_c_2.animate({
    left: "235px",
    bottom: "420px"
  }, 800, 'swing', function(){
  //4
  $player_pg_1.animate({
    left: "830px",
    bottom: "290px"
  }, 800, 'swing', $ball.animate({
    left: "780px",
    bottom: "290px"
  }, 800, 'swing', function(){
  //5
  $player_sf_1.animate({
    left: "0px",
    bottom: "630px"
  }, 800, 'swing', $ball.animate({
    left: "62px",
    bottom: "630px"
  }, 800, 'swing'));
  }));
  }));
  });
  }));
});

//
//12
//
$start_button_12.on('click', function(){
  //1
  $player_pg_1.animate({
    left: "650px",
    bottom: "40px"
  }, 800, 'swing', $player_c_1.animate({
    left: "640px",
    bottom: "280px"
  }, 800, 'swing', function(){
  //2
  $player_pg_1.animate({
    left: "700px",
    bottom: "370px"
  }, 800, 'swing', $player_pg_2.animate({
    left: "640px",
    bottom: "210px"
  }, 800, 'swing', function(){
  //3
  $ball.animate({
    left: "760px",
    bottom: "370px"
  }, 800, 'swing');
  }));
  }));
});

//
//13
//
$start_button_13.on('click', function(){
  //1
  $player_sg_1.animate({
    left: "400px",
    bottom: "250px"
  }, 800, 'swing', $player_sg_2.animate({
    left: "450px",
    bottom: "310px"
  }, 800, 'swing', function(){
  //2
  $player_sg_1.animate({
    left: "410px",
    bottom: "220px"
  }, 500, 'swing', $player_sg_2.animate({
    left: "440px",
    bottom: "280px"
  }, 500, 'swing', function(){
  //3
  $player_sg_1.animate({
    left: "440px",
    bottom: "190px"
  }, 500, 'swing', $player_sg_2.animate({
    left: "450px",
    bottom: "260px"
  }, 500, 'swing', function(){
  //4
  $player_sg_1.animate({
    left: "600px",
    bottom: "15px"
  }, 500, 'swing', $ball.animate({
    left: "660px",
    bottom: "20px"
  }, 800, 'swing'));
  }));
  }));
  }));
});

//
//18
//
$start_button_18.on('click', function(){
  //1
  $player_sf_1.animate({
    left: "600px",
    bottom: "570px"
  }, 800, 'swing', $player_sf_2.animate({
    left: "670px",
    bottom: "520px"
  }, 800, 'swing', function(){
  //2
  $player_sf_1.animate({
    left: "550px",
    bottom: "540px"
  }, 500, 'swing', $player_sf_2.animate({
    left: "620px",
    bottom: "570px"
  }, 500, 'swing', function(){
  //3
  $player_sf_1.animate({
    left: "430px",
    bottom: "290px"
  }, 500, 'swing', $player_sf_2.animate({
    left: "470px",
    bottom: "360px"
  }, 500, 'swing', function(){
  //4
  $player_sf_1.animate({
    left: "430px",
    bottom: "210px"
  }, 500, 'swing', $player_sf_2.animate({
    left: "430px",
    bottom: "290px"
  }, 500, 'swing', function(){
  //5
  $player_sf_1.animate({
    left: "600px",
    bottom: "20px"
  }, 500, 'swing', $player_sf_2.animate({
    left: "430px",
    bottom: "220px"
  }, 500, 'swing', function(){
  //6
  $ball.animate({
    left: "663px",
    bottom: "20px"
  }, 800, 'swing');
  }));
  }));
  }));
  }));
  }));
});

$start_button_19.on('click', function(){
  //1
  $player_sf_1.animate({
    left: "600px",
    bottom: "570px"
  }, 800, 'swing', $player_sf_2.animate({
    left: "670px",
    bottom: "520px"
  }, 800, 'swing', function(){
  //2
  $player_sf_1.animate({
    left: "550px",
    bottom: "540px"
  }, 500, 'swing', $player_sf_2.animate({
    left: "620px",
    bottom: "570px"
  }, 500, 'swing', function(){
  //3
  $player_sf_1.animate({
    left: "430px",
    bottom: "290px"
  }, 500, 'swing', $player_sf_2.animate({
    left: "470px",
    bottom: "360px"
  }, 500, 'swing', function(){
  //4
  $player_sg_1.animate({
    left: "1180px",
    bottom: "630px"
  }, 800, 'swing', $player_sg_2.animate({
    left: "1100px",
    bottom: "630px"
  }, 800, 'swing', function(){
  //5
  $player_sf_1.animate({
    left: "430px",
    bottom: "210px"
  }, 500, 'swing', $player_sf_2.animate({
    left: "430px",
    bottom: "290px"
  }, 500, 'swing', function(){
  //6
  $player_sf_1.animate({
    left: "600px",
    bottom: "20px"
  }, 500, 'swing', $player_sf_2.animate({
    left: "430px",
    bottom: "220px"
  }, 500, 'swing', function(){
  //7
  $player_pf_2.animate({
    left: "670px",
    bottom: "150px"
  }, 800, 'swing', $player_pf_1.animate({
    left: "600px",
    bottom: "400px"
  }, 800, 'swing', function(){
  //8
  $player_c_2.animate({
    left: "570px",
    bottom: "330px"
  }, 800, 'swing', $ball.animate({
    left: "663px",
    bottom: "400px"
  }, 800, 'swing'));
  }));
  }));
  }));
  }));
  }));
  }));
  }));
});

$start_button_22.on('click', function(){
  //1
  $player_pf_1.animate({
    left: "660px",
    bottom: "140px"
  }, 800, 'swing', $player_pf_2.animate({
    left: "650px",
    bottom: "210px"
  }, 800, 'swing', function(){
  //2
  $player_pg_1.animate({
    left: "240px",
    bottom: "450px"
  }, 800, 'swing', $player_pg_2.animate({
    left: "310px",
    bottom: "430px"
  }, 800, 'swing', function(){
  //3
  $player_sf_1.animate({
    left: "260px",
    bottom: "580px"
  }, 800, 'swing', $player_sf_2.animate({
    left: "330px",
    bottom: "610px"
  }, 800, 'swing', function(){
  //4
  $player_sg_1.animate({
    left: "750px",
    bottom: "200px"
  }, 800, 'swing', $ball.animate({
    left: "810px",
    bottom: "200px"
  }, 800, 'swing', function(){
  //5
  $player_sf_1.animate({
    left: "170px",
    bottom: "450px"
  }, 800, 'swing', $player_sf_2.animate({
    left: "230px",
    bottom: "520px"
  }, 800, 'swing', function(){
  //6
  $player_sf_1.animate({
    left: "160px",
    bottom: "190px"
  }, 800, 'swing');
  }));
  }));
  }));
  }));
  }));
});

$start_button_26.on('click', function(){
  //1
  $player_sg_1.animate({
    left: "600px",
    bottom: "510px"
  }, 800, 'swing', $player_sg_2.animate({
    left: "600px",
    bottom: "580px"
  }, 800, 'swing', function(){
  //2
  $player_sf_1.animate({
    left: "600px",
    bottom: "440px"
  }, 800, 'swing', $player_sf_2.animate({
    left: "670px",
    bottom: "500px"
  }, 800, 'swing', function(){
  //3
  $player_sf_1.animate({
    left: "280px",
    bottom: "500px"
  }, 800, 'swing', $player_sf_2.animate({
    left: "350px",
    bottom: "520px"
  }, 800, 'swing', function(){
  //4
  $player_sg_1.animate({
    left: "880px",
    bottom: "500px"
  }, 800, 'swing', $player_sg_2.animate({
    left: "810px",
    bottom: "520px"
  }, 800, 'swing', function(){
  //5
  $player_sf_1.animate({
    left: "250px",
    bottom: "150px"
  }, 800, 'swing', $player_sf_2.animate({
    left: "250px",
    bottom: "370px"
  }, 800, 'swing', function(){
  //6
  $player_sg_1.animate({
    left: "900px",
    bottom: "130px"
  }, 800, 'swing', $player_sg_2.animate({
    left: "900px",
    bottom: "370px"
  }, 800, 'swing', function(){
  //7
  $ball.animate({
    left: "860px",
    bottom: "100px"
  }, 800, 'swing');
  }));
  }));
  }));
  }));
  }));
  }));
});

//
//37
//
$start_button_37.on('click', function(){
  //1
  $ball.animate({
    left: "1060px",
    bottom: "270px"
  }, 800, 'swing', function(){
  //2
  $player_pg_1.animate({
    left: "720px",
    bottom: "50px"
  }, 800, 'swing', $player_pg_2.animate({
    left: "610px",
    bottom: "100px"
  }, 500, 'swing', function(){
  //3
  $player_pg_2.animate({
    left: "650px",
    bottom: "50px"
  }, 500, 'swing', function(){
  //4
  $player_pg_1.animate({
    left: "750px",
    bottom: "400px"
  }, 800, 'swing', $player_pg_2.animate({
    left: "790px",
    bottom: "340px"
  }, 800, 'swing', function(){
  //5
  $player_pg_1.animate({
    left: "500px",
    bottom: "570px"
  }, 800, 'swing', $player_pg_2.animate({
    left: "570px",
    bottom: "550px"
  }, 800, 'swing', function(){
  //6
  $player_pf_1.animate({
    left: "600px",
    bottom: "20px"
  }, 800, 'swing', $player_pf_2.animate({
    left: "600px",
    bottom: "100px"
  }, 800, 'swing', function(){
  //7
  $player_sf_1.animate({
    left: "520px",
    bottom: "490px"
  }, 800, 'swing', $player_sf_2.animate({
    left: "450px",
    bottom: "510px"
  }, 800, 'swing', function(){
  //8
  $player_sf_1.animate({
    left: "880px",
    bottom: "550px"
  }, 800, 'swing', $player_sf_2.animate({
    left: "810px",
    bottom: "560px"
  }, 800, 'swing', function(){
  //9
  $player_pg_1.animate({
    left: "330px",
    bottom: "500px"
  }, 800, 'swing', $player_pg_2.animate({
    left: "400px",
    bottom: "530px"
  }, 800, 'swing', function(){
  //10
  $ball.animate({
    left: "935px",
    bottom: "530px"
  }, 800, 'swing');
  }));
  }));
  }));
  }));
  }));
  }));
  });
  }));
  });
});

$start_button_40.on('click', function(){
  //1
  $ball.animate({
    left: "160px",
    bottom: "300px"
  }, 800, 'swing', function(){
  //2
  $player_pg_1.animate({
    left: "310px",
    bottom: "370px"
  }, 800, 'swing', $player_pg_2.animate({
    left: "380px",
    bottom: "400px"
  }, 800, 'swing', function(){
  //3
  $player_pg_1.animate({
    left: "0px",
    bottom: "620px"
  }, 800, 'swing', $player_pg_2.animate({
    left: "100px",
    bottom: "620px"
  }, 800, 'swing', function(){
  //4
  $player_sf_1.animate({
    left: "600px",
    bottom: "20px"
  }, 800, 'swing', $player_sf_2.animate({
    left: "600px",
    bottom: "100px"
  }, 800, 'swing', function(){
  //5
  $ball.animate({
    left: "550px",
    bottom: "20px"
  }, 800, 'swing', function(){
  //6
  $player_sg_1.animate({
    left: "100px",
    bottom: "550px"
  }, 800, 'swing', $player_sg_2.animate({
    left: "180px",
    bottom: "560px"
  }, 800, 'swing', function(){
  //7
  $player_pg_1.animate({
    left: "100px",
    bottom: "300px"
  }, 800, 'swing', $ball.animate({
    left: "160px",
    bottom: "300px"
  }, 800, 'swing'));
  }));
  });
  }));
  }));
  }));
  });
});
</script>