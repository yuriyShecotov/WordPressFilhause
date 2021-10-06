
<?php
/*
Template Name: Главная страница
*/
// $header_slider = get_field('title_slider');
get_header();
   // echo '<pre>';
   // print_r($header_slider);
   // echo  '</pre>';
?>
<!-- Здесь html/php код шаблона -->
<!-- Title -->
<section class="container__titel titel">
	<div class="titel__text">
		<h1><?php the_field('title_h1'); ?></h1>
		<p><?php the_field('title_p'); ?></p>
	</div>
	<!-- Slaider_Title -->
	<div class="titel__slaider slaider">
		<?php
			if( have_rows('title_slider') ):
				while ( have_rows('title_slider') ) : the_row();
				$header_slider = get_field('title_slider');
				$number = 0;
	 	?>  
				<div class="slaider__img">
					<!--<a href="#">проект БК-245</a>--><img src="<?php echo $header_slider[$number]['slider_foto']['sizes']['2048x2048'];?>" alt="">
				</div>
		<?php
				$number++;
				endwhile;
			else:
			endif; 
		?>
	</div>
</section>
<div class="content">
	<div class="content__title">
		<h2 class="content__titletext">Выбрать проект</h2>
		<div class="content__button">
			<div class="content__buttonblock"><a class="content__buttonpopap" href="#popup1">Cвой проект</a><div class="content__buttonfilter" ></div></div>

		</div>
	</div>
	<div class="content__project">
		<!-- Filter -->
		<asige class="content__filter filter">
	<div class="filter__square">
		<h3 class="filter__squaretitle">Площадь</h3>
		<div class="filter__squareinput">
			<input type="number">
			<div class="filter__sqaretext">
				<p>М<sup>2</sup></p>
			</div>
		</div>
	</div>
	<div class="filter__floors">
		<h3 class="filter__floorstaitel">Этажность </h3>
		<div class="filter__floorscheckbox">
			<p>
				<input type="checkbox" name="a" value="1" id="singlestorey" />
				<label for="singlestorey">
					Oдноэтажный
				</label>
			</p>
			<p>
				<input type="checkbox" name="a" value="2" id="twostoried" />
				<label for="twostoried">
					Двухэтажный
				</label>
			</p>
		</div>

	</div>
	<div class="filter__button"><input type="button" value="Подобрать"></div>
</asige>
		<!-- Card -->
		<section class="content__card card">
	<div class="content__cardsection">
		<div class="card__slider">
			<div class="card__img" onclick="location.href='product.html';"><img src="img/project/124/BK-124-1.jpg"
					alt="">
			</div>
			<div class="card__img" onclick="location.href='product.html';"><img src="img/project/124/BK-124-2.jpg"
					alt="">
			</div>
			<div class="card__img" onclick="location.href='product.html';"><img src="img/project/124/BK-124-3.jpg"
					alt="">
			</div>
		</div>
		<div class="card__data">
			<div class="card__params">
				<div class="card__square">
					<p>Площадь 124 М<sup>2</sup> </p>
				</div>
				<!-- <a href="#">проект БК-124</a> -->
			</div>
			<div class="card__praise">
				<div class="Card__sum">
					<p><span>Бревно</span> <span>1,99 мил.₽</span></p>
					<p><span>Брус</span> <span>4,9 мил.₽</span></p>
				</div>
			</div>
		</div>
	</div>

	<div class="content__cardsection">
		<div class="card__slider">
			<div class="card__img"><img src="img/project/232/BK-232-1.jpg" alt=""></div>
			<div class="card__img"><img src="img/project/232/BK-232-2.jpg" alt=""></div>
			<div class="card__img"><img src="img/project/232/BK-232-3.jpg" alt=""></div>
			<div class="card__img"><img src="img/project/232/BK-232-4.jpg" alt=""></div>
		</div>
		<div class="card__data">
			<div class="card__params">
				<!-- <a href="#">проект БК-124</a> -->
				<div class="card__square">
					<p>Площадь 124 М<sup>2</sup> </p>
				</div>
			</div>
			<div class="card__praise">
				<div class="Card__sum">
					<p><span>Бревно</span> <span>1,99 мил.₽</span></p>
					<p><span>Брус</span> <span>4,9 мил.₽</span></p>
				</div>
			</div>
		</div>
	</div>

	<div class="content__cardsection">
		<div class="card__slider">
			<div class="card__img"><img src="img/project/232/BK-232-1.jpg" alt=""></div>
			<div class="card__img"><img src="img/project/232/BK-232-2.jpg" alt=""></div>
			<div class="card__img"><img src="img/project/232/BK-232-3.jpg" alt=""></div>
			<div class="card__img"><img src="img/project/232/BK-232-4.jpg" alt=""></div>
		</div>
		<div class="card__data">
			<div class="card__params">
				<!-- <a href="#">проект БК-124</a> -->
				<div class="card__square">
					<p>Площадь 124 М<sup>2</sup> </p>
				</div>
			</div>
			<div class="card__praise">
				<div class="Card__sum">
					<p><span>Бревно</span> <span>1,99 мил.₽</span></p>
					<p><span>Брус</span> <span>4,9 мил.₽</span></p>
				</div>
			</div>
		</div>
	</div>

	<div class="content__cardsection">
		<div class="card__slider">
			<div class="card__img"><img src="img/project/124/BK-124-1.jpg" alt=""></div>
			<div class="card__img"><img src="img/project/124/BK-124-2.jpg" alt=""></div>
			<div class="card__img"><img src="img/project/124/BK-124-3.jpg" alt=""></div>
		</div>
		<div class="card__data">
			<div class="card__params">
				<!-- <a href="#">проект БК-124</a> -->
				<div class="card__square">
					<p>Площадь 124 М<sup>2</sup> </p>
				</div>
			</div>
			<div class="card__praise">
				<div class="Card__sum">
					<p><span>Бревно</span> <span>1,99 мил.₽</span></p>
					<p><span>Брус</span> <span>4,9 мил.₽</span></p>
				</div>
			</div>
		</div>
	</div>
</section>

	</div>
</div>
		<!-- Footer -->
		<div class="content__popap popap" id="popup1">
    <a href="#header" class="popap__area"></a>
    <div class="popap__body">
        <div class="popap__content">
            <a href="#header" class="popap__close">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 294.843 294.843" style="enable-background:new 0 0 294.843 294.843;" xml:space="preserve">
                    <g>
                        <path d="M147.421,0C66.133,0,0,66.133,0,147.421s66.133,147.421,147.421,147.421c38.287,0,74.567-14.609,102.159-41.136
                            c2.389-2.296,2.464-6.095,0.167-8.483c-2.295-2.388-6.093-2.464-8.483-0.167c-25.345,24.367-58.672,37.786-93.842,37.786
                            C72.75,282.843,12,222.093,12,147.421S72.75,12,147.421,12s135.421,60.75,135.421,135.421c0,16.842-3.052,33.273-9.071,48.835
                            c-1.195,3.091,0.341,6.565,3.432,7.761c3.092,1.193,6.565-0.341,7.761-3.432c6.555-16.949,9.879-34.836,9.879-53.165
                            C294.843,66.133,228.71,0,147.421,0z"/>
                        <path d="M167.619,160.134c-2.37-2.319-6.168-2.277-8.485,0.09c-2.318,2.368-2.277,6.167,0.09,8.485l47.236,46.236
                            c1.168,1.143,2.683,1.712,4.197,1.712c1.557,0,3.113-0.603,4.288-1.803c2.318-2.368,2.277-6.167-0.09-8.485L167.619,160.134z"/>
                        <path d="M125.178,133.663c1.171,1.171,2.707,1.757,4.243,1.757s3.071-0.586,4.243-1.757c2.343-2.343,2.343-6.142,0-8.485
                            L88.428,79.942c-2.343-2.343-6.143-2.343-8.485,0c-2.343,2.343-2.343,6.142,0,8.485L125.178,133.663z"/>
                        <path d="M214.9,79.942c-2.343-2.343-6.143-2.343-8.485,0L79.942,206.415c-2.343,2.343-2.343,6.142,0,8.485
                            c1.171,1.171,2.707,1.757,4.243,1.757s3.071-0.586,4.243-1.757L214.9,88.428C217.243,86.084,217.243,82.286,214.9,79.942z"/>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                </svg>

            </a>
            <div class="popap__title"><h2 class="popap__titlehead">Заполните</h2><p>наш дизайнер свяжится с вами</p></div>
            <form action="" class="popap__form">
                <div class="popap__name">
                    <label for="popapNane">Имя:</label>
                    <input type="text" name="Name" id="popapNane">
                </div>
                <div class="popap__phone">
                    <label for="popapTel">Телефон:</label>
                    <input type="tel" value="+7" name="phone" id="popapTel">
                </div>
                <input type="button" value="Отправить">
            </form>
        </div>
    </div>
</div>
<?php
get_footer();