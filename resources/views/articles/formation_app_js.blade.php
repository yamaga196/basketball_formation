<script>
  // 変数に入れる
var $start_button_pickandroll = $('#start_button_pickandroll');
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
$start_button_pickandroll.on('click',function(){
  // $player_c_1
  $player_c_1.animate({
    right: "545px",
    bottom: "125px"
  },1000, 'swing', $player_c_2.animate({
  //$player_c_2
    right: "545",
    bottom: "200px"
  }, 1000, 'swing', function(){
  // $player_pg_1
  $player_pg_1.animate({
    left: "720px",
    bottom: "100px"
  }, 1000, 'swing', $ball.animate({
  //$ball
    left: "773px",
    bottom: "100px"
  }, 1000, 'swing', function(){
  //$player_pg_1
  $player_pg_1.animate({
    left: "800px",
    bottom: "150px"
  }, 1000, 'swing', $ball.animate({
  //$ball
    left: "853px",
    bottom: "150px"
  }, 1000, 'swing', function(){
  //$player_c_2
  $player_c_2.animate({
    left: "740px",
    bottom: "200px"
  }, 1000, 'swing', function(){
  //$player_c_1
  $player_c_1.animate({
    right: "585px",
    bottom: "350px"
  }, 1000, 'swing', $player_pg_2.animate({
  //$player_pg_2
    left: "550px",
    bottom: "290px"
  }, 1000, 'swing', function(){
  //$ball
  $ball.animate({
    left: "663px",
    bottom: "350px"
  }, 1000, 'swing');
  }));
  });
  }));
  }));
  }));
});
</script>