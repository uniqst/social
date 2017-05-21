
<div id="myCarousel" class="carousel" data-ride="carousel" style="height: 84vh;">
  <!-- Indicators -->
  <!-- <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol> -->

  <!-- Wrapper for slides -->
  <?php $count = 1;?>
  <div class="carousel-inner">
    <div class="item active">
      <img src="/<?=$model->avatar?>" alt="" style="max-height: 84vh; margin: 0 auto;">
        <p>Фото <?=$count++;?> из <?=count($model->gallery) + 1;?></p>
    </div>
  <?php foreach($model->gallery as $gallery):?>
    <div class="item">
      <img src="/<?=$gallery->photo?>" alt="" style="max-height: 84vh; margin: 0 auto;">
          <p>Фото <?=$count++;?> из <?=count($model->gallery) + 1;?></p>
    </div>
  <?php endforeach;?> 
   
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

