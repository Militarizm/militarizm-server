<div class="well" style="padding: 8px 0;">
    <ul class="nav nav-list">
		<li <?if($sidebar_menu=="home"){?>class="active"<?}?>><a href="<?=URL::base()?>">Главная</a></li>

	    <li class="nav-header">Об игре</li>
   		<li <?if($sidebar_menu=="howto"){?>class="active"<?}?>><a href="<?=URL::base()?>howto">Как тут играть?</a></li>
	    <li <?if($sidebar_menu=="video"){?>class="active"<?}?>><a href="#">Видеоуроки</a></li>
	    <li <?if($sidebar_menu=="faq"){?>class="active"<?}?>><a href="#">FAQ</a></li>
   		<li <?if($sidebar_menu=="docs"){?>class="active"<?}?>><a href="#">Документация</a></li>
   		<li <?if($sidebar_menu=="articles"){?>class="active"<?}?>><a href="#">Статьи</a></li>

	    <li class="nav-header">Профайл</li>
		<li <?if($sidebar_menu=="profile"){?>class="active"<?}?>><a href="#">Изменить данные</a></li>
		<li <?if($sidebar_menu=="mygames"){?>class="active"<?}?>><a href="#">Мои игры</a></li>
		<li <?if($sidebar_menu=="mystats"){?>class="active"<?}?>><a href="#">Статистика</a></li>
		<li <?if($sidebar_menu=="rating"){?>class="active"<?}?>><a href="#">Рейтинг игроков</a></li>

	    <li class="nav-header">Поля сражений</li>
		<li <?if($sidebar_menu=="newgames"){?>class="active"<?}?>><a href="#">Вакансии</a></li>
		<li <?if($sidebar_menu=="newmaps"){?>class="active"<?}?>><a href="#">Новые карты</a></li>

	    <li class="nav-header">Общение</li>
		<li <?if($sidebar_menu=="forum"){?>class="active"<?}?>><a href="#">Форум</a></li>
		<li <?if($sidebar_menu=="clans"){?>class="active"<?}?>><a href="#">Кланы</a></li>
    </ul>
</div>
