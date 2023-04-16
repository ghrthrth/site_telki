<?php

require("inc/config.php");

$select = "SELECT * FROM tovars";
$all_tovars = mysqli_query($link,$select);
$data = date("d.m.Y");


?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Healthy food</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="/img/code.svg" rel="icon" type="image/png" />
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/toastr.css">
<link rel="stylesheet" href="/css/cards.css">
<script src="https://kit.fontawesome.com/6cce539f85.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="../js/jquery-latest.min.js"></script>
<style>
    tr {
            white-space: nowrap;
        }
        @media (max-width:1575.98px) {
    .table-responsive-sm {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar
    }
    .dropdown-item:focus {
        background:#fff;
        color:#000;
    }
    .dropdown-item:hover {
        background:#edebeb;
        color:#000;
    }
</style>
<script>
    $(window).on('load', function () {
    $preloader = $('.preloader'),
    $preloader.fadeIn(200).delay(250).fadeOut(700);
  });
</script>
</head>
<body>

<div class="preloader">
   <!--   <span style=""><img style="animation: blink 3.5s;width:120px; height:120px" src="/img/logo.png"></span>-->
    <div class="spinner-border float-right" style="width:60px; height:60px" role="status">
    <span class="sr-only">Loading...</span>
  </div>
    </div> 
    <div style="width:100%; background:#fff;" class="sticky-top full-nav">
<nav class="navbar navbar-expand-lg container navbar-light bg-light">
    

    <a class="navbar-brand" href="#">
    <img src="/img/logos.png" width="30" height="30" class="d-inline-block align-top" alt="" title="">
    <?=$sitename?>  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="navbar-collapse collapse " id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
           
        <a class="nav-link" href="#">Главная</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#contact">Контакты</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#garant">О нас</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="<?=$reviews?>" target="_blank">Отзывы</a>
      </li>

    </ul>
    </div>
   
</nav>
</div>
<div class="container wrapper" style="min-height:376px;">
<div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Введение</h1>
      <p class="fs-5 text-body-secondary">Чем проще пища, тем она приятнее — не приедается, — тем здоровее и тем всегда, везде доступнее. (Л. Толстой).
      Здоровая еда - это пища, которая богата питательными веществами и не вредит организму. Она включает в себя много свежих фруктов и овощей, цельных зерен, низкокалорийных белков и здоровых жиров. Также важна готовка без добавления больших объемов масла, соли и сахара. Здоровая еда помогает поддерживать здоровый вес, повышает иммунитет и защищает от многих заболеваний.</p>
    </div>
    </div>
<!-- NAVBAR ENDD -->
   
<!-- BLOG -->
<div class="container wrapper" style="min-height:376px;">
<div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Почему важна здоровая еда?
      </h3>

      <article class="blog-post">
        <h2 class="blog-post-title mb-1">Значение здоровой еды в жизни человека</h2>
        

        <p>Здоровая еда является основой здорового образа жизни. Она обеспечивает организм человека необходимыми питательными веществами, витаминами и минералами. Здоровая еда помогает поддерживать оптимальный вес, укрепляет иммунную систему, улучшает кожу, волосы и ногти, а также снижает риск развития многих заболеваний, таких как диабет, ожирение, сердечно-сосудистые заболевания и рак. Кроме того, правильное питание повышает уровень энергии и улучшает настроение, способствуя улучшению психического здоровья. В целом, здоровая еда играет очень важную роль в жизни человека и помогает ему сохранять здоровье и жизненную энергию на долгие годы.</p>
        <hr>
       
        <h2>Влияние качественной и некачественной еды на организм</h2>

        <p>Качественная еда, такая как свежие фрукты, овощи, полезные жиры и белки, может положительно повлиять на организм. Она содержит много витаминов, минералов и фитонутриентов, которые необходимы для здоровья и поддержания иммунитета. Кроме того, качественная еда может помочь снизить уровень холестерина и риска заболевания сердечно-сосудистой системы.

С другой стороны, некачественная еда, такая как фаст-фуд, индустриальные продукты, физз-напитки и другие продукты с высоким содержанием сахара и соли, могут негативно повлиять на организм. Она может вызывать лишний вес, повышенный уровень холестерина, повышенное давление, диабет и другие заболевания. Кроме того, некачественная еда не содержит необходимых витаминов, минералов и фитонутриентов, которые необходимы для здоровья.

Поэтому важно придерживаться здорового питания и предпочитать качественную еду, состоящую из свежих фруктов и овощей, полезных жиров и белков. Это поможет сохранить здоровье и улучшить качество жизни.
</p>
        <h3>Лучшие продукты по мнению Нашей редакции</h3>
        <p>Ниже перечислены продукты, которые наиболее лучшим образом влияют на наш организм</p>
        <ul>
          <li>Овощи и фрукты - они содержат множество витаминов, минералов и антиоксидантов, которые помогают защищать организм от различных заболеваний и улучшают работу органов.</li>
          <li>Орехи и семена - они богаты полезными жирными кислотами, белками, витаминами и минералами. Они также помогают защищать организм от сердечно-сосудистых заболеваний и предотвращают развитие онкологических процессов.</li>
          <li>Рыба и морепродукты - они содержат незаменимые жирные кислоты, которые помогают улучшать работу мозга, защищать организм от сердечно-сосудистых заболеваний и повышают иммунитет.</li>
        </ul>
        
      </article>

      <article class="blog-post">
        <h2 class="blog-post-title mb-1">Белковая или углеводная пища, что лучше?</h2>
       
        <p>Каждый тип пищи имеет свои преимущества и недостатки, и выбор зависит от индивидуальных потребностей и целей питания. Белковая пища обычно более насыщающая и помогает сохранять мышечную массу, что особенно важно для спортсменов и тех, кто хочет снизить вес. Углеводы, с другой стороны, являются главным источником энергии для организма и могут быть особенно полезными во время интенсивной физической активности.

Однако, важно принимать в расчет качество и источник белков и углеводов, так как не все из них одинаково полезны для организма. В целом, рекомендуется получать достаточное количество обоих типов питания в соответствии с индивидуальными потребностями и рекомендациями от врача или диетолога.
</p>
        <h3>Сравнение белков и углеводов в различных продуктах</h3>
        <p>Ниже приведены следюущие продукты</p>
        <table class="table">
          <thead>
            <tr>
              <th>Название</th>
              <th>Белки</th>
              <th>Углеводы</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Брынза (сыр из коровьего молока)</td>
              <td>17,9</td>
              <td>0</td>
            </tr>
            <tr>
              <td>Йогурт натуральный. 2% жир.</td>
              <td>4,3</td>
              <td>6,2</td>
            </tr>
            <tr>
              <td>Мука пшеничная 1-го сорта</td>
              <td>10,6</td>
              <td>67,6</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td>Сушки маковые</td>
              <td>11,3</td>
              <td>70,5</td>
            </tr>
          </tfoot>
        </table>

        <p>Выше приведен список примерных продуктов, с различными показателями белков и углеводов, что выбирать вам - вы знаете сами.</p>
      </article>


    </div>
    </div>
    
    <!-- BLOG END -->
<div class="container wrapper" style="min-height:376px;">
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
    <h1 class="display-4 fw-normal">Другие статьи</h1>
    </div>
<div class="tab-content">
<div role="tabpanel" class="tab-pane fade in active show">
<div class="container">
<div class="row d-flex justify-content-center">
  

         <?php 
while($row = mysqli_fetch_array($all_tovars)) {
 
 
$id = $row['id'];
$name = $row['name'];
$desc = $row['sm_desc'];
$views = $row['views'];
$img = $row['img'];
$date_t = $row['date'];
echo '<div class="HomeCard game-box col-sm-12 text-center" style="margin:10px">
    <div class="HomeCard-Image" style="background-image: url('.$img.');"></div>
    <h4 class="HomeCard-Title">'.$name.'</h4><p class="HomeCard-Text">'.$desc.'</p>
    <button class="Btn HomeCard-Button Btn_blue" onclick="view('.$id.')" data-toggle="modal" data-target="#open_it">Подробнее</button></div>';

  }
?>


    </div>
    </div>
    </div>
    </div>
    </div>
    
 <!-- ITEMS END -->
<div class="container-fluid footer-bg" style="margin-top:82px;">
<div class="container">
<footer>
   
<div class="row col-sm-12">
<div class="col-sm-5 foo-left-box">
<a class="navbar-brand" href="#">
    <img src="/img/logo.png" width="30" height="30" class="footer-cat -inline-block align-top" alt="Владимир Кот">
    <?=$sitename?>
  </a>
<div class="nav-logo"><span class="footer-ava-text">&copy; 2019-2022 <?=$sitename?>.<?=$sitedomen?></span>Все права защищены.<br>

</div>
  
</footer>
</div>
<!-- Modal "ADD" -->
<div class="modal fade" id="open_it" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display:none">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="c">Просмотр статьи</h5>
        <button type="button" class="close" data-dismiss="modal" id="close_add" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="thumbnail">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" id="prev-1" src="" alt="">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" id="prev-2" src="" alt="">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" id="prev-3" src="" alt="">
    </div>
  </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="caption">
<p class="game-name" id="sel_name"></p>
<p class="game-type" id="sel_desc"></p>
</div>
</div>
      </div>
     
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="garant" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display:none">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">О нас</h5>
        <button type="button" class="close" data-dismiss="modal" id="close_add" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <center>
<p><h5>Почему мы этим занимаемся</h5>
В современном мире мы все чаще сталкиваемся с проблемой избыточного веса.
И это не удивительно, ведь все вокруг пестрит рекламой всевозможных продуктов и блюд, которые обещают быстрое и легкое похудение.
Однако в реальности все оказывается совсем не так, как мы себе представляли.
А виной всему – неправильное питание, которое мы предлагаем своим детям, а в дальнейшем и себе. Поэтмоу нам важно Ваше здоровье и мы хотели бы , чтобы вы знали об этом больше.

<p>
<h5>О чем блог</h5>
Блог создан для того, чтобы делиться с вами полезными рецептами, которые помогают мне быть стройной и здоровой.
       </center>
      </div>
     
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>
<!-- MODAL "CONTACT" -->
<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display:none">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Контакты</h5>
        <button type="button" class="close" data-dismiss="modal" id="close_add" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <center>
<p><h5><i class="fab fa-vk"></i> Вконтакте</h5>
Группа - <a href="<?=$support?>" target="_blank"><?=$support?></a><br>
Поддержка - <a href="<?=$support?>" target="_blank"><?=$support?></a></p>
       </center>
      </div>
     
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>
<script src="../js/script.js"></script>
</body>
</html>