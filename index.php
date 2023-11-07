<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "ООО НПО “Верхнерусские коммунальные системы” это производственный комплекс, занимающийся изготовлением газовых котлов наружного размещения, систем канализации и водоснабжения. Заказать продукцию по ценам изготовителя вы можете на сайте, или по телефону +7 (938) 358-27-94");
$APPLICATION->SetPageProperty("title", "ООО НПО 'Верхнерусские коммунальные системы' - крупный производитель котлов КСУВ, систем канализаций и водоснабжения");
$APPLICATION->SetTitle("Котлы наружного размещения, системы канализации и водоснабжения - ООО НПО 'Верхнерусские коммунальные системы'");
?>


<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"under-header", 
	array(
		"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",
		"VIEW_MODE" => "TEXT",
		"SHOW_PARENT_NAME" => "Y",
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "1",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_CODE" => "",
		"SECTION_URL" => "",
		"COUNT_ELEMENTS" => "Y",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
		"TOP_DEPTH" => "2",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_USER_FIELDS" => array(
			0 => "UF_ALTERNATIVE_NAME",
			1 => "UF_ALTERNATIVE_IMG",
			2 => "",
		),
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_NOTES" => "",
		"CACHE_GROUPS" => "Y",
		"COMPONENT_TEMPLATE" => "under-header",
		"FILTER_NAME" => "sectionsFilter",
		"CACHE_FILTER" => "N"
	),
	false
);?>



<section class="wrapper wrapper-content">
	<div class="inner">
		<div class="content-title wow fadeInUp">
			<div class="text">
				<span>КАТАЛОГ НАШЕЙ ПРОДУКЦИИ</span>
				<p>Все виды продукции которая производится нами</p>
			</div>
		</div>
	</div>
	
	<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list","large-sections",
	Array(
			"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",		
			"VIEW_MODE" => "TEXT",
			"SHOW_PARENT_NAME" => "Y",
			"IBLOCK_TYPE" => "catalog",
			"IBLOCK_ID" => "1",
			"SECTION_ID" => $_REQUEST["SECTION_ID"],
			"SECTION_CODE" => "",
			"SECTION_URL" => "",
			"COUNT_ELEMENTS" => "Y",
			"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
			"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
			"TOP_DEPTH" => "2",
			"SECTION_FIELDS" => "",
			"SECTION_USER_FIELDS" => "",
			"ADD_SECTIONS_CHAIN" => "Y",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "36000000",
			"CACHE_NOTES" => "",
			"CACHE_GROUPS" => "Y"
		)		
	);?>
</section>



<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath($dir."/include/template/facts-about.php"),Array(),Array("MODE"=>"html"));?>

<section class="wrapper wrapper-about">
	<div class="inner">
		<div class="box">
			<div class="description">
				<ul class="tabs wow fadeInDown" data-about-tabs>
					<li><a data-href="tab-1" class="active">Отопительное<br> оборудование</a></li>
					<li><a data-href="tab-2">Канализационные<br> системы</a></li>
					<li><a data-href="tab-3">Водоотвод и<br> дренаж</a></li>
				</ul>
				<div class="block wow fadeInLeft active tab-1">
					<div class="title">Отопительное оборудование</div>
					<div class="text">
						Для систем автономного отопления и горячего водоснабжения НПО «Верхнерусские коммунальные системы» выпускает газовые котлы наружного размещения КСУВ повышенной эффективности.
						<br><br>
						Область применения котлов – жилые, общественные (школы, больницы, объекты соцкультбыта) и административные здания в сельской местности. Многолетняя работа в области отопления и водоснабжения и детальное знакомство с нуждами клиентов нашло отражение, как в конструкции котлов, так и в предлагаемых решениях по устройству систем.
						<br><br>
						Экономичная работа котлов обеспечивается за счет специальной атмосферной модулируемой газовой горелки работающей на природном газе низкого давления
					</div>
				</div>
				<div class="block animated fadeInLeft tab-2">
					<div class="title">Канализационные системы</div>
					<div class="text">Прочность достигаемая за счет использования качественных материалов и трёхслойной структуры – снаружи полипропилен (РР), обладающий высокими эксплуатационными характеристиками (износостойкость, высокая ударная вязкость, долговременная 
					<br><br>
					термостабильность, улучшенные антистатические свойства), внутри наполнитель, обладающий повышенной упругостью и низкой плотностью..
					<br><br>
					Устойчивость к химическому воздействию бытовых отходов гарантирует срок эксплуатации около пятидесяти лет.</div>
				</div>
				<div class="block animated fadeInLeft tab-3">
					<div class="title">Водоотвод и дренаж</div>
					<div class="text">Под воздействием осадков, собирающихся с крыш домов, происходит разрушение почвы, что негативно сказывается на фундаменте дома, вызывая подмокание фундамента и окружающей растительности на приусадебном участке.
					<br><br>
					Проблема решается приминением системы ливневой канализации для сбора поверхностных вод. Водосборная система комплексно решает проблемы водоотвода дождевых и грунтовых вод с больших площадей с минимальными горизонтальными уклонами.
					<br><br>	
					Фирменная гарантия на фасонные детали системы до 50 лет. Элементы сбора и отвода ливневых вод выполнены из полимерных материалов усиленной прочности, обеспечивающих легкость при монтаже, высоконадежную и долговечную систему.</div>
				</div>
			</div>
			<div class="images active tab-1 wow fadeInRight">
				<div class="img"><img src="/design/img/prdc-item-1.png" alt="Изображение котлов и комплектующих" title="Котлы и комплектующие" ></div>
				<a onclick="showModal('#modal-send');" class="all-btn"><span>Заказать</span></a>
			</div>
			<div class="images tab-2 animated fadeInRight">
				<div class="img"><img src="/design/img/prdc-item-2.png" alt="Изображение канализационных труб и фитингов" title="Канализационные трубы и фитинги" ></div>
				<a onclick="showModal('#modal-send');" class="all-btn"><span>Заказать</span></a>
			</div>
			<div class="images tab-3 animated fadeInRight">
				<div class="img"><img src="/design/img/prdc-item-3.png" alt="Изображение водосборных систем" title="Водосборные системы" ></div>
				<a onclick="showModal('#modal-send');" class="all-btn"><span>Заказать</span></a>
			</div>
		</div>
	</div>
</section>
<section class="wrapper wrapper-about-text">
	<div class="inner">
		<div class="title">
			<span>Производим инженерные системы для отопления и водоснабжения</span>
			<a href="/about/">Подробнее о производстве</a>
		</div>
		<div class="text">
			Верхнерусские Коммунальные Системы с 1984 года плодотворно решают инженерные проблемы в области коммунального хозяйства.
			Предприятие производит трубопровод из полипропилена PP и фитинги для монтажа полипропиленовых труб для внутренней и наружной канализации. Трубы для холодного водоснабжения, наружной канализации и дренажа из полипропилена а также широкий ассортимент компрессионных фитингов для холодного водоснабжения.
			<br><br>
			Более 20 лет выпускаются отопительные системы, в частности котлы наружного размещения широкой линейки мощностей. Все отопительные котлы сертифицированны и запатентованны. Котлы КСУВ учитывают особенности и условия газоснабжения в России. Срок службы отопительной техники свыше 15 лет.
		</div>
	</div>
</section>

<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("/include/template/new-form.php"),Array(),Array("MODE"=>"html"));?>

<?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath($dir."/include/template/about-template.php"),Array(),Array("MODE"=>"html"));?>




<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>