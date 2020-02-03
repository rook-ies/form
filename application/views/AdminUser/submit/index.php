<!-- amCharts javascript sources -->
<script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/serial.js"></script>


<!-- amCharts javascript code -->
<script type="text/javascript">
	AmCharts.makeChart("chartdiv",
		{
			"type": "serial",
			"categoryField": "category",
			"rotate": true,
			"startDuration": 1,
			"categoryAxis": {
				"gridPosition": "start"
			},
			"trendLines": [],
			"graphs": [
				{
					"fillAlphas": 1,
					"gapPeriod": 1,
					"id": "prioritas",
					"title": "graph 1",
					"type": "column",
					"valueField": "graph 1"
				}
			],
			"guides": [
				{
					"above": true,
					"dashLength": 5,
					"id": "Guide-1",
					"inside": true,
					"label": "max allowed value",
					"labelRotation": 90,
					"lineAlpha": 1,
					"lineColor": "#ff0000",
					"toValue": 9,
					"value": 9
				}
			],
			"valueAxes": [
				{
					"baseValue": 1,
					"id": "nilai",
					"maximum": 9,
					"minimum": 1,
					"precision": 2,
					"title": "Nilai",
					"titleRotation": -2
				}
			],
			"allLabels": [],
			"balloon": {
				"animationDuration": 0
			},
			"titles": [
				{
					"id": "Title-1",
					"size": 15,
					"text": "Nilai Prioritas layanan"
				}
			],
			"dataProvider": [
                <?php foreach($chart as $var){ ?>
                    {
    					"category": "<?php echo $var['QUESTION']; ?>",
    					"graph 1": "<?php echo $var['PRIORITY']; ?>"
    				},
                <?php } ?>
			]
		}
	);
</script>
<!-- amCharts javascript code -->
		<script type="text/javascript">
			AmCharts.makeChart("chartdiv2",
				{
					"type": "serial",
					"categoryField": "category",
					"startDuration": 1,
					"categoryAxis": {
						"gridPosition": "start"
					},
					"trendLines": [],
					"graphs": [
						{
							"fillAlphas": 1,
							"gapPeriod": 4,
							"id": "AmGraph-2",
							"legendAlpha": 0,
							"title": "",
							"type": "column",
							"valueField": "graph 1"
						}
					],
					"guides": [
						{
							"above": true,
							"angle": 0,
							"dashLength": 5,
							"id": "Guide-1",
							"inside": true,
							"label": "max allowed value",
							"labelRotation": 90,
							"lineAlpha": 1,
							"lineColor": "#ff0000",
							"value": 4
						}
					],
					"valueAxes": [
						{
							"axisFrequency": 0,
							"id": "ValueAxis-1",
							"maximum": 4,
							"minimum": 0,
							"minMaxMultiplier": 0,
							"precision": 2,
							"offset": -1,
							"title": "Nilai"
						}
					],
					"allLabels": [],
					"balloon": {},
					"titles": [
						{
							"id": "Title-1",
							"size": 15,
							"text": "Nilai Indeks Kepuasan Masyarakat"
						}
					],
					"dataProvider": [
                        <?php foreach($chart as $var){ ?>
                            {
            					"category": "<?php echo $var['QUESTION']; ?>",
            					"graph 1": "<?php echo $var['TKM']; ?>"
            				},
                        <?php } ?>
					]
				}
			);
		</script>
<div class="main-card mb-3 card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
              	<div class="box box-info">
                    <div class="box-header with-border">
                      	<h3 class="box-title">Data graph <?php echo $titleForm['TITLE']; ?></h3>
                        <?php echo anchor(site_url('DashboardAdminBiasa'), 'back'); ?>
                    </div>
        			<div class="box-body">
                        <div id="chartdiv" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
                        <div id="chartdiv2" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
                        <table class="table table-striped">
                            <tr>
        						<th>TKM question</th>
                                <th>TKM nilai</th>
                                <th>TKM prioritas</th>
                            </tr>
                            <?php foreach($chart as $var){ ?>
                            <tr>
                                <!-- <td><?php print_r($var) ?></td> -->
                                <td><?php echo $var['QUESTION']; ?></td>
                                <td><?php echo $var['TKM']; ?></td>
                                <td><?php echo $var['PRIORITY']; ?></td>
                            </tr>
                            <?php } ?>
                        </table>
        			</div>
        		</div>
            </div>
        </div>
    </div>
</div>
<div class="main-card mb-3 card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
              	<div class="box box-info">
                    <div class="box-header with-border">
                      	<h3 class="box-title">Semua data <?php echo $titleForm['TITLE']; ?></h3>
                    </div>
        			<div class="box-body">
                        <table class="table table-striped">
                            <tr>
        						<th>Nomer RESPONDEN</th>
        						<!-- <th>ID FORM</th> -->
        						<th>UNIT EXPECTANCY</th>
        						<th>PLACE EXPECTANCY</th>
                            </tr>
                            <?php foreach($submit as $S){ ?>
                            <tr>
        						<td><a href="<?php echo site_url() ?>/DashboardAdminBiasa/submitDetail/<?php echo $S['ID_SUBMIT']; ?>"><?php echo $S['ID_SUBMIT']; ?></td>
        						<!-- <td><?php echo $S['ID_FORM']; ?></td> -->
        						<td><?php echo $S['UNIT_EXPECTANCY']; ?></td>
        						<td><?php echo $S['PLACE_EXPECTANCY']; ?></td>
                            </tr>
                            <?php } ?>
                        </table>
                        <?php echo $this->pagination->create_links();	?>
        			</div>
        		</div>
            </div>
        </div>
    </div>
</div>
