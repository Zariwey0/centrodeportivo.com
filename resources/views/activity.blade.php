@extends('layouts.home')
@section('title', 'Centro Deportivo Lisleta - Home')
@section('description', 'pruebita buena jodio')
@section('keywords', 'palabras clave y tal')

@section('content')

<?php

use Intervention\Image\ImageManager;
include('scripts/funciones.php');
$types = DB::table('activities_type')->pluck('name','id');
$activities = DB::table('activities')->select('id','name')->orderBy('name')->get();

//Aquí buscamos las actividades para enlazar directamente con la anterior y la siguiente de la lista
for($i = 0; $i < count($activities); $i++){
	if ($activities[$i]->name == $activity->name){
		if($i == 0){
			$prev = $activities[count($activities)-1]->name;
			$next = $activities[$i+1]->name;
			break;
		}elseif($i == count($activities)-1){
			$prev = $activities[$i-1]->name;
			$next = $activities[0]->name;
			break;
		}else{
			$prev = $activities[$i-1]->name;
			$next = $activities[$i+1]->name;
			break;
		}
	}
}

//Buscamos actividades del mismo tipo para mostrarlas al usuario
$relateds = DB::table('activities')->where('id_type','=',$activity->id_type)->where('id','<>',$activity->id)->orderBy('name')->take(3)->get();

$schedule = DB::table('schedule')->select('id','monitor')->where('activity','=',$activity->name)->get();

?>

<div class="padding-top-100">
			<!-- contain main informative part of the site -->
			<main id="main" role="main">
                <!-- page banner -->
				
				<!-- port single -->
				<section class="port-single padding-top-100">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 text-center">
								<a href="../activity/{{$prev}}" class="prev"><i class="fa fa-angle-left"></i></a>
								<a href="../activities" class="dashboard"><i class="fa fa-th"></i></a>
								<a href="../activity/{{$next}}" class="next"><i class="fa fa-angle-right"></i></a>
							</div>
						</div>
						<div class="row text-upercase">
							<div class="col-xs-12 text-center">
							<?php
								echo '<h2>'.$activity->name.'</h2>';
								echo '<p>'.$types[$activity->id_type].'</p>';
								//echo $index;
								//echo count($activities);
								//echo $first;
							?>
								
								
							</div>
						</div>
						<div class="row padding-bottom-20">
							<div class="col-xs-12 col-sm-4 col-md-4">
								<?php
									echo '<img src="'.Image::make($activity->image)->resize(500, null, function ($constraint) {$constraint->aspectRatio();})->crop(350,350)->encode("data-url").'" alt="image description" class="img-responsive">';
								?>
							</div>
							<!--
							<div class="col-xs-12 col-sm-4 col-md-4">
								<h3>PROJECT INFO</h3>
								<ul>
									<li>
										<i class="fa fa-user"></i> <strong>Client Name:</strong> Jues Harber
									</li>
									<li>
										<i class="fa fa-calendar"></i> <strong>Published Date: </strong> 30 Jan, 2015
									</li>
									<li>
										<i class="fa fa-tags"></i> <strong>Category:</strong> <a href="#">Web Design,</a> <a href="#">Logo,</a> <a href="#">Graphics,</a> <a href="#">3D Design</a>
									</li>
								</ul>

							</div>
							-->
							<div class="col-xs-12 col-sm-4 col-md-8 padding-top-10">
								<div></div>
								<h3>Acerca de esta actividad</h3>
								<p>{{$activity->description}}</p>
							</div>
							
						</div>

					</div>
				</section>
				<aside class="port-aside bg-grey dark-bottom-border padding-top-20 padding-bottom-90">
                   <div class="container">
                       <div class="row">
                            <!-- page heading small -->
                            <header class="page-heading left-align col-xs-12 col-md-12">
                                <h2 class="lime text-capitalize font-light">Horario</h2>
                            </header>
                       </div>
                    </div>
                    <div class="container">
                        <div class="row">

						    <table id="table2"
						    		data-toolbar="#toolbar"
						           	data-search="true"
						           	data-show-toggle="true"
						           	data-show-columns="true"
						           	data-show-export="true"
						           	data-detail-view="true"
						           	data-sort-name="day"
						           	data-detail-formatter="detailFormatter"
						           	data-minimum-count-columns="2"
						           	data-pagination="true"
						           	data-id-field="id"
						           	data-page-list="[10, 25, 50, 100, ALL]"
						           	data-response-handler="responseHandler">
						    </table>

                        </div>
                    </div>
				</aside>
				<!-- port aside -->
				<aside class="port-aside bg-grey dark-bottom-border padding-top-20 padding-bottom-90">
                   <div class="container">
                       <div class="row">
                            <!-- page heading small -->
                            <header class="page-heading left-align col-xs-12 col-md-12">
                                <h2 class="lime text-capitalize font-light">Actividades relacionadas</h2>
                            </header>
                       </div>
                    </div>
                    <div class="container">
                        <div class="row">
                        <?php
                        	foreach($relateds as $related){
                        		echo '<div class="col-xs-12 col-sm-4">
                                <div class="portfolio-block nospace">
                                    <div class="box">
                                        <div class="over">
                                            <div class="holder">
                                                <div class="frame">
                                                    <div class="over-frame">
                                                        <strong class="title upper">'.$related->name.'</strong>
                                                        <p>'.$types[$related->id_type].'</p>
                                                    </div>
                                                </div>
                                            </div>
											<a href="../'.$related->image.'" class="search lightbox"><i class="fa fa-search"></i></a>
											<a href="../activity/'.$related->name.'" class="link"><i class="fa fa-link"></i></a>
										</div>
										<img src="'.Image::make($related->image)->resize(500, null, function ($constraint) {$constraint->aspectRatio();})->crop(350,350)->encode("data-url").'" alt="image description">
                                    </div>
                                </div>
                            </div>';

                        	}

                        ?>



                        </div>
                    </div>
				</aside>
			</main>
			</div>
@stop

@section('scripts')



var weekdays = {0: "Domingo", 1: "Lunes", 2: "Martes", 3: "Miércoles", 4: "Jueves", 5: "Viernes", 6: "Sábado"};

var hours = {1: "9:00", 2: "10:00", 3: "11:00", 4: "12:00", 5: "13:00", 6: "14:00", 7: "15:00", 8: "16:00", 9: "17:00", 10: "18:00", 11: "19:00", 12: "20:00", 13: "21:00"};

var schedule = <?php echo json_encode($schedule); ?>;

//var yeah = [{day: 'Lunes', hour: '9:00', monitor: '<a href="www.marca.com">Eustaquio</a>'}, {day: 'Viernes', hour: '11:00', monitor: 'dsfasd'}];
//name: hours[Math.ceil(29/28)],
//price: weekdays[16%7]

var i, leng;
var text = '';
var aux = [];
var web1 = '<a href=\\"http://www.marca.com\\">';
var web2 = '</a>';

for (i=0, leng = schedule.length; i<leng; ++i){
	text = '[{"day":';
	text += '"' + weekdays[schedule[i].id%7] + '"';
	text += ',"hour":';
	text += '"' + hours[Math.ceil(schedule[i].id/28)] + '","monitor":';
	text += '"' + web1 + schedule[i].monitor + web2 + '"';
	text += '}]';
	aux = aux.concat(JSON.parse(text));
}

$('#table2').bootstrapTable({
    columns: [{
        field: 'day',
        sortable: true,
        order: 'desc',
        sorter: 'daySorter',
        title: 'Día'
    }, {
        field: 'hour',
        sortable: true,
        order: 'desc',
        sorter: 'hourSorter',
        title: 'Hora'
    }, {
        field: 'monitor',
        sortable: true,
        order: 'desc',
        title: 'Monitor'
    }],
    data: aux
});
	/*

	    var $table = $('#table'),
	        $remove = $('#remove'),
	        selections = [];
	    function initTable() {
	        $table.bootstrapTable({
	            height: getHeight(),
	            columns: [
	                [
	                    {
	                        field: 'state',
	                        checkbox: true,
	                        rowspan: 2,
	                        align: 'center',
	                        valign: 'middle'
	                    }, {
	                        title: 'Item ID',

	                        field: 'id',
	                        rowspan: 2,
	                        order: 'asc',
	                        align: 'center',
	                        valign: 'middle',
	                        sortable: true,

	                        footerFormatter: totalTextFormatter
	                    }, {
	                        title: 'Item Detail',
	                        colspan: 3,
	                        align: 'center'
	                    }
	                ],
	                [
	                    {
	                        field: 'name',
	                        title: 'Item Name',
	                        sortable: true,
	                        editable: true,
	                        footerFormatter: totalNameFormatter,
	                        align: 'center'
	                    }, {
	                        field: 'price',
	                        title: 'Item Price',
	                        sortable: true,
	                        align: 'center',
	                        editable: {
	                            type: 'text',
	                            title: 'Item Price',
	                            validate: function (value) {
	                                value = $.trim(value);
	                                if (!value) {
	                                    return 'This field is required';
	                                }
	                                if (!/^\$/.test(value)) {
	                                    return 'This field needs to start width $.'
	                                }
	                                var data = $table.bootstrapTable('getData'),
	                                    index = $(this).parents('tr').data('index');
	                                console.log(data[index]);
	                                return '';
	                            }
	                        },
	                        footerFormatter: totalPriceFormatter
	                    }, {
	                        field: 'operate',
	                        title: 'Item Operate',
	                        align: 'center',
	                        events: operateEvents,
	                        formatter: operateFormatter
	                    }
	                ]
	            ]
	        });
	        // sometimes footer render error.
	        setTimeout(function () {
	            $table.bootstrapTable('resetView');
	        }, 200);
	        $table.on('check.bs.table uncheck.bs.table ' +
	                'check-all.bs.table uncheck-all.bs.table', function () {
	            $remove.prop('disabled', !$table.bootstrapTable('getSelections').length);
	            // save your data, here just save the current page
	            selections = getIdSelections();
	            // push or splice the selections if you want to save all data selections
	        });
	        $table.on('expand-row.bs.table', function (e, index, row, $detail) {
	            if (index % 2 == 1) {
	                $detail.html('Loading from ajax request...');
	                $.get('LICENSE', function (res) {
	                    $detail.html(res.replace(/\n/g, '<br>'));
	                });
	            }
	        });
	        $table.on('all.bs.table', function (e, name, args) {
	            console.log(name, args);
	        });
	        $remove.click(function () {
	            var ids = getIdSelections();
	            $table.bootstrapTable('remove', {
	                field: 'id',
	                values: ids
	            });
	            $remove.prop('disabled', true);
	        });
	        $(window).resize(function () {
	            $table.bootstrapTable('resetView', {
	                height: getHeight()
	            });
	        });
	    }

	    function getIdSelections() {
	        return $.map($table.bootstrapTable('getSelections'), function (row) {
	            return row.id
	        });
	    }
	    function responseHandler(res) {
	        $.each(res.rows, function (i, row) {
	            row.state = $.inArray(row.id, selections) !== -1;
	        });
	        return res;
	    }
	    
	    function operateFormatter(value, row, index) {
	        return [
	            '<a class="like" href="javascript:void(0)" title="Like">',
	            '<i class="glyphicon glyphicon-heart"></i>',
	            '</a>  ',
	            '<a class="remove" href="javascript:void(0)" title="Remove">',
	            '<i class="glyphicon glyphicon-remove"></i>',
	            '</a>'
	        ].join('');
	    }
	    window.operateEvents = {
	        'click .like': function (e, value, row, index) {
	            alert('You click like action, row: ' + JSON.stringify(row));
	        },
	        'click .remove': function (e, value, row, index) {
	            $table.bootstrapTable('remove', {
	                field: 'id',
	                values: [row.id]
	            });
	        }
	    };
	    function totalTextFormatter(data) {
	        return 'Total';
	    }
	    function totalNameFormatter(data) {
	        return data.length;
	    }
	    function totalPriceFormatter(data) {
	        var total = 0;
	        $.each(data, function (i, row) {
	            total += +(row.price.substring(1));
	        });
	        return '$' + total;
	    }
	    function getHeight() {
	        return $(window).height() - $('h1').outerHeight(true);
	    }
	    $(function () {
	        var scripts = [
	                location.search.substring(1) || 'assets/bootstrap-table/src/bootstrap-table.js',
	                'assets/bootstrap-table/src/extensions/export/bootstrap-table-export.js',
	                'http://rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js',
	                'assets/bootstrap-table/src/extensions/editable/bootstrap-table-editable.js',
	                'http://rawgit.com/vitalets/x-editable/master/dist/bootstrap3-editable/js/bootstrap-editable.js'
	            ],
	            eachSeries = function (arr, iterator, callback) {
	                callback = callback || function () {};
	                if (!arr.length) {
	                    return callback();
	                }
	                var completed = 0;
	                var iterate = function () {
	                    iterator(arr[completed], function (err) {
	                        if (err) {
	                            callback(err);
	                            callback = function () {};
	                        }
	                        else {
	                            completed += 1;
	                            if (completed >= arr.length) {
	                                callback(null);
	                            }
	                            else {
	                                iterate();
	                            }
	                        }
	                    });
	                };
	                iterate();
	            };
	        eachSeries(scripts, getScript, initTable);
	    });
	    function getScript(url, callback) {
	        var head = document.getElementsByTagName('head')[0];
	        var script = document.createElement('script');
	        script.src = url;
	        var done = false;
	        // Attach handlers for all browsers
	        script.onload = script.onreadystatechange = function() {
	            if (!done && (!this.readyState ||
	                    this.readyState == 'loaded' || this.readyState == 'complete')) {
	                done = true;
	                if (callback)
	                    callback();
	                // Handle memory leak in IE
	                script.onload = script.onreadystatechange = null;
	            }
	        };
	        head.appendChild(script);
	        // We handle everything using the script element injection
	        return undefined;
	    }
*/


		function detailFormatter(index, row) {
	        var html = [];
	        $.each(row, function (key, value) {
	            html.push('<p><b>' + key + ':</b> ' + value + '</p>');
	        });
	        return html.join('');
	    }

	    function daySorter(a, b) {
	        var daysweek = {"Domingo": 7, "Lunes": 1, "Martes": 2, "Miércoles": 3, "Jueves": 4, "Viernes": 5, "Sábado": 6};

	        if (daysweek[a] > daysweek[b]) return 1;
	        if (daysweek[a] < daysweek[b]) return -1;
	        return 0;
	    }

	    function hourSorter(a, b) {
	        //a = +a.substring(1); // remove $
	        //b = +b.substring(1);
	        a = parseInt(a.split(':',1)[0]);
	        b = parseInt(b.split(':',1)[0]);
	        //var daysweek = {"Domingo": 7, "Lunes": 1, "Martes": 2, "Miércoles": 3, "Jueves": 4, "Viernes": 5, "Sábado": 6};

	        if (a > b) return 1;
	        if (a < b) return -1;
	        return 0;
	    }

@stop